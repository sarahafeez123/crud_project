<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <?php
     session_start();
     if($_SESSION["admin"]){   
     }
     else {
          header('location:../login.php');
     }

     require_once "linkcss.php";
     require_once "connection.php";
     ?>
</head>
<body>
     <?php 
      require_once "header.php";
     ?>

<div class="container-xxl">
     <div class="row">
          <div class="col-lg-3">
               <?php 
                require_once "side_nav.php";
               ?>

          </div>
          <div class="col-lg-9 col-md-12">
               <div class="row">
                    <div class="col-lg-12 col-lg-12">
                          <h2 class="my-4">Customer Details</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
     <?php
     $i = 1; 
     $query = "select * from reg";
     $sel = mysqli_query($con, $query);
     while($row = mysqli_fetch_assoc($sel)){
     ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
      <td><a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-info">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-danger">Delete</a></td>
 
    </tr>
    <?php 
    $i++;
     }
    ?>
  </tbody>
</table>

                    </div>
               </div>
          </div>
     </div>
</div>



     

<?php
      require_once "linkjs.php";
     ?>
</body>
</html>