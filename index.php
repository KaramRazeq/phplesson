
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
<nav>
  <a href="#">
  <img src="" alt="">
  </a>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">About me</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
</header>
    <?php
    include 'includes/headers.php';
    ?>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php
    //Arithemtic Operators
    echo 5**5;

    ?>
    <hr>
    <?php
    //Assignment Operators
    $x = 100;
    $x /= 20;

    echo $x;
    ?>
    <hr>
     <?php
     //Comparison Operators
     $x = 10;
     $y = 10;

     if($x <> $y) {
    echo "True!";
     }
     else{
      echo "False!";
     }
?>
<hr>
 <?php
 //Increment/Decrement Operators
 $x = 10;
 echo $x--;
 echo $x;
?>
<hr>
 <?php
 $x = 20;
 $y = 20;

 if ($x == $y xor 1 == 1) {
  echo "True";
 }
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
    
       
 
 