<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .product-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s;
        }
        .product-card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-card a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Featured Products</h1>
    </div>

    <div class="container">
        <!-- Shopee Product -->
        <div class="product-card">
            <a href="redirect.php?product=shopee-product" target="_blank">
                <img src="https://via.placeholder.com/300x200?text=Shopee+Product" alt="Shopee Product">
                <h2>Shopee Product Name</h2>
                <p>$Price</p>
            </a>
        </div>

        <!-- Lazada Product -->
        <div class="product-card">
            <a href="redirect.php?product=lazada-product" target="_blank">
                <img src="https://via.placeholder.com/300x200?text=Lazada+Product" alt="Lazada Product">
                <h2>Lazada Product Name</h2>
                <p>$Price</p>
            </a>
        </div>
    </div>
</body>
</html>
