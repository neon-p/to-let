<?php
	session_start();
?>
<?php
   include ('dbconnect.php');

    $area_id = $_SESSION["area"];


		$query = "SELECT * FROM location WHERE area_id='$area_id'";
		$result= mysqli_query($con, $query);
	            
			while($row = mysqli_fetch_array($result)){ 
				$_SESSION['location_id']= $row['location_id'];
				header("Location: Adds_Post.php");
			}
?>