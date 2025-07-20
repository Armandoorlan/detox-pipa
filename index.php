<?php
/*
Template Name: BersihPipa.com - PWA Homepage
*/
header('Content-Type: text/html; charset=UTF-8');
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Include helper files
require_once 'includes/product-helper.php';

// Get selected cabang from URL parameter or default to malang
$selected_cabang = $_GET['cabang'] ?? 'malang';

// Validate cabang
$helper = new ProductHelper();
if (!$helper->isValidCabang($selected_cabang)) {
    $selected_cabang = $helper->getDefaultCabang();
}

// Get filter air products for the selected cabang
$filter_products = $helper->getProductsByLayanan('filter-air', $selected_cabang);

// Get cabang data
$cabang_data = $helper->getCabangData($selected_cabang);

// SEO Data
$page_title = "Jasa Detox Dan Bersih Pipa Mampet Kota Malang Terpercaya | BersihPipa.com";
$meta_description = "Jasa detox dan bersih pipa mampet Kota Malang terpercaya ✓ Teknologi canggih tanpa bongkar ✓ Garansi hasil ✓ Layanan 24/7 ✓ Harga mulai Rp 150.000 per kran. Hubungi sekarang!";
$meta_keywords = "jasa detox pipa malang, bersih pipa mampet malang, water treatment malang, fluks water malang, detox pipa tanpa bongkar malang";
$canonical_url = "https://bersihpipa.com/";

