
<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>

	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
        <?= __('Admin Login') ?>
    </title>


	<?= $this->Html->meta('icon') ?>
<!--===============================================================================================-->	
	<?= $this->Html->css('vendor/bootstrap/css/bootstrap.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('vendor/animate/animate.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('vendor/css-hamburgers/hamburgers.min.css') ?>
<!--===============================================================================================-->	
	<?= $this->Html->css('vendor/select2/select2.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('css/util.css') ?>
	<?= $this->Html->css('css/main.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->script(['vendor/jquery/jquery-3.2.1.min.js','vendor/bootstrap/js/popper.js']);?>
	<?= $this->Html->script(['vendor/bootstrap/js/bootstrap.min.js','vendor/select2/select2.min.js']);?>
	<?= $this->Html->script(['vendor/tilt/tilt.jquery.min.js','js/main.js']);?>
	<?= $this->Html->css(captcha_layout_stylesheet_url(),['inline' => false]) ?> 
<!--===============================================================================================-->
</head>
<body>
	
	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<?= $this->Html->image('login/images/img-01.png', ['alt' => 'IMG']);?>
					
				</div>

				<?= $this->Form->create(null,['class'=>'login100-form validate-form']) ?>
					<span class="login100-form-title">
						<?= __('Admin Login') ?>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<?=$this->Form->email('email',['class'=>'input100']); ?>
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<?=$this->Form->password('password',['class'=>'input100']); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="card-img-top">
						
					</div>
					<div class="wrap-input100 validate-input" >
						<center>
						<?= captcha_image_html() ?>
						
						<?= $this->Form->input('CaptchaCode', [ 'class'=>'input100','label' => 'Retype the characters from the picture:', 'maxlength' => '10', 'style' => 'width: 300px;', 'id' => 'CaptchaCode' ]) ?>
						</center>
					</div>

					<div class="container-login100-form-btn">
						<?= $this->Form->button('Login',['class'=>'login100-form-btn']) ?>
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
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	

	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	
</body>
</html>