<?php
include '../db_connect.php';
header('Content-Type: application/json');

$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$messages = [];

while($row = mysqli_fetch_assoc($result)) {
    $messages[] = $row;
}

echo json_encode($messages);
?>