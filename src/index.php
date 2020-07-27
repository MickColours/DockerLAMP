<?php include_once './includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
  <title>LAMP Stackers</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    
  </style>
</head>
<body>
  <nav class="nav-wrapper blue lighten-2 right-align">
    <div class="container blue-text text-darken-2">
      <a href="#" class="sidenav-trigger" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
  </ul>

  <div class="container center-align">
    <h3>Welcome to LAMP Stackers!<br></h1>
    <div class="row center-align">
      <?php
        $sql = "SELECT * FROM lamp;";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo '<div class= "col s12 l4">';
            echo '<blockquote class="' . $row['color'] . '-text text-lighten-2">' . 'Lamp ' . $row['id'] . 
            ' is ' . $row['color'] . ' and priced at $' . $row['price'] . '</blockquote><br>';
            

            echo '<div class="card blue-grey darken-1">';
            echo '  <div class="card-image">';
            echo '    <img src="' . $row['image'] . '" alt="' . $row['color'] . ' lamp">';
            echo '  </div>';
            echo '  <div class="card-content white-text">';
            echo '    <span class="card-title">Lamp ' . $row['id'] . '</span>';
            echo '    <p>This lovely lamp is now at the low low price of $' . $row['price'] . ' and much much more 
                      could be said about the magical light sources in our homes that we all take for granted 
                      in their seemingly infinite luminence and wonder!</p>';
            echo '  </div>';
            echo '</div>';
            echo '</div>';
          }
        }
      ?>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
    })
  </script>
</body>
</html>
