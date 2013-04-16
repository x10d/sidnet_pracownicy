<h2>Zmiana hasła</h2>
<?php echo Form::open() ?>
<dl>
	<dt>Podaj nowe hasło:</dt>
	<dd><?php echo Form::input('password', (isset($_POST['password']))?$_POST['password']:''); ?></dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
