<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Shopping</title>
</head>

<body>
    <?php
    include("main_menu.php");
    include("global.php");
    ?>

    <?php
        $connect = mysqli_connect("localhost", "root", $dbPass);
        mysqli_select_db($connect, $db);
        $selectBooks = "select * from books";
        $results = mysqli_query($connect, $selectBooks);
    ?>

    <div class="container mt-4">
        <table id="tab" class="table table-dark table-hover m-auto">
            <tr>
                <th>Email</th>
                <th>Book Name</th>
                <th>Post Date</th>
                <th>Picture</th>
                <th>Purchase</th>
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
                    print($row["postdate"]);
                    print "</td>";
                    print "<td>";
                    print "<a target='_blank' href='" . $row["picpath"] . "'>";
                    print "<img src='" . $row["picpath"] . "' width=60\>";
                    print "</a>";
                    print "</td>";

                    print "<td>";
                    print "<a href='cart_add.php?bookId=" . $row["bookId"] . "'>";
                    print "<img src='pictures/shoppingcart.png' width=60\>";
                    print "</a>";
                    print "</td>";

                    print "</tr>";
                }
            ?>
        </table>
    </div>
</body>

</html>