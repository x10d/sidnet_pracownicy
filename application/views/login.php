<h2>Zaloguj</h2>
<?php echo Form::open() ?>
<dl>
	<dt>E-mail:</dt>
	<dd><?php echo Form::input('email', (isset($_POST['email']))?$_POST['email']:''); ?></dd>
	<dt>Hasło:</dt>
	<dd><?php echo Form::input('password', (isset($_POST['password']))?$_POST['password']:''); ?></dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
