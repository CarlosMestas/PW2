R<?php



$this->layout = false;

?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= $this->Html->meta('icon') ?>
<!--===============================================================================================-->	
	<?= $this->Html->css('login/vendor/bootstrap/css/bootstrap.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('login/vendor/animate/animate.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('login/vendor/css-hamburgers/hamburgers.min.css') ?>
<!--===============================================================================================-->	
	<?= $this->Html->css('login/vendor/select2/select2.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('login/css/util.css') ?>
	<?= $this->Html->css('login/css/main.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->script(['login/vendor/jquery/jquery-3.2.1.min.js','login/vendor/bootstrap/js/popper.js']);?>
	<?= $this->Html->script(['login/vendor/bootstrap/js/bootstrap.min.js','login/vendor/select2/select2.min.js']);?>
	<?= $this->Html->script(['login/vendor/tilt/tilt.jquery.min.js','login/js/main.js']);?>
	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<?= $this->Html->image('login/images/img-01.png', ['alt' => 'IMG']);?>
					
				</div>

					<?= $this->Form->create() ?>
					<span class="login100-form-title">
						Member Login
					</span>
						
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<?= $this->Form->input('email'+,['class'=>'input100']) ?>
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<?= $this->Form->input('password',['class'=>'input100']) ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<?= $this->Form->button('Login') ?>
						<?= $this->Form->end() ?>
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
 
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	
	
<!--===============================================================================================-->
	
<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

</body>
</html>