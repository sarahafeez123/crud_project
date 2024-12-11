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
     ?>
</head>
<body>
     <?php 
      require_once "header.php";
     ?>

<h1>Admin </h1>



     

<?php
      require_once "linkjs.php";
     ?>
</body>
</html>