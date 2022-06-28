<?php

$con = mysqli_connect('localhost','root');
if($con){

echo "success!";
}else{
    echo "not success";
}

mysqli_select_db($con,'tododata');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$confirm_password = $_POST['confirm_pswd'];

$query = "INSERT INTO `todoregisterdata` (`sno.`, `username`, `email`, `password`, `confirm_password`) VALUES (NULL, '$username', '$email', '$password', '$confirm_password');";

mysqli_query($con, $query);
// echo "$query";
header('location:http://localhost/IP-Project/Dashboard/todo.php');

?>
