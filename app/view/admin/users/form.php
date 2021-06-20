<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<div class='col'>
				<h3>Users - <?= Formulario::setFormSubTitulo($this->dados['acao']); ?><h3>
			</div>

			<div class='col-auto'>
				<a href='<?= SITEURL; ?>users' class='btn btn-outline-secondary rounded-pill'>
					<i class='fas fa-border-all'></i>
				</a>
			</div>
		</div>

		<form method='post' action='<?= SITEURL . "users/{$this->dados['acao']}"; ?>' class='row g-3'>
			<input type='hidden' name='id' value='<?= Formulario::setValue('id', $dbDados); ?>' />

			<div class='col-md-6'>
				<label for='name' class='form-label'>Name</label>
				<input id='name' name='name'
					type='text'
					class='form-control'
					maxlength='100'
					required
					value='<?= Formulario::setValue('name', $dbDados); ?>'
				/>
			</div>

			<div class='col-md-6'>
				<label for='email' class='form-label'>Email</label>
				<input id='email'
					name='email'
					type='email'
					class='form-control'
					maxlength='150'
					required
					value='<?= Formulario::setValue('email', $dbDados); ?>'
				/>
			</div>

			<?php if ($this->dados['acao'] == 'new') : ?>
				<div class='col-md-6'>
					<label for='password' class='form-label'>Password</label>
					<input id='password'
						name='password'
						type='password'
						class='form-control'
						maxlength='150'
						required
					/>
				</div>
			<?php endif; ?>

			<div class='col-md-6'>
				<label for='type' class='form-label'>Type</label>
				<select id='type' name='type' class='form-select' required>
					<option value='U' <?= Formulario::setValue('type', $dbDados) == 'U' ? 'selected' : ''; ?>>
						User
					</option>

					<option value='A' <?= Formulario::setValue('type', $dbDados) == 'A' ? 'selected' : ''; ?>>
						Administrator
					</option>
				</select>
			</div>

			<div class='col-md-6'>
				<label for='status' class='form-label'>Status</label>
				<select id='status' name='status' class='form-select' required>
					<option value='A' <?= Formulario::setValue('status', $dbDados) == 'A' ? 'selected' : ''; ?>>
						Active
					</option>

					<option value='I' <?= Formulario::setValue('status', $dbDados) == 'I' ? 'selected' : ''; ?>>
						Inactive
					</option>
				</select>
			</div>

			<div class='d-flex justify-content-end'>
				<a href='<?= SITEURL; ?>users' class='btn btn-outline-secondary rounded-pill'>Back</a>

				<?php if ($this->dados['acao'] != 'view') : ?>
					<button type='submit' class='btn btn-boost rounded-pill ms-2'>Save</button>
				<?php endif; ?>
			</div>
		</form>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>