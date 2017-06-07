@include('layout.header')
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/iifl_css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/iifl_css/icomoon.css">

<!--    <link rel="stylesheet" href="css/iifl_css/style.css">  -->
    <link rel="stylesheet" href="css/iifl_css/input/demo.css"> 
    <link rel="stylesheet" href="css/iifl_css/input/normalize.css"> 
    <link rel="stylesheet" href="css/iifl_css/input/set2.css"> 
    <!-- Chatbox  -->
    <link rel="stylesheet" href="css/iifl_css/chatbox.css">
    


    <link rel="stylesheet" href="build/freshslider.min.css">
    

    

                
<!-- plus a jQuery UI theme, here I use "flick" -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
  <style>
      table {font-size:14px;}
      .input__field--nao {color: #999999;}
      .bg-success {padding:10px; font-size:14px; color:#666;}
      .lon-det li {float:left; border-right:1px solid #fff; padding:10px;list-style-type:none;vertical-align:middle;}
      .lon-det {height:92px; margin:0px; font-size:14px;}
      .content p {padding:0px;margin:0px; font-size:13px;}
      .bdr-rigt {border-right:1px dashed #fff;min-height: 50px;}
      .mrg-btm {margin-bottom:20px;}
      .mrg-tpp {margin-top:35px;}
      .bg-primary {padding:5px; font-size:16px;}
      .bg-primary:hover {color:#fff;}
      .small-txt {font-size:10px;}
      .input__field {border-radius:0px;}
      .input__label--nao {top:15px;}
      .input__field {border: 1px solid #dfdfdf;height:60px;}
      h1 {font-size:40px;color:#75a8de;padding:20px; padding-bottom:0px;margin-bottom:5px;}

  </style>
    <div id="fh5co-hero">
  <div class="express-lon-ban"><img src="images/express-loan-image1.jpg" class="img-responsive"/></div>
  <br>
        <div class="container animate-box">
            
    <br>
    <div class="animate-box">
    <div class="row">
    
            <div class="col-md-12 bg-white centered well pad1">
            
        <div id="iifl">
        <form id="iifl_express_loan" name="iifl_express_loan" method="POST">
          {{ csrf_field() }}
            
             <section class="content">
                <h3 class="text-uppercase exp-hed">IIFL Express Loan</h3>
                <span class="input input--nao">
                   <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Company_Name" id="Company_Name" required="">
                    <label class="input__label input__label--nao" for="Company_Name">
                        <span class="input__label-content input__label-content--nao">Where Do You Work</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Monthly_Salary"  id="Monthly_Salary"  onkeypress="return fnAllowNumeric(event)" required  />
                    <label class="input__label input__label--nao" for="Monthly_Salary">
                        <span class="input__label-content input__label-content--nao">Your Net Monthly Salary</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Monthly_Obligation" id="Monthly_Obligation" onkeypress="return fnAllowNumeric(event)" required  />
                    <label class="input__label input__label--nao" for="Monthly_Obligation">
                        <span class="input__label-content input__label-content--nao">Total Existing EMI if Any</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
            </section>
            
            
            <!-- <br>
            <hr class="hr-sty"> -->
            <h3 class="text-uppercase exp-hed">Almost Done!</h3>
            <span>Enter your contact information to receive a copy of your loan eligibility.</span>
            <section class="content">
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="MobileNo" id="MobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" required />
                    <label class="input__label input__label--nao" for="MobileNo">
                        <span class="input__label-content input__label-content--nao">Mobile No. </span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PersonalEmailID" id="PersonalEmailID" oninput="mail('PersonalEmailID')" required />
                    <label class="input__label input__label--nao" for="PersonalEmailID">
                        <span class="input__label-content input__label-content--nao">Email Id</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                </span>
                <span class="input_exp input--nao">
                    <select class="input__field input__field--nao" name="City" id="City" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="City">
                        <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
                
                
                
            </section>
            <a class="btn btn-primary btn-outline with-arrow mrg-top next" href="#">NEXT<i class="icon-arrow-right"></i></a>
            </form>
            </div>
            <!-- <a class="btn btn-primary btn-outline with-arrow mrg-top" href="#">NEXT<i class="icon-arrow-right"></i></a> -->
            
            
            
            <!-- <br>
            <hr class="hr-sty"> -->
            <div id="Eligibility_details" style="display: none;">
            <form name="eligibility_form" id="eligibility_form" method="POST">
                      {{ csrf_field() }}
            <div class="col-md-12">
             <table class="table table-bordered" width="70%">
                <tr>
                    <td class="bg-info">Company Name: <b><span id="Name"></span></b></td>
                    <td class="bg-danger">Monthly Salary: <b><span id="Salary"></span></b></td>
                    <td class="bg-info">Current EMI: <b><span id="Current"></span></b></td>
                </tr>
             </table>
             <h3><i><b class="text-primary">Hurray !!</b></i>&nbsp;You are eligible for a loan of <b><span></span></b> <a class="bg-primary" href="javascript:void(0);">Apply Now</i></a></h3>
             <br>
            </div>

            <section class="content">
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Loanamount" id="Loanamount" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" />
                    <label class="input__label input__label--nao" for="Loanamount">
                        <span class="input__label-content input__label-content--nao">Loan Amount</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Tenure" id="Tenure" onkeypress="return fnAllowNumeric(event)" maxlength="2" />
                    <label class="input__label input__label--nao" for="Tenure">
                        <span class="input__label-content input__label-content--nao">Loan Tenure</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="EMI" id="EMI" onkeypress="return fnAllowNumeric(event)"  />
                    <label class="input__label input__label--nao" for="EMI">
                        <span class="input__label-content input__label-content--nao">EMI</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                <div>Rate Of Interest</div>
                <span>Standard Rate 18% / </span>
                <span><b class="text-success">Your Offer 16%</b></span>
                </span>
                <span class="input input--nao">
                <div>Proccesing Fee</div>
                <span>Standard Rate 3% / </span>
                <span><b class="text-success">Your Offer 1.5%</b></span>
                </span>
                 <hr>
                <div class="col-md-12 text-danger mar-top"><input type="checkbox" name="check"/> I Agree to all the terms and conditions.</div>
            
            
            
            </section>
            <a class="btn btn-primary btn-outline with-arrow mrg-top next_form" id="next_form" href="#">NEXT<i class="icon-arrow-right"></i></a>
            </form>
            </div>
            
            <!-- <br>
            <hr class="hr-sty">
             <section class="content">
            
            <div class="col-md-12">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td class="bg-info">Company Name: <b>Rupeeboss</b></td>
                    <td class="bg-danger">Monthly Salary: <b>Rs. 100000</b></td>
                    <td class="bg-info">Current EMI: <b>Rs. 14000</b></td>
                </tr>
             </table>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10 bg-primary pad mrg-btm">
                   
                  <div class="col-md-3 bdr-rigt">Loan Details</div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Loan Amount:- <b>2,00,000</b></p>
                  <p>Loan Amount:- <b>2,00,000</b></p>
                  </div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Rate of Intrest:- <b>15%</b></p>
                  <p>Processing Fees:- <b>Rs.3000</b></p>
                  </div>
                  <div class="col-md-3">
                  <p>EMI:- <b>Rs.8,000</b></p>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <h3 class="col-md-12 mrg-tpp">Autofill Your Application Using Your Aadhar Number:</h3>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="aadhar_num" id="aadhar_num" oninput="aadhar('aadhar_num')" required minlength="12" maxlength="12"  />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Enter Your Aadhar No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                </span>
                 
                
                <h4 class="text-danger small-txt">OTP has been sent to your Registred Mobile No.</h4>
                <div class="col-md-12"><a class="btn btn-primary btn-outline with-arrow mrg-btm otp" href="#">Get OTP<i class="icon-arrow-right"></i></a></div>
                
                <div style="display:none;">
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Enter OTP</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <div class="col-md-12 mrg-btm"><a class="btn btn-primary btn-outline with-arrow mrg-top" href="#">Confirm<i class="icon-arrow-right"></i></a> <a href="#" class="small-txt">Resend OTP</a></div>
                </div>
            </section>
             -->
            
            <!-- <h3 class="mrg-tpp">Proceed Without aadhar Number</h3>
            <a class="btn btn-primary btn-outline with-arrow mrg-top" href="#">Click Here<i class="icon-arrow-right"></i></a>
            
            <br>
            <hr class="hr-sty"> -->

            <div id="Applicant_Details" style="display: none;">
            <form name="applicant_deatils" id="applicant_deatils" method="POST">
                      {{ csrf_field() }}
             <div class="col-md-12">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td class="bg-info">Company Name:<b><span id="CompanyNm"></span></b></td>
                    <td class="bg-danger">Monthly Salary:<b><span id="Income"></span></b></td>
                    <td class="bg-info">Current EMI:<b><span id="Current_EMI"></span></b></td>
                </tr>
             </table>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10 bg-primary pad mrg-btm">
                   
                  <div class="col-md-3 bdr-rigt">Loan Details</div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Loan Amount:- <b>2,00,000</b></p>
                  <p>Loan Amount:- <b>2,00,000</b></p>
                  </div>
                  <div class="col-md-3 bdr-rigt">
                  <p>Rate of Intrest:- <b>15%</b></p>
                  <p>Processing Fees:- <b>Rs.3000</b></p>
                  </div>
                  <div class="col-md-3">
                  <p>EMI:- <b>Rs.8,000</b></p>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
            <section class="content">
                <h3 class="col-md-12 mrg-tpp">Tell Us a Bit About YourSelf</h3>
                <input class="input__field input__field--nao" type="hidden" name="CompanyName" required id="CompanyName" onkeypress="return AllowAlphabet(event)" />
                <input class="input__field input__field--nao" type="hidden" name="MonthlySalary" required id="MonthlySalary" onkeypress="return AllowAlphabet(event)" />
                <input class="input__field input__field--nao" type="hidden" name="MonthlyObligation" required id="MonthlyObligation" onkeypress="return AllowAlphabet(event)" />
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="FName" required id="FName" onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="FName">
                        <span class="input__label-content input__label-content--nao">First Name </span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="MName" id="MName" required onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="MName">
                        <span class="input__label-content input__label-content--nao">Middle Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="LName" id="LName" required onkeypress="return AllowAlphabet(event)" />
                    <label class="input__label input__label--nao" for="LName">
                        <span class="input__label-content input__label-content--nao">Last Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PAN" id="PAN" oninput="pan_card('PAN')" required minlength="10" maxlength="10" />
                    <label class="input__label input__label--nao" for="PAN">
                        <span class="input__label-content input__label-content--nao">Pan Card No*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  <div id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                </span>


                <span class="input input--nao">
                    <input class="input__field input__field--nao lastReporteddate1" type="text" placeholder="Date Of Birth" id="DOB" name="DOB" required />
                    <label class="input__label input__label--nao" for="input-3">
                        <!-- <span class="input__label-content input__label-content--nao">Date of Birth</span> -->
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="Gender" id="Gender" required>
                    <option disabled selected value=""></option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                    <label class="input__label input__label--nao" for="Gender">
                        <span class="input__label-content input__label-content--nao">Gender</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
                <h3 class="col-md-12 mrg-tpp">Where Can We Reach you</h3>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Mob_Num" id="Mob_Num" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" required />
                    <label class="input__label input__label--nao" for="Mob_Num">
                        <span class="input__label-content input__label-content--nao">Mobile No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="AlternateMobileNo" id="AlternateMobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10"/>
                    <label class="input__label input__label--nao" for="AlternateMobileNo">
                        <span class="input__label-content input__label-content--nao">Residence Landline</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="Email" id="Email" required/>
                    <label class="input__label input__label--nao" for="Email">
                        <span class="input__label-content input__label-content--nao">Email Id</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="AadhaarNumber" id="AadhaarNumber" oninput="aadhar('AadhaarNumber')" required minlength="12" maxlength="12"  />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Enter Your Aadhar No.</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                </span>
                

                
            </section>
            <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Where Do You Stay</h3></div>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentAddress1" id="CurrentAddress1" required />
                    <label class="input__label input__label--nao" for="CurrentAddress1">
                        <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentAddress2" id="CurrentAddress2" required" />
                    <label class="input__label input__label--nao" for="CurrentAddress2">
                        <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentAddress3" id="CurrentAddress3" required/>
                    <label class="input__label input__label--nao" for="CurrentAddress3">
                        <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentPin" id="CurrentPin" required minlength="6" maxlength="6" />
                    <label class="input__label input__label--nao" for="CurrentPin-3">
                        <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CurrentState" id="CurrentState" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="CurrentState">
                        <span class="input__label-content input__label-content--nao">CurrentState</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="CurrentCity" id="CurrentCity" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="CurrentCity">
                        <span class="input__label-content input__label-content--nao">CurrentCity</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
                <!-- <div class="col-md-12 text-danger mar-top"><input type="checkbox" name="check"> I Agree to all the terms and conditions.</div> -->
                </section>

                <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Permanent Address</h3></div>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentAddress1" id="PermanentAddress1" required />
                    <label class="input__label input__label--nao" for="PermanentAddress1">
                        <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentAddress2" id="PermanentAddress2" required" />
                    <label class="input__label input__label--nao" for="PermanentAddress2">
                        <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentAddress3" id="PermanentAddress3" required/>
                    <label class="input__label input__label--nao" for="PermanentAddress3">
                        <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="PermanentPin" id="PermanentPin" required minlength="6" maxlength="6" />
                    <label class="input__label input__label--nao" for="PermanentPin">
                        <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                     <select class="input__field input__field--nao" name="PermanentState" id="PermanentState" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="PermanentState">
                        <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="PermanentCity" id="PermanentCity" required>
                    <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="PermanentCity">
                        <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
                <!-- <div class="col-md-12 text-danger mar-top"><input type="checkbox" name="check"> I Agree to all the terms and conditions.</div> -->
                </section>
                
                
                
                
                
                
            <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Residence Information</h3></div>
                
                <span class="input_exp input--nao">
                    <select class="input__field input__field--nao fnt-clr" id="ResidenceType" name="ResidenceType" required>
                    <option selected disabled value="">ResidenceType</option>
                    <option value="Rented">Rented</option>
                    <option value="Owned ">Owned</option>
                    
                    
                    </select>
                    <label class="input__label input__label--nao" for="constitution">
                        <span class="input__label-content input__label-content--nao">ResidenceType</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" name="ResidenceStability " id="ResidenceStability" onkeypress="return fnAllowNumeric(event)" type="text" id="ResidenceStability" minlength="2" maxlength="2" required />
                    <label class="input__label input__label--nao" for="ResidenceStability">
                        <span class="input__label-content input__label-content--nao">Period of Residence(In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> 
                </section>
        
        
        <section class="content">
            <div class="col-md-12"><h3 class="mrg-tpp">Personal Information</h3></div>
                
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="Education" id="Education" required>
                       <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="Education">
                        <span class="input__label-content input__label-content--nao">Education*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="PurposeofLoan" id="PurposeofLoan" required>
                       <option disabled selected value="">Select</option>
                      
                    </select>
                    <label class="input__label input__label--nao" for="PurposeofLoan">
                        <span class="input__label-content input__label-content--nao">PurposeofLoan*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <select class="input__field input__field--nao" name="MaritalStatus" id="MaritalStatus" required>
                       <option disabled selected value="">Select</option>
                       <option value="N">Single</option>
                       <option value="Y">Married</option>
                    </select>
                    <label class="input__label input__label--nao" for="input-3">
                        <span class="input__label-content input__label-content--nao">Marital Status*</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> 
                </section>

                <section class="content">
                    <h3 class="col-md-12 mrg-tpp">Employment Details.</h3>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao lastReporteddate1" placeholder="Joining Date" type="text" name="joining_date" id="joining_date" required />
                    <label class="input__label input__label--nao" for="joining_date">
                        <!-- <span class="input__label-content input__label-content--nao">When did You Join (Company Name)</span> -->
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CurrentWorkExp" id="CurrentWorkExp" required />
                    <label class="input__label input__label--nao" for="CurrentWorkExp">
                        <span class="input__label-content input__label-content--nao">Current Work Experience (In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="TotalWorkExp" id="TotalWorkExp" required />
                    <label class="input__label input__label--nao" for="TotalWorkExp">
                        <span class="input__label-content input__label-content--nao">Total Work Experience  (In Months)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyAddress1" id="CompanyAddress1" required />
                    <label class="input__label input__label--nao" for="CompanyAddress1">
                        <span class="input__label-content input__label-content--nao">CompanyAddress1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyAddress2" id="CompanyAddress2" required />
                    <label class="input__label input__label--nao" for="CompanyAddress2">
                        <span class="input__label-content input__label-content--nao">CompanyAddress2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="CompanyAddress3" id="CompanyAddress3" required />
                    <label class="input__label input__label--nao" for="CompanyAddress3">
                        <span class="input__label-content input__label-content--nao">CompanyAddress3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" name="OfficeEmailID" id="OfficeEmailID" oninput="office_email('OfficeEmailID')" required />
                    <label class="input__label input__label--nao" for="OfficeEmailID">
                        <span class="input__label-content input__label-content--nao">Office EmailID</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                    <div id="office_email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                </span>

                </section>
                
                
            <br>
            <div class="col-md-12">
             <a class="btn btn-primary btn-outline with-arrow mrg-top applicant" id="applicant_form" href="javascript:void(0);">CHECK ELIGIBILITY<i class="icon-arrow-right"></i></a>
            </div>
            </form>
            </div>

            
            
            
            
            
            <br>
            
            <section class="content" style="display:none;">
            <hr class="hr-sty">
            
            <div class="col-md-12">
             
             <h3>Congratulation<i><b class="text-primary">Nikhil</b></i>&nbsp;You are eligible for a loan of <b>25,00,000</b> <a class="bg-primary" href="#">Apply Now</i></a></h3>
             <br>
            </div>
                
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Loan Amount</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-2" />
                    <label class="input__label input__label--nao" for="input-2">
                        <span class="input__label-content input__label-content--nao">Loan Tenure</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao"> 
                    <select class="input__field input__field--nao" id="input-3">
                    <option></option>
                       <option>1 Year</option>
                       <option>2 Years</option>
                       <option>3 Years</option>
                       <option>4 Years</option>
                       <option>5 Years</option>
                    </select>
                    <label class="input__label input__label--nao" for="input-3">
                        <span class="input__label-content input__label-content--nao">EMI</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <span class="input input--nao">
                <div>Rate of Intrest</div>
                <span>18% </span>
                </span>
                <span class="input input--nao">
                <div>Proccesing Fee</div>
                <span>1.5%</span>
                </span>
                 <hr>
                <div class="col-md-12 text-danger mar-top"><input type="checkbox" name="check"/> I Agree to all the terms and conditions.</div>
            
            <div class="col-md-12">
             <a class="btn btn-primary btn-outline with-arrow mrg-top" href="#">Get Instant Approve<i class="icon-arrow-right"></i></a>
            </div>

            </section>
            
            <div style="display:none;">
            <section>
              <h1 class="text-center"><i>Congratulation</i></h1>
              <h3 class="text-info">Your Personal Loan of Rs.2,00,000</h3>
              
              
            </section>
            <br>
            <div class="col-md-12">
            <table class="table table-bordered" width="100%">
                <tbody>
                <tr>
                    <td class="bg-info">Rate of Intrest: <b>16%</b></td>
                    <td class="bg-info">Processing Fees: <b>Rs.2000</b></td>
                    <td class="bg-info">EMI: <b>Rs.4000</b></td>
                    <td class="bg-info">Loan Tenure: <b>3 Years</b></td>
                </tr>
             </tbody>
             </table>
             
             <h4>Our representive will get in touch with you. Please proceed to upload the necessary document for quick disbursal to learn more about IIFL Express loan <a href="#"><b class="text-sucsess">Click here</b></a></h4>
                </div>
                </div>
            </div>
            
              </form>
   
              
            </div>
        
            
         </div>
        
        
    </div>
    </div></div></div>

<br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>


<script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='PersonalEmailID' ){
                   var str =$('#PersonalEmailID').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function office_email(obj,val){
    // console.log(obj);
    if(obj=='OfficeEmailID' ){
                   var str =$('#OfficeEmailID').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#office_email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#office_email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">

    

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_city_name").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_city_name").val("");
          $(".search_city_name").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>
<script type="text/javascript">
$(document).ready(function(){

    $(".search_company").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchiiflcompanyajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           // console.log(data);

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
            
          $(".search_company").attr("data-value","Non Cat"); 
          // $(".search_company").attr("disabled", false);

         
        }else{
            $(".search_company").attr("data-value", ui.item.datavalue);
            $("#Company_Cat").val(ui.item.datavalue);       
          
             }
           }

        
      });
   });
</script>

<script type="text/javascript">
    function aadhar(obj,val){
        // console.log(obj);
        if(obj=='AadhaarNumber' ){
                   var str =$('#AadhaarNumber').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // console.log('Aadhar No. is valid one.!!');
                        $('#aadhar_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Aadhar No..!!');
                    $('#aadhar_number').show();

                    return false;
                  }
                  
    }
}
</script><script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='PAN' ){
                   var str =$('#PAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_number').show();

                    return false;
                  }
                  
    }
    }
</script>
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddate1").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var global_state='';
    // $('.otp').click(function(){
    //     alert('ok');
        

    //     var aadhar= $('#aadhar_num').val();
    //     var v_token = "{{csrf_token()}}";
    //     $.ajax({  
    //      type: "POST",  
    //      url: "{{URL::to('apply-iifl-loan-otp')}}",
    //      data: {
    //      "AadhaarNumber":aadhar,'_token': v_token},
    //      success: function(msg){
    //     console.log(msg);
            
          

    //     }  
    //   }); 



    // });

    $(document).ready(function(){
        // alert('ok');
        var v_token = "{{csrf_token()}}";
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-otp')}}",
         data: {
         '_token': v_token},
         success: function(msg){       
            populate_state(msg,'CurrentState');
            populate_state(msg,'PermanentState');
    }

    })
        function populate_state(msg,id){
            //console.log(msg+" "+id);
             var mySelect = $('#'+id);
            $.each(msg, function(id,state) {
               
                // console.log(state.state_Name +"  " +state.state_id);
                mySelect.append(
                    $('<option></option>').val(state.state_id).html(state.state_Name)
                );
            });
        }
});
</script>
<script type="text/javascript">
   $(document).ready(function(){
    dropdown_populate_api_call('CityMaster');
    dropdown_populate_api_call('EducationMaster');
    
    dropdown_populate_api_call('PurposeofLoan');
    });
   function dropdown_populate_api_call(param){
     var v_token = "{{csrf_token()}}";
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-dropdown')}}?param="+param,
         data: {
         '_token': v_token},
         success: function(msg){
            if(param=='CityMaster'){
                populate_city_education(msg,'CurrentCity');
                populate_city_education(msg,'PermanentCity');
                populate_city_education(msg,'City');
            }else if(param=='EducationMaster'){
                populate_city_education(msg,'Education');
            }
            else{
                populate_city_education(msg,'PurposeofLoan');
            }
    }
   

    });
         function populate_city_education(msg,id){
            // console.log(id);
             var mySelect = $('#'+id);
            $.each(msg, function(id,city) {
                mySelect.append(
                    $('<option></option>').val(city.id).html(city.value)
                );
            });
        }
   }
