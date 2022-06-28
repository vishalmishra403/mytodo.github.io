<?php

$con = mysqli_connect('localhost','root');
if($con){

echo "success!";
}else{
    echo "not success";
}

mysqli_select_db($con,'tododata');
$username = $_POST['uname'];
$password = $_POST['pswd'];

$query = "INSERT INTO `todologindata` (`sno.`, `username`, `password`) VALUES (NULL, '$username', '$password');";

mysqli_query($con, $query);
// echo "$query";
header('location:http://localhost/IP-Project/Dashboard/todo.php');

?>
