<?php $this->loadView('layout/header'); ?>
<?php $this->loadView('layout/navbar'); ?>

<section class='container bg-white py-5' style='height: 92vh;'>

	<div class='row justify-content-center align-items-center h-100'>
		<div class='col-12 text-center'>
			<h1 class='text-uppercase text-fuzz mb-5'>Page not found</h1>

			<h3>
				You’ve landed on the wrong page, Space Ranger!
				<br>
				Head back around using this link!
			</h3>

			<a href='<?= SITEURL; ?>'
				class='btn btn-boost text-white rounded-pill text-uppercase fw-bold px-4 mt-5'
			>
				Go to homepage
			</a>
		</div>
	</div>

</section>

<?php $this->loadView('layout/footer'); ?>