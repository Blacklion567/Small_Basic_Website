const findEl = document.querySelector.bind(document);

const todos = [];

const generateId = () => Math.random().toString().slice(2, 10);

const drawTodo = ({ text, date }) => {
  const datetime = new Date(date).toISOString();

  return `<div class="todo">
    <h2 class="todo__headline">${text}</h2>
    <time class="todo__time" datetime="${datetime}">${date}</time>
  </div>`;
};

function removeTodo(event) {
  if (event.target.closest(".todo")) event.target.closest(".todo").remove();
}

findEl(".form").addEventListener("submit", (event) => {
  event.preventDefault();

  const formData = new FormData(findEl(".form"));

  todos.push({
    id: generateId(),
    text: formData.get("text"),
    date: new Date()
  });

  findEl(".todos").insertAdjacentHTML("beforeend", drawTodo(todos.at(-1)));
});

findEl(".todos").addEventListener("click", removeTodo);

function load() {
  if (todos.length)
    todos.forEach((todo) =>
      findEl(".todos").insertAdjacentHTML("beforeend", drawTodo(todo))
    );
}

load();
