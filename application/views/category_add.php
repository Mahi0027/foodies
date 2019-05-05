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
        <li ><a href="<?php echo base_url('category').$row['restaurant_id'];?>">Category</a></li>
        <li class="breadcrumb-item active">Add_Category</li>
      </ol>
      

      <div class="card mb-3">
         
        <div class="card-header ">
          <div class="col-md-10"><i class="fa fa-table"></i> Menu_Category List</div>
        <div class="col-md-2 ">
          <button type="button" class="btn btn-primary btn-sm"><a href="<?php echo base_url('category_add').$row['restaurant_id'];?>">Add Category</a></button>
        </div>
        <div class="card-body">
       

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>s.no</th>
                  <th>Oulet name </th>
                  <th>Category Name</th>
                  <th>Action</th>
                 
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>s.no</th>
                  <th>Oulet name </th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if($categorylist):
                  foreach ($categorylist as $key => $row): ?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['outlet_id'];?></td>
                  <td><?php echo $row['cat_name'];?></td>
                  <td><div class="dropdown text-center">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="caret"></span>Action</button>
                        <ul class="dropdown-menu text-center">
                          <li><a href="#">Edit</a></li>
                          <li><a href="#">Delete</a></li>
                          <li><a href="#">Publish</a></li>
                        </ul>
                      </div>
                  </td>
                          
                  <td><a href="<?php echo base_url('admin/restaurant/reastoedit/').$row['restaurant_id'];?>">Edit</a></td>
                </tr>
                <?php endforeach;
              endif;?>
              </tbody>
            </table>
          </div>
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