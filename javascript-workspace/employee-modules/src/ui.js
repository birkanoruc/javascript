export class UI {
    constructor() {
        this.createEmployeeSection = document.getElementById("create-employee-section");
        this.employeeForm = document.getElementById("employee-form");
        this.nameInput = document.getElementById("name");
        this.departmentInput = document.getElementById("department");
        this.salaryInput = document.getElementById("salary");
        this.updateBtn = document.getElementById("update");
        this.createBtn = document.getElementById("create");
        this.employeesList = document.getElementById("employees");
        this.updateEmployeeBtn = document.getElementById("update-employee");
        this.deleteEmployeeBtn = document.getElementById("delete-employee");
    }

    clearInputs(inputs) {
        inputs.forEach(input => {
            input.value = "";
        });
    }

    showAlert(type, message) {
        const alertItemDiv = document.createElement("div");
        alertItemDiv.className = `alert alert-${type} mt-4`;
        alertItemDiv.appendChild(document.createTextNode(message));

        this.createEmployeeSection.appendChild(alertItemDiv);

        setTimeout(function () {
            alertItemDiv.remove();
        }, 1000);
    }

    createEmployee(employee) {
        const element = document.createElement("tr");
        element.innerHTML = `
        <td>${employee.id}</td>
        <td>${employee.name}</td>
        <td>${employee.department}</td>
        <td>${employee.salary}</td>
        <td><a href="#" id="update-employee" class="btn btn-sm btn-warning">Güncelle</a></td>
        <td><a href="#" id="delete-employee" class="btn btn-sm btn-danger">Sil</a></td>
        `;
        this.employeesList.appendChild(element);
    }

    updateEmployee(element, data) {
        element.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.textContent = data.name;
        element.target.parentElement.previousElementSibling.previousElementSibling.textContent = data.department;
        element.target.parentElement.previousElementSibling.textContent = data.salary;
    }

    deleteEmployee(element) {
        element.remove();
    }

    loadEmployees(employees) {
        employees.forEach(employee => {
            this.createEmployee(employee);
        });
    }

    toggleUpdateBtn() {
        if (this.updateBtn.style.display === "none") {
            this.updateBtn.style.display = "block";
            this.createBtn.style.display = "none";
        } else {
            this.updateBtn.style.display = "none";
            this.createBtn.style.display = "block";
            this.clearInputs([this.nameInput, this.departmentInput, this.salaryInput])
        }
    }

    showUpdateInformation(data) {
        this.nameInput.value = data.name;
        this.departmentInput.value = data.department;
        this.salaryInput.value = data.salary;
    }
}