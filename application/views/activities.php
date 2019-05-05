<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('partials/header'); ?>
		<ul class="breadcrumb">
			<div class="container-fluid">
				<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Home</a></li>
				<li class="breadcrumb-item active">Activities</li>
			</div>
		</ul>          
		<div class="container-fluid">			
			<div class="row">
			<div class="col-lg-12">
			<div class="offer-add">
			<span><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addoffer">Create activity </button></span>	          		
			</div>	
			</div>	
			</div>
		</div>
			<section>
			<div class="container-fluid">
			<?php if($activity):
				foreach($activity as $row):
			?>
			<div class="row">
				<div class="col-md-12">
				
				<div class="offer-list">
					<div class="imgupload">
						<span><img src="<?php echo base_url('assets/');?>/img/bg.jpg" alt=""/></span>	
					</div>
					<div class="offer-restname">
							<h3><?php echo $row['activity_name'];?></h3>
							<?php if($row['activity_price']):?>
							<p class="discount-offer"><i class="fa fa-inr" aria-hidden="true"></i>
							<?php echo $row['activity_price'];?>
							</p>
							<?php endif;?>
							<ul>
								<li>Place :-<strong><?php echo $row['activity_place'];?></strong></li>
								<li>Type :-<strong><?php echo $row['activity_type'];?></strong></li>								
								<li>Start Date :-<strong><?php echo $row['start_date'];?></strong></li>
								<li>Start Time :-<strong><?php echo $row['start_time'];?></strong></li>
								<li>End Date :-<strong><?php echo $row['end_date'];?></strong></li>
								<li>End Time :-<strong><?php echo $row['end_time'];?></strong></li>
							</ul>         					
					</div>	
					</div>
				</div>
			</div>
			<?php endforeach;
			endif;?>
			</div>          
			</section>          
          <div id="addoffer" class="modal fade addoffers" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">       
						<h4 class="modal-title"> <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
					</div>
					<form>
					<div class="modal-body">                	
								<div class="form-group">
										<label for="description" class="col-sm-4 control-label">Offer Name</label>
										<div class="col-sm-12">
												<input type="text" class="form-control" id="offer_name" name="offer_name" placeholder="Enter Offer Name">
										</div>
								</div>         	
								<div class="form-group">
									<label class="col-sm-4" for="sel1">Offer Type</label>
									<div class="col-sm-12">					 
										 <select class="form-control" id="offer_type" name="offer_type">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
										</select>
									</div>
								</div>         	 
								<div class="form-group">
									 <label for="description" class="col-sm-5 control-label">Offer Category Type </label>
									 <div class="col-sm-12">
												<label class="radio-inline"><input type="radio" value="Bread" name="offer_category_name"><span>Bread</span></label>
												<label class="radio-inline"><input type="radio" value="Chinese" name="offer_category_name"><span>Chinese Starters</span></label>
												<label class="radio-inline"><input type="radio" value="Other" name="offer_category_name"><span>Other</span></label> 
									 </div>
							 </div>         	
								<div class="form-group">
									<label for="description" class="col-sm-4 control-label">Offer Discount</label>
									<div class="col-sm-12">
											<input type="text" class="form-control" id="offer_discount" name="offer_discount" placeholder="Offer Discount">
									</div>
							</div>         	
							 <div class="form-group">
									<label for="description" class="col-sm-12 control-label">Offer Discount Description</label>
									<div class="col-sm-12">
											<input type="text" class="form-control" id="offer_discount_desc" name="offer_discount_desc" placeholder="Offer Discount Description">
									</div>
							</div> 
												
							 <div class="form-group">
									<label for="description" class="col-sm-12 control-label">Offer Old Discount</label>
									<div class="col-sm-12">
											<input type="text" class="form-control" id="offer_old_price" name="offer_old_price" placeholder="Offer Old Discount">
									</div>
							</div> 
							<div class="form-group">
								 <label for="description" class="col-sm-12 control-label">Offer New Discount</label>
								 <div class="col-sm-12">
										 <input type="text" class="form-control" id="offer_new_price" name="offer_new_price" placeholder="Offer New Discount">
								 </div>
						 </div> 
							
							 <div class="form-group">
									<label for="description" class="col-sm-4 control-label">Start Date</label>
									<div class="col-sm-12">							
											<input type="text" class="form-control" id="offer_start_date" name="offer_start_date">
									</div>
							</div> 
							
							 <div class="form-group">
										<label for="description" class="col-sm-4 control-label">Start Time</label>
										<div class="col-sm-12">
												<input type="text" class="form-control" id="offer_start_time " name="offer_start_time ">
										</div>
								</div> 
							
							 <div class="form-group">
										<label for="description" class="col-sm-4 control-label">End Date</label>
										<div class="col-sm-12">
												<input type="text" class="form-control" id="offer_end_date" name="offer_end_date">
										</div>
								</div> 
							 <div class="form-group">
										<label for="description" class="col-sm-4 control-label">End Time</label>
										<div class="col-sm-12">
												<input type="text" class="form-control" id="offer_end_time" name="offer_end_time">
										</div>
								</div> 
						
					</div>
					<div class="modal-footer">		  
					 <div class="control-group col-sm-8">
						<label class="control-label" for="filebutton">Image  Upload</label>
						<div class="controls">
							<input id="filebutton" name="filebutton" class="input-file" type="file">
						</div>
					</div>
					 <button type="button" class="btn btn-success">Submit</button>
					</div>
					</form>
				</div>
			</div>
		</div>
          
<?php $this->load->view('partials/footer'); ?>