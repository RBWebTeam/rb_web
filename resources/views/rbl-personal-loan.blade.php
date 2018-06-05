@include('layout.header')

<div class="iifl-image">
    <img src="images/rbl-bank.jpg">
</div>

<div class=" ">
    <!-- content start -->
    <div class="container">
        <div class="row"> 	 	
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40" style="min-height:auto; float:left;">
                    <div class="section-faq" id="section-faq">
                    	<h1 class=""><center>RBL Personal Loan</center></h1>
                               
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    		<div class="how-it-block1 bg-boxshadow" style=" min-height: 450px;">                	 <!-- step 1 -->
                    			<!-- RBL Personal Loan -->
                    			<div id="details" class="row">
                    				<h4><center>Your Loan Quote in Under 1 Minute</center></h4>
                        				<br/>
                        				<form class="rbl_personal_loan_form" id="rbl_personal_loan_form" role="form" method="POST">
											 <?php
								          $myString = isset($_GET['referrer']);
								          if($myString){

								            $myArray = explode('@', $_GET['referrer']);
								            if(isset($myArray[0])){
								              Session::put('empid', $myArray[0]);
								              $empid = Session::get('empid');
								            }else{
								              $empid="";
								            }
								            if(isset($myArray[1])){
								             Session::put('brokerid', $myArray[1]);
								              $brokerid = Session::get('brokerid');
								            }else{
								              $brokerid ="";
								            }
								            if(isset($myArray[2])){
								              Session::put('source', $myArray[2]);
								              $source = Session::get('source');


								            }else{
								               $source="";
								            }
								            if(isset($myArray[3])){
								              Session::put('CampaignName', $myArray[2]);
								              $campaign = Session::get('CampaignName');


								            }else{
								               $campaign="";
								            }
								            if($campaign){
								              Session::put('CampaignName', $_GET['CampaignName']);
								            }else{
								             Session::put('CampaignName', 'Christmas');
								            }
								            
								            //$a= str_replace('�', '', $brokerid);
								            // echo $empid;
								             
								          }else{


								            $empid = Session::get('empid')?Session::get('empid'):'MA';
								            $brokerid =Session::get('brokerid')?Session::get('brokerid'):'MA';
								            $source =Session::get('source')?Session::get('source'):'MA';
								            $campaign=Session::get('CampaignName')?Session::get('CampaignName'):'MA';
								          }
								          
								          ?>

								          <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         <input type="text" class="form-control" placeholder="First Name *" 
					                         name="first_name" id="first_name" onkeypress="return AllowAlphabet(event)" required="">
					                         </div>
					                      </div>

					                    
					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<select class="form-control select-sty" name="city" id="city">
												  <option disabled selected value="">City</option>
												</select>
					                         </div>
					                      </div>

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<input type="text" class="form-control date lastReporteddob" placeholder="Date of Birth *" name="dob" id="dob" required="">
					                         </div>
					                     </div>

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<select class="form-control select-sty" name="employ_type" id="employ_type" required>
												   <option disabled selected  value="">Select Employment & Mode of Credit *</option>
												        <option value="1">Salaried: Account Transfer</option>
													    <option value="2">Salaried: By Cheque</option>
													    <option value="3">Salaried: By Cash</option>
													    <option value="4">Self employed</option>
													    <option value="5">Others</option>
												</select>
					                         </div>
					                     </div>

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<input type="text" class="form-control" placeholder="Employer Name *" name="employer_name" id="employer_name" onkeypress="return AllowAlphabet(event)" required="">
					                         </div>
					                     </div>

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<input type="text" class="form-control" placeholder="Net Monthly Income *" name="income" id="income" onkeypress="return fnAllowNumeric(event)" required="">
					                         </div>
					                     </div>

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<input type="text" class="form-control" placeholder="EMI Amount for Existing Loan *" name="emi" id="emi" onkeypress="return fnAllowNumeric(event)" required="">
					                         </div>
					                     </div>

					                      <!-- <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<input type="text" class="form-control" placeholder="Email ID *" name="email" id="email" oninput="mail('email')" required="">
					                         	<span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
					                         </div>
					                     </div> -->

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                     <input type="text" class="form-control" id="EmailId" name="EmailId" placeholder="Email ID *" maxlength="255" oninput="e_mail('EmailId')" >
                                        <div id="mail" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                         </div>
                                        </div>

					                     

					                      <div class="col-md-4 col-sm-12 col-xs-12">
					                         <div class="form-group">
					                         	<input type="text" class="form-control" placeholder="Mobile No*" name="mobile_no" id="mobile_no" maxlength="10" onkeypress="return fnAllowNumeric(event)" required="">
					                         </div>
					                     </div>

					                     <div class="col-md-10 col-sm-12 col-xs-12">
					                         <div class="form-group">
											<input type="checkbox" name="check" required /> I authorize RBL Bank to contact me. This will override registry on DND / NDNC * 
										</div></div>

										<br><br/>
										
					                         <div class="col-md-10 col-xs-12">
												<a class="btn btn-default btn-sm" id="proceed">Proceed<i class="icon-arrow-right"></i></a>
											</div>	
										</form>
                    			</div>
                    			<!-- RBL Personal Loan end-->
                    			<!-- step 1 end -->

                    			<!-- step 2 -->
                    			<!-- Personal Loan - Get Quote -->
                    			<div id="get_quotes" class="row" style="display: none;" >
                    				<form id="quotes" name="quotes" >
                    					<h3 class=""><center>Get Quote</center></h3>

				                	 		<div class="col-md-6 col-sm-12 col-xs-12">
				                	 			<div class="form-group">
				                	 				<div class="amount">
				                	 				<input type="text" class="form-control " placeholder="Loan amount*" name="loan_amount" id="loan_amount" minlength="5" maxlength="7" onkeypress="return fnAllowNumeric(event)" required="" onkeyup ="calc()">
				                	 			</div>
				                	 			</div>
				                	 		</div>

				                	 		<!-- <input type="hidden" name="roi" id="roi" value="0.012"> -->

				                	 		<div class="col-md-6 col-sm-12 col-xs-12">
				                	 			<div class="form-group">
				                	 				<div class="amount">
				                	 					<select class="form-control select-sty " name="tenure" id="tenure"  required onchange="calc()">
				                                            <option disabled selected  value="">Tenure</option>
				                                            <option  value="12">12 months</option>
				                                            <option  value="24">24 months</option>
				                                            <option  value="36">36 months</option>
				                                            <option  value="48">48 months</option>
				                                            <option  value="60">60 months</option>
										                </select> 
				                	 				</div>
				                	 			</div>
				                	 		</div>

				                	 		<table class="">
				                	 			<thead>
				                                    <tr>
				                                       <th scope="col">Loan Eligibilty</th>
				                                       <th scope="col">Rate Type</th>
				                                       <th scope="col">Best Rate</th>
				                                       <th scope="col">EMI</th>
				                                       <th scope="col">Processing Fee</th>
				                                       <th scope="col"></th>                                                
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                        <tr>
				                                           <td data-label="Loan Required :" style="padding-top: 20px;">
				                                               <div class="form-group">
				                                               	<input type="text" class="form-input-new form-control" name="loanamount" id="loanamount" minlength="6" maxlength="9" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)" readonly>
				                                               </div>
				                                           </td>
				                                           <td>Fixed</td>
				                                           <td><span>16%</span></td>
				                                           <td><span id="monthly_installment"></span></td>
				                                           <td><span id="processingfee"></span></td>
				                                           <td><a class="btn btn-default btn-sm" id="apply">APPLY</a></td>
				                                       </tr>
				                                   </tbody>
				                	 		</table>
				                	 		<br />
                    				</form>
                    				<p>The Quote displayed here is not the final approved loan amount This is basis the details shared by you. Approval of loan would be to RBL Bank internal prodct and policy guidelines. the applicants are required to fill the RBL Bank Applications froms to Proceed further.</p>

			                        <p>Besides offering you the best interest rates and eligibility in the business, RBL Bank now offers you the fastest loan processing service as well.</p>

			                        <p>Apply Now and experience for yourself RBL Bank's superior loan processing service.</p>
                    			</div>
                    			<!-- Personal Loan - Get Quote end -->
                    			<!-- step 2 end-->

                    			<!-- step 3 -->
                    			<!-- Personal Loan - Customer Details -->
                    			<div class="row">
                    				<div class="col-md-1"></div>
                    				<form id="customer_details_form" method="POST" style="display: none;" >
                    					{{ csrf_field() }}
                    					<h3 class=""><center>Customer Details</center></h3>
                    					<table class="">
                    						<thead>
                                            <tr>
                                                <th scope="col">Loan Amount</th>
                                                <th scope="col">Loan Tenure (in months)</th>
                                                <th scope="col">Interest Rate</th>
                                                <th scope="col">EMI</th>
                                                <th scope="col">Processing Fee</th>                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                           	<td><b><span id="amount"></span></b></td>
										    <td><b><span id="period"></span></b></td>
										    <td><b>16%</b></td>
										    <td><b><span id="to_pay"></span></b></td>
										    <td><b><span id="p_fee"></span></b></td>
                                           </tr>
                                        </tbody>
                    					</table>
                    					<br />
                    					<h4 >Personal Information</h4>

                    					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">

                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" name="FirstName" class="form-control" id="FirstName" placeholder="First Name" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="MiddleName" class="form-control" id="MiddleName" placeholder="Middle Name" onkeypress=" return AllowAlphabet(event)" />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="LastName" class="form-control" id="LastName" placeholder="Last Name" onkeypress="return AllowAlphabet(event)" required />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<select class="form-control drop-arr select-sty" name="Gender" id="Gender" required>
												   <option disabled selected  value="">Gender*</option>
												        <option value="1">Male</option>
													    <option value="2">Female</option>
													    <option value="3">Third Gender</option>
											</select>	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResAddress1" id="ResAddress1" placeholder="Address Line 1" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResAddress2" id="ResAddress2" placeholder="Address Line 2" />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResLand" id="ResLand" placeholder="Residence Landmark"/>	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control date" placeholder="Date of Birth" name="DOB" id="DOB" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<select class="form-control drop-arr select-sty" name="ResType" id="ResType" required>
											   <option disabled selected  value="">Residence Type*</option>
											        <option value="1">Owned by Self-Spouse</option>
												    <option value="2">Owned by Parents/Sibling</option>
												    <option value="3">Owned by Relative</option>
												    <option value="4">Rented with Family</option>
												    <option value="5">Rented with Friends</option>
												    <option value="6">Rented- Staying Alone</option>
												    <option value="7">Guest House</option>
												    <option value="8">Hostel</option>
												    <option value="9">Company Lease</option> 
											</select>	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="lastReportedsince form-control" name="CurResSince" id="CurResSince" placeholder="Living Since" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResPIN" id="ResPIN" maxlength="10" placeholder="Pincode" required/>	
                            				</div>
                            			</div>

                            			<table width="100%" border="1" class="tbl table-bordered table-striped">
											<!-- <input type="hidden" name="Version" id="Version" value="3"> -->
											<input type="hidden" name="Mobile" id="Mobile">
											<input type="hidden" name="Email" id="Email">
											<input type="hidden" name="EmpType" id="EmpType">
											<input type="hidden" name="LnAmt" id="LnAmt">
											<input type="hidden" name="TnrMths" id="TnrMths">
											<input type="hidden" name="IRR" id="IRR">
											<input type="hidden" name="ProcFee" id="ProcFee" value="">
											<input type="hidden" name="NMI" id="NMI">
											<input type="hidden" name="EmiCurPay" id="EmiCurPay">
											<input type="hidden" name="ResCity" id="ResCity"> 
										</table>

										<hr style="color:transparent; width:100%" />
										<h4 >Employment & Income Details</h4>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="Company Name" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="lastReporteddoj form-control" name="CurCmpnyJoinDt" id="CurCmpnyJoinDt" placeholder="When did You Join This Company" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="TotWrkExp" class="form-control" id="TotWrkExp" onkeypress="return fnAllowNumeric(event)" placeholder="Total Work Experience" required/>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffAddress1" class="form-control" id="OffAddress1" placeholder="Office Address Line 1"  />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffAddress2" class="form-control" id="OffAddress2" placeholder="Office Address Line 2" />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<select class="form-control select-sty" name="OrgCategory"" id="OrgCategory"" required>
												   <option disabled selected  value="">Organization Category*</option>
												        <option value="1">Public Ltd</option>
													    <option value="2">Private Ltd</option>
													    <option value="3">MNC</option>
													    <option value="4">Central/State Govt</option>
													    <option value="5">Proprietorship</option>
													    <option value="6">LLP</option>
													    <option value="7">Partnership firm</option>
													    <option value="8">Others including Society/Trust/AOP</option>
												</select>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<select class="form-control drop-arr select-sty" name="OffCity" id="OffCity">
											  <option disabled selected value="">City</option>
											</select>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffPIN" class="form-control" id="OffPIN" onkeypress=" return fnAllowNumeric(event)" placeholder=" Pincode" maxlength="6"  />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffPhone" class="form-control" id="OffPhone" onkeypress="return fnAllowNumeric(event)" placeholder="Phone No." maxlength="8"/>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="PAN" id="PAN" class="form-control" oninput="pan_card('PAN')" maxlength="10" placeholder="Pancard Number" required />
	<span id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</span>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<select class="form-control select-sty" name="Qualification" id="Qualification" required>
												   <option disabled selected  value="">Qualification*</option>
												        <option value="1">Under Graduate</option>
													    <option value="2">Graduate</option>
													    <option value="3">Post Graduate</option>
													    <option value="4">Professional</option>
													    <option value="9999">Others</option>
												</select>
                            				</div>
                            			</div>

                            			<input type="checkbox" name="check" required /> I have read the terms & Conditions

                            			<div class="col-md-12">
