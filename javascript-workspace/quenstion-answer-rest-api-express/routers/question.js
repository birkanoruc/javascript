const express = require('express');
const router = express.Router();
const { getAccessToRoute, getQuestionOwnerAccess } = require("../middlewares/authorization/auth");
const { checkQuestionExist } = require("../middlewares/database/checkExist");
const { askNewQuestion, getQuestions, getQuestion, editQuestion, deleteQuestion, likeQuestion, undoLikeQuestion } = require('../controllers/question');
const questionQuery = require("../middlewares/query/questionsQuery");
const answerQuery = require("../middlewares/query/answerQuery");

const Question = require("../models/Question");
const answer = require("./answer");

router.get("/", questionQuery(Question, {
    population: {
        path: "user",
        select: "name profileImage"
    }
}), getQuestions);

router.get("/:id", checkQuestionExist, answerQuery(Question, {
    population: [
        {
            path: "user",
            select: "name profileImage"
        },
        {
            path: "answers",
            select: "content"
        }
    ]
}), getQuestion);
router.put("/edit/:id", [getAccessToRoute, checkQuestionExist, getQuestionOwnerAccess], editQuestion);
router.delete("/delete/:id", [getAccessToRoute, checkQuestionExist, getQuestionOwnerAccess], deleteQuestion);
router.put("/like/:id", [getAccessToRoute, checkQuestionExist], likeQuestion);
router.put("/undo-like/:id", [getAccessToRoute, checkQuestionExist], undoLikeQuestion);
router.post("/ask", getAccessToRoute, askNewQuestion);

router.use("/:question_id/answers", checkQuestionExist, answer);

module.exports = router;