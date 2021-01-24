<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Selling Page</title>
</head>

<body>
    <?php
        include("main_menu.php");
	?>
	<div class="container">
		<h1>Please submit your book information</h1>

	</div>

	<div class="container">
		<form class="sellForm" action="sellingInsert.php" enctype="multipart/form-data" method="post">		
			<table class="sellTable">
				<tr>
					<td>
						<label for="email" class="">Email</label>
					</td>
					<td>
						<input type="text" name="email" value="<?php print $_SESSION["email"];?>">
					</td>
				</tr>
				<tr>
					<td>
						<label for="name" class="">Book Name</label>
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						<label for="description" class="">Description</label>
					</td>
					<td>
						<input type="text" name="description">
					</td>
				</tr>
				<tr>
					<td>
						<label for="pic" class="">Book Picture</label>
					</td>
					<td>
						<input type="file" name="pic">
					</td>
				</tr>
				<tr>
					<td>
						<button class="sellButton" type="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
