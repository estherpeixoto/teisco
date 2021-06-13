<?php $this->loadView('layout/header'); ?>
<?php $this->loadView('layout/navbar'); ?>

<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/home.css'>

<div id='feat' class='position-relative bg-overdrive text-light'>
	<div class='overdrive-left d-md-none'></div>
	<div class='overdrive-right d-md-none'></div>

	<section class='d-flex flex-column justify-content-center'>
		<div class='container'>
			<div class='row justify-content-center text-center'>
				<div class='d-none d-md-block col-xl-8 col-lg-9 col-md-10'>
					<h1 class='display-3'>
						<img class='img-fluid' src='<?= SITEURL; ?>assets/img/logo2.svg' alt='Teisco' />
					</h1>

					<div class='my-5'>
						<h4 class='text-uppercase fw-bold'>A universe of fearless music explorers</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<section class='d-flex flex-column flex-md-row align-items-center justify-content-end mx-md-0 p-0 bg-delay'>
	<div class='py-5 px-md-5 text-center text-md-start text-fuzz m-0 col-md-6'>
		<h1 class='outer-space fw-bold text-uppercase m-md-5 ps-md-5'>
			Pedals
			<br>
			from
			<br>
			<i class='fw-bolder'>outer<br>space</i>
		</h1>
	</div>

	<div class='col-md-6 m-0'>
		<img class='w-100 img-fluid' alt='hero' src='<?= SITEURL; ?>assets/img/hero_pedals.jpg'>
	</div>
</section>

<section class='py-5'>
	<h2 class='text-center text-uppercase mb-3'>Just arrived</h2>

	<div class='d-flex flex-column flex-md-row justify-content-center gy-3'>
		<div class='col-12 col-md-3'>
			<div class='card border-0'>
				<img src='<?= SITEURL; ?>assets/img/products/interface1.png' class='card-img-top'
					alt='Teisco Interface'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Interface</h6>
					<a href='<?= SITEURL; ?>Home/products/2' class='stretched-link'></a>
				</div>
			</div>
		</div>

		<div class='col-12 col-md-3'>
			<div class='card border-0'>
				<img src='<?= SITEURL; ?>assets/img/products/overdrive1.png' class='card-img-top'
					alt='Teisco Overdrive'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Overdrive</h6>
					<a href='<?= SITEURL; ?>Home/products/1' class='stretched-link'></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->loadView('layout/footer'); ?>