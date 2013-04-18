<script type="text/javascript">
	$(document).ready(function() {
		$("#loginForm").validate({
			messages: {
				email: {
					required: 'Pole nie może pozostać puste',
					email: 'Pole musi zawierać prawidłowy adres mailowy'
				},
				password: {
					required: 'Pole nie może pozostać puste'
				}
			}

		});
	});
</script>
<h2>Zaloguj</h2>
<?php echo Form::open('', array('id' => 'loginForm')) ?>
<dl>
	<dt>E-mail:</dt>
	<dd>
		<?php echo Form::input('email', (isset($_POST['email']))?$_POST['email']:'', array('id' => 'email', 'class' => 'required email')); ?>
		<span style="color:red"><?php if(isset($error['email'])) echo $error['email']; ?></span>
	</dd>
	<dt>Hasło:</dt>
	<dd>
		<?php echo Form::input('password', '', array('id' => 'password', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red"><?php if(isset($error['password'])) echo $error['password']; ?></span>
	</dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<p>Jeśli nie posiadasz konta - <?php echo HTML::anchor('zarejestruj','zarejestruj się') ?>
<?php echo Form::close() ?>
