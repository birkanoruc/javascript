const errorWrapper = require("../../helpers/error/errorWrapper");
const { searchHelper, populateHelper, sortHelper, paginationHelper } = require("../../helpers/queryHelpers");

const questionQuery = function (model, options) {
    return errorWrapper(
        async function (req, res, next) {
            let query = model.find();

            query = searchHelper("title", query, req);

            if (options && options.population) {
                query = populateHelper(query, options.population)
            }

            query = sortHelper(query, req);
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

module.exports = questionQuery;