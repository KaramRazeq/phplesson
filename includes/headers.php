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
        <div class="header-login">
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
        }
        else {
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Usernam/E-mail...">
            <input type="text" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php">Signup</a>';
        }
          ?>
        
      
        </div>
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