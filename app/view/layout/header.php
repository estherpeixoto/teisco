<!DOCTYPE html>
<html lang='pt-br'>

<head>
	<title>Teisco - A Universe of Fearless Music Explorers</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	<link rel="icon" type="image/svg+xml" href="<?php echo SITE_URL; ?>assets/img/favicon.svg">
	<link rel='stylesheet' href='<?php echo SITE_URL; ?>assets/css/bootstrap.min.css'>
	<link rel='stylesheet' href='<?php echo SITE_URL; ?>assets/font/fontawesome/css/all.min.css'>
	<link rel='stylesheet' href='<?php echo SITE_URL; ?>assets/css/header.css'>
</head>

<body>
	<header>
		<nav class='navbar navbar-expand-md navbar-dark bg-fuzz'>
			<div class='container'>
				<a href='<?php echo SITE_URL; ?>' class='navbar-brand order-2 order-md-0'>
					<img src='<?php echo SITE_URL; ?>/assets/img/logo.svg'
						alt='Teisco - A Universe of Fearless Music Explorers'
						width='auto'
						height='20'
					/>
				</a>

				<button type='button' class='navbar-toggler order-1' data-bs-toggle='collapse'
					data-bs-target='#navbarSupportedContent'
					aria-controls='navbarSupportedContent'
					aria-expanded='false'
					aria-label='Toggle navigation'
				>
					<span class='navbar-toggler-icon'></span>
				</button>

				<a href="#cart"
					role="button"
					aria-controls="cart"
					data-bs-toggle="offcanvas"
					class='cart-button order-3 order-md-4 py-1 px-3 outline-none bg-transparent rounded-pill border border-delay'
				>
					<i data-bs-target='#cart' class='fas fa-shopping-cart text-boost'></i>
				</a>

				<div id='navbarSupportedContent' class='collapse navbar-collapse text-uppercase order-4 order-md-3'>
					<ul class='navbar-nav mx-auto py-3 py-md-0 pl-lg-5 pl-0'>
						<li class='nav-item py-3 py-md-0'>
							<a class='navbar-item' href='<?php echo SITE_URL; ?>Home/products'>
								Products
							</a>
						</li>

						<li class='nav-item py-3 py-md-0'>
							<a class='navbar-item' href='<?php echo SITE_URL; ?>Home/about'>
								About
							</a>
						</li>

						<li class='nav-item py-3 py-md-0'>
							<a class='navbar-item text-decoration-underline' href='<?php echo SITE_URL; ?>Home/signin'>
								Sign in
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="offcanvas offcanvas-end" tabindex="-1" id="cart" aria-labelledby="cartLabel">
			<div class="offcanvas-header">
				<h5 id="cartLabel" class="offcanvas-title text-uppercase text-fuzz">
					Shopping Cart
				</h5>

				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
				</button>
			</div>

			<div class="offcanvas-body">
				<p>Your cart is currently empty.</p>
				<p>Continue browsing <a href='<?php echo SITE_URL; ?>Home/products'>here</a>.</p>
			</div>
		</div>
	</header>