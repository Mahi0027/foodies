<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Auber</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
   
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css');?>" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Mr. Auber</h1>
                  </div>
                  <p>The foodie's wallet.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
							<div id="credentialerror"></div>
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post" name="login">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" class="input-material" placeholder="User Name...">
                      <!-- <label for="login-username" class="label-material" ></label>-->
											<div id="usernameerror" class="errorMessage"></div>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" class="input-material" placeholder="Password...">
                      <!--<label for="login-password" class="label-material">Password</label>-->
											<div id="passerror" class="errorMessage"></div>
                    </div>
										<a id="process_login"  href="javascript:void(0);" class="btn btn-primary">Login</a>  
                  </form>
                  <a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
       <p>Design by <a href="http://ascentcybersolutions.com/" class="external">Ascent Cyber Solutions</a></p>      
      </div>
    </div>
    <!-- Javascript files-->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script type="text/javascript">
                    $(document).ready(function() {   
                       $('#process_login').click(function(){
                                jQuery.ajax({
                                type: "POST",
                                url: "<?php echo site_url('index.php/login/ajax_signup') ?>",    
                                data: $("#login-form").serialize(),
                                success: function(res) {
                                    var data = JSON.parse(res);
                                    if(data.status.Status == "success")
                                    {  
                                        $('#credentialerror').html("");
                                        $('#usernameerror').html("");
                                        $('#passerror').html("");
                                       $(location).attr('href',data.status.URL);
                                    } else if(data.status.Status == "wrong"){
                                        $('#credentialerror').html('<div class="alert alert-danger"><strong>Error !</strong>'+data.errormsg.credentialerror+'.</div');
                                        $('#usernameerror').html("");
                                        $('#passerror').html("");
                                    }
                                    else{
                                        $('#usernameerror').html(data.errormsg.username);
                                        $('#passerror').html(data.errormsg.password);
                                        $('#credentialerror').html("");
                                    }
                                 }
                                });
                              });
                    });
            </script>
  
  </body>
</html>