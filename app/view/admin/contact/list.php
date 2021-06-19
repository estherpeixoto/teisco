<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<h3 class='col-8'>Contact List</h3>

		</div>

		<div class='row'>
			<div class='col-12'>
				<?php Formulario::exibeMensagem() ?>

				<div>
					<table id='list' class='table table-sm table-striped table-hover table-bordered'>
						<thead class='table-light'>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Subject</th>
								<th>Email</th>
								<th>Phone</th>
								<th class='text-center' style='width: 8%;'>Options</th>
							</tr>
						</thead>

						<tbody>
							<?php if ($dbDados) : ?>
								<?php foreach ($dbDados as $contact) : ?>
									<tr>
										<td class="text-center"><?= $contact->id ?></td>

										<td><?= $contact->name ?></td>

										<td><?= $contact->subject ?></td>

										<td><?= $contact->email ?></td>

										<td><?= $contact->phone ?></td>


										<td>
											<div class='d-flex justify-content-around'>
												<a title='View' href='<?= SITEURL . "contact/form/$contact->id/view"; ?>'>
													<i class='fas fa-eye text-fuzz'></i>
												</a>

												<a title='Delete' href='<?= SITEURL . "contact/form/$contact->id/delete"; ?>'>
													<i class='fas fa-trash-alt text-fuzz'></i>
												</a>
											</div>
										</td>
									</tr>

								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan="7">No records found...</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php $this->loadView('layout/footer'); ?>
</div>


<script>
  $(document).ready(function() {
    $('#list').DataTable();
} );
</script>