<?php

use App\Lib\Formulario;

$this->loadView('layout/header');

?>

<div class='list-container'>
	<?php $this->loadView('layout/navbar'); ?>

	<div class='container py-5'>
		<div class='row mb-3'>
			<div class='col'>
				<h3><?= Formulario::setValue('subject', $dbDados); ?><h3>
			</div>

			<div class='col-auto' style='display: flex;'>
				<a href='<?= SITEURL; ?>contact' class='btn btn-outline-secondary rounded-pill'>
					<i class='fas fa-border-all'></i>
				</a>
        <?php if($this->dados['acao'] == 'delete'){?>
          <form  method='post' action='<?= SITEURL . "contact/delete"; ?>'>
            <input type='hidden' name='id' value='<?= Formulario::setValue('id', $dbDados); ?>' />
            <button type='submit' class='btn btn-boost rounded-pill ms-2'>Deletar</button>
          </form>
        <?php } ?>
			</p>
		</div>
    <div>
      <h6>De: <?= Formulario::setValue('name', $dbDados); ?> <span class='text-secondary'>(<?= Formulario::setValue('email', $dbDados); ?>)</span></h6>
    </div>

    <hr />

    <p>
        <?= Formulario::setValue('message', $dbDados); ?>
    </p>
		
	</div>
</div>
	<?php $this->loadView('layout/footer'); ?>
</div>