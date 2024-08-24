'use strict';

const createTodoSection = document.getElementById("create-todo-section");
const createTodoForm = document.getElementById("create-todo-form");
const todoInput = document.getElementById("todo");

const searchTodoInput = document.getElementById("search-todo");
const todoList = document.getElementById("todo-list");
const deleteTodoListButton = document.getElementById("delete-todo-list");

function eventListeners() {
    createTodoForm.addEventListener("submit", createTodo);
    todoList.addEventListener("click", deleteTodo);
    deleteTodoListButton.addEventListener("click", deleteTodoList);
    document.addEventListener("DOMContentLoaded", function () {
        let todos = Storage.getTodosFromStorage();
        UI.loadTodoListToUI(todos);
    });
    searchTodoInput.addEventListener("keyup", searchTodos);

};

eventListeners();

function deleteTodoList(e) {
    e.preventDefault();

    if (confirm("Tüm görevleri silmek istediğinize emin misiniz?")) {
        UI.deleteTodoListToUI();
        Storage.deleteTodoListToStorage();
        UI.showAlert("success", "Tüm görevler başarıyla silindi!");
    }
}

function createTodo(e) {
    e.preventDefault();

    const todo = todoInput.value.trim();

    if (!todo) {
        UI.showAlert("danger", "Lütfen tüm alanları doldurunuz!");
    } else {
        const newTodo = new Todo(todo);
        UI.createTodoToUI(newTodo);
        Storage.createTodoToStorage(newTodo);
        UI.clearInputs([todoInput]);
        UI.showAlert("success", "Film başarılı bir şekilde eklendi!");
    }
};

function deleteTodo(e) {
    e.preventDefault();

    if (e.target.className === "fa fa-remove text-danger") {
        UI.deleteTodoToUI(e.target.parentElement);
        Storage.deleteTodoToStorage(e.target.parentElement.textContent);
        UI.showAlert("success", "Görev başarıyla silindi!")
    }
};

function searchTodos(e) {
    e.preventDefault();

    const searchValue = e.target.value.toLowerCase();
    UI.searchTodosToUI(searchValue);
}