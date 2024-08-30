const express = require("express");
const { accessControl, testControl } = require("./middleware");

const app = express();

const employees = [
    {
        "id": 5512,
        "name": "Employee Test",
        "department": "Bilgi İşlem",
        "salary": 100
    },
    {
        "name": "Deneme",
        "department": "deneme s",
        "salary": 1004,
        "id": 2
    },
    {
        "id": 3,
        "name": "Employee Test",
        "department": "Bilgi İşlem",
        "salary": 100
    }
];

const PORT = 5001;

app.use(express.json());

app.use(accessControl);

app.get("/employees", (req, res, next) => {
    res.json({
        success: true,
        data: employees
    })
});

app.get("/test", testControl, (req, res, next) => {
    res.send("hello world!");
});

app.post("/employees", (req, res, next) => {

    employees.push(req.body);

    res.json({
        success: true,
        data: employees
    })
});

app.put("/employees/:id", (req, res, next) => {
    const id = parseInt(req.params.id);
    const index = employees.findIndex(employee => employee.id === id);

    if (index !== -1) {
        employees[index] = {
            ...employees[index],
            ...req.body
        };
        res.json({
            success: true,
            data: employees
        });
    } else {
        res.status(404).json({
            success: false,
            data: "data not found"
        });
    }
});

app.delete("/employees/:id", (req, res, next) => {
    const id = req.params.id;  // ID'yi string olarak alıyoruz.

    const index = employees.findIndex(employee => employee.id === id);

    if (index !== -1) {
        employees.splice(index, 1);
        res.json({
            success: true,
            data: employees
        });
    } else {
        res.status(404).json({
            success: false,
            data: "data not found"
        });
    }
});

app.listen(PORT, () => {
    console.log("Server started. PORT: " + PORT);
});