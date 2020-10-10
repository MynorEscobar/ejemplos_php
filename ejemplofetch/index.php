<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
<body>
	<h1>Ejemplo POO - PHP</h1>
	Operaciones básicas con 2 valores numericos(+, -, *, /)
	<form id="formulario">
		<label for="txtValor1">Valor 1:</label>
		<input type="text" name="txtValor1">
		<br>
		<label for="txtValor2">Valor 2:</label>
		<input type="text" name="txtValor2">
		<br>
		<input type="submit" name="btnSuma" id="btnSuma" value="+">
		<input type="submit" name="btnResta" id="btnResta" value="-">
		<input type="submit" name="btnMulti" value="*">
		<input type="submit" name="btnDivi" value="/">

	</form>
	<div id="divRespuesta">
		aquí se mostrara la respuesta
	</div>
	<script type="text/javascript" src="enlace.js"></script>
</body>
</html>