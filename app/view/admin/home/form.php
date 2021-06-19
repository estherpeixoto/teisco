<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<div class='col'>
				<h3>Home - <?= Formulario::setFormSubTitulo($this->dados['acao']); ?><h3>
			</div>

			<div class='col-auto'>
				<a href='<?= SITEURL; ?>main' class='btn btn-outline-secondary rounded-pill'>
					<i class='fas fa-border-all'></i>
				</a>
			</div>
		</div>

		<div class='row'>
			<form method='post' action='<?= SITEURL . "main/{$this->dados['acao']}"; ?>' class='row g-3' enctype='multipart/form-data'>

				<input type='hidden' name='id' value='<?= Formulario::setValue('id', $dbDados); ?>' />
				<input type='hidden' name='old_logoImg' value='<?= Formulario::setValue('logoImg', $dbDados); ?>' />
				<input type='hidden' name='old_bgImg' value='<?= Formulario::setValue('bgImg', $dbDados); ?>' />
				<input type='hidden' name='old_heroImg' value='<?= Formulario::setValue('heroImg', $dbDados); ?>' />

				<div class='col-12'>
					<label for='status' class='form-label'>Status</label>
					<select class='form-select' id='status' name='status' required>
						<option value='A' <?= Formulario::setValue('status', $dbDados) == 'A' ? 'selected' : ''; ?>>Active</option>
						<option value='I' <?= Formulario::setValue('status', $dbDados) == 'I' ? 'selected' : ''; ?>>Inactive</option>
					</select>
				</div>

				<fieldset class='border rounded pt-2 pb-3 col-12 col-md-6 m-md-2'>
					<legend>Header</legend>

					<div class='mt-3'>
						<label for='subtitle' class='form-label'>Subtitle</label>
						<input type='text' class='form-control' id='subtitle' name='subtitle' maxlength='100' required value='<?= Formulario::setValue('subtitle', $dbDados); ?>' />
					</div>

					<div>
						<label for='logoImg' class='form-label'>Logo</label>
						<input type='file' accept='image/png, image/jpg, image/jpeg, image/gif' class='form-control' id='logoImg' name='logoImg' <?= $this->dados['acao'] == 'new' ? 'required' : ''; ?> />
					</div>

					<div class='mt-3'>
						<label for='bgImg' class='form-label'>Background Image</label>
						<input type='file' accept='image/png, image/jpg, image/jpeg, image/gif' class='form-control' id='bgImg' name='bgImg' <?= $this->dados['acao'] == 'new' ? 'required' : ''; ?> />
					</div>
				</fieldset>

				<fieldset class='border rounded pt-2 pb-3 col-12 col-md m-md-2'>
					<legend>Hero</legend>

					<div>
						<label for='heroTitle' class='form-label'>Title</label>
						<input type='text' class='form-control' id='heroTitle' name='heroTitle' maxlength='100' required value='<?= Formulario::setValue('heroTitle', $dbDados); ?>' />
					</div>

					<div class='mt-3'>
						<label for='heroImg' class='form-label'>Image</label>
						<input type='file' accept='image/png, image/jpg, image/jpeg, image/gif' class='form-control' id='heroImg' name='heroImg' <?= $this->dados['acao'] == 'new' ? 'required' : ''; ?> />
					</div>
				</fieldset>

				<div class='d-flex justify-content-end'>
					<a href='<?= SITEURL; ?>main' class='btn btn-outline-secondary rounded-pill'>Back</a>

					<?php if ($this->dados['acao'] != 'view') : ?>
						<button type='submit' class='btn btn-boost rounded-pill ms-2'>Save</button>
					<?php endif; ?>
				</div>

				<?php if (!empty(Formulario::setValue('logoImg', $dbDados))): ?>
					<div class='col-md-4'>
						<p>Logo</p>
						<img class="img-fluid" src='<?= SITEURL . 'assets/img/home/' . Formulario::setValue('logoImg', $dbDados); ?>' />
					</div>
				<?php endif; ?>

				<?php if (!empty(Formulario::setValue('bgImg', $dbDados))): ?>
					<div class='col-md-4'>
						<p>Background image</p>
						<img class="img-fluid" src='<?= SITEURL . 'assets/img/home/' . Formulario::setValue('bgImg', $dbDados); ?>' />
					</div>
				<?php endif; ?>

				<?php if (!empty(Formulario::setValue('heroImg', $dbDados))): ?>
					<div class='col-md-4'>
						<p>Hero image</p>
						<img class="img-fluid" src='<?= SITEURL . 'assets/img/home/' . Formulario::setValue('heroImg', $dbDados); ?>' />
					</div>
				<?php endif; ?>
			</form>
		</div>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>