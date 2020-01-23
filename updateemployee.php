/*
 */
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
  
		//Get Value from variable
		$id = $_POST['id'];
		$name = $_POST['name'];
		$pos = $_POST['position'];
		$sal = $_POST['salary'];
		
		//import conection to the database
		require_once('conection.php');
		
		//Create SQL Query
		$sql = "UPDATE employee SET name = '$name', position = '$pos', salary = '$sal' WHERE id = $id;";
		
		//Update Database 
		if(mysqli_query($con,$sql)){
			echo 'Update Success';
		}else{
			echo 'Update Failed';
		}
		
		mysqli_close($con);
	}
?>
