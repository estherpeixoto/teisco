<?php $this->loadView('layout/header'); ?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<h3 class='col-8'>About List</h3>

			<div class='col-4 d-flex justify-content-end'>
				<a href='<?= SITEURL; ?>about/form' title='Novo' class='btn btn-primary'>
					New <i class='ms-2 fa fa-file'></i>
				</a>
			</div>
		</div>

		<div class='row'>
			<div class='col-12'>
				<div class='table-responsive'>
					<table class='table table-sm table-striped table-hover table-bordered'>
						<thead class='table-light'>
							<tr>
								<th>ID</th>
								<th>Status</th>
								<th>Title</th>
								<th>Subtitle</th>
								<th>Text</th>
								<th class='text-center' style='width: 8%;'>Options</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>dale</td>
								<td>dele</td>
								<td>dele</td>
								<td>doly</td>
								<td>dale</td>
								<td class='d-flex justify-content-around'>
									<a title='Visualizar' href='<?= SITEURL; ?>'>
										<i class='fas fa-eye'></i>
									</a>

									<a title='Alterar' href='<?= SITEURL; ?>'>
										<i class='fas fa-edit'></i>
									</a>

									<a title='Excluir' href='<?= SITEURL; ?>'>
										<i class='fas fa-trash-alt'></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>