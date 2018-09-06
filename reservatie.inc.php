<?php
    // Provides connection variable
    include('inc/database.inc.php');


    $errors = array();
    $id = $_SESSION['ID'];


    $sql2 = "SELECT huurID, begindatum, einddatum, aantal_personen, linnengoed FROM Reserveringen WHERE huurID = $id";
    $result = sqlsrv_query($conn, $sql2);
    if(isset($_POST['verzenden']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

            $begin = $_POST['begin'];
            $eind = $_POST['eind'];
            $aantal = $_POST['aantal'];
            $linnen = $_POST['linnen'];


            $sql = "INSERT INTO Reserveringen(huurID, begindatum, einddatum, aantal_personen, linnengoed) VALUES(?, ?, ?, ?, ?)";
            $param1 = $id;
            $param2 = $begin;
            $param3 = $eind;
            $param4 = $aantal;
            $param5 = $linnen;
            $procedure_params = array(&$param1, &$param2, &$param3, &$param4, &$param5);
            //var_dump($sql);
            //console.log($sql);
            /* Prepare the statement. */
            if ($stmt = sqlsrv_prepare($conn, $sql, $procedure_params)) {
                //echo "Statement prepared.\n";
            } else {
                //echo "Statement could not be prepared.\n";
                die(print_r(sqlsrv_errors(), true));
            }
            /* Execute the statement. */
            if (sqlsrv_execute($stmt)) {
                //echo "Statement executed.\n";
                echo 'Uw reservering is geplaatst';
            } else {
                echo "Statement could not be executed.\n";
                die(print_r(sqlsrv_errors(), true));
            }


      } else {
          $errors[] = "Request method is niet post of er is nog niet op verzonden geklikt";
      }





?>
