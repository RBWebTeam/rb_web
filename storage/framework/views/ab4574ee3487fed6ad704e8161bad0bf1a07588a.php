<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
  .upload li{padding:5px; list-style-type:none;}
  .no-margin {margin:0px;}
</style>


<br>
<div class="container" id="fh5co-hero">

<div class="container">
<div class="row">
<h3 class="text-center">Get a Personal Loan From TATA Capital in 3 Simple Steps.</h3>
<br>
<div class="col-md-12 white-bg box-shadow">


<br>
<ul class="nav nav-tabs nav-justified">
  <li class="active active-bg home" ><a data-toggle="tab" href="#home" ><b>1. ENTER A DETAILS</b></a></li>
  <li class="disabled menu11"><a data-toggle="tab" href="#menu11"  ><b>2. SELECT A LOAN AMOUNT & TENURE</b></a></li>
  <li class="disabled menu22" ><a data-toggle="tab" href="#menu22"   ><b>3. SUBMIT YOUR APPLICATION</b></a></li>
</ul>
<div class="tab-content">

<!-- 1. ENTER A DETAILS -->
<div id="home" class="tab-pane fade in active">
              <h6 class="text-info">Let's Start with a few details to check your eligibility</h6>

<form id="apply_tatacapital" class="form-horizontal" method="post" >
 <div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            Your Personal Details  <span class="text-danger pull-right">Pending</span><span class="text-sucsess pull-right hidden">Completed</span></a>
          </h4>
        </div>

  <div id="collapse1" class="panel-collapse collapse in"> <!-- accordion -->
        <div class="panel-body">
	    <section class="content">
	  <span class="input_exp input--nao widt-half">
                    <select class="input__field input__field--nao drop-arr" name="title" id="title" required>
                    <option disabled selected value=""></option>
					<option value="Mr.">Mr</option>
					<option value="Mrs.">Mrs</option>
                    </select>
                    <label class="input__label input__label--nao" for="title">
                    <span class="input__label-content input__label-content--nao">Title</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                  <!--   <input type="hidden" name="Company_Cat" id="Company_Cat" value="1"> -->

                    <input type="text" class="input__field input__field--nao "  name="fname" id="fname" required>
                    <label class="input__label input__label--nao" for="fname">
                    <span class="input__label-content input__label-content--nao">First Name As Per Pan</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input input--nao">
                  <!--   <input type="hidden" name="Company_Cat" id="Company_Cat" value=""> -->

                    <input type="text" class="input__field input__field--nao "  name="mname" id="mname" required>
                    <label class="input__label input__label--nao" for="mname">
                    <span class="input__label-content input__label-content--nao">Middle Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				   <span class="input input--nao widt-half1">
                    <!-- <input type="hidden" name="Company_Cat" id="Company_Cat" value=""> -->

                    <input type="text" class="input__field input__field--nao "  name="lname" id="lname" required>
                    <label class="input__label input__label--nao" for="lname">
                    <span class="input__label-content input__label-content--nao">Last Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  
				  <span class="input_exp input--nao brdr-btm">
				     <span>Gender</span>
					 <div class="gray-txt"> <input type="radio" name="gender"  checked="checked" value="M" />Male &nbsp; &nbsp; <input type="radio" name="gender" value="F" /> Female</div>
				  </span>


				  
           <span class="input input--nao widt-half1">
                  
                    <input type="text" class="input__field input__field--nao tatacapitaldate"  name="dob" id="dob" required>
                    <label class="input__label input__label--nao" for="dob">
                    <span class="input__label-content input__label-content--nao">Date of birth</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
         </span>



				  <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="residentialStatus" id="residentialStatus" required disabled="disabled">
                    
					 <option  selected value="Indian">RESIDENT INDIAN</option>
                      <option value="NRI">NRI-USA</option>
                      <option value="NRI">NRI-UK</option>
                      <option value="NRI">NRI-BAHRAIN</option>
                      <option value="NRI">NRI-SINGAPORE</option>
                      <option value="NRI">NRI-HONGKONG</option>
                      <option value="NRI">NRI-OTHERS</option>
                       <option value="NRI">FOREIGN NATIONAL</option>
                       <option value="NAVY">MERCHANT NAVY</option>
                    </select>
                    <label class="input__label input__label--nao" for="residentialStatus">
                    <span class="input__label-content input__label-content--nao">Residential Status</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				  
				  <span class="input input--nao">
                   

                    <input type="text" class="input__field input__field--nao "  name="resEmailId" id="resEmailId" required oninput="emailtatacapital('resEmailId',this)">
                    <label class="input__label input__label--nao" for="resEmailId">
                    <span class="input__label-content input__label-content--nao">Personal Email Id</span>
                    </label>
                    <span class="resEmailId" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input input--nao">
                  

                    <input type="text" class="input__field input__field--nao "   name="resMobNo" id="resMobNo" required onkeypress="return fnAllowNumeric(event)" minlength="10"   maxlength="10">
                    <label class="input__label input__label--nao" for="resMobNo">
                    <span class="input__label-content input__label-content--nao">Mobile No</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

				 <!--  <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr"  name="City" id="City" required>
                    <option disabled selected value=""> </option>
					<option>Mumbai</option>
                    </select>
                    <label class="input__label input__label--nao" for="City">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> -->
				
				<span class="input input--nao">
                    <input type="text" class="input__field input__field--nao  "    name="resPincode" id="resPincode" required onkeypress="return fnAllowNumeric(event)"    maxlength="6">
                    <label class="input__label input__label--nao" for="resPincode">
                    <span class="input__label-content input__label-content--nao">City Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>


                   <!-- <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr"  name="Profession" id="Profession" required>
                    <option disabled selected value=""> </option>
                    <option>Salaried</option>
                    </select>
                    <label class="input__label input__label--nao" for="Profession">
                    <span class="input__label-content input__label-content--nao">Profession</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> -->
                <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="customerCategory" id="customerCategory" required>
                    <option disabled selected value=""></option>
                    <option value="0213">HOUSE WIFE</option>
                    <option value="0206">OTHERS</option>
                    <option value="0214">RETIRED</option>
                    <option value="0103">SALARIED</option>
                    <option value="0209">SELF EMPLOYED NON PROFESSIONAL</option>
                    <option value="0202">SELF EMPLOYED PROFESSIONAL</option>
                    </select>
                    <label class="input__label input__label--nao" for="customerCategory">
                    <span class="input__label-content input__label-content--nao">Profession</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
                           


					
    	  </section>
       </div>
    </div> <!-- //accordion -->
