@include('layout.header')
<style>
   td {text-transform:uppercase; vertical-align: middle !important;}
   input {border:none;background:#f1f1f1;}
</style>

<div class="container" id="fh5co-hero">
     <div class="fh5co-contact animate-box">
                         <div>
                          <div class="row">
                        <center>
                        <h1 class="loan-head">Fire Calculator</h1>
                      </center>
					  <div class="col-md-12 container" style="background:#d9e8f4;">
					  <div class="col-md-2"></div>
					  <div class="col-md-8">
					  <br>
					  <h2 class="pad">SFSP QUOTE</h2>
					  <table class="table table-striped table-bordered box-shadow" style="background:#fff;">
					   
					   <tr>

					      <td width="60%">Date</td>
						  <td width="38%"><input type="text" id="date" name="date" required class="newsletter-name lastReporteddate1"/></td>

						  
					   </tr>
					   <tr>
					      <td>Client</td>
						  <td><input type="text" name="company_name" id="company_name" class="newsletter-name"/></td> 

					   </tr>
					   <tr>
					      <td>Correspondence Address</td>
						  <td><input type="text" name="address" id="address" class="newsletter-name"/></td> 
					   </tr>
					   <tr>
					      <td>Risk Location</td>
						  <td><input type="text" name="location" id="location" class="newsletter-name"/></td> 
					   </tr>
					   <tr>
					      <td>Occupied As</td>
						  <td>
						  <input type="text" class="newsletter-name search_company" name="company_name" id="company_name" onkeypress="return AllowAlphabet(event)" required >
						  </td> 
					   </tr>
					   <tr>
					      <td>Period of Insurance</td>
						  <td><input type="text" name="txt" class="newsletter-name"/></td> 
					   </tr>
					   <tr>
					      <td>USGI Policy No.</td>
						  <td><input type="text" name="txt" class="newsletter-name"/></td> 
					   </tr>
					   <tr>
					      <td>Business Type</td>
						  <td><input type="text" name="txt" class="newsletter-name"/></td> 
					   </tr>
					  </table>
					  </div>
					  </div>
					  
					  <div class="col-md-12 container box-shadow" style="background:#d9e8f4;">
					  <div class="col-md-2"></div>
					  <div class="col-md-8">
					  <br>
					  
					  <table class="table table-striped table-bordered" style="background:#fff;">
					   
					   <tr class="bg-info">
					      <td>SL</td>
						  <td>Discription of Assets</td>
						  <td>Sum Insured<p>Total (INR)</p></td>
						  
					   </tr>
					   <tr>
					      <td>1.</td>
						  <td>Building (INCH. Plinch & Foundation)</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
					   </tr>
					   <tr>
					      <td>2.</td>
						  <td>Plinth & Foundation of Building</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
					   </tr>
					   <tr>
					      <td>3.</td>
						  <td>FFF</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
					   </tr>
					   <tr>
					      <td>4.</td>

						  <td>Electric Fittings</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
						  </td> 
					   </tr>
					   <tr>
					      <td>5.</td>
						  <td>Stock - Finish, RM, SIP</td>
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
					   </tr>
					   <tr>
					      <td>6.</td>
						  <td>Other Contents*</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
					   </tr>
					   <tr>
					      <td></td>
						  <td><h3><b>TOTAL</b></h3></td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
					   </tr>
					  </table>
					  </div>
					  </div>
					  
					  
					  
					  <div class="col-md-12 container" style="background:#d9e8f4;">
					  <div class="col-md-2"></div>
					  <div class="col-md-8">
					  <br>
					  
					  <table class="table table-striped table-bordered box-shadow" style="background:#fff;">
					   
					   <tr class="bg-info">
					      <td colspan="3">Addon Coverage</td>
					   </tr>
					   <tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>STFI</td> 
						  <td width="30%"><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						 <tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Earthquake </td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						 <tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Terrorism</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						 <tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						
						
						
						
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Removal of Debris (in excess of 1% claim amount)</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>(A) Deterioration of Stocks in Cold Storage premises due to accidental power failure consequent to damage at the premises of Power Station due to an insured peril</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>(B) Deterioration of stocks in cold storage premises due to change in temperature arising out of loss or damage to the cold storage machinery(ies) in the Insured’s premises due to operation of insured peril.</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Forest Fire</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Impact Damage due to Insured’s own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Spontaneous Combustion</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Ommission to insure additions, deletions etc</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Spoilage Material Damage Cover for stocks</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Spoilage Material Damage Cover for Plant and Machinery</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Temporary Removal of Stocks Clause</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Loss Of Rent clause</td> 
						  <td><select class="select-sty drop-arr">
							        <option>Loss Of Rent clause </option>
							 </select></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Rent for alternative accomodation</td> 
						  <td>
						  <select class="select-sty drop-arr">
							        <option>Rent for alternative accomodation</option>
							 </select>
						  </td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Escalation</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Start Up Expenses</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Leakage Cover for tanks in insured's premises</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Leakage Cover for tanks outside insured's premises</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Contamination Cover for tanks outside insured's premises</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					      <td width="11%">
						     <select class="select-sty drop-arr">
							        <option>Yes</option>
									<option>No</option>
							 </select>
						  </td>
						  <td>Contamination Cover for tanks located elsewhere</td> 
						  <td><input type="text" name="txt" class="newsletter-name"/></td>
                        </tr>
						<tr>
					     
						  <td colspan="3"><button class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="credit_id">GET QUOTES<i class="icon-arrow-right"></i></button></td> 
						
                        </tr>
						
						
						
					  </table>
					  </div>
					  </div>
					  
					  
					  
					  
					   <div class="col-md-12 container white-bg box-shadow">
					  <div class="col-md-1"></div>
					  <div class="col-md-10">
					  <br>
					  
					  <table class="table table-striped table-bordered">
					  <tr class="text-capitalize">
					      <td>Company ID</td>
						  <td>Comapny Name</td>
						  <td>Ty Rate</td>
						  <td>Base Rate</td>
						  <td>Rate 3</td>
						  <td>Total Premium</td>
					  </tr>
					  <tr>
					      <td>56756765</td>
						  <td>Rupeeboss</td>
						  <td>10%</td>
						  <td>15%</td>
						  <td>13%</td>
						  <td>Rs.12,000</td>
					  </tr>
					  </table>
					</div>
					</div>
					</div>
                          
</div>
<br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddate1").datepicker({ dateFormat: "ddmmyy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

