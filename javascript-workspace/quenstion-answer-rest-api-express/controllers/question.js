const Question = require("../models/Question");
const errorWrapper = require("../helpers/error/errorWrapper");
const CustomError = require("../helpers/error/CustomError");

const getQuestions = errorWrapper(
    async (req, res, next) => {

        res
            .status(200)
            .json(res.queryResult);
    }
);

const askNewQuestion = errorWrapper(
    async (req, res, next) => {

        const information = req.body;

        const question = await Question.create({
            ...information,
            user: req.user.id
        });

        res
            .status(200)
            .json({
                success: true,
                message: "Question created successfuly",
                data: question
            });
    }
);

const getQuestion = errorWrapper(
    async (req, res, next) => {
        res
            .status(200)
            .json(res.queryResult);
    }
);

const editQuestion = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;
        const { title, content } = req.body;

        let question = await Question.findById(id);

        question.title = title;
        question.content = content;

        question = await question.save();

        res
            .status(200)
            .json({
                success: true,
                data: question
            });
    }
);

const deleteQuestion = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;

        await Question.findByIdAndDelete(id);

        res
            .status(200)
            .json({
                success: true,
                message: "Delete succesfully"
            });
    }
);

const likeQuestion = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;

        let question = await Question.findById(id);

        if (question.likes.includes(req.user.id)) {
            return next(new CustomError("You already liked this question", 400));
        }

        question.likes.push(req.user.id);
        question.likeCount = question.likes.length;

        await question.save();

        return res.status(200)
            .json({
                success: true,
                data: question
            });
    }
);

const undoLikeQuestion = errorWrapper(
    async (req, res, next) => {
        const { id } = req.params;

        let question = await Question.findById(id);

        if (!question.likes.includes(req.user.id)) {
            return next(new CustomError("You can not undo like operation this question", 400));
        }

        let index = question.likes.indexOf(req.user.id);

        question.likes.splice(index, 1);
        question.likeCount = question.likes.length;

        await question.save();

        return res.status(200)
            .json({
                success: true,
                data: question
            });
    }
);

module.exports = {
    askNewQuestion,
    getQuestions,
    getQuestion,
    editQuestion,
    deleteQuestion,
    likeQuestion,
    undoLikeQuestion
};