// Structured Data
$structured_data = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "BersihPipa.com - FLUKS Water Treatment",
    "description" => $meta_description,
    "url" => $canonical_url,
    "telephone" => "+6281236937200",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Jl. Candi Mendut No 23B",
        "addressLocality" => "Lowokwaru",
        "addressRegion" => "Kota Malang",
        "postalCode" => "65141",
        "addressCountry" => "ID"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => "-7.9666",
        "longitude" => "112.6326"
    ],
    "openingHours" => "Mo-Sa 08:00-17:00",
    "priceRange" => "Rp 150.000 - Rp 500.000",
    "serviceArea" => [
        "@type" => "City",
        "name" => "Malang"
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => "Layanan Detox Pipa",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Detox & Bersih Pipa",
                    "description" => "Pembersihan pipa tanpa bongkar dengan teknologi canggih"
                ],
                "price" => "150000",
                "priceCurrency" => "IDR"
            ]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QG7XXWW');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>

    <!-- PWA Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="theme-color" content="#0f766e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="BersihPipa">
    <meta name="mobile-web-app-capable" content="yes">
    
    <!-- SEO Meta Tags -->
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="<?= $meta_keywords ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="FLUKS Water Treatment">
    <link rel="canonical" href="<?= $canonical_url ?>">
    
    <!-- Open Graph -->
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:url" content="<?= $canonical_url ?>">
    <meta property="og:site_name" content="BersihPipa.com">
    <meta property="og:image" content="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $page_title ?>">
    <meta name="twitter:description" content="<?= $meta_description ?>">
    <meta name="twitter:image" content="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    <?= json_encode($structured_data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="/manifest.json">
    
    <!-- Icons -->
    <link rel="icon" type="image/png" href="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    <link rel="apple-touch-icon" href="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    <link rel="apple-touch-icon" sizes="167x167" href="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- Swiper CSS for Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {'sans': ['Inter', 'system-ui', 'sans-serif']},
                    colors: {
                        surface: {50:'#f8fafc',100:'#f1f5f9',200:'#e2e8f0',300:'#cbd5e1',400:'#94a3b8',500:'#64748b',600:'#475569',700:'#334155',800:'#1e293b',900:'#0f172a'},
                        teal: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                            950: '#042f2e',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        ::-webkit-scrollbar{width:3px;height:3px}
        ::-webkit-scrollbar-track{background:rgba(148,163,184,0.1)}
        ::-webkit-scrollbar-thumb{background:linear-gradient(45deg,#14b8a6,#0d9488);border-radius:10px}
        *{transition:all 0.3s cubic-bezier(0.4,0,0.2,1)}
        .shadow-modern{box-shadow:0 10px 25px -5px rgba(0,0,0,0.1),0 10px 10px -5px rgba(0,0,0,0.04)}
        .slide-in{animation:slideIn 0.5s ease-out}
        @keyframes slideIn{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
        .nav-button{transition:all 0.2s ease}
        .nav-button:hover{transform:scale(1.05)}
        .nav-button:active{transform:scale(0.95)}
        body{overscroll-behavior:none}
        .gradient-text {
            background: linear-gradient(135deg, #0f766e, #14b8a6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .swiper-pagination-bullet-active {
            background: #0f766e !important;
        }
        .location-modal {
            backdrop-filter: blur(8px);
        }
        .service-unavailable {
            opacity: 0.5;
            pointer-events: none;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <script>
        // Load location data from JSON file
        <?php
            $json_data = file_get_contents('data/data-master/cabang.json');
            $cabang_data = json_decode($json_data, true);
            $locationData = [];
            foreach ($cabang_data['cabang'] as $cabang) {
                $locationData[$cabang['id']] = [
                    'name' => $cabang['nama'],
                    'province' => 'Jawa Timur', // Assuming all are in Jawa Timur for now
                    'services' => $cabang['services'],
                    'phone' => $cabang['kontak']['whatsapp'],
                    'address' => $cabang['alamat']
                ];
            }
        ?>
        const locationData = <?= json_encode($locationData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>;

        // Load filter products data
        const filterProducts = <?= json_encode($filter_products, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>;

        let currentLocation = '<?= $selected_cabang ?>'; // current selected location

        function openLocationModal() {
            document.getElementById('location-modal').classList.remove('hidden');
        }

        function closeLocationModal() {
            document.getElementById('location-modal').classList.add('hidden');
        }

        function selectLocation(locationId) {
            currentLocation = locationId;
            updateLocationDisplay();
            updateServicesAndPricing();
            closeLocationModal();
            
            // Update URL with new cabang parameter
            const url = new URL(window.location);
            url.searchParams.set('cabang', locationId);
            window.history.pushState({}, '', url);
        }

        function updateLocationDisplay() {
            const location = locationData[currentLocation];
            document.getElementById('current-location').textContent = location.name;
        }

        function updateServicesAndPricing() {
            const location = locationData[currentLocation];
            
            // Update service categories availability
            Object.keys(location.services).forEach(serviceId => {
                const serviceElement = document.querySelector(`[data-service="${serviceId}"]`);
                if (serviceElement) {
                    if (location.services[serviceId].available) {
                        serviceElement.classList.remove('service-unavailable');
                    } else {
                        serviceElement.classList.add('service-unavailable');
                    }
                }
            });
            
            // Update pricing in the pricing section
            const detoxPrice = location.services['pipa-mampet'].price;
            const priceElements = document.querySelectorAll('[data-price="detox-pipa"]');
            priceElements.forEach(element => {
                element.textContent = `Rp ${detoxPrice.toLocaleString()}`;
            });
            
            // Update product prices
            updateProductPrices();
            
            // Update contact info
            const contactPhoneElements = document.querySelectorAll('[data-contact="phone"]');
            contactPhoneElements.forEach(element => {
                element.textContent = location.phone;
            });
            
            const contactAddressElements = document.querySelectorAll('[data-contact="address"]');
            contactAddressElements.forEach(element => {
                element.textContent = location.address;
            });
        }

        function updateProductPrices() {
            // Update filter product prices based on current location
            filterProducts.forEach((product, index) => {
                const productCard = document.querySelector(`[data-product-id="${product.id}"]`);
                if (productCard) {
                    // Update price
                    const priceElement = productCard.querySelector('[data-product-price]');
                    if (priceElement && product.harga && product.harga[currentLocation]) {
                        const price = product.harga[currentLocation].harga;
                        priceElement.textContent = `Rp ${price.toLocaleString()}`;
                    }
                    
                    // Update location
                    const locationElement = productCard.querySelector('[data-product-location]');
                    if (locationElement) {
                        locationElement.textContent = locationData[currentLocation].name;
                    }
                }
            });
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateLocationDisplay();
            updateServicesAndPricing();
        });

        function viewAllProducts() {
            // Redirect to filter air products page with current cabang
            window.open(`frontend/detail-produk.php?id=FA001&cabang=${currentLocation}`, '_blank');
        }
    </script>
</head>

<body class="font-sans bg-gradient-to-br from-surface-50 via-teal-50 to-emerald-50 min-h-screen">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QG7XXWW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div class="max-w-md mx-auto bg-white min-h-screen shadow-modern relative overflow-hidden pb-20">

        <!-- New Header -->
        <header class="bg-white px-4 py-4 border-b border-surface-200 sticky top-0 z-50">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="https://bersihpipa.com/wp-content/uploads/2025/02/2657-06.png" 
                         alt="BersihPipa.com Logo" 
                         class="h-10 w-auto"
                         onerror="this.style.display='none'">
                </div>
                
                <!-- Right Icons -->
                <div class="flex items-center space-x-2">
                    <button onclick="toggleSearch()" class="w-10 h-10 bg-surface-100 hover:bg-surface-200 rounded-xl flex items-center justify-center transition-all duration-300 active:scale-95">
                        <i data-lucide="search" class="w-5 h-5 text-surface-600"></i>
                    </button>
                    <button onclick="toggleMenu()" class="w-10 h-10 bg-surface-100 hover:bg-surface-200 rounded-xl flex items-center justify-center transition-all duration-300 active:scale-95">
                        <i data-lucide="menu" class="w-5 h-5 text-surface-600"></i>
                    </button>
                </div>
            </div>
            
            <!-- Search Bar (Hidden by default) -->
            <div id="search-bar" class="mt-4 hidden">
                <div class="relative">
                    <input type="text" 
                           placeholder="Cari layanan atau artikel..." 
                           class="w-full pl-10 pr-4 py-3 bg-surface-50 border border-surface-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
                    <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-surface-400"></i>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="px-4 py-6 space-y-6">

            <!-- Location Selector -->
            <div class="flex items-center justify-between bg-white rounded-xl p-3 border border-surface-200 cursor-pointer" onclick="openLocationModal()">
                <div class="flex items-center space-x-2">
                    <i data-lucide="map-pin" class="w-5 h-5 text-teal-600"></i>
                    <span class="text-sm font-medium text-surface-700" id="current-location">Pilih lokasi</span>
                </div>
                <i data-lucide="chevron-down" class="w-4 h-4 text-surface-400"></i>
            </div>

            <!-- Hero Section -->
            <section class="text-left space-y-4">
                <h1 class="text-2xl sm:text-3xl font-bold text-surface-900 leading-tight">
                    Jasa Bersih dan Detox Pipa Mampet <span class="text-teal-600">Kota Malang</span>
                </h1>
                
                <p class="text-surface-600 text-sm leading-relaxed">
                    Solusi jasa Detox & Bersih Pipa mampet Malang dengan teknologi detox pipa tanpa bongkar. Atasi masalah pipa tersumbat, air kotor, dan endapan hitam dengan hasil terjamin di Kota Malang, Jawa Timur.
                </p>
            </section>

            <!-- Hero Video -->
            <div class="relative aspect-video rounded-2xl overflow-hidden">
                <iframe src="https://www.youtube.com/embed/b2OVSGbMvKM?autoplay=1&mute=1&controls=0&loop=1&playlist=b2OVSGbMvKM&modestbranding=1&showinfo=0&rel=0" 
                        frameborder="0" 
                        allow="autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen 
                        class="absolute top-0 left-0 w-full h-full">
                </iframe>
            </div>

            <!-- Service Categories -->
            <div class="slide-in">
                <h2 class="text-lg font-bold text-surface-900 mb-4 flex items-center">
                    <i data-lucide="grid-3x3" class="w-5 h-5 mr-2 text-teal-600"></i>
                    Kategori Layanan
                </h2>
                
                <div class="grid grid-cols-4 gap-2 mb-6">
                    <!-- Pipa Mampet -->
                    <button onclick="serviceAction('pipa-mampet')" data-service="pipa-mampet" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/pipamampet.png" alt="Pipa Mampet" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Pipa Mampet</h3>
                        </div>
                    </button>

                    <!-- Konsultasi -->
                    <button onclick="serviceAction('konsultasi')" data-service="konsultasi" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/whatsapp.png" alt="Konsultasi" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Konsultasi</h3>
                        </div>
                    </button>

                    <!-- Filter Air -->
                    <button onclick="serviceAction('filter-air')" data-service="filter-air" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/filterair.png" alt="Filter Air" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Filter Air</h3>
                        </div>
                    </button>

                    <!-- Plumbing -->
                    <button onclick="serviceAction('plumbing')" data-service="plumbing" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/plumbing.png" alt="Plumbing" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Plumbing</h3>
                        </div>
                    </button>

                    <!-- Sumur Bor -->
                    <button onclick="serviceAction('sumur-bor')" data-service="sumur-bor" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/sumur.png" alt="Sumur Bor" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Sumur Bor</h3>
                        </div>
                    </button>

                    <!-- Pompa Air -->
                    <button onclick="serviceAction('pompa-air')" data-service="pompa-air" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/pompaair.png" alt="Pompa Air" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Pompa Air</h3>
                        </div>
                    </button>

                    <!-- Water Heater -->
                    <button onclick="serviceAction('water-heater')" data-service="water-heater" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/water-heater.png" alt="Water Heater" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Water Heater</h3>
                        </div>
                    </button>

                    <!-- Perbaikan -->
                    <button onclick="serviceAction('perbaikan')" data-service="perbaikan" class="nav-button group p-2 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 active:scale-95">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                                <img src="upload/icon/perbaikan.png" alt="Perbaikan" class="w-5 h-5">
                            </div>
                            <h3 class="text-[10px] font-medium text-gray-600">Perbaikan</h3>
                        </div>
                    </button>
                </div>
            </div>



            <!-- Problems Carousel Section -->
            <section class="slide-in">
                <h3 class="text-lg font-bold text-surface-900 mb-4 flex items-center">
                    <i data-lucide="alert-triangle" class="w-5 h-5 mr-2 text-red-500"></i>
                    Masalah Pipa yang Sering Terjadi
                </h3>
                
                <div class="grid grid-cols-2 gap-4">
                    <?php 
                    $problems = [
                        [
                            'title' => 'Pipa Mampet Total',
                            'desc' => 'Air tidak bisa mengalir sama sekali, pipa tersumbat total',
                            'image' => 'https://bersihpipa.com/wp-content/uploads/2025/02/image.png',
                            'color' => 'red',
                            'icon' => 'x-circle'
                        ],
                        [
                            'title' => 'Endapan Hitam',
                            'desc' => 'Kotoran hitam menumpuk di dalam pipa, mengotori aliran air',
                            'image' => 'https://bersihpipa.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-10-15-at-12.26.01_53de328f-1.png',
                            'color' => 'gray',
                            'icon' => 'circle'
                        ],
                        [
                            'title' => 'Aliran Air Kecil',
                            'desc' => 'Tekanan air lemah, aliran sangat kecil dari keran atau shower',
                            'image' => 'https://bersihpipa.com/wp-content/uploads/2025/02/image-1.png',
                            'color' => 'blue',
                            'icon' => 'droplet'
                        ],
                        [
                            'title' => 'Kerak Hitam Keras',
                            'desc' => 'Kerak keras berwarna hitam menempel pada dinding dalam pipa',
                            'image' => 'https://bersihpipa.com/wp-content/uploads/2025/02/WhatsApp-Image-2024-10-15-at-12.25.58_5ab4e02b-1.png',
                            'color' => 'amber',
                            'icon' => 'layers'
                        ]
                    ];
                    
                    foreach($problems as $problem): ?>
                    <div class="bg-<?= $problem['color'] ?>-50 rounded-2xl p-4 border border-<?= $problem['color'] ?>-100 h-full">
                        <div class="aspect-square bg-<?= $problem['color'] ?>-100 rounded-xl mb-4 overflow-hidden">
                            <img src="<?= $problem['image'] ?>" 
                                 alt="<?= $problem['title'] ?>" 
                                 class="w-full h-full object-cover"
                                 onerror="this.src='/placeholder.svg?height=200&width=300&text=<?= urlencode($problem['title']) ?>'">
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <div class="w-6 h-6 bg-<?= $problem['color'] ?>-500 rounded-lg flex items-center justify-center">
                                <i data-lucide="<?= $problem['icon'] ?>" class="w-3 h-3 text-white"></i>
                            </div>
                            <h4 class="text-xs font-bold text-<?= $problem['color'] ?>-700"><?= $problem['title'] ?></h4>
                        </div>
                        <p class="text-[10px] text-<?= $problem['color'] ?>-600 leading-relaxed"><?= $problem['desc'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>



            <!-- Pricing Section -->
            <div class="bg-white rounded-2xl shadow-modern border border-surface-100 overflow-hidden slide-in" data-section="harga-paket" id="harga-paket">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-surface-900 mb-4 flex items-center">
                        <i data-lucide="tag" class="w-4 h-4 mr-2 text-green-500"></i>
                        Harga Paket Detox Pipa
                    </h3>
                    
                    <div class="bg-gradient-to-r from-teal-50 to-emerald-50 rounded-2xl p-6 mb-4 border border-teal-100">
                        <div class="text-center">
                            <div class="text-4xl font-bold gradient-text mb-2" data-price="detox-pipa">Rp 150.000</div>
                            <div class="text-sm text-teal-700 font-semibold">per Kran</div>
                            <div class="text-xs text-teal-600 mt-1">Teknologi canggih tanpa bongkar</div>
                        </div>
                    </div>

                    <!-- Service Areas -->
                    <div class="mb-4">
                        <h4 class="text-xs font-semibold text-surface-700 mb-3">Area Layanan:</h4>
                        <div class="flex flex-wrap gap-2">
                            <?php 
                            $locations = ['Malang', 'Sidoarjo', 'Surabaya', 'Pasuruan', 'Probolinggo', 'Mojokerto'];
                            foreach($locations as $location): ?>
                            <span class="px-2 py-1 bg-surface-100 text-surface-700 rounded-lg text-xs font-medium">
                                <?= $location ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button onclick="orderWhatsApp()" class="w-full bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-700 hover:to-emerald-700 text-white py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl active:scale-95">
                        <i data-lucide="phone-call" class="w-4 h-4 mr-2 inline"></i>
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Cost Calculator -->
            <?php include 'components/cost-calculator-mobile.php'; ?>

            <!-- Filter Air Product Catalog -->
            <section class="slide-in">
                <h3 class="text-lg font-bold text-surface-900 mb-4 flex items-center">
                    <i data-lucide="droplets" class="w-5 h-5 mr-2 text-teal-600"></i>
                    Katalog Filter Air
                </h3>
                
                <div class="grid grid-cols-2 gap-3">
                    <?php if (!empty($filter_products)): ?>
                        <?php foreach (array_slice($filter_products, 0, 4) as $product): ?>
                            <?php 
                            $product_price = $product['harga'][$selected_cabang] ?? null;
                            $product_images = $helper->getProductImages($product);
                            $main_image = $product_images[0] ?? '/placeholder.jpg';
                            ?>
                            <a href="frontend/detail-produk.php?id=<?= $product['id'] ?>&cabang=<?= $selected_cabang ?>" class="block">
                                <div class="bg-white rounded-xl shadow-modern border border-surface-100 overflow-hidden relative hover:shadow-lg transition-all duration-300" data-product-id="<?= $product['id'] ?>">
                                <div class="relative">
                                    <img src="<?= $main_image ?>" 
                                         alt="<?= htmlspecialchars($product['nama']) ?>" 
                                         class="w-full aspect-square object-cover">
                                </div>
                                <?php if ($product_price && $product_price['gratis_ongkir']): ?>
                                <div class="absolute bottom-0 -left-1 z-10">
                                    <img src="https://p16-images-comn-sg.tokopedia-static.net/tos-alisg-i-zr7vqa5nfb-sg/img/bebas-ongkir-engine/gratis-ongkir/GO-Overlay.png~tplv-zr7vqa5nfb-image.image" 
                                         alt="Bebas Ongkir" 
                                         class="w-16 h-6 object-contain">
                                </div>
                                <?php endif; ?>
                                <div class="p-3">
                                    <h4 class="text-[11px] font-semibold text-surface-900 mb-2 line-clamp-2 leading-tight"><?= htmlspecialchars($product['nama']) ?></h4>
                                    <div class="text-sm font-bold text-surface-900 mb-1" data-product-price>
                                        <?= $product_price ? $helper->formatPrice($product_price['harga']) : 'Harga tidak tersedia' ?>
                                    </div>
                                    <div class="flex items-center justify-between text-[10px] text-surface-600 mb-2">
                                        <span><?= $product['terjual'] ?? 0 ?>+ terjual</span>
                                        <div class="flex items-center">
                                            <i data-lucide="star" class="w-3 h-3 text-yellow-500 mr-1"></i>
                                            <span class="font-medium"><?= $product['rating'] ?? 4.5 ?></span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end text-[10px] text-surface-600">
                                        <div class="flex items-center">
                                            <i data-lucide="map-pin" class="w-3 h-3 text-green-600 mr-1"></i>
                                            <span data-product-location><?= $cabang_data['nama'] ?? 'Malang' ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Fallback cards if no products found -->
                        <div class="bg-white rounded-xl shadow-modern border border-surface-100 overflow-hidden relative">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=300&fit=crop" 
                                     alt="Filter Air Premium" 
                                     class="w-full aspect-square object-cover">
                            </div>
                            <div class="p-3">
                                <h4 class="text-[11px] font-semibold text-surface-900 mb-2 line-clamp-2 leading-tight">Filter Air Premium 3 Stage</h4>
                                <div class="text-sm font-bold text-surface-900 mb-1">Rp 850.000</div>
                                <div class="flex items-center justify-between text-[10px] text-surface-600 mb-2">
                                    <span>120+ terjual</span>
                                    <div class="flex items-center">
                                        <i data-lucide="star" class="w-3 h-3 text-yellow-500 mr-1"></i>
                                        <span class="font-medium">4.8</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end text-[10px] text-surface-600">
                                    <div class="flex items-center">
                                        <i data-lucide="map-pin" class="w-3 h-3 text-green-600 mr-1"></i>
                                        <span><?= $cabang_data['nama'] ?? 'Malang' ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- View All Products Button -->
                <button onclick="viewAllProducts()" class="w-full mt-4 bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-xl flex items-center justify-center space-x-2 transition-all duration-300 active:scale-95">
                    <i data-lucide="grid" class="w-4 h-4"></i>
                    <span>Lihat Semua Produk Filter Air</span>
                </button>
            </section>

            <!-- Video Projects -->
            <?php include 'components/video-projects-mobile.php'; ?>

            <!-- WordPress Posts Carousel -->
            <section class="slide-in">
                <h3 class="text-lg font-bold text-surface-900 mb-4 flex items-center">
                    <i data-lucide="newspaper" class="w-5 h-5 mr-2 text-teal-500"></i>
                    Artikel & Tips Terbaru
                </h3>
                
                <div class="swiper posts-swiper">
                    <div class="swiper-wrapper" id="posts-container">
                        <!-- Posts will be loaded here via JavaScript -->
                        <div class="swiper-slide">
                            <div class="bg-surface-50 rounded-2xl p-4 animate-pulse">
                                <div class="aspect-video bg-surface-200 rounded-xl mb-3"></div>
                                <div class="h-4 bg-surface-200 rounded mb-2"></div>
                                <div class="h-3 bg-surface-200 rounded w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </section>

            <!-- Contact Section -->
            <div class="bg-white rounded-2xl shadow-modern border border-surface-100 overflow-hidden slide-in">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-surface-900 mb-4 flex items-center">
                        <i data-lucide="phone" class="w-4 h-4 mr-2 text-blue-500"></i>
                        Hubungi Kami
                    </h3>
                    
                    <div class="space-y-3">
                        <a href="https://wa.me/6281236937200" target="_blank" class="flex items-center p-3 bg-green-50 rounded-xl border border-green-100 hover:bg-green-100 transition-all duration-300 active:scale-95">
                            <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center mr-3">
                                <i data-lucide="message-circle" class="w-5 h-5 text-white"></i>
                            </div>
                            <div class="flex-1">
                                <div class="text-sm font-semibold text-green-700">WhatsApp</div>
                                <div class="text-xs text-green-600" data-contact="phone">+62 812-3693-7200</div>
                            </div>
                            <i data-lucide="external-link" class="w-4 h-4 text-green-600"></i>
                        </a>

                        <a href="tel:+6281236937200" class="flex items-center p-3 bg-teal-50 rounded-xl border border-teal-100 hover:bg-teal-100 transition-all duration-300 active:scale-95">
                            <div class="w-10 h-10 bg-teal-500 rounded-xl flex items-center justify-center mr-3">
                                <i data-lucide="phone" class="w-5 h-5 text-white"></i>
                            </div>
                            <div class="flex-1">
                                <div class="text-sm font-semibold text-teal-700">Telepon</div>
                                <div class="text-xs text-teal-600">Layanan 24/7</div>
                            </div>
                            <i data-lucide="phone-call" class="w-4 h-4 text-teal-600"></i>
                        </a>

                        <div class="flex items-center p-3 bg-surface-50 rounded-xl border border-surface-100">
                            <div class="w-10 h-10 bg-surface-500 rounded-xl flex items-center justify-center mr-3">
                                <i data-lucide="map-pin" class="w-5 h-5 text-white"></i>
                            </div>
                            <div class="flex-1">
                                <div class="text-sm font-semibold text-surface-700">Alamat</div>
                                <div class="text-xs text-surface-600" data-contact="address">Jl. Candi Mendut No 23B, Lowokwaru, Malang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- Location Selection Modal -->
        <div id="location-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden location-modal">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="bg-white rounded-2xl w-full max-w-sm">
                    <div class="p-4 border-b border-surface-200 flex items-center justify-between">
                        <h3 class="text-lg font-bold text-surface-900">Pilih Lokasi Layanan</h3>
                        <button onclick="closeLocationModal()" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                            <i data-lucide="x" class="w-4 h-4 text-gray-600"></i>
                        </button>
                    </div>
                    <div class="p-4 space-y-2 max-h-96 overflow-y-auto">
                        <button onclick="selectLocation('malang')" class="w-full text-left p-3 rounded-xl hover:bg-gray-50 transition-all duration-200">
                            <div class="font-medium text-surface-900">Kota Malang</div>
                            <div class="text-sm text-surface-600">Jawa Timur</div>
                        </button>
                        <button onclick="selectLocation('surabaya')" class="w-full text-left p-3 rounded-xl hover:bg-gray-50 transition-all duration-200">
                            <div class="font-medium text-surface-900">Kota Surabaya</div>
                            <div class="text-sm text-surface-600">Jawa Timur</div>
                        </button>
                        <button onclick="selectLocation('sidoarjo')" class="w-full text-left p-3 rounded-xl hover:bg-gray-50 transition-all duration-200">
                            <div class="font-medium text-surface-900">Kabupaten Sidoarjo</div>
                            <div class="text-sm text-surface-600">Jawa Timur</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Keep existing bottom navigation -->
        <nav class="fixed bottom-0 left-0 right-0 z-50 md:max-w-md md:mx-auto" style="max-width: 480px;">
            <div class="bg-white/95 backdrop-blur-md border-t border-surface-200/50 shadow-2xl">
                <div class="flex items-center justify-between px-2 py-2">
                    <!-- Home -->
                    <button onclick="scrollToTop()" class="nav-item group flex flex-col items-center flex-1 py-3 px-2 rounded-xl transition-all duration-300 hover:bg-teal-50 active:scale-95">
                        <div class="relative">
                            <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-teal-50 group-hover:bg-teal-100 transition-colors duration-300">
                                <i data-lucide="home" class="w-5 h-5 text-teal-600 group-hover:text-teal-700"></i>
                            </div>
                            <div class="absolute -top-1 -right-1 w-2 h-2 bg-teal-500 rounded-full opacity-100"></div>
                        </div>
                        <span class="text-xs font-medium text-teal-700 mt-1 transition-colors duration-300">Home</span>
                    </button>

                    <!-- Services -->
                    <button onclick="showServices()" class="nav-item group flex flex-col items-center flex-1 py-3 px-2 rounded-xl transition-all duration-300 hover:bg-teal-50 active:scale-95">
                        <div class="relative">
                            <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-teal-50 group-hover:bg-teal-100 transition-colors duration-300">
                                <i data-lucide="grid-3x3" class="w-5 h-5 text-teal-600 group-hover:text-teal-700"></i>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-surface-600 group-hover:text-teal-700 mt-1 transition-colors duration-300">Layanan</span>
                    </button>

                    <!-- Quick Contact (Center) -->
                    <a href="https://wa.me/6281236937200" target="_blank" class="nav-item group flex flex-col items-center flex-1 py-2 px-2 transition-all duration-300 active:scale-95">
                        <div class="relative">
                            <div class="w-12 h-12 flex items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 shadow-lg group-hover:shadow-xl group-hover:from-emerald-600 group-hover:to-teal-700 transition-all duration-300">
                                <i data-lucide="message-circle" class="w-6 h-6 text-white"></i>
                            </div>
                            <div class="absolute inset-0 rounded-2xl bg-emerald-400 opacity-0 group-hover:opacity-20 group-hover:animate-ping transition-opacity duration-300"></div>
                        </div>
                        <span class="text-xs font-semibold text-emerald-600 group-hover:text-emerald-700 mt-1 transition-colors duration-300">Kontak</span>
                    </a>

                    <!-- Calculator -->
                    <a href="biaya-detox.php" class="nav-item group flex flex-col items-center flex-1 py-3 px-2 rounded-xl transition-all duration-300 hover:bg-purple-50 active:scale-95">
                        <div class="relative">
                            <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-purple-50 group-hover:bg-purple-100 transition-colors duration-300">
                                <i data-lucide="calculator" class="w-5 h-5 text-purple-600 group-hover:text-purple-700"></i>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-surface-600 group-hover:text-purple-700 mt-1 transition-colors duration-300">Hitung</span>
                    </a>

                    <!-- Video -->
                    <button onclick="scrollToSection('video-proyek')" class="nav-item group flex flex-col items-center flex-1 py-3 px-2 rounded-xl transition-all duration-300 hover:bg-red-50 active:scale-95">
                        <div class="relative">
                            <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 group-hover:bg-red-100 transition-colors duration-300">
                                <i data-lucide="video" class="w-5 h-5 text-red-600 group-hover:text-red-700"></i>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-surface-600 group-hover:text-red-700 mt-1 transition-colors duration-300">Video</span>
                    </button>
                </div>
                
                <!-- Safe area for devices with home indicator -->
                <div class="h-safe-area-inset-bottom bg-white/95"></div>
            </div>
        </nav>

    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // WordPress API Integration
        async function loadWordPressPosts() {
            try {
                const response = await fetch('https://bersihpipa.com/wp-json/wp/v2/posts?per_page=6&_embed');
                const posts = await response.json();
                
                const postsContainer = document.getElementById('posts-container');
                postsContainer.innerHTML = '';
                
                posts.forEach(post => {
                    const featuredImage = post._embedded?.['wp:featuredmedia']?.[0]?.source_url || '/placeholder.svg?height=200&width=300&text=Article';
                    const excerpt = post.excerpt.rendered.replace(/<[^>]*>/g, '').substring(0, 100) + '...';
                    const publishDate = new Date(post.date).toLocaleDateString('id-ID', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                    
                    const slideHTML = `
                        <div class="swiper-slide">
                            <article class="bg-white rounded-2xl shadow-modern border border-surface-100 overflow-hidden h-full">
                                <div class="aspect-video overflow-hidden">
                                    <img src="${featuredImage}" 
                                         alt="${post.title.rendered}" 
                                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                         onerror="this.src='/placeholder.svg?height=200&width=300&text=Article'">
                                </div>
                                <div class="p-4">
                                    <div class="text-xs text-surface-500 mb-2">${publishDate}</div>
                                    <h4 class="text-sm font-bold text-surface-900 mb-2 line-clamp-2 leading-tight">
                                        ${post.title.rendered}
                                    </h4>
                                    <p class="text-xs text-surface-600 leading-relaxed mb-3">
                                        ${excerpt}
                                    </p>
                                    <a href="${post.link}" 
                                       target="_blank" 
                                       class="inline-flex items-center text-xs font-semibold text-teal-600 hover:text-teal-700 transition-colors">
                                        Baca Selengkapnya
                                        <i data-lucide="external-link" class="w-3 h-3 ml-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    `;
                    postsContainer.innerHTML += slideHTML;
                });
                
                // Reinitialize Lucide icons
                lucide.createIcons();
                
                // Initialize Posts Swiper
                new Swiper('.posts-swiper', {
                    slidesPerView: 1.1,
                    spaceBetween: 16,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    loop: true,
                    breakpoints: {
                        640: {
                            slidesPerView: 1.5,
                            spaceBetween: 20,
                        },
                    },
                });
                
            } catch (error) {
                console.error('Error loading WordPress posts:', error);
                document.getElementById('posts-container').innerHTML = `
                    <div class="swiper-slide">
                        <div class="bg-red-50 rounded-2xl p-4 border border-red-100 text-center">
                            <i data-lucide="alert-circle" class="w-8 h-8 text-red-500 mx-auto mb-2"></i>
                            <p class="text-sm text-red-600">Gagal memuat artikel</p>
                        </div>
                    </div>
                `;
                lucide.createIcons();
            }
        }

        // Header functions
        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            searchBar.classList.toggle('hidden');
            if (!searchBar.classList.contains('hidden')) {
                searchBar.querySelector('input').focus();
            }
        }

        function toggleMenu() {
            // Placeholder for menu functionality
            alert('Menu akan segera hadir!');
        }

        // Load WordPress posts on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadWordPressPosts();
        });

        // Make functions globally available
        window.toggleSearch = toggleSearch;
        window.toggleMenu = toggleMenu;
    </script>
</body>
</html>
