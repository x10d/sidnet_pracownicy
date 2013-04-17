<h2>Dodaj użytkownika</h2>
<?php if ($error) echo $error; ?>
<?php echo Form::open() ?>
<dl>
	<dt>E-mail:</dt>
	<dd><?php echo Form::input('email', (isset($_POST['email']))?$_POST['email']:''); ?></dd>
	<dt>Imię i nazwisko:</dt>
	<dd><?php echo Form::input('username', (isset($_POST['username']))?$_POST['username']:''); ?></dd>
	<dt>Hasło:</dt>
	<dd><?php echo Form::input('password', '', array('type'=>'password')); ?></dd>
	<dt>Powtórz hasło:</dt>
	<dd><?php echo Form::input('passwordchecker', '', array('type'=>'password')); ?></dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
