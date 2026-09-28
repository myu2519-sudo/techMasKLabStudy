'use strict';

function todo() {

  let todos = [];

  const inputBox = document.getElementById('input-todo-box');
  const addButton = document.getElementById('add-button');
  const todoList = document.getElementById('todo-list');

  addButton.addEventListener('click', () => {
    const text = inputBox.value.trim();

    if (text === '') return; 

    todos.push(text); 
    inputBox.value = ''; 

    showTodos(); 
  });

  function showTodos() {

    todoList.innerHTML = '';

    todos.forEach((todo, index) => {
      
      const li = document.createElement('li');
      li.textContent = todo;

      const deleteBtn = document.createElement('button');
      deleteBtn.textContent = '削除';

      deleteBtn.addEventListener('click', () => {
        deleteTodo(index);
      });

      li.appendChild(deleteBtn);
     
      todoList.appendChild(li);
    });
  }

  function deleteTodo(index) {
    todos.splice(index, 1); 
    showTodos(); 
  }
}

todo();
