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

@include('layout.modal')
	
	<!-- Side bar -->
	<div class="arrow-don">Hi &nbsp;<i class="icon-hand-stop-o"></i></div>
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
							<li><a href="#">Over Draft / cash Credit</a>
							
							</li>
							
							</li>
						</ul>
						</li>
						<li><a href="#">Retail Loan</a></li>
						<li><a href="#">Other Loan</a></li>
						<li><a href="#">Credit Loan</a></li>
						<li><a href="#">Balance Transfer</a></li>
						

							<?php if(Session::get('is_login')){
							?>
							<li class="user-ic dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user uicon hidden-xs hidden-sm"></i></a><span class="hidden-lg hidden-md">My Account&nbsp;</span><i class="icon-chevron-down"></i></a>
							
							<ul class="dropdown-menu" id='account'>
							    <li>
								<a href={{URL::to('logout')}}>logout</a>
								<a href="#">My Account</a>
								<a href="#">My credit score</a>
								<a href="{{URL::to('check_emi')}}">Emi calculator</a>
								<a href='#'>Applied loan</a>
								</li>
							</ul>
							</li>
						<?php }else{
							?>
						<!-- 	<li class="user-ic dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">Login</span></a>
							</li> -->


					<li class="user-ic dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#"> <i class="icon-user uicon hidden-xs hidden-sm"></i><span class="hidden-lg hidden-md">Login</span></a>
						 
						   <ul class="dropdown-menu" style="di">
						    <li>
							<a href="#" data-toggle="modal" data-target="#log_popup">Sign in</a>

							</ul>
					</li>


						<?php }
						?>
						
                        <!--- <li class="con-no">1800-267-629-6</li> - -->
					</ul>
				</nav>
			</div>
		</div>
	</header>






	<!--Header End -->
<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
         	
 </script>


  <!--  Durga pratap script login and registration -->
<script>
 
 function registration(){
         document.getElementById('login').style.display="none";
      document.getElementById('registration1').style.display="block";

 }
  
//  var flag=0;
// function passwordf(){

//    var pas=document.getElementById("password").value;
//    if(pas.length>5){
//      document.getElementById("errors").innerHTML="right";
//    }else{
//    	document.getElementById("errors").innerHTML="The password must be at least 6 characters";
//    }
// }


// function confirmp(){
        
//           var pas=document.getElementById("password").value;
//           var cpas=document.getElementById("password_confirm").value;

//             	  if(pas.length>5 && cpas.length>5){
//            if(pas==cpas){
//            	  document.getElementById("submit_btn").style.display="block";	
//            }else{
//            	   document.getElementById("errors").innerHTML="not match";
//            	    flag=1;
//            }
//        }else{
// document.getElementById("errors").innerHTML="The password must be at least 6 characters";
//  flag=1;

//         }

// }

// function validateForm(){
// 	console.log("form");
//  flag=0;
// passwordf();
// confirmp();
// alert(flag);


//    if(flag==1)
//       return false;
//         else
//          return true;
        

// }


  $(document).ready(function(){

     $("#login_").click(function(){
       var emails=$("#emails").val(); 
       var login_pass=$("#login_pass").val(); 
       var datring   =$("#_token").val(); 

           $.ajax({
               type:'POST',
               url:'{{url("login")}}',
               dataType:'json',
               data: {_token :datring,emails:emails,login_pass:login_pass},
               success:function(data){
            
                  var numb = data.data;
                  var numb1 = data.data1;
                    
                 // $("#msg").html(numb);	
               //  alert(numb1);


                         
               }
            });
              
          
     }); 
     

    

//     $("#register_form").click(function(){

//        var firstName=$("#firstName").val(); 
//        var email=$("#email").val(); 
//        var password=$("#password").val(); 
//        var password_confirm=$("#password_confirm").val(); 
//        var datring   =$("#_token").val(); 


// var re =/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
// if (email== '' || !re.test(email)){
//     alert('Please enter a valid email address.');
//     $("#emailerror").html("Please enter a valid email address");
//     return false;
// }else{
           
//            if(password.length>6 && password==password_confirm){
           
//           $.ajax({
//                type:'POST',
//                url:'{{url("registration")}}',
//               // dataType:'json',
//              data: {_token :datring,firstName:firstName,email:email,password:password},
//                success:function(data){
//                  var numb = data;
                  


                         
//                }
//             });

//       }else{

//            $("#msgreg").html("not match");
//       }

//   }

//     });


  });

</script> 









