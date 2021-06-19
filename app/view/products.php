<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>
<?php $this->loadView('layout/navbar'); ?>

<section class='container bg-white py-5'>

	<h2 class='text-center text-uppercase mb-3'>Our pedals</h2>

	<div class='row gy-3 justify-content-center'>

	<?php 

	if ($dbDados) : ?>
	<?php foreach ($dbDados as $product) : ?>
		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?= SITEURL; ?>assets/img/products/<?= $product->filename ?>' class='card-img-top'
					alt='Teisco Boost'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'><?= $product->title ?></h6>
					<a href='<?= SITEURL; ?>Home/products/<?= $product->id ?>' class='stretched-link'></a>
				</div>
			</div>
		</div>
	<?php 
				endforeach; 
			endif; 
	?>
	</div>
<!-- 
	<hr class='my-5 text-light'>

	<h2 class='text-center text-uppercase mb-3'>Our interfaces</h2>

	<div class='row justify-content-center'>
		<div class='col-6 col-md-4'>
			<div class='card border-0'>
				<img src='<?= SITEURL; ?>assets/img/products/interface1.png' class='card-img-top'
					alt='Teisco Interface Pedal'
				/>

				<div class='card-body'>
					<h6 class='card-title text-center text-uppercase'>Teisco Interface Pedal</h6>
					<a href='<?= SITEURL; ?>Home/products/6' class='stretched-link'></a>
				</div>
			</div>
		</div>
	</div> -->

</section>

<?php $this->loadView('layout/footer'); ?>