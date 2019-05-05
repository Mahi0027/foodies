<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('partials/header'); ?>
      <!-- Page Header-->
       <div class="content-wrapper container">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu</a>
        </li>
        <li class="breadcrumb-item active"><a href="<?php echo base_url('Restaurant_outlet'); ?>">Outlet</a></li>
      </ol>
      

      <div class="card mb-3">
         
        <div class="card-header container">
          <div class="col-md-10">Menu Outlets</div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addoutlet"><i class="fa fa-plus"></i> Add outlet</button>
        </div>
        <div class="card-body">
        </div>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S.no.</th>
                  <th>Oulet name </th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>S.no.</th>
                  <th>Oulet name </th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if($outlet_list):
                  foreach ($outlet_list as $key => $row): ?>
              

                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['type_of_outlet_name'];?></td>
                  <td>
                    <?php 
                    if($row['active']==1){
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
                      <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_outlet/update_outlet/'.$row['id']) ?>"><i class="fa fa-edit"></i></a>&emsp;|
                      
                      <!--delete -->
                      <!--<a href="" class="nav-link radio-inline" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a>-->
                       <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_outlet/delete/'.$row['id']); ?>"><i class="fa fa-trash"></i></a>&emsp; |

                        <?php 
                            if($row['active']==0){
                          ?>
                             <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_outlet/status_update/1/'.$row['id']); ?>">Active</a>
                          <?php
                            }  
                            else{
                          ?>
                            <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_outlet/status_update/0/'.$row['id']); ?>">Deactive</a>
                          <?php    
                            }
                          ?>

                    </td>


                          
                </tr>
                <?php endforeach;
              endif;?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    
    
  </div>


  <div id="addoutlet" class="modal fade addoffers" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">       
                <h4 class="modal-title"> <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
              </div>
              <form action="<?php echo base_url('Restaurant_outlet/add_outlet') ?>" method="post">
              <div class="modal-body">                  
                    <div class="form-group container">
                        <label for="description" class="col-sm-4 control-label"><b>Outlet Name</b></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="offer_name" name="outlet_name" placeholder="Enter Outlet Name">
                              
                        </div>
                    </div>          
                             
                    <div class="form-group container">
                       <label for="description" class="col-sm-5 control-label"><b>Publish</b></label>
                       <div class="col-md-12">
                            <label class="radio-inline"><input type="radio" value="1" name="active"><span>yes</span></label>
                            <label class="radio-inline"><input type="radio" value="0" name="active"><span>no</span></label>
                            
                       </div>
                   </div>           
                    
               <div class="container text-center"><button type="submit" class="btn btn-primary">ADD</button>&emsp;&emsp;<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button></div>
               <div class="container text-center"></div>
              </div>
              </form>
            </div>
          </div>
        </div>




         

           
<?php $this->load->view('partials/footer'); ?>

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
            <a class="btn btn-secondary" name="delete"  href="<?php echo base_url('Restaurant_outlet/delete/'.$row['id']); ?>">Confirm</a>
          </div>
        </div>
      </div>
    </div>