</div>
  
  

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Your Professional Details</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
	  <section class="content">


	  <!-- span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="companyName" id="companyName" required>
                    <option disabled selected value=""></option>
					<option>Amazon</option>
                    </select>
                    <label class="input__label input__label--nao" for="companyName">
                    <span class="input__label-content input__label-content--nao">Name of Comapny</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
        </span> -->
 <span class="input input--nao">
                  <input type="text" class="input__field input__field--nao  "  name="companyName" id="companyName" required  >
                    <label class="input__label input__label--nao" for="companyName">
                    <span class="input__label-content input__label-content--nao">Name of Comapny</span>
                    </label>
                     
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
 </span>

 <input type="hidden" name="employerCode"  id="employerCode" >   <!--for  company code -->







	             <span class="input input--nao">
                  <input type="text" class="input__field input__field--nao  "  name="officeEmailId" id="officeEmailId" required oninput="emailtatacapital('officeEmailId',this)">
                    <label class="input__label input__label--nao" for="officeEmailId">
                    <span class="input__label-content input__label-content--nao">Offical Email ID (Optional)</span>
                    </label>
                    <span class="officeEmailId" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="yrsInCurrentEmp" id="yrsInCurrentEmp" required>
                   <option disabled selected value="" >   </option>
                    <option value="0.3"> Less than 6 months </option>
                    <option value="0.5"> Less than 1 year </option>
                    <option value="1"> 1 </option>
                    <option value="1.5"> 1 year and 6 months </option>  <!-- CR141136 sachin-->
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="7"> More than 6 years </option>
                    </select>
                    <label class="input__label input__label--nao" for="yrsInCurrentEmp">
                    <span class="input__label-content input__label-content--nao">Years in Current Employment</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="totWorkExp" id="totWorkExp" required>
                    <option disabled selected value="" >   </option>
                    <option value="0.3"> Less than 6 months </option>
                    <option value="0.5"> Less than 1 year </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="7"> More than 6 years </option>
                    </select>
                    <label class="input__label input__label--nao" for="totWorkExp">
                    <span class="input__label-content input__label-content--nao">Total Work Experiance (in years)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
				  <span class="input input--nao">
                   

                    <input type="text" class="input__field input__field--nao  "   name="currMonthIncome" id="currMonthIncome" required onkeypress="return fnAllowNumeric(event)" >
                    <label class="input__label input__label--nao" for="currMonthIncome">
                    <span class="input__label-content input__label-content--nao">Net Fixed Salary - Current Month</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>


				<span class="input input--nao">
                    <input type="text" class="input__field input__field--nao  "  name="prevMonthSalary" id="prevMonthSalary" required onkeypress="return fnAllowNumeric(event)" >
                    <label class="input__label input__label--nao" for="prevMonthSalary">
                    <span class="input__label-content input__label-content--nao">Net Fixed Salary - Previous Month</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao  "  name="nextMonthSalary" id="nextMonthSalary" required onkeypress="return fnAllowNumeric(event)" >
                    <label class="input__label input__label--nao" for="nextMonthSalary">
                    <span class="input__label-content input__label-content--nao">Net Fixed Salary - Next Month</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>


				<span class="input input--nao"  >
                    <input type="text" class="input__field input__field--nao  "  name="obligationMonth" id="obligationMonth" required onkeypress="return fnAllowNumeric(event)">
                    <label class="input__label input__label--nao" for="obligationMonth">
                    <span class="input__label-content input__label-content--nao">Total EMI That You Currently Pay (Amount)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				
                
				<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="modeOfSalary" id="modeOfSalary" required>
                    <option disabled selected value="" >   </option>
                    <option value="P"> PDC </option>
                    <option value="D"> Direct </option>
                    </select>
                    <label class="input__label input__label--nao" for="modeOfSalary">
                    <span class="input__label-content input__label-content--nao">Mode of Salary</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
                  <br>

				  <span class="input_exp input--nao">
				     <span>Any Cheque / ECS Bounces in the last 3 months</span>
					 <div class="gray-txt"> <input type="radio" name="noOfChequeBounced" value="1" />Yes &nbsp; &nbsp; <input type="radio" name="noOfChequeBounced" value="0"  checked="checked" /> No</div>
				  </span>

                   <span class="input_exp input--nao">
                     <span>Main Banking Req</span>
                     <div class="gray-txt"> <input type="radio" name="mainBankingReq" value="Y" checked="checked"/>Yes &nbsp; &nbsp; <input type="radio" name="mainBankingReq" value="N"   /> No</div>
                  </span>

                   <span class="input_exp input--nao">
                     <span>PDC/ECS Required</span>
                     <div class="gray-txt"> <input type="radio" name="pdcEcsReq" checked="checked" value="Y" />Yes &nbsp; &nbsp; <input type="radio" name="pdcEcsReq" value="N"   /> No</div>
                  </span>
				  
			<span class="input input--nao">
                <input type="text" class="input__field input__field--nao  "   name="bankName" id="bankName" required  >
                    <label class="input__label input__label--nao" for="bankName">
                    <span class="input__label-content input__label-content--nao">Bank Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
            </span>

 
                <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="accountType" id="accountType" required>
                    <option disabled selected value="" >   </option>
                    <option value="CC"> CC</option>
                    <option value="CR"> Current</option>
                     <option value="SV"> Saving</option>
                       <option value="OD"> Over Draft</option>
                    </select>
                    <label class="input__label input__label--nao" for="accountType">
                    <span class="input__label-content input__label-content--nao">Account Type</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

 

                <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="industry" id="industry" required>
                    <option disabled selected value="" >   </option>
                    <option value="01"> IT</option>
                    <option value="02"> BPO</option>
                     <option value="03"> Insurance</option>
                       <option value="04">Others</option>
                    </select>
                    <label class="input__label input__label--nao" for="industry">
                    <span class="input__label-content input__label-content--nao">Industry</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
                  <br>

                   <span class="input_exp input--nao">
                     <span>Include Financial</span> 
                     <div class="gray-txt"> <input type="radio" name="includeFinancial" checked="checked" value="Y" />Yes &nbsp; &nbsp; <input type="radio" name="includeFinancial" value="N"   /> No</div>
                  </span>

                   <span class="input_exp input--nao">
                     <span>Include Income </span>
                     <div class="gray-txt"> <input type="radio" name="includeIncomeFlag" checked="checked" value="Y" />Yes &nbsp; &nbsp; <input type="radio" name="includeIncomeFlag" value="N"   /> No</div>
                  </span>

                  <input type="hidden" name="inwardBounce" value="0">
                  <input type="hidden" name="noOfMonths" value="1">
                 
				
		<section>
	  </div>
    </div>
