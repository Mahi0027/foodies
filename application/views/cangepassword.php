<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('partials/header'); ?>
		<ul class="breadcrumb">
			<div class="container-fluid">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a></li>
				<li class="breadcrumb-item active">Change Password </li>
			</div>
		</ul>
		 <section class="feeds">
            <div class="container-fluid">
              <div class="row">
                
                
                <div class="restpassword">
                <div class="content">
                  
                  
                  
                  <div class="text-center">
                  <h4><i class="fa fa-lock fa-4x"></i></h4>
                  <h4 class="text-center">Change Password?</h4>
                  <p>Reset your password.</p>
                  <div class="panel-body">
    
                    <form action="<?php echo base_url('/Changepassword/changepassword');?>" method="post" id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                         <div class="col-md-5">
                          <label>
                           Old Password
                          </label></div>
                           <div class="col-md-7">
                         
                            <input id="currentpassword" name="currentpassword" placeholder="password" class="form-control" type="password" required="required">
                          
                        </div>
                      </div> </div>
                      
                      <div class="form-group">
                        <div class="input-group">
                          <div class="col-md-5">
                            <label>
                             New Password
                           </label></div>
                            <div class="col-md-7">
                          <input id="newpassword" name="newpassword" placeholder="new password" class="form-control" type="password" required="required">
                        </div>
                      </div> </div>
                      
                      <div class="form-group">
                        <div class="input-group">
                          <div class="col-md-5">
                              <label>
                               Confirm Password
                               </label></div>
                           <div class="col-md-7">
                          <input id="confirmpassword" name="confirmpassword" placeholder="confirm password" class="form-control" type="password" required="required">
                          
                          
                           </div>
                        </div>
                      </div>
                      
                      
                      <div class="text-center form-group ">
                        
                        
                         <button type="submit" class="btn btn-lg btn-primary rest" data-toggle="modal" data-target="#myModal">Reset Password</button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-body">
                                  <p>Your password has been changed.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal"><a href="Dashboard/dashboard">Close</a></button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      
                      </div>
                      
                     
                    </form>
    
                  </div>
                </div>
                </div>
                </div>
              </div>
            </div>
          </section>
     <?php $this->load->view('partials/footer'); ?>