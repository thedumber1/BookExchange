<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Books</title>
    <?php
        include("main_menu.php");
        include("global.php");
    ?>
    <link rel="stylesheet" href="main.css">

</head>

<body>

    <?php
        $connect = mysqli_connect("localhost", "root", $dbPass);
        mysqli_select_db($connect, $db);
        $selectBooks = "select * from books where email='" . $email . "'";
        $results = mysqli_query($connect, $selectBooks);
    ?>

    <div class="container mt-4">
        <table class="table table-dark table-hover m-auto">
            <tr>
                <th>Seller Email</th>
                <th>Book Name</th>
                <th>Post Date</th>
                <th>Book Picture</th>
                <th>Edit</th>
                <th>Delete</th>
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
                print "<a href='pictures/mybooks_edit.php?bookId=" . $row["bookId"] . "'>";
                print "<img src='pictures/edit.png' width=60\>";
                print "</a>";
                print "</td>";

                print "<td>";
                print "<a href='pictures/mybooks_delete.php?bookId=" . $row["bookId"] . "'>";
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