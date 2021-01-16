<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>New User Enrollment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="login.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container justify-content-center">
		  <h2 class="display-4">New User: Please Submit your information</h2>
		</div>
	</nav>

	<section class="container">
		<form action="insertUser.php" method="post">
			<div class="row justify-content-center">
				<div class="col-4">
					<label for="email">Email</label>
					<input type="email" id="email" class="form-control" placeholder="Email">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-4 mt-2">
					<label for="password">Password</label>
					<input type="password" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-4 mt-2">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>

	</section>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
