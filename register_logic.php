<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hashing

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);
    
    if ($stmt->execute()) {
        echo "<script>
            alert('Registration successful!');
            window.location.href = 'login.php';
        </script>";
    } else {
        "<script>
            alert('Registration successful!');
            window.location.href = 'register.php';
        </script>";
    }
}
?>