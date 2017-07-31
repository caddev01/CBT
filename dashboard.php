<?php require_once("includes/session.php"); ?>
<?php  
    confirm_logged_in();
?>

<!DOCTYPE html>
<html>
<head>
<title>Teaching an Education School Category Flat Bootstrap Responsive Website Template | Services :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Teaching Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html"><span>T</span>eaching</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--shylock">
							<div class="agileinfo_social_icons">
								<ul class="agileinfo_social_icons1">
									<li><a href="#" class="facebook"></a></li>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="google"></a></li>
									<li><a href="#" class="pinterest"></a></li>
								</ul>
							</div>
							<ul class="nav navbar-nav">
								<li><a href="index.html" class="hvr-bounce-to-bottom">Home</a></li>
								<li class="active"><a href="services.html">Admin</a></li>
								<li><a href="portfolio.html" class="hvr-bounce-to-bottom">Portfolio</a></li>
								<li><a href="short-codes.html" class="hvr-bounce-to-bottom">Short Codes</a></li>
								<li><a href="logout.php" class="hvr-bounce-to-bottom">Logout</a></li>
							</ul>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="head head_services">S<span>
              <?php echo $_SESSION['uname']."'s"; ?>
 <i>Admin</i>   
			 </span></h3>
			<div class="agileinfo_services_grids">
				<div class="col-md-4 agileinfo_services_grid">
					<a href="nav_class.php"><div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						<h4>Class</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div></a>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<a href="nav_student.php">
					<div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
						<h4>Student</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div></a>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<a href="nav_teacher.php"><div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-link" aria-hidden="true"></span>
						<h4>Teacher</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div></a>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<a href="nav_subject.php"><div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>
						<h4>Subject</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div></a>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<a href="nav_questions.php"><div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
						<h4>Questions</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div></a>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<a href="nav_result.php"><div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
						<h4>Results</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div></a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="col-md-6 w3agile_services_bottom_grid">
			</div>
			<div class="col-md-6 w3agile_services_bottom_grid">
				<h3>Integer venenatis massa lobortis porta ultricies nulla nec facilisis turpis</h3>
				<p>Etiam sit amet porta lectus, in convallis sapien. Nam quis erat lorem. 
					Nullam bibendum nisi eu fringilla vulputate. Fusce non ligula vel sapien 
					blandit cursus.</p>
				<div class="more">
					<a href="mail.html" class="hvr-bounce-to-bottom">Mail Us</a>
				</div>
			</div>
		</div>
	</div>
<!-- //services-bottom -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-7 w3ls_newsletter_left">
				<h3>N<span>Subscribe to our newsletter</span></h3>
				<p>Suspendisse lacinia rutrum tincidunt.</p>
			</div>
			<div class="col-md-5 w3ls_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 w3l_footer_grid">
				<h2><a href="index.html"><span>T</span>eaching</a></h2>
				<p>Vestibulum sed convallis massa, eu aliquet massa. Suspendisse 
					lacinia rutrum tincidunt. Integer id erat porta, convallis tortor a, 
					ullamcorper magna.</p>
			</div>
			<div class="col-md-3 w3l_footer_grid">
				<h3>Address</h3>
				<ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
				</ul>
			</div>
			<div class="col-md-2 w3l_footer_grid">
				<h3>Navigation</h3>
				<ul class="agileinfo_footer_grid_nav">
					<li><a href="services.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Services</a></li>
					<li><a href="portfolio.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Portfolio</a></li>
					<li><a href="short-codes.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Short Codes</a></li>
					<li><a href="mail.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3l_footer_grid">
				<h3>Social Media</h3>
				<ul class="agileinfo_social_icons1 agileinfo_social">
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="google"></a></li>
					<li><a href="#" class="pinterest"></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2016 Teaching. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>