<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>
<?php $this->loadView('layout/navbar'); ?>

<section class='container bg-white py-5'>

	<h2 class='text-center text-uppercase'>Contact</h2>

	<?php Formulario::exibeMensagem() ?>
	<form method='post' action='<?= SITEURL . "contact/new"; ?>' class='row justify-content-center mt-5'>
		<div class='col-10 col-md-6'>
			<div class='card'>
				<div class='card-body'>
					<div class="form-floating mb-3">
						<input name='name' type="text" class="form-control" id="floatingName" placeholder="E.g. John Doe">
						<label for="floatingName">Name</label>
					</div>

					<div class="form-floating mb-3">
						<input name='email' type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
					</div>
					
					<div class="form-floating mb-3">
						<input name='phone' type="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Phone</label>
					</div>

					<div class="form-floating mb-3">
						<input name='subject' type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Subject</label>
					</div>

					<div class="form-floating mb-3">
						<textarea name='message' class="form-control" style="height: 150px" placeholder="Leave a comment here"
							id="floatingTextarea"
						></textarea>
						<label for="floatingTextarea">Message</label>
					</div>

					<div class='d-flex justify-content-end'>
						<button class="px-4 btn btn-boost rounded-pill text-uppercase text-white">
							<strong>Send</strong>
						</button>
					</div>
				</div>
			</div>

		</div>
	</form>
</section>

<?php $this->loadView('layout/footer'); ?>