<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="submit_application">Submit my Application<i class="icon-arrow-right"></i></a>
</div>
 <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
  <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
 </div>

                    				</form>
                    			</div>
                    			<!-- Personal Loan - Customer Details end -->
                    			<!-- step 3 end -->
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@include('layout.script')

<!-- modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black; font-size: 15px">Thank You for your interest in RBL Bank Personal Loan.Your application has been Approved in Principle. We request you to kindly note your Application reference no.<b><span id="rbl"></span></b> for future reference.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup-success">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;font-size: 15px">Thank You for your interest in RBL Bank Personal Loan.Your application has been submitted successfully. We request you to kindly note your Application reference no.<b><span id="rbl_success"></span></b> for future reference.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Thank You for your interest in RBL Bank Personal Loan.We are sorry to say you have been <span id="rbl_pl_errcode"> </span> and your Application reference no <b><span id="rbl_error"></span></b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup-duplicate">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Ooops! Error occured, ErrorInfo is : <b><span id="rbl-duplicate"></span></b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<!-- script -->

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
    var d = new Date();
    var year = d.getFullYear()-25 ;
    d.setFullYear(year);

    $("#dob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-84Y",
      yearRange: '-84:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CurResSince").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
	$('#proceed').click(function(){
    
      if(! $('#rbl_personal_loan_form').valid())
       {
              
              alert("You must agree to the terms first.");
        }
        else
        {   
        	var city = $('#city').val();
        	console.log(city);
        	$('#ResCity').val(city);
        	
        	
        	var name = $('#first_name').val();
        	console.log(name);
        	$('#FirstName').val(name);

        	var dob = $('#dob').val();
        	console.log(dob);
        	$('#DOB').val(dob);

        	var employment_type =$('#employ_type').val();
        	console.log(employment_type);
        	$('#EmpType').val(employment_type);

        	var income =$('#income').val();
        	console.log(income);
        	if (income < 25000) 
           {
             alert('Your Net Income Should Be Minimum 25000');
             return false;
           }
        	$('#NMI').val(income);

        	var emi =$('#emi').val();
        	console.log(emi);
        	$('#EmiCurPay').val(emi);

        	// var email_id = $('#email').val();
        	// console.log(email_id);

        	// var email_id =$('#email').val();
        	// console.log(email_id);
        	// $('#Email').val(email_id);

        	var email_id = $('#EmailId').val();
        	console.log(email_id);
        	$('#Email').val(email_id);

        	var mob =$('#mobile_no').val();
        	console.log(mob);
        	if(($('#mobile_no').val().length)<10)
            {
              alert('Enter 10 digits number');
              return false;
            }
        	$('#Mobile').val(mob);

        	var company_name =$('#employer_name').val();
        	console.log(company_name);
        	$('#CompanyName').val(company_name);
              
              $('#get_quotes').show();
	          $('#details').hide();
        }
	});
</script>

<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('rbl-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#city').append('<option value="'+value.code+'">'+value.city+'</option>');

        }); 
    }else{
      $('#city').empty().append('No Result Found');
    }

   },

 });
