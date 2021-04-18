<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--Navigation Bar-->
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
            <li><a href=<?= "login.php"; ?>><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h2>Welcome to Our Amazon 2.0</h2>
        <p>Here we sell various different items on our website</p>
        <a href="items.html"><button type="button" class="btn btn-primary">View Items</button></a>
      </div>
</body>
</html>