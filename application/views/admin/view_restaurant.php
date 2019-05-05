<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php $this->load->view('admin/header'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Restaurant list</li>
      </ol>
      

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Restaurant details</div>

        <div class="card-body">

                <div class="container">
                  <div class="row">

                    <?php if($restaurantlist):
                        foreach ($restaurantlist as $key => $row): ?>
                  
                                   
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title"><?php echo $row['restaurant_name'] ?></h3>
                        </div>
                        <div class="panel-body">
                          <div class="row" style="margin-top:20px;">
                            
                            <div class=" col-md-9 col-lg-9 "> 
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td>Owner Name:</td>
                                    <td><?php echo $row['restaurant_owner_name'] ?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Mobile no:</td>
                                    <td><?php echo $row['restaurant_owner_mobile'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>E-mail:</td>
                                    <td><?php echo $row['restaurant_owner_email'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Password:</td>
                                    <td><?php echo $row['password'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Address:</td>
                                    <td><?php echo $row['restaurant_address'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Adhar-id:</td>
                                    <td><?php echo $row['restaurant_owner_adhaar_id'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>GST no:</td>
                                    <td><?php echo $row['restaurant_gst_tin_no'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Registration date:</td>
                                    <td><?php echo $row['restaurant_registration_date'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Food type:</td>
                                    <td><?php echo $row['restaurant_food_type'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Dining type:</td>
                                    <td><?php echo $row['restaurant_dining_type'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Outlet type:</td>
                                    <td><?php echo $row['restaurant_outlet_type'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Restaurant cusine:</td>
                                    <td><?php echo $row['restaurant_cusine'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Facilities:</td>
                                    <td><?php echo $row['restaurant_fascilities'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Timings:</td>
                                    <td><?php echo $row['restaurant_timings'] ?></td>
                                  </tr>
                                 
                                </tbody>
                              </table>

                              <?php endforeach;
                                  endif;?>                             
    
                            </div>
                          </div>
                        </div>
                             
                        
                      </div>
                    
                  </div>
                </div>
          

        </div>
        

      </div>
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
            <a class="btn btn-primary" href="<?php echo  base_url('admin/login/logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <?php $this->load->view('admin/footer'); ?>