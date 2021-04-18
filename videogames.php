<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Video Games</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">-->
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
        <h1 class="jumbotron-heading">Video Games</h1>
        <p class="lead text-muted">Welcome to the Vide Games page! Enjoy the best we have to offer</p>
      </div>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Starcraft 2: Legacy of the Void" data-src="img/starcraft2.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">The zerg swarm has succesfully finished their task hunting down Mengsk,
                Now it's Artanis and the Protoss' turn to take back their homeland!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="God of War 4" data-src="img/gow.jpg" alt="img/noImage">
              <div class="card-body">
                <p class="card-text">For the first time in the series, there are two protagonists: Kratos, the former
                 Greek God of War who remains the only playable character, and his young son Atreus.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="img/amongus.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">The premise of Among Us is quite simple: you're one of 4 to 10 players on a space ship.
                 One of these is an Impostor whose main goal is to kill everyone else. The remainder of the players are part of the regular crew who's just trying to escape unharmed</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Age of Mythology" data-src="img/mythology.jpg" alt="img/noImage">
              <div class="card-body">
                <p class="card-text">he classic real time strategy game that transports players to a time when heroes did battle with monsters of legend and the gods intervened
                 in the affairs of mortals. Use mythological creatures like Minotaurs and Cyclopes to bolster your armies' strength.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Horizon Zero Dawn" data-src="img/horizonZeroDawn.jpg" alt="img/noImage">
              <div class="card-body">
                <p class="card-text">Horizon Zero Dawn is an action role-playing game developed by Guerrilla Games and published by Sony Interactive Entertainment.
                 The plot follows Aloy, a hunter in a world overrun by machines, who sets out to uncover her past.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Black Ops 2" data-src="img/COD_BO2.png" alt="img/noImage">
              <div class="card-body">
                <p class="card-text">The best Call of Duty if you did not know this... you lackin</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="edit.php"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="videogames.html">Back to top</a>
      </p>
    </div>
  </footer>
</body>
</html>