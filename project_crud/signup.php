<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <?php
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
                    <h1 class="my-4">SignUp</h1>
                    <form method="post">
                         <input type="text" name="user_name" placeholder="Name" class="form-control my-4">
                         <input type="email" name="user_email" placeholder="Email" class="form-control my-4">
                         <input type="password" name="user_pass" placeholder="password" class="form-control my-4">
                         <input type="submit" name="user_btn" class="btn btn-outline-info">
                    </form>
                    <?php
                    if(isset($_POST["user_btn"])){
                         $user_name = $_POST["user_name"];
                         $user_email = $_POST["user_email"];
                         $user_pass = $_POST["user_pass"];

                         $query = "insert into reg(name,email,password) values('".$user_name."','".$user_email."','".$user_pass."')";
                         $ins = mysqli_query($con,$query);
                         if($ins){
                            echo "Data Inserted";
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