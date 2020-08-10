<?php
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rent House</title>
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
<script type="text/javascript">
		function selectArea()
		{
			var city= document.getElementById("city_id").value;
				$.ajax({
				type: 'post',
				url: 'selectArea.php',
				data: {
					city:city},
					success: function (html) {
						$('#area').html(html);
					}
				});
		}
	</script>
<script type="text/javascript">
		function Filter()
		{
			var area_id= document.getElementById("area").value;
				$.ajax({
				type: 'post',
				url: 'Filter.php',
				data: {
					area_id:area_id},
					success: function (html) {
						$('#show').html(html);
					}
				});
		}
	</script>
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

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="image/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="container-fluid">
						<div class="col">
							<form class="form" method="post" action="view_content.php" style="margin-left: 22%">
							  <div class="row" style="padding-right: 30%">
								<div class="col-md-6">
									<div class="form-group ">
										<label for="City/Division">City/Division</label>
										<select class="form-control" name="city" id="city_id" required="required" onchange="selectArea();">
											<option value="">Select City</option>
												<?php
													$query = $con->query("SELECT * FROM city");
													$rowCount = $query->num_rows;
													if($rowCount > 0){
														while($row = $query->fetch_assoc()){ 
															echo '<option value="'.$row['city_id'].'">'.$row['city'].'</option>';
														}
													}else{
														echo '<option value="">City not available</option>';
													}
												?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<label for="Area">Area</label>
										<select class="form-control" name="area" id="area" required="required" onchange="Filter();">
												
										</select>
									</div>
								</div>
							</form>
					</div>
					<div id="show">
						
					</div>
				</div>
			</div>
		</div>
	</div>	
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