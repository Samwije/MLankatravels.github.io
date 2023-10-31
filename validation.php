<?php

session_start();


include './dbconnection.php';


$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from register where email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$_SESSION["user_checked"]= null;
if($num == 1){
    $_SESSION['email'] = $email;
    header('location:home.php');
    $_SESSION["user_checked"]= "true";
}else{
    $_SESSION["user_checked"]= null;
    header('location:login.php');
    $_SESSION['usernameorpasswordincorrect']="true";
}
?>