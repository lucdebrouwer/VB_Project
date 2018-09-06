<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Aanmelden</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <body class="bg-dark bodyIndex">


  <?php
  session_start();
  include('inc/login.inc.php');
      //var_dump($_SESSION['LOGGED_IN'], $_SESSION['USER']);
  if(isset($_SESSION['LOGGED_IN']) && $_SESSION['USER'] == 'beheer@webverhuur.com') {
      header('Location: dashboard.php');
      //var_dump($_SESSION['LOGGED_IN'], $_SESSION['USER']);
  } else {
    if(isset($_SESSION['LOGGED_IN']) && $_SESSION['USER'] != 'beheer@webverhuur.com' && $_SESSION['user'] == $username) {
      header('Location: reserveringen.php');
    }
  }
  ?>
    	<div class="container">
        <div class="row jumbotron">
          <div class="col-lg-12">
            <h2>Aanmelden voor plaatsing reservatie</h2>
            <form class="form-group" method="post">
              <label for="Gebruikersnaam">Gebruikersnaam:</label>
              <input type="email" name="email" class="form-control"/>
              <label for="Wachtwoord">Wachtwoord:</label>
              <input type="password" name="wachtwoord" class="form-control">
              <input type="submit" name="verzenden" value="Aanmelden" class="btn btn-primary" id="btnGroup">
            </form>

            <p>Wilt u via de telefoon reserveren? Dan kan dit ook via onze <a href="contact.html">contactpagina</a>
          </div>
          <div class="col-lg-12">
            <p>Nog geen lid? Registreer je dan hier: <a href="registratie.php">Registreren</a></p>
            <?php

            if(!empty($_POST['email']) || !empty($_POST['wachtwoord'])) {
              foreach($errors as $key => $value) {
                echo "<li>" . $value . "</li>";
              }
            }
            ?>
          </div>
        </div>
      </div>
  </body>
</html>
