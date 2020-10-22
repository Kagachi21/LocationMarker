<?php require('login/head.php')?>
<body>
	<div class="limiter">
		<div class="container-login100">
		<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/loginv1/images/Polda_Jatim.png'); ?>" width=110 height=150 alt="IMG">
				</div>
			<div class="login-title">
				<h1>Jarkom Smartzone Polda Jatim</h1>
			</div>
			<div class="login100-pic2 js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/loginv1/images/TIK_Polri.png'); ?>" width=150 height=150 alt="IMG">
				</div>
			<div class="wrap-login100">
				<form action="<?php echo base_url('login/cek_login'); ?>" class="login100-form validate-form" method="POST" novalidate>
					<span class="login100-form-title">
						LOGIN
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 ">
						<input class="input100" type="password" name="password" placeholder="Password...">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
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
	
	<?php require('login/js.php')?>