const nodemailer = require('nodemailer');

const sendEmail = async (mailOptions) => {
    let transport = nodemailer.createTransport({
        host: process.env.SMTP_HOST,
        port: process.env.SMTP_PORT,
        auth: {
            user: process.env.SMTP_AUTH_USER,
            pass: process.env.SMTP_AUTH_PASSWORD
        }
    });

    let info = transport.sendMail(mailOptions);
    console.log("Message sent: %s", info.messageId);
}

module.exports = sendEmail;