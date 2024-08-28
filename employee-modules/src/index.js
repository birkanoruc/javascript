import { Request } from "./request";
import { UI } from "./ui";

const request = new Request("http://localhost:3000/employees");
const ui = new UI();

let updateState = null;

function addEventListeners() {
    document.addEventListener("DOMContentLoaded", load);
    ui.employeeForm.addEventListener("submit", create);
    ui.employeesList.addEventListener("click", updateOrDelete);
    ui.updateBtn.addEventListener("click", update);
};

addEventListeners();

function create(e) {
    e.preventDefault();
    const name = ui.nameInput.value.trim();
    const department = ui.departmentInput.value.trim();
    const salary = Number(ui.salaryInput.value.trim());

    const data = {
        name: name,
        department: department,
        salary: salary
    }

    if (!name || !department || !salary) {
        ui.showAlert("danger", "Lütfen tüm alanları doldurunuz!")
    } else {
        request.post(data)
            .then((employee) => {
                ui.createEmployee(employee);
                ui.clearInputs([ui.nameInput, ui.departmentInput, ui.salaryInput]);
                ui.showAlert("success", "Çalışan başarıyla eklendi!")
            }).catch((err) => {
                ui.showAlert("danger", err)
            });
    }
}

function load() {
    request.get()
        .then((employees) => {
            ui.loadEmployees(employees);
        }).catch((err) => {
            ui.showAlert("danger", err);
        });
}

function update(e) {
    e.preventDefault();

    const name = ui.nameInput.value.trim();
    const department = ui.departmentInput.value.trim();
    const salary = Number(ui.salaryInput.value.trim());

    const data = {
        name: name,
        department: department,
        salary: salary
    }

    if (updateState !== null) {
        request.put(updateState.id, data)
            .then((employees) => {
                ui.updateEmployee(updateState.element, data);
                updateState = null;
                ui.clearInputs([ui.nameInput, ui.departmentInput, ui.salaryInput]);
                ui.showAlert("success", "Güncelleme işlemi başarıyla tamamlandı!");
                ui.toggleUpdateBtn();
            }).catch((err) => {
                ui.showAlert("danger", err);
            });
    } else {
        ui.showAlert("danger", "Güncelleme için gerekli veri bulunamadı!");
    }

}

function updateEmployee(e) {
    e.preventDefault();

    const id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.textContent;
    const name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.textContent;
    const department = e.target.parentElement.previousElementSibling.previousElementSibling.textContent;
    const salary = e.target.parentElement.previousElementSibling.textContent;

    const data = {
        name: name,
        department: department,
        salary: salary
    }

    ui.showUpdateInformation(data);
    ui.toggleUpdateBtn();

    updateState = {
        id: id,
        element: e
    }

}

function deleteEmployee(e) {
    e.preventDefault();

    const id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.textContent;
    const element = e.target.parentElement.parentElement;

    request.delete(id)
        .then((message) => {
            ui.deleteEmployee(element);
            ui.showAlert("success", message)
        }).catch((err) => {
            ui.showAlert("danger", err)
        });
}

function updateOrDelete(e) {
    e.preventDefault();

    if (e.target.id === "delete-employee") {
        if (confirm("Silmek istediğinize emin misiniz?")) {
            deleteEmployee(e);
        }
    } else if (e.target.id === "update-employee") {
        updateEmployee(e);
    }

}