<?php include_once './includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
  <title>LAMP Stackers</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="icon" href="./includes/img/bulbicon.png" type="image/png">
  <link rel="stylesheet" href="./includes/css/loginCSS.css">
  <style>
    
  </style>

</head>
<body>
  <nav class="nav-wrapper blue lighten-1 right-align">
    <div class="container blue-text text-darken-2">
      <a href="#" class="sidenav-trigger" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>

      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-links">
        <li><a href="./index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
  </ul>


  <div class="container">
    <div class="row login">
      <div class="col s12 l6 offset-l3">
        <div class="card">
          <div class="card-action center-align">
            <h4> Login </h4>
          </div>
         <div class="card-content">
            

            <div class="input-field">
              <input placeholder="Light" id="first_name" type="text" class="">
              <label for="first-name">First Name</label>
            </div>

            <div class="input-field">
              <input placeholder="Bulb" id="last_name" type="text" class="">
              <label for="last-name">Last Name</label>
            </div>

            <div class="input-field">
              <input id="password-field" type="password" class="">
              <label for="password">Password</label>
            </div>
            <div class="row">
              <div class="col">
                <form action="#">
                  <label>
                    <input type="checkbox"/>
                    <span>Remember me</span>
                  </label>
                </form>
              </div>
              <div class="col">
                <button class="btn-small" type="submit">Login</button>
              </div>
            </div>
         </div>
        </div>
      </div>
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
