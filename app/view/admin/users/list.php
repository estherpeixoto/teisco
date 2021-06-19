<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<h3 class='col-8'>Users</h3>

			<div class='col-4 d-flex justify-content-end'>
				<a href='<?= SITEURL; ?>users/form/0/new' class='btn btn-outline-boost'>
					New <i class='ms-2 fas fa-plus'></i>
				</a>
			</div>
		</div>

		<div class='row'>
			<div class='col-12'>
				<?= Formulario::exibeMensagem(); ?>

				<div>
					<table id='list' class='table table-sm table-striped table-hover table-bordered'>
						<thead class='table-light'>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Type</th>
								<th>Status</th>
								<th class='text-center' style='width: 8%;'>Options</th>
							</tr>
						</thead>

						<tbody>
							<?php if ($dbDados) : ?>
								<?php foreach ($dbDados as $user) : ?>
									<tr>
										<td><?= $user->id; ?></td>

										<td><?= $user->name; ?></td>

										<td><?= $user->email; ?></td>

										<td><?= $user->type == 'A' ? 'Admin' : 'User'; ?></td>

										<td><?= $user->status == 'A' ? 'Active' : 'Inactive'; ?></td>

										<td class='d-flex justify-content-around'>
											<a title='View' href='<?= SITEURL . "users/form/$user->id/view"; ?>'>
												<i class='fas fa-eye text-fuzz'></i>
											</a>

											<a title='Update' href='<?= SITEURL . "users/form/$user->id/update"; ?>'>
												<i class='fas fa-edit text-fuzz'></i>
											</a>

											<a title='Delete' href='<?= SITEURL . "users/form/$user->id/delete"; ?>'>
												<i class='fas fa-trash-alt text-fuzz'></i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan='6' class='text-center'>There is no user registered</td>
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