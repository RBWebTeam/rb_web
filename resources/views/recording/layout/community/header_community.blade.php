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

	<!-- Editor -->
	<link href="{{URL::to('css/mysite.css')}}" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/0.9.2/trix.css">
  <script data-require="angularjs@1.4.4" data-semver="1.4.4" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/trix/0.9.2/trix.js"></script>
  <script src="{{URL::to('js/angular-trix.js')}}"></script> 
  <script src="{{URL::to('js/democtrl.js')}}"></script>
 

	</head>
	<body>
	<div id="fh5co-page"   >
	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="header-inner">
				<h1><a href="{{url('community')}}"><img src="{{URL::to('images/logo.png')}}" width="160" height="47" /></a></h1>
				<nav role="navigation">
					<ul>
						
						<li><a href="{{url('community/top_answer')}}">Top Answers</a></li>
						   <?php 
                          if (Session::has('email')){?>
                              
                               
                          	 <li><a href="{{url('community/question')}}">Ask Questions</a></li>
                              <li><a href="{{url('community/logout')}}"> Log out</a></li>

                          	  
                           <?php }else{ ?>

                              <li><a href="{{url('community/login/5001')}}">Ask Questions</a></li>
                 <?php }?>
						
						<!-- <li><a href="#">Credit Loan</a></li>
						<li><a href="#">Balance Transfer</a></li> -->

					   <li>
						<form action="{{url('community/search')}}" method="post">
						  {{ csrf_field() }}
                        <input type="text" name="search" id="tags12" class="search" placeholder="Search..">
                          </form>
                        </li>
                          
                         <?php  if (Session::has('email')){?>
                          	 <li><?php echo Session::get('name');?></li>
                           <?php } ?>

                        
					
					</ul>
				</nav>
			</div>
		</div>
	</header>
 



