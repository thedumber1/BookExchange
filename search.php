<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
    <?php
        include("main_menu.php");
    ?>
    <div class="container">
        <h1> Book Search </h1>
    </div>
    <div class="container">
        <form class="searchForm round" action="search_results.php" method="post">
            <label class="searchLabel" for="search">Book Title</label>
            <input type="text" name="search">
            <button>Search</button>
        </form>
    </div>
    
</body>
</html>