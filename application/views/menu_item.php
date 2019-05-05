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
        <li class="breadcrumb-item active"><a href="<?php echo base_url('menu'); ?>">Items</a></li>
      </ol>
      

      <div class="card mb-3">
         
        <div class="card-header container">
          <div class="col-md-10">Menu Category Items</div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary" data-target="#add_menu_item"  data-toggle="modal"><i class="fa fa-plus"></i> ADD</button>
        </div>
        <div class="card-body">
        </div>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Outlet Name</th>
                            <th>Category Name</th>
                            <th>Menu Item</th>
                            <th>Price</th>
                            <th>Auber Price</th>
                            <th>Description</th>
                            <th>Menu Valid</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     <tfoot>
                      <th>S.NO</th>
                            <th>Outlet Name</th>
                            <th>Category Name</th>
                            <th>Menu Item</th>
                            <th>Price</th>
                            <th>Auber Price</th>
                            <th>Description</th>
                            <th>Menu Valid</th>
                            <th>Action</th>
                        </tr>
                  </tfoot>
              <tbody>

                      <?php 
                      
                       foreach ($menu_item as $key => $row) {
                 ?>
                     <tr>
                       <th><?php  echo $row['category_id']; ?></th>
                       <td><?php  echo $row['type_of_outlet_name']; ?></td>
                       <td><?php  echo $row['cat_name']; ?></td>
                       <td><?php  echo $row['menu_item_name']; ?></td>
                       <td><?php  echo $row['item_price']; ?></td>
                       <td><?php  echo $row['mr_auber_price']; ?></td>
                       <td><?php  echo $row['description']; ?></td>
                       <td>
                       <?php 
                           if($row['menu_valid']==1){
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
                       <!-- edit -->
                       <td>
                        <a class="nav-link radio-inline" href="<?php echo base_url('Menu/former_menu_item_list/'.$row['category_id']) ?>"><i class="fa fa-edit"></i></a>|
                        <!-- delete -->
                         &emsp;<a href="<?php echo base_url('Menu/delete/'.$row['category_id']); ?>"><i class="fa fa-trash"></i></a>&emsp;|
                            <?php 

                               if($row['menu_valid']==0){
                              ?>
                                <a class="nav-link radio-inline" href="<?php echo base_url('Menu/status_update/1/'.$row['category_id']); ?>">Active</a>
                              <?php
                                 }  
                               else{
                                ?>
                                 <a class="nav-link radio-inline" href="<?php echo base_url('Menu/status_update/0/'.$row['category_id']); ?>">Deactive</a>
                              <?php    
                                 }
                                ?>

                        </td>

                      </tr>
                       <?php }
               
                        ?>
                    </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   
    <!-- Scroll to Top Button-->
   
    <!-- Logout Modal-->
    
    
  </div>


  <div id="add_menu_item" class="modal fade addoffers" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">       
                <h4 class="modal-title"> <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
              </div>
              <form action="<?php echo base_url('Menu/menu_item_data_insert');?>" method="post"  
                     role="form" enctype="multipart/form-data">
                <div class="modal-body">    

                    
                    <div class="form-group">
                      <label class="col-sm-4" for="sel1">Category Name</label>
                      <div class="col-sm-12">          
                         <select class="form-control"" name="cateogy_name">
                            <option>--select--</option>
                            <?php if($categorylist || $menu_category):
                                                    foreach($categorylist as $crow):?>
                                                    <option value="<?php echo $crow['id'];?>"><?php echo $crow['cat_name'];?></option>
                                                  <?php endforeach; endif;?>
                        </select>
                      </div>
                    </div>                              
                     
                      <div class="form-group">
                        <label for="description" class="col-sm-4 control-label">Menu Item</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control"  name="menu_item_name" placeholder="Menu Item">
                        </div>
                    </div>  

                    <div class="form-group">
                      <label for="description" class="col-sm-4 control-label">Price</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" name="item_price" placeholder="Price">
                      </div>
                      </div>          
                      <div class="form-group">
                      <label for="description" class="col-sm-12 control-label">Item Description</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control"  name="description" placeholder="Item Description">
                      </div>
                      </div> 
                            
                   <div class="form-group">
                      <label for="description" class="col-sm-12 control-label">Auber Price</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control"  name="mr_auber_price" placeholder="Auber Price">
                      </div>
                  </div>                   
                </div>
                 <div class="form-group ">
                              <label for="description" class="col-sm-5 control-label"><b>Publish</b></label>
                               <div class="col-md-12">
                                <label class="radio-inline"><input type="radio" value="1" name="active"><span>Yes</span></label>
                                  <label class="radio-inline"><input type="radio" value="0" name="active"><span>No</span></label>            
                                   </div>
                              </div> 
                <div class="modal-footer">      
                  <button type="Submit" class=" btn btn-primary">Submit</button><button type="Submit" class=" btn btn-primary" data-dismiss="modal">Cancel</button>
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
            <a class="btn btn-secondary" name="delete"  href="<?php echo base_url('Menu/delete/'.$menu_category[0]['id']); ?>">Confirm</a>
          </div>