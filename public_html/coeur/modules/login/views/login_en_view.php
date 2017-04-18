<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/sample-pages/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
<head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashplus Admin</title>

        <!-- Vendor CSS -->
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Dashplus CSS -->
        <link href="<?php echo base_url(); ?>/assets/V2/dist/css/dashplus_1.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/V2/dist/css/dashplus_2.min.css" rel="stylesheet">
        
        <style>
			.lc-block {
				max-width: 400px;
			}
			.lcb-form .input-group  {
				display: inline-block;
				width: 100%;
			}
			
			.lc-block:not(.lc-block-alt) .lcb-form {
				padding: 35px 55px 35px 55px;
			}
			
			.lcb-form {
				padding: 35px 55px 35px 55px;
			}
			
			.lc-block .checkbox {
				margin: 5px 0 0 5px;
				text-align: left;
			}
			.lc-block:not(.toggled) {
				display: inline-block;
			}
		</style>
    </head>
    <body>
        <div class="login-content md-bg-blue-500">
            <!-- Login -->
            <div class="lc-block " id="l-login">
                <div class="lcb-form">
                	<h3 class="text-center c-grey-800">Espace entreprise</h3>
                    <?php

					if(isset($error_message)){


						echo '<h4><font color="red"><b>'.$error_message.'</b></font></h4>';

					}
					?>
                    
                    <?php echo form_open('login/login_entreprise'); ?>
                     <div class="input-group m-b-20">
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Nom d utilisateur" name="login">
                            <?php echo form_error('login','<font color="red">','</font>'); ?>
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <div class="fg-line">
                            <input type="password" class="form-control" placeholder="Mot de passe" name="pass">
                            <?php echo form_error('pass','<font color="red">','</font>'); ?>
                        </div>
                    </div>

<!--
                   Rester connecter
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <i class="input-helper"></i>
                            Keep me signed in
                        </label>
                    </div>
-->
                    <div class="input-group m-t-20">
						<button class="btn btn-primary btn-lg btn-block waves-effect">Se connecter</button>                    
                     </div>
                     <?php echo form_close(); ?>
<!--
                    Mot de passe oublie
                     <div class="m-t-20">
                        <p><a href="signup.html">Create an Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lost-password.html">Forgot Password?</a></p>
                    </div>
-->
                </div>
            </div>
        </div>
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/V2/vendors/Waves/dist/waves.min.js"></script>

        <script src="<?php echo base_url(); ?>/assets/V2/dist/js/dashplus.min.js"></script>
    </body>

<!-- Mirrored from www.dashmonk.com/demo/dashplus/pages/sample-pages/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Oct 2016 00:34:07 GMT -->
</html>