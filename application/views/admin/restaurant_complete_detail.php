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
        <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/restaurantlist'); ?>">Restaurant List</a></li>
        <li class="breadcrumb-item active">User</li>
      </ol>
     <div class="container">
      <div class="row">   
          <div class="panel panel-info">
            <div class="panel-heading">
              <?php
                   foreach ($restaurantlist as $key => $row) {
              ?>
              <h3 class="panel-title"><?php echo "  ".$row['restaurant_name']; ?></h3>
            </div>
            <?php
              }
            ?>
            <div class="panel-body" >
              <div class="row">
                <div class="col-md-3 col-lg-3" align="center"> <img src="<?php echo base_url('assets/');?>img/avatar-2.jpg" class="img-rounded" alt="User Pic" style="border-radius: 10%;" >
                 <table class="table table-user-information">
                   <tbody>
                     <tr>
                       <th>Rating :</th>
                       <td>df</td>
                     </tr>
                     <tr>
                        <div id="map"></div> 
                     </tr>
                   </tbody>
                 </table>
                </div>
                <div class=" col-md-4 col-lg-4 "> 
                  <table class="table table-user-information">
                    <tbody>
                                  <tr>
                                    <th>Restaurant Name :</th>
                                    <th><?php echo $row['restaurant_name'] ?></th>
                                  </tr>
                                  <tr>
                                    <th>Restaurant Owner Name :</th>
                                    <td><?php echo $row['restaurant_owner_name'] ?></td>
                                  </tr>
                                  <tr>
                                    <th> Email :</th>
                                    <td><?php echo $row['restaurant_owner_email '] ?></td>
                                  </tr>
                                  <tr>
                                    <th> Moblie No :</th>
                                    <td><?php echo $row['restaurant_owner_mobile '] ?></td>
                                  </tr>
                                  <tr>
                                    <th>Address :</th>
                                    <td><?php echo $row['restaurant_address '] ?></td>
                                  </tr>
                                  <tr>
                                    <th>Adhaar No :</th>
                                    <td><?php echo $row['restaurant_owner_adhaar_id'] ?></td>
                                  </tr>
                                  <tr>
                                    <th>Registration Date :</th>
                                    <td><?php echo $row['restaurant_registration_date'] ?></td>
                                  </tr>
                                  
                                  <tr>
                                    <th>GST Tin No :</th>
                                    <td><?php echo $row['restaurant_gst_tin_no'] ?></td>
                                  </tr>
                                  <tr>
                                    <th>Valid Check :</th>
                                    <td><?php echo $row['restaurant_valid_check'] ?></td>
                                  </tr>
                                 
                                </tbody>
                  </table>
                </div>
                <div class="col-md-5 col-lg-5">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <th>Food Type:</th>
                        <th><?php echo $row['restaurant_food_type'] ?></th>
                      </tr>
                      <tr>
                        <th>Dining Type:</th>
                        <td><?php echo $row['restaurant_dining_type'] ?></td>
                      </tr>
                      <tr>
                        <th>Outlet Type:</th>
                        <td><?php echo $row['restaurant_outlet_type '] ?></td>
                      </tr>
                      <tr>
                        <th>Cusin:</th>
                        <td><?php echo $row['restaurant_cusine'] ?></td>
                      </tr>
                      <tr>
                        <th>Timing :</th>
                        <td><?php echo $row['restaurant_timings'] ?></td>
                      </tr>
                      <tr>
                        <th>Facilities:</th>
                        <td><?php echo $row['restaurant_fascilities'] ?></td>
                      </tr>
                      <tr>
                        <th>Remark By Mr. Aubur :</th>
                        <td><?php echo $row['remarks_by_mr_auber'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
<!-- yaha se menu start karna hain -->



<div class="clearfix"></div>
</div>

</div>
</div>
</div>
</section>
                   
          </div>
        </div>
        <div style="margin-left: 60%;"><a href="<?php echo base_url('admin/restaurantlist') ?>"><i class="fa fa-chevron-circle-left" aria-hidden="true" onclick="goback()" style="color: #BDEDFF; font-size: 130%; margin: 2% 0% 0% 0%;"></i></a></div>
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

//mapp
<script type="text/javascript">
function initialize() {
   var latlng = new google.maps.LatLng(<?php echo $row['restaurant_latitude']; ?>,<?php echo $row['restaurant_longitude']; ?>);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: false,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var infowindow = new google.maps.InfoWindow();   
    google.maps.event.addListener(marker, 'click', function() {
      var iwContent = '<div id="iw_container">' +
      '<div class="iw_title"><b>Location</b> : Noida</div></div>';
      // including content to the infowindow
      infowindow.setContent(iwContent);
      // opening the infowindow in the current map and at the current marker location
      infowindow.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
 
  <?php $this->load->view('admin/footer'); ?>