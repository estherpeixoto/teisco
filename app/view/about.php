<?php $this->loadView('layout/header'); ?>

<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/about.css'>

<section class='bg-overdrive'>
	<div class='container-md d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center p-md-5'>
		<div class='p-5 text-fuzz'>
			<h1 class='text-uppercase fw-bolder hero-title'>A universe of<br>fearless<br>music<br>explorers</h1>
		</div>

		<img src='<?= SITEURL; ?>assets/img/hero_about.png'
			class='img-fluid hero-image pb-5 pb-md-0'
			alt='Teisco pedal'
		/>
	</div>
</section>

<section class='about d-flex flex-column flex-md-row justify-content-center align-content-center p-5'>
	<h1 class='col-12 col-md-3 col-xl-auto mb-4 mb-md-0 me-xl-5 fw-bold text-fuzz'>JAPAN,<br>1948</h1>

	<p class='col-12 col-md-4 col-xl-3 pe-md-3 pe-xl-5'>
		Teisco guitars, also known as Teisco Del Ray guitars, were created in this time period in Japan. They had everything instruments of the time needed – electronic components, eye-catching body shapes, and unique design choices. It was a time when electric instruments were viewed as the bringer of the next generation of music, so an out-of-this-world design meant more appeal.
	</p>

	<p class='col-12 col-md-4 col-xl-3 ps-md-3 ps-xl-5'>
		In 2018, the brand was relaunched – along with former guitar company Harmony – by Singaporean music company BandLab Technologies to produce effects units.
	</p>
</section>

<?php $this->loadView('layout/footer'); ?>