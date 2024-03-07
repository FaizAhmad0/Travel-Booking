<!DOCTYPE html>
<html lang="en">
<head>
    <title>payment</title>
    <link rel="stylesheet" href="payment.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></script>
    <style>
        .amountBox{
    width: 80%;
    height: 5%;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-right: 20px;
    padding-left: 20px;
}
    </style>
</head>
<body>
    <form action="payscrip.php"method="post">
        <div class="container">
            <div class="container">
                <div class="card">
                    <img src="./img/rahul1.jpg"/>    
                    <div class="textBox">
                        <h2>Order Summary</h2>    
                        <p>
                            Your requested items have been successfully processed.Thank you for choosing us, and we hope you enjoying your purchase!
                        </p>        
                    </div>                    
                    <input type="text" id="name"class="amountBox" name="name" placeholder="Enter your full name">
                    <input type="text" id="email"class="amountBox" name="email" placeholder="Enter yor email here">
                    <input type="text" id="mobile"class="amountBox" name="mobile" placeholder="Enter mobile number">

                    <!-- <div id="amountBox">
                        <div id="leftBox">    
                            <input type="text" id="amount" name="amount" placeholder="Enter the amout to pay...">
                        </div>    
                        
                    </div> -->
                    <!-- <button id="paymentButton">Proceed to Payment</button>    -->


                    <input type="submit" value="Proceed to payment" id="paymentButton">
                    <div class="cancelBox">
                        <a href="#"> Cancel Order</a>
                    </div>    
                </div>    
            </div>
        </div>
    </form>
</body>
</html>