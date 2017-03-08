@include('layout.header')

<div id="fh5co-hero">
	<div class="container">
	<h2 class="align-center loan-head">tribe</h2>
	<div class="col-md-12 pad1 white-bg box-shadow">

 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#main">BASIC DETAILS</b></a></li>
  <li><a data-toggle="tab" href="#main1"><b>LOAN DETAILS</b></a></li>
  <li><a data-toggle="tab" href="#main2"><b>PERSONAL DETAILS</b></a></li>
  <li><a data-toggle="tab" href="#main3"><b>BUSNESS DETAILS</b></a></li>
  <li><a data-toggle="tab" href="#main4"><b>DOCUMENTS</b></a></li>
  <li><a data-toggle="tab" href="#main5"><b>ONLINE IDS</b></a></li>
  <li><a data-toggle="tab" href="#main6"><b>REFRANCES</b></a></li>
  <li><a data-toggle="tab" href="#main7"><b>BANK STATMENTS</b></a></li>
</ul>

<div class="tab-content">
  <div id="main" class="tab-pane fade in active">
    
	<div class="col-md-12">
  <h3 class="mrg-top">Partner Details</h3>
<hr>
  <div class="col-md-3"><p>Are you a Tribe Partner?</p></div>
  <div class="col-md-4"><p><input type="radio" name="radio" /> Yes&nbsp;&nbsp; <input type="radio" name="radio" /> No</p></div>
</div>

<div class="col-md-12 mrg-top">

  <h3>Company Details</h3>
<hr>
  <div class="col-md-3"><p>Company Name*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Owner Name*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Owner Email*</p></div>
  <div class="col-md-8">
   <input type="text" name="txt" class="form-control form-group"/>
  </div>
</div>

  </div>
  <div id="main1" class="tab-pane fade">
    
	<h3 class="mrg-top">Loan Details</h3>
<hr>
  <div class="col-md-3"><p>Loan Amount (Rs.)</p></div>
  <div class="col-md-8"><p><input type="text" name="txt" class="form-control form-group"/></p></div>
  
  <div class="col-md-3"><p>Loan Tenure (Months)</p></div>
  <div class="col-md-8"><p><input type="text" name="txt" class="form-control form-group"/></p></div>
  
  <div class="col-md-3"><p>Repayment Frequency</p></div>
  <div class="col-md-8 sec">
  <select class="drop-arr">
         <option>Select Repayment Frequency</option>
		 <option>Monthly</option>
		 <option>Weekly</option>
		 <option>Forthnightly</option>
		 <option>Daily</option>
  </select>
  </div>
  </div>
  
  <div id="main2" class="tab-pane fade">
    
	<h3 class="mrg-top">Personal Details</h3>
<hr>
  <div class="col-md-3"><p>First Name*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Middle Name</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Last Name*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Mobile No*</p></div>
 <div class="col-md-8"><input type="text" pattern="[789][0-9]{9}" required="" maxlength="10" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Email</p></div>
  <div class="col-md-8"><input type="email" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Address*</p></div>
  <div class="col-md-8"><textarea class="form-control form-control mrg-btm" colspan="2"></textarea></div>
  
  <div class="col-md-3"><p>Aadhaar Number*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Owner Email*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Date of Birth*</p></div>
  <div class="col-md-8"><input type="date" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Annual Income (INR)*</p></div>
  <div class="col-md-8"><input type="number" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Education*</p></div>
  <div class="col-md-8 sec">
    <select class="drop-arr">
         <option>Select Education</option>
		 <option>Graduate</option>
		 <option>post graduate</option>
		 <option>others</option>
  </select>
  </div>
  
  <div class="col-md-3"><p>Family Details*</p></div>
  <div class="col-md-8 sec">
     <select class="drop-arr">
         <option>-Select Family Details-</option>
		 <option>single</option>
		 <option>married</option>
		 <option>divorced</option>
		 <option>widowed</option>
  </select>
  </div>
  
  </div>
  <div id="main3" class="tab-pane fade">
    <h3 class="mrg-top">Business Details</h3>
