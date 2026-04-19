const errorWrapper = require("../../helpers/error/errorWrapper");
const { searchHelper, paginationHelper } = require("../../helpers/queryHelpers");

const userQuery = function (model, options) {
    return errorWrapper(
        async function (req, res, next) {
            let query = model.find();

            query = searchHelper("name", query, req);

            const total = await model.countDocuments();
            const paginationResult = await paginationHelper(total, query, req);
            query = paginationResult.query;
            const pagination = paginationResult.pagination;

            const queryResult = await query;

            res.queryResult = {
                success: true,
                count: queryResult.length,
                pagination: pagination,
                data: queryResult
            }

            next();

        }
    )
}

module.exports = userQuery;