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
    <div class="container">
        <form class="searchForm round" action="search_results.php" method="post">
            <label class="searchLabel" for="search">Book Title</label>
            <input type="text" name="search">
            <button>Search</button>
        </form>
    </div>
        <?php
            if ($rowCount['count(*)'] == 0) {
                print "<div class='container'>";
                print "<h1>No results found";
                print "</h1>";
                print "</div>";
            } else {
                print "<div class='container'>";
                
                print "<h1>Found " . $rowCount["count(*)"] . " result(s)</h1>";
                print "</div>";

                print "<div class='container'>";
                print "<table class='tableResults'>
                        <tr>
                            <th> Seller Email </th>
                            <th> Post Date </th>
                            <th> Book Picture </th>
                        </tr>";

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
                print "</table>";


            }
            print "</div>";
        ?>

</body>

</html>