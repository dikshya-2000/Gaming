<?php
include("connection.php");
session_start();
$email= $_POST['passemail'];
$sql= "SELECT * FROM game_registration WHERE email='$email'";
$data= mysqli_query($conn,$sql);
if (mysqli_num_rows($data)>0) 
{
	// echo "Login Successful";
	$_SESSION['email1']=$email;
	header('location:newpassword.php');
}
else
{
	echo "<script>alert('Email Id Not Exist!')</script>";
	echo "<script>window.location.href='forgetpassword.php'</script>";
}
?>