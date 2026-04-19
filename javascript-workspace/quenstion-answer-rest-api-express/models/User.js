const mongoose = require('mongoose');
const Schema = mongoose.Schema;
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const crypto = require('crypto');
const Question = require('./Question');

const UserSchema = new Schema({
    name: {
        type: String,
        required: [true, "Please provide a name"]
    },
    email: {
        type: String,
        required: [true, "Please provide a email"],
        unique: true,
        match: [
            /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
            "Please provide a valid email"
        ]
    },
    role: {
        type: String,
        default: "user",
        enum: ["user", "admin"]
    },
    password: {
        type: String,
        minlength: [6, "Please provide a password with min length 6"],
        required: [true, "Please provide a password"],
        select: false
    },
    createdAt: {
        type: Date,
        default: Date.now
    },
    title: {
        type: String,
    },
    about: {
        type: String,
    },
    place: {
        type: String,
    },
    webSite: {
        type: String,
    },
    profileImage: {
        type: String,
        default: "default.jpg"
    },
    blocked: {
        type: Boolean,
        default: false
    },
    resetPasswordToken: {
        type: String
    },
    resetPasswordExpire: {
        type: Date
    }
});

UserSchema.methods.generateJwtFromUser = function () {

    const { JWT_SECRET_KEY, JWT_EXPIRE } = process.env;

    const payload = {
        id: this._id,
        name: this.name
    }

    const token = jwt.sign(payload, JWT_SECRET_KEY, {
        expiresIn: JWT_EXPIRE
    });

    return token;
};

UserSchema.methods.generateCryptoFromUserResetPassword = function () {
    const randomHexString = crypto.randomBytes(15).toString("hex");
    const resetPasswordToken = crypto.createHash("SHA256").update(randomHexString).digest("hex");
    const { RESET_PASSWORD_EXPIRE } = process.env;
    this.resetPasswordToken = resetPasswordToken;
    this.resetPasswordExpire = Date.now() + parseInt(RESET_PASSWORD_EXPIRE);
    return resetPasswordToken;
}

UserSchema.pre("save", function (next) {
    if (!this.isModified("password")) {
        next();
    }

    bcrypt.genSalt(10, (err, salt) => {
        if (err) return next(err);

        bcrypt.hash(this.password, salt, (err, hash) => {
            if (err) return next(err);

            this.password = hash;
            next();
        });
    });
});

UserSchema.pre("deleteOne", { document: true, query: false }, async function (next) {
    await Question.deleteMany({
        user: this._id
    });
    next();
});

module.exports = mongoose.model("User", UserSchema);