<?php

include('database.inc.php');
$sql = "SELECT * FROM Reserveringen";
$result = sqlsrv_query($conn, $sql);

?>
