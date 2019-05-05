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
        <li class="breadcrumb-item active"><a href="<?php echo base_url('Restaurant_outlet'); ?>">Category list</a></li>
        <li class="breadcrumb-item">Edit Category</li>
      </ol>
      

      <div class="card mb-3">
         
        <div class="card-header container">
          <div class="col-md-10"><b>Edit Category</b></div>
        
        <div class="card-body">
        </div>

          

         <div id="update_outlet" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
             

             
              <form action="<?php echo base_url('Restaurant_category/update_category_detail') ?>" method="post">
              <div class="modal-body">  
                                    <div class="form-group col-md-12">
                                           <select name="outlet_name" id="outlet_name">
                                             <option value="0"> Select Outlet</option>
                                              <?php if($outletlist):
                                                foreach($outletlist as $orow):?>
                                              <option value="<?php echo $orow['id'];?>"><?php echo $orow['type_of_outlet_name'];?></option>
                                            <?php endforeach; endif;?>
                                           </select>
                                     </div>

                                  
                                    <div class="form-group ">
                                     
              
                                        <label for="description" class="col-sm-4 control-label">Category Name</label>
                                        <div >
                                            <?php if($category_list):
                                          ?>
                                            <input type="text" class="form-control" id="Category_name" name="cat_name" value="<?php echo $category_list['cat_name'];?>">
                                            <input type="hidden"  name="id" value="<?php echo $category_list['id']?>">
                                        </div>          
                                    </div>
                    <div class="form-group container">
                       <label for="description" class="col-sm-5 control-label">Publish</label>
                       <div class="col-md-12">
                            <label class="radio-inline"><input type="radio" <?php echo ($category_list['cat_active']==1)? 'checked="checked"' : '';?> value="1" name="active"><span>yes</span></label>
                            <label class="radio-inline"><input type="radio" <?php echo ($category_list['cat_active']==0)? 'checked="checked"' : '';?> value="0" name="active"><span>no</span></label>
                            
                       </div>
                   </div>           
                </div>    
                 <?php  endif;?>
               <div class="container text-center"><button type="submit" class="btn btn-primary">Update</button>&ensp;&ensp;&ensp;<a href="<?php echo base_url('restaurant_category')?>"><button type="button" class="btn btn-primary">Cancel</button></a></div>
              </form>
              
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

              



           
<?php $this->load->view('partials/footer');?>



