<?php 
 	
	//Get Value From employee ID
	$id = $_GET['id'];
	
	//Importing database
	require_once('conection.php');
	
	//Create SQL Query where the employee are spesifik by an ID
	$sql = "SELECT * FROM employee WHERE id=$id";
	
	//Get result
	$r = mysqli_query($con,$sql);
	
	//Call result to the array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['nama'],
			"pos"=>$row['position'],
			"salary"=>$row['salary']
		));
 
	//Show on JSON Format
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
