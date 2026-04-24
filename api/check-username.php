<?php

include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"));

    $username = $data->username;
    $sql = "SELECT COUNT(*) AS total FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row['total'] > 0) {
        echo json_encode([
            "status" => "exists",
            "message" => "Username already taken!"
        ]);
    }
    else {
        echo json_encode([
            "status" => "available",
            "message" => "Username is available!"
        ]);
    }
}

?>


