<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Cars</title>
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
            <li><?php $check = $_SESSION['valid']; if($check == true){ $log = "login"; }else { $log = "logout"; } ?><a href=<?= $log . ".php"; ?>><span class="glyphicon glyphicon-log-in"></span> <?=ucwords($log)?></a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h1 class="jumbotron-heading">Cars</h1>
        <p class="lead text-muted">Welcome to the cars page! Whether its affordable, economic or sporty we got it.</p>
      </div>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Toyota Prius">
              <div class="card-body">
                <p class="card-text">Fuel Type: Gasoline <br> Cost: $22,950 <br> Seats: 5 <br> Type: Hybrid Sedan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="img/bmwX6.jpeg" alt="BMW X6">
              <div class="card-body">
                <p class="card-text">Fuel Type: Gasoline<br> Cost: $89,000 <br> Seats: 5 <br> Type: SUV</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Dodge Charger">
              <div class="card-body">
                <p class="card-text">Fuel Type: Gasoline <br> Cost: $38,395 <br> Seats: 5 <br> Type:sedan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Honda Civic">
              <div class="card-body">
                <p class="card-text">Fuel Type: Gasoline <br> Cost: $44,945 <br> Seats: 5 <br> Type:Sedan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Mazda 3">
              <div class="card-body">
                <p class="card-text">Fuel Type: Gasoline <br> Cost: $25,000 <br> Seats: 5 <br> Type:Hatchback/Sedan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="KIA Stinger">
              <div class="card-body">
                <p class="card-text">Fuel Type: Gasoline <br> Cost: $44,945 <br> Seats: 5 <br> Type:Sedan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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
        <a href="cars.html">Back to top</a>
      </p>
    </div>
  </footer>
</body>
</html>