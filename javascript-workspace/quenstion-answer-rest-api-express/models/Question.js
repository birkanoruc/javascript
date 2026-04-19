const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const slugify = require("slugify");

const QuestionSchema = new Schema({
    title: {
        type: String,
        required: [true, "Please provide a title"],
        minlength: [10, "Please provide title at least 10 characters"],
        unique: true
    },
    content: {
        type: String,
        required: [true, "Please provide a content"],
        minlength: [20, "Please provide content at least 20 characters"]
    },
    slug: String,
    createdAt: {
        type: Date,
        default: Date.now
    },
    user: {
        type: mongoose.Schema.ObjectId,
        ref: "User",
        required: true
    },
    likes: [
        {
            type: mongoose.Schema.ObjectId,
            ref: "User"
        }
    ],
    likeCount: {
        type: Number,
        default: 0,
        min: 0
    },
    answers: [
        {
            type: mongoose.Schema.ObjectId,
            ref: 'Answer'
        }
    ],
    answerCount: {
        type: Number,
        default: 0
    }
});

QuestionSchema.pre("save", function (next) {
    if (!this.isModified("title")) next();
    this.slug = this.makeSlug();
    next();
});

QuestionSchema.methods.makeSlug = function () {
    return slugify(this.title, {
        replacement: '-',
        remove: /[*+~.()'"!:@]/g,
        lower: true,
    });
};

QuestionSchema.virtual("likesCount").get(function () {
    return this.likes.length;
});

module.exports = mongoose.model("Question", QuestionSchema);