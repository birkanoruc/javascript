class UI {

    static clearInputs(inputs) {
        inputs.forEach(input => {
            input.value = "";
        });
    }

    static showAlert(type, message) {
        const createTodoSection = document.getElementById("create-todo-section");

        const alertItemDiv = document.createElement("div");
        alertItemDiv.className = `alert alert-${type} mt-4`;
        alertItemDiv.appendChild(document.createTextNode(message));
        createTodoSection.appendChild(alertItemDiv);

        setTimeout(function () {
            alertItemDiv.remove();
        }, 1000);
    }

    static deleteTodoListToUI() {
        const todoList = document.getElementById("todo-list");
        while (todoList.firstElementChild !== null) {
            todoList.removeChild(todoList.firstElementChild);
        }
    }

    static deleteTodoToUI(element) {
        element.remove();
    }

    static createTodoToUI(newTodo) {
        const todoListItemLi = document.createElement("li");
        todoListItemLi.className = "list-group-item d-flex justify-content-between";

        const todoListItemA = document.createElement("a");
        todoListItemA.href = "#";
        todoListItemA.classList.add("delete-item");

        const todoListItemI = document.createElement("i");
        todoListItemI.className = "fa fa-remove text-danger";

        todoListItemLi.appendChild(document.createTextNode(newTodo.todo));
        todoListItemLi.appendChild(todoListItemA);
        todoListItemLi.appendChild(todoListItemI);

        const todoList = document.getElementById("todo-list");
        todoList.appendChild(todoListItemLi);
    }

    static loadTodoListToUI(todos) {
        todos.forEach((todo) => {
            UI.createTodoToUI(todo);
        });
    }

    static searchTodosToUI(searchValue) {
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
}