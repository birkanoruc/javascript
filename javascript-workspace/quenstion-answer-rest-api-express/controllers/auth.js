const errorWrapper = require("../helpers/error/errorWrapper");
const CustomError = require("../helpers/error/CustomError");
const User = require("../models/User");
const { sendJwtToClient } = require("../helpers/authorization/jwtHelpers");
const { validateUserInput, comparePassword } = require("../helpers/input/inputHelpers");
const sendEmail = require("../helpers/library/nodemailer");

const register = errorWrapper(
    async (req, res, next) => {
        const user = await User.create(req.body);
        sendJwtToClient(user, res);
    }
);

const login = errorWrapper(
    async (req, res, next) => {

        const { email, password } = req.body;

        if (!validateUserInput(email, password)) {
            return next(new CustomError("Please check your inputs", 400));
        }

        const user = await User.findOne({ email }).select("+password");

        if (!user) {
            return next(new CustomError("User not found", 404));
        }

        if (!comparePassword(password, user.password)) {
            return next(new CustomError("Invalid credentials", 401));
        }

        sendJwtToClient(user, res);
    }
);

const logout = errorWrapper(
    async (req, res, next) => {
        const { NODE_ENV } = process.env;

        res
            .status(200)
            .cookie({
                httpOnly: true,
                expires: new Date(Date.now()),
                secure: NODE_ENV === "development" ? false : true
            })
            .json({
                success: true,
                message: "Logout succesfuly"
            });
    }
);

const profile = errorWrapper(
    async (req, res, next) => {
        res
            .status(200)
            .json({
                success: true,
                data: {
                    id: req.user.id,
                    name: req.user.name
                }
            });
    }
);

const edit = errorWrapper(
    async (req, res, next) => {

        const information = req.body;

        const user = await User.findByIdAndUpdate(req.user.id, information, {
            new: true,
            runValidators: true,
            strict: true
        });

        res.status(200)
            .json({
                success: true,
                message: "Profile edit successfuly",
                data: user
            });

    }
);

const imageUpload = errorWrapper(
    async (req, res, next) => {

        const user = await User.findByIdAndUpdate(req.user.id, {
            "profileImage": req.savedImage
        }, {
            new: true,
            runValidators: true
        });
        res.status(200)
            .json({
                success: true,
                message: "Photo Upload Successful",
                data: user
            });

    }
);

const forgotPassword = errorWrapper(
    async (req, res, next) => {
        const email = req.body.email;
        const user = await User.findOne({ email: email });

        if (!user) {
            return next(new CustomError("User not found!", 404));
        }

        const token = user.generateCryptoFromUserResetPassword();

        await user.save();

        const url = `http://localhost:${process.env.PORT}/api/auth/reset-password?token=${token}`;

        const emailTemplate = `
        <h3>Dou you want to reset your password?</h3>
        <h4>Reset your password:</h4>
        <p>This <a href='${url}' target='_blank'>link</a> expire in 1 hour.</p>
        `;

        try {
            await sendEmail({
                from: process.env.SMTP_AUTH_USER,
                to: email,
                subject: "Reset Your Password",
                html: emailTemplate
            });

            res
                .status(200)
                .json({
                    success: true,
                    message: "The token has been sent to your email"
                });

        } catch (err) {
            user.resetPasswordToken = undefined;
            user.resetPasswordExpire = undefined;
            await user.save();
            return next(new CustomError("Email could not be sent.", 500));
        }
    }
);

const resetPassword = errorWrapper(
    async (req, res, next) => {

        const { token } = req.query;
        const { password } = req.body;

        if (!token) {
            return next(new CustomError("Please provide a valid token.", 401));
        }

        let user = await User.findOne({
            resetPasswordToken: token,
            resetPasswordExpire: { $gt: Date.now() }
        });

        if (!user) {
            return next(new CustomError("Invalid token or session expired", 401));
        }

        user.password = password;
        user.resetPasswordToken = undefined;
        user.resetPasswordExpire = undefined;

        await user.save();

        res
            .status(200)
            .json({
                success: true,
                message: "Your password has been successfully reset."
            });
    }
);

module.exports = {
    register,
    profile,
    edit,
    login,
    logout,
    imageUpload,
    forgotPassword,
    resetPassword
}