</script>



<script type="text/javascript">
	
	
		
    function calc(){
      
    	
    	var amt=$('#loan_amount').val();
    	var tenure=$('#tenure').val();
    	if(!tenure)return;
        var roi = 16/12/100;
       
        var emi  = amt * roi * (Math.pow(1 + roi, tenure) / (Math.pow(1 + roi, tenure) - 1));
        var installment =Math.round(emi);
        var fee =amt*0.02;
        console.log(installment);
        $('#monthly_installment').empty().append(installment);
        $('#processingfee').empty().append(fee);
        $('#amount').empty().append(amt);
        $('#period').empty().append(tenure);
        $('#to_pay').empty().append(installment);
        $('#p_fee').empty().append(fee);
        $('#ProcFee').val(fee);

    }

</script>

<script type="text/javascript">
	// $('#apply').click(function(){
	// 	alert('okae');
 //     $('#customer_details_form').show();
 //     $('#get_quotes').hide();
	// });
	$('#apply').click(function(){
		// alert('okae');
       if(! $('#quotes').valid())
       {
       	
        }
        else
        {
      var loanamount =$('#loan_amount').val();
      console.log(loanamount);
      if ($('#loan_amount').val()>2000000) 
           {
             alert('Amount should be equal to 1Lac (or) between 1Lac to 20Lacs');
             return false;
           }
    	

      $('#LnAmt').val(loanamount);

      var roi =16;
       console.log(roi);
      $('#IRR').val(roi);

      var tenure =$('#tenure').val();
       console.log(tenure);
      $('#TnrMths').val(tenure);

      // var process_fee =$('#p_fee').val();
      //  console.log(process_fee);
      // $('#ProcFee').val(process_fee);


      $('#customer_details_form').show();
      $('#get_quotes').hide();
      // $('#details').hide();
  }
	});
