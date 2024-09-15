const errorWrapper = require("../../helpers/error/errorWrapper");
const { searchHelper, populateHelper, sortHelper, paginationHelper } = require("../../helpers/queryHelpers");

const answerQuery = function (model, options) {
    return errorWrapper(
        async function (req, res, next) {

            const { id } = req.params;
            const arrayName = "answers";
            const total = (await model.findById(id))["answerCount"];

            const paginationResult = await paginationHelper(total, undefined, req)

            const startIndex = paginationResult.startIndex;
            const limit = paginationResult.limit;

            let queryObject = {};
            queryObject[arrayName] = { $slice: [startIndex, limit] }

            let query = model.find({ _id: id }, queryObject);

            query = populateHelper(query, options.population);

            const queryResult = await query;

            res.queryResult = {
                success: true,
                count: queryResult.length,
                pagination: paginationResult.pagination,
                data: queryResult
            }

            next();

        }
    )
}

module.exports = answerQuery;