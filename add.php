<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Pagina principal</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<select name="select-gener" id="select-gender">
						<option value="">Select</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
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
		</table>
	</form>
</body>
</html>

