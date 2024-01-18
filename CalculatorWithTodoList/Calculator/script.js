// This function clear all the values
function clearScreen() {
  document.getElementById('result').value = '';
}

//  Minus number to result
function deletedNumber() {
  document.getElementById('result').value = document.getElementById('result').value.slice(0, -1);
}

// This function display values
function display(value) {
  document.getElementById('result').value += value;
}

// This function evaluates the expression and returns result
function calculate() {
  let result = document.getElementById('result').value;
  resultAnswer = eval(result);
  document.getElementById('result').value = resultAnswer;
}

// Get A Random Colors By Clicking The Button
// Get the button element
const calculator = document.getElementById('calculator');
const container = document.getElementById('container');

let button = document.getElementById('colorChosen');
button.addEventListener('click', () => {
  container.style.background = 'black';
  button.style.background = 'black';
  button.style.color = 'white';
  calculator.style.background = 'black';
  calculator.style.border = 'solid 1px white';
});
let button1 = document.getElementById('colorChosen1');
button1.addEventListener('click', () => {
  container.style.background = 'green';
  button1.style.background = 'green';
  calculator.style.background = 'green';
});
let button2 = document.getElementById('colorChosen2');
button2.addEventListener('click', () => {
  container.style.background = 'orange';
  button2.style.background = 'orange';
  calculator.style.background = 'orange';
});

// Generate a random number between 0 and 255
function randomRGB() {
  return Math.floor(Math.random() * 256);
}

// Generate a random RGB color
function randomColor() {
  let red = randomRGB();
  let green = randomRGB();
  let blue = randomRGB();
  return `rgb(${red}, ${green}, ${blue})`;
}

// Change background color on button click
let colorChosen3 = document.getElementById('colorChosen3');

colorChosen3.onclick = function () {
  let color = randomColor();
  container.style.backgroundColor = color;
  calculator.style.background = color;
  colorChosen3.style.background = color;

};
