<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | TECHCORP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Create Account</h3>
            <form action="register_logic.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required onkeyup="checkUsername()">
                    <label id="result"></label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <p class="mt-3 text-center">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>