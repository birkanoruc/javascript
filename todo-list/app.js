'use strict';

const createTodoSection = document.getElementById("create-todo-section");
const createTodoForm = document.getElementById("create-todo-form");
const todoInput = document.getElementById("todo");

// const todoListSection = document.getElementById("todo-list-section");
const searchTodoInput = document.getElementById("search-todo");
const todoList = document.getElementById("todo-list");
const deleteTodoListButton = document.getElementById("delete-todo-list");

function eventListeners() {
    createTodoForm.addEventListener("submit", createTodo);
    document.addEventListener("DOMContentLoaded", loadTodoItems);
    todoList.addEventListener("click", deleteTodo);
    searchTodoInput.addEventListener("keyup", searchTodos);
    deleteTodoListButton.addEventListener("click", deleteTodoList);
};

eventListeners();

function deleteTodoList(e) {
    if (confirm("Tüm görevleri silmek istediğinize emin misiniz?")) {
        while (todoList.firstElementChild !== null) {
            todoList.removeChild(todoList.firstElementChild);
        }
        localStorage.removeItem("todos");
        showAlert("success", "Tüm görevler başarıyla silindi!");
    }

    e.preventDefault();
}

function searchTodos(e) {
    const searchValue = e.target.value.toLowerCase();
    const todoItems = document.querySelectorAll(".list-group-item");
    todoItems.forEach(function (todoItem) {
        const text = todoItem.textContent.toLowerCase();
        if (text.indexOf(searchValue) === -1) {
            todoItem.setAttribute("style", "display:none !important");
        } else {
            todoItem.setAttribute("style", "display:block");
        }
    });
}

function showAlert(type, message) {
    const alertItemDiv = document.createElement("div");
    alertItemDiv.className = `alert alert-${type} mt-4`;
    alertItemDiv.appendChild(document.createTextNode(message));
    createTodoSection.appendChild(alertItemDiv);

    setTimeout(function () {
        alertItemDiv.remove();
    }, 1000);
}

function createTodo(e) {
    const newTodo = todoInput.value.trim();
    if (!newTodo) {
        showAlert("danger", "Görev alanı boş bırakılamaz!");
    } else {
        createTodoUI(newTodo);
        createTodoStorage(newTodo);
        showAlert("success", "Görev başarıyla eklendi!");
    }

    e.preventDefault();
};

function createTodoUI(newTodo) {
    const todoListItemLi = document.createElement("li");
    todoListItemLi.className = "list-group-item d-flex justify-content-between";

    const todoListItemA = document.createElement("a");
    todoListItemA.href = "#";
    todoListItemA.classList.add("delete-item");

    const todoListItemI = document.createElement("i");
    todoListItemI.className = "fa fa-remove text-danger";

    todoListItemLi.appendChild(document.createTextNode(newTodo));
    todoListItemLi.appendChild(todoListItemA);
    todoListItemLi.appendChild(todoListItemI);

    todoList.appendChild(todoListItemLi);
    todoInput.value = "";
}

function getTodosStorage() {
    let todos;

    if (!localStorage.getItem("todos")) {
        todos = [];
    } else {
        todos = JSON.parse(localStorage.getItem("todos"));
    }

    return todos;
}

function createTodoStorage(newTodo) {
    let todos = getTodosStorage();

    todos.push(newTodo);

    localStorage.setItem("todos", JSON.stringify(todos));
}

function loadTodoItems() {
    let todos = getTodosStorage();

    todos.forEach(function (todo) {
        createTodoUI(todo);
    });
}

function deleteTodo(e) {
    if (e.target.className === "fa fa-remove text-danger") {
        e.target.parentElement.remove();
        showAlert("success", "Görev başarıyla silindi!")
        deleteTodoStorage(e.target.parentElement.textContent);
    }

    e.preventDefault();
};

function deleteTodoStorage(deleteTodo) {
    let todos = getTodosStorage();

    todos.forEach(function (todo, index) {
        if (todo === deleteTodo) {
            todos.splice(index, 1);
        }
    });

    localStorage.setItem("todos", JSON.stringify(todos));
}