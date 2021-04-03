<?php echo $this->view('layout/header'); ?>

<link rel='stylesheet' href='<?php echo SITE_URL; ?>assets/css/signin.css'>

<section class='signin bg-overdrive'>

	<div class='d-flex flex-wrap justify-content-center align-content-center py-4 py-md-5'>
		<div class='col-10 col-md-4 col-xl-3 mb-4 me-md-4'>
			<div class='card border-0'>
				<div class='card-body'>
					<h2 class='text-uppercase text-fuzz mb-3'>Sign In</h2>

					<form method='post' action=''>
						<div class='form-floating mb-3'>
							<input type='email' class='form-control' id='floatingInput' placeholder='name@example.com'>
							<label for='floatingInput'>Email address</label>
						</div>

						<div class='form-floating mb-3'>
							<input type='password' class='form-control' id='floatingPassword' placeholder='Password'>
							<label for='floatingPassword'>Password</label>
						</div>

						<button type='submit' class='w-100 mb-3 px-4 btn btn-boost rounded-pill text-uppercase text-white'>
							<strong>Sign in</strong>
						</button>
					</form>

					<a href='#' class='text-fuzz'>Forgot your password?</a>
				</div>
			</div>
		</div>

		<div class='col-10 col-md-4 col-xl-3'>
			<div class='card border-0'>
				<div class='card-body'>
					<h2 class='text-uppercase text-fuzz mb-3'>Register</h2>

					<form method='post' action=''>
						<div class='form-floating mb-3'>
							<input type='text' class='form-control' id='floatingName' placeholder='E.g. John Doe'>
							<label for='floatingName'>Name</label>
						</div>

						<div class='form-floating mb-3'>
							<input type='email' class='form-control' id='floatingInput' placeholder='name@example.com'>
							<label for='floatingInput'>Email address</label>
						</div>

						<div class='form-floating mb-3'>
							<input type='password' class='form-control' id='floatingPassword' placeholder='Password'>
							<label for='floatingPassword'>Password</label>
						</div>

						<button type='submit' class='w-100 mb-3 px-4 btn btn-outline-boost rounded-pill text-uppercase'>
							<strong>Register</strong>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>

<?php echo $this->view('layout/footer'); ?>