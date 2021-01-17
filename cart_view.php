<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
</head>

<body>
    <?php
    include("main_menu.php");
    include("global.php");
    ?>
    <?php
    $connect = mysqli_connect("localhost", "root", $dbPass);
    mysqli_select_db($connect, $db);
    $selectCart = "select cart.bookId, books.email, books.name, picpath from books 
                        inner join cart on books.name = cart.name
                        and cart.email = '" . $email . "'";
    $results = mysqli_query($connect, $selectCart);

    $selectItems = "select count(bookId) from cart where email='" . $email . "'";
    $countItems = mysqli_query($connect, $selectItems);
    $count = mysqli_fetch_assoc($countItems);

    //    $selectBooks = "select * from books where email='" . $email . "'";
    //    $bookResults = mysqli_query($connect, $selectBooks);
    ?>

    <div class="container text-center">
        <?php
        print "<h1>Items in cart: ";
        print $count["count(bookId)"];
        print "</h1>";
        ?>

    </div>
    <div class="container">
        <table class="table table-dark table-hover m-auto">
            <tr>
                <th>Seller Email</th>
                <th>Book Name</th>
                <th>Book Picture</th>
                <th>Remove</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($results)) {
                print "<tr>";
                print "<td>";
                print($row["email"]);
                print "</td>";

                print "<td>";
                print($row["name"]);
                print "</td>";

                print "<td>";
                print "<a target='_blank' href='" . $row["picpath"] . "'>";
                print "<img src='" . $row["picpath"] . "' width=60\>";
                print "</a>";
                print "</td>";

                print "<td>";
                print "<a href='pictures/cart_delete.php?bookId=" . $row["bookId"] . "'>";
                print "<img src='pictures/delete.png' width=60\>";
                print "</a>";
                print "</td>";

                print "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>