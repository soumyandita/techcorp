<?php
$conn = mysqli_connect("localhost", "root", "", "techcorp");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>