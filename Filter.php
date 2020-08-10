<?php
			include ('dbconnect.php');

			if(isset($_POST['area_id'])){
				$area_id= $_POST['area_id'];
				$sql = "SELECT * FROM `location` WHERE area_id='$area_id'";
				$result2 = mysqli_query($con, $sql);

				while ($row = mysqli_fetch_array($result2)) {
					
					$house_address= $row['house_address'];
					$location_id= $row['location_id'];
					$sql1= "SELECT * FROM `apartment` WHERE location_id='$location_id'";
					$result3 = mysqli_query($con, $sql1);

					while($row1 = mysqli_fetch_array($result3)) {
						
						$bedroom =$row1['bedroom'];
						$dining = $row1['dining'];
						$drawing = $row1['drawing'];
						$kitchen = $row1['kitchen'];
						$balcony = $row1['balcony'];
						$bathroom = $row1['bathroom'];
						$floor = $row1['floor'];
			            $apartment_id=$row1['apartment_id'];
			            $sql2 = "SELECT * FROM `rent` WHERE apartment_id= '$apartment_id'";
			            $result4 = mysqli_query($con, $sql2);

			            while ($row2 = mysqli_fetch_array($result4)) {
			            	$ammount = $row2['ammount'];
			            	$garage = $row2['garage'];
			            	$lift = $row2['lift'];
			            	$emergency = $row2['emergency'];
			            	$gas = $row2['gas'];
			            	$rent_id= $row2['rent_id'];
			            	$sql3 = "SELECT * FROM `image` WHERE rent_id= '$rent_id'";
			            	$result5= mysqli_query($con, $sql3);

			            	while ($row3 = mysqli_fetch_array($result5)) {
			            		$image_path = "uploads/";
		              			$image=$image_path.$row3['image_link'];

				            	echo "<div id='' class='col-md-6' style=''>";

				            		echo "<br>";
		              				echo'&nbsp';
						            echo'&nbsp';
						            echo'&nbsp';
						            echo '<img class = "img-responsive" src="' . $image. '" height="160px"> ';
						            echo "<br>";
						            echo "<br>";
						            echo'&nbsp';
						            echo "House Address: ";
									echo '' . $house_address. '';
									echo "<br>";
									echo'&nbsp';
									echo "Bedroom: ";
									echo '' . $bedroom. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Dining: ";
									echo '' . $dining. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Drawing: ";
									echo '' . $drawing. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Kitchen: ";
									echo '' . $kitchen. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Balcony: ";
									echo '' . $balcony. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Bathroom: ";
									echo '' . $bathroom. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Floor: ";
									echo '' . $floor. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Garage: ";
									echo '' . $garage. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Lift: ";
									echo '' . $lift. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Emergerncy Energy: ";
									echo '' . $emergency. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Gas: ";
									echo '' . $gas. '';
									echo "<br>"; 
									echo'&nbsp';
									echo "Ammount: ";
									echo '' . $ammount. '';
									echo "<br>";									
									echo'&nbsp';
									echo "<br>";
									echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
					                //echo "<a class='btn btn-outline-primary' href='paymentint.php?card_id=$card_number_id'>Buy</a>";
									echo "<br>";
									echo "<br>";
								echo "</div>";
			            	}
			            }
					}
				}
				mysqli_close($con);
			}
?>	