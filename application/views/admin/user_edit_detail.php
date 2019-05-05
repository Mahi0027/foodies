<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php $this->load->view('admin/header'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <?php
        if($users){
        foreach ($users as $key => $row) {
        ?>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('admin/user/user_data_table'); ?>">Users</a>
        </li>
        <li class="breadcrumb-item active">Edit <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?>'s Details</li>
      </ol>
      <form action="<?php echo base_url('admin/user/user_edit_row')?>" method="post">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-6">
              <div class="form-group">
                <input type="hidden" class="form-control form-control-sm" name="customer_id" value="<?php echo $row['customer_id'];?>" fixed>
              </div>
              <div class="form-group">
                <label>First Name :</label>
                <input class="form-control form-control-sm" name="first_name" type="text" value="<?php echo $row['first_name'] ?>">
                <?php
                  if(form_error('first_name')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('first_name'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Middle Name :</label>
                <input class="form-control form-control-sm" name="middle_name" type="text" value="<?php echo $row['middle_name'] ?>">
                <?php
                  if(form_error('middle_name')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('middle_name'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Last Name :</label>
                <input class="form-control form-control-sm" name="last_name" type="text" value="<?php echo $row['last_name'] ?>">
                <?php
                  if(form_error('last_name')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('last_name'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Email ID :</label>
                <input class="form-control form-control-sm" name="email" type="email" value="<?php echo $row['email_id'] ?>">
                <?php
                  if(form_error('email')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('email'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Password :</label>
                <input class="form-control form-control-sm" name="password" type="password" value="<?php echo $row['password'] ?>">
                <?php
                  if(form_error('password')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('password'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Date of Birth :</label>
                <input type="date" class="form-control form-control-sm " name="dob" value="<?php echo $row['dob'] ?>">
                <?php
                  if(form_error('dob')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('dob'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>geneder :</label>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="male">Male
                  </label>
                </div>&emsp;&emsp;&emsp;
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="female">Female
                  </label>
                </div>
                <?php
                  if(form_error('gender')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('gender'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Mobile Number :</label>
                <input class="form-control form-control-sm" name="mobile_no" type="Number" value="<?php echo $row['mobile_no'] ?>">
                <?php
                  if(form_error('mobile_no')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('mobile_no'); ?>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="form-group">
                <label>Refer Code :</label>
                <input class="form-control form-control-sm" name="refer_code" type="text" value="<?php echo $row['refer_code'] ?>">
                <?php
                  if(form_error('refer_code')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('refer_code'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Refer by :</label>
                <input class="form-control form-control-sm" name="refer_by" type="text" value="<?php echo $row['refer_by'] ?>">
                <?php
                  if(form_error('refer_by')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('refer_by'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Marital Status :</label>
                <input class="form-control form-control-sm" name="marital_status" type="text" value="<?php echo $row['marital_status'] ?>">
                <?php
                  if(form_error('marital_status')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('marital_status'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Address :</label>
                <textarea class="form-control form-control-sm" name="address" rows="3" ><?php echo $row['address'] ?></textarea>
                <?php
                  if(form_error('address')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('address'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>State :</label>
                <input class="form-control form-control-sm" name="state" type="text" value="<?php echo $row['state'] ?>">
                <?php
                  if(form_error('state')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('state'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>City :</label>
                <input class="form-control form-control-sm" name="city" type="text" value="<?php echo $row['city'] ?>">
                <?php
                  if(form_error('city')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('city'); ?>
                </div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Pincode :</label>
                <input class="form-control form-control-sm" name="pincode" type="Number" value="<?php echo $row['pincode'] ?>">
                <?php
                  if(form_error('pincode')==true){
                ?>
                <div class="alert alert-danger">
                  <?php echo form_error('pincode'); ?>
                </div>
                <?php } ?>
              </div>
            </div>    
          </div>
        </div>
        <button type="submit" class="btn  btn-success" name="udpate">Update</button>
      </form>
      <?php
        }
      }
      ?>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('admin/login/logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('admin/footer'); ?>