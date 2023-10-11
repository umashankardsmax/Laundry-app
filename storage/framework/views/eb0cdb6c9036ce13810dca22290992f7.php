<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from w3cart.w3itexpert.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 05:06:07 GMT -->
<head>

	<!-- Title -->
	<title>W3Cart - Ecommerce Mobile App Template ( Bootstrap + PWA )</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#009688">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="android, ios, mobile, application template, progressive web app, ui kit, multiple color, dark layout">
	<meta name="description" content="Revolutionize your online store with our Ecommerce App Template. Seamless shopping, secure payments, and personalized recommendations for an exceptional user experience">
	<meta property="og:title" content="W3Cart: Ecommerce Mobile App Template ( Bootstrap + PWA )">
	<meta property="og:description" content="Revolutionize your online store with our Ecommerce App Template. Seamless shopping, secure payments, and personalized recommendations for an exceptional user experience.">
	<meta property="og:image" content="https://w3cart.dexignzone.com/xhtml/page-error-404.html">
	<meta name="format-detection" content="telephone=no">

	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('frontend/images/favicon.png')); ?>">

	<!-- PWA Version -->
	<link rel="manifest" href="<?php echo e(asset('manifest.json')); ?>">

    <!-- Global CSS -->
	<link href="<?php echo e(asset('frontend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/vendor/swiper/swiper-bundle.min.css')); ?>">

	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/style.css')); ?>">

    <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900;1000&amp;family=Roboto:wght@100;300;400;500;700;900&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

