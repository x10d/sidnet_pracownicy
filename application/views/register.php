<h2>Dodaj użytkownika</h2>
<?php echo Form::open() ?>
<dl>
	<dt>E-mail:</dt>
	<dd><?php echo Form::input('email', (isset($_POST['email']))?$_POST['email']:''); ?></dd>
	<dt>Imię i nazwisko:</dt>
	<dd><?php echo Form::input('username', (isset($_POST['username']))?$_POST['username']:''); ?></dd>
	<dt>Hasło:</dt>
	<dd><?php echo Form::input('password', (isset($_POST['password']))?$_POST['password']:''); ?></dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
