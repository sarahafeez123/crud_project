<?php 
$id =$_GET["id"];
require_once "connection.php";

$query = "delete from reg where id = '".$id."' ";

$delete = mysqli_query($con,$query);

if($delete){
  header('location:customer_details.php');
}

?>