<?php echo $this->view('layout/header'); ?>

<section class='section pb-0'>
	<div class='container'>

		<div class='row mb-5 justify-content-center' data-aos='fade'>
			<div class='col-md-7 text-center heading-wrap'>
				<h2 data-aos='fade-up'>About us</h2>

				<p data-aos='fade-up' data-aos-delay='100'>
					Foody is one of the country’s most celebrated restaurants; the creation of leading Brazilian restaurant group, Fink, and Executive Chef Peter Gilmore. The restaurant is an organic space reflective of Peter Gilmore’s nature inspired cuisine. The interplay of textures and colour brings life and a vibrance that embraces the restaurant’s place in the dress circle of Rio de Janeiro. An ode to the Brazilian landscape, from the vast ocean floor, to the cracked bark of a paperbark tree, every detail from the ground up has been thoughtfully considered.
				</p>
			</div>
		</div>

		<div class='row align-items-center'>
			<div class='col-lg-4'>
				<img src='<?php echo SITE_URL; ?>assets/img/dishes_1.jpg'
					alt='Image' class='img-fluid about_img_1'
					data-aos='fade' data-aos-delay='200'
				/>
			</div>

			<div class='col-lg-4'>
				<img src='<?php echo SITE_URL; ?>assets/img/about_1.jpg'
					alt='Image' class='img-fluid about_img_1'
					data-aos='fade' data-aos-delay='300'
				/>

				<img src='<?php echo SITE_URL; ?>assets/img/about_2.jpg'
					alt='Image' class='img-fluid about_img_1'
					data-aos='fade' data-aos-delay='400'
				/>
			</div>

			<div class='col-lg-4'>
				<img src='<?php echo SITE_URL; ?>assets/img/dishes_3.jpg'
					alt='Image' class='img-fluid about_img_1'
					data-aos='fade' data-aos-delay='500'
				/>
			</div>
		</div>

	</div>
</section>

<?php echo $this->view('layout/footer'); ?>