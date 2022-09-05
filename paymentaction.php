<?php
include("connection.php");
$name= $_REQUEST['name'];
$number= $_REQUEST['number'];
$month= $_REQUEST['month'];
$year= $_REQUEST['year'];
$cvv= $_REQUEST['cvv'];
// echo $name,$email,$password;
	
	$sql= "INSERT INTO `card_details`(`user_id`, `name`, `number`, `month`, `year`, `cvv`) VALUES ('','$name','$number','$month','$year','$cvv')";
	$data= mysqli_query($conn,$sql);
	if ($data) 
	{
		echo "<script>alert('Payment Successful!')</script>";
		echo "<script>alert('Thanks for Shopping with us! Visit Again')</script>";
		echo "<script>window.location.href='index.html'</script>";
	}
	else
	{
		echo "<script>alert('Payment Failed!')</script>";
		echo "<script>window.location.href='payment.php'</script>";
	}
?>