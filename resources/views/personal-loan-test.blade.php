@include('layout.header')

<body class="">
  
    <div class="header-transparent navbar-fixed-top">
         <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    
                    <div class="logo">
                        <a href="index.html"><img src="images/logo-rupee-boss.png" alt="Rupeeboss"></a>
                    </div>
                </div>
                
                <div class="col-md-10 col-sm-6 col-xs-6 text-right">
                    <div class="header-action">
                        <a href="credit-report.html" class="btn btn-credit" style="padding:14px 12px">Free Credit Report</a>
                        <a href="#" class="btn btn-default" style="padding:14px 13px">Expert Assistance</a>
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
                                    <li><a href="#" class="animsition-link">Unsecured Business Loan</a></li>
                                    <li><a href="#" class="animsition-link">Loan Against Property</a></li>
                                    <li><a href="#" class="animsition-link">Commercial Property Purchase</a></li>
                                    <li><a href="#" class="animsition-link">Lease Rent Discounting</a></li>
                                    <li><a href="#" class="animsition-link">Working Capital</a></li>
                                    <li><a href="#" class="animsition-link">FCNR Loans</a></li>
                                    <li><a href="#" class="animsition-link">Debt Restructuring</a></li>
                                    <li><a href="#" class="animsition-link">Debt Syndication</a></li>
                                    <li><a href="#" class="animsition-link">Project Finance</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="animsition-link">Retail Loan</a>
                                <ul>
                                    <li><a href="#" class="animsition-link">Home Loan</a></li>
                                    <li><a href="#" class="animsition-link">Smart Home Loan</a></li>
                                    <li><a href="#" class="animsition-link">Loan Against Property</a></li>
                                    <li><a href="#" class="animsition-link">Personal Loan</a></li>
                                    <li><a href="#" class="animsition-link">Car Loan</a></li>
                                    <li><a href="#" class="animsition-link">Working Capital</a></li>
                                    <li><a href="#" class="animsition-link">Used Car Loan</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Credit Card</a></li>
                            <li class="active"><a href="#" class="animsition-link">Balance Transfer</a>
                                <ul>
                                    <li><a href="#" class="animsition-link">Home Loan</a></li>
                                    <li><a href="#" class="animsition-link">Personal Loan</a></li>
                                    <li><a href="#" class="animsition-link">Loan Against Property</a></li>
                                    <li><a href="#" class="animsition-link">Working Capital</a></li>
                                    
                                </ul>
                            </li>
                            <li ><a href="#" class="animsition-link">Calculators</a></li>

                            <li><a href="#" class="animsition-link">Track Application</a></li>
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
                            <!-- <h1 class="page-title">Personal Loan</h1> -->
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class=" ">
        <!-- content start -->



