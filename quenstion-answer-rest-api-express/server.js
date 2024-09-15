const express = require('express');
const path = require('path');
const dotenv = require('dotenv');
const routers = require('./routers');
const errorHandler = require('./helpers/error/errorHandler');
const connectDatabase = require('./helpers/database/connectDatabase');

dotenv.config({
    path: "./config/env/config.env"
});

connectDatabase();

const app = express();

app.use(express.json());

app.use("/api", routers);

app.use(express.static(path.join(__dirname, "public")));

app.use(errorHandler);

app.listen(process.env.PORT, () => {
    console.log(`App started on port ${process.env.PORT} for ${process.env.NODE_ENV}`);
});
