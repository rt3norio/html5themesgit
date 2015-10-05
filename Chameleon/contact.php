<?php
// Free Bootstrap Themes : www.365bootstrap.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365Bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365Bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">

    <title>Chameleon | 365Bootstrap.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slider.css"><!--  Resource style -->
	<link rel="stylesheet" href="css/shake.css"> <!-- Resource style -->
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<h3 class="visible-xs">Chameleon</h3>
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nav-welcome">Welcome</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#nav-news">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nav-evolution">Evolution</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#nav-collection">Collection</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#nav-contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->
	<header>
		<div class="col-lg-12">
			<div class="clearfix">
				<div class="cd-slider-wrapper cd-container">
					<ul class="cd-slider">
						<li>
							<div class="cd-item">
								<div class="ch-grid">
									<div class="ch-item ch-img-1">
									</div>
								</div>
								<ul class="cd-item-info">
									<li><h2 class="shake shake-constant hover-stop">SNAKES</h2></li>
								</ul>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="#" class="btn btn-1">MORE</a>
						</li>
						<li>
							<div class="cd-item">
								<div class="ch-grid">
									<div class="ch-item ch-img-2">
									</div>
								</div>
								<ul class="cd-item-info">
									<li><h2 class="shake shake-constant hover-stop">LIZARDS</h2></li>
								</ul>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
							<a href="#" class="btn btn-1">MORE</a>
						</li>
						<li>
							<div class="cd-item">
								<div class="ch-grid">
									<div class="ch-item ch-img-3">
									</div>
								</div>
								<ul class="cd-item-info">
									<li><h2 class="shake shake-constant hover-stop">TURTLES</h2></li>
								</ul>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
							<a href="#" class="btn btn-1">MORE</a>
						</li>
						<li>
							<div class="cd-item">
								<div class="ch-grid">
									<div class="ch-item ch-img-4">
									</div>
								</div>
								<ul class="cd-item-info">
									<li><h2 class="shake shake-constant hover-stop">FROGS</h2></li>
								</ul>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
							<a href="#" class="btn btn-1">MORE</a>
						</li>
					</ul> <!-- cd-testimonials -->
				</div> <!-- cd-testimonials-wrapper -->
			</div>
		</div>
    </header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="sub-page">
		<div class="container">
			<div class="row">
				<div class="message">
					<div class="wrap">
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<div class="back"><a href="index.html" type="button" class="btn btn-primary"><<< Back to HomePage</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="grass"><img src="images/grass-background.png" /></div>
		<div class="chameleon"><img src="images/black-reptile.png" /></div>
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6" style="border-right: 1px solid #ddd">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					</div>
					<div class="col-md-6">
						<ul class="list-inline">
							<li><a href="#" class="shake"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="shake"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="shake"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="shake"><i class="fa fa-google"></i></a></li>
							<li><a href="#" class="shake"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-footer">
			<div class="container">
				<div class="wrap-footer-bg">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-footer footer-1">
							<div class="heading"><h4>Your Email</h4></div>
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Consectetuer adipiscing elit, dolore magna aliquam erat volutpat. </p>
								<div class="subcribe-form" >
									<form method="get" action="/search" id="subcribe">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subcribe" placeholder="Enter your email address...  " required="required" />
										</div>
										<button type="submit" name="Submit" class="btn btn-4 pull-left">Subcribe</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-footer footer-2">
							<div class="row">
								<div class="col-xs-6">
									<a href="#"><img src="images/15.jpg" /></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><img src="images/16.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<a href="#"><img src="images/17.jpg" /></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><img src="images/18.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<a href="#"><img src="images/19.jpg" /></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><img src="images/20.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<a href="#"><img src="images/21.jpg" /></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><img src="images/18.jpg" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						Copyright &copy; Your Website <br/><a href="http://www.365bootstrap.com" rel="nofollow" target="_blank">Bootstrap Themes</a> by 365Bootstrap.com
					</div>
					<div class="col-md-6">
						<ul class="list-inline">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->



<!-- jQuery -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<!-- Animated Top -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

</body>
</html>