<!DOCTYPE html>
<html >
<head>
  <title>Goodreads | Meet your next favorite book</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

</head>

<body>
<div class="main_login" style="position: relative;">
    <div class="top">
        <div class="mastHead">
            <nav class="navbar">
                <img class="logo" src="<?php echo base_url('assets/login/Goodreads_logo.svg')?>">
                <div id="sign_inform">
					<?php
                        if(isset($_SESSION['SuccessReg'])) {
                            $this->load->view('Alerts/SuccessReg');
                        } else if(isset($_SESSION['falselogin'])) {
        	                $this->load->view('Alerts/FailLogin');
                        }
                    ?>
				    <form action="<?= base_url('index.php/UserCo/Signin/') ?>" method="POST" class="form-inline" name="sign_in" id="sign_in" >
					    <div class="formBox">
						    <input id="userSignIn" type="email" name="email" placeholder="Email address" tabindex="1"><br>
						    <input type="checkbox" id="remember_me" name="remember_me" checked="" tabindex="3">
							    <label for="remember_me" class="greyText">Remember me</label>
					    </div>

					    <div class="formBox">
							    <input value="" placeholder="Password" tabindex="2" type="password" name="password" id="user_password">
							    <label for="user_password" id="userPasswordLabel" class="greyText"></label>
							    <br>
							    <a class="greyText" id="userForgotPassword" rel="nofollow" href="/user/forgot_password">Forgot it?</a>
					    </div>
						<button type="submit" value="Sign in" tabindex="4">Sign In</button>
				    </form>
			    </div>
            </nav>
            <div id="headline">
                <img src="<?php echo base_url('assets/login/meet.png')?>">            
            </div>
            <div id="newAccountBox">
				<h2>
					New here? Create a free account!
				</h2>
                <?php 
                    if(isset($_SESSION['FailReg'])) {
                        $this->load->view('Alerts/FailReg');
                    }
                ?>
				<form action="<?= base_url('index.php/UserCo/Register/')?>" method="POST" name="createForm" id="userSignup" autocomplete="off"  accept-charset="UTF-8"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" >
					<div class="form-group">
						<input placeholder="Name" type="text" name="name" id="user_name" required/>
					</div>

					<div class="form-group">
						<input placeholder="Email Address" type="email" name="email" id="user_email" required/>
					</div>

					<div class="form-group">
						<input id="user_password_signup" placeholder="Password"  type="password" name="password" required/>
						<label id="userPasswordSignupLabel" for="user_password_signup" class="greyText"></label>
					</div>

					<div class="form-group">
						<div id="homePageSignupBlurb">
							<a target="_blank" rel="noopener noreferrer" href="/about/terms"></a>
						</div>

						<input type="hidden" name="n" value="536769">
						<button type="submit" name="next" value="Sign up">Sign up</button>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>
</body>
</html>