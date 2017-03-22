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
	<link rel="shortcut icon" href="{{URL::to('images/rb_fav.png')}}">
	<!-- <link rel="stylesheet" href="{{URL::to('fonts/Raleway.css')}}" type="text/css"> -->
	<!-- Animate.css -->

	<link  rel="stylesheet" type="text/css" href="{{URL::to('css/mysite.css')}}"/>


 <!-- <link href="{{URL::to('css/style.css')}}" rel="stylesheet" type="text/css" />  --->


	<!-- Modernizr JS -->
	<!-- <link rel="manifest" href="{{URL::to('extension/manifest.json')}}"> -->
	@if( request()->url() == url('/') )
     <link rel="canonical" href="https://www.rupeeboss.com/" />
	@else
	     <link rel="canonical" href="{!! request()->fullUrl() !!}"  />
	@endif
	
	
<meta name="google-site-verification" content="GpnTKVcLtZQjKCKHXfeaOaQGDsxzCS3XLCkTwmd4STI" />
</head>
<body>
<div>
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-7">

	<ul class="mag-lnk">
	   <li class="bg-none white-bg"><a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo.png')}}" class="center"  alt="Rupeeboss.com " title="Rupeeboss.com " /></a></li>
	    <li><a href="{{URL::to('home-loan-transfer/home-loan')}}">HOME LOAN BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan-transfer/loan-against-property-loan')}}">LOAN AGAINST PROPERTY BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan-transfer/personal-loan')}}">PERSONAL LOAN BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('working-capital')}}">WORKING CAPITAL BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('apply-home-loan')}}">APPLY FOR HOME LOAN</a></li>
		<li><a href="{{URL::to('apply-personal-loan')}}">APPLY FOR PERSONAL LOAN</a></li>
		<li><a href="{{URL::to('apply-loan-against-property')}}">APPLY FOR LOAN AGAINST PROPERTY</a></li>
		<li><a href="{{URL::to('apply-car-loan')}}">APPLY FOR CAR LOAN</a></li>
		<li><a href="{{URL::to('apply-business-loan')}}">APPLY UNSECURED BUSINESS LOAN</a></li>
		<li><a href="{{URL::to('credit-card')}}">APPLY FOR CREDIT CARD</a></li>
		
	</ul>
</div>	
	
	
</div><!-- container -->

</div>
<video id="my-video" class="video" autoplay="autoplay" loop="loop">
  <source src="media/demo.mp4" type="video/mp4" />
  <source src="media/demo.ogv" type="video/ogg" />
  <source src="media/demo.webm" type="video/webm" />
  </video>
</body>
</html>



