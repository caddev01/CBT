<?php require_once("includes/session.php"); ?>
<?php require_once("includes/credentials.php"); ?>
<?php 
   if(logged_in()){header("location: dashboard.php"); }
?>
<?php 
  $connection =  new mysqli($db_host,$db_username, $db_password, $db_database);
  $link = mysqli_connect($db_host,$db_username, $db_password, $db_database);
?>

<?php 
if(isset($_POST['submit'])){
 $uname = $_POST["name"];
 $pwd = $_POST["password"];

  $query = "SELECT *FROM admin WHERE uname='{$uname}' AND pwd='{$pwd}' ";
  $query .="LIMIT 1";
  $results = mysqli_query($link, $query);
  $rows = mysqli_num_rows($results);
  $row = mysqli_fetch_array($results);
  if($rows ==1){
  	//found user
  	//echo $row['uname'];
  $_SESSION['uname']= $row['uname'];
     if(isset($_SESSION['uname'])){
		   header("location: dashboard.php");
   	       //echo "Result set";
	   }else{echo "Wrong details";}
	  }
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Teaching an Education School Category Flat Bootstrap Responsive Website Template | Mail Us :: w3layouts</title>
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
								<li><a href="services.html" class="hvr-bounce-to-bottom">Services</a></li>
								<li><a href="portfolio.html" class="hvr-bounce-to-bottom">Portfolio</a></li>
								<li><a href="short-codes.html" class="hvr-bounce-to-bottom">Short Codes</a></li>
								<li class="active"><a href="mail.html">Mail Us</a></li>
							</ul>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3 class="head head2">C<span>Login to <i>your admin</i></span></h3>
			<div class="agileits_mail_grids">
				<div class="col-md-5 agileits_mail_grid_left">
					<div class="agileits_mail_grid_lft_grid">
						<h4>Integer venenatis massa lobortis porta</h4>
						<ul>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Nulla nec facilisis turpis ac</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Eget ornare ex nisl nec lacus</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Ut tortor augue, placerat massa</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Quisque consectetur sagittis</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Curabitur mollis dignissim erat</li>
						</ul>
					</div>
					<div class="agileits_mail_grid_lft_grid1">
						<h4><span>Twitter</span> Posts</h4>
						<ul>
							<li><a href="mailto:info@example.com">@Mark Lii</a> consequat dui id turpis
								<a href="#">http://kjkjdu.com</a>auctor tellus eu nisi vehicula consequat.</li>
							<li><a href="mailto:info@example.com">@Henry Paul</a> sit amet elementum dolor
								<a href="#">http://ujkjyew.com</a>porttitor suscipit orci semper, bibendum.</li>
							<li><a href="mailto:info@example.com">@John Carl</a> augue diam consequat mi
								<a href="#">http://tellus.com</a>facilisis vitae, euismod vitae orci consequat.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 agileits_mail_grid_right">
					<div class="agileits_mail_grid_right1">
<!--php starts here -->
 	
						<form action="admin_login.php" method="POST">
							<span>
								<i>Username</i>
								<input type="text" name="name" placeholder=" " value="">
							</span>
							<span><i>Password</i>
							<input type="password" name="password" placeholder=" " value="">
							</span>
							
							<input type="submit" name="submit" value="Login">
							<input type="submit" name="submit" value="Create account">

						</form>
</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_mail_grids1">
				<h4>Our Branches</h4>
				<div class="col-md-4 agileits_mail_grids1_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24198.114028131447!2d-73.71929096044927!3d40.701189400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c263af79029215%3A0x2f3dd94700e16099!2sElmont+Union+Free+School!5e0!3m2!1sen!2sin!4v1469878776668"></iframe>
				</div>
				<div class="col-md-4 agileits_mail_grids1_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3224205.7175991116!2d-119.40173469419155!3d37.89213840751937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sschool+in+Nevada%2C+United+States!5e0!3m2!1sen!2sin!4v1469878984811"></iframe>
				</div>
				<div class="col-md-4 agileits_mail_grids1_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3225689.8916453766!2d-119.4018645668692!3d37.85823635085354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sschool+in+California%2C+United+States!5e0!3m2!1sen!2sin!4v1469879031059"></iframe>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->
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
<?php 
 mysqli_close($connection);
?>                      
<