</script>

<script type="text/javascript">
    $('.next').click(function(event){
    //event.preventDefault();
    if(! $('#iifl_express_loan').valid()){
    // alert('okae');
    //      return false;
      }else{
        $('#iifl_express_loan').hide();
        $('#Eligibility_details').show();
        var email_address = $('#PersonalEmailID').val();
        // console.log(email_address);
        $('#Email').val(email_address);

        var mob_number = $('#MobileNo').val();
        $('#Mob_Num').val(mob_number);

        var stay_at = $('#City').val();
        // console.log(stay_at);
        $('#CurrentCity').val(stay_at);
        $('#PermanentCity').val(stay_at);


        // var name= $('#Company_Name option:selected').text();
         var name = $('#Company_Name').val();
        // console.log(name);
        var company =$('#Company_Name').attr('data-value');
        $('#CompanyNm').html(name);
        $('#CompanyName').val(name);
         $('#Name').html(name);

        var income = $('#Monthly_Salary').val();
        $('#Income').empty().append(income);
        $('#Salary').empty().append(income);
        $('#MonthlySalary').val(income);

        var emi= $('#Monthly_Obligation').val();
         $('#Current_EMI').empty().append(emi);
          $('#Current').empty().append(emi);
         $('#MonthlyObligation').val(emi);
         $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-eligibility')}}",
         data : $('#iifl_express_loan').serialize(),
         success: function(msg){
            var data=msg[0];
            var result=loan_eligibility_calc(data.Max_Tenure,data.pf,data.roi,data.foir);
            console.log(msg);

            return false;
               var data_1=data['data'];
               if(data_1){
                $('#express_form').hide();
                $('#express_loan_verify_form').show();
                    //console.log("hah");
                  }else{
                     window.location.href="{{URL::to('went-wrong')}}";
                    // console.log(data_1);
                  }
          

        }  
      });
        }

    });
    function loan_eligibility_calc(tenure,pf,roi,foir){
        // console.log(foir);
        // console.log(tenure+"  " +pf+ "  "+roi);
        var period =tenure*12;
        var rate =roi/12/100;
        // console.log(period);
        var salary=$('#Monthly_Salary').val();
        var obligation=$('#Monthly_Obligation').val();
        // console.log(salary);
        // console.log(obligation);

        var foir_calc = (salary)*foir/100;
        // console.log(foir_calc);
        var max_emi = foir_calc-obligation;
        // console.log(max_emi);
        var eligible_amount =max_emi/rate * (Math.pow(1 + rate,period) / (Math.pow(1 + rate,period) - 1));
        console.log(eligible_amount);

    }
</script>
<script type="text/javascript">
    $('#next_form').click(function(){
        alert('okae');
        if(! $('#eligibility_form').valid()){
    // alert('okae');
    //      return false;
      }else{
        $('#Applicant_Details').show();

      }

    });
</script>
<script type="text/javascript">
    $('#applicant_form').click(function(){
        // alert('ok');
        if(! $('#applicant_deatils').valid()){
            // alert('not valid');

        }else{
            $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-applicant1')}}",
         data : $('#applicant_deatils').serialize(),
         success: function(msg){
            console.log(msg);return false;
         
          
          

        }  
      }); 
        }

    });
</script>



