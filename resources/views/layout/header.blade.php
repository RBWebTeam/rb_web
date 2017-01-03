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
	<!-- <link rel="manifest" href="{{URL::to('extension/manifest.json')}}"> -->
	</head>
	<body>
	<div class="hello">
	<!-- Side bar -->
	<div class="arrow-don">Hello &nbsp;<i class="icon-hand-stop-o"></i></div>
    <div class="sidebar" style="display:none;">
    <ul>
        <li class="hide-dv"><a href="#"><i class="icon-arrow-left"></i>&nbsp;Hide</a></li>
         <li class="call-back" data-toggle="modal" data-target="#myModal"><a href="#">Instant <br>Call Back</a></li>
         <li class="call-back1" data-toggle="modal" data-target="#myModal1"><a href="#">Talk to us</a></li>
         <li class="call-back2" data-toggle="modal" data-target="#myModal2"><a href="#">Email Us</a></li>
         <li class="call-back3" data-toggle="modal" data-target="#myModal3"><a href="#">Help</a></li>
         <li class="chat"><a href="#">Live Chat</a></li>
    </ul>
    </div>
	
	
	<!-- Sidebar Popup Div Start -->
	<div id="fh5co-page">

	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
	 <div class="container-fluid top-bg">
        <div class="container">

            <ul class="top-lnk">
                <li class="hidden-xs"><a href="{{URL::to('/')}}">Home</a></li>
                <li class="hidden-xs"><a href="{{URL::to('about-us')}}">About Us</a></li>
                <li class="hidden-xs"><a href="{{URL::to('contact-us')}}">Contact Us</a></li>
                
                
	            </ul>

            <ul class="nav-pills pull-right social-icon">

                <li><a href="{{URL::to('https://twitter.com/rupeeboss')}}" title="Twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="{{URL::to('https://www.facebook.com/rupeeboss')}}" title="Facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="{{URL::to('https://plus.google.com/112574970643410375765')}}" title="GooglePlus"><i class="icon-google-plus"></i></a></li>
                <li><a href="#" title="instagram"><i class="icon-instagram"></i></a></li>
                <li><a href="{{URL::to('contact-us')}}"><i class="icon-phone"></i> 1800-267-629-6	</a></li>

            </ul>

        </div>
    </div>
		<div class="container">
			<div class="header-inner">
				<h1><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}" width="160" height="47" /></a></h1>
				<nav role="navigation">
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">SME Loan &nbsp;<i class="icon-chevron-down"></i></a>
						 
						 <ul class="dropdown-menu">
						    <li>
							<a href="{{URL::to('apply-sme-loan')}}">Unsecured Business Loan</a>
							<a href="{{URL::to('apply-sme-loan')}}">Loan Against Property</a>
							<a href="{{URL::to('apply-sme-loan')}}">Commercial Property Purchase</a>
							</li>
							<li>
							<a href="{{URL::to('apply-sme-loan')}}">Lease Rent Discounting</a>
							<a href="{{URL::to('apply-sme-loan')}}">Working Capital</a>
							<a href="{{URL::to('apply-sme-loan')}}">Export/Import Finance</a>
						
							</li>
							<li><a href="{{URL::to('apply-sme-loan')}}">Over Draft / Cash Credit</a>
							
							</li>
							
							</li>
						</ul>
						</li>
						
						<li><a href="{{URL::to('contact-us')}}">Credit Card</a></li>
						<!-- <li><a href="#">Balance Transfer</a></li> -->
						<li><a href="{{URL::to('home-loan-transfer')}}">Balance Transfer</a></li>						

							<?php if(Session::get('is_login')){
							?>
							<li class="user-ic dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user uicon hidden-xs hidden-sm"></i></a><span class="hidden-lg hidden-md">My Account&nbsp;</span><i class="icon-chevron-down"></i></a>
							
							<ul class="dropdown-menu" id='account'>
							    <li>
								<a href={{URL::to('logout')}}>Logout</a>
								<a href="{{url('profile')}}">My Profile</a>
								<a href="#">My Account</a>
								<a href="#">My Credit Score</a>
								<a href='#'>Applied loan</a>
								</li>
							</ul>
							</li>

                          	 <li><?php echo Session::get('name');?></li>
                        
						<?php }else{
							?>
						<!-- 	<li class="user-ic dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">Login</span></a>
							</li> -->


					<li class="user-ic dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#"> <i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">Login</span></a>
						 
						   <ul class="dropdown-menu" >
						    <li>
							<a href="#" data-toggle="modal" data-target="#log_popup">Sign in</a>
							</li>
							</ul>
					</li>
                         <?php }	?>
						
                        <!--- <li class="con-no">1800-267-629-6</li> - -->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	








