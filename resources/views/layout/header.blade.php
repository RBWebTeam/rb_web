<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Compare & Apply for all kind of Loan & Credit Cards | Rupeeboss.com">
    <meta name="keywords" content="loan, bad credit, EMI Calculator, credit cars, home loan, car loan, education loan">
    <title>Compare & Apply for all kind of Loan & Credit Cards | Rupeeboss.com</title>
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

<body>

    
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
                        <a href="{{URL::to('contact-us')}}" class="btn btn-default" style="padding:14px 13px">Expert Assistance</a>
                        <a class="search-btn-2 search-btn2 trigger-custom2"  href="#" style="text-align: center; width: 45px; height: 45px; padding: 7px; display: inline-block; vertical-align:bottom"><i style="font-size: 30px;" class="fa fa-user"></i><span class="tooltiptext">Sign In</span></a>
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
                                    <li><a href="{{URL::to('balance-transfer/working-capital')}}" class="animsition-link">Working Capital</a></li>
                                    
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

 <div id="modal-welcome" class="iziModal"></div>
 <div id="modal-custom2" class="iziModal" data-iziModal-group="grupo1">


        <button data-iziModal-close class="fa fa-times-circle"></button>


      




         <header>
            <a href="#" id="signin">Log In</a>
            <a href="#" class="active">Register</a>
        </header>


        <section class="hide">

             <a type="button" style="background-color: #3D5A98; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://facebook.com" target="_blank" class="ui-link"><strong>With Facebook</strong></a>

             <a type="button" style="background-color: #ed1c24; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://gmail.com" target="_blank" class="ui-link"><strong>With Google Plus</strong></a>
            <br /><br />
            <h4>OR</h4>
            

            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <p style="text-align:right"><a href="forgot-password.html">Forgot Password ?</a></p>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <button type="login" class="btn btn-default btn-sm " style="width: 100%;">Log In</button>     
                
                       
            </div>

           
        </section>


        <section>

             <a type="button" style="background-color: #3D5A98; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://facebook.com" target="_blank" class="ui-link"><strong>With Facebook</strong></a>

             <a type="button" style="background-color: #ed1c24; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://gmail.com" target="_blank" class="ui-link"><strong>With Google Plus</strong></a>
            <br /><br />
            <h4>OR</h4>
            

            <!--<button class="thm-btn"><i class="fa fa-facebook"></i> Sign up with Facebook</button>    -->

            <input type="text" placeholder="User Name">
            <input type="text" placeholder="Email Address">
            <input type="mobile" placeholder="Mobile Number">
            <input type="password" placeholder="Password">
            <input type="confirm-password" placeholder="Confirm Password">
            
           <div class="col-md-4 col-sm-4 col-xs-12">
                    
                 <button type="register" class="btn btn-default btn-sm " style="width: 100%;">Register</button>
                    
            </div>

           
        </section>



        <br /><br />
    </div>




    

