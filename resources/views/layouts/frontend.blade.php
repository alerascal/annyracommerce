<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the latest fashion trends at Style Haven, your one-stop clothing store.">
    <meta name="author" content="">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Style Haven | Clothing Store">
    <meta property="og:description" content="Discover the latest fashion trends at Style Haven, your one-stop clothing store.">
    <meta property="og:image" content="src/img/og-image.jpg">
    <meta property="og:url" content="https://www.stylehaven.com">
    <meta property="og:type" content="website">

    <!-- Title -->
    <title>Style Haven | Clothing Store Responsive Landing Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="src/img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap (CDN for latest version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Fancybox -->
    <link rel="stylesheet" href="src/css/jquery.fancybox.css">

    <!-- AOS -->
    <link rel="stylesheet" href="src/css/aos.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="src/css/owl.carousel.min.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="src/css/slick.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body class="d-flex flex-column" style="min-height: 100vh;">
    <!-- Pre-loader -->
    <div id="loading" style="display: none;">
        <div class="loading__center">
            <div class="loading__position">
                <div id="object"></div>
            </div>
        </div>
    </div>

    @include('component.header')

    <main role="main" style="flex: 1;">
      @yield('content')
    </main>

    @include('component.footer')

    <!-- Scripts -->
    <script defer src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script defer src="src/js/jquery.easing.min.js"></script>
    <script defer src="src/js/owl.carousel.min.js"></script>
    <script defer src="src/js/slick.js"></script>
    <script defer src="src/js/jquery.fancybox.js"></script>
    <script defer src="src/js/burger-menu.min.js"></script>
    <script defer src="src/js/aos.js"></script>
    <script defer src="src/js/custom.js"></script>
</body>
</html>