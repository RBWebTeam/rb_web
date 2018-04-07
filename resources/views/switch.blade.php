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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  

<link rel="stylesheet" href="{{URL::to('css/iziModal.min.css')}}">
<link rel="stylesheet" href="{{URL::to('css/icons.css?v=1')}}">


</head>
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
                     
 <a  class="search-btn-2 search-btn2 login-submit sign-in"  href="#" style="text-align: center; width: 45px; height: 45px; padding: 7px; display: inline-block; vertical-align:bottom">
    <i style="font-size: 30px;" class="fa fa-user"></i>
   <!--  <span class="tooltiptext">Sign In</span> --></a>                                            
                        
                <div id="refreshID" class="pull-right">                        
                    <div>
                        <ul class="nav navbar-nav">
                        @if (Session::has('email'))
                         <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo Session::get('name');?>
                          <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a id="googleLOG" href="{{URL::to('logout')}}">Logout</a></li>
                         <!-- <li><a href="{{url('profile')}}">My Profile</a></li>
                         <li><a href="{{URL::to('profile')}}?credit-score">My Credit Score</a></li>
                         <li><a href="{{url('profile')}}?my-quotes">My Quotes</a></li> -->
                         <li><a href="{{url('track-application')}}">Track Applications</a></li>
                         </ul>
                         </li>
                         </ul>
                          @endif                       
                    </div>
                </div>                                                                        

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


<body class="">

<div class="sticky-container">
    <ul class="sticky">
       
        <li>
            <img src="images/phone-circle.png" width="32" height="32">
            <p><a data-toggle="modal" data-target="#myModaltest1" target="_blank">Call Us on<br>1800267629</a></p>
        </li>

        <li>
            <img src="images/facebook-circle.png" width="32" height="32">
            <p><a href="https://www.facebook.com/rupeeboss" target="_blank">Like Us on<br>Facebook</a></p>
        </li>

         <li>
            <img src="images/gplus-circle.png" width="32" height="32">
            <p><a href="https://plus.google.com/113191059621763008376" target="_blank">Follow Us on<br>Google+</a></p>
        </li>
        

        <li>
            <img src="images/twitter-circle.png" width="32" height="32">
            <p><a href="https://twitter.com/rupeeboss" target="_blank">Follow Us on<br>Twitter</a></p>
        </li>

         <li>
            <img src="images/instagram-circle.png" width="32" height="32">
            <p><a href="https://www.instagram.com/rupeeboss/" target="_blank">Follow Us on<br>Instagram</a></p>
        </li>

        <li>
            <img src="images/linkedin-circle.png" width="32" height="32">
            <p><a href="https://www.linkedin.com/company/codexworld" target="_blank">Follow Us on<br>LinkedIn</a></p>
        </li>

       
        
    </ul>
