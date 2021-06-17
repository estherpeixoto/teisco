<?php

use App\Lib\Formulario;

$this->loadView('layout/header');
$this->loadView('layout/navbar');

?>

<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/about.css'>

<section class='bg-overdrive'>
	<div class='container-md d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center p-md-5'>
		<div class='p-5 text-fuzz'>
			<h1 class='text-uppercase fw-bolder hero-title'><?= Formulario::setValue('title', $dbDados); ?></h1>
		</div>

		<?php if (!empty(Formulario::setValue('img', $dbDados))) : ?>
			<img src='<?= SITEURL . 'assets/img/about/' . Formulario::setValue('img', $dbDados); ?>'
				class='img-fluid hero-image pb-5 pb-md-0'
				alt='Teisco pedal'
			/>
		<?php endif; ?>
	</div>
</section>

<section class='about d-flex flex-column flex-md-row justify-content-center align-content-center p-5'>
	<h1 class='col-12 col-md-3 col-xl-auto mb-4 mb-md-0 me-xl-5 fw-bold text-fuzz'><?= Formulario::setValue('subtitle', $dbDados); ?></h1>

	<p class='col-12 col-md-4 col-xl-3 pe-md-3 pe-xl-5'>
		<?= Formulario::setValue('text', $dbDados); ?>
	</p>
</section>

<?php $this->loadView('layout/footer'); ?>