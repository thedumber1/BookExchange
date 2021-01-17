<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>

<body>
    <?php
    include("main_menu.php");
    include("global.php");
    ?>
    <?php
    $connect = mysqli_connect("localhost", "root", $dbPass);
    mysqli_select_db($connect, $db);

    $selectCount = "select count(*) from books where name like '%" . $_POST["search"] . "%'";
    $countResults = mysqli_query($connect, $selectCount);
    $rowCount = mysqli_fetch_assoc($countResults);
    $searchVal = $_POST["search"];

    $selectSearch = "select * from books where name like '%" . $_POST["search"] . "%'";
    $searchResults = mysqli_query($connect, $selectSearch);
    ?>

    <?php
    if ($rowCount['count(*)'] == 0) {
        print "<div class='container text-center'>";
        print   "<h1>No results found </h1>";
        print "</div>";
        
    } else {
        print "<div class='container text-center'>";
        print   "<h1>Found " . $rowCount["count(*)"] . " result(s)</h1>";
        print "</div>";

        print "<div class='container mt-4'>";
        print   "<table class='table table-dark table-hover m-auto'>";
        print       "<tr>";
        print           "<th>Seller Email</th>";
        print           "<th>Book Name</th>";
        print           "<th>Post Date</th>";
        print           "<th>Book Picture</th>";
        print       "</tr>";

        while ($searchRow = mysqli_fetch_assoc($searchResults)) {
            print "<tr>";
            print "<td>";
            print($searchRow["email"]);
            print "</td>";
            print "<td>";
            print($searchRow["name"]);
            print "</td>";
            print "<td>";
            print($searchRow["postdate"]);
            print "</td>";

            print "<td>";
            print "<a target='_blank' href='" . $searchRow["picpath"] . "'>";
            print "<img src='" . $searchRow["picpath"] . "' width=60\>";
            print "</a>";
            print "</td>";
            print "</tr>";
        }
        print   "</table>";
        print "</div>";
    }
    ?>
</body>

</html>