@include('layout.header')
<!-- Animate.css -->
    <link rel="stylesheet" href="css/iifl_css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/iifl_css/icomoon.css">
	  <link rel="stylesheet" href="css/iifl_css/input/set2.css"> 
	  
	  
	 
<style>
  .nav-tabs > li.active > a {background:#28a0ff;}
  .nav > li > a {background:#eee;color:#666;border:1px solid #ccc;}
  .panel-default > .panel-heading {background:#eff8ff;}
  .gray-txt {color:#999}
  .widt-half {width:6%;}
  .widt-half1 {width:24%;}
  .pading {padding:1px 20px 1px 1px;}
  .offer {padding:10px; background:#eff8ff;border:1px solid #eee;text-align:center;}
  .border-btm {padding:10px; border-bottom:1px solid #eee;}
  .bordered {border:1px dashed #ccc;padding:5px;}
</style>
<br>
<div class="container" id="fh5co-hero">

<div class="container">
<div class="row">
<div class="col-md-12 white-bg box-shadow">
<br>
<h3 class="text-center">Get a Personal Loan From TATA Capital in 3 Simple Steps.</h3>
<br>
<ul class="nav nav-tabs nav-justified">
  <li class="active active-bg"><a data-toggle="tab" href="#home"><b>1. ENTER A DETAILS</b></a></li>
  <li><a data-toggle="tab" href="#menu1"><b>2. SELECT A LOAN AMOUNT & TENURE</b></a></li>
  <li><a data-toggle="tab" href="#menu2"><b>3. SUBMIT YOUR APPLICATION</b></a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <h6 class="text-info">Let's Start with a few details to check your eligibility</h6>
<div class="panel-group" id="accordion1">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
        Your Personal Details  <span class="text-danger pull-right">Pending</span><span class="text-sucsess pull-right hidden">Completed</span></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
	    <section class="content">
	  <span class="input_exp input--nao widt-half">
                    <select class="input__field input__field--nao drop-arr" name="Title" id="Title" required>
                    <option disabled selected value=""></option>
					<option>Mr</option>
					<option>Mrs</option>
                    </select>
                    <label class="input__label input__label--nao" for="Title">
                    <span class="input__label-content input__label-content--nao">Title</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="First_Name" id="First_Name" required>
                    <label class="input__label input__label--nao" for="First_Name">
                    <span class="input__label-content input__label-content--nao">First Name As Per Pan</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Middle_Name" id="Middle_Name" required>
                    <label class="input__label input__label--nao" for="Middle_Name">
                    <span class="input__label-content input__label-content--nao">Middle Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				   <span class="input input--nao widt-half1">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Last_Name" id="Last_Name" required>
                    <label class="input__label input__label--nao" for="Last_Name">
                    <span class="input__label-content input__label-content--nao">Last Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  
				  <span class="input_exp input--nao">
				     <span>Gender</span>
					 <div class="gray-txt"> <input type="radio" name="gender" />Male &nbsp; &nbsp; <input type="radio" name="gender" /> Female</div>
				  </span>
				   <span class="input_exp input--nao">
				     <span>Date of birth</span>
					 <div>
					 <select class="drop-arr pading" name="days" id="days" required>
                    <option disabled selected value="">Day</option>
					<option>25</option>
                    </select>
					<select class="drop-arr pading" name="Month" id="Month" required>
                    <option disabled selected value="">Month</option>
					<option>Jan</option>
                    </select>
					<select class="drop-arr pading" name="Year" id="Year" required>
                    <option disabled selected value="">Year</option>
					<option>1980</option>
                    </select>
					</div>
				  </span>
				  <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Residential_Status" id="Residential_Status" required>
                    <option disabled selected value=""></option>
					<option>Resident Indian</option>
                    </select>
                    <label class="input__label input__label--nao" for="Residential_Status">
                    <span class="input__label-content input__label-content--nao">Residential Status</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				  
				  <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Personal_Email_Id" id="Personal_Email_Id" required>
                    <label class="input__label input__label--nao" for="Personal_Email_Id">
                    <span class="input__label-content input__label-content--nao">Personal Email Id</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Mobile_No" id="Mobile_No" required>
                    <label class="input__label input__label--nao" for="Mobile_No">
                    <span class="input__label-content input__label-content--nao">Mobile No</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="City_Name" id="City_Name" required>
                    <option disabled selected value=""></option>
					<option>Mumbai</option>
                    </select>
                    <label class="input__label input__label--nao" for="City_Name">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="City_Pincode" id="City_Pincode" required>
                    <label class="input__label input__label--nao" for="City_Pincode">
                    <span class="input__label-content input__label-content--nao">City Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				
				  
				  
				  
				
		</section>
	  </div>
    </div>
  </div>
  
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
        Your Professional Details</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
	  <section class="content">
	  <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Name_Company" id="Name_Company" required>
                    <option disabled selected value=""></option>
					<option>Amazon</option>
                    </select>
                    <label class="input__label input__label--nao" for="Name_Company">
                    <span class="input__label-content input__label-content--nao">Name of Comapny</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
	             <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Company_Name" id="Company_Name" required>
                    <label class="input__label input__label--nao" for="Company_Name">
                    <span class="input__label-content input__label-content--nao">Offical Email ID (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Current_Employment" id="Current_Employment" required>
                    <option disabled selected value=""></option>
					<option>1 Year & 6 Months</option>
                    </select>
                    <label class="input__label input__label--nao" for="Current_Employment">
                    <span class="input__label-content input__label-content--nao">Years in Current Employment</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Work_Experiance" id="Work_Experiance" required>
                    <option disabled selected value=""></option>
					<option>1 Year</option>
                    </select>
                    <label class="input__label input__label--nao" for="Work_Experiance">
                    <span class="input__label-content input__label-content--nao">Total Work Experiance (in years)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Fixed_Salary" id="Fixed_Salary" required>
                    <label class="input__label input__label--nao" for="Fixed_Salary">
                    <span class="input__label-content input__label-content--nao">Net Fixed Salary - Current Month</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Fixed_Salary_Previous" id="Fixed_Salary_Previous" required>
                    <label class="input__label input__label--nao" for="Fixed_Salary_Previous">
                    <span class="input__label-content input__label-content--nao">Net Fixed Salary - Previous Month</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Total_EMI" id="Total_EMI" required>
                    <label class="input__label input__label--nao" for="Total_EMI">
                    <span class="input__label-content input__label-content--nao">Total EMI That You Currently Pay (Amount)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Work_Experiance" id="Work_Experiance" required>
                    <option disabled selected value=""></option>
					<option>By Direct Credit in Bank</option>
                    </select>
                    <label class="input__label input__label--nao" for="Work_Experiance">
                    <span class="input__label-content input__label-content--nao">Mode of Salary</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input_exp input--nao">
				     <span>Any Cheque / ECS Bounces in the last 3 months</span>
					 <div class="gray-txt"> <input type="radio" name="gender" />Yes &nbsp; &nbsp; <input type="radio" name="gender" /> No</div>
				  </span>
				  
				  <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Annual Bonus" id="Annual_Bonus" required>
                    <label class="input__label input__label--nao" for="Total_EMI">
                    <span class="input__label-content input__label-content--nao">Annual Bonus</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
		<section>
	  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
        Your Residence Details </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
	     
		<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Residance_Type" id="Residance_Type" required>
                    <option disabled selected value=""></option>
					<option>Owned by self / spouse</option>
                    </select>
                    <label class="input__label input__label--nao" for="Residance_Type">
                    <span class="input__label-content input__label-content--nao">Residance Type</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  
		        	<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Residance_Type" id="Residance_Type" required>
                    <option disabled selected value=""></option>
					<option>More Then Six Years</option>
                    </select>
                    <label class="input__label input__label--nao" for="Residance_Type">
                    <span class="input__label-content input__label-content--nao"> Years in Current Residance</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
	  </div>
    </div>
  </div>
</div>
  </div>
  
  
  
  <div id="menu1" class="tab-pane fade">
    <p class="text-left">Your Personal Loan Application No: <b>1000567</b></p>
	<p class="text-center">We Have Found The Offer best Suited For Your Requirement</p>
	<h4 class="offer">OUR OFFER</h4>
	<div class="col-md-12 bordered">
	  <div class="col-md-6">
	  <p class="border-btm">For Chosen Loan Amount & Tenure, You Pay </p>
	  <table class="table table-bordered">
	     <tr>
		   <td>Monthly Payment (EMI)</td>
		   <td><b>Rs.12,450</b></td>
		 </tr>
		 <tr>
		   <td>Interest Rate (Monthly Reducing) </td>
		   <td><b>11.99% (Fixed)</b></td>
		 </tr>
	  </table>
	  </div>
	  <div class="col-md-6">
	  <span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Loan_Amount" id="Loan_Amount" required>
                    <label class="input__label input__label--nao" for="Loan_Amount">
                    <span class="input__label-content input__label-content--nao">Your Loan Amount</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
		
		<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Your_Tenure" id="Your_Tenure" required>
                    <option disabled selected value=""></option>
					<option>1 Year</option>
                    </select>
                    <label class="input__label input__label--nao" for="Your_Tenure">
                    <span class="input__label-content input__label-content--nao"> Your Tenure</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
	  </div>
	  
	  
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-6 mrg-top"><button class="btn btn-primary btn-outline with-arrow">Proceed Loan Amount With Tenure<i class="icon-arrow-right"></i></button></div>
  </div>
  
  
  
  <div id="menu2" class="tab-pane fade">
    
	<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="Marital_Status" id="Marital_Status" required>
                    <option disabled selected value=""></option>
					<option>Single</option>
                    </select>
                    <label class="input__label input__label--nao" for="Marital_Status">
                    <span class="input__label-content input__label-content--nao">Marital Status</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
		<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Mother_Maiden_Name" id="Mother_Maiden_Name" required>
                    <label class="input__label input__label--nao" for="Mother_Meiden_Name">
                    <span class="input__label-content input__label-content--nao">Mother Maiden Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
    
	<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Pan_Card" id="Pan_Card" required>
                    <label class="input__label input__label--nao" for="Pan_Card">
                    <span class="input__label-content input__label-content--nao">Pan Card</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
				
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Address_Line_1" id="Address_Line_1" required>
                    <label class="input__label input__label--nao" for="Address_Line_1">
                    <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Address_Line_2" id="Address_Line_2" required>
                    <label class="input__label input__label--nao" for="Address_Line_2">
                    <span class="input__label-content input__label-content--nao">Address Line 2 (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Address_Line_3" id="Address_Line_3" required>
                    <label class="input__label input__label--nao" for="Address_Line_3">
                    <span class="input__label-content input__label-content--nao">Address Line 3 (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
				
				
				
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="City" id="City" required>
                    <label class="input__label input__label--nao" for="City">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="State" id="State" required>
                    <label class="input__label input__label--nao" for="State">
                    <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Pincode" id="Pincode" required>
                    <label class="input__label input__label--nao" for="Pincode">
                    <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
				
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Office_Name" id="Office_Name" required>
                    <label class="input__label input__label--nao" for="Office_Name">
                    <span class="input__label-content input__label-content--nao">Office Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Office_Address_1" id="Office_Address_1" required>
                    <label class="input__label input__label--nao" for="Office_Address_1">
                    <span class="input__label-content input__label-content--nao">Office Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Office_Address_2" id="Office_Address_2" required>
                    <label class="input__label input__label--nao" for="Office_Address_2">
                    <span class="input__label-content input__label-content--nao">Office Address Line 2 (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Office_Address_3" id="Office_Address_3" required>
                    <label class="input__label input__label--nao" for="Office_Address_3">
                    <span class="input__label-content input__label-content--nao">Office Address Line 3 (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="City" id="City" required>
                    <option disabled selected value=""></option>
					<option>Mumbai</option>
                    </select>
                    <label class="input__label input__label--nao" for="City">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="State" id="State" required>
                    <label class="input__label input__label--nao" for="State">
                    <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Pincode" id="Pincode" required>
                    <label class="input__label input__label--nao" for="Pincode">
                    <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="STD_Code" id="STD_Code" required>
                    <label class="input__label input__label--nao" for="STD_Code">
                    <span class="input__label-content input__label-content--nao">STD Code</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                    <input type="hidden" name="Company_Cat" id="Company_Cat" value="">

                    <input type="text" class="input__field input__field--nao search_company"  name="Phone_No" id="Phone_No" required>
                    <label class="input__label input__label--nao" for="Phone_No">
                    <span class="input__label-content input__label-content--nao">Phone No</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="City" id="City" required>
                    <option disabled selected value=""></option>
					<option>Graduate</option>
                    </select>
                    <label class="input__label input__label--nao" for="City">
                    <span class="input__label-content input__label-content--nao">Educational Qualification</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
	
	
	<div class="col-md-12">
	<br>
	<p> <input type="checkbox" name="checkbx"/> I agree to the Disclaimer. Terms & Conditions Apply. I authorize TCFSL to make any enquiries with any other finance company/bank/registered credit bureau regarding my credit history with them. </p>
	<div class="col-md-5"></div>
	<div class="col-md-6 mrg-top"><button class="btn btn-primary btn-outline with-arrow">Apply Now<i class="icon-arrow-right"></i></button></div>
	</div>
	
  </div>
</div>

</div>
</div>
</div>
</div>
<br>
@include('layout.footer')
@include('layout.script')

<script>
            (function() {
                
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }
                

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
            
            
            
            
            
        </script>
        <script>
            (function() {
                
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'select.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }
                

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
            
            
            
            
            
        </script>

