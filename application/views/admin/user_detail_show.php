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
        <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/user/user_data_table'); ?>">Users</a></li>
        <?php
          foreach ($userdata as $key => $row) {
        ?>
        <li class="breadcrumb-item active"><?php echo "  ".$row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></li>
      </ol>
     <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            
            <?php
              }
            ?>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-8 col-lg-10 " align="center"> <img src="<?php echo base_url('assets/');?>img/avatar-2.jpg" class="img-rounded" alt="User Pic" style="border-radius: 50%;" >
                  <p>
                    <br><b><?php echo "  ".$row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></b><br><br>
                    <h6>Created Date :</h6><br><?php echo $row['create_date'];?>
                  </p>
                </div>
                <div class=" col-md-4 col-lg-2 "> 
                  <table class="table table-user-information">
                    <tbody>
                                  <tr>
                                    <td>Email ID:</td>
                                    <td><?php echo $row['email_id'] ?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Mobile no :</td>
                                    <td><?php echo $row['mobile_no'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Gender :</td>
                                    <td><?php echo $row['gender '] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Password:</td>
                                    <td><?php echo $row['password'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Marital Status :</td>
                                    <td><?php echo $row['marital_status'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Address :</td>
                                    <td><?php echo $row['address']," ".$row['city']." ".$row['state']; ?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>CreateDate:</td>
                                    <td><?php echo $row['create_date'] ?></td>
                                  </tr>
                                  <tr>
                                    <td>Updated Date:</td>
                                    <td><?php echo $row['update_date'] ?></td>
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
        <div style="margin-left: 60%;"><a href="<?php echo base_url('admin/user/user_data_table') ?>"><i class="fa fa-chevron-circle-left" aria-hidden="true" onclick="goback()" style="color: #BDEDFF; font-size: 130%; margin: 2% 0%;"></i></a></div>
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

  <script>
function myFunction($id) {
    var txt;
    if (confirm("Press a button!")) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }

//one step back
function goBack() {
    window.history.go(-1);
}

   
}
</script>
  <?php $this->load->view('admin/footer'); ?>