</div>

      <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12 ">
                    <div class="mb60 text-center section-title text-white">
                        <!-- section title start-->
                        <!-- <h1 class="text-white">Why People Choose Us</h1>
                        <p>We understand how to effectively guide you through the home loan or refinance process and avoid potential problems along the way. </p> --><br><br>
                    </div>
                    
                </div>
            </div>
            <div class="row">
            <br><br><br>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="number-block text-white">
                        <a href="{{URL::to('balance-transfer',['id' => 'home-loan'])}}">
                        <div class="circle-3 circle11"><img src="images/home-loan.svg" alt="Home Loan Balance Transfer" style="width:60px"><!--<i class="icon-command  icon-4x icon-white"></i>--></div>
                        <h3 class="text-black mb30" style="font-size: 17px;">Home Loan Balance Transfer</h3>

                        </a>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6   col-xs-6">
                    <div class="number-block text-white">
                        <a href="{{URL::to('balance-transfer',['id' => 'personal-loan'])}}">
                        <div class="circle-3 circle11"><img src="images/personal-loan.svg" alt="Personal Loan Balance Transfer" style="width:60px"><!--<i class="icon-dialog  icon-4x icon-white"></i>--></div>
                        <h3 class="text-black mb30" style="font-size: 17px;">Personal Loan Balance Transfer</h3>
                        </a>
                    </div>
                </div>

                
                
                <div class="col-md-4 col-sm-6   col-xs-6">
                    <div class="number-block text-white">
                        <a href="{{URL::to('balance-transfer',['id' => 'loan-against-property-loan'])}}">
                        <div class="circle-3 circle11"><img src="images/loan-against-property.svg" alt="Car Loan" style="width:60px"><!--<i class="icon-dialog  icon-4x icon-white"></i>--></div>
                        <h3 class="text-black mb30" style="font-size: 17px;">Loans Against Property Balance Transfer</h3><br>
                        </a>
                    </div>
                </div>



                 <div class="text-center">

                <a href="#section2"><img src="images/scroll002.gif" style="opacity: 0.8; margin-top:-68px"></a>

                </div>




            </div>
        </div>
    </div>



    <!-- <div class="rate-table">
        <div class="container">
            <div class="row">
                <div class="col-md-02 col-sm-4 col-xs-6">
                 <a href="#" class="btn btn-primary1" style="background-color: #000; padding: 20px 18px;">Rupee boss Comfy CARD</a>
                  
                </div>
                <div class="col-md-02 col-sm-4 col-xs-6">
                 <a href="#" class="btn btn-primary1" style="background-color: #ed1c24; padding: 20px 18px;">Apply for Express Loan</a>
                  
                </div>
                <div class="col-md-02 col-sm-4 col-xs-6">
                 <a href="#" class="btn btn-primary1" style="background-color: #000; padding: 20px 18px;">IDFC Saving Accou Open</a>
                  
                </div>
                <div class="col-md-02 col-sm-4 col-xs-6">
                 <a href="#" class="btn btn-primary1" style="background-color: #ed1c24; padding: 20px 18px;">Apply PM Awaas Yojana</a>
                  
                </div>
                <div class="col-md-02 col-sm-4 col-xs-6">
                 <a href="#" class="btn btn-primary1" style="background-color: #000; padding: 20px 18px;">Apply SME Car Leasing</a>
                  
                </div>
               
                
               

            </div>
        </div>
    </div> -->








<div class="section-space0" id="section2">
        <div class="container-2">
           
            <div class="row">
                <div class="" id="service">

                    <div class="col-md-02 col-sm-4 col-xs-6">
                        <div class="service-block-v5">
                            <a href="{{URL::to('http://www.rupeeboss.com/elite/')}}" class="btn-2 btn-secondary btn-block" style="background-color: #000;">ELITE</a>
                        </div>
                    </div>

                    <div class="col-md-02 col-sm-4 col-xs-6">
                        <div class="service-block-v5">
                            <a href="{{URL::to('express-loan')}}" class="btn-2 btn-secondary btn-block" style="background-color: #ed1c24;">EXPRESS LOAN</a>
                        </div>
                    </div>

                    <div class="col-md-02 col-sm-4 col-xs-6">
                        <div class="service-block-v5">
                            <a href="{{URL::to('credit-card')}}" class="btn-2 btn-secondary btn-block" style="background-color: #000;">CREDITS CARDS</a>
                        </div>
                    </div>

                    <div class="col-md-02 col-sm-4 col-xs-6">
                        <div class="service-block-v5">
                            <a href="{{URL::to('home-loan')}}" class="btn-2 btn-secondary btn-block" style="background-color: #ed1c24;">PM AWAS YOJANA</a>
                        </div>
                    </div>

                    <div class="col-md-02 col-sm-4 col-xs-6">
                        <div class="service-block-v5">
                            <a href="{{URL::to('contact-us')}}" class="btn-2 btn-secondary btn-block" style="background-color: #000;">SME CAR LEASING</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>









