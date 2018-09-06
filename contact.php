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
            <form method="post" target="_self" class="form-group">
                <div class="row">
                    <div class="col form-group">
                        <label><?php echo $_SESSION['USER'] . " Laat hier uw vraag of bericht achter" ?></label>
                    </div>
                    <div class="col form-group">
                        <label>Bericht</label>
                        <textarea class="form-control" placeholder="Vul hier uw bericht/vraag in." name="bericht" maxlength="200" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Verstuur bericht" name="verzenden">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
