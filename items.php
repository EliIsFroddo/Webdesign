<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Amazon 2.0</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="items.php">Items</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="cars.php">Cars</a></li>
                  <li><a href="videogames.php">Video games</a></li>
                  <li><a href="movies.php">Movies</a></li>
                </ul>
              </li>
              <li><a href="search.php">Search</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <!-- Log in button on the Navigation Bar-->
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h2>All Items</h2>
      </div>
        
      <ul class="list-group list-group-flush">
      <?php 
      $file1 = 'cars.txt';
      $file2 = 'movies.txt';
      $file3 = 'videogames.txt';
      $contents1 = file($file1);
      $contents2 = file($file2);
      $contents3 = file($file3);
      foreach($contents1 as $line1): ?>
        <li class="list-group-item">
            Cars Category: <a href="cars.php"><?= $line1; ?></a>
        </li>
    <?php endforeach;?>
    <?php
    foreach($contents2 as $line2): ?>
        <li class="list-group-item">
            Movies Category: <a href="movies.php"><?= $line2; ?></a>
        </li>
    <?php endforeach;?>
    <?php
    foreach($contents3 as $line3): ?>
        <li class="list-group-item">
            Video Games Category: <a href="videogames.php"><?= $line3; ?></a>
        </li>
    <?php endforeach;?>
      </ul>
</body>
</html>