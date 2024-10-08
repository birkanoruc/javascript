const Answer = require("../../models/Answer");
const Question = require("../../models/Question");
const User = require("../../models/User");
const errorWrapper = require("../../helpers/error/errorWrapper");
const CustomError = require("../../helpers/error/CustomError");

const checkUserExist = errorWrapper(async (req, res, next) => {
    const { id } = req.params;

    const user = await User.findById(id);

    if (!user) {
        return next(new CustomError("User not found", 404));
    }

    next();

});

const checkQuestionExist = errorWrapper(async (req, res, next) => {
    const question_id = req.params.id || req.params.question_id;

    const question = await Question.findById(question_id);


    if (!question) {
        return next(new CustomError("Question not found!", 404));
    }
    next();

});

const checkQuestionAndAnswerExist = errorWrapper(async (req, res, next) => {
    const { answer_id, question_id } = req.params;

    const answer = await Answer.findOne({ _id: answer_id, question: question_id });

    if (!answer) {
        return next(new CustomError(`Answer Not Found with Answer Id : ${answer_id} Associated With This Question`, 404));
    }
    next();
});

module.exports = {
    checkQuestionAndAnswerExist,
    checkQuestionExist,
    checkUserExist
};