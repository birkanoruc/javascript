const sendJwtToClient = (user, res) => {

    const token = user.generateJwtFromUser();

    const { JWT_COOKIE, NODE_ENV } = process.env;

    return res
        .status(200)
        .cookie("access_token", token, {
            httpOnly: true,
            expires: new Date(Date.now() + parseInt(JWT_COOKIE) * 1000 * 60),
            secure: NODE_ENV === "development" ? false : true
        })
        .json({
            success: true,
            access_token: token,
            data: {
                name: user.name,
                email: user.email
            }
        });
}

const isTokenIncluded = (req) => {
    return (
        req.headers.authorization && req.headers.authorization.startsWith("Bearer:")
    )
};

const getAccessTokenFromHeader = (req) => {
    const auth = req.headers.authorization;
    const access_token = auth.split(" ")[1];
    return access_token;
}

module.exports = {
    sendJwtToClient,
    isTokenIncluded,
    getAccessTokenFromHeader
};