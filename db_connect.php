<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbdatabase = "techcorp";
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
