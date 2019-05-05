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
          <a href="<?php echo base_url('Restaurant_outlet'); ?>">Menu</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('Restaurant_outlet'); ?>">Outlet</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('restaurant_category'); ?>">Category</a>
        </li>
      </ol>
      

      <div class="card mb-3 ">
         
        <div class="card-header " style="display: flex;">
          <div >Menu Categories</div>
      
            <span style="margin-left:69%;"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus"></i> Add Category</button></span>                 
                                
                         


       <div class="card-body">
       </div>

  </div>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>s.no</th>
                  <th>Oulet name </th>
                  <th>Category Name</th>
                  
                  <th>Publish</th>
                   <th>Action</th>
                 
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>s.no</th>
                  <th>Oulet name </th>
                  <th>Category Name</th>
                 
                  
                    <th>Publish</th>
                     <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if($categorylist):
                  foreach ($categorylist as $key => $row): ?>
                <tr>
                  <td><?php echo $row['restaurant_category_id'];?></td>
                  <td><?php echo $row['type_of_outlet_name'];?></td>
                  <td><?php echo $row['cat_name'];?></td>
                  <td>
                    <?php 
                    if($row['cat_active']==1){
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
                  
                  <td><div style="display: flex;">
                      <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_category/update_category/'.$row['restaurant_category_id']) ;?>"><i class="fa fa-edit"></i></a>&emsp;|
                  
                      &emsp;<a href="<?php echo base_url('Restaurant_category/delete/'.$row['restaurant_category_id']); ?>"><i class="fa fa-trash"></i></a>&emsp;|

                        <?php 
                            if($row['cat_active']==0){
                          ?>
                             <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_category/category_status_update/1/'.$row['restaurant_category_id'] );?>">Active</a>
                          <?php
                            }  
                            else{
                          ?>
                            <a class="nav-link radio-inline" href="<?php echo base_url('Restaurant_category/category_status_update/0/'.$row['restaurant_category_id']); ?>">Deactive</a>
                          <?php    
                            }
                          ?>
                        </div>
                    </td>
                          
                  
                </tr>
                <?php endforeach;
              endif;?>
              </tbody>
            </table>
      </div>
       <div id="addcategory" class="modal fade addoffers" role="dialog">
                          <div class="modal-dialog container">
                            <!-- Modal content-->
                            <div class="modal-content ">
                              <div class="modal-header">       
                                <h4 class="modal-title"> <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                              </div>
                              <form action="<?php echo base_url('Restaurant_category/category_adds');?>" method="post">
                              <div class="modal-body container">                  
                                    <div class="form-group co-md-12">
                                        <label for="description" class="col-sm-4 control-label">Outlet name</label>
                                        <div class="col-sm-12">
                                           <select name="outlet_name" id="outlet_name">
                                             <option value="0"> Select Outlet</option>
                                              <?php if($outletlist):
                                                foreach($outletlist as $orow):?>
                                              <option value="<?php echo $orow['id'];?>"><?php echo $orow['type_of_outlet_name'];?></option>
                                            <?php endforeach; endif;?>
                                           </select>
                                        </div>
                                    </div> 
                                    <div class=" col-md-12">
                                        <label for="description" class="col-sm-4 control-label">Category Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="Category_name" name="category_name" placeholder="Enter Category Name" required="required">
                                        </div>

                                    </div>
                                     <div class="">
                                       <label for="description" class="col-sm-5 control-label"><b>Publish</b></label>
                                       <div class="col-md-12">
                                            <label class="radio-inline"><input type="radio" value="1" name="active"><span>yes</span></label>
                                            <label class="radio-inline"><input type="radio" value="0" name="active"><span>no</span></label>
                                            
                                       </div>
                                   </div>            
                                                              
                               </div>

                              <div class="container text-center" style="margin-bottom: 5%;">
                                  <button type="submit" class="btn btn-primary">Submit</button>&ensp;&ensp;&ensp;<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                              </div>
                          
                              </form>
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
            <a class="btn btn-secondary" name="delete"  href="<?php echo base_url('Restaurant_category/delete/'.$row['id']); ?>">Confirm</a>
          </div>
        </div>
      </div>
    </div>
    
 <div id="addcategory" class="modal fade addoffers" role="dialog">
                          <div class="modal-dialog container">
                            <!-- Modal content-->
                            <div class="modal-content ">
                              <div class="modal-header">       
                                <h4 class="modal-title"> <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                              </div>
                              <form action="<?php echo base_url('Restaurant_category/category_adds');?>" method="post">
                              <div class="modal-body container">                  
                                    <div class="form-group col-md-12">
                                        <label for="description" class="col-sm-4 control-label">Outlet name</label>
                                        <div class="col-sm-12">
                                           <select name="outlet_name" id="outlet_name">
                                             <option value="0"> Select Outlet</option>
                                              <?php if($outletlist):
                                                foreach($outletlist as $orow):?>
                                              <option value="<?php echo $orow['id'];?>"><?php echo $orow['type_of_outlet_name'];?></option>
                                            <?php endforeach; endif;?>
                                           </select>
                                        </div>
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <label for="description" class="col-sm-4 control-label">Category Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="Category_name" name="category_name" placeholder="Enter Category Name" required="required">
                                        </div>

                                    </div>
                                     <div class=" container">
                                       <label for="description" class="col-sm-5 control-label"><b>Publish</b></label>
                                       <div class="col-md-12">
                                            <label class="radio-inline"><input type="radio" value="1" name="active"><span>yes</span></label>
                                            <label class="radio-inline"><input type="radio" value="0" name="active"><span>no</span></label>
                                            
                                       </div>
                                   </div>            
                                                              
                               </div>

                              <div class="container text-center">
                                  <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                          
                              </form>
                            </div>
                            </div>
    </div>
      