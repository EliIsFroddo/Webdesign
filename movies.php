<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Movies</title>
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
        <h1 class="jumbotron-heading">Movies</h1>
        <p class="lead text-muted">Feeling lonely at home? We have popular movies that we you will love</p>
      </div>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Avengers: EndGame" data-src="img/avengers_endgame.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">Item: Avengers: End Game <br>
                The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining
                 Avengers to take one final stand in Marvel Studios' grand conclusion to twenty-two films, "Avengers: Endgame.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Pacific Rim" data-src="img/pacificRim.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">The Pacific Rim refers to the geographic area surrounding the Pacific Ocean. The Pacific Rim covers the western shores of North America and 
                South America, and the shores of Australia, eastern Asia, and the islands of the Pacific.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="The Bee Movie" data-src="img/beeMovie.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">Its story follows Barry B. Benson (Seinfeld), a honey bee who sues the human race for exploiting bees, after learning from his florist friend
                 Vanessa (Zellweger) that humans sell and consume honey.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Inception" data-src="img/inception.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">Inception is a 2010 science fiction action film written and directed by Christopher Nolan, who also produced the film with his wife,
                 Emma Thomas. The film stars Leonardo DiCaprio as a professional thief who steals information by infiltrating the subconscious of his targets.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="Taken" data-src="img/taken.jpg" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">Liam Neeson plays Bryan Mills, a former CIA operative who sets about tracking down his teenage daughter Kim (Grace) and her best friend Amanda
                 (Cassidy) after the two girls are kidnapped by Albanian human traffickers while traveling in France during a vacation.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="The Lion King" data-src="img/lionKing" alt="img/noImage.jpg">
              <div class="card-body">
                <p class="card-text">The Lion King tells the story of Simba (Swahili for lion), a young lion who is to succeed his father, Mufasa, as King of the Pride Lands;
                 however, after Simba's paternal uncle Scar murders Mufasa, Simba is manipulated into thinking he was responsible and flees into exile.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">The Lion King tells the story of Simba (Swahili for lion), a young lion who is to succeed his father, Mufasa, as King of the Pride Lands;
                 however, after Simba's paternal uncle Scar murders Mufasa, Simba is manipulated into thinking he was responsible and flees into exile.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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
        <a href="movies.html">Back to top</a>
      </p>
    </div>
  </footer>
</body>
</html>