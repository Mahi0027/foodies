<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_PARSE);

?>
<?php $this->load->view('admin/header'); ?>
  <div class="content-wrapper">
    <div class="container-fluid"> 
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>&emsp;User Manager<a href="<?php echo base_url('admin/user/user_add'); ?>"><span style="float: right;"><i class="fa fa-user-plus" style="font-size: 150%;"></i></span></a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>City</th> 
                  <th>CreateDate</th>
                  <th>View</th>
                  <th>Status</th>
                  <th>Activity</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>City</th>
                  <th>CreateDate</th>
                  <th>View</th>
                  <th>Status</th>
                  <th>Activity</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php
                    foreach ($users as $key => $row) {
                  ?>
                <tr>
                  <td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];?></td>
                  <td><?php echo $row['city']." ".$row['pincode'];?></td>
                  <td><?php echo $row['create_date'];?></td>
                  

                  <!-- <td><a href="<?php echo base_url('admin/dashboard/restodelete?id='.$row['customer_id']); ?>">Delete</a></td>
                  <td onclick="myFunction(<?php echo $row['customer_id']; ?>)">Delete</td>
                  <td><a href="<?php echo base_url('admin/dashboard/restoedit?id='.$row['customer_id']); ?>">Edit</a></td>-->
                  

                  
                    <td>&ensp;&ensp;&emsp;<a href="<?php echo base_url('admin/user/user_detail_show/'.$row['customer_id']); ?>"><i class="fa fa-eye" aria-hidden="true" style="font-size: 130%;"></i></a></td>  
                
                  <td>
                  <?php 
                    if($row['status']==1){
                  ?>
                      &ensp;&emsp;&emsp;<i class="fa fa-check-circle" style="color: green;font-size: 120%;" aria-hidden="true"></i>
                     
                  <?php
                    }  
                    else{
                  ?>
                    &ensp;&emsp;&emsp;<i class="fa fa-times-circle" style="color: #F75D59;font-size: 120%;" aria-hidden="true"></i>
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
                             <li><a href="<?php echo base_url('admin/user/status_update/1/'.$row['customer_id']); ?>">Active</a></li>
                          <?php
                            }  
                            else{
                          ?>
                            <li><a href="<?php echo base_url('admin/user/status_update/0/'.$row['customer_id']); ?>">Deactive</a></li>
                          <?php    
                            }
                          ?>
                            <li><a href="<?php echo base_url('admin/user/user_edit_detail/'.$row['customer_id']); ?>"><i class="fa fa-edit"></i></a></li>
                            <li role="presentation" class="divider"></li>
                            <li><a href="<?php echo base_url('admin/user/user_delete/'.$row['customer_id']); ?>"><i class="fa fa-trash"></i></a></li>
                            <!--<li><a class="nav-link" href="user_data_table.php?user_id=<?php echo $row['customer_id']; ?>#myModal" data-toggle="modal"><i class="fa fa-trash"></i></a></li>-->
                          </ul>
                        </div>
                      </div>
                  </td>

                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
            <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label >Customer ID :</label>&emsp;sdfsf<br>
            <label >Customer ID :</label>&emsp;sdfsf<br>
            <label >Customer ID :</label>&emsp;sdfsf<br>
            <label >Customer ID :</label>&emsp;sdfsf<br>
            <label >Customer ID :</label>&emsp;sdfsf<br>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
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
            <a class="btn btn-primary" href="<?php echo base_url('admin/login/logout'); ?>">Logout</a>
          </div>
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
          <div class="modal-body">Select "cancle"  if you dont want to delete</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>            
            <a href="<?php echo  base_url('admin/dashboard/user_row_delete/'.$row['customer_id']); ?>""><button type="submit" class="btn btn-secondary" name="delete">Confirm</button></a>
          </div>
        </div>
      </div>
    </div>
  <?php $this->load->view('admin/footer'); ?>