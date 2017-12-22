<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta name="theme-color" content="#ff0000">
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"> -->
	<title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan";  ?></title>
	<!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
	<meta name="msvalidate.01" content="3744048BDD61F7FE6837BD664522C8F9" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
	<meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "rupeeboss loans getloan expressloan"; ?>" />
	<meta name="p:domain_verify" content="05d8ec5b6a704fa5b78abd5f636fdc24"/>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo e(URL::to('images/rb_fav.png')); ?>">
	<!-- <link rel="stylesheet" href="<?php echo e(URL::to('fonts/Raleway.css')); ?>" type="text/css"> -->
	<!-- Animate.css -->

	<link  rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/mysite.css')); ?>"/>
<!-- <link  rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/style.css')); ?>"/> -->
<link  rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/home.css')); ?>"/>





 <link href="<?php echo e(URL::to('css/freshslider.min.css')); ?>" rel="stylesheet" type="text/css" /> 

	<!-- Modernizr JS -->
	<!-- <link rel="manifest" href="<?php echo e(URL::to('extension/manifest.json')); ?>"> -->
	<?php if( request()->url() == url('/') ): ?>
     <link rel="canonical" href="https://www.rupeeboss.com/" />
	<?php else: ?>
	     <link rel="canonical" href="<?php echo request()->fullUrl(); ?>"  />
	<?php endif; ?>
	
	
<meta name="google-site-verification" content="WX6V_57BIW9ttEdt8-lFFx9AWksmU0OzrSB8CqEW084" />
<script type="application/ld+json">
 { 
 "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Rupeeboss Financial Services Pvt Ltd",
 "url" : "http://www.rupeeboss.com/",
 "logo": "http://www.rupeeboss.com/images/logo.png",
 "email": "wecare@rupeeboss.com",
 "telephone": "1800-267-629-6",
 "sameAs" : [ 
 "https://www.facebook.com/rupeeboss",
 "https://www.linkedin.com/company/rupeeboss.com",
 "https://plus.google.com/113191059621763008376",
 "https://twitter.com/rupeeboss",
 "https://www.instagram.com/rupeeboss/"
 ]
 }

 </script>
 
	<body>
