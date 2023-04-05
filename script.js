function clearDisplay() {
	document.getElementById('display').value = '';
}

function addToDisplay(value) {
	document.getElementById('display').value += value;
}

function backspace() {
	let value = document.getElementById('display').value;
	document.getElementById('display').value = value.substr(0, value.length - 1);
}

function calculate() {
	let value = document.getElementById('display').value;
	let result = eval(value);
	document.getElementById('display').value = result;
}
