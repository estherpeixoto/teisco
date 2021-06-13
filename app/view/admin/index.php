<?php

use App\Lib\Session;

$this->loadView('layout/header');

?>

<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/restricted-area.css'>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<h3 class='text-uppercase text-center mb-5'>Welcome <?= strtok(Session::get('email'), '@'); ?></h3>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>