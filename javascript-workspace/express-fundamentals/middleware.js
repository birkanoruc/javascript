const accessControl = (req, res, next) => {
    console.log("middleware access control worked");

    const access = true;
    if (access) {
        next();
    } else {
        res.status("401").json({
            success: false,
            message: "You are not authorized"
        });
    }

};

const testControl = (req, res, next) => {
    console.log("middleware test control worked");
};

module.exports = { accessControl, testControl };