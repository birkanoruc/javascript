class Storage {

    static getTodosFromStorage() {
        let todos;

        if (!localStorage.getItem("todos")) {
            todos = [];
        } else {
            todos = JSON.parse(localStorage.getItem("todos"));
        }

        return todos;
    }

    static deleteTodoListToStorage() {
        localStorage.removeItem("todos");
    };

    static createTodoToStorage(newTodo) {
        let todos = this.getTodosFromStorage();

        todos.push(newTodo);

        localStorage.setItem("todos", JSON.stringify(todos));
    }

    static deleteTodoToStorage(deleteTodo) {
        let todos = this.getTodosFromStorage();

        todos.forEach(function (todo, index) {
            if (todo.todo === deleteTodo) {
                todos.splice(index, 1);
            }
        });

        localStorage.setItem("todos", JSON.stringify(todos));
    }
}