<?php
include 'connect.php';

$fn = $_POST['fname'];
$lm = $_POST['lname'];
$comment = $_POST['feedback'];


$query = "INSERT INTO feedback(f_name,l_name,comment) VALUES('$fn', '$lm','$comment')";
$run = mysqli_query($con, $query);

if(!$run) {
    echo "submission failed";
}else{

header('location:index.html');
}

?>