<?php
 /*
 The database name is called by "db_android"
 If your database are diferent, please make a change as your database's name.
 */
 
 //Define constanta
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','db_android');
 
 //Create Conection to the database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 ?>
