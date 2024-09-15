const express = require('express');
const { register, profile, edit, login, logout, imageUpload, forgotPassword, resetPassword } = require('../controllers/auth');
const { getAccessToRoute } = require("../middlewares/authorization/auth");
const photoUpload = require("../helpers/library/multer");
const router = express.Router();

router.post("/register", register);
router.get("/profile", getAccessToRoute, profile);
router.put("/profile/edit", getAccessToRoute, edit);
router.post("/login", login);
router.get("/logout", getAccessToRoute, logout);
router.put("/upload", [getAccessToRoute, photoUpload.single("profileImage")], imageUpload);
router.post("/forgot-password", forgotPassword)
router.put("/reset-password", resetPassword)

module.exports = router;