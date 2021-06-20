<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<div class='col'>
				<h3>Products - <?= Formulario::setFormSubTitulo($this->dados['acao']); ?><h3>
			</div>

			<div class='col-auto'>
				<a href='<?= SITEURL; ?>products' class='btn btn-outline-secondary rounded-pill'>
					<i class='fas fa-border-all'></i>
				</a>
			</div>
		</div>

		<form method='POST' action='<?= SITEURL . "products/{$this->dados['acao']}"; ?>' class='row g-3' enctype='multipart/form-data'>

			<input type='hidden' name='id' value='<?= Formulario::setValue('id', $dbDados); ?>' />

			<div class='col-sm-2'>
				<label for='status' class='form-label'>Status</label>
				<select class='form-select' id='status' name='status' required>
					<option value='A' <?= Formulario::setValue('status', $dbDados) == 'A' ? 'selected' : ''; ?>>Active</option>
					<option value='I' <?= Formulario::setValue('status', $dbDados) == 'I' ? 'selected' : ''; ?>>Inactive</option>
				</select>
			</div>

			<div class='col-md-2'>
				<label for='price' class='form-label'>Price</label>
				<input type='text' class='form-control' id='price' name='price' maxlength='100' required value='<?= @number_format(Formulario::setValue('price', $dbDados), 2, ',', '.'); ?>' />
			</div>

			<div class='col-sm-8'>
				<label for='title' class='form-label'>Title</label>
				<input type='text' class='form-control' id='title' name='title' maxlength='100' required value='<?= Formulario::setValue('title', $dbDados); ?>' />
			</div>

			<div class='col-12'>
				<label for='description' class='form-label'>Description</label>
				<textarea class='form-control' id='description' name='description' required><?= Formulario::setValue('description', $dbDados); ?></textarea>
			</div>

			<div class='col-sm-6'>
				<label for='img' class='form-label'>Image</label>
				<input type='file' accept='image/png, image/jpg, image/jpeg, image/gif' class='form-control' id='img' name='img[]'
					<?= $this->dados['acao'] == 'new' ? 'required' : ''; ?> multiple />
			</div>

			<div class='d-flex justify-content-end'>
				<a href='<?= SITEURL; ?>products' class='btn btn-outline-secondary rounded-pill'>Back</a>

				<?php if ($this->dados['acao'] != 'view') : ?>
					<button type='submit' class='btn btn-boost rounded-pill ms-2'>Save</button>
				<?php endif; ?>
			</div>

		</form>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>