<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
<?php
session_start();
if(!isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] != TRUE) {
    header("Location: login.php");
    $errors[] = '403 access denied';
} else {

}


include 'inc/navigation.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 jumbotron">
        <?php echo "<p>Welkom " . $_SESSION['USER']  . " " . $_SESSION['ID'] . "</p>"; ?>
        <h2>Reservering plaatsen</h2>
        <?php
            include('inc/reservatie.inc.php');
        ?>
        <form method="post" target="_self" class="form-group">
            <div class="row">
                <div class="col form-group">
                <label>Begin datum</label>
                    <input type="text" class="form-control" placeholder="Begin datum" name="begin" required>
                </div>
                <div class="col form-group">
                  <label>Eind datum</label>
                  <input type="text" class="form-control" placeholder="Eind datum" name="eind" required>
                </div>
                <div class="col form-group">
                  <label>Aantal personen</label>
                  <input type="text" class="form-control" placeholder="Aantal personen" name="aantal" required>
                </div>
                <div class="col form-group">
                  <label>Linnen (J/N)</label>
                    <select class="form-control" name="linnen" required>
                        <option>-- selecteer --</option>
                        <option value="0">Nee</option>
                        <option value="1">Ja</option>
                    </select>
              </div>
      </div>
        <input type="submit" class="form-control btn btn-primary" value="Plaats reservatie" name="verzenden">
      </form>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12 jumbotron">
          <h2>Mijn Reserveringen:</h2>
          <div class="table-responsive">


          <table class="table table-striped">
              <thead class="thead-dark">
                  <tr>
                      <th>HuurID</th><th>Begin datum</th><th>Eind datum</th><th>Aantal personen</th><th>Linnen</th>
                  </tr>
              </thead>
              <tbody>

              <?php

                  while($row = sqlsrv_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . $row[0] . "</td>";
                  echo "<td>" . $row[1] . "</td>";
                  echo "<td>" . $row[2] . "</td>";
                  echo "<td>" . $row[3] . "</td>";
                  echo "<td>" . $row[4] . "</td>";
                  echo "</tr>";
                  }
              ?>

              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

</body>
</html>
