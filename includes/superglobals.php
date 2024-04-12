
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*
$_COOKIE
$_SESSION
*/

setcookie("name", "karam", time()) + 172800;


?>
 <?php
    
  
    $_SESSION['username'] = "karam is da best";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        echo "you are not logged in";
    } else {
        echo "you are logged in!";
    }
  ?>
</body>
</html>
