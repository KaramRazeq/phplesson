<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php 
    //Loop

    //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop
    $x = 1;
    while ($x <= 5) {
        echo "hi there<br>";
        $x++;
    }
    ?>
    <?php
     //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);
    ?>
    <?php
    //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop

    for($x = 1; $x <= 10; $x++) {
        echo "hi<br>";
    }

    ?>
    <?php
      //Loop

    //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop
    $array = array("Daniel", "jane", "jacob", "john", "Mariane");

    foreach ($array as $loopdata) {
        echo "my name is ".$loopdata."<br>";
    }
    ?>

</body>
</html>
   