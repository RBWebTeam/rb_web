<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
	<meta name="keywords" content="" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{URL::to('images/rb_fav.png')}}">
	<link rel="stylesheet" href="{{URL::to('fonts/Raleway.css')}}" type="text/css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{URL::to('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{URL::to('css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{URL::to('css/flexslider.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{URL::to('css/style.css')}}"> 
    <!-- Chatbox  -->
	<link rel="stylesheet" href="{{URL::to('css/chatbox.css')}}">
	<!-- Modernizr JS -->
	</head>
	<body>

	<!-- Side bar -->
	<div class="arrow-don" style="display:none;">Hi &nbsp;<i class="icon-hand-stop-o"></i></div>
    <div class="sidebar">
    <ul>
        <li class="hide-dv"><a href="#"><i class="icon-arrow-left"></i>&nbsp;Hide</a></li>
         <li class="call-back" data-toggle="modal" data-target="#myModal"><a href="#">Instant <br>Call Back</a></li>
         <li class="call-back1" data-toggle="modal" data-target="#myModal1"><a href="#">Talk to us</a></li>
         <li class="call-back2" data-toggle="modal" data-target="#myModal2"><a href="#">Email Us</a></li>
         <li class="call-back3" data-toggle="modal" data-target="#myModal3"><a href="#">Help</a></li>
         <li class="chat"><a href="#">Live Chat</a></li>
    </ul>
    </div>
	<!---------------Sidebar Popup Div Start --------- -->
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="header-inner">
				<h1><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}" width="160" height="47" /></a></h1>
				<nav role="navigation">
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">SME Loan &nbsp;<i class="icon-chevron-down"></i></a>
						 
						 <ul class="dropdown-menu">
						    <li>
							<a href="#">Unsequenced Business Loan</a>
							<a href="#">Loan against Property</a>
							<a href="#">Commercial Property Purchase</a>
							</li>
							<li>
							<a href="#">Lease Rent Discounting</a>
							<a href="#">Working capital</a>
							<a href="#">Export/Import Finance</a>
						
							</li>
							<li><a href="#">Over Draft / cash Credit</a></li>
							
							</li>
						</ul>
						</li>
						<li><a href="#">Retail Loan</a></li>
						<li><a href="#">Other Loan</a></li>
						<li><a href="#">Credit Loan</a></li>
						<li><a href="#">Balance Transfer</a></li>
						<!--- <li class="cta"><a href="#">Apply For Loan</a></li>- -->
                        <!--- <li class="con-no">1800-267-629-6</li> - -->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-----------------------------Header End -------------------------------------- -->