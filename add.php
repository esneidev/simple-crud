<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Pagina de inicio</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name2</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age2</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email2</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Gender2</td>
				<td>
					<select name="select-gener" id="select-gender">
						<option value="">Select</option>
						<option value="male">Male2</option>
						<option value="female">Female2</option>
						<option value="other">trans</option>
						<option value="male">esneider gender</option>
						<option value="female">Female2</option>
						<option value="other">Other</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Input test</td>
				<td><input type="submit" age="submit" value="Add"></td>
			</tr>
			<tr> 
				<td>Input test</td>
				<td><input type="submit" email="submit" value="Add"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" gender="submit" value="Add"></td>
			</tr>

		</table>
	</form>
</body>
</html>

