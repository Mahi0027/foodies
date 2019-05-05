<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('partials/header'); ?>

<?php 

    foreach ($profile as $key => $row) {
  ?>

         <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="hading-top">My Profile</h2>
        </div>
      </header>
      <!-- Breadcrumb-->
      <ul class="breadcrumb">
        <div class="container-fluid">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">My Profile</li>
        </div>
      </ul>
   
      <section class="tables">
        <form action="<?php echo base_url('Myprofile/profile_data_insert');?>" method="post"  
          role="form" enctype="multipart/form-data">
                
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="myprofileform">
             
                  <div class="form-group">
                    <label for="">Restaurent Name:</label>
                    <input type="text" class="form-control" id="usr"  required value="<?php  echo $row['restaurant_name']; ?>" name="restaurant_name">
                  </div>
                  <div cl3ass="form-group">
                    <label for="">Restaurant Location City:</label>
                    <input type="text" class="form-control" id="usr" required value="<?php  echo $row['restaurant_location_city']; ?>"
                    name="restaurant_location_city">
                  </div>
                  <div class="form-group">
                    <label for="">Restaurant Owner Name:</label>
                    <input type="text" class="form-control" id="lastusr" required value="<?php  echo $row['restaurant_owner_name']; ?>" name="restaurant_owner_name">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id=" " disabled="disabled" aria-describedby="emailHelp" 
                    required value="<?php  echo $row['restaurant_owner_email']; ?>"
                     name="restaurant_owner_email">
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Owner Mobile</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp"
                    required="" required value="<?php  echo $row['restaurant_owner_mobile']; ?>"
                    name="restaurant_owner_mobile">
                  </div>
                   <div class="form-group">
                    <label for=""> Address</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required="" required value="<?php  echo $row['restaurant_address']; ?>"
                    name="restaurant_address">
                  </div>
                   <div class="form-group">
                    <label for=""> Restaurant Latitude</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_latitude']; ?>" required=""
                    name="restaurant_latitude">
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Longitude</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_longitude']; ?>"
                    name="restaurant_longitude">
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Owner Adhaar Id</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_owner_adhaar_id']; ?>"
                    name="restaurant_owner_adhaar_id">
                  </div>
                  <div class="form-group">
                    <label for="">Restaurant Gst Tin No</label>
                    <input class="form-control" id="inputPhone"  required="required" title="" type="text"
                    value="<?php  echo $row['restaurant_gst_tin_no']; ?>"
                    name="restaurant_gst_tin_no">
                  </div> 
                  <div class="form-group">
                    <label for="">Restaurant Valid Vheck</label>
                     <input id="msg" type="text" class="form-control" 
                      placeholder="Restaurant Valid Vheck" value="<?php  echo $row['restaurant_valid_check']; ?> "
                     name="restaurant_valid_check">  
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Registration Date</label>
                    <input id="msg" type="text" class="form-control"  placeholder="Restaurant Registration Date" 
                    value="<?php  echo $row['restaurant_registration_date']; ?> "
                    name="restaurant_registration_date"> 
                  </div> 
                  <div class="form-group">
                    <label for="">Restaurant Food Type</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_food_type']; ?>"
                    name="restaurant_food_type">
                  </div>
                 
                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="myprofileform">
                  
                
                  <div class="form-group">
                    <label for="">Restaurant Image</label>
                     <img src="<?php  echo base_url('uploads/resto_images/').$row['restauran
                     ,,t_image_url']; ?>" width="200" height="100
                     " class="img-responsive" >
                     
                     <label for=" ">Upload New Image</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="resto_picture">
                   
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Theme</label>
                    <img src="<?php  echo base_url('uploads/resto_images/'). $row['restaurant_theme_url']; ?>" width="200" height="100
                     " class="img-responsive" >
                     <label for="">Upload New Image</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="resto_theme">
                   
                  </div>
                   
                   <div class="form-group">
                    <label for="">Restaurant Dining Type</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_dining_type']; ?>"
                    name="restaurant_dining_type">
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Outlet Type</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_outlet_type']; ?>"
                    name="restaurant_outlet_type">
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Cusine</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_cusine']; ?>"
                    name="restaurant_cusine">
                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Fascilities</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_fascilities']; ?>"
                    name="restaurant_fascilities">

                  </div>
                   <div class="form-group">
                    <label for="">Restaurant Timings</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['restaurant_timings']; ?>"
                    name="restaurant_timings">
                  </div>
                   <div class="form-group">
                    <label for="">Remarks By Mr Auber</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" required value="<?php  echo $row['remarks_by_mr_auber']; ?>"
                    name="remarks_by_mr_auber">
                  </div>
                  <button type="submit" class="btn btn-primary" name="Update">Update</button>
                
              </div>
            </div>
          </div>
        </div>
        </form>
        
        </section>
 <?php
      }
     ?>     

	         
<?php $this->load->view('partials/footer'); ?>