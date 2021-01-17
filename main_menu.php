<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="main.css" type="text/css" rel="stylesheet" />

<?php
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="main.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="selling.php">Selling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shopping.php">Shopping</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybooks.php">My Books</a>
        </li>

      </ul>
      <div class="row m-auto">
        <div class="col-lg-12 col-md-6 col-sm-6">
          <form class="d-flex forms" action="search_results.php" method="post">
            <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </div>
      </div>
      <ul class="navbar-nav justify-content-end mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="cart_view.php">
            <img src="pictures/shoppingcart.png" width="25" height="20">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
      </ul>
    </div>
    
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>