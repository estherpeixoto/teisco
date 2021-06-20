<?php

use App\Lib\Formulario;

$this->loadView('layout/header');
$this->loadView('layout/navbar');

?>

<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/signin.css'>

<section class='signin bg-overdrive'>

	<div class='d-flex flex-wrap justify-content-center align-content-center py-4 py-md-5'>
		<div class='col-10 col-md-4 col-xl-3 mb-4 me-md-4'>
			<div class='card border-0'>
				<div class='card-body'>
					<h2 class='text-uppercase text-fuzz mb-3'>Sign In</h2>

					<form method='post' action='<?php echo SITEURL . 'admin/authenticate'; ?>'>
						<div class='form-floating mb-3'>
							<input type='email' name="email" class='form-control' id='floatingInput' placeholder='name@example.com'>
							<label for='floatingInput'>Email address</label>
						</div>

						<div class='form-floating mb-3'>
							<input type='password' name="password" class='form-control' id='floatingPassword' placeholder='Password'>
							<label for='floatingPassword'>Password</label>
						</div>

						<?php Formulario::exibeMensagem(); ?>

						<button type='submit' class='w-100 mb-3 px-4 btn btn-boost rounded-pill text-uppercase text-white'>
							<strong>Sign in</strong>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>

<?php $this->loadView('layout/footer'); ?>