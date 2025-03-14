<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malvar Street Wear</title>
    <link rel="stylesheet" href="pages-style.css">
</head>
<body>
<header>
    <h1>Malvar Street Wear</h1>
    <form>
        <input type="search" id="search" placeholder="Search..">
</form>
        <a href="welcome.php" id="home">HOME</a>
        <a href="login.php" id="log-in">LOG IN</a>
</header>
    <nav>
        <center>
            <a href="main.php">best seller</a>
            <a href="mens page.php">mens wear</a>
            <a href="women page.php">womens wear</a>
            <a href="accessories.php">accessories</a>
            <a href="cart.php">cart</a>
            <a href="about us.php">about us</a>
        </center>        
    </nav>
    
    <div class="text">
        <h1>mens wear</h1>
    </div>       
    <div class="product-grid">
    <div class="product">
            <img src="men1.jpg">
            <p><strong>Name:</strong> Malandro Blaco</p>
            <p><strong>Price:</strong> 1200</p>
            <p><strong>Color:</strong> White</p>
            <p><strong>Material:</strong> Cotton</p>
            <label for="size1">Size:</label>
            <select id="size1">
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
            <label for="qty1">Quantity:</label>
            <input type="number" id="qty1" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="men2.jpg">
            <p><strong>Name:</strong> Anino Drift</p>
            <p><strong>Price:</strong> 950</p>
            <p><strong>Color:</strong> Grey</p>
            <p><strong>Material:</strong> Polyester</p>
            <label for="size2">Size:</label>
            <select id="size2">
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <label for="qty2">Quantity:</label>
            <input type="number" id="qty2" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="men3.jpg">
            <p><strong>Name:</strong> Brown Hustle</p>
            <p><strong>Price:</strong> 699</p>
            <p><strong>Color:</strong> Brown</p>
            <p><strong>Material:</strong> Cotton</p>
            <label for="size3">Size:</label>
            <select id="size3">
                <option value="32">32</option>
                <option value="34">34</option>
                <option value="36">36</option>
            </select>
            <label for="qty3">Quantity:</label>
            <input type="number" id="qty3" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="men4.png">
            <p><strong>Name:</strong> Cavs</p>
            <p><strong>Price:</strong> 250</p>
            <p><strong>Color:</strong> Black</p>
            <p><strong>Material:</strong> Mesh Fabric</p>
            <label for="size4">Size:</label>
            <select id="size4">
                <option value="S">S</option>
                <option value="M">M</option>
            </select>
            <label for="qty4">Quantity:</label>
            <input type="number" id="qty4" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="men5.jpg">
            <p><strong>Name:</strong> Raw Thread</p>
            <p><strong>Price:</strong> 520</p>
            <p><strong>Color:</strong> Black</p>
            <p><strong>Material:</strong> Denim</p>
            <label for="size5">Size:</label>
            <select id="size5">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <label for="qty5">Quantity:</label>
            <input type="number" id="qty5" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="men6.png">
            <p><strong>Name:</strong> Apolaki Blaze</p>
            <p><strong>Price:</strong> 730</p>
            <p><strong>Color:</strong> Black</p>
            <p><strong>Material:</strong> Cotton</p>
            <label for="size6">Size:</label>
            <select id="size6">
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <label for="qty6">Quantity:</label>
            <input type="number" id="qty6" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>        
    </div>
    <script src="website.js"></script>
</body>
</html>
