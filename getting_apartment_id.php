<?php
	session_start();
?>
<?php
   include ('dbconnect.php');

    $location_id = $_SESSION["location_id"];


		$query = "SELECT * FROM apartment WHERE location_id='$location_id'";
		$result= mysqli_query($con, $query);
	            
			while($row = mysqli_fetch_array($result)){ 
				$_SESSION['apartment_id']= $row['apartment_id'];
				header("Location: Adds_Post2.php");
			}
?>