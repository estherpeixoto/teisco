<?php echo $this->view('layout/header'); ?>

<section class='container bg-white py-5'>

	<h2 class='text-center text-uppercase mb-3'>Our pedals</h2>

	<div class='row gy-3 justify-content-center'>

		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/overdrive1.png'
					class='card-img-top'
					alt='Teisco Overdrive'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Overdrive</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/1' class='stretched-link'></a>
				</div>
			</div>
		</div>

		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/boost1.png'
					class='card-img-top'
					alt='Teisco Boost'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Boost</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/2' class='stretched-link'></a>
				</div>
			</div>
		</div>

		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/fuzz1.png'
					class='card-img-top'
					alt='Teisco Fuzz'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Fuzz</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/3' class='stretched-link'></a>
				</div>
			</div>
		</div>

		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/delay1.png'
					class='card-img-top'
					alt='Teisco Delay'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Delay</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/4' class='stretched-link'></a>
				</div>
			</div>
		</div>

		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/distortion1.png'
					class='card-img-top'
					alt='Teisco Distortion'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Distortion</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/5' class='stretched-link'></a>
				</div>
			</div>
		</div>

	</div>

	<hr class='my-5 text-light'>

	<h2 class='text-center text-uppercase mb-3'>Our interfaces</h2>

	<div class='row justify-content-center'>
		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?php echo SITE_URL; ?>assets/img/products/interface1.png'
					class='card-img-top'
					alt='Teisco Interface Pedal'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Interface Pedal</h6>
					<a href='<?php echo SITE_URL; ?>Home/products/6' class='stretched-link'></a>
				</div>
			</div>
		</div>
	</div>

</section>

<?php echo $this->view('layout/footer'); ?>