@include('layout.header')
<style>
.numbr { margin-right:10px;   padding: 5px;padding-left: 8px;display: inline-block;width: 29px;height: 29px;border-radius: 60%;background: #e4e3e3;border: 1px solid #dad8d8;}
.mandtry {color:red;font-weight:bold;}
.panel-default > .panel-heading {
    color: #333333;
    background-color: #f5f5f5;
    border-color: #ddd;
	padding: 10px;
}
.decoration1 {margin-right:10px;padding: 5px;border: 1px dashed #8c8686;color: #666;width: 29px;display: inline-block;border-radius: 52px;}
h4 {color:#999;}
.mrg-lft {margin:4px 0px 0px 18px;}


@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
.panel-title > a:before {
    float: right !important;
    font-family: FontAwesome;
    content:"\f068";
    padding-right: 5px;
}
.panel-title > a.collapsed:before {
    float: right !important;
    content:"\f067";
}
.panel-title > a:hover, 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}
</style>

<br>
<div id="fh5co-hero">
<div class="container">
<div class="col-md-12 white-bg box-shadow">
<br>
<h3 class="text-center">FLEXI LOAN</h3>

<form action="">
 <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="text-center"><span class="decoration1">1</span> Loan Profile 
		  </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
		<div class="col-md-3"><label>Full Name<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>Mobile No.<span class="mandtry"> *</span></label><input type="number" class="form-control" required=""></div>
	  <div class="col-md-3"><label>Alternate Phone Number<span class="mandtry"> *</span></label><input type="number" class="form-control" required=""></div>
	  
	  <div class="col-md-3"><label>Email<span class="mandtry"> *</span></label><input type="email" class="form-control" required=""></div>
	  <div class="col-md-3"><label>Date of Birth<span class="mandtry"> *</span></label><input type="date" class="form-control" required=""></div>
	  <div class="col-md-3"><label>Gender<span class="mandtry"> *</span></label><div class="form-control"><input type="radio" name="gen"> Male &nbsp;<input type="radio" name="gen"> Female &nbsp;<input type="radio" name="gen"> Other</div></div>
	  
	  <div class="col-md-3"><label>Flat No<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>Building<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>Area<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  
	  <div class="col-md-3"><label>Pincode<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>City<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>State <span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  
	  <div class="col-md-3"><label>Pincode<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>City<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  <div class="col-md-3"><label>State <span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
	  
	  <div class="col-md-3">
      <label>Premise Ownership Status<span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control"  required="">
       <option>Type</option>
       <option>Rented</option>
       <option>Owned</option>
       </select> 
       </div>
	   
	    
	  <div class="col-md-3">
      <label>Required Living since <span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control"  required="">
       <option>Living since</option>
       <option>< 1 year</option>
       <option>1-2 years</option>
	    <option>3-7 years</option>
		 <option>7 years</option>
       </select> 
       </div>
	   
	   <div class="col-md-3"><label>Personal PAN Number *<span class="mandtry"> *</span></label><input type="number" class="form-control" required=""></div>
	  <div class="col-md-3">
      <label>Monthly turnover <span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control"  required="">
       <option>Select a value</option>
       <option>< 50,000</option>
       <option>50,000 - 1L</option>
	    <option>1L - 3L</option>
		 <option>3L - 5L</option>
		 <option>5L - 10L</option>
		 <option>> 10L</option>
       </select> 
       </div>
	  <div class="col-md-3"><label>Loan Amount<span class="mandtry"> *</span></label><input type="number" class="form-control" required=""></div>
	  
	  <div class="col-md-3">
      <label>Loan Via<span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control"  required="">
       <option>Select Partner</option>
       <option>Flipkart</option>
       <option>Jabong</option>
	    <option>Limeroad</option>
		 <option>MSwipe</option>
		 <option>Overcart</option>
		 <option>Paytm</option>
		 <option>Pine Labs</option>
		 <option>Shopclues</option>
		 <option>Snapdeal</option>
		 <option>Voonik</option>
		 <option>XSTOK</option>
		 <option>Other</option>
       </select> 
       </div>
	  <div class="col-md-3">
      <label>Legal Status<span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control"  required="">
       <option>Select a value</option>
       <option>Proprietorship</option>
       <option>One Person Company (OPC)</option>
	    <option>Limited Liability Partnership (LLP)</option>
		 <option>Partnership</option>
		 <option>Private Limited</option>
		 <option>Public Limited</option>
       </select> 
       </div>
	</div>
    </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="text-center"><span class="decoration1">2</span> Business Details </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		  <div class="col-md-3"><label>Business Name<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		  <div class="col-md-3">
           <label>Nature of Business<span class="mandtry"> *</span></label>
           <select class="block drop-arr select-sty form-control"  required="">
           <option>Retailer</option>
           <option>Manufacturer</option>
           <option>Trader</option>
		   <option>Service</option>
		   <option>Distributor</option>
		   <option>Importer</option>
		   <option>Exporter</option>
		   <option>Job Worker</option>
           </select> 
           </div>
		  <div class="col-md-3"><label>Date of Incorporation<span class="mandtry"> *</span></label><input type="date" class="form-control" required=""></div>
		  <div class="col-md-3"><label>Number of Employees<span class="mandtry"> *</span></label><input type="number" class="form-control" required=""></div>
		   <div class="col-md-3">
           <label>Loan Purpose<span class="mandtry"> *</span></label>
           <select class="block drop-arr select-sty form-control"  required="">
           <option>Term Loan</option>
           <option>Loan against POS Transactions</option>
           <option>Drop-line Overdraft</option>
		   <option>Invoice Discounting</option>
           </select> 
           </div>
		   
		   <div class="col-md-3"><label>Flat No<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		   <div class="col-md-3"><label>Building<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		   <div class="col-md-3"><label>Area<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		   
		   <div class="col-md-3"><label>Pincode<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		   <div class="col-md-3"><label>City<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		   <div class="col-md-3"><label>State<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		   <div class="col-md-3">
           <label>Business Premise Ownership Status<span class="mandtry"> *</span></label>
           <select class="block drop-arr select-sty form-control"  required="">
           <option>Rented</option>
           <option>Owned</option>
           </select> 
           </div>
		  <div class="col-md-3"><label>Loan from Previous Sources<span class="mandtry"> *</span></label><div class="form-control"><input type="radio" name="yes"> Yes &nbsp;<input type="radio" name="yes"> No</div></div>
		  
		  <div class="col-md-12"><br><h3>Taxation Details</h3><hr></div>
		  <div class="col-md-3"><label>Company PAN Number<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		  <div class="col-md-3"><label>GST number</label><input type="text" class="form-control" required=""></div>
		  <div class="col-md-3"><label>TIN Number</label><input type="text" class="form-control" required=""></div>
		  <div class="col-md-3"><label>Udyog Aadhaar Number</label><input type="text" class="form-control" required=""></div>
		  
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="text-center"><span class="decoration1">3</span> Financial Details </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		 <div class="col-md-3"><label>Channel you use to sell products<span class="mandtry"> *</span></label><div class="form-control"><input type="radio" name="yes"> Online &nbsp;<input type="radio" name="yes"> Offline &nbsp;<input type="radio" name="yes"> Both</div></div>
		 <div class="col-md-3"><label>Total monthly sales<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		<div class="col-md-3"><label>Average profit margin</label><input type="text" class="form-control" ></div>
		
		<div class="col-md-12">
		<label>Top market place that you sell on<span class="mandtry"> *</span>
		 <table class="table table-striped table-bordered">
		   <tr>
		    <td><input type="checkbox" name="rdo"/> Flipkart</td>
			<td><input type="checkbox" name="rdo"/> Jabong</td>
			<td><input type="checkbox" name="rdo"/> Limeroad</td>
		   </tr>
		    <td><input type="checkbox" name="rdo"/> Overcart</td>
			<td><input type="checkbox" name="rdo"/> Paytm</td>
			<td><input type="checkbox" name="rdo"/> Shopclues</td>
		   </tr>
		    <td><input type="checkbox" name="rdo"/> Snapdeal</td>
			<td><input type="checkbox" name="rdo"/> Voonik</td>
			<td><input type="checkbox" name="rdo"/> XSTOK</td>
		   </tr>
		    <td><input type="checkbox" name="rdo"/> Other</td>
		   </tr>
		 </table>
		</div>
		<div class="col-md-3"><label>Selling Online Since *<span class="mandtry"> *</span></label><input type="date" class="form-control" required=""></div>
		
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="text-center"><span class="decoration1">4</span>Personal Details </a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
		<div class="col-md-3">
           <label>Education<span class="mandtry"> *</span></label>
           <select class="block drop-arr select-sty form-control"  required="">
           <option>Primary</option>
           <option>Secondary</option>
           <option>Bachelor's Degree</option>
		   <option>Master's Degree</option>
           </select> 
           </div>
		<div class="col-md-3"><label>Marital Status<span class="mandtry"> *</span></label><div class="form-control"><input type="radio" name="Marr"> Married &nbsp;<input type="radio" name="Marr"> Single &nbsp;<input type="radio" name="Marr"> Divorced</div></div>
		<div class="col-md-3"><label>Aadhar number<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		<div class="col-md-3">
           <label>Annual Income(all sources)<span class="mandtry"> *</span></label>
           <select class="block drop-arr select-sty form-control"  required="">
           <option>100000 <</option>
           <option>100000 - 500000</option>
           <option>500001 - 1000000</option>
		   <option>> 1000000</option>
           </select> 
           </div>
		   
		   <div class="col-md-12"><br><h3>References</h3><hr></div>
		    <h4 class="col-md-12">Business Colleague 1</h4>
			<div class="col-md-3"><label>Full Name<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			<div class="col-md-3"><label>Phone Number<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			<div class="col-md-3"><label>Profession<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			<div class="col-md-3"><label>Number of Years Known<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			
			 <h4 class="col-md-12 mrg-top">Business Colleague 2</h4>
			<div class="col-md-3"><label>Full Name<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			<div class="col-md-3"><label>Phone Number<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			<div class="col-md-3"><label>Profession<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
			<div class="col-md-3"><label>Number of Years Known<span class="mandtry"> *</span></label><input type="text" class="form-control" required=""></div>
		</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="text-center"><span class="decoration1">5</span> Upload Documents </a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
		
		<div class="col-md-12"><p class="mrg-lft"><b>PAN Card - Personal</p> <div class="col-md-4"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></div> </div>
		<div class="col-md-12"><p class="mrg-lft"><b>Address proof </p><div class="col-md-4"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></div> </div>
		<div class="col-md-12"><p class="mrg-lft"><b>Bank statements (6 months) </p><div class="col-md-4"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></div> </div>
		<div class="col-md-12"><p class="mrg-lft"><b>Business KYC </p><div class="col-md-4"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></div> </div>
		<div class="col-md-12"><p class="mrg-lft"><b>Other Documents </p><div class="col-md-4"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></div> </div>
		
		</div>
      </div>
    </div>

	
  </div> 


<button class="btn btn-primary btn-outline with-arrow mrg-top col-md-offset-5 hidden">Save & Continue<i class="icon-arrow-right"></i></button>
<button class="btn btn-primary btn-outline with-arrow mrg-top col-md-offset-5">SUBMIT<i class="icon-arrow-right"></i></button>
</form>
</div>
</div>
</br>

@include('layout.footer')
@include('layout.script')
