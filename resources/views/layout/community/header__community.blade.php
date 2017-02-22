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
	<link href="{{URL::to('css/mysite.css')}}" rel="stylesheet" type="text/css" />
	<!-- <link href="{{URL::to('css/style.css')}}" rel="stylesheet" type="text/css" /> -->
	
	<!-- Modernizr JS -->
	<!-- <link rel="manifest" href="{{URL::to('extension/manifest.json')}}"> -->
	@if( request()->url() == url('/') )
     <link rel="canonical" href="https://www.rupeeboss.com/" />
	@else
	     <link rel="canonical" href="{!! request()->fullUrl() !!}"  />
	@endif

	

	</head>
	<body>
	<div class="arrow-don" title="Help Section"><i class="icon-phone"></i></div>
    <div class="sidebar displaynone">
    <ul>
        <li class="hide-dv"><a href="#"><i class="icon-arrow-left"></i>&nbsp;Hide</a></li>
         <li class="call-back callclass" data-toggle="modal" data-target="#myModal"><a href="#">Instant <br>Call Back</a></li>
       

    </ul>
    </div>
	<div id="fh5co-page"   >
	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="header-inner">
				<h1><a href="{{url('community')}}"><img src="{{URL::to('images/logo.png')}}" width="160" height="47" /></a></h1>
				<nav role="navigation">
					<ul>
						
					
						<li><a href="{{url('community/registration')}}">Registration</a></li>
						 
					
					</ul>
				</nav>
			</div>
		</div>
	</header>
	 