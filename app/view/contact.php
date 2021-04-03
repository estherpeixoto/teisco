<?php echo $this->view('layout/header'); ?>

<section class='container bg-white py-5'>

	<h2 class='text-center text-uppercase'>Contact</h2>

	<div class='row justify-content-center mt-5'>
		<div class='col-10 col-md-6'>
			<div class='card'>
				<div class='card-body'>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingName" placeholder="E.g. John Doe">
						<label for="floatingName">Name</label>
					</div>

					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
					</div>

					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Password</label>
					</div>

					<div class="form-floating mb-3">
						<textarea class="form-control" style="height: 150px" placeholder="Leave a comment here"
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
	</div>
</section>

<?php echo $this->view('layout/footer'); ?>