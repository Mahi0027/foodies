<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php $this->load->view('admin/header'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/restaurantlist') ?>">Restaurant list</a></li>
        <li class="breadcrumb-item active">Update Info</li>
      </ol>
      <form action="<?php echo base_url('admin/Restaurantlist/restaurant_update')?>" method="post">
        <?php
        if($restaurantlist){
        foreach ($restaurantlist as $key => $row) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    
                    <div class="form-group">
                        <label>Restaurant name :</label>
                        <input class="form-control form-control-sm" name="restaurant_name" type="text" value="<?php echo $row['restaurant_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Owner name :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_name" type="text" value="<?php echo $row['restaurant_owner_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Mobile no :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_mobile" type="text" value="<?php echo $row['restaurant_owner_mobile']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email ID :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_email" type="email" value="<?php echo $row['restaurant_owner_email']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <textarea class="form-control form-control-sm" rows="3"><?php echo $row['restaurant_address']; ?></textarea>    
                    </div>
                    <div class="form-group">
                        <label>Latitude :</label>
                        <input class="form-control form-control-sm" name="restaurant_latitude" type="text" value="<?php echo $row['restaurant_latitude']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Longitude :</label>
                        <input class="form-control form-control-sm" name="restaurant_longitude" type="text" value="<?php echo $row['restaurant_longitude']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Adhaar id :</label>
                        <input class="form-control form-control-sm" name="restaurant_owner_adhaar_id" type="text" value="<?php echo $row['restaurant_owner_adhaar_id']; ?>">
                    </div>
                    <div class="form-group">
                        <label>GST tin no :</label>
                        <input class="form-control form-control-sm" name="restaurant_gst_tin_no" type="text" value="<?php echo $row['restaurant_gst_tin_no']; ?>">
                    </div>
            
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="form-group">
                        <label>Valid check :</label>
                        <input class="form-control form-control-sm" name="restaurant_valid_check" type="text" value="<?php echo $row['restaurant_valid_check']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Image :</label>
                        <input name="restaurant_image_url" type="file" value="<?php echo $row['restaurant_image_url']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Theme :</label>
                        <input name="restaurant_theme_url" type="file" value="<?php echo $row['restaurant_theme_url']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Food type :</label>
                        <input class="form-control form-control-sm" name="restaurant_food_type" type="text" value="<?php echo $row['restaurant_food_type']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Dining type :</label>
                        <input class="form-control form-control-sm" name="restaurant_dining_type" type="text" value="<?php echo $row['restaurant_dining_type']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Outlet type :</label>
                        <input class="form-control form-control-sm" name="restaurant_outlet_type" type="text" value="<?php echo $row['restaurant_outlet_type']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Cusine :</label>
                        <input class="form-control form-control-sm" name="restaurant_cusine" type="text" value="<?php echo $row['restaurant_cusine']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Facility :</label>
                        <textarea class="form-control form-control-sm" rows="2"><?php echo $row['restaurant_fascilities']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Timings :</label>
                        <input class="form-control form-control-sm" name="restaurant_timings" type="text" value="<?php echo $row['restaurant_timings']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Remark :</label>
                        <input class="form-control form-control-sm" name="remarks_by_mr_auber" type="text" value="<?php echo $row['remarks_by_mr_auber']; ?>">
                    </div>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn  btn-success" name="update">Update</button>
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