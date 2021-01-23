<link href="app.css" type="text/css" rel="stylesheet"/>

<?php
    session_start();
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
?>

<div class="navbar">
    <ul class="ul_css">
        <li class="li_css">
            <a class="li_css_a" href="shopping.php">Shopping</a>
        </li>
        <li class="li_css">
            <a class="li_css_a" href="selling.php">Selling</a>
        </li>
        <li class="li_css">
            <a class="li_css_a" href="mybooks.php">My Books</a>
        </li>
        <li class="li_css">
            <a class="li_css_a" href="profile.php">Profile</a>
        </li>
        <li class="li_css">
            <a class="li_css_a" href="email.php">
                <?php
                    print $_SESSION['email'];
                ?>
            </a>
        </li>
        <li class="li_css">
            <a class="li_css_a" href="search.php">Search</a>
        </li>
        <li class="li_css round">
            <a class="li_css_a" href="cart_view.php">
                <img src="icons/shoppingcart.png">
            </a>
        </li>
        <li class="li_css">
            <a class="li_css_a" href="login.html">Logout</a>
        </li>            
      
        
    </ul>
</div>
