<?php
include("connection.php");
session_start();
$first= $_POST['firstname'];
$second= $_POST['lastname'];
$email= $_POST['email'];
$comment= $_POST['comment'];
// echo $first,$second,$email,$comment;
$sql= "INSERT INTO `contactus`(`user_id`, `firstname`, `lastname`, `email`, `comment`) VALUES ('','$first','$second','$email','$comment')";
$data= mysqli_query($conn,$sql);
if ($data) 
{
	echo "<script>alert('Thank you for your support!')</script>";
	echo "<script>window.location.href='duplicatehome.php'</script>";
}
else
{
	echo "Not Inserted";
}
?>