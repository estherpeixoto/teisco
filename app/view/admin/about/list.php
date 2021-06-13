<?php 

use App\Lib\Formulario;

$this->loadView('layout/header'); 

?>

<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/restricted-area.css'>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<?= Formulario::exibeMensagem() ?>

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
								<?php
									if ( $dbDados ) {
											foreach ($dbDados as $key => $value) {
													?>
									
													<tr>
															<td class="text-center"><?= $value->id ?></td>
															<td class="text-center"><?= Formulario::setDescricao($value->status, ['A' => 'Ativo', 'I' => 'Inativo']) ?></td>
															<td><?= $value->title ?></td>
															<td><?= $value->subtitle ?></td>
															<td><?= $value->text ?></td>
															<td>
																	<a href="<?= SITEURL ?>admin/about/form<?= $value->id ?>/view" title="View" class="btn-crud"><i class="fa fa-low-vision"></i></a>
																	<a href="<?= SITEURL ?>admin/about/form<?= $value->id ?>/update" title="Update" class="btn-crud"><i class="fa fa-clipboard"></i></a>
																	<a href="<?= SITEURL ?>admin/about/form<?= $value->id ?>/delete" title="Delete" class="btn-crud"><i class="fa fa-trash"></i></a>
															</td>
													</tr>
													
													<?php
											}
									} else {
											?>
											<tr>
													<td colspan="7">No records found...</td>
											</tr>
											<?php
									}
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>