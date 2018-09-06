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
/*
session_start();
if(!isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] != TRUE) {
    header("Location: login.php");
    $errors[] = '403 access denied';
} else {

}
*/


include 'inc/navigation.php';
?>
<div class="container">
            <?php echo "<p>Bekijk hier de huisjes " . $_SESSION['USER']  . " " . $_SESSION['ID'] . "</p>"; ?>
    <div class="row">
        <div class="col-lg-12 jumbotron">
            <h2>Huisjes:</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Huisje</th><th>Informatie</th><th>Prijs p/dag</th><th>Foto's</th><th>Reserveren</th>
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