<hr>
  <div class="col-md-3"><p>Employees Count*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Registration Details*</p></div>
  <div class="col-md-8 sec">
   <select class="drop-arr">
         <option>-Select Registration Details-</option>
		 <option>Private Limited Company</option>
		 <option>LLP</option>
		 <option>Section 8 Company</option>
		 <option>Trust</option>
		 <option>Society</option>
		 <option>Other</option>
		 <option>Limited Company</option>
		 <option>Private</option>
		 <option>Sole Proprietorship</option>
		 <option>Partnership</option>
		 <option>LLC</option>
		 <option>INC.</option>
		 <option>C Corp</option>
  </select>
  </div>
  
  <div class="col-md-3"><p>Company Pan Number*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  
  <div class="col-md-3"><p>Address*</p></div>
  <div class="col-md-8"><textarea class="form-control form-control mrg-btm" colspan="2"></textarea></div>
  
  <div class="col-md-3"><p>Business Type*</p></div>
  <div class="col-md-8 sec">
    <select class="drop-arr">
         <option>-Select Business Type-</option>
		 <option>importer</option>
		 <option>exporter</option>
		 <option>manufacturer</option>
		 <option>retailer</option>
		 <option>distributor</option>
		 <option>online seller</option>
		 <option>offline seller</option>
		 <option>csc or vle</option>
		 
  </select>
  </div>
  
  <div class="col-md-3"><p>Do you carry out Online Sales?*</p></div>
  <div class="col-md-8"><p><input type="radio" name="radio" /> Yes&nbsp;&nbsp; <input type="radio" name="radio" /> No</p></div>
  
  <div class="col-md-3"><p>Do you carry out Offline Sales?*</p></div>
  <div class="col-md-8"><p><input type="radio" name="radio" /> Yes&nbsp;&nbsp; <input type="radio" name="radio" /> No</p></div>
  
  <div class="col-md-3"><p>Turnover*</p></div>
  <div class="col-md-8 sec">
     <select class="drop-arr">
         <option>-Select Turnover-</option>
		 <option>0 to 15L</option>
		 <option>15L to 50L</option>
		 <option>50L to 1Cr</option>
		 <option>1Cr</option>
  </select>
  </div>
  
  <div class="col-md-3"><p>Business Premises*</p></div>
  <div class="col-md-8 sec">
    <select class="drop-arr">
         <option>-Select Business Premise-</option>
		 <option>owned</option>
		 <option>rented</option>
		 <option>owned by parents or relatives</option>
  </select>
  </div>
  
  <div class="col-md-3"><p>Which products do you sell?*</p></div>
  <div class="col-md-8 sec">
    <select class="drop-arr">
         <option>-Select Sales Channel-</option>
		 <option>Apparel</option>
		 <option>Appliances</option>
		 <option>Automotive</option>
		 <option>BabyCare</option>
		 <option>Bags and Luggage</option>
		 <option>Beauty and Personal Care</option>
		 <option>Books</option>
		 <option>Cameras and Accessories</option>
		 <option>Computers and Peripherals</option>
		 <option>Eyewear</option>
		 <option>Fashion Accessories</option>
		 <option>Fragrances</option>
		 <option>Furniture</option>
		 <option>Hardware and Sanitary Fittings</option>
		 <option>Health-Wellness and Medicine</option>
		 <option>Home Decor</option>
		 <option>Home Furnishings</option>
		 <option>Jewellery</option>
		 <option>KidsWear</option>
		 <option>Kitchenware</option>
		 <option>Mobiles and Tablets</option>
		 <option>Movies and Music</option>
		 <option>Musical Instruments</option>
		 <option>Nutrition and Supplements</option>
		 <option>Office Equipment</option>
  </select>
  </div>
  
  <div class="col-md-3"><p>Loan Purpose*</p></div>
  <div class="col-md-8 sec">
   <select class="drop-arr">
         <option>-Select Loan Purpose-</option>
		 <option>inventory rotation</option>
		 <option>product differentiation</option>
		 <option>expansion</option>
		 <option>launch of new product</option>
		 <option>working capital/option>
		 <option>others</option>
  </select>
  </div>
  
  <div class="col-md-3"><p>How did you Know About Us?*</p></div>
  <div class="col-md-8"><input type="text" name="txt" class="form-control form-group"/></div>
  </div>
  <div id="main4" class="tab-pane fade">
    
	<h3 class="mrg-top">KYC Identity Proof</h3>
