<h2>Zmiana hasła</h2>
<?php echo Form::open() ?>
<dl>
	<dt>Stare hasło:</dt>
	<dd><?php echo Form::input('oldpassword', '', array('type'=>'password')); ?></dd>
	<dt>Nowe hasło:</dt>
	<dd><?php echo Form::input('password', '', array('type'=>'password')); ?></dd>
	<dt>Powtórz nowe hasło:</dt>
	<dd><?php echo Form::input('passwordchecker', '', array('type'=>'password')); ?></dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
