<?php $this->loadView('layout/header'); ?>

<section class='container bg-white py-5'>

	<h2 class='text-center text-uppercase mb-3'>Teisco Overdrive</h2>

	<div class='row gy-3 justify-content-center'>

		<div class='col-12 col-md-6'>
			<img src='<?= SITEURL; ?>assets/img/products/overdrive1.png' class='img-fluid'
				alt='Teisco Overdrive'
			/>
		</div>

		<div class='col-md-6 col-lg-5 col-xl-4 align-self-md-center'>

			<div class='row align-items-center justify-content-center justify-content-md-between'>
				<h2 class='col-10 col-md text-fuzz text-center text-md-start mb-4 mb-md-0'>
					$ 126,00
				</h2>

				<button class='col-11 col-md btn btn-boost text-uppercase text-white rounded-pill px-4'>
					<i class='fas fa-shopping-cart me-2'></i>
					<strong>Add to cart</strong>
				</button>
			</div>

			<div class='mt-5'>
				<strong class='text-uppercase'>
					Learn more about this product
				</strong>

				<p class='text-muted mt-3'>
					Just like the vintage preamp it’s modeled after, the Teisco Boost is loaded with a field-effect transistor (FET) for softer, more organic clipping and can run at 24V via the voltage switch for extra headroom. The EQ profile switch also provides extra tweakability when you need it. Whether you need a tone-enhancing buffer or extra ‘oomph’ for your drives and amps, the Teisco Boost covers it all.<br>This pedal comes in a premium zinc housing, with recessed screws, removable feet and a textured base for stronger velcro-sticking.<br>For useful tips or to learn about the technical specifications, download the Teisco Boost Product Guide and get started!
				</p>
			</div>
		</div>

	</div>

</section>

<?php $this->loadView('layout/footer'); ?>