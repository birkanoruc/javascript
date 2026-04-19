const express = require('express');
const { getUser, getUsers } = require('../controllers/user');
const { checkUserExist } = require("../middlewares/database/checkExist");
const userQuery = require("../middlewares/query/userQuery");
const User = require("../models/User");

const router = express.Router();

router.get("/", userQuery(User), getUsers);
router.get("/:id", checkUserExist, getUser);

module.exports = router;