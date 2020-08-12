<?php include_once './includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
  <title>LAMP Stackers</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="icon" href="./includes/img/bulbicon.png" type="image/png">

  <style>
    .parallax-container {
      height: 500px;
    }

    body {
      background-color: #B8C4DA;
    }

    #header {
      color: white;
      position: absolute;
      z-index: 1000;
      top: 200px;
      left: 200px
    }
  </style>

</head>
<body>
  <nav class="nav-wrapper blue lighten-1 right-align">
    <div class="container blue-text text-darken-2">
      <a href="#" class="sidenav-trigger" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="./login.php">Sign In</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-links">
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="./login.php">Sign In</a></li>
  </ul>

  

  <div class="parallax-container">
      <div class="parallax"><img src="./includes/img/railpic.jpeg"></div>
  </div>

  <h3 id="header">Welcome to LAMP Stackers!<br></h3>
  
  <div class="container center-align">
    

    <div class="row center-align">
      <?php
        $sql = "SELECT * FROM lamp;";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo '<div class= "col s12 l4">';
            echo '<blockquote class="' . $row['color'] . '-text text-darken-3">' . 'Lamp ' . $row['id'] . 
            ' is ' . $row['color'] . ' and priced at $' . $row['price'] . '</blockquote><br>';
            

            echo '<div class="card large green lighten-3">';
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
  <script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>

</body>
</html>
