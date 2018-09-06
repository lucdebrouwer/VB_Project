<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
</head>
<body class="bg-dark">
<?php include 'inc/registratie.inc.php';?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 jumbotron">
              <h2>Registreren</h2>
              <p>Vul uw gegevens volledig in. Wilt u een wijzing door voeren omdat er iets verkeerd is gegaan of omdat er een waarde niet klopt?
              Bezoek dan onze <a href="contact.php">contactpagina</a> en laat een bericht achter met referentie: klantgegevens incorrect</p>
                <form method="post" class="form-group" action="">
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Voornaam" name="voornaam" required>
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Tussenvoegsel" name="tussenvoegsel">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Achternaam" name="achternaam" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Straat" name="straat" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Huisnummer" name="huisnummer" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Postcode" name="postcode" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Woonplaats" name="plaats" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Telefoon" name="telefoon" required>
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Mobiel" name="mobiel" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <input type="password" class="form-control" placeholder="Wachtwoord" name="wachtwoord" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Bankrekeningnummer" name="rekeningnummer" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <input type="submit" class="btn btn-primary form-control" value="Registreren" id="btnGroup" name="verzenden">
                    </div>
                </div>
                </form>
                <?php
                if(isset($_POST['verzenden']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
                    foreach($errors as $key => $value) {
                        echo "<ul>";
                        echo "<li>" . "$value" ."</ul>";
                        echo "</ul>";
                    }

                }


                 ?>
            </div>
        </div>
    </div>
</body>
</html>