</div>



  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Your Residence Details </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
		<span class="input_exp input--nao">
         <select class="input__field input__field--nao drop-arr" name="residenceOwnedBy" id="residenceOwnedBy" required>
              <option disabled selected value="" >  </option>
              <option value="BA">Bachelor Accommodation</option>
              <option value="CP">COMPANY PROVIDED</option>
              <option value="PS">PAGADI SYSTEM-not work</option>
              <option value="P">PARENTS</option>
              <option value="RL">RELATIVE</option>
              <option value="R">RENTED</option>
              <option value="S">SELF</option>
              <option value="SO">SIBLING OWNED-not work</option>
              <option value="SQ">STAFF QUARTER-not work</option>
                    </select>
                    <label class="input__label input__label--nao" for="residenceOwnedBy">
                    <span class="input__label-content input__label-content--nao">Residance Type</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
 
                   <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="incomeCategory" id="incomeCategory" required>
              <option disabled selected value="" > </option>
              <option value="009">INSURANCE</option>
              <option value="007">RENT RECEIPTS</option>
              <option value="005">SAL: SUPER CAT A</option>
              <option value="004">SAL: TATA EMPL</option>
              <option value="006">SAL: UNLISTED CAT</option>
              <option value="001">SAL:CATEGORY A</option>
              <option value="002">SAL:CATEGORY B</option>
              <option value="003">SAL:CATEGORY C</option>
              <option value="202">SENP: MFG/Trader/Printer</option>
              <option value="201">SENP: SERVICE PROVIDER</option>
              <option value="008">SEP Doctors Gross Receipts</option>
              <option value="103">SEP: DOCTOR</option>
              <option value="104">SEP: DOCTORS-OTHERS</option>
              <option value="101">SEP: OTHERS</option>
              
                    </select>
                    <label class="input__label input__label--nao" for="incomeCategory">
                    <span class="input__label-content input__label-content--nao"> Income Category</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>


				  
		      <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="yrsCurrentResidence" id="yrsCurrentResidence" required>
              <option disabled selected value="" > </option>
              <option value="0.5">Less than 1 year</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">More than 6 years</option>
                    </select>
                    <label class="input__label input__label--nao" for="yrsCurrentResidence">
                    <span class="input__label-content input__label-content--nao"> Years in Current Residance</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

 
              <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="employerType" id="employerType" required>
              <option disabled selected value="" > </option>
              <option value="Multinational">Multinational</option>
              <option value="Central Govt">Central Govt</option>
              <option value="State Govt">State Govt</option>
              <option value="Others">Others</option>
              <option value="Partnership">Partnership</option>
              <option value="Private Limited">Private Limited</option>
              <option value="Proprietorship">Proprietorship</option>
              <option value="Public Limited">Public Limited</option>
              <option value="Public Sector">Public Sector</option>
                    </select>
                    <label class="input__label input__label--nao" for="employerType">
                    <span class="input__label-content input__label-content--nao">Employer Type</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

                  

                 
                 

                  <!-- <input type="hidden" name="pro"> -->
    	  </div>
        </div>
       </div>

                        <div class="col-md-6 mrg-top"><button class="btn btn-primary btn-outline with-arrow" id="submitform">Next<i class="icon-arrow-right"></i></button></div>

      </div>
   </form>
</div> 

