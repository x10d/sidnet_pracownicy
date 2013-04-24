<script type="text/javascript">
	$(document).ready(function() {
		xValidateForm('#registerForm');
	});
</script>
<h2>Dodaj użytkownika</h2>
<?php echo Form::open('', array('id' => 'registerForm')) ?>
<dl>
	<dt>E-mail:</dt>
	<dd>
		<?php echo Form::input('email', (isset($_POST['email'])) ? $_POST['email'] : '', array('id' => 'email', 'class' => 'required email')); ?>
		<span style="color:red">
			<?php if (isset($error['email'])) echo $error['email']; ?>
		</span>
	</dd>
	<dt>Imię i nazwisko:</dt>
	<dd>
		<?php echo Form::input('username', (isset($_POST['username'])) ? $_POST['username'] : '', array('id' => 'username', 'class' => 'required')); ?>
		<span style="color:red">
			<?php if (isset($error['username'])) echo $error['username']; ?>
		</span>
	</dd>
	<dt>Hasło:</dt>
	<dd>
		<?php echo Form::input('password', '', array('id' => 'password', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red">
			<?php if (isset($error['password'])) echo $error['password']; ?>
		</span>
	</dd>
	<dt>Powtórz hasło:</dt>
	<dd>
		<?php echo Form::input('passwordchecker', '', array('id' => 'passwordchecker', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red">
			<?php if (isset($error['passwordchecker'])) echo $error['passwordchecker']; ?>
		</span>
	</dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
