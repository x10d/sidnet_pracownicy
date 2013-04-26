<h2>Zaloguj</h2>
<?php echo Form::open('', array('id' => 'loginForm')) ?>
<dl>
	<dt>E-mail:</dt>
	<dd>
		<?php echo Form::input('email', (isset($_POST['email'])) ? $_POST['email'] : '', array('id' => 'email', 'class' => 'required email')); ?>
		<span style="color:red">
			<?php if (isset($error['email'])) echo $error['email']; ?>
		</span>
	</dd>
	<dt>Hasło:</dt>
	<dd>
		<?php echo Form::input('password', '', array('id' => 'password', 'class' => 'required', 'type'=>'password')); ?>
		<span style="color:red">
			<?php if (isset($error['password'])) echo $error['password']; ?>
		</span>
	</dd>
	<dt></dt>
	<dd><?php echo Form::submit('submit', 'dodaj') ?></dd>
</dl>
<p>Jeśli nie posiadasz konta - <?php echo HTML::anchor('zarejestruj', 'zarejestruj się') ?>
<?php echo Form::close() ?>
<div class="networks">
	<p>Zaloguj się przez Facebooka</p>
	<a href="#" class="fb">Facebook</a>
	<a href="#" class="gp">Google +</a>
</div>
<div id="fb-root"></div>
<script type="text/javascript">
	$(document).ready(function() {
		xValidateForm('#loginForm');
	});
</script>
<script src="http://connect.facebook.net/pl_PL/all.js"></script>
<script src="https://apis.google.com/js/client.js?onload=init_google"></script>
<script>
    FB.init( {
        appId:'<?php echo Kohana::$config->load('facebook.appId') ?>', cookie:true, 
        status:true, xfbml:true 
    });

    var utils = {
        FBLogin : function(url){
            FB.login(function(response) {
                var query_string = '';
                if (response.status == 'connected') {
                    query_string = '?signed_request=' + response.authResponse.signedRequest + '&auth_token=' + response.authResponse.accessToken;
                    top.location.href = url + query_string;
                }
            }, {scope: 'email'});
        },
        GPInit : function(){
            
        },
        GPLogin : function(immediate, url){
            var config = {
                client_id: '<?php echo Kohana::$config->load('googleplus.clientId') ?>',
                scope: ['https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email'],
                immediate: immediate
            };
            gapi.client.setApiKey('<?php echo Kohana::$config->load('googleplus.apiKey') ?>');
            window.setTimeout(function() {  
                gapi.auth.authorize(config, function(response){
                    if(response != null) {
                        if(response.access_token != null) {
                            if (response.access_token && url.length > 0) {
                                var query_string = '?auth_token=' + response.access_token;
                                top.location.href = url + query_string;
                            }
                        }
                    }
                });
            }, 1);
        }
    }

	function init_google(){
	    window.setTimeout(function() {  
	        utils.GPLogin(true, '');
	        gapi.auth.init();
	    });
	}

</script>


