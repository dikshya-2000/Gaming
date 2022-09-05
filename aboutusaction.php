<?php
include('connection.php');
$email=$_REQUEST['email'];
$sql= "INSERT INTO `subscribe`(`user_id`, `email`) VALUES ('','$email')";
$data= mysqli_query($conn,$sql);
if ($data) 
{
	// echo "<script>alert('Congratulation!')</script>";
	echo "<script>alert('Congratulations! You have successfully subscribed to our newsletter.')</script>";
	echo "<script>window.location.href='About Us.html'</script>";
}
else
{
	echo "Not Inserted";
}
?>