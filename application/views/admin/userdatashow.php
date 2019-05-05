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
        <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard/userlist'); ?>">Users</a></li>
        <li class="breadcrumb-item active">User</li>
      </ol>
      <div class="card mb-3">
        <?php 
          foreach ($userdata as $key => $row) {
        ?>
        <div class="card-header">
          User Detail</div>
        
          <div class="container">
                  <div class="row">                                           
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title"><?php echo "  ".$row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></h3>
                        </div>
                        <div class="panel-body">
                          <div class="row" style="margin-top:20px;">
                            
                            <div class=" col-md-9 col-lg-9 "> 
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
        <?php
          }
        ?>
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
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
   
}
</script>
  <?php $this->load->view('admin/footer'); ?>