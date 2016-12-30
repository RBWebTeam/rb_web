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
@include('layout.login_modal')
<script>
 function registration(){
         document.getElementById('login').style.display="none";
        document.getElementById('registration1').style.display="block";

 }

 function backf(){

document.getElementById('login').style.display="block";
 document.getElementById('registration1').style.display="none";

 }
</script>
	
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
    <div class="tp-dwn"><img src="images/callback-icon.png"/></div>
	<div class="sidebar1" style="display:none;">
    	<div class="">
	   <div class="form-in">
            
             <span class="head-2">Compare, Research & Buy<span>
             
             <form class="" id="compareform" role="form" method="POST" action="customer_form.php">
				  <div class="form-group">
				  
				    <div>
				
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required class="clr-ddd" />
                 
				    </div>
				  </div>
			<div class="form-group">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Contact" class="clr-ddd">
		    </div>
		  </div>
				  <div class="form-group">
				   
				    <div class=""> 
				  
				       <select name="sell" class="form-control" id="sell" required>
				         @foreach($city as $city_name)
				       <option value="{{ $city_name->City_Id }}" data-state="{{$city_name->state_id}}"><span style="color: gray;font-family: bold; ">{{ $city_name->City_Name }}</span></option>

						@endforeach
					</select>


				    </div>
				  </div>
			  <div class="form-group">
			   
			    <div class=""> 
			      <select class="form-control" name="prod" id="prod" required>
			      @foreach($loan as $product)
			        <option value="{{$product->Product_Id}}"><span style="color: gray;font-family: bold; ">{{$product->Product_Name}}</span></option>
			        @endforeach
			      </select>
			    </div>
			  </div>
			  
			  <div class="form-group centr-obj"> 
			    
			     <button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
			   
			  </div>
			</form>
		</div>
	</div>
    </div>
	<!---------------Sidebar Popup Div Start --------- -->
	<div id="fh5co-page">

	<header id="fh5co-header" role="banner" class="navbar navbar-default navbar-fixed-top">
	 <div class="container-fluid top-bg">
        <div class="container">

            <ul class="top-lnk">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Careers</a></li>
                
            </ul>

            <ul class="nav-pills pull-right social-icon">
                <li><a href="#" title="Facebook"><i class="icon-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-google-plus"></i></a></li>
                <li><a href="#" title="instagram"><i class="icon-instagram"></i></a></li>
                <li><a href=""><i class="icon-phone"></i> 1800-267-629-6</a></li>
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
							<a href="#">Unsecured Business Loan</a>
							<a href="#">Loan Against Property</a>
							<a href="#">Commercial Property Purchase</a>
							</li>
							<li>
							<a href="#">Lease Rent Discounting</a>
							<a href="#">Working Capital</a>
							<a href="#">Export/Import Finance</a>
						
							</li>
							<li><a href="#">Over Draft / Cash Credit</a>
							
							</li>
							
							</li>
						</ul>
						</li>
						
						<li><a href="#">Credit Card</a></li>
						<!-- <li><a href="#">Balance Transfer</a></li> -->
						<li><a href="{{URL::to('home-loan-transfer')}}">Balance Transfer</a></li>						

							<?php if(Session::get('is_login')){
							?>
							<li class="user-ic dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user uicon hidden-xs hidden-sm"></i></a><span class="hidden-lg hidden-md">My Account&nbsp;</span><i class="icon-chevron-down"></i></a>
							
							<ul class="dropdown-menu" id='account'>
							    <li>
								<a href={{URL::to('logout')}}>logout</a>
								<a href="{{url('profile')}}">My Profile</a>
								<a href="#">My Account</a>
								<a href="#">My credit score</a>
								<a href="{{URL::to('check_emi')}}">Emi calculator</a>
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

							</ul>
					</li>
                         <?php }	?>
						
                        <!--- <li class="con-no">1800-267-629-6</li> - -->
					</ul>
				</nav>
			</div>
		</div>
	</header>









