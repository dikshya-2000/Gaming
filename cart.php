<?php
include("connection.php");
$sql= "SELECT * FROM add_product";
$data= mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet"> -->
</head>
<body>
<div class="container">
	<h1>Shopping Cart</h1>
	
	<div class="cart">
		<?php
		foreach ($data as $value) {
		?>
		<div class="products">
			<div class="product">
				<img src="<?php echo $value['photo']?>">
				<div class="product-info">
					<h3 class="product-name"><?php echo $value['name']?></h3>
					<h4 class="product-price">$<?php echo $value['price']?></h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<a href="remove.php?id=<?php echo $value['id']?>" class="fa fa-trash" aria-hidden="true">
						<span class="remove">Remove</span></a>
							<!-- <a href=""><span class="remove">Remove</span></a> -->
					</p>
				</div>
			</div>
		<?php
		}
		?>
		</div>
		<div class="cart-total">
			<p>
				<span>Total Price</span>
				<?php
				$price=0;
				$sql1= "SELECT * FROM add_product";
				$data1= mysqli_query($conn,$sql1);
				$result= mysqli_fetch_assoc($data1);
				foreach ($data1 as $val) {
					$price = $price + $val['price'];
				}
				?>
				<span>$<?php echo $price;?></span>
			</p>
			<p>
				<span>Number of Items</span>
				<?php
				$price=0;
				$sql2= "SELECT count(id) AS id FROM add_product";
				$data2= mysqli_query($conn,$sql2);
				$result= mysqli_fetch_assoc($data2);
				?>
				<span><?php echo $result['id'];?></span>
			</p>
			<a class="a1" href="payment.php">Proceed to Checkout</a>
		</div>
	</div>

</div>

</body>
</html>