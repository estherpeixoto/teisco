<?php $this->loadView('layout/header'); ?>
<?php $this->loadView('layout/navbar'); ?>

<section class='container bg-white py-5'>

	<h2 class='text-center text-uppercase mb-3'><?php echo $dbDados["title"]?></h2>

	<div class='row gy-3 justify-content-center'>

		<div class='col-12 col-md-6'>
			<img src='<?= SITEURL; ?>assets/img/products/<?php echo $dbDados["filename"]?>' class='img-fluid'
				alt='Teisco Overdrive'
			/>
		</div>

		<div class='col-md-6 col-lg-5 col-xl-4 align-self-md-center'>

			<div class='row align-items-center justify-content-center justify-content-md-between'>
				<h2 class='col-10 col-md text-fuzz text-center text-md-start mb-4 mb-md-0'>
					$ <?php echo number_format($dbDados["price"], 2, ',', '.')?>
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
					<?php echo $dbDados["description"] ?>
				</p>
			</div>
		</div>

	</div>

</section>

<?php $this->loadView('layout/footer'); ?>