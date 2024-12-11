<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <?php
     session_start();
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
                    <h1 class="my-4">Login</h1>
                    <form method="post">
                       
                         <input type="email" name="user_email" placeholder="Email" class="form-control my-4">
                         <input type="password" name="user_pass" placeholder="password" class="form-control my-4">
                         <input type="submit" value="Login" name="user_btn" class="btn btn-outline-info">
                    </form>
                    <?php
                    if(isset($_POST["user_btn"])){
                       
                         $user_email = $_POST["user_email"];
                         $user_pass = $_POST["user_pass"];


                         if($user_email=="admin@gmail.com" && $user_pass=="admin"){

                              header('location:admin');
                              $_SESSION["admin"] = $user_email;


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