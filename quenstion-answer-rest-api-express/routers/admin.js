const express = require('express');
const { getAccessToRoute, getAdminAccess } = require("../middlewares/authorization/auth");
const { checkUserExist } = require("../middlewares/database/checkExist");
const { blockUser, deleteUser } = require('../controllers/admin');

const router = express.Router();

router.put("/block/:id", [getAccessToRoute, getAdminAccess, checkUserExist], blockUser);
router.delete("/delete/:id", [getAccessToRoute, getAdminAccess, checkUserExist], deleteUser);

module.exports = router;