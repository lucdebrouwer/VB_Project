<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>    
</head>
<body>
<?php 
 include('inc/logout.inc.php');
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>U bent nu uitgelogd. Klik <a href="index.php">hier</a> om terug te gaan naar de home pagina.</p>
            </div>
        </div>
    </div>
</body>
</html>