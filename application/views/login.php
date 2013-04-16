<h2>Zaloguj</h2>
<?php echo Form::open() ?>
<?php if ($error) echo $error; ?>
<dl>
	<dt>E-mail:</dt>
	<dd><?php echo Form::input('email', (isset($_POST['email']))?$_POST['email']:''); ?></dd>
	<dt>Hasło:</dt>
	<dd><?php echo Form::input('password', (isset($_POST['password']))?$_POST['password']:''); ?></dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<p>Jeśli nie posiadasz konta - <?php echo HTML::anchor('zarejestruj','zarejestruj się') ?>
<?php echo Form::close() ?>
