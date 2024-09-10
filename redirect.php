<?php
// redirect.php
$product = isset($_GET['product']) ? $_GET['product'] : '';

// Define affiliate links
$affiliates = [
    'shopee-product' => 'https://shopee.example.com/product-id',
    'lazada-product' => 'https://lazada.example.com/product-id'
];

// Redirect based on the product parameter
if (array_key_exists($product, $affiliates)) {
    header('Location: ' . $affiliates[$product]);
    exit();
} else {
    echo 'Product not found.';
}
?>
