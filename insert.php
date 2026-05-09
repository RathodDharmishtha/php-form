<?php 
$host="localhost";
$user="root";
$password="";
$database="test";

$con=mysqli_connect($host,$user,$password,$database);

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];

$sql="INSERT INTO `user` (`name`, `email`, `password`, `gender`) VALUES ('$name', '$email', '$password', '$gender')";
mysqli_query($con,$sql);
echo 'record inserted successfully!';
?>