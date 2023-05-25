<?php
require_once "test/db_conn.php";

$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$conPassword = $_POST['confirmPassword'];
$userType = $_POST['userType'];


if (mysqli_query($conn , "INSERT INTO `users` (`id`, `username`, `email`, `password`, `typeOfUser`) VALUES (NULL, '$uname', '$email', '$pass', '$userType');")) {

    include_once "index.php";
}


?>