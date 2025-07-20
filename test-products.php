<?php
// Test file untuk memverifikasi ProductHelper multi-kota
require_once 'includes/product-helper.php';

$helper = new ProductHelper();

echo "<h1>Test ProductHelper Multi-Kota</h1>";

// Test 1: Get products by layanan
echo "<h2>Test 1: Get Filter Air Products</h2>";
$cabangs = ['malang', 'surabaya', 'sidoarjo', 'jakarta'];

foreach ($cabangs as $cabang) {
    echo "<h3>Cabang: $cabang</h3>";
    $products = $helper->getProductsByLayanan('filter-air', $cabang);
    
    if (!empty($products)) {
        echo "<ul>";
        foreach ($products as $product) {
            $price = $product['harga'][$cabang] ?? null;
            echo "<li>";
            echo "<strong>{$product['nama']}</strong> (ID: {$product['id']})<br>";
            if ($price) {
                echo "Harga: " . $helper->formatPrice($price['harga']) . "<br>";
                echo "Diskon: {$price['diskon']}%<br>";
                echo "Gratis Ongkir: " . ($price['gratis_ongkir'] ? 'Ya' : 'Tidak') . "<br>";
            } else {
                echo "Harga: Tidak tersedia<br>";
            }
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada produk ditemukan</p>";
    }
}

// Test 2: Get specific product
echo "<h2>Test 2: Get Specific Product</h2>";
$product = $helper->getProductById('FA001', 'malang');
if ($product) {
    echo "<h3>Produk: {$product['nama']}</h3>";
    echo "<p>Deskripsi: {$product['deskripsi']}</p>";
    echo "<p>Rating: {$product['rating']}</p>";
    echo "<p>Terjual: {$product['terjual']}</p>";
    
    if (isset($product['harga'])) {
        echo "<h4>Harga per Cabang:</h4>";
        foreach ($product['harga'] as $cabang => $price_data) {
            echo "<p><strong>$cabang:</strong> " . $helper->formatPrice($price_data['harga']) . "</p>";
        }
    }
} else {
    echo "<p>Produk tidak ditemukan</p>";
}

// Test 3: Get cabang data
echo "<h2>Test 3: Get Cabang Data</h2>";
$cabang_data = $helper->getCabangData('malang');
if ($cabang_data) {
    echo "<h3>Cabang: {$cabang_data['nama']}</h3>";
    echo "<p>Alamat: {$cabang_data['alamat']}</p>";
    echo "<p>Telepon: {$cabang_data['kontak']['telepon']}</p>";
    echo "<p>Status: {$cabang_data['status']}</p>";
} else {
    echo "<p>Data cabang tidak ditemukan</p>";
}

// Test 4: Format price
echo "<h2>Test 4: Format Price</h2>";
$prices = [100000, 500000, 1000000, 2500000];
foreach ($prices as $price) {
    echo "<p>$price = " . $helper->formatPrice($price) . "</p>";
}

echo "<h2>Test Selesai</h2>";
?> 