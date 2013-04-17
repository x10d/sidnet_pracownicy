<h2>Dodaj użytkownika</h2>
<?php echo Form::open() ?>
<dl>
	<dt>E-mail:</dt>
	<dd>
		<?php echo Form::input('email', (isset($_POST['email']))?$_POST['email']:''); ?>
		<span style="color:red"><?php if(isset($error['email'])) echo $error['email']; ?></span>
	</dd>
	<dt>Imię i nazwisko:</dt>
	<dd>
		<?php echo Form::input('username', (isset($_POST['username']))?$_POST['username']:''); ?>
		<span style="color:red"><?php if(isset($error['username'])) echo $error['username']; ?></span>
	</dd>
	<dt>Hasło:</dt>
	<dd>
		<?php echo Form::input('password', '', array('type'=>'password')); ?>
		<span style="color:red"><?php if(isset($error['password'])) echo $error['password']; ?></span>
	</dd>
	<dt>Powtórz hasło:</dt>
	<dd>
		<?php echo Form::input('passwordchecker', '', array('type'=>'password')); ?>
		<span style="color:red"><?php if(isset($error['passwordchecker'])) echo $error['passwordchecker']; ?></span>
	</dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
