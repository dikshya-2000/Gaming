<?php
include("connection.php");
$id=$_REQUEST['id'];
$sql= "SELECT * FROM cart WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
$name= $result['name'];
$price= $result['price'];
$photo= $result['photo'];
$sql2="INSERT INTO `add_product`(`id`, `name`, `price`, `photo`) VALUES ('','$name','$price','$photo')";
$data= mysqli_query($conn,$sql2);
if ($data) {
	echo "<script>alert('Item added to cart')</script>";
	echo "<script>window.location.href='Products.html'</script>";
} else {
	echo "<script>alert('Item not added to cart')</script>";
	echo "<script>window.location.href='Products.html'</script>";
}
?>