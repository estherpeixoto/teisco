<?php echo $this->view('layout/header'); ?>

<link rel='stylesheet' href='<?php echo SITE_URL; ?>assets/css/home.css'>

<div id='feat' class='position-relative bg-overdrive text-light'>
	<div class='overdrive-left d-md-none'></div>
	<div class='overdrive-right d-md-none'></div>

	<section class='d-flex flex-column justify-content-center'>
		<div class='container'>
			<div class='row justify-content-center text-center align-items-center'>
				<div class='d-none d-md-block col-xl-8 col-lg-9 col-md-10'>
					<h1 class='display-3'>
						<img class='img-fluid' src='<?php echo SITE_URL; ?>assets/img/logo2.svg' alt='Teisco' />
					</h1>

					<div class='my-5'>
						<p class='text-uppercase font-bold h4'>A universe of fearless music explorers</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<section>
	<div class='hero position-relative d-flex flex-column flex-md-row justify-content-between bg-delay text-fuzz'>
		<div class='outer-space p-5'>
			<h1>PEDALS<br>FROM</h1>
			<h1>OUTER<br>SPACE</h1>
		</div>

		<img src='<?php echo SITE_URL; ?>assets/img/hero_pedal.jpg' class='img-fluid' alt='Pedals from outer space' />
	</div>
</section>

<section class='py-5'>
	<h2 class='text-center text-uppercase mb-3'>Just arrived</h2>

	<div class='d-flex flex-column flex-md-row justify-content-center gy-3'>
		<div class='col-12 col-md-3'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/interface1.png'
					class='card-img-top' alt='Teisco Interface'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Interface</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/2' class='stretched-link'></a>
				</div>
			</div>
		</div>

		<div class='col-12 col-md-3'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/overdrive1.png'
					class='card-img-top' alt='Teisco Overdrive'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Overdrive</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/1' class='stretched-link'></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php echo $this->view('layout/footer'); ?>