<script type="text/javascript">
	$(document).ready(function() {
		xValidateForm('#changePasswordForm');
	});
</script>
<h2>Zmiana hasła</h2>
<?php echo Form::open('', array('id' => 'changePasswordForm')) ?>
<dl>
	<dt>Stare hasło:</dt>
	<dd>
		<?php echo Form::input('oldpassword', '', array('id' => 'oldpassword', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red">
			<?php if (isset($error['oldpassword'])) echo $error['oldpassword']; ?>
		</span>
	</dd>
	<dt>Nowe hasło:</dt>
	<dd>
		<?php echo Form::input('password', '', array('id' => 'password', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red">
			<?php if (isset($error['password'])) echo $error['password']; ?>
		</span>
	</dd>
	<dt>Powtórz nowe hasło:</dt>
	<dd>
		<?php echo Form::input('passwordchecker', '', array('id' => 'passwordchecker', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red"><?php if (isset($error['passwordchecker'])) echo $error['passwordchecker']; ?></span>
	</dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
