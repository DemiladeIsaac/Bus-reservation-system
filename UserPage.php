<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
	/*session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}*/

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Transco. Group 4 CSC 411</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=" a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
        
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>

	<!--/banner-->
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- search -->
				<div>
					<div >
						<ul class="cd-header-buttons">
				    <li>
                    <a href="index.php?logout='1'" class="btn btn-primary submit" style="background-color:rgb(255,193,7);color:black">Log Out</a></li>
						</ul>
					</div>
					<div id="cd-search" class="cd-search">
						<form action="#" method="post">
							<input name="Search" type="search" placeholder="Click enter after typing...">
						</form>
					</div>
				</div>
				<!-- //search -->

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item active">
                            <?php  if (isset($_SESSION['username'])) : ?>
			                     <a class="nav-link ml-lg-0" href="#">Welcome <strong><?php echo $_SESSION['username']; ?></strong>
								<span class="sr-only">(current)</span>
							</a>
		                  <?php endif ?>
							
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
						<div class="banner-img">
							<div class="banner-info text-center">
								<h3 class="logo">
									<a class="navbar-brand" href="index.html">
										<i class="fas fa-cubes"></i> Transco</a>
								</h3>
								<h4>Transporting Kings and Queens of Hebron.</h4>
								<div class="banner-form">
									<form action="#" method="post">
										<div class="row">
											<div class="col-md-3">
												<input type="text" class="form-control" name="name" placeholder="Name" required="">
											</div>
											<div class="col-md-3">
												<select class="form-control option" name="from">
													<option>Transport From</option>
													<option>Daniel Hall</option>
													<option>Joseph Hall</option>
													<option>Esther Hall</option>
													<option>Peter Hall</option>
													<option>Lydia Hall</option>
													<option>Dorcas Hall</option>
												</select>
											</div>
											<div class="col-md-3">
												<select class="form-control option" name="to">
													<option>Transport To</option>
													<option>Lecture Theater</option>
													<option>C.S.T Building</option>
													<option>Chemical Engineering Building </option>
													<option>Cafeteria 2</option>
													<option>Electrical Engineering Building</option>
													<option>Covenant University Sport Center</option>
												</select>
											</div>
                                            <div class="col-md-3">
												<button id="check" type="submit" class="btn btn-primary submit" name="check" 
                                                         style="text-align:left;">Check Availability</button>
											</div>
										</div>
									</form>
								</div><br/>
                                    <?php include('msg.php'); ?>

                                <div class="banner-form">
                                <div class="row">
                                    <button id="book" type="submit" class="btn btn-primary submit" name="check" data-toggle="modal" data-target="#exampleModalCenter">Book</button>
                                </div></div>
							</div>
						</div>
					
	<!-- //banner -->

	<!--footer-->
	<footer>
		<div class="container">
			<div class="footer-top-agileits-w3ls text-center">
				<h2 class="logo">
					<a href="index.html">
						<i class="fas fa-cubes"></i> Transco</a>
				</h2>
				<p class="para three mt-4"></p>
			</div>
			<div class="subscribe-grid text-center">
				<h5>Subscribe for our latest updates</h5>
				<p>Get
					<span>10%</span> off on booking</p>
				<form action="#" method="post">
					<input class="form-control" type="email" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1">
						<i class="far fa-envelope"></i>
					</button>
				</form>
			</div>
			<div class="row footer-bottom-wthree-agile">
				<div class="col-lg-6 copyright">
					<p>&copy; 2018 Transco . All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> Group 4 </a>
					</p>

				</div>
				<div class="col-lg-6 social-icon footer text-right">
					<div class="icon-social">
						<a href="#" class="button-footr">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="button-footr">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="button-footr">
							<i class="fab fa-dribbble"></i>
						</a>
						<a href="#" class="button-footr">
							<i class="fab fa-pinterest-p"></i>
						</a>	
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			<!-- //footer -->
		</div>
	</footer>
	<!---->
        
        <!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Book Your order</h3>
                    <?php include('errors.php'); ?>
					<form action="UserPage.php" method="post">
						<div class="row">
							<div class="col-lg-9">
								<div class="styled-input agile-styled-input-top">
							<label>Name on Card</label>								
							<input type="text" placeholder="John Stones" name="Name" required="">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="styled-input agile-styled-input-top">
							<label>CVV</label>								
							<input type="text" placeholder="xxx" name="cvv" required="">
								</div>
							</div>
						</div>
						<div class="styled-input">
							<label>Card Number</label>
							<input type="text"name="Card-Number" placeholder="xxxx-xxxx-xxxx" required="">
						</div>
						<div class= "row">
							<div class= "col-lg-9">
							<label>Expiry Date: </label>
							 <select>
							    <option value="01">January</option>
							    <option value="02">February </option>
							    <option value="03">March</option>
							    <option value="04">April</option>
							    <option value="05">May</option>
							    <option value="06">June</option>
							    <option value="07">July</option>
							    <option value="08">August</option>
							    <option value="09">September</option>
							    <option value="10">October</option>
							    <option value="11">November</option>
							    <option value="12">December</option>
							</select>
							<select>
							    <option value="16"> 2016</option>
							    <option value="17"> 2017</option>
							    <option value="18"> 2018</option>
							    <option value="19"> 2019</option>
							    <option value="20"> 2020</option>
							    <option value="21"> 2021</option>
							<option value="22"> 2022</option>
							<option value="23"> 2023</option>
							<option value="24"> 2024</option>	
							</select>
							</div>
							<div class="col-lg-3 styled-input">
								<img src="images/mastercard.jpg" width="50px">
                                <img src="images/visa.jpg" width="50px">
                                <img src="images/amex.jpg" width="50px">
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
							<h4>Total: N100</h4>
							</div>
							<div class="col-lg-6" style="text-align:right">
							<input style="background-color:#ffc107; color:black;" name="book" type="submit" value="Book">
							</div>
						</div>

					</form>
		</div></div></div>
		<!-- //Modal content-->

	<!-- js -->
	<script  src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: false,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "centered-btns"
			});


		});
	</script>
	<!--//slider-->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<script  src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();

		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
		simplyCountdown('simply-countdown-custom1', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--js-->

	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
        
        
try this

javascript onclick function...

function check(prod_qty){
    var quantity=parseInt(prod_qty);
    if (quantity == 20){
         document.getElementById("check").disabled = true;   
    }

}
	</script>
	<!-- //carousel -->



	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->

	<!--search-bar-->
	<!--/ start-smoth-scrolling -->
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script >
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script >
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>
    <script>
        var message = "<?php echo $msg ?>";
        console.log(message);
        if(message.includes("booked")){
            $("#book").attr("enabled","enabled");
        }else if(message.includes("space")){
            $("#book").attr("disabled","disabled");
        }else{
            $("#book").attr("disabled","disabled");
        }
    </script>

</body>

</html>
