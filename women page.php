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
            <a href="main.php">Best Seller</a>
            <a href="mens page.php">mens wear</a>
            <a href="women page.php">womens wear</a>
            <a href="accessories.php">accessories</a>
            <a href="cart.php">cart</a>
            <a href="about us.php">about us</a>
        </center>        
    </nav>
    
    <div class="text">
        <h1>womens wear</h1>
    </div>       
    <div class="product-grid">
    <div class="product">
            <img src="women1.jpg">
            <p><strong>Name:</strong> Spider Web Tee</p>
            <p><strong>Price:</strong> 599</p>
            <p><strong>Color:</strong> Pink</p>
            <p><strong>Material:</strong> Cotton, Polyester</p>
            <label for="size7"><strong>Size:</strong></label>
            <select id="size7">
                <option value="S">S</option>
                <option value="M">M</option>
            </select>
            <label for="qty7">Quantity:</label>
            <input type="number" id="qty7" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="women2.jpg">
            <p><strong>Name:</strong> DuskFlex</p>
            <p><strong>Price:</strong> 350</p>
            <p><strong>Color:</strong> Dustyrose</p>
            <p><strong>Material:</strong> Cotton</p>
            <label for="size8"><strong>Size:</strong></label>
            <select id="size8">
                <option value="S">S</option>
            </select>
            <label for="qty8">Quantity:</label>
            <input type="number" id="qty8" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="women3.jpg">
            <p><strong>Name:</strong> Bone Drip Cargos</p>
            <p><strong>Price:</strong> 500</p>
            <p><strong>Color:</strong> Off White</p>
            <p><strong>Material:</strong> Polyester</p>
            <label for="size9"><strong>Size:</strong></label>
            <select id="size9">
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <label for="qty9">Quantity:</label>
            <input type="number" id="qty9" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="women4.jpg">
            <p><strong>Name:</strong> Plum Rust Crop</p>
            <p><strong>Price:</strong> 350</p>
            <p><strong>Color:</strong> Purple Brown</p>
            <p><strong>Material:</strong> Wool</p>
            <label for="size10"><strong>Size:</strong></label>
            <select id="size10">
                <option value="S">S</option>
                <option value="M">M</option>
            </select>
            <label for="qty10">Quantity:</label>
            <input type="number" id="qty10" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="women5.jpg">
            <p><strong>Name:</strong> Velvet Street Polo</p>
            <p><strong>Price:</strong> 250</p>
            <p><strong>Color:</strong> Brown</p>
            <p><strong>Material:</strong> Cotton</p>
            <label for="size11"><strong>Size:</strong></label>
            <select id="size11">
                <option value="S">S</option>
            </select>
            <label for="qty11">Quantity:</label>
            <input type="number" id="qty11" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

        <div class="product">
            <img src="women6.jpg">
            <p><strong>Name:</strong> Groove Motion Tee</p>
            <p><strong>Price:</strong> 350</p>
            <p><strong>Color:</strong> White</p>
            <p><strong>Material:</strong> Cotton, Polyester</p>
            <label for="size12"><strong>Size:</strong></label>
            <select id="size12">
                <option value="M">M</option>
            </select>
            <label for="qty12">Quantity:</label>
            <input type="number" id="qty12" value="1" min="1">
            <button onclick="done()">Add to Cart</button>
        </div>

    </div>
    <script src="website.js"></script>
</body>
</html>
