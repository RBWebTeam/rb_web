<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan"; ?></title>
	<!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
	<meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "rupeeboss loans getloan expressloan"; ?>" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo e(URL::to('images/rb_fav.png')); ?>">
	<!-- <link rel="stylesheet" href="<?php echo e(URL::to('fonts/Raleway.css')); ?>" type="text/css"> -->
	<!-- Animate.css -->

	<link  rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/mysite.css')); ?>"/>

	<!-- Modernizr JS -->
	<!-- <link rel="manifest" href="<?php echo e(URL::to('extension/manifest.json')); ?>"> -->
	<?php if( request()->url() == url('/') ): ?>
     <link rel="canonical" href="https://www.rupeeboss.com/" />
	<?php else: ?>
	     <link rel="canonical" href="<?php echo request()->fullUrl(); ?>"  />
	<?php endif; ?>
	
	
<meta name="google-site-verification" content="GpnTKVcLtZQjKCKHXfeaOaQGDsxzCS3XLCkTwmd4STI" />
</head>
<body>
<div class="star">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-7">

	<ul class="mag-lnk">
	   <li class="bg-none white-bg"><a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::to('images/logo.png')); ?>" class="center"  alt="Rupeeboss.com " title="Rupeeboss.com " /></a></li>
	    <li><a href="<?php echo e(URL::to('home-loan-transfer/home-loan')); ?>">HOME LOAN BALANCE TRANSFER</a></li>
		<li><a href="<?php echo e(URL::to('home-loan-transfer/loan-against-property-loan')); ?>">LOAN AGAINST PROPERTY BALANCE TRANSFER</a></li>
		<li><a href="<?php echo e(URL::to('home-loan-transfer/personal-loan')); ?>">PERSONAL LOAN BALANCE TRANSFER</a></li>
		<li><a href="<?php echo e(URL::to('working-capital')); ?>">WORKING CAPITAL BALANCE TRANSFER</a></li>
		<li><a href="<?php echo e(URL::to('new-home-loan')); ?>">APPLY FOR HOME LOAN</a></li>
		<li><a href="<?php echo e(URL::to('new-personal-loan')); ?>">APPLY FOR PERSONAL LOAN</a></li>
		<li><a href="<?php echo e(URL::to('new-loan-against-property')); ?>">APPLY FOR LOAN AGAINST PROPERTY</a></li>
		<li><a href="<?php echo e(URL::to('new-car-loan')); ?>">APPLY FOR CAR LOAN</a></li>
		<li><a href="<?php echo e(URL::to('new-business-loan')); ?>">APPLY FOR UNSECURED BUSINESS LOAN</a></li>
		<li><a href="<?php echo e(URL::to('credit-card')); ?>">APPLY FOR CREDIT CARD</a></li>
		
	</ul>
</div>	
	
	
</div><!-- container -->

</div>
<video id="my-video" class="video" autoplay="autoplay" loop="loop" style="display:none;">
  <source src="media/demo.mp4" type="video/mp4" />
  <source src="media/demo.ogv" type="video/ogg" />
  </video>
</body>
</html>



