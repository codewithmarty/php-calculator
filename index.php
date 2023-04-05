<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Calculator</h1>
	<div id="calculator">
		<input type="text" id="display" disabled>
		<button onclick="clearDisplay()">C</button>
		<button onclick="addToDisplay('/')">/</button>
		<button onclick="addToDisplay('*')">*</button>
		<button onclick="backspace()">&larr;</button>
		<button onclick="addToDisplay('7')">7</button>
		<button onclick="addToDisplay('8')">8</button>
		<button onclick="addToDisplay('9')">9</button>
		<button onclick="addToDisplay('-')" class="operator">-</button>
		<button onclick="addToDisplay('4')">4</button>
		<button onclick="addToDisplay('5')">5</button>
		<button onclick="addToDisplay('6')">6</button>
		<button onclick="addToDisplay('+')" class="operator">+</button>
		<button onclick="addToDisplay('1')">1</button>
		<button onclick="addToDisplay('2')">2</button>
		<button onclick="addToDisplay('3')">3</button>
		<button onclick="calculate()" class="function">=</button>
		<button onclick="addToDisplay('0')">0</button>
		<button onclick="addToDisplay('.')">.</button>
	</div>
	<script src="script.js"></script>
</body>
</html>
