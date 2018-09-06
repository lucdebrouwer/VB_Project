<?php
$errors = array();
if(empty($_POST['gebruikersnaam']) && empty($_POST['wachtwoord'])) {
 $errors[] = "Gebruikersnaam of wachtwoord is niet ingevuld";
} else {
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verzenden'])) {
            // Provides connection variable
            include('inc/database.inc.php');
            $gebruikersnaam = $_POST['email'];
            $wachtwoord = $_POST['wachtwoord'];
            if(!isset($_POST['email']) || !isset($_POST['wachtwoord'])) {
              $errors[] = "Velden zijn niet ingevuld";
            } else {
              $sql = "SELECT huurID, email, wachtwoord FROM Huurders WHERE email = ?";
              //$param1 = $id;
              $param2 = $gebruikersnaam;
              $param3 = $wachtwoord;
              $procedure_params = array(&$param2, &$param3);

              /* Prepare the statement */
              if ($stmt = sqlsrv_prepare($conn, $sql, $procedure_params)) {
                  //echo "Statement prepared.\n";
              } else {
                  echo "Statement could not be prepared.\n";
                  die(print_r(sqlsrv_errors(), true));
              }
              /* Execute the statement. */
              if (sqlsrv_execute($stmt)) {
                  //echo "Statement executed.\n";
                  while($row = sqlsrv_fetch_array($stmt)) {
                      if(password_verify($wachtwoord, $row[2]))
                      {
                          $_SESSION['LOGGED_IN'] = TRUE;
                          $_SESSION['ID'] = $row[0];
                          $_SESSION['USER'] = $gebruikersnaam;
                          
                        //  header('Location: reserveringen.php');

                      } else {
                          session_unset();
                          session_destroy();
                          $_SESSION['LOGGED_IN'] = FALSE;
                          $errors[] = "Something went wrong, please try again";
                      }
                  }
              } else {
                  echo "Statement could not be executed.\n";
                  die(print_r(sqlsrv_errors(), true));
          }
      }
            }

}


?>
