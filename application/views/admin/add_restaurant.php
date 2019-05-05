<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php $this->load->view('admin/header'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php base_url('admin/dashboard') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/restaurantlist') ?>">Restaurant list</a></li>
        <li class="breadcrumb-item active">ADD Restaurant</li>
      </ol>
     
      <form action="<?php echo base_url('admin/Restaurantlist/add_restaurantdetails')?>" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <label>Restaurant name :</label>
                        <input class="form-control form-control-sm" name="restaurant_name" type="text">
                        <?php
                          if(form_error('restaurant_name')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_name'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Owner name :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_name" type="text">
                        <?php
                          if(form_error('restaurant_owner_name')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_owner_name'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Email ID :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_email" type="email">
                        <?php
                          if(form_error('restaurant_owner_email')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_owner_email'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Mobile no :</label>
                        <input class="form-control form-control-sm" name=" restaurant_owner_mobile" type="text">
                        <?php
                          if(form_error('restaurant_owner_mobile')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_owner_mobile'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Password :</label>
                        <input class="form-control form-control-sm" name="password" type="password">
                        <?php
                          if(form_error('password')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('password'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Image :</label>
                        <input name="restaurant_image_url" type="file">
                        <?php
                          if(form_error('restaurant_image_url')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_image_url'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Theme :</label>
                        <input name="restaurant_theme_url" type="file">
                        <?php
                          if(form_error('restaurant_theme_url')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_theme_url'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <textarea  class="form-control" rows="3 " name="restaurant_address"></textarea>
                        <?php
                          if(form_error('restaurant_address')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_address'); ?>
                        </div>
                        <?php } ?>
                    </div>    
                    <div class="form-group">
                        <label>Latitude :</label>
                        <input class="form-control form-control-sm" name="restaurant_latitude" type="text">
                        <?php
                          if(form_error('restaurant_latitude')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_latitude'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Longitude :</label>
                        <input class="form-control form-control-sm" name="restaurant_longitude" type="text">
                        <?php
                          if(form_error('restaurant_longitude')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_longitude'); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <label>Adhaar id :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_adhaar_id" type="text">
                        <?php
                          if(form_error('restaurant_owner_adhaar_id')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_owner_adhaar_id'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>GST tin no :</label>
                        <input class="form-control form-control-sm" name="restaurant_gst_tin_no" type="text">
                        <?php
                          if(form_error('restaurant_gst_tin_no')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_gst_tin_no'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Valid check :</label>
                        <input class="form-control form-control-sm" name="restaurant_valid_check" type="text">
                        <?php
                          if(form_error('restaurant_valid_check')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_valid_check'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Food type :</label>
                        <input class="form-control form-control-sm" name="restaurant_food_type" type="text">
                        <?php
                          if(form_error('restaurant_food_type')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_food_type'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Dining type :</label>
                        <input class="form-control form-control-sm" name="restaurant_dining_type" type="text">
                        <?php
                          if(form_error('restaurant_dining_type')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_dining_type'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Outlet type :</label>
                        <input class="form-control form-control-sm" name="restaurant_outlet_type" type="text">
                        <?php
                          if(form_error('restaurant_outlet_type')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_outlet_type'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Cusine :</label>
                        <input class="form-control form-control-sm" name="restaurant_cusine" type="text">
                        <?php
                          if(form_error('restaurant_cusine')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_cusine'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Facility :</label>
                        <input class="form-control form-control-sm" name="restaurant_fascilities" type="text">
                        <?php
                          if(form_error('restaurant_fascilities')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_fascilities'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Timings :</label>
                        <input class="form-control form-control-sm" name="restaurant_timings" type="text">
                        <?php
                          if(form_error('restaurant_timings')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('restaurant_timings'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Remark :</label>
                        <input class="form-control form-control-sm" name="remarks_by_mr_auber" type="text">
                        <?php
                          if(form_error('remarks_by_mr_auber')==true){
                        ?>
                        <div class="alert alert-danger">
                          <?php echo form_error('remarks_by_mr_auber'); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn  btn-success" name="add">Add</button>&emsp;&emsp;<a href="<?php echo base_url('admin/restaurantlist')?>"><button type="button" class="btn  btn-success">Cancel</button></a>
      </form>
      
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