<!-- 	
<script async="async" type="text/javascript" src="https://app.tigerapi.com/rest/?i=MTQ5MjY4MDA2OA=="></script> -->
	<!-- Side bar -->
	<ul class="arrow-don">
	<li class="soc-ic-0"><div  title="Help Section"><i class="icon-phone"></i></div></li>

	<li class="soc-ic-1 soc"><a href="https://www.facebook.com/rupeeboss" target="_blank"><div  title="Facebook"><i class="icon-facebook"></i></div></a></li>
	<li class="soc-ic-2 soc"><a href="https://plus.google.com/113191059621763008376"target="_blank"><div  title="Google +"><i class="icon-google-plus"></i></div></a></li>
	<li class="soc-ic-3 soc"><a href="https://twitter.com/rupeeboss" target="_blank"><div  title="Twitter"><i class="icon-twitter"></i></div></a></li>
	<li class="soc-ic-4 soc"><a href="https://www.instagram.com/rupeeboss/" target="_blank"><div  title="Instagram"><i class="icon-instagram"></i></div></a></li>
	<li class="soc-ic-5 soc"><a href="https://www.linkedin.com/company/rupeeboss.com" target="_blank"><div  title="Linkedin"><i class="icon-linkedin"></i></div></a></li>
	</ul>
	
	
    <div class="sidebar displaynone">
    <ul>
        <li class="hide-dv"><a href="#"><i class="icon-arrow-left"></i>&nbsp;Hide</a></li>
         <li class="call-back callclass" data-toggle="modal" data-target="#myModal"><a href="#">Instant <br>Call Back</a></li>
         <!-- <li class="call-back1 callclass" data-toggle="modal" data-target="#myModal1"><a href="#">Talk to us</a></li>
         <li class="call-back2 callclass" data-toggle="modal" data-target="#myModal2"><a href="#">Email Us</a></li>
         <li class="call-back3 callclass" data-toggle="modal" data-target="#myModal3"><a href="#">Help</a></li>

         <li class="chat"><a href="#">Live Chat</a></li> - -->

    </ul>
    </div>
	
	
	<!-- Sidebar Popup Div Start -->
	<div id="fh5co-page"   >

	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
	 <div class="container-fluid top-bg">
        <div class="container">
         <div class="col-md-8">
            <ul class="top-lnk">
                <li class="hidden-xs"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
                <li class="hidden-xs"><a href="<?php echo e(URL::to('about-us')); ?>">About Us</a></li>
                <li class="hidden-xs"><a href="<?php echo e(URL::to('contact-us')); ?>">Contact Us</a></li>
				<!-- <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#emp_login">Employee Login </a></li> -->
				<!-- <li class="hidden-xs"><a href="<?php echo e(URL::to('rba-login')); ?>">RBA Login </a></li> -->
                <li class="hidden-xs"><a href="<?php echo e(URL::to('http://www.rupeeboss.com/rblife-style/')); ?>">RB Life Style</a></li>
                <li class="hidden-xs"><a href="<?php echo e(URL::to('http://www.rupeeboss.com/elite/')); ?>">Elite</a></li>
				<li class="hidden-lg"><a href="<?php echo e(URL::to('magic-link')); ?>">Magic Link </a></li>
				<li class="hidden-xs credit-score-btn"><a href="<?php echo e(URL::to('credit-report')); ?>" class="btn-primary">My Credit Score</a></li>
				
				</a></li>
			<!-- 	<li><a href="<?php echo e(URL::to('contact-us')); ?>">Media</a></li> -->
	            </ul>
               </div>
			<div class="col-md-4">      
            <ul class="nav-pills pull-right social-icon">

                <li><a href="<?php echo e(URL::to('https://twitter.com/rupeeboss')); ?>" title="Twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="<?php echo e(URL::to('https://www.facebook.com/rupeeboss')); ?>" title="Facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="<?php echo e(URL::to('https://www.linkedin.com/company/rupeeboss.com')); ?>" title="Linkedin"><i class="icon-linkedin"></i></a></li>
                <li><a href="<?php echo e(URL::to('https://plus.google.com/u/0/113191059621763008376')); ?>" title="GooglePlus"><i class="icon-google-plus"></i></a></li>
                <li><a href="<?php echo e(URL::to('https://www.instagram.com/rupeeboss/')); ?>" title="instagram"><i class="icon-instagram"></i></a></li>
                
                <li><a href="<?php echo e(URL::to('contact-us')); ?>">&nbsp;&nbsp;<i class="icon-phone"></i> 1800-267-629-6	</a></li>
                
              <li><a href="<?php echo e(URL::to('track-application')); ?>" style="color:#fff262;width:160px;font-size:14px;margin-top: -2px;position:absolute;"><i class="fa fa-map-marker md-btn" aria-hidden="true" data-toggle="tooltip" title="Track Application"></i> <span class="hidden-xs">Track Application</span>
            </ul>
          </div>
        </div>
    </div>
		<div class="container" id="refreshID">
			<div class="header-inner">
	<a href="<?php echo e(URL::to('/')); ?>" class="logo"><img src="<?php echo e(URL::to('images/logo.png')); ?>" alt="Rupeeboss.com " title="Rupeeboss.com " width="160" height="47" /></a>
				<nav role="navigation">
				  <ul>
                     <?php if(\Request::is('community/*') || \Request::is('community')): ?>
                             <li><a href="<?php echo e(url('community/top_answer')); ?>">Top Answers</a></li>
			         <?php if(Session::has('email')): ?>
                          	 <li><a href="<?php echo e(url('community/question')); ?>">Ask Questions</a></li>
                             <li><a href="<?php echo e(url('community/logout')); ?>"> Log out</a></li>
                     <?php else: ?>
                             <li><a href="<?php echo e(url('community/login/5001')); ?>">Ask Questions</a></li>
                     <?php endif; ?>
					         <li><form action="<?php echo e(url('community/search')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                              <input type="text" name="search" id="tags12" class="search" placeholder="Search.."></form></li>
                    <?php if(Session::has('email')): ?>
                          	 <li><?php echo Session::get('name');?></li>
                    <?php endif; ?>
                    <?php else: ?>

						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">SME Loan</a>
						 <ul class="dropdown-menu">
						     <li>
								<a href="<?php echo e(URL::to('business-loan')); ?>">Unsecured Business Loan</a>
								<a href="<?php echo e(URL::to('loan-against-property')); ?>">Loan Against Property</a>
								<a href="<?php echo e(URL::to('loan-against-property?commercial')); ?>">Commercial Property Purchase</a>
							</li>
							<li>
								<a href="<?php echo e(URL::to('loan-against-property?lease')); ?>">Lease Rent Discounting</a>
								<a href="<?php echo e(URL::to('sme-working-capital')); ?>">Working Capital</a>
								<a href="<?php echo e(URL::to('contact-us')); ?>">FCNR Loans</a>
								<a href="<?php echo e(URL::to('contact-us')); ?>">Debt Restructuring </a>
								<a href="<?php echo e(URL::to('contact-us')); ?>">Debt Syndication </a>
								<a href="<?php echo e(URL::to('contact-us')); ?>">Project Finance </a>
								
							<!-- <a href="<?php echo e(URL::to('sme-loan')); ?>">Export/Import Finance</a> -->
							</li>
							<!-- <li><a href="<?php echo e(URL::to('sme-loan')); ?>">Over Draft / Cash Credit</a> -->
							</li>
							</li>
						</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Retail Loan</a>
						<ul class="dropdown-menu">
						   <li>
								<a href="<?php echo e(URL::to('home-loan')); ?>">Home Loan</a>
								<a href="<?php echo e(URL::to('smart-home-loan')); ?>">Smart Home Loan</a>
								
								<a href="<?php echo e(URL::to('loan-against-property')); ?>">Loan Against Property</a>
								<a href="<?php echo e(URL::to('personal-loan')); ?>">Personal Loan</a>
								<a href="<?php echo e(URL::to('car-loan')); ?>">Car Loan</a>
								<a href="<?php echo e(URL::to('used-car-loan')); ?>">Used Car Loan </a>

						   </li>
						</ul>
						<li><a href="<?php echo e(URL::to('credit-card')); ?>">Credit Card</a></li>
						<!-- <li><a href="<?php echo e(URL::to('check_emi')); ?>">EMI Calculator</a></li> -->
						
						 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Balance Transfer</a>
						 
						 <ul class="dropdown-menu">
						    <li>
								<a href="<?php echo e(URL::to('balance-transfer',['id' => 'home-loan'])); ?>">Home Loan</a>
								<a href="<?php echo e(URL::to('balance-transfer',['id' => 'personal-loan'])); ?>">Personal Loan</a>
								<a href="<?php echo e(URL::to('balance-transfer',['id' => 'loan-against-property-loan'])); ?>">Loan Against Property</a>
								<a href="<?php echo e(URL::to('balance-transfer/working-capital')); ?>">Working Capital</a>
							</li>
							</ul>
							</li>

							<!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Calculators</a>
							<ul class="dropdown-menu">
							<li>
								<a href="<?php echo e(URL::to('check-emi')); ?>">EMI Calculator</a>
								<a href="<?php echo e(URL::to('check-emi')); ?>">Personal Loan Calculator</a>
								
								<a href="<?php echo e(URL::to('check-emi')); ?>">Home Loan Calculator</a>
								<a href="<?php echo e(URL::to('check-emi')); ?>">Business Loan Calculator</a>
								<a href="<?php echo e(URL::to('working-capital-emi-calculator')); ?>">Working capital calculator</a>
								<a href="<?php echo e(URL::to('check-emi')); ?>">Income Calculator</a>

						   </li>
							</ul>
							</li> -->	
							<li><a href="<?php echo e(URL::to('calculators')); ?>">Calculators</a></li>				   
					        <!-- </li> -->
							<!-- <li><a href="<?php echo e(URL::to('check_emi')); ?>">EMI Calculator</a></li> -->
							<?php if(Session::get('is_login')){
							?>
							<li class="user-ic dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#"><i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">My Account&nbsp;</span> <i class="icon-chevron-down"></i>
								</a>
									<ul class="dropdown-menu"  >
									    <li> 
										<a id="googleLOG" href=<?php echo e(URL::to('logout')); ?>>Logout</a>
										<a href="<?php echo e(url('profile')); ?>">My Profile</a>
										<a href="<?php echo e(URL::to('profile')); ?>?credit-score">My Credit Score</a>
										<a href="<?php echo e(url('profile')); ?>?my-quotes">My Quotes</a>
										<a href="<?php echo e(url('track-application')); ?>">Track Applications</a>
										</li>
									</ul>
							</li>
                          	 <li><?php echo Session::get('name');?></li>
                          	 <?php }else if(Session::get('otp_verified_credit_score')==1){
							?>
							<li class="user-ic dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#"><i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">My Account&nbsp;</span> <i class="icon-chevron-down"></i>
								</a>
									<ul class="dropdown-menu"  >
									    <li> 
										<a id="googleLOG" href=<?php echo e(URL::to('logout')); ?>>Logout</a>
										</li>
									</ul>
							</li>
                          	 <li><?php echo Session::get('contact');?></li><?php }else{?>
						<!-- 	<li class="user-ic dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">Login</span></a>
							</li> -->
					<li class="user-ic dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#"> <i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">Login</span></a>
							 <ul class="dropdown-menu" >
							    <li>
								<a href="#" data-toggle="modal" data-target="#log_popup">Sign in</a>
								</li>
							</ul>
					</li>
                         <?php } ?>
						 <?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>  
	








