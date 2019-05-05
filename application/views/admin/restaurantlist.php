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
        <li class="breadcrumb-item active">Restaurant list</li>
      </ol>
      

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Restaurant list<a href="<?php echo base_url('admin/Restaurantlist/addrestaurant'); ?>"><span style="float: right;"><i class="fa fa-user-plus" style="font-size: 150%;"></i></span></a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Restaurant Name</th>
                  <th>Location</th>
                  <th>Owner Name</th>
                  <th>Menu</th>
                  <th>Offers</th>
                  <th>Promotions</th>
                  <th>View</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Restaurant Name</th>
                  <th>Location</th>
                  <th>Owner Name</th>
                  <th>Menu</th>
                  <th>Offers</th>
                  <th>Promotions</th>
                  <th>View</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if($restaurantlist):
                  foreach ($restaurantlist as $key => $row): ?>
                <tr>
                <td><?php echo $row['restaurant_name'] ?></td>
                <td>location</td>
                <td><?php echo $row['restaurant_owner_name'] ?></td>
                <td><?php echo $row['restaurant_cusine'] ?></td>
                <td>offers</td> 
                <td>Promotion</td>
                <td>&ensp;&ensp;<a href="<?php echo base_url('admin/restaurantlist/view_restaurant/'.$row['restaurant_id']);?>"><i class="fa fa-eye" aria-hidden="true" style="font-size: 130%;"></i></a></td>
                <td>
                  <?php 
                    if($row['status']==1){
                  ?>
                      &emsp;&nbsp;<i class="fa fa-check-circle" style="color: green;font-size: 120%;" aria-hidden="true"></i>
                     
                  <?php
                    }  
                    else{
                  ?>
                    &emsp;&nbsp;<i class="fa fa-times-circle" style="color: #F75D59;font-size: 120%;" aria-hidden="true"></i>
                  <?php    
                    }
                  ?>
                  </td> 
  

                <td>
                  <div class="dropdown" style="margin: 0px;padding: 0px;">
                          <button class="btn btn-default brn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                          </span></button>
                          <ul class="dropdown-menu text-center">
                          <?php 
                            if($row['status']==0){
                          ?>
                             <li><a href="<?php echo base_url('admin/Restaurantlist/status_update/1/'.$row['restaurant_id']); ?>">&ensp;Active</a></li>
                          <?php
                            }  
                            else{
                          ?>
                            <li><a href="<?php echo base_url('admin/Restaurantlist/status_update/0/'.$row['restaurant_id']); ?>">Deactive</a></li>
                          <?php    
                            }
                          ?>

                            <li><a href="<?php echo base_url('admin/restaurantlist/restaurant_update_details/'.$row['restaurant_id']); ?>"><i class="fa fa-edit"></i>&ensp;Edit</a></li>
                            <li role="presentation" class="divider"></li>
                            <li><a href="" class="nav-link" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                </td>
                </form>
                </tr>
                <?php endforeach;
              endif;?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"><b>"Confirm"</b> if you want to delete. </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-secondary" name="delete"  href="<?php echo base_url('admin/restaurantlist/delete/'.$row['restaurant_id']); ?>">Confirm</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <?php $this->load->view('admin/footer'); ?>