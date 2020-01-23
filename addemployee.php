<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Get Variable value
		$name = $_POST['name'];
		$pos = $_POST['position'];
		$sal = $_POST['salary'];
		
		//SQL Syntax
		$sql = "INSERT INTO employee (name,position,salary) VALUES ('$name','$pos','$sal')";
		
		//Import File Conection to the database
		require_once('Conection.php');
		
		//Execution Query database
		if(mysqli_query($con,$sql)){
			echo 'Success added employee';
		}else{
			echo 'Failed to add employee';
		}
		
		mysqli_close($con);
	}
?>
