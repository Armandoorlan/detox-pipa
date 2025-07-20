<?php
// Test script untuk memverifikasi path gambar
require_once 'includes/product-helper.php';

$helper = new ProductHelper();
$products = $helper->getProductsByLayanan('filter-air', 'malang');

echo "<h1>Test Image Paths</h1>";

foreach ($products as $product) {
    echo "<h2>{$product['nama']} (ID: {$product['id']})</h2>";
    
    $images = $helper->getProductImages($product);
    echo "<ul>";
    foreach ($images as $image) {
        $file_path = $_SERVER['DOCUMENT_ROOT'] . $image;
        $file_exists = file_exists($file_path);
        
        echo "<li>";
        echo "<strong>Image:</strong> " . htmlspecialchars($image) . "<br>";
        echo "<strong>File Path:</strong> " . htmlspecialchars($file_path) . "<br>";
        echo "<strong>Exists:</strong> " . ($file_exists ? '✅ Yes' : '❌ No') . "<br>";
        
        if ($file_exists) {
            echo "<strong>Size:</strong> " . number_format(filesize($file_path)) . " bytes<br>";
            echo "<img src='{$image}' style='max-width: 200px; max-height: 150px; object-fit: cover; border: 1px solid #ddd; margin: 10px 0;'>";
        }
        echo "</li>";
    }
    echo "</ul>";
}

echo "<h2>Raw JSON Data</h2>";
foreach ($products as $product) {
    echo "<h3>{$product['nama']}</h3>";
    echo "<pre>" . json_encode($product['gambar'], JSON_PRETTY_PRINT) . "</pre>";
}
?> 