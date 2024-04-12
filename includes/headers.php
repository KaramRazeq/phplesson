<?php
session_start();
?>
    
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calculator.php">calcualotr</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calender.php">calender</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datatypes.php">datatypes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="function.php">function</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loops.php">loop</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <?php
    
  
    $_SESSION['username'] = "karam is da best";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        echo "you are not logged in";
    } else {
        echo "you are logged in!";
    }
  ?>