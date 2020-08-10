<?php
	session_start();
?>
<?php
	include("dbconnect.php");
	if(isset($_POST["Next"])){
		
		$Bedroom = $_POST["bedroom"];
		$Dining = $_POST["dining"];
		$Drawing = $_POST["drawing"];
		$Kitchen = $_POST["kitchen"];
		$Bathroom = $_POST["bathroom"];
		$Balcony = $_POST["balcony"];
		$Floor = $_POST["floor"];
		$location_id = $_SESSION["location_id"];
		
		if(!empty($Dining) && !empty($Drawing)){
				
			$query= "INSERT INTO `apartment`(`bedroom`,`dining`, `drawing`, `kitchen`, `bathroom`, `balcony`, `floor`,`location_id`) VALUES ('$Bedroom','$Dining', '$Drawing', '$Kitchen', '$Bathroom', '$Balcony', '$Floor', '$location_id')";
			
			if($con->query($query) == TRUE){
				header("Location: getting_apartment_id.php");
			}
			else{
				echo "Die";
			}
		} else {
			echo "All field must be filled up";
		}
		$con->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Post Adds</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Home Rent">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">	

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Home<span>Rent</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#About">About</a></li>
									<li><a href="#Contact">Contact</a></li>
								</ul>

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#About">About</a></li>
				<li class="menu_mm"><a href="#Contact">Contact</a></li>
			</ul>
		</nav>
	</div>

<div class="team" id="About">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="image/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Rent Form</h2>
					</div>
				</div>
			</div>
			<div class="row team_row" style="margin-left: 16%">
				<div class="col-md-10 col-sm-4 team_col">
					<div class="team_item">
						<div class="team_body">
							<form class="form" method="post" action="Adds_Post.php" style="margin-left: 22%">
							  <div class="row" style="padding-right: 30%">
								<div class="col-md-6">
									<div class="form-group">
										<label for="Bedroom">Bedroom</label>
										<select class="form-control" required="required" name="bedroom">
											<option value="">Select Bedroom</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>	
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Dining">Dining</label>
										<select class="form-control" required="required" name="dining">
											<option value="">Select Dining</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Drawing">Drawing</label>
										<select class="form-control" required="required" name="drawing">
											<option value="">Select Drawing</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Kitchen">Kitchen</label>
										<select class="form-control" required="required" name="kitchen">
											<option value="">Select Kitchen</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Bathroom">Bathroom</label>
										<select class="form-control" required="required" name="bathroom">
											<option value="">Select Bathroom</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Balcony">Balcony</label>
										<select class="form-control" required="required" name="balcony">
											<option value="" style="">Select Balcony</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Floor">Floor</label>
										<select class="form-control" required="required" name="floor">
											<option value="">Select Floor</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div> 
							  </div>
							  <div class="">
							  	<div class="form-group">
							  		<button type="submit" class="btn btn-primary" style="" name="Prev">Prev</button>
							        <button type="submit" class="btn btn-primary" style=""  name="Next">Next</button>
							  	</div>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="image/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(image/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-4 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Home<span>Rent</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title" id="Contact">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: abcd@gmail.com</li>
											<li>Phone:  111111111111</li>
											<li>Ssssssssssssssssssssssss</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="#About">About</a></li>
											<li><a href="#Contact">Contact</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>