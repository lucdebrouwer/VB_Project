<?php


    $serverName = "192.168.48.7\SQL02"; //serverName\instanceName
    $connectionInfo = array("Database"=>"webverhuur", "UID"=>"", "PWD"=>"");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if(!$conn) {
      exit("Error: could not establish database connection");
    }
    else {

    }


?>
