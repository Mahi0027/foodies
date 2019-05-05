<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('partials/header'); ?>




	 <!-- Page Header-->
	<header class="page-header">
        <div class="container-fluid">
          <h2 class="hading-top">Menu Item</h2>
        </div>
      </header>
       <!-- Breadcrumb-->
		<ul class="breadcrumb">
			<div class="container-fluid">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a></li>
				<li class="breadcrumb-item active">Menu</li>
				<li class="breadcrumb-item active">Menu-Item</li>
				<li class="breadcrumb-item active">Update Menu List</li>

			</div>
		</ul>

    
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">       
                <h4 class="modal-title"> <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
              </div>
              <?php 
              if($menu_item_list): ?>
                 

             <form action="<?php echo base_url('Menu/update_menu_item_list/'.$menu_item_list['id'].'/'.$menu_item_list['cat_id']) ?>" method="post">
              <div class="modal-body">                  
                    <div class="form-group container">
                        <label for="description" class="col-sm-4 control-label"><b>Menu Item</b></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="" name="menu_item_name" placeholder="Menu Item" value="<?php echo $menu_item_list['menu_item_name']?>">
                        </div>
                    </div>  
                    <div class="form-group container">
                        <label for="description" class="col-sm-4 control-label"><b>Price</b></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="offer_name" name="item_price" placeholder="Price" value="<?php echo $menu_item_list['item_price']?>">
                        </div>
                    </div> 
                    <div class="form-group container">
                        <label for="description" class="col-sm-4 control-label"><b>Auber Price</b></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="offer_name" name="mr_auber_price" placeholder="Auber Price" value="<?php echo $menu_item_list['mr_auber_price']?>">
                        </div>
                    </div>  
                    <div class="form-group container">
                        <label for="description" class="col-sm-4 control-label"><b>Description</b></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="offer_name" name="description" placeholder="Description" value="<?php echo $menu_item_list['description']?>">
                        </div>
                    </div>          
                                    
                             
                    <div class="form-group container">
                       <label for="description" class="col-sm-5 control-label"><b>Publish</b></label>
                       <div class="col-md-12">
                            <label class="radio-inline"><input type="radio" value="1" name="active"
                             <?php echo ($menu_item_list['menu_valid']==1)? 'checked="checked"' : '';?> ><span>Yes</span></label>
                            <label class="radio-inline"><input type="radio" value="0" name="active"
                            <?php echo ($menu_item_list['menu_valid']==0)? 'checked="checked"' : '';?> ><span>No</span></label>
                            
                       </div>
                   </div>           
                    
               <div class="container text-center"><button type="submit" class=" btn btn-primary">UPDATE</button>&emsp;&emsp;&emsp;<a href="<?php echo base_url('menu')?>"><button type="button" class="btn btn-primary">Cancel</button></div>
              </div>
              </form>
                <?php 
              endif;?>
            </div>
          </div>
        


         
              
		
<?php $this->load->view('partials/footer'); ?>