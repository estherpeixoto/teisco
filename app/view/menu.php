<?php echo $this->view('layout/header'); ?>

<section class='section pb-1'>

    <div class='container'>
        <div class='row mb-5 justify-content-center' data-aos='fade'>
            <div class='col-md-7 text-center heading-wrap'>
                <h2 data-aos='fade-up'>Our Menu</h2>

                <span class='back-text'>Our Menu</span>
            </div>
        </div>
    </div>

    <div class='container'>

        <div class='row'>
            <div class='col-md-6' data-aos='fade-up' data-aos-delay='100'>
                <div class='blog d-block'>
                    <a class='bg-image d-block' href='single.html'
						style="background-image: url('<?php echo SITE_URL; ?>assets/img/dishes_1.jpg');"
					>
					</a>

                    <div class='text'>
                        <h3 style='color: #ff7404;'>Salada de tomate e folhas</h3>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.
                        </p>

                        <p class='btn btn-primary btn-sm'>R$ 22,00</p>
                    </div>
                </div>
            </div>

            <div class='col-md-6' data-aos='fade-up' data-aos-delay='200'>
                <div class='blog d-block'>
                    <a class='bg-image d-block' href='single.html'
						style="background-image: url('<?php echo SITE_URL; ?>assets/img/dishes_2.jpg');"
					>
					</a>

					<div class='text'>
                        <h3 style='color: #ff7404;'>Salada de tomate e folhas</h3>

						<p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.
                        </p>

						<p class='btn btn-primary btn-sm'>R$ 29,99</p>
                    </div>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-md-6' data-aos='fade-up' data-aos-delay='100'>
                <div class='blog d-block'>
                    <a class='bg-image d-block' href='single.html'
						style="background-image: url('<?php echo SITE_URL; ?>assets/img/dishes_1.jpg');"
					>
					</a>

                    <div class='text'>
                        <h3 style='color: #ff7404;'>Salada de tomate e folhas</h3>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.
                        </p>

                        <p class='btn btn-primary btn-sm'>R$ 41,99</a></p>
                    </div>
                </div>
            </div>

            <div class='col-md-6' data-aos='fade-up' data-aos-delay='200'>
                <div class='blog d-block'>
                    <a class='bg-image d-block' href='single.html'
						style="background-image: url('<?php echo SITE_URL; ?>assets/img/dishes_2.jpg');"
					>
					</a>

                    <div class='text'>
                        <h3 style='color: #ff7404;'>Salada de tomate e folhas</h3>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.
                        </p>

                        <p class='btn btn-primary btn-sm'>R$ 19,99</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<?php echo $this->view('layout/footer'); ?>