const errorWrapper = require("../helpers/error/errorWrapper");
const CustomError = require("../helpers/error/CustomError");
const User = require("../models/User");

const getUsers = errorWrapper(
    async (req, res, next) => {
        res
            .status(200)
            .json(res.queryResult);
    }
);

const getUser = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;

        const user = await User.findById(id);

        res
            .status(200)
            .json({
                success: true,
                data: user
            });
    }
);

module.exports = {
    getUsers,
    getUser
};