<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                     <h1 class=""><center>Personal Loan</center></h1>
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                <div class="row">
                                    
                       
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
                       
                        <form method="post" action="#">
                            <!-- Text input-->

                            <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="loanTenur" class="form-control input-md" name="loanTenur" onchange="ChooseContact(this)">
                                                            <option selected disabled="">Purpose of Loan</option>
                                                            <option value="Marriage">Marriage</option>
                                                            <option value="Home Related">Home Related</option>
                                                            <option value="Business">Business</option>
                                                            <option value="Other">Other</option>
                                                    </select>
                             </div>
                             </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="loan-required">Loan Required</label>
                                <input id="loan-required" name="loan-required" type="text" placeholder="Loan Required" class="form-control input-md" required="required">
                            </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="city">City of Location</label>
                                <input id="city" name="city" type="text" placeholder="City of Location" class="form-control input-md" required="required">
                            </div>
                            </div>
                            <!-- Text input-->
                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="loanTenur" class="form-control input-md" name="loanTenur" onchange="ChooseContact(this)">
                                                            <option selected disabled="">Loan Tenure</option>
                                                            <option value="1 Year">1 Year</option>
                                                            <option value="2 Year">2 Year</option>
                                                            <option value="3 Year">3 Year</option>
                                                            <option value="4 Year">4 Year</option>
                                                            <option value="5 Year">5 Year</option>
                                                            <option value="6 Year">6 Year</option>
                                                            <option value="7 Year">7 Year</option>
 
                                                    </select>
                             </div>
                             </div>

                          
                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                             	<label class="control-label sr-only" for="name">Applicant Name</label>
                                <input id="name" name="name" type="text" placeholder="Applicant Name" class="form-control input-md" required="required">

                             </div>
                             </div>
                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                             	<!-- <input type="radio" name="male" checked id="male" value="male"> Male
                             	<input type="radio" name="female" id="female" value="female"> Female -->
                             	<select id="gender" class="form-control input-md" name="gender" onchange="ChooseContact(this)">
                                                    		<option selected disabled="">Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
 
													</select>

                             </div>
                             </div>
                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                             	<label class="control-label sr-only" for="name">Date of Birth</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="dob" name="dob" type="text" placeholder="Date of Birth(DD/MM/YY)" class="form-control input-md" required="required">

                             </div>
                             </div>

                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <br>  <br>  <br>

                             </div>
                             </div>


                         



                               <div class="st-tabs" style="padding-left: 15px; border: none;">
                                        <!-- Nav tabs -->
                                        <div class="row">

                                        <div class="col-md-6 col-sm-12 col-xs-12">

                                        <ul class="nav nav-tabs nav-justified " role="tablist">
                                            <li role="presentation" class="active"><a class="price" href="#salaried" aria-controls="salaried" role="tab" data-toggle="tab" style="padding: 15px 8px; ">Salaried</a></li>
                                            <li role="presentation"><a href="#self-employee" aria-controls="self-employee" role="tab" data-toggle="tab" style="padding: 15px 8px;">Self Employee</a></li>
                                        </ul>
                                        </div>
                                        </div>
                                        <!-- Tab panes -->
                                        <div class="tab-content" style="border: none; ">
                                            <div role="tabpanel" class="tab-pane fade in active" id="salaried">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="month-income">Monthly Income</label>
                                <input id="month-income" name="month-income" type="text" placeholder="Monthly Income" class="form-control input-md" required="required">
                            </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="emi">Exiting EMI (any)</label>
                                <input id="emi" name="emi" type="text" placeholder="Exiting EMI (any)" class="form-control input-md" required="required">
                            </div>
                            </div>
                            
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="self-employee">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="annual-income">Annual Income</label>
                                <input id="annual-income" name="annual-income" type="text" placeholder="Annual Income" class="form-control input-md" required="required">
                            </div>
                            </div>
                            
                            
                            <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="emi">Exiting EMI (any)</label>
                                <input id="emi" name="emi" type="text" placeholder="Exiting EMI (any)" class="form-control input-md" required="required">
                            </div>
                            </div>
                                            </div>
                                         
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-xs-6">
                                    <br>
                                                <button type="submit" class="btn btn-default btn-sm">Get Best Quotes</button>
                                                
                                    </div>

                            

                        </form>
                        
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
                        <!-- <h4 style="text-align: center;" >After Transfer <i class="fa fa-exchange" ></i></h4> -->
                        <form class="contact-us" method="post" action="#">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Loan-Amount">Loan Amount<span class=" "> </span></label>
                                                    <input id="Loan-Amount" name="Loan-Amount" type="text" placeholder="Loan Amount" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="ROI">Best ROI<span class=" "> </span></label>
                                                    <input id="ROI" name="ROI" type="text" placeholder="Best ROI" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Tenure">Tenure<span class=" "> </span></label>
                                                    <input id="Tenure" name="Tenure" type="text" placeholder="Tenure" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Processing-Fee">Processing Fee<span class=" "> </span></label>
                                                    <input id="Processing-Fee" name="Processing-Fee" type="text" placeholder="Processing Fee" class="form-control input-md" required>
                                                </div>
                                            </div>

                                             <div class="col-md-6 col-xs-12">
                                    <br>
                                                <button type="submit" class="btn btn-default btn-sm trigger-custom2" style="width: 100%;">Apply<br>Digitally</button>
                                                
                                    </div>
                                     <div class="col-md-6 col-xs-12">
                                    <br>
                                                <button type="submit" class="btn btn-default btn-sm trigger-custom" style="width: 100%;">Call<br>Manager</button>
                                                
                                    </div>
                                     <div class="col-md-12 col-xs-12">
                                    <br>
                                                <button type="submit" disabled class="btn btn-default btn-sm" style="width: 100%;">Check Bankwise<br>Eligibility</button>
                                                
                                    </div>



                                            
                                            
                                        </div>
                                    </form>
                        
                    </div>
                </div>
                                    
                                </div>
                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        
    </div>







    <div class="footer section-space40">
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="images/footer-rupee-boss-logo.png" alt="Rupee Boss"> </div>
                    <!-- /.Footer Logo -->
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="col-md-5">
                        <h3 class="newsletter-title">Signup Our Newsletter</h3>
                    </div>
                    <div class="col-md-7">
                        <div class="newsletter-form">
                            <!-- Newsletter Form -->
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="newsletter" name="newsletter" placeholder="Write E-Mail Address" required>
                                    <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
                </span> </div>
                                <!-- /input-group -->
                            </form>
                        </div>
                        <!-- /.Newsletter Form -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
            <hr class="dark-line">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="widget-text mt10">
                    <h4><strong>Office Address</strong></h4>
                        <!-- widget text -->
                        
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>5C/5D, 1 st ﬂoor, The Centrium, Phoenix Marketcity, Kurla West, Mumbai-400070, Maharashtra, India</p>
                            </div>
                            
                            <div class="col-md-12 col-xs-12 ">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>1800-267-629-6</p>
                            </div>
                            <div class="col-md-12 col-xs-12 ">
                                <p class="call-text"><span><i class="icon-letter icon-1x"></i></span>wecare@rupeeboss.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="widget-social mt10">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        <div class="mt10 widget-footer">

                        <h4><strong>Others Links</strong></h4>
                        <!-- widget footer -->
                        <ul class="listnone " style=" margin: 0px 0px 10px 0px;">
                            <li><a href="#" style="font-weight: normal;">About Us</a></li>
                            <li><a href="#" style="font-weight: normal;">Contact Us</a></li>
                            <li><a href="#" style="font-weight: normal;">EXPRESS LOAN</a></li>
                            <li><a href="#" style="font-weight: normal;">PM AWAS YOJANA</a></li>
                            <li><a href="#" style="font-weight: normal;">SME CAR LEASING</a></li>
                            <li><a href="#" style="font-weight: normal;">RB LIFE STYLE</a></li>
                            <li><a href="#" style="font-weight: normal;">ELITE</a></li>
                            <li><a href="#" style="font-weight: normal;">MY CREDIT SCORE</a></li>
                        </ul>
                        </div>

                    </div>
                  
                    <!-- /.widget text -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="widget-footer mt10">
                    <h4><strong>Home Loan</strong></h4>
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#">ICICI Bank</a></li>
                            <li><a href="#">Axis Bank</a></li>
                            <li><a href="#">DBS</a></li>
                            <li><a href="#">DCB Bank</a></li>
                            <li><a href="#">HDFC Ltd</a></li>
                            <li><a href="#">IDFC Ltd</a></li>
                            <li><a href="#">IIFL</a></li>
                            <li><a href="#">Indiabulls</a></li>
                            <li><a href="#">Kotak Mahindra Bank</a></li>
                            <li><a href="#">PNB Housing Finance Ltd</a></li>
                            <li><a href="#">Standard Chartered</a></li>
                            <li><a href="#">Tata Capital</a></li>
                            <li><a href="#">Yes Bank</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="widget-footer mt10">
                    <h4><strong>Personal Loan</strong></h4>
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#">Axis Bank</a></li>
                            <li><a href="#">HDFC</a></li>
                            <li><a href="#">Bajaj Finance</a></li>
                            <li><a href="#">Capital First</a></li>
                            <li><a href="#">Fullerton India</a></li>
                            <li><a href="#">ICICI Bank</a></li>
                            <li><a href="#">Kotak Mahindra</a></li>
                            <li><a href="#">Tata Capital</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="widget-footer mt10">
                    <h4><strong>Business Loan</strong></h4>
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#">Intellecash</a></li>
                            <li><a href="#">Magma Fincorp</a></li>
                            <li><a href="#">ICICI Bank</a></li>
                            <li><a href="#">HDFC</a></li>
                            <li><a href="#">Indusind Bank</a></li>
                            <li><a href="#">UPF (Kapitaltech)</a></li>
                            <li><a href="#">RBL</a></li>
                            <li><a href="#">Standard Chartered</a></li>
                            <li><a href="#">Tata Capital</a></li>
                            <li><a href="#">Capital First</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="widget-footer mt10">
                    <h4><strong>Business Loan</strong></h4>
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#">Axis Bank</a></li>
                            <li><a href="#">Aditya Birla</a></li>
                            <li><a href="#">Edelweiss</a></li>
                            <li><a href="#">Capital First Limited</a></li>
                            <li><a href="#">DHFL</a></li>
                            <li><a href="#">Deutsche Bank</a></li>
                            <li><a href="#">Kotak Mahindra</a></li>
                            <li><a href="#">Bajaj Finance</a></li>
                            <li><a href="#">Lendingkart</a></li>
                            <li><a href="#">Fullerton India </a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
            <hr class="dark-line">
            <p style="text-align: center; font-size: 12px;">Disclaimer : Please note that the interest rates given here are based on the market research. To enable the comparisons certain set of data has been reorganized / restructured / tabulated. Users are advised to recheck the same with the individual companies / organizations. This site does not take any responsibility for any sudden / uninformed changes in interest rates.</p>
        </div>
    </div>
    <!-- /.footer -->


    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <p>© Copyright 2017 | Rupee Boss</p>
                </div>
                <div class="col-md-6 col-sm-6 text-right col-xs-6">
                    <p><a href="#" style="color: #fff">Disclaimer</a>   |   <a href="#" style="color: #fff">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny footer -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menumaker.js"></script>
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- slider script -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider-carousel.js"></script>
    <script type="text/javascript" src="js/service-carousel.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
    <!-- Faq Accordion -->
    <script src="js/accordion.js" type="text/javascript"></script>


    



       <div id="modal-welcome" class="iziModal"></div>

    


    
    <div id="modal-custom" class="iziModal" data-iziModal-group="grupo1">


        <button data-iziModal-close class="fa fa-times-circle"></button>


      




        <section>

           

            <!--<button class="thm-btn"><i class="fa fa-facebook"></i> Sign up with Facebook</button>    -->

            <input type="text" placeholder="Full Name">
            <input type="text" placeholder="Email">
            <input type="Mobile No." placeholder="Mobile No.">
            
            <div class="col-md-3 col-sm-4 col-xs-12">

                <button type="submit" class="btn btn-default btn-sm " style="width: 100%;">Submit</button>

               
                
                            
            </div>
        </section>



        <br /><br />
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
    
     <!--<script src="assets/js/vendor/jquery-2.1.3.min.js" type="text/javascript"></script>-->
    <script src="js/iziModal.mind1eb.js?=v2" type="text/javascript"></script>
    <script src="js/javascript.js?v=1" type="text/javascript"></script>

   
</body>
    
@include('layout.footer')
<!-- @include('layout.personal-loan-modal-test')
@include('layout.script') -->