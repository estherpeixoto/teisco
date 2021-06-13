  <?php $this->loadView('layout/header'); ?>

  <link rel='stylesheet' href='<?= SITEURL; ?>assets/css/restricted-area.css'>

  <div class='list-container'>
  	<?php $this->loadView('layout/navbar'); ?>

  	<div class='container py-5'>
  		<div class='row mb-3'>
  			<div class='col'>
  				<h3>About Manager<h3>
  			</div>

  			<div class='col-auto'>
  				<a href='<?= SITEURL; ?>about/list' class='btn btn-outline-boost rounded-pill'>
  					<i class='fas fa-border-all'></i>
  				</a>
  			</div>
  		</div>

  		<form action='' method='post' enctype='multipart/form-data'>
  			<div class='row g-3'>
  				<div class='col-sm-2'>
  					<label for='id' class='control-label'>ID</label>
  					<input type='text' class='form-control' id='id' name='id' readonly />
  				</div>

  				<div class='col-sm-4'>
  					<label for='status' class='control-label'>Status</label>
  					<select class='form-select' id='status' name='status' required>
  						<option>Selecione o Status</option>
  						<option value='1'>Ativo</option>
  						<option value='2'>Inativo</option>
  					</select>
  				</div>

  				<div class='col-sm-6'>
  					<label for='title' class='control-label'>Title</label>
  					<input type='text' class='form-control' id='title' name='title' maxlength='100' required />
  				</div>

  				<div class='col-sm-6'>
  					<label for='subtitle' class='control-label'>Subtitle</label>
  					<input type='text' class='form-control' id='subtitle' name='subtitle' maxlength='100' required />
  				</div>

  				<div>
  					<a href='<?= SITEURL; ?>about/list' class='btn btn-primary'>Voltar</a>
  				</div>

  			</div>

  		</form>

  	</div>

  	<?php $this->loadView('layout/footer'); ?>
  </div>