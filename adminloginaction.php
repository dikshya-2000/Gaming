<?php
include('connection.php');
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];
$sql= "SELECT * FROM admin_login WHERE email='$email' AND password='$password'";
$data= mysqli_query($conn,$sql);
if (mysqli_num_rows($data)) 
{
	echo "<script>alert('Login Successful!')</script>";
	echo "<script>window.location.href='admin.php'</script>";
}
else
{
	echo "<script>alert('Login UnSuccessful!')</script>";
	echo "<script>window.location.href='adminlogin.php'</script>";
}
?>