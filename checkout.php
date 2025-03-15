<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Malvar Street Wear.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="pages-style.css">
</head>
<body>
    <center>
 <div class="checkout-container">
    <h2>CHECK OUT</h2>
    <div class="order">
        <h3>Your Order</h3>
        <strong>Total:</strong>₱0
</div>
<form id="checkout-form" action="https://formsubmit.co/clarenceconde493@gmail.com" method="POST">
   <label for="name">Full Name:</label>
   <input type="text" id="name" required>
   <label for="address">Shipping Address:</label>
   <input type="text"  id="address" required>
   <label for="payment">Payment Method:</label>
   <select id="payment">
                <option value="Cash on Delivery">Cash on Delivery</option>
                <option value="Gcash">Gcash</option>
            </select>
    <label for="gcash-number">Gcash Number:</label>
    <input type="text" id="gcash-number" placeholder="Enter your Gcash number">

            <button type="submit" id="confirm">Confirm Order</button>
            <input type="hidden" name="_next" value="http://localhost/street%20wear/main.php">
        </form>
</div>
</center>
</body>
</html>