</script>

<script type="text/javascript">
 
  $(document).ready(function()
{
    function update()
    {
      if(! $("#loan_amount").val()){
          $("#loanamount").val('');
      }else{
        var cost = parseFloat($("#loan_amount").val());
        // console.log(cost);
        var total = (cost);
       
        // console.log(total);
        $("#loanamount").val(total);
      }
    }
    $(document).on("change, keyup", "#loan_amount", update);
});
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CurCmpnyJoinDt").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>



<script type="text/javascript">
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
    	$('#submit_application').click(function(e){
        e.preventDefault();
         // alert('okae');
         if(! $('#customer_details_form').valid())
       {
              alert("You must agree to the terms first.");
              return false;
        }
        else
        {     

        	
        	if (($('#ResAddress1').val().length)<4) 
           {
             alert('Res Address 1 minimum characters should be 4');
             return false;
           }
        	  // $('#submit_application').hide();
        	  $(".iframeloading").show();
          $.ajax({  
         type: "POST",  
         url: "{{URL::to('rbl-personal-loan-submit')}}",
         data : $('#customer_details_form').serialize(),
         success: function(msg){
         	$(".iframeloading").hide();
         	var returnedData = JSON.parse(msg);
         	console.log(returnedData.ReferenceCode);
			var status_id=returnedData.Status;
			var error=returnedData.Errorinfo;
              console.log(returnedData.ReferenceCode);
               if(status_id==0){
						// e_id=returnedData.Errorcode;
						// status="Ooops! Error occured.";
						// if(e_id)
						// {
						// 	error=get_rbl_error(e_id);
						// }
						
						$('#rbl-duplicate').empty().append(returnedData.Errorinfo);
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-duplicate').modal('show');
						
					}else if(status_id==1){
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup').modal('show');
					}else if(status_id==4){
						$('#rbl_success').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-success').modal('show');
					}else{
						var reject="Rejected";
                        $('#rbl_pl_errcode').empty().append(reject);
					    $('#rbl-popup-error').modal('show');
					    $('#rbl_error').empty().append(returnedData.ReferenceCode);
					}

					
					  
      }   
     });
    	}
    });

    	function get_rbl_error(id){
			error='';
			switch (id) {
				case 1: 
					error="INPUT OUT OF MASTERS RANGE";
					break;
				case 2: 
					error="VALIDATION ERROR";
					break;
				case 3: 
					error="INPUT NOT IN VALID DATA FORMAT (SPECIAL CHARACTERS etc)";
					break;
				case 4:
					error="SYSTEM UNAVAILABLE";
					break;
				case 5: 
					error="DECISION CENTER ERROR";
					break;
				case 6:
					error="DUPLICATE APPLICATION";
				 	break;
			}
				return error;
		}
    </script>

    <script type="text/javascript">   
    $.ajax({ 
   url: "{{URL::to('rbl-off-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#OffCity').append('<option value="'+value.code+'">'+value.city+'</option>');

        }); 
    }else{
      $('#OffCity').empty().append('No Result Found');
    }

   },

 });
</script>

<script type="text/javascript">
  function e_mail(obj,val){
    // console.log(obj);
    if(obj=='EmailId' ){
                   var str =$('#EmailId').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#mail').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mail').show();

                    return false;
                  }
                  
  }
}
</script>


