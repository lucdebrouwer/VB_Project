<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<?php

if (isset($_SESSION['LOGGED_IN']) && $_SESSION['USER'] == 'beheer@webverhuur.com') {
    echo '
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="reserveringen.php">Reserveren</a>
    <a href="contact.php">Contact</a>
    <a href="logout.php">Logout</a>
    </div>';
} elseif(isset($_SESSION['LOGGED_IN'])) {
    echo '
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="reserveringen.php">Reserveren</a>
    <a href="contact.php">Contact</a>
    <a href="logout.php">Logout</a>
    </div>';
} else {
    echo '
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    </div>';
}
?>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "15.6em";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
