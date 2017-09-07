@include('layout.header')

<div id="fh5co-hero">
	<div class="container">
		  <!--Step 1 -->
          
          
        <div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                    <h1 class="align-center loan-head">RBL Personal Loan</h1>
					
</div>
				<div class="col-md-6">
              <img src="{{url('images/rbl_personal_loan.jpg')}}"  width="570" class="img-responsive"/>
			  <div>
			    <ul class="text-left pad1 ull">
				    <li>Loan amount from Rs.1 Lakh up to Rs.20 Lakhs.</li>
                    <li>Convenient loan repayment option of 12 to 60 months.</li>
                    <li>No security or collateral required to avail this loan.</li>
                   <li> Simplified and quick documentation.</li>
                    <li>Attractive interest rates from 14.5% p.a. up to 23% p.a.</li>
                    <li>Hassle-free loan sanction and disbursal procedure.</li>
                    <li>Representative example: Borrowing Rs. 5,00,000 at 16% interest rate and repaying over a tenure of 4 years with 48 monthly repayments of Rs 14,170.</li>
				</ul>
			  </div>
				</div>
				
				<div class="col-md-6">
					<div class="row text-left rate box-shadow pad1 white-bg mrg-btm">
				
					<form class="" id="" role="form" method="POST" action="">
					<div class="row">
					<div class="form-group">
					<h4 class="hdr pad1 text-center">&nbsp;&nbsp;&nbsp;&nbsp;Your Loan Quote in Under 1 Minute.</h4>
					<br>
					<div class="col-md-6">
					<select class="form-control drop-arr select-sty">
					   <option>City of Residence *</option>
					</select>
					</div>
					<div class="col-md-6"><input type="text" class="form-control" placeholder="First Name *" required=""></div>
					<div class="col-md-6"><input type="text" class="form-control" placeholder="Date of Birth *" required=""></div>
					
					<div class="col-md-6">
					<select class="form-control drop-arr select-sty">
					   <option>Gender *</option>
					</select>
					</div>
					<div class="col-md-6">
					<select class="form-control drop-arr select-sty">
					   <option>Employment Type & Mode of Credit *</option>
					</select>
					</div>
					<div class="col-md-6"><input type="email" class="form-control" placeholder="Employer Name *" required=""></div>
					<div class="col-md-6"><input type="email" class="form-control" placeholder="Net Monthly Income *" required=""></div>
					<div class="col-md-6"><input type="email" class="form-control" placeholder="EMI Amount for Existing Loan *" required=""></div>
					<div class="col-md-6"><input type="email" class="form-control" placeholder="Email ID *" required=""></div>
				    <div class="col-md-6"><input type="text" class="form-control" placeholder="Mobile No*" required=""></div>
					<div class="col-md-10">
					<input type="checkbox" /> I authorize RBL Bank to contact me. This will override registry on DND / NDNC * 
					</div>
					</div>
					</div>
					
					<!-- <p>Have you been at the current address for more then 6 month. if no, provide the previous address</p> -->
					
					<br>
					<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated">Proceed<i class="icon-arrow-right"></i></button>
					</form>
					</div>		
				</div>
			</div>
            
            
       
     
     
     
     
         <!--Step 2-->
       
       
       <div class="col-md-2"></div>
	<div class="col-md-8" style="display:none;">
<div class="col-md-12">
<h2 class="pad">Personal Loan - Customer Details </h2>
<div class="table-responsive comp-pg white-bg">
	<table width="100%" border="1" class="tbl  table-striped ">
  <tr>
    <td><b>Loan Amount</b></td>
    <td><b>Loan Tenure</b></td>
    <td><b>Interest Rate</b></td>
    <td><b>EMI</b></td>
    <td><b>Processing Fees</b></td>
  </tr>
  <tr>
    <td><b>10,00,000</b></td>
    <td><b>10</b></td>
    <td><b>10%</b></td>
    <td><b>4765</b></td>
    <td><b>5000</b></td>
  </tr>


</table>
</div>
</div>

	<div class="col-md-12 pad11">
    
    <div class="table-responsive white-bg pad1  box-shadow">
	<h4 class="text-center bg-info pad">Personal Information</h4>
	<br>
    <form>
	<table width="100%" border="1" class="tbl table-striped">
  <tr>
    <td>First Name</td>
	<td><input type="text" /></td>
	<td>Middle Name</td>
	<td><input type="text" /></td>
  </tr>
  <tr>
    <td>Last Name</td>
	<td><input type="text" /></td>
	<td>Gender</td>
	<td><input type="text" /></td>
  </tr>
  <tr>
    <td>Address Line 1</td>
	<td><input type="text" /></td>
	<td>Address Line 2</td>
	<td><input type="text" /></td>
  </tr>
  <tr>
    <td>Residance Landmark</td>
	<td><input type="text" /></td>
	<td>Date Of Birth</td>
	<td><input type="date" /></td>
  </tr>
  <tr>
    <td>City</td>
	<td><input type="text" /></td>
	<td>Pincode</td>
	<td><input type="text" /></td>
  </tr>
