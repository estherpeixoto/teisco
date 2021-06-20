<?php

$this->loadView('layout/header');
$this->loadView('layout/navbar');

?>

<section class='container bg-white py-5'>
	<h2 class='text-center text-uppercase mb-3'>Our pedals</h2>

	<div class='row gy-3 justify-content-center'>
		<?php if ($dbDados) :
			foreach ($dbDados as $product) : ?>
				<div class='col-6 col-md-4'>
					<div class='card border-0'>
						<img src='<?= SITEURL; ?>assets/img/products/<?= $product->filename ?>' class='card-img-top' alt='<?= $product->alt ?>' />

						<div class='card-body'>
							<h6 class='card-title text-center text-uppercase'><?= $product->title ?></h6>
							<a href='<?= SITEURL; ?>Home/products/<?= $product->id ?>' class='stretched-link'></a>
						</div>
					</div>
				</div>
			<?php endforeach;
		endif; ?>
	</div>
</section>

<?php $this->loadView('layout/footer'); ?>