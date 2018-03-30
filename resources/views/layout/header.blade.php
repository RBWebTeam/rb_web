<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title><?php if(isset($title))echo $title; else echo "Compare & Apply for Loans, Credit Cards and Balance Transfer Services.";  ?></title>
    <meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loan & Credit Card"; ?>" />
  <meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "loans, payday loan,low interest loans, bad credit loan, online loan, instant loan approval"; ?>" />
   
    <!-- Bootstrap -->
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/fontello.css')}}" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/animsition.min.css')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="{{URL::to('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/owl.theme.css')}}" rel="stylesheet">
    <link rel="icon" href="images/rb_fav.png" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


  
<!-- scrolling -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<link rel="stylesheet" href="{{URL::to('css/iziModal.min.css')}}">
<link rel="stylesheet" href="{{URL::to('css/icons.css?v=1')}}">

</head>

<body class="">
    
    <div class="header-transparent navbar-fixed-top">
         <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    
                    <div class="logo">
                        <a href="{{URL::to('/')}}"><img src="{{URL::to('images/logo-rupee-boss.png')}}" alt="Rupeeboss"></a>
                    </div>
                </div>
                
               
                    <div class="col-md-10 col-sm-6 col-xs-6 text-right">
                    <div class="header-action">
                        <a href="{{URL::to('equifax-verification')}}" class="btn btn-credit" style="padding:14px 12px">Free Credit Report</a>
                        <a href="{{URL::to('contact-us')}}" class="btn btn-default hide-btn" style="padding:14px 13px">Expert Assistance</a>
            
            <a class="hidden-lg top-ic top-ic1" title="Free Credit Report"  href="{{URL::to('equifax-verification')}}"><i class="fa fa-tachometer"></i></a>
            <a class="hidden-lg top-ic" title="Expert Assistance"  href="{{URL::to('contact-us')}}"><i class="fa fa-phone"></i></a>
                        <a class="search-btn-2 search-btn2 login-submit"  href="#" style="text-align: center; width: 45px; height: 45px; padding: 7px; display: inline-block; vertical-align:bottom"><i style="font-size: 30px;" class="fa fa-user"></i><span class="tooltiptext">Sign In</span></a>
                       
                        <!-- <button id="login_submit" class="form-control btn btn-log login-submit ">Login</button> -->
                                               
                    </div>
                </div>
                
            </div>
        </div>
                <div class="navigation-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="navigation">
                       
                        <ul>
                            <li ><a href="#" class="animsition-link">SME Loan</a>
                                <ul>
                                    <li><a href="{{URL::to('business-loan')}}" class="animsition-link">Unsecured Business Loan</a></li>
                                    <li><a href="{{URL::to('loan-against-property')}}" class="animsition-link">Loan Against Property</a></li>
                                    <li><a href="{{URL::to('loan-against-property?commercial')}}" class="animsition-link">Commercial Property Purchase</a></li>
                                    <li><a href="{{URL::to('loan-against-property')}}" class="animsition-link">Lease Rent Discounting</a></li>
                                    <li><a href="{{URL::to('sme-working-capital')}}" class="animsition-link">Working Capital</a></li>
                                    <li><a href="{{URL::to('contact-us')}}" class="animsition-link">FCNR Loans</a></li>
                                    <li><a href="{{URL::to('contact-us')}}" class="animsition-link">Debt Restructuring</a></li>
                                    <li><a href="{{URL::to('contact-us')}}" class="animsition-link">Debt Syndication</a></li>
                                    <li><a href="{{URL::to('contact-us')}}" class="animsition-link">Project Finance</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="animsition-link">Retail Loan</a>
                                <ul>
                                    <li><a href="{{URL::to('home-loan')}}" class="animsition-link">Home Loan</a></li>
                                    <li><a href="{{URL::to('smart-home-loan')}}" class="animsition-link">Smart Home Loan</a></li>
                                    <li><a href="{{URL::to('loan-against-property')}}" class="animsition-link">Loan Against Property</a></li>
                                    <li><a href="{{URL::to('personal-loan')}}" class="animsition-link">Personal Loan</a></li>
                                    <li><a href="{{URL::to('car-loan')}}" class="animsition-link">Car Loan</a></li>
                                    <li><a href="{{URL::to('sme-working-capital')}}" class="animsition-link">Working Capital</a></li>
                                    <li><a href="{{URL::to('used-car-loan')}}" class="animsition-link">Used Car Loan</a></li>
                                </ul>
                            </li>
                            <li><a href="{{URL::to('credit-card')}}">Credit Card</a></li>
                            <li class="active"><a class="animsition-link">Balance Transfer</a>
                                <ul>
                                    <li><a href="{{URL::to('balance-transfer',['id' => 'home-loan'])}}" class="animsition-link">Home Loan</a></li>
                                    <li><a href="{{URL::to('balance-transfer',['id' => 'personal-loan'])}}" class="animsition-link">Personal Loan</a></li>
                                    <li><a href="{{URL::to('balance-transfer',['id' => 'loan-against-property-loan'])}}" class="animsition-link">Loan Against Property</a></li>
                                    <li><a href="{{URL::to('coming-soon')}}" class="animsition-link">Working Capital</a></li>
                                    
                                </ul>
                            </li>
                            <li ><a href="{{URL::to('calculators')}}" class="animsition-link">Calculators</a></li>

                            <li><a href="{{URL::to('track-application')}}" class="animsition-link">Track Application</a></li>
                        </ul>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <!--<h1 class="page-title">Retail Loan - Car Loan</h1>-->
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
    </div>



  <!-- Modal  Sign in-->
  <div class="modal fade" id="log_popup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
         <div class="modal-content">
          <div id="login">
             <!-- login-->
         
      <div class="modal-body login-modal">  
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <br>
       <div class="panel pan-log">
          <div class="panel-heading">
            <div class="row" id="forgot-password-hide">

              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <div class="row displaynone" id="forgot-password-show">
              <div class="col-xs-6">
                <h3>Forgot Password</h3>
              </div>
            </div>
            <hr>
          </div>

          <a type="button" style="background-color: #3D5A98; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://facebook.com" target="_blank" class="ui-link"><strong>With Facebook</strong></a>

             <a type="button" style="background-color: #ed1c24; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://gmail.com" target="_blank" class="ui-link"><strong>With Google Plus</strong></a>

             <br /><br />
            <h4>OR</h4>


          <div class="panel-body">
            <div class="row">
              <div class="col-lg-6">
            <form class="login-form block" name="login_form" id="login_form"  method="post" >                   {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="email_login" id="email_login" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                     <div class="form-group">
                    <input type="password" name="login_pass" id="login_pass" tabindex="2" class="form-control" placeholder="Password">
                    <span id="msg" class="error-msg"></span>
                  </div>
                      
                
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                         <!--  <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a> -->
                           <a href="#" id="forgot-form-link">Forgot password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                            <button id="login_submit" class="form-control btn btn-log login-submit ">Login</button>
                      </div>
                    </div>
                  </div>

                </form>
                </div>
                <!-- <div class="col-lg-6 social-ico"> -->
               <!-- <a href="javascript:void(0);" onclick="fbLogin();" id="fbid" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Facebook </a> -->
               <!-- <br/>
               <a type="button" style="background-color: #3D5A98; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://facebook.com" target="_blank" class="ui-link" id="fbid"><strong>With Facebook</strong></a>
               <br /><br /><br /> -->
                <!-- <a href="#" class="btn btn-default google" onclick="login();"> <i class="fa fa-google-plus modal-icons"></i> Google</a> -->
                <!-- <a type="button" style="background-color: #ed1c24; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://gmail.com" target="_blank" class="ui-link" ><strong>With Google Plus</strong></a> -->
               <!-- </div> -->

                <div class="col-lg-12">
                <form class="register-form displaynone"  name="registration_form" id="registration_form"   method="post" > 
                 {{ csrf_field() }}

                  <div class="form-group">
                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Username" >
                      <span id="errorName" class="error-msg"></span>
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address"  >
                    <span id="errorEmail"  class="error-msg" ></span>
                  </div>

                   <div class="form-group">
                    <input type="text" name="contact" id="contact" onkeypress="return fnAllowNumeric(event)" maxlength="10"  tabindex="1" class="form-control" placeholder="Mobile Number" >
                    <span id="errorcontact"  class="error-msg"></span>
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                     <span id="errorpassword"  class="error-msg" ></span>
                  </div>
                   
                  <div class="form-group">
                    <input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password">
                     <span id="errorpasswordconfirm"  class="error-msg"></span>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <button class="form-control btn btn-log registration-submit" id="registration_submit"> Register</button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
              
         <div class="col-lg-12">
             <form class="forgot-form displaynone"  name="forgot_password_form" id="forgot_password_form"   method="post"  >
              {{ csrf_field() }}
                 <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email ID" >
                    <span id="forgotpass"  class="text-danger"></span>
                  </div>
                    <div class="form-group">
                    <div class="row">
                      <div class="col-sm-3 col-sm-offset-3">
                        <button class="form-control btn btn-log " id="f_password">Submit</button>
                        
                      </div>
                      <a href="#" id="back_id" class="btn btn-default">Back</a>
                    </div>


                  </div>           
              </form>
                <span class="forgotps"></span>
          </div>
              
              
            </div>
          </div>
        </div>
      

           </div>
         </div>
       </div>
    </div>
</div>




 <div id="loading" style="position: absolute;z-index: 1000;left: 44%;top: 40%; ">
   <img src="loading.gif" width="100" />

  </div>  
</body>
</html>


<script src="js/iziModal.mind1eb.js?=v2" type="text/javascript"></script>
<script src="js/javascript.js?v=1" type="text/javascript"></script>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

<script type="text/javascript">
  $(".login-submit").click(function(event){
    // alert('hii');
    $('#log_popup').modal('show');
  });
</script>






    