</table>
    <br>

	<h4 class="text-center bg-info pad">Employment & Income Details</h4>
	<br>
	<table width="100%" border="1" class="tbl table-striped">
  <tr>
    <td>When did You Join This Comapny</td>
	<td><input type="text" /></td>
	<td>Total Work Experience</td>
	<td><input type="text" /></td>
  </tr>

  <tr>
    <td>Ofice Address 1</td>
	<td><input type="text" /></td>
	<td>Ofice Address 2</td>
	<td><input type="text" /></td>
  </tr>
  <tr>
    <td>Office State</td>
	<td><input type="text" /></td>
	<td>Office City</td>
	<td><input type="text" /></td>
  </tr>
  <tr>
    <td>Pincode</td>
	<td><input type="text" /></td>
	<td>Phone No.</td>
	<td><input type="text" /></td>
  </tr>
  <tr>
    <td>Pancard</td>
	<td><input type="text" /></td>
	<td></td>
	<td></td>
  </tr>
</table>
<div class="col-md-12">
<br>
<input type="checkbox" /> I have read the terms & Conditions and
</div>
<br>
<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated">Submit my Application<i class="icon-arrow-right"></i></button>
</form>
</div>
	</div>
	
	</div>
	
    
    
    
    
   
   <!--Step 3 -->
   
   
   <div class="row" style="display:none;">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2 class="pad">Personal Loan - Get Quote </h2>
					
                </div>
                 
				<div class="col-md-12 white-bg comp-pg">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2 class="head-rbl">Move Slider to Customize Your Loan Amount</h2>
					<div class="col-md-6"><div class="amount"><h3 class="text-center text-info pad">Amount:<b> 300000</b></h3>
                    
					<select class="select11 bg-info drop-arr select-sty">
					   <option>1 Lakh</option>
					   <option>2 Lakh</option>
					   <option>3 Lakh</option>
					   <option>4 Lakh</option>
					   <option>5 Lakh</option>
					</select>
					</div></div>
					<div class="col-md-6"><div class="amount"><h3 class="text-center text-info pad">Tenure:<b> 5</b></h3>
					
					<select class="select11 bg-info drop-arr select-sty">
					   <option>1 Year</option>
					   <option>2 Years</option>
					   <option>3 Years</option>
					   <option>4 Years</option>
					   <option>5 Years</option>
					</select>
					</div></div>
				</div>
				
				<div class="col-md-12 white-bg">
				<table class="table table-bordered mrg-top box-shadow">
				 <tr class="bg-info pad">
				   <td><b>Max Eligiblity</b></td>
				   <td><b>Rate Type</b></td>
				   <td><b>Best Rate</b></td>
				   <td><b>EMI</b></td>
				   <td><b>Processing Fee</b></td>
				   <td><b>Total Savings</b></td>
				   <td></td>
				 </tr>
				 <tr>
				   <td>4,00,000</td>
				   <td>Fixed</td>
				   <td><span><strike>16%</strike></span> <span>15%</span></td>
				   <td>8900</td>
				   <td>6000</td>
				   <td><span class="pad1">You Have Save Rs.5400</span></td>
				   <td><button class="btn btn-primary btn-outline animate-box fadeInUp animated">APPLY</button></td>
				 </tr>
				</table>
				</div>
				
				<div class="row">
				<div class="col-md-12">
				 <div class="col-md-8 para">
				 <p> The Quote displayed here is not the final approved loan amount This is basis the details shared by you. Approval of loan would be to  RBL Bank internal prodct and policy guidelines. the applicants are required to fill the RBL Bank Applications froms to Proceed further.</p>
				 </div>
				 <div class="col-md-4 text-justify para">
				 
				 <span>Besides offering you the best interest rates and eligibility in the business, RBL Bank now offres you the fastest loan processing service as well</span>
               <span>Apply Now and experience for yourself RBL Bank's superior loan processing service.</span>
				 </div>
				 </div>
				</div>
				</div>
			</div> 
    
    
    
    
    
    
         
            
            
	</div>
</div>
@include('layout.footer')
@include('layout.script')

