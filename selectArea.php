<?php
include ('dbconnect.php');

if(isset($_POST['city'])) {

	$city_id = $_POST["city"];
	$query = $con->query("SELECT * FROM area WHERE city_id='$city_id'");
	$rowCount = $query->num_rows;
	if($rowCount > 0){
		echo '<option value="">Select Area</option>';
		while($row = $query->fetch_assoc()){ 
			echo '<option value="'.$row['area_id'].'">'.$row['area'].'</option>';
		}
	}else{
		echo '<option value="">Area not available</option>';
	}
	$con->close();
}
?>