const CustomError = require("../../helpers/error/CustomError");
const jwt = require("jsonwebtoken");
const User = require("../../models/User");
const Question = require("../../models/Question");
const Answer = require("../../models/Answer");
const { isTokenIncluded, getAccessTokenFromHeader } = require("../../helpers/authorization/jwtHelpers");
const errorWrapper = require("../../helpers/error/errorWrapper");

const getAccessToRoute = (req, res, next) => {
    // JWT doğrulama işlemleri burada yapılabilir

    const { JWT_SECRET_KEY } = process.env;

    if (!isTokenIncluded(req)) {
        return next(new CustomError("You are not authorized to access this route", 401)); //Burada çalışıyor
    }

    const access_token = getAccessTokenFromHeader(req);

    jwt.verify(access_token, JWT_SECRET_KEY, (err, decoded) => {
        if (err) {
            return next(new CustomError("You are not authorized to access this route", 401)); //Burada çalışıyor
        }

        req.user = {
            id: decoded.id,
            name: decoded.name,
        }
    })

    next();
};

const getAdminAccess = errorWrapper(async (req, res, next) => {
    const user = await User.findById(req.user.id);

    if (user.role !== "admin") {
        return next(new CustomError("Only admins can access this route", 403));
    }

    next();
});

const getQuestionOwnerAccess = errorWrapper(async (req, res, next) => {

    const userId = req.user.id;
    const questionId = req.params.id;

    const question = await Question.findById(questionId);

    if (question.user != userId) {
        return next(new CustomError("Only owner can handle this operation", 403));

    }
    return next();
});

const getAnswerOwnerAccess = errorWrapper(async (req, res, next) => {

    const userId = req.user.id;
    const answerId = req.params.answer_id;

    const answer = await Answer.findById(answerId);

    if (answer.user != userId) {
        return next(new CustomError("Only owner can handle this operation", 403));

    }
    return next();
});

module.exports = {
    getAccessToRoute,
    getAdminAccess,
    getQuestionOwnerAccess,
    getAnswerOwnerAccess
};