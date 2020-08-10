<?php
	session_start();
?>
<?php
   include ('dbconnect.php');

    $apartment_id = $_SESSION["apartment_id"];


		$query = "SELECT * FROM rent WHERE apartment_id='$apartment_id'";
		$result= mysqli_query($con, $query);
	            
			while($row = mysqli_fetch_array($result)){ 
				$_SESSION['rent_id']= $row['rent_id'];
				header("Location: Adds_Post4.php");
			}
?>