<hr>
  <div class="col-md-3">Pan</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-3">Aadhaar</div>
  <div class="col-md-8"><input type="file" name="txt" class="form-control form-group no-border"/></div>
  
  <div class="col-md-3">Driving License</div>
  <div class="col-md-8">
   <input type="file" class="form-control form-group no-border"/>
  </div>
  
  <div class="col-md-3">Passport</div>
  <div class="col-md-8">
   <input type="file" class="form-control form-group no-border"/>
  </div>
  
  <div class="col-md-3">Voter ID</div>
  <div class="col-md-8">
   <input type="file" class="form-control form-group no-border"/>
  </div>
  <div class="col-md-12">
  <h3 class="mrg-top">Address Proof</h3><hr>
</div>
<div class="col-md-3">Electricity Bill</div>
  <div class="col-md-8">
   <input type="file" class="form-control form-group no-border"/>
  </div>
  
  <div class="col-md-3">Leave and License Agreement</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-12">
  <h3 class="mrg-top">Business KYC</h3><hr>
</div>
  <div class="col-md-3">Registration Certificate</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-3">Tax Registration</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-12">
  <h3 class="mrg-top">Business Documents</h3><hr>
</div>
  <div class="col-md-3">Company IT Returns</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-3">Company PAN</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
   <div class="col-md-3">ITR/VAT Returns/ST Returns</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-12">
  <h3 class="mrg-top">Other Documents</h3><hr>
</div>
  <div class="col-md-3">Personal IT Returns</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  <div class="col-md-3">Other Documents</div>
  <div class="col-md-8"><input type="file" class="form-control form-group no-border"/></div>
  
  </div>
  <div id="main5" class="tab-pane fade">
    <p>Providing Online Credentials of Platforms/Marketplaces/Software that you make use of in your business will help us understand your business better and make the most appropriate 
	recommendations for Loans. This can also increase your chances of securing Loans at a lower interest rate. As a Business User, you gain free and complete access to all the insights that Tribe draws using your online credentials.</p>
	<ul>
	  <li class="pad"><input type="radio" name="rdo" /> Flipkart</li>
	  <li class="pad"><input type="radio" name="rdo" /> Zomato</li>
	  <li class="pad"><input type="radio" name="rdo" /> BrownTape</li>
	  <li class="pad"><input type="radio" name="rdo" /> Amazon</li>
	  <li class="pad"><input type="radio" name="rdo" /> Trip Advisor</li>
	  <li class="pad"><input type="radio" name="rdo" /> Company Info</li>
	</ul>
  </div>
  <div id="main6" class="tab-pane fade">
    
	<div class="col-md-12">
  <h3 class="mrg-top">Refrance</h3><hr>
</div>
  <div class="col-md-3">First Name</div>
  <div class="col-md-8"><input type="text" class="form-control form-group"/></div>
  
  <div class="col-md-3">Middle Name</div>
  <div class="col-md-8"><input type="text" class="form-control form-group"/></div>
  
  <div class="col-md-3">Last Name</div>
  <div class="col-md-8"><input type="text" class="form-control form-group"/></div>
  
  <div class="col-md-3">Mobile Number</div>
  <div class="col-md-8"><input type="text" class="form-control form-group"/></div>
  
  <div class="col-md-3">Email</div>
  <div class="col-md-8"><input type="text" class="form-control form-group"/></div>
  
 <div class="col-md-5"> <a class="btn btn-primary btn-outline with-arrow pull-right">Save Form<i class="icon-arrow-right"></i></a></div>
  </div>
  <div id="main7" class="tab-pane fade">
    <h3 class="mrg-top">Refrance</h3><hr>

  <div class="col-md-3">UPLOAD COMPANY BANK STATEMENTS</div>
  <div class="col-md-8 sec">
   <select class="drop-arr">
         <option>-Select a Bank-</option>
		 <option>Axis Bank</option>
		 <option>Kotak Bank</option>
		 <option>HDFC Bank</option>
		 <option>Canara Bank</option>
  </select>
  </div>
  
  <div class="col-md-3">Start Date</div>
  <div class="col-md-8"><input type="date" class="form-control form-group"/></div>
  
  <div class="col-md-3">End Date</div>
  <div class="col-md-8"><input type="date" class="form-control form-group"/></div>
  
  <div class="col-md-3">Upload Document</div>
  <div class="col-md-8"><input type="file" multiple class="form-control form-group no-border"/></div>
  <div class="col-md-3"></div>
  <div class="col-md-8 mrg-top"><a class="btn btn-primary btn-outline with-arrow">Submit Statment<i class="icon-arrow-right"></i></a></div>
  </div>
  
</div>

</div>

	</div>
</div>
<br>
@include('layout.footer')
@include('layout.script')

