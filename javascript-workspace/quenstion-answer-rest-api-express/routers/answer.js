const express = require("express");

const { getAnswer, getAnswersByQuestion, addNewAnswerToQuestion, editAnswer, deleteAnswer, likeAnswer, undoLikeAnswer } = require("../controllers/answer");
const { getAccessToRoute, getAnswerOwnerAccess } = require("../middlewares/authorization/auth");
const { checkQuestionAndAnswerExist, checkQuestionExist } = require("../middlewares/database/checkExist");

const router = express.Router({ mergeParams: true }); // Önceki route'dan gelen parametreleri hafızanda tut

router.get("/", checkQuestionExist, getAnswersByQuestion);
router.get("/:answer_id", checkQuestionAndAnswerExist, getAnswer);
router.post("/add", [getAccessToRoute, checkQuestionExist], addNewAnswerToQuestion);
router.put("/edit/:answer_id", [checkQuestionAndAnswerExist, getAccessToRoute, getAnswerOwnerAccess], editAnswer);
router.delete("/delete/:answer_id", [checkQuestionAndAnswerExist, getAccessToRoute, getAnswerOwnerAccess], deleteAnswer);
router.put("/like/:answer_id", [checkQuestionAndAnswerExist, getAccessToRoute], likeAnswer);
router.put("/undo-like/:answer_id", [checkQuestionAndAnswerExist, getAccessToRoute], undoLikeAnswer);

module.exports = router;