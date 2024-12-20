<?php
session_start();
include("database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        
        $_SESSION['Name'] = $user['Name'];
        $_SESSION['userid'] = $user['UserID'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Please use the login form to access this page.";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>article management</title>
  <link rel="stylesheet" href="sign_in.css">
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="sign_in.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>

</html>