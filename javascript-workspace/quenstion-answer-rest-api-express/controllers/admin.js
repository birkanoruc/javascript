const errorWrapper = require("../helpers/error/errorWrapper");
const User = require("../models/User");

const deleteUser = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;

        const user = await User.findById(id);

        await user.deleteOne();

        res
            .status(200)
            .json({
                success: true,
                message: "Delete succesfully"
            });
    }
);

const blockUser = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;

        let user = await User.findById(id);

        user.blocked = !user.blocked;

        await user.save();

        res
            .status(200)
            .json({
                success: true,
                message: "Block & Unblock succesfully"
            });
    }
);

module.exports = {
    blockUser,
    deleteUser
};