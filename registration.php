<?php

session_start();
header('location:login.php');

include './dbconnection.php';

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from register where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($email == "sameera@gmail.com" || $email == "tours@mlankatravel.xyz") {

    if ($num == 1) {
        echo 'Username already taken';
        $_SESSION["alreadyregistered"]= "true";
    } else {
        $reg = "insert into register(username,email,password)values('$name','$email','$pass')";
        mysqli_query($con, $reg);
        echo "Registration successful";
    }
} else {

   $_SESSION["popupmsgalert"]= "true";
}
?>
