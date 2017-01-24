<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan"; ?></title>
	<!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
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
	
	<!-- Side bar -->
	<div class="arrow-don" title="Help Section"><i class="icon-hand-stop-o"></i></div>
    <div class="sidebar" style="display:none;">
    <ul>
        <li class="hide-dv"><a href="#"><i class="icon-arrow-left"></i>&nbsp;Hide</a></li>
         <li class="call-back callclass" data-toggle="modal" data-target="#myModal"><a href="#">Instant <br>Call Back</a></li>
         <li class="call-back1 callclass" data-toggle="modal" data-target="#myModal1"><a href="#">Talk to us</a></li>
         <li class="call-back2 callclass" data-toggle="modal" data-target="#myModal2"><a href="#">Email Us</a></li>
         <li class="call-back3 callclass" data-toggle="modal" data-target="#myModal3"><a href="#">Help</a></li>

         <!-- <li class="chat"><a href="#">Live Chat</a></li> --->

    </ul>
    </div>
	
	
	<!-- Sidebar Popup Div Start -->
	<div id="fh5co-page"   >

	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
	 <div class="container-fluid top-bg">
        <div class="container">
         <div class="col-md-8">
            <ul class="top-lnk">
                <li class="hidden-xs"><a href="{{URL::to('/')}}">Home</a></li>
                <li class="hidden-xs"><a href="{{URL::to('about-us')}}">About Us</a></li>
                <li class="hidden-xs"><a href="{{URL::to('contact-us')}}">Contact Us</a></li>
				<li class="hidden-xs"><a href="{{URL::to('http://erp.rupeeboss.com/')}}">Employee Login </a></li>
				<li><a href="#" class="btn btn-primary">My Credit Score</a></li>
				<!-- <li><a href="{{URL::to('contact-us')}}">RBA Login </a></li>
				<li><a href="{{URL::to('contact-us')}}">Media</a></li> -->
	            </ul>
               </div>
			<div class="col-md-4">      
            <ul class="nav-pills pull-right social-icon">

                <li><a href="{{URL::to('https://twitter.com/rupeeboss')}}" title="Twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="{{URL::to('https://www.facebook.com/rupeeboss')}}" title="Facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="{{URL::to('https://plus.google.com/112574970643410375765')}}" title="GooglePlus"><i class="icon-google-plus"></i></a></li>
                <!-- <li><a href="#" title="instagram"><i class="icon-instagram"></i></a></li> -->
                <li><a href="{{URL::to('contact-us')}}"><i class="icon-phone"></i> 1800-267-629-6	</a></li>

            </ul>
          </div>
        </div>
    </div>
		<div class="container" id="refreshID">
			<div class="header-inner">
				<h1><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}" width="160" height="47" /></a></h1>
				<nav role="navigation">
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">SME Loan</a>
						 
						 <ul class="dropdown-menu">
						    <li>
							<a href="{{URL::to('sme-loan')}}">Unsecured Business Loan</a>
							<a href="{{URL::to('loan-against-property')}}">Loan Against Property</a>
							<a href="{{URL::to('sme-loan')}}">Commercial Property Purchase</a>
							</li>
							<li>
							<a href="{{URL::to('sme-loan')}}">Lease Rent Discounting</a>
							<a href="{{URL::to('sme-loan')}}">Working Capital</a>
							<a href="{{URL::to('sme-loan')}}">Export/Import Finance</a>
						
							</li>
							<li><a href="{{URL::to('sme-loan')}}">Over Draft / Cash Credit</a>
							
							</li>
							
							</li>
						</ul>
						</li>

						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Retail Loan</a>

						<ul class="dropdown-menu">
						<li>
							<a href="{{URL::to('home-loan')}}">Home Loan</a>
							<a href="{{URL::to('loan-against-property')}}">Loan Against Property</a>
							<a href="{{URL::to('personal-loan')}}">Personal Loan</a>
							<!-- <a href="{{URL::to('apply-car-loan')}}">Car Loan</a> -->

						</li>
							

						</ul>


						
						<li><a href="{{URL::to('credit-card')}}">Credit Card</a></li>
						
						 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Balance Transfer</a>
						 
						 <ul class="dropdown-menu">
						    <li>
							<a href="{{URL::to('home-loan-transfer',['id' => 'home-loan'])}}">Home Loan</a>
							<a href="{{URL::to('home-loan-transfer',['id' => 'personal-loan'])}}">Personal Loan</a>
							<a href="{{URL::to('home-loan-transfer',['id' => 'loan-against-property-loan'])}}">Loan Against Property</a>
							</li>
							</ul>					   
					        </li>
							


							<?php if(Session::get('is_login')){
							?>
							<li class="user-ic dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#"><i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">My Account&nbsp;</span> <i class="icon-chevron-down"></i></a>
							
							<ul class="dropdown-menu"  >
							    <li> 
								<a id="googleLOG" href={{URL::to('logout')}}>Logout</a>
								<a href="{{url('profile')}}">My Profile</a>
								<a href="{{URL::to('profile')}}?credit-score">My Credit Score</a>
								<a href="{{url('profile')}}?my-quotes">My Quotes</a>
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
	








