<?php

use App\Lib\Session;

?>
<header>
	<nav class='navbar navbar-expand-md navbar-dark bg-fuzz'>
		<div class='container'>
			<a href='<?= SITEURL; ?>' class='navbar-brand order-2 order-md-0'>
				<img src='<?= SITEURL; ?>assets/img/logo.svg' alt='Teisco - A Universe of Fearless Music Explorers' width='auto' height='20' />
			</a>

			<button type='button' class='navbar-toggler order-1' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>

			<a href='#cart' role='button' aria-controls='cart' data-bs-toggle='offcanvas' class='cart-button order-3 order-md-4 py-1 px-3 outline-none bg-transparent rounded-pill border border-delay'>
				<i data-bs-target='#cart' class='fas fa-shopping-cart text-boost'></i>
			</a>

			<div id='navbarSupportedContent' class='collapse navbar-collapse text-uppercase order-4 order-md-3'>
				<ul class='navbar-nav mx-auto py-3 py-md-0 pl-lg-5 pl-0'>
					<li class='nav-item py-3 py-md-0'>
						<a class='navbar-item' href='<?= SITEURL; ?>Home/products'>
							Products
						</a>
					</li>

					<li class='nav-item py-3 py-md-0'>
						<a class='navbar-item' href='<?= SITEURL; ?>Home/about'>
							About
						</a>
					</li>

					<li class='nav-item py-3 py-md-0'>
						<a class='navbar-item' href='<?= SITEURL; ?>Home/contact'>
							Contact
						</a>
					</li>

					<?php if (Session::get('isLogged')) : ?>
						<li class='nav-item py-3 py-md-0 dropdown'>
							<a class='navbar-item dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
								<?= strtok(Session::get('email'), '@'); ?>
							</a>

							<ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
								<li><a class='dropdown-item' href='<?= SITEURL; ?>main'>Home</a></li>
								<li><a class='dropdown-item' href='<?= SITEURL; ?>products'>Products</a></li>
								<li><a class='dropdown-item' href='<?= SITEURL; ?>about'>About</a></li>
								<li><a class='dropdown-item' href='<?= SITEURL; ?>contact'>Contact</a></li>
								<li><a class='dropdown-item' href='<?= SITEURL; ?>users'>Users</a></li>
								<li>
									<hr class='dropdown-divider'>
								</li>
								<li><a class='dropdown-item' href='<?= SITEURL; ?>admin/signout'>Sign out</a></li>
							</ul>
						</li>
					<?php else : ?>
						<li class='nav-item py-3 py-md-0'>
							<a class='navbar-item text-decoration-underline' href='<?= SITEURL; ?>admin/signin'>
								Sign in
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class='offcanvas offcanvas-end' tabindex='-1' id='cart' aria-labelledby='cartLabel'>
		<div class='offcanvas-header'>
			<h5 id='cartLabel' class='offcanvas-title text-uppercase text-fuzz'>
				Shopping Cart
			</h5>

			<button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'>
			</button>
		</div>

		<div class='offcanvas-body'>
			<p>Your cart is currently empty.</p>
			<p>Continue browsing <a href='<?= SITEURL; ?>Home/products'>here</a>.</p>
		</div>
	</div>
</header>