<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    // DO NOTHING FOR NOW
} else {
    if(isset($_POST['verzenden']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
      $errors = array();
      $voornaam = $_POST['voornaam'];
      $tussenvoegsel = $_POST['tussenvoegsel'];
      $achternaam = $_POST['achternaam'];
      $straat = $_POST['straat'];
      $huisnummer = $_POST['huisnummer'];
      $postcode = $_POST['postcode'];
      $plaats = $_POST['plaats'];
      $telefoon = $_POST['telefoon'];
      $mobiel = $_POST['mobiel'];
      $email = $_POST['email'];
      $rekeningnummer = $_POST['rekeningnummer'];
      if(empty($voornaam)) {
        $errors[] = "Voornaam is niet ingevuld";
      }
      if(empty($tussenvoegsel)) {

      }
      if(empty($achternaam)) {
        $errors[] = "Achternaam is niet ingevuld";
      }
      if(empty($straat)) {
        $errors[] = "Straat is niet ingevuld";
      }
      if(empty($huisnummer)) {
        $errors[] = "Huisnummer is niet ingevuld";
      }
      if(empty($postcode)) {
        $errors[] = "Postcode is niet ingevuld";
      }
      if(empty($plaats)) {
        $errors[] ="Plaats is niet ingevuld";
      }
      if(empty($telefoon)) {
        $errors[] = "Telefoonnummer is niet ingevuld";
      }
      if(empty($mobiel)) {
        $errors[] = "Mobiel is niet ingevuld";
      }
      if(empty($email)) {
        $errors[] = "Email is niet ingevuld";
      }
      if(empty($_POST['wachtwoord'])) {
        $errors[] = "Wachtwoord is niet ingevuld";
      } else {
          $hash = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
          //$hash = password_hash($_POST['user_pass'], PASSWORD_DEFAULT);

      }
      if(empty($rekeningnummer)) {
        $errors[] = "Rekeningnummer is niet ingevuld";
      }
      // Provides connection variable
      include('inc/database.inc.php');
      if(empty($voornaam) && empty($achternaam) && empty($straat) && empty($huisnummer) && empty($postcode) && empty($plaats) && empty($telefoon) && empty($mobiel) && empty($email) && empty($_POST['wachtwoord'])){

      } else {
            $sql = "INSERT INTO Huurders(voornaam, tussenvoegsel, achternaam, straat, huisnummer, postcode, woonplaats, telefoon, mobiel, email, wachtwoord, bankrekeningnr) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $param1 = $voornaam;
            $param2 = $tussenvoegsel;
            $param3 = $achternaam;
            $param4 = $straat;
            $param5 = $huisnummer;
            $param6 = $postcode;
            $param7 = $plaats;
            $param8  = $telefoon;
            $param9  = $mobiel;
            $param10  = $email;
            $param11 = $hash;
            $param12 = $rekeningnummer;
          	$procedure_params = array(&$param1, &$param2, &$param3, &$param4, &$param5, &$param6, &$param7, &$param8, &$param9, &$param10, &$param11, &$param12);


            /* Prepare the statement. */
            if ($stmt = sqlsrv_prepare($conn, $sql, $procedure_params)) {
                echo "Statement prepared.\n";
            } else {
                echo "Statement could not be prepared.\n";
                die(print_r(sqlsrv_errors(), true));
            }
            /* Execute the statement. */
            if (sqlsrv_execute($stmt)) {
                header('Location: login.php');
                echo "Statement executed.\n";
            } else {
                echo "Statement could not be executed.\n";
                die(print_r(sqlsrv_errors(), true));
            }
          }
      }
  }
?>