<!-- 1. ENTER A DETAILS -->
  
  <div id="menu11" class="tab-pane fade">
    <p class="text-left">Your Personal Loan Application No: <b>1000567</b></p>
	<p class="text-center">We Have Found The Offer best Suited For Your Requirement</p>
	<h4 class="offer">OUR OFFER</h4>
	<div class="col-md-12 bordered">
	  <div class="col-md-6">
	  <p class="border-btm">For Chosen Loan Amount & Tenure, You Pay </p>
	  <table class="table table-bordered">
	     <tr>
		   <td>Monthly Payment (EMI)</td>

		   <td><b id="amount">0</b></td>
		 </tr>
		 <tr>
		   <td>Interest Rate (Monthly Reducing) </td>
		   <td><b>11.99% (Fixed)</b></td>
		 </tr>
	  </table>
	  </div>

  <form  method="post" id="OUR_OFFER">
	  <div class="col-md-6">
	  <span class="input input--nao">
               <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">

                    <input type="text" class="input__field input__field--nao "  name="loanAmount" id="loanAmount" required onkeypress="return fnAllowNumeric(event)">
                    <label class="input__label input__label--nao" for="loanAmount">
                    <span class="input__label-content input__label-content--nao">Your Loan Amount</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
		
        <input type="hidden" name="loaninterest" id="loaninterest" value="11.99">
		<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="loanTerm" id="loanTerm" required>
                    <option disabled selected value=""></option>
					<option value="1">1 Year</option>
                    </select>
                    <label class="input__label input__label--nao" for="loanterm">
                    <span class="input__label-content input__label-content--nao"> Your Tenure</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>
	  </div>
	   <input type="hidden" name="emi" id="emi" value="10743.57">


	</div>
	<div class="col-md-4"></div>
	<div class="col-md-6 mrg-top"><button class="btn btn-primary btn-outline with-arrow" id="tataemi">Proceed Loan Amount With Tenure<i class="icon-arrow-right"></i></button></div>
  </div>
  
   </form>
  
  <div id="menu22" class="tab-pane fade">

