<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        if ($password === $user['pass']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['fullname'] = $user['fname'];
            
            header('Location: dashboard.php');
            exit();
        } else {
            $_SESSION['login_error'] = "Incorrect password";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Email not found";
        header('Location: login.php');
        exit();
    }
} else {
    $_SESSION['login_error'] = "Invalid request";
    header('Location: login.php');
    exit();
}
?>