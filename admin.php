<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel | TECHCORP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
            <a href="logout.php" class="btn btn-sm btn-outline-danger">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>All Customer Messages</h4>
        <button id="refreshBtn" class="btn btn-sm btn-primary" onclick="tableRefresh()">
            <span id="btnText">Refresh Messages</span>
        </button>
    </div>
        <div class="card border-0 shadow-sm">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="messageTableBody">
                    <?php
                    $sql = "SELECT * FROM messages ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['message']}</td>
                                <td>{$row['created_at']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>