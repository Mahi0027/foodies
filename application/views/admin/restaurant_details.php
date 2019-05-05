<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_PARSE);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Restaurent Details</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
      <h1 style="margin-top:50px;">Restaurent Details</h1>


        <table class="table table-bordered" style="margin-top:50px;">
          <thead>
            <tr>
              <th>S.No.</th>
              <th>Restaurant Name</th>
              <th>Location</th>
              <th>Owner Name</th>
              <th>Menu</th>
              <th>Offers</th>
              <th>Promotions</th>
              <th>Active</th>
              <th>Deactive</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <?php 
           foreach ($details as $key => $row) {
             # code...
           
          ?>
            <tbody>
              <tr>
                <td><?php echo $row['restaurant_id'] ?></td>
                <td><?php echo $row['restaurant_name'] ?></td>
                <td>location</td>
                <td><?php echo $row['restaurant_owner_name'] ?></td>
                <td><?php echo $row['restaurant_cusine'] ?></td>
                <td>offers</td> 
                <td>Promotion</td>
                <td><button type="button" class="btn btn-primary">Active</button></td>
                <td><button type="button" class="btn btn-primary">Deactive</button></td>
                <td>edit</td>
                <form action="<?php echo  base_url('restaurant_details/delete'); ?>" method="post">
                <td><button type="button" class="btn btn-danger" name="delete" value="<?php echo $row['restaurant_id']; ?>">Delete</button></td>
                </form>    
              </tr>
            </tbody>
          <?php    
            }
          ?>
            
        </table>

  </div>
</body>
</html>