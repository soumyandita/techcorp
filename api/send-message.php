<?php

// header("Content-Type: application/json");
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"));

    $name = $data->name;
    $email = $data->email;
    $message = $data->message;

    $sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo json_encode([
            "response" => "Message Send Successfully!!!"
        ]);
    } else {
        echo json_encode([
            "response" => "Something went wrong!!!"
        ]);
    }
}

?>