<form  method="poat " id="yourapplication">

 <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">

    
	<span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="maritalStatus" id="maritalStatus" required>
                    <option disabled selected value=""></option>
					<option value="D">Divorced</option>
                    <option value="M">Married</option>
                    <option value="S">Unmarried</option>
                    <option value="W">widow</option>

 

                    </select>
                    <label class="input__label input__label--nao" for="maritalStatus">
                    <span class="input__label-content input__label-content--nao">Marital Status</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

                
                 <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao "  name="relationshipFirstName" id="relationshipFirstName" required>
                    <label class="input__label input__label--nao" for="relationshipFirstName">
                    <span class="input__label-content input__label-content--nao">Name of the person</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>


		          <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao "  name="motherMaidenName" id="motherMaidenName" required>
                    <label class="input__label input__label--nao" for="Mother_Meiden_Name">
                    <span class="input__label-content input__label-content--nao">Mother Maiden Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

            
               <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="relationship" id="relationship" required>
                    <option disabled selected value=""></option>
                    <option value="F">Father</option>
                    <!-- <option value="S">Spouse</option>
                    <option value="NA">NA can be passed</option> -->
                    </select>
                    <label class="input__label input__label--nao" for="relationship">
                    <span class="input__label-content input__label-content--nao">relationship</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

                   
                   

              
	           <span class="input input--nao">
                  <input type="text" class="input__field input__field--nao "     name="idValue" id="idValue" required oninput="pan_card('idValue',this)">
                    <label class="input__label input__label--nao" for="idValue" >
                    <span class="input__label-content input__label-content--nao">Pan Card</span>
                    </label>
                     <span class="idValue"  style="display:none;color: red;font-size:12px;">Enter Valid Pan No.</span>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                      <input type="hidden" name="idType" value="07">   
                </span>


				<span class="input input--nao">
                 <input type="text" class="input__field input__field--nao "  name="resAddress1" id="resAddress1" required>
                    <label class="input__label input__label--nao" for="resAddress1">
                    <span class="input__label-content input__label-content--nao">Applicant Address Line1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                
                <span class="input input--nao">
                 <input type="text" class="input__field input__field--nao "  name="resAddress2" id="resAddress2" required>
                    <label class="input__label input__label--nao" for="resAddress2">
                    <span class="input__label-content input__label-content--nao">Applicant Address Line2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                 <input type="text" class="input__field input__field--nao "  name="resAddress3" id="resAddress3" required>
                    <label class="input__label input__label--nao" for="resAddress3">
                    <span class="input__label-content input__label-content--nao">Applicant Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                 <input type="text" class="input__field input__field--nao "  name="resAddress4" id="resAddress4" required>
                    <label class="input__label input__label--nao" for="resAddress4">
                    <span class="input__label-content input__label-content--nao">Applicant Address Line 4</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                <br>

               


                <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao tatacapitalstatemaster"  name="resState" id="resState" required>
                    <label class="input__label input__label--nao" for="resState">
                    <span class="input__label-content input__label-content--nao">State</spa>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                 <input type="hidden" name="losState" id="losState">
                </span>


                 <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao tatacapitalcity"  name="resCity" id="resCity" required>
                    <label class="input__label input__label--nao" for="resCity">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                     <input type="hidden" name="losCity" id="losCity">
                </span>
                


              <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="noOfYearsInCity" id="noOfYearsInCity" required>
              <option disabled selected value="" > </option>
              <option value="0.5">Less than 1 year</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">More than 6 years</option>
                    </select>
                    <label class="input__label input__label--nao" for="noOfYearsInCity">
                    <span class="input__label-content input__label-content--nao">No Of Years In City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>


                <br>
                  <span class="input input--nao">
                <input id="selectaddress" type="checkbox" name="selectaddress" >  Same As Above
                </span>
                <br>

				
			  <span class="input input--nao">
                <input type="text" class="input__field input__field--nao "  name="permAddr1" id="permAddr1" required>
                    <label class="input__label input__label--nao" for="permAddr1">
                    <span class="input__label-content input__label-content--nao">Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

				<span class="input input--nao">
                <input type="text" class="input__field input__field--nao "  name="permAddr2" id="permAddr2" required>
                    <label class="input__label input__label--nao" for="permAddr2">
                    <span class="input__label-content input__label-content--nao">Address Line 2</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                 
                <span class="input input--nao">
                <input type="text" class="input__field input__field--nao "  name="permAddr3" id="permAddr3" required>
                    <label class="input__label input__label--nao" for="permAddr3">
                    <span class="input__label-content input__label-content--nao">Address Line 3</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                    
				    <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao tatacapitalstatemasterp"  name="losPermState" id="losPermState" required>
                    <label class="input__label input__label--nao" for="losPermState">
                    <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>

                </span>

			
				<span class="input input--nao">
                  <input type="text" class="input__field input__field--nao tatacapitalcityp"  name="losPermCity" id="losPermCity" required>
                    <label class="input__label input__label--nao" for="losPermCity">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> 

			

                
				<span class="input input--nao">
                    <input type="text" class="input__field input__field--nao "  name="permPincode" id="permPincode" required onkeypress="return fnAllowNumeric(event)"    maxlength="6">
                    <label class="input__label input__label--nao" for="permPincode">
                    <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                  <span class="input_exp input--nao">
                    <select class="input__field input__field--nao drop-arr" name="employmentType" id="employmentType" required>
                    <option disabled selected value=""></option>
                    <option value="SAL">SALARIED</option>
                    <option value="SE">SELF EMPLOYED NON PROFESSIONAL</option>
                    <option value="SEP">SELF EMPLOYED PROFESSIONAL</option>
                    </select>
                    <label class="input__label input__label--nao" for="employmentType">
                    <span class="input__label-content input__label-content--nao">Employment Type</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>


				
				
			<!-- 	<span class="input input--nao">
                  <input type="text" class="input__field input__field--nao  "  name="Office_Name" id="Office_Name" required>
                    <label class="input__label input__label--nao" for="Office_Name">
                    <span class="input__label-content input__label-content--nao">Office Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span> -->

				<span class="input input--nao">
                    <input type="text" class="input__field input__field--nao "  name="empAddressLine1" id="empAddressLine1" required>
                    <label class="input__label input__label--nao" for="empAddressLine1">
                    <span class="input__label-content input__label-content--nao">Office Address Line 1</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                   

                    <input type="text" class="input__field input__field--nao "  name="empAddressLine2" id="empAddressLine2" required>
                    <label class="input__label input__label--nao" for="empAddressLine2">
                    <span class="input__label-content input__label-content--nao">Office Address Line 2 (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                 

                    <input type="text" class="input__field input__field--nao  "  name="empAddressLine3" id="empAddressLine3" required>
                    <label class="input__label input__label--nao" for="empAddressLine3">
                    <span class="input__label-content input__label-content--nao">Office Address Line 3 (Optional)</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>

                <span class="input input--nao">
                    <input type="text" class="input__field input__field--nao tatacapitalstatemasteremp "  name="empProvince" id="empProvince" required>
                    <label class="input__label input__label--nao" for="empProvince">
                    <span class="input__label-content input__label-content--nao">State</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>


				<span class="input_exp input--nao">
                    <input  class="input__field input__field--nao drop-arr tatacapitalcityemp" type="text" name="empCity" id="empCity" required>
                    <label class="input__label input__label--nao" for="empCity">
                    <span class="input__label-content input__label-content--nao">City</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                  </span>

				


				<span class="input input--nao">
                    <input type="text" class="input__field input__field--nao "  name="empPostalCode" id="empPostalCode" required onkeypress="return fnAllowNumeric(event)"    maxlength="6">
                    <label class="input__label input__label--nao" for="empPostalCode">
                    <span class="input__label-content input__label-content--nao">Pincode</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
                 
                  <center id="loader_id"></center>
              

				<!--span class="input input--nao">
                   <input type="text" class="input__field input__field--nao search_company"  name="STD_Code" id="STD_Code" required onkeypress="return fnAllowNumeric(event)" value="no">
                    <label class="input__label input__label--nao" for="STD_Code">
                    <span class="input__label-content input__label-content--nao">STD Code</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                    </svg>
                </span>
				<span class="input input--nao">
                   

                    <input type="text" class="input__field input__field--nao  "  value="no" name="Phone_No" id="Phone_No" required onkeypress="return fnAllowNumeric(event)">
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
                  </span-->
	
	
	<div class="col-md-12 mrg-btm">
	<br>
	<p> <input type="checkbox"  id="disclaimer"/> I agree to the Disclaimer. Terms & Conditions Apply. I authorize TCFSL to make any enquiries with any other finance company/bank/registered credit bureau regarding my credit history with them. </p>
	<div class="col-md-5"></div>


<input type="hidden" name="requestType" id="requestType" value="P">
<input type="hidden" name="productCode" id="productCode" value="7001-0101">
<input type="hidden" name="loanType" id="loanType" value="PL">
<!-- <input type="hidden" name="loanTerm" id="loanTerm"  > -->
<input type="hidden" name="financeType" id="financeType" value="001">
<input type="hidden" name="loanSubType" id="loanSubType" value="PL">
<input type="hidden" name="usage" id="usage" value="101">
<input type="hidden" name="channelPc" id="channelPc" value="1000">

<input type="hidden" name="distributionChannelPc" id="distributionChannelPc" value="001">
<!-- <input type="text" name="sanctionedAmount" id="sanctionedAmount"  > -->
<input type="hidden" name="loanPriority" id="loanPriority" value="02">
<input type="hidden" name="softApproval" id="softApproval" value="04">
<input type="hidden" name="customerType" id="customerType" value="I">

<input type="hidden" name="source" id="source" value="Rupeeboss">
<input type="hidden" name="password" id="password" value="Rupeeboss@123">
 
 
 <input type="hidden" name="interestRate" id="interestRate" value="12.75">     <!-- Interest rate as per the offer -->
 <input type="hidden" name="processingFee" id="processingFee" value="4000">  <!--   need to discuss ? -->
  <input type="hidden" name="iPAddress" id="iPAddress" value="10.0.47.42">

  <input type="hidden" name="imeiNo" id="imeiNo" value="">
   <input type="hidden" name="functionName" id="functionName" value="createPLApplication">

<input type="hidden" name="creLoginId" id="creLoginId" value="511498">

<input type="hidden" name="webtopNo" id="webtopNo" value="">
 <input type="hidden" name="applicantType" id="applicantType" value="P">
 <input type="hidden" name="cifNumber" id="cifNumber" value="">
<input type="hidden" name="sageProduct" id="sageProduct" value="Personal Loans">

<input type="hidden" name="applicantOccupation" id="applicantOccupation" value="">
<input type="hidden" name="empCountry" id="empCountry" value="IN">
<input type="hidden" name="companyCategory" id="companyCategory" value="">
<input type="hidden" name="financingCompany" id="financingCompany" value="003">
<input type="hidden" name="sourceFromForLos" id="sourceFromForLos" value="PL Online">
<input type="hidden" name="losBranchCode" id="losBranchCode" value= "">
<input type="hidden" name="oppId" id="oppId" value=" ">
<input type="hidden" name="cseCode" id="cseCode" value=" ">
 <input type="hidden" name="cseName" id="cseName" value=" ">
 <input type="hidden" name="relationshipManager" id="relationshipManager" value=" ">
<input type="hidden" name="relationshipManagerName" id="relationshipManagerName" value=" ">
<input type="hidden" name="dsaCode" id="dsaCode" value=" ">
<input type="hidden" name="dsaName" id="dsaName" value=" ">
<input type="hidden" name="subCategory" id="subCategory" value="0406">
<input type="hidden" name="sagechannel" id="sagechannel" value="XXXX">
<input type="hidden" name="leadType" id="leadType" value="Individual">
<input type="hidden" name="leadTag" id="leadTag" value="WarmLead">
<input type="hidden" name="leadStage" id="leadStage" value="NewLead">
<input type="hidden" name="oppStage" id="oppStage" value="New">
               <!--  <input type="hidden" name="loanScheme" value="SL"> -->
               <input type="hidden" name="loanScheme" value="PLD">
               <input type="hidden" name="isCoApplicantPL" value="NO">


	<div class="col-md-6 mrg-top"><button class="btn btn-primary btn-outline with-arrow" id="apply_now">Apply Now<i class="icon-arrow-right"></i></button></div>
	
	</div>
    </form> 
	
	
	<!-- Upload Document -->
	<form>
	    <div class="col-md-1"></div>
	<div class="col-md-10">
	<div class="col-md-8 bg-sucsess pad">
	<h3 class="modal-header">Upload Your Documents</h3>
	<ul class="upload border no-margin">
	   <li class="b-info">I Currently don't have the documents. Please collect it from my residence.</li>

	   <li class="bg-info">ID Proof <span></li>
	   <li><input type="file"></span></li></li>
	   <li class="bg-info">Address Proof</li>
	   <li><input type="file"></span></li>
	   <li class="bg-info">Salary Slips</li>
	   <li><input type="file"></span></li>
	   <li class="bg-info">Income Proof</li>
	   <li><input type="file"></span></li>
	   <li class="bg-info">Other Documents</li>
	   <li><input type="file"></span></li>
	</ul>
	
	<br>
	<ul>
	<li><b>Please Note:-</b></li>
	  <li>Please click SUBMIT button to ensure uploaded documents are successfully saved</li>
	  <li>maximum file size is upto 3.0MB</li>
	</ul>
	<div class="col-md-10"> 
 <p><input type="checkbox" /> I/we confirm that I/we have read the declaration and that all details provided on the form are true and correct</p>
 <button class="btn btn-primary btn-outline with-arrow pull-left" id="apply_now">SUBMIT<i class="icon-arrow-right"></i></button>
</div>
	
	</div>
	<div class="col-md-4 pad">
	<h3 class="modal-header">Details of Loan Offers</h3>
	<table class="table border no-margin">
	<tr>
	<td><b>Interest Rate</b></td>
	<td>fgfdgdfg</td>
	</tr>
	<tr>
	<td><b>Rate Type</b></td>
	<td>fgfdgdfg</td>
	</tr>
	<tr>
	<td><b>EMI</b></td>
	<td>fgfdgdfg</td>
	</tr>
	
	<tr>
	<td><b>Tenure of Loan</b></td>
	<td>fgfdgdfg</td>
	</tr>
	
	<tr>
	<td><b>Loan Amount</b></td>
	<td>fgfdgdfg</td>
	</tr>
	
	<tr>
	<td><b>Processing Fees + Tax</b></td>
	<td>fgfdgdfg</td>
	</tr>
	<tr>
	<td><b>Forecloser Fee</b></td>
	<td>fgfdgdfg</td>
	</tr>
	
	</table>
	</div>
	
  

	</div>
	</div>
	</form>
  </div>
</div>
</div>
</div>
</div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


 



<script type="text/javascript">

var data1={};
var data2= {};
var data3= {};
var serialize1=0;
var serialize2=0;
var serialize3=0;

var Errorcheck=0;

window.onload=function(){
$('.collapse').collapse({
  toggle: false,
  parent: '#accordion'
});


$("#submitform").click(function(event){ event.preventDefault();
$('form#apply_tatacapital').find('input').each(function(){
if($(this).val() =="" && $('#apply_tatacapital').valid()){
         var current = $(this).closest(".panel-collapse");
        if (!current.hasClass("in")) {
           current.collapse("show");
        }else{

          } return false;
         
    }else{ 
 
if( $('#resPincode').val()!='' &&  $('#dob').val()!=''  &&  $('#resMobNo').val()!='' &&  $('#resEmailId').val()!='' &&
    $('#yrsInCurrentEmp').val()!='' &&  $('#obligationMonth').val()!=''  &&  $('#modeOfSalary').val()!='' &&  $('#bankName').val()!='' &&
    $('#account').val()!=''  &&  $('#residenceOwnedBy').val()!=''    &&  $('#yrsInCurrentEmp').val()!=''   &&  $('#employerType').val()!=''  
    ){

  serialize1=$('#apply_tatacapital').serialize();  // form data

// var formdata =$('#apply_tatacapital').serializeArray();
// $(formdata ).each(function(index, obj){
//     data1[obj.name] = obj.value;
// });console.log(JSON.stringify(data1));
             $(".home").removeClass("active");
             $(".menu11").addClass("active");
             $("#menu11").addClass("in active");
             $("#home").removeClass("in active");
      
      return false;
  }
    } 
 });

});

}


    $(document).ready(function(){
    $('#loanTerm').change(function(){
    $('#loanTerm').val($(this).val());
    });



 });

       $(document).ready(function(){
        $("#companyName").autocomplete({     
          source: function(request, response) {
            $.ajax({
              url: "<?php echo e(route('tatacapitalsearchajax')); ?>",
              dataType: "json",
              data: {
                term : request.term
              },
              success: function(data) {
                response(data);
                 $('#companyName').removeClass('loading');
              }
            });
          },
          change: function (event, ui) {
             if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
                    $('#companyName').val('');
                    $('#companyName').val('');

                 }else{
                   if(ui.item.nComp) 
            var len=ui.item.nComp;
          if(len.toString().length==3){
            $('#employerCode').val('0000000000000'+ui.item.nComp);
           }else if(len.toString().length==4){
              $('#employerCode').val('00000000000000'+ui.item.nComp);
           }else{
            $('#employerCode').val('00000000000000'+ui.item.nComp);
           }
         }

     }

       }).on('keyup',function(){
              $('#companyName').addClass('loading');
           
       });
      });

     // bank name 
