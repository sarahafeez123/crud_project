<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <?php
     $id = $_GET["id"];
      require_once "linkcss.php";
      require_once "connection.php";
     ?>
</head>
<body>
     <?php 
      require_once "header.php";
     ?>

     <div class="container">
          <div class="row">
               <div class="col-lg-2"></div>
               <div class="col-lg-8">
                    <h1 class="my-4">Customer Details</h1>
                    <form method="post">
                    <?php 
     $query = "select * from reg where id = '".$id."' ";
     $sel = mysqli_query($con, $query);
     while($row = mysqli_fetch_assoc($sel)){
     ?>
                         <input type="text" name="user_name" value="<?php echo $row["name"] ?>" placeholder="Name" class="form-control my-4">
                         <input type="email" name="user_email" value="<?php echo $row["email"] ?>" placeholder="Email" class="form-control my-4">
                         <input type="text" name="user_pass" value="<?php echo $row["password"] ?>" placeholder="password" class="form-control my-4">
                         <input type="submit" name="user_btn" class="btn btn-outline-info">
                         <?php
     }
                         ?>
                    </form>
                    <?php
                    if(isset($_POST["user_btn"])){
                         $user_name = $_POST["user_name"];
                         $user_email = $_POST["user_email"];
                         $user_pass = $_POST["user_pass"];

                         $query = "update reg set  name='".$user_name."',email='".$user_email."',password='".$user_pass."' where id = '".$id."' ";
                         $edit = mysqli_query($con,$query);
                         if($edit){
                            header('location:customer_details.php');
                         }
                         else {
                              echo "ERROR";
                         }
                    }
                  
                    
                    ?>
               </div>
               <div class="col-lg-2"></div>
          </div>
     </div>




     

<?php
      require_once "linkjs.php";
     ?>
</body>
</html>