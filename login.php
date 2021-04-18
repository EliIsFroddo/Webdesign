<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <!-- Login Form -->
    <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'comp1230') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  header("Location: index.php");
                  exit;
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div>
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         
      </div>
</body>
</html>