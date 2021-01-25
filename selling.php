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

	<div class="container sellContainer">
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
						<input type="text" name="name" placeholder="Name of book">
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
						<label for="pic" class="">Picture</label>
					</td>
					<td>
						<div>
							<input type="file" name="pic" id="pic">
							<label id="file_css" for="pic"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill clock" viewBox="0 0 16 16">
							<path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
							</svg>Choose a file...</label>
						</div>
					</td>
				</tr>
				<tr>
					<th colspan="2">
						<button class="sellButton" type="submit">Submit</button>
					</th>
				</tr>
			</table>
		</form>
	
	</div>
</body>
</html>
