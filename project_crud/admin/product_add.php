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
          <div class="col-lg-9">
               <div class="row">
                    <div class="col-lg-12">
                    <h1 class="my-4">Product Add</h1>
                    <form method="post" enctype="multipart/form-data">
                         <input type="text" name="product_name" placeholder="Product Name" class="form-control my-4">
                         
                         <input type="text" name="product_category" placeholder="Product Category" class="form-control my-4">
                         
                         <input type="text" name="product_brand" placeholder="Product Brand" class="form-control my-4">
                         
                         <input type="text" name="product_color" placeholder="Product Color" class="form-control my-4">
                         
                         <input type="text" name="product_size" placeholder="Product Size" class="form-control my-4">
                         
                         <input type="number" name="product_price" placeholder="Product Price" class="form-control my-4">
                         
                        <textarea name="product_description" id=""  rows="10" class="form-control"></textarea>
                         
                         <input type="text" name="product_qty" placeholder="Product Quantity" class="form-control my-4">

                         <input type="file" name="file_name"  class="form-control my-4">

                         <input type="submit" name="user_btn" class="btn btn-outline-info">
                    </form>
                    <?php 
                    if(isset($_POST["user_btn"])){

                        $product_name = $_POST["product_name"];
                        $product_category = $_POST["product_category"];
                        $product_brand = $_POST["product_brand"];
                        $product_color = $_POST["product_color"];
                        $product_size = $_POST["product_size"];
                        $product_price = $_POST["product_price"];
                        $product_description = $_POST["product_description"];
                        $product_qty = $_POST["product_qty"];
                        $file_name = $_FILES["file_name"]["name"];
                        $tmp_name = $_FILES["file_name"]["tmp_name"];

                        move_uploaded_file($tmp_name,$file_name);

                        $query = "INSERT INTO product_add(product_name, product_category, product_brand, product_color, product_size, product_price, product_description, product_qty, image) values ('".$product_name."','".$product_category."','".$product_brand."','".$product_color."','".$product_size."','".$product_price."','".$product_description."','".$product_qty."','".$file_name."')";
                        $ins = mysqli_query($con,$query);
                        if($ins){
                              echo "Data Insert";
                        }
                        else {
                            echo "ERROR";
                        }
                        

                    }
                    
                    ?>

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