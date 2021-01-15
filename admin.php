<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator</title>
</head>

<body>
<?php
	$connect = mysqli_connect("localhost", "root", "1234");
	mysqli_select_db($connect, "p3337");
	$selectUsers = "select * from users";
	$results = mysqli_query($connect, $selectUsers); 
	?>
<table align="center" border="2">
	<tr>
	<th>
	Email
	</th>
	<th>
	Password
	</th>
	</tr>
<?php
	while ($row = mysqli_fetch_assoc($results))
	{
		print "<tr>";
		print "<td>";
		print($row["email"]);
		print "</td>";
		print "<td>";
		print($row["password"]);
		print "</td>";
		print "</tr>";
	}
?>
</table>
</body>
</html>