$(document).ready(function(){
        $("#bankName").autocomplete({     
          source: function(request, response) {
            $.ajax({
              url: "<?php echo e(route('tatacapitalbankname')); ?>",
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
                 $("#bankName").val('');
             }
           
                
         }
       });
      });


// state master

var stid=0;
$(document).ready(function(){
        $(".tatacapitalstatemaster").autocomplete({     
          source: function(request, response) {
            $.ajax({
              url: "<?php echo e(route('tatacapitalstate')); ?>",
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
           stid=0;
           $('#resState').val('');
          }else{
          stid=ui.item.los_state_id;
          $('#losState').val(ui.item.los_state_id);
          }
                 
         }
       });
      });

  // city master
$(document).ready(function(){
        $(".tatacapitalcity").autocomplete({     
          source: function(request, response) {
             if(stid!=0){
            $.ajax({
              url: "<?php echo e(route('tatacapitalcity')); ?>",
              dataType: "json",
              data: {
                term : stid
              },
              success: function(data) {
                response(data);
              }
            });
        }else{
             $('#losCity').val('');
        }
          },
          change: function (event, ui) {
         if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
           $('#resCity').val('');
          }else{
          $('#losCity').val(ui.item.los_city_id);
          }

         }
       });
      });


////////////////////////
var stidp=0;
var losPermState='';
var losPermCity='';
$(document).ready(function(){
        $(".tatacapitalstatemasterp").autocomplete({     
          source: function(request, response) {
            $.ajax({
              url: "<?php echo e(route('tatacapitalstate')); ?>",
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
           stidp=0;
            $('#losPermState').val('');
          }else{
          stidp=ui.item.los_state_id;
          losPermState=stidp;
          }
                 
         }
       });
      });

  // city master
$(document).ready(function(){
 
        $(".tatacapitalcityp").autocomplete({     
          source: function(request, response) {

             if(stidp!=0){
            $.ajax({
              url: "<?php echo e(route('tatacapitalcity')); ?>",
              dataType: "json",
              data: {
                term : stidp
              },
              success: function(data) {
                response(data);
              }
            });
        }else{
             $('#losPermCity').val('');
        }
          },
          change: function (event, ui) {
         if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
           $('#losPermCity').val('');
          }else{
       
         losPermCity=ui.item.los_city_id;
          }

         }
       });
      });



//////////state//////////////
var stidemp=0;
var empProvince='';
var empCity='';
$(document).ready(function(){
        tatacapitalstateemp = 
        $(".tatacapitalstatemasteremp").autocomplete({     
          source: function(request, response) {
            $.ajax({
              url: "<?php echo e(route('tatacapitalstate')); ?>",
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
             stidemp=0;
              $('#empProvince').val('');
          }else{
          stidemp=ui.item.los_state_id;
           empProvince=stidemp;


          }
                 
         }
       });
      });





  // city master
$(document).ready(function(){
        $(".tatacapitalcityemp").autocomplete({     
          source: function(request, response) {
             if(stidemp!=0){
            $.ajax({
              url: "<?php echo e(route('tatacapitalcity')); ?>",
              dataType: "json",
              data: {
                term : stidemp
              },
              success: function(data) {
                response(data);
              }
            });
        }else{
             $('#empCity').val();
        }
          },
          change: function (event, ui) {
         if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
           $('#empCity').val('');
          }else{
         empCity=ui.item.los_city_id;
          }

         }
       });
      });




$('#selectaddress').change(function(){
    var atLeastOneIsChecked = $('#selectaddress:checkbox:checked').length > 0;
    if (atLeastOneIsChecked == true) {
       $('#permAddr1').val($('#resAddress1').val());
       $('#permAddr2').val($('#resAddress2').val());
       $('#permAddr3').val($('#resAddress3').val());
       $('#losPermCity').val($('#resCity').val());
       $('#losPermState').val($('#resState').val());
       losPermState =$('#losState').val();
       losPermCity= $('#losCity').val();
       $('#permAddr1').closest('span').addClass('input--filled');
        $('#permAddr2').closest('span').addClass('input--filled');
         $('#permAddr3').closest('span').addClass('input--filled');
          $('#losPermCity').closest('span').addClass('input--filled');
           $('#losPermState').closest('span').addClass('input--filled');

   }else{
       $('#permAddr1').val('');
       $('#permAddr2').val('');
       $('#permAddr3').val('');
       $('#losPermCity').val('');
       $('#losPermState').val('');
       losPermState='';
       losPermCity='';
       $('#permAddr1').closest('span').removeClass('input--filled');
        $('#permAddr2').closest('span').removeClass('input--filled');
         $('#permAddr3').closest('span').removeClass('input--filled');
          $('#losPermCity').closest('span').removeClass('input--filled');
           $('#losPermState').closest('span').removeClass('input--filled');
     }
   });


</script>
  <script type="text/javascript">
        var d = new Date();
        var year = d.getFullYear() - 18;
        d.setFullYear(year);

        $(".tatacapitaldate").datepicker({ dateFormat: "dd/mm/yy",
          changeMonth: true,
          changeYear: true,
          maxDate: year,
          minDate: "-100Y",
          yearRange: '-100:' + year + '',
          defaultDate: d,

        });

          $(".tatacapitaldate").on('change',function(){
          $(this).closest('span').addClass('input--filled');
        })
  </script>
<script type="text/javascript">

var email=0;
var pancard=0;
  function emailtatacapital(obj,val){
                   var str =val.value;
                   var emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
                   var res = str.match(emailPattern);
                   if(res){
                      $('.'+obj).hide();
                      email='flag';
                  }else{
                    $('.'+obj).show();
                    return false;
                    email=0;
                  }
              


}
  $('#resEmailId').on('change',function(){
   if(email=='flag'){
   }else{
      $(this).val('');
   }
});

   $('#officeEmailId').on('change',function(){
   if(email=='flag'){
   }else{
      $(this).val('');
   }
});

function pan_card(obj,val){
                   var str =val.value;
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                       $('.'+obj).hide();
                       pancard='pancard';

                  }else{
                    $('.'+obj).show();
                    pancard=0;
                    return false;
                  }  
}
  $('#idValue').on('change',function(){
   if(pancard=='pancard'){
   }else{
      $(this).val('');
   }
});



 $("#tataemi").click(function(event){
        event.preventDefault();
           var form=$('#OUR_OFFER');
          if(! form.valid()){
            return false;
          }else{
    serialize2=form.serialize();  // form data

// var formdata =form.serializeArray();
// $(formdata ).each(function(index, obj){
//     data2[obj.name]= obj.value;
// });console.log(JSON.stringify(data2));
             $(".menu11").removeClass("active");
             $(".menu22").addClass("active");
             $("#menu22").addClass("in active");
             $("#menu11").removeClass("in active");
             $(".menu22").attr("disabled",false);

            $.ajax({  
             type: "POST",  
             url: "<?php echo e(URL::to('tatacapitalemi')); ?>",
             data :form.serialize(),
             success: function(msg){
                      var response = JSON.parse(msg);
                     $('#amount').text(response.amount.toFixed());
                     $('#emi').val(response.amount.toFixed());
                    
                }

            });

        }
    });


 $("#apply_now").click(function(event){ event.preventDefault();
            event.preventDefault();
           var form=$('#yourapplication');
          if(! form.valid()){

            return false;
          }else{

  if(losPermState!='' && losPermCity!='' && empProvince!='' && empCity!=''){
 $('#losPermState').val(losPermState);
 $('#losPermCity').val(losPermCity);
 $('#empProvince').val(empProvince );
 $('#empCity').val(empCity);


 var    CheckeID = $('#disclaimer:checkbox:checked').length > 0;
                if (CheckeID == true) {

             serialize3=form.serialize();  // form data
            // var formdata =form.serializeArray();
            // $(formdata ).each(function(index, obj){
            //     data3[obj.name] = obj.value;
            // }); console.log(JSON.stringify(data3));    


   
          var ser=serialize1+'&'+serialize2+'&'+serialize3;
         
        //  console.log(serialize1+'&'+serialize2+'&'+serialize3);
          $('#loader_id').addClass('loader');
      $.ajax({  
             type: "POST",  
             url: "<?php echo e(URL::to('tatacapitalsubmitform')); ?>",
             data :ser,
             success: function(msg){

                    $('#loader_id').removeClass('loader');
                       Errorcheck=msg;
                       var obj = JSON.parse(msg);
                       //console.log(obj.RetStatus);
                         if(obj.RetStatus=='SUCCESS'){
                               // WebTopNo
                               // LeadId
                               // redirect to upload
                               alert(obj.LeadId);
                        
                         }else{
                            alert(obj.ErrorMessage);
                            if(obj.Remarks){
                              alert(obj.Remarks);
                            }
                         }

                      

                     
                }

            });

       }else{
        alert("check checkbox");
       }
}else{

    alert("Please fill carefully form.. ");
}
}

});
</script>

 <script>
//$(document).ready(function() {
  // $(".nav li.disabled a").click(function() {
    // return false;
   //});
//});
   </script>
 <style type="text/css">
.loading {
    background:url('http://www.hsi.com.hk/HSI-Net/pages/images/en/share/ajax-loader.gif') no-repeat right center;

}

 </style>

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498DB;
  border-bottom: 16px solid #3498DB;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes  spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>