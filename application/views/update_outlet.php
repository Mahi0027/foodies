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
        <li class="breadcrumb-item active"><a href="<?php echo base_url('Restaurant_outlet'); ?>">Outlet list</a></li>
        <li >Edit Outlet</li>
      </ol>
      

      <div class="card mb-3">
         
        <div class="card-header container">
          <div class="col-md-10"><b>Edit Outlet</b></div>
        
        <div class="card-body">
        </div>

          

         <div id="update_outlet" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
             

              <?php if($outlet_list):
                  foreach ($outlet_list as $key => $row): ?>
              
              <form action="<?php echo base_url('Restaurant_outlet/update_outlet_detail') ?>" method="post">
              <div class="modal-body">  

              <div class="form-group">
              <input class="form-control" name="id" type="hidden" value="<?php echo $row['id']; ?>" fixed>
              </div>

              <div class="form-group">
              <input class="form-control" name="restaurant_id" type="hidden" value="<?php echo $row['restaurant_id']; ?>" fixed>
               </div>

                    <div class="form-group container">
                        <label for="description" class="col-sm-4 control-label">Outlet Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="offer_name" name="outlet_name" value="<?php echo $row['type_of_outlet_name'];?>">
                        </div>
                    </div>          
                             
                    <div class="form-group container">
                       <label for="description" class="col-sm-5 control-label">Publish</label>
                       <div class="col-md-12">
                            <label class="radio-inline"><input type="radio" <?php echo ($row['active']==1)? 'checked="checked"' : '';?> value="1" name="active"><span>yes</span></label>
                            <label class="radio-inline"><input type="radio" <?php echo ($row['active']==0)? 'checked="checked"' : '';?> value="0" name="active"><span>no</span></label>
                            
                       </div>
                   </div>           
                    
               <div class="container text-center"><button type="submit" class="btn btn-primary">EDIT</button>&emsp;&emsp;&emsp;<a href="<?php echo base_url('Restaurant_outlet')?>"><button type="button" class="btn btn-primary">Cancel</button></a></div>
              </div>
              </form>
              <?php endforeach;
              endif;?>
               
            </div>
          </div>
        </div>
              



           
<?php $this->load->view('partials/footer'); ?>

