<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<h3 class='col-8'>Products List</h3>

			<div class='col-4 d-flex justify-content-end'>
				<a href='<?= SITEURL; ?>products/form/0/new' title='Novo' class='btn btn-outline-boost rounded-pill'>
					New <i class='ms-2 fas fa-plus'></i>
				</a>
			</div>
		</div>

		<div class='row'>
			<div class='col-12'>
				<?php Formulario::exibeMensagem() ?>

				<table id='list' class='table table-sm table-striped table-hover table-bordered'>
					<thead class='table-light'>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Description</th>
							<th>Price</th>
							<th class='text-center' style='width: 8%;'>Options</th>
						</tr>
					</thead>

					<tbody>
						<?php if ($dbDados) : ?>
							<?php foreach ($dbDados as $product) : ?>
								<tr>
									<td class="text-center"><?= $product->id ?></td>

									<td><?= $product->title ?></td>

									<td><?= $product->description ?></td>

									<td>$<?= number_format($product->price, 2, ',', '.') ?></td>

									<td>
										<div class='d-flex justify-content-around'>
											<a title='View' href='<?= SITEURL . "products/form/$product->id/view"; ?>'>
												<i class='fas fa-eye text-fuzz'></i>
											</a>

											<a title='Update' href='<?= SITEURL . "products/form/$product->id/update"; ?>'>
												<i class='fas fa-edit text-fuzz'></i>
											</a>

											<a title='Delete' href='<?= SITEURL . "products/form/$product->id/delete"; ?>'>
												<i class='fas fa-trash-alt text-fuzz'></i>
											</a>
										</div>
									</td>
								</tr>

							<?php endforeach; ?>
						<?php else : ?>
							<tr>
								<td colspan='7'>No records found...</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
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