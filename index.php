<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <?php
        if (isset($_GET['search']) && strlen($_GET['search']) != 0){
            $search= trim( $_GET['search']);
            header('Location: https://www.google.co.il/search?q='.$search);
        }
    ?>
    
    <div>
    <form action="index.php" method="get">

        <h2>Search Page</h2>

        <label for="myForm">Search:</label><br><br>
        <input type="text" id="myForm" name="search" required>
        <br><br>

        <button>Search</button>

    </form><br/>
    </div>


    </body>
</html>









