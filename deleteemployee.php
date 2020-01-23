<?php

 //Get ID's value
 $id = $_GET['id'];
 
 //Import Database conection
 require_once('conection.php');
 
 //Create SQL Query
 $sql = "DELETE FROM employee WHERE id=$id;";
  
 //Delete value on database
 if(mysqli_query($con,$sql)){
 echo 'Delete Success';
 }else{
 echo 'Delete Failed';
 }
 
 mysqli_close($con);
 ?>
