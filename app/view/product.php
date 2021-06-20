<?php

$this->loadView('layout/header');
$this->loadView('layout/navbar');

?>

<section class='container bg-white py-5'>
	<h2 class='text-center text-uppercase mb-3'><?= $dbDados['product']['title']?></h2>

	<div class='row gy-3 justify-content-center'>
		<div class='col-12 col-md-6'>
			<img src='<?= SITEURL; ?>assets/img/products/<?= $dbDados['img'][0]['filename'] ?>'
				class='img-fluid'
				alt='<?= $dbDados['img'][0]['alt'] ?>'
			/>

			<div class='row'>
				<?php foreach ($dbDados['img'] as $img) : ?>
					<div class='col'>
						<a target='_blank' href='<?= SITEURL; ?>assets/img/products/<?= $img['filename'] ?>'>
							<img src='<?= SITEURL; ?>assets/img/products/<?= $img['filename'] ?>'
								class='img-thumbnail'
								alt='<?= $img['alt'] ?>'
							/>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class='col-md-6 col-lg-5 col-xl-4 align-self-md-center'>
			<div class='row align-items-center justify-content-center justify-content-md-between'>
				<h2 class='col-10 col-md text-fuzz text-center text-md-start mb-4 mb-md-0'>
					$ <?= number_format($dbDados['product']['price'], 2, ',', '.') ?>
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
					<?= $dbDados['product']['description'] ?>
				</p>
			</div>
		</div>
	</div>
</section>

<?php $this->loadView('layout/footer'); ?>