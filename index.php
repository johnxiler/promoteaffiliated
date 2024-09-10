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

    <div class="container" id="products-container">
        <!-- Products will be dynamically inserted here -->
    </div>

    <!-- Firebase App (the core Firebase SDK) -->
    <script src="https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js"></script>
    <!-- Firebase Realtime Database -->
    <script src="https://www.gstatic.com/firebasejs/9.22.0/firebase-database.js"></script>
    <!-- Firebase configuration -->
    <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAZHD5z6JQnp90onGCmV7GNh4l9HbotzoM",
            authDomain: "affiliatedproducts-6f7ca.firebaseapp.com",
            databaseURL: "https://affiliatedproducts-6f7ca-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "affiliatedproducts-6f7ca",
            storageBucket: "affiliatedproducts-6f7ca.appspot.com",
            messagingSenderId: "754282265778",
            appId: "1:754282265778:web:3514d9e81c206a0c911dab"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        // Reference to the Realtime Database
        const database = firebase.database();

        // Fetch and display products
        document.addEventListener('DOMContentLoaded', function() {
            const productsRef = database.ref('products');
            productsRef.once('value').then(snapshot => {
                const products = snapshot.val();
                const container = document.getElementById('products-container');
                
                for (const key in products) {
                    if (products.hasOwnProperty(key)) {
                        const product = products[key];
                        const card = document.createElement('div');
                        card.className = 'product-card';
                        card.innerHTML = `
                            <a href="${product.affiliate_link}" target="_blank">
                                <img src="${product.image_url}" alt="${product.name}">
                                <h2>${product.name}</h2>
                                <p>$${product.price.toFixed(2)}</p>
                            </a>
                        `;
                        container.appendChild(card);
                    }
                }
            }).catch(error => console.error('Error fetching data:', error));
        });
    </script>
</body>
</html>
