<?php
include 'connect.php';
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $phn = $_POST['phone'];
    $pass = $_POST['password'];
    $con_pass = $_POST['confirm-password'];
    $type = $_POST['volunteer-type'];



    $query = "INSERT INTO register (fname, email, phn, pass, cpass, type) VALUES ('$fname', '$email', '$phn', '$pass', '$con_pass', '$type')";

    if (mysqli_query($con, $query)) {
        header('Location: login.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }


?>
