<script>alert('Redirecting to payment page!')</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment.css">

</head>
<body>

<div class="container">

    <form method="post" action="paymentaction.php">

        <div class="row">

            <div class="col">

                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <span>Cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name on card :</span>
                    <input type="text" placeholder="mr. john deo" name="name">
                </div>
                <div class="inputBox">
                    <span>Credit card number :</span>
                    <input type="number" placeholder="1111 2222 3333 4444" name="number">
                </div>
                <div class="inputBox">
                    <span>Exp Month :</span>
                    <input type="text" placeholder="january" name="month">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp Year :</span>
                        <input type="number" placeholder="2022" name="year">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" name="cvv">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="pay now" value="Pay Now" class="submit-btn">

    </form>

</div>    
    
</body>
</html>