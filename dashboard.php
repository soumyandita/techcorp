<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT name, email, message FROM messages WHERE email = ? ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TECHCORP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 80px;
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar { height: 70px; }
        .navbar-brand { font-weight: 800; font-size: 1.4rem; color: #0d6efd !important; }

        .dashboard-card {
            background: white;
            padding: 2rem; /* Adjusted for mobile */
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.03);
        }

        .btn-logout {
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: 600;
        }

        .card { width: 100%; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.html">TECHCORP</a>
            <div class="d-flex align-items-center">
                <span class="me-3 text-muted d-none d-sm-block">Welcome, <strong><?php echo htmlspecialchars($username); ?></strong></span>
                <a href="logout.php" class="btn btn-outline-danger btn-logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card border-0 shadow-sm p-4 p-md-5 text-center rounded-4">
                    <h3 class="fw-bold mb-3">Hello, <?php echo htmlspecialchars($username); ?>!</h3>
                    <p class="text-muted mb-4">You have successfully logged into your account.</p>

                    <div class="bg-light p-3 rounded-3 mb-4">
                        <p class="mb-0 text-secondary">Account Status: <span class="text-success fw-bold">Active</span></p>
                    </div>

                    <div class="d-grid">
                        <a href="logout.php" class="btn btn-danger btn-lg">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
