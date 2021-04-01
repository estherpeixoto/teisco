<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <title>Teisco - A Universe of Fearless Music Explorers</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel='stylesheet' href='<?php echo SITE_URL; ?>assets/css/bootstrap.min.css'>
    </head>

    <body>
        <header role='banner'>
            <nav class='navbar navbar-expand-md navbar-dark bg-fuzz'>
                <div class='container'>
					<a class="navbar-brand" href="<?php echo SITE_URL; ?>">
						<img src="<?php echo SITE_URL; ?>/assets/img/logo.svg"
							alt="Teisco - A Universe of Fearless Music Explorers"
							width="auto" height="20"
						/>
					</a>

					<button class="navbar-toggler" type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                        <ul class='navbar-nav mx-auto pl-lg-5 pl-0'>
							<li class='nav-item'>
								<a class='nav-link' href='<?php echo SITE_URL; ?>Home/menu'>
									Products
								</a>
							</li>

                            <li class='nav-item'>
                                <a class='nav-link' href='<?php echo SITE_URL; ?>Home/about'>
									Accessories
								</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='<?php echo SITE_URL; ?>Home/team'>
									About
								</a>
                            </li>
                        </ul>

                        <ul class='navbar-nav ml-auto'>
							<li class='nav-item'>
								<a class='nav-link text-decoration-underline' href='<?php echo SITE_URL; ?>Home/team'>
									Sign in
								</a>
							</li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>

        <div class='slider-wrap'>
            <section class='home-slider owl-carousel'>
                <div class='slider-item' style="background-image: url('/assets/img/hero_1.jpg');">
                    <div class='container'>
                        <div class='row slider-text align-items-center justify-content-center'>
                            <div class='col-md-8 text-center col-sm-12 '>
                                <h1 data-aos='fade-up'>Desfrute da sua comida no Foody</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='slider-item' style="background-image: url('/assets/img/hero_2.jpg');">
                    <div class='container'>
                        <div class='row slider-text align-items-center justify-content-center'>
                            <div class='col-md-8 text-center col-sm-12 '>
                                <h1 data-aos='fade-up'>Comida deliciosa</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>