<div class="section-space60">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1>What You Get</h1><br>
                        
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30 hvr-float-shadow" style=" min-height: 400px;">
                        <div class="mb40"><i class="icon-money-bag icon-2x icon-default"></i></div>
                        <h3 class="capital-title">Buy With<br />Confidence</h3><br>
                        <p>Our strong relationship with leading Banks means we can give you the confidence you need to make the right choice.</p>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30 hvr-float-shadow" style=" min-height: 400px;">
                        <div class="mb40"><i class="icon-users icon-2x icon-default"></i></div>
                        <h3 class="capital-title">Experts in Small Stuff</h3><br>
                        <p>Our Experts take care of all the small & big Terms & conditions so that you enjoy what really matters to you.</p>
                        </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30 hvr-float-shadow" style=" min-height: 400px;">
                        <div class="mb40"> <i class="icon-briefcase-1 icon-2x icon-default"></i></div>
                        <h3 class="capital-title">Beyond the<br>Bucks</h3><br>
                        <p>We don't sell a product, We make Relationship and We are together with you in this journey.</p>
                        </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30 hvr-float-shadow" style=" min-height: 400px;">
                        <div class="mb40"> <i class="icon-target icon-2x icon-default"></i></div>
                        <h3 class="capital-title">Your Way or Highway</h3><br>
                        <p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-new">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12 ">
                    <div class="mb60 text-center section-title text-white">
                        <!-- section title start-->
                        <h1 class="text-white">Why People Choose Us</h1>
                        <p>We understand how to effectively guide you through the home loan or refinance process and avoid potential problems along the way. </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="number-block text-white">
                        <div class="mb30"><img src="images/experience.png" alt="+10 Years Experience" style="width:60px"><!--<i class="icon-command  icon-4x icon-white"></i>--></div>
                        <h3 class="text-white mb30">+10 Years Experience</h3>
                        <p>Our Trained Experts have the right knowledge & ability to get you the Best Deal.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6   col-xs-12">
                    <div class="number-block text-white">
                        <div class="mb30"><img src="images/Dedicated-Service.png" alt="Dedicated Service" style="width:60px"><!--<i class="icon-calculator  icon-4x icon-white"></i>--></div>
                        <h3 class="text-white mb30">Dedicated Service</h3>
                        <p>We Listen, We Discuss then we Advise the Best solution to fit your Requirements.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6   col-xs-12">
                    <div class="number-block text-white">
                        <div class="mb30"><img src="images/right.png" alt="Real People, Real Care" style="width:60px"><!--<i class="icon-dialog  icon-4x icon-white"></i>--></div>
                        <h3 class="text-white mb30">Real People, Real Care</h3>
                        <p>Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="section-space60">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>How Does It Works</h1>
                        <p>Our mission is to deliver reliable, latest news and opinions.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="post-block mb30">
                        <div class="post-img">
                            <a href="#" ><img src="images/requirement.jpg" alt="Requirements" class="img-responsive"></a>
                        </div>
                        <div class="bg-white pinside40 outline">
                            <h3 style="text-align: center;"><a href="#" class="title">Give Your Requirements</a></h3>
                            <p class="meta" style="text-align: center;">Tell us what you need by answering few simple questions.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="post-block mb30">
                        <div class="post-img">
                            <a href="#" ><img src="images/quotes.jpg" alt="Best Quotes" class="img-responsive"></a>
                        </div>
                        <div class="bg-white pinside40 outline">
                            <h3 style="text-align: center;"><a href="#" class="title" >View Best Quotes</a></h3>
                            <p class="meta" style="text-align: center;">View, Compare, Discuss the quotes matching your requirements. We can also customise them if you desire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="post-block mb30">
                        <div class="post-img">
                            <a href="#" ><img src="images/form1.jpg" alt="Fill the form" class="img-responsive"></a>
                        </div>
                        <div class="bg-white pinside40 outline">
                            <h3 style="text-align: center;"><a href="#" class="title">Fill the Form & Get the Loan</a></h3>
                            <p class="meta" style="text-align: center;">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white section-space60">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Our Client Testimonial</h1>
                        <p>See what our customers have to say about Rupee Boss services.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">
                <div class="col-md-12 col-sm-4 clearfix col-xs-12">
                    <div class="testimonial-block mb30 text-center">
                        <div class=" mb20 testimonial-img-1"> <img src="images/testimonial-img-rupee-boss.jpg" alt="testimonial" class="img-circle"> </div>
                        <div class="mb20">
                            <p class="testimonial-text"> “I'm thankful of the services I have been offered by your staff. Looking forward for more business.I would like to recommend about your services to my family and friends.”</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-autor">
                                <h4 class="testimonial-name-1">Rahil Farooqui</h4>
                                <!-- <span class="testimonial-meta">Personal Loan</span> --> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 clearfix col-xs-12">
                    <div class="testimonial-block mb30 text-center">
                        <div class=" mb20 testimonial-img-1"> <img src="images/testimonial-img-rupee-boss.jpg" alt="testimonial" class="img-circle"> </div>
                        <div class="mb20">
                            <p class="testimonial-text"> I would like to thank the team for the outstanding service provided in disbursing my loan. It was a smooth process. Thank You. Keep the good work going .</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-autor">
                                <h4 class="testimonial-name-1">Joel Jangam</h4>
                               <!--  <span class="testimonial-meta">Personal Loan</span> --> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 clearfix col-xs-12">
                    <div class="testimonial-block mb30 text-center">
                        <div class="mb20 testimonial-img-1"> <img src="images/testimonial-img-rupee-boss.jpg" alt="testimonial" class="img-circle"> </div>
                        <div class="mb20">
                            <p class="testimonial-text">Great Work. I appreciate your efforts for disbursement of my loan in time. Your strong followup and deep subject knowledge helped me to get loan amount in time.</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-autor">
                                <h4 class="testimonial-name-1">Satyen Pattarkine</h4>
                                <!-- <span class="testimonial-meta">Home Loan</span> --> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 clearfix col-xs-12" >
                    <div class="testimonial-block mb30 text-center">
                        <div class=" mb20 testimonial-img-1"> <img src="images/testimonial-img-rupee-boss.jpg" alt="testimonial" class="img-circle"> </div>
                        <div class="mb20">
                            <p class="testimonial-text"> Thanks a lot for processing my personal loan in time. I would like to give you special thanks for the service given by you. Your personal visits to my office for all documentation.</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-autor">
                                <h4 class="testimonial-name-1">Milind Bedekar</h4>
                                <!-- <span class="testimonial-meta">Personal Loan</span> --> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 clearfix col-xs-12" >
                    <div class="testimonial-block mb30 text-center">
                        <div class=" mb20 testimonial-img-1"> <img src="images/testimonial-img-rupee-boss.jpg" alt="testimonial" class="img-circle"> </div>
                        <div class="mb20">
                            <p class="testimonial-text"> I found them professional, straightforward, and since they don’t push you to apply for a specific bank, they are impartial. On a long term basis one needs an intermediary as a one stop shop.</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-autor">
                                <h4 class="testimonial-name-1">Ashish Sharma</h4>
                                <!-- <span class="testimonial-meta">Personal Loan</span> --> </div>
                        </div>
                    </div>
                </div>
             
                
                    
                </div>
            </div>
           
        </div>
    </div>
    
      <div class="section-space40 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/hdfc-bank1.jpg" alt="hdfc-bank"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/icici-bank1.jpg" alt="icici-bank"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/Standard-Chartered-bank1.jpg" alt="Standard-Chartered-bank"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/reliance-capital1.jpg" alt="reliance-capital"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/axis-bank1.jpg" alt="axis-bank"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/Bajaj-Finserv-Logo1.jpg" alt="Bajaj-Finserv-Logo"> </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/DHFL1.jpg" alt="DHFL"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/indiabulls1.jpg" alt="indiabulls"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/LT-Finance1.jpg" alt="LT-Finance"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/kotak-mahindra1.jpg" alt="kotak-mahindra"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/indusind-logo1.jpg" alt="indusind-bank-logo"> </div>
                <div class="col-md-2 col-sm-4 col-xs-6"> <img src="images/Capital-First1.png" alt="Capital-First"> </div>
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
                            <button id="login_submit" class="btn btn-default btn-sm login-submit ">Login</button>
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
                        <button class="btn btn-default btn-sm registration-submit" id="registration_submit"> Register</button>
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
                        <button class="btn btn-default btn-sm " id="f_password">Submit</button>
                        
                      </div>
                      <a href="#" id="back_id" class="btn btn-default btn-sm">Back</a>
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
</body>

<a href="javascript:void(0)" class="cd-top cd-is-visible cd-fade-out" title="Go to top">Top</a>

		
@include('layout.script')
@include('layout.footer')


<script type="text/javascript">
  $(".login-submit").click(function(event){
    
    $('#log_popup').modal('show');
    $('.sign-in').hide();
  });
</script>


		
	

