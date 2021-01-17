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
	<h1 class="text-center my-3">Please submit your book information</h1>

	<div class="container">
		<form action="sellingInsert.php" enctype="multipart/form-data" method="post" id="test">
			<div class="row justify-content-end">
				<div class="col-6">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php print $_SESSION["email"]; ?>">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-6">
					<div class="mb-3">
						<label for="bookName" class="form-label">Book Name</label>
						<input type="text" class="form-control" name="name" id="bookName">
						<div class="form-text">Name of the book</div>

					</div>
				</div>
			</div>
			<div class="row justify-content-end p-0">
				<div class="col-6">
					<div class="mb-3">
						<label for="description" class="form-label">Description</label>
						<input type="text" class="form-control" name="description">
						<div class="form-text">Brief description of the book.</div>

					</div>
				</div>
			</div>
			<div class="row justify-content-end p-0">
				<div class="col-6">
					<div class="mb-3">
						<label for="picture" class="form-label">Book Picture</label>
						<input type="file" class="form-control" name="pic">
					</div>
				</div>
			</div>
			<div class="row justify-content-end p-0">
				<div class="col-6">
					<button type="submit" class="btn btn-primary btn-md">Submit</button>
				</div>
			</div>
			
		</form>

	</div>
</body>

</html>