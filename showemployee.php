<?php 
 	
	//Get Value From employee ID
	$id = $_GET['id'];
	
	//Importing database
	require_once('conection.php');
	
	//Create SQL Query where the employee are spesifik by an ID
	$sql = "SELECT * FROM employee WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['nama'],
			"desg"=>$row['posisi'],
			"salary"=>$row['gajih']
		));
 
	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>
