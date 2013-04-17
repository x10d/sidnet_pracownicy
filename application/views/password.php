<h2>Zmiana hasła</h2>
<?php echo Form::open() ?>
<dl>
	<dt>Stare hasło:</dt>
	<dd>
		<?php echo Form::input('oldpassword', '', array('type'=>'password')); ?>
		<span style="color:red"><?php if(isset($error['oldpassword'])) echo $error['oldpassword']; ?></span>
	</dd>
	<dt>Nowe hasło:</dt>
	<dd>
		<?php echo Form::input('password', '', array('type'=>'password')); ?>
		<span style="color:red"><?php if(isset($error['password'])) echo $error['password']; ?></span>
	</dd>
	<dt>Powtórz nowe hasło:</dt>
	<dd>
		<?php echo Form::input('passwordchecker', '', array('type'=>'password')); ?>
		<span style="color:red"><?php if(isset($error['passwordchecker'])) echo $error['passwordchecker']; ?></span>
	</dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
