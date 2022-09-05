<?php
include("connection.php");
$id= $_REQUEST['id'];
$sql= "DELETE FROM `add_product` WHERE id='$id'";
$data= mysqli_query($conn,$sql);
if ($data) 
{
	echo "<script>alert('Item removed from cart')</script>";
	echo "<script>window.location.href='cart.php'</script>";
} else 
{
	echo "<script>alert('Item not removed from cart')</script>";
	echo "<script>window.location.href='cart.php'</script>";
}
?>