</head>
<body>
<div class="page-wrapper">

	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
			<div class="load-circle"><div></div><div></div></div>
		</div>
	</div>
    <!-- Preloader end-->

	<!-- Header -->
		<header class="header shadow header-fixed border-0">
			<div class="container">
				<div class="header-content">
					<div class="left-content">
						<a href="javascript:void(0);" class="menu-toggler">
							<i class="icon feather icon-menu"></i>
						</a>
					</div>
					<div class="mid-content header-logo">
						<a href="index.html">
							<img class="logo app-logo" src="assets/images/logos/light/logo1.svg" alt="logo">
							<!-- <img class="logo-dark" src="assets/images/svg/logo.svg" alt="logo">
							<img class="logo-light" src="assets/images/svg/logo-white.svg" alt="logo"> -->
						</a>
					</div>
					<div class="right-content">
						<a href="search.html" class="search-icon">
							<i class="icon feather icon-search"></i>
						</a>
					</div>
				</div>
			</div>
		</header>
	<!-- Header -->

	<!-- Sidebar -->
    <div class="dark-overlay"></div>
	<div class="sidebar" style="background-image: url('assets/images/background/bg3.png');">
		<a href="profile.html" class="author-box">
			<div class="dz-media">
				<img src="assets/images/user-profile.jpg" alt="author-image">
			</div>
			<div class="dz-info">
				<h5 class="name">John Doe</h5>
				<span>example@gmail.com</span>
			</div>
		</a>
		<ul class="nav navbar-nav">
			<li>
				<a class="nav-link active" href="index.html">
					<span class="dz-icon">
						<i class="icon feather icon-home"></i>
					</span>
					<span>Home</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="product-list.html">
					<span class="dz-icon">
						<i class="icon feather icon-layers"></i>
					</span>
					<span>Products</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="components.html">
					<span class="dz-icon">
						<i class="icon feather icon-grid"></i>
					</span>
					<span>Components</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="pages.html">
					<span class="dz-icon">
						<i class="icon feather icon-book-open"></i>
					</span>
					<span>Pages</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="featured.html">
					<span class="dz-icon">
						<i class="icon feather icon-list"></i>
					</span>
					<span>Featured</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="wishlist.html">
					<span class="dz-icon">
						<i class="icon feather icon-heart"></i>
					</span>
					<span>Wishlist</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="order.html">
					<span class="dz-icon">
						<i class="icon feather icon-repeat"></i>
					</span>
					<span>Orders</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="cart.html">
					<span class="dz-icon">
						<i class="icon feather icon-shopping-cart"></i>
					</span>
					<span>My Cart</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="profile.html">
					<span class="dz-icon">
						<i class="icon feather icon-user"></i>
					</span>
					<span>Profile</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="welcome.html">
					<span class="dz-icon">
						<i class="icon feather icon-log-out"></i>
					</span>
					<span>Logout</span>
				</a>
			</li>
		</ul>
		<div class="sidebar-bottom">
			<ul class="app-setting">
				<li class="nav-color pb-2">
					<a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
						<span class="dz-icon">
							<svg class="color-plate" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.725.787a9.325 9.325 0 0 1 	8.425 7.65 2.35 2.35 0 0 1-.625 2.275 1.662 1.662 0 0 1-1.863.188c-.462-.225-.812-.6-1.25-.788a4.238 4.238 0 0 0-4.5.725A3.751 3.751 0 0 0 10 14.825c.237.725.75 1.25 1.012 1.987a1.713 1.713 0 0 1-.762 2.063 3.312 3.312 0 0 1-2.5.125A9.262 9.262 0 0 1 3.125 3.837a9.2 9.2 0 0 1 7.6-3.05zM2.162 11.6A8.112 8.112 0 0 0 8 17.85c.487.125 1.25.3 1.6 0 .35-.3.15-.9-.125-1.25a4.674 4.674 0 0 1-.725-1.388A5 5 0 0 1 10 9.925a5.187 5.187 0 0 1 3.6-1.4 5.063 5.063 0 0 1 3.137 1.025.887.887 0 0 0 .95.225c.4-.213.338-.75.263-1.125a8.413 8.413 0 0 0-1.963-3.95 8.087 8.087 0 0 0-11.937 0 8.075 8.075 0 0 0-1.9 6.9h.012z"/><path d="M14.313 4.862a1.575 1.575 0 1 1 .024 3.15 1.575 1.575 0 0 1-.024-3.15zm0 2.2a.637.637 0 1 0 0-1.274.637.637 0 0 0 0 1.274zm-4.075-4.075a1.575 1.575 0 1 1 0 3.15 1.575 1.575 0 0 1 0-3.15zm0 2.2a.637.637 0 1 0 0-1.274.637.637 0 0 0 0 1.274zM6.25 7.925a1.575 1.575 0 1 1 .025-3.15 1.575 1.575 0 0 1-.025 3.15zm0-2.2A.637.637 0 1 0 6.25 7a.637.637 0 0 0 0-1.275zm.125 4.675a1.575 1.575 0 1 1-3.15 0 1.575 1.575 0 0 1 3.15 0zm-2.2 0a.638.638 0 1 0 1.275 0 .638.638 0 0 0-1.275 0zm2.075 2.387a1.575 1.575 0 1 1 0 3.151 1.575 1.575 0 0 1 0-3.15zm0 2.213a.638.638 0 1 0 0-1.276.638.638 0 0 0 0 1.276z"/>
							</svg>
						</span>
						<span>Color Theme</span>
						<div class="color-active ms-auto">
							<span>Active</span>
							<div class="current-color"></div>
						</div>
					</a>
				</li>
				<li>
					<a class="mode" href="javascript:void(0);">
						<span class="dz-icon">
							<i class="icon feather icon-moon"></i>
						</span>
						<span>Dark Mode</span>
						<div class="custom-switch">
							<input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
							<label class="custom-switch-label" for="toggle-dark-menu"></label>
						</div>
					</a>
				</li>
			</ul>
			<div class="app-info">
				<h6 class="name">W3Cart Fashion Store</h6>
				<span class="ver-info">App Version 1.0</span>
			</div>
        </div>
    </div>
    <!-- Sidebar End -->
<?php /**PATH C:\Users\Branding\laundry\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>