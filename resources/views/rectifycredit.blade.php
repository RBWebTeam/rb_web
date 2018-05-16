@include('layout.header')
<style>
    .ull {background:#fff; font-size:13px; display:block; border:1px solid #ccc;}
	.ull li {list-style-type:none; display:block;padding:2px;border-bottom:1px dashed #eee;}
	.sbi-banner {background: url("images/sbi-banner.jpg"); width:100%; height:500px;box-shadow: 1px 0px 2px 1px #666; }
	.grup-btn-center {width: 342px;margin-left: 30%;margin: 30px 0px;display: block !important;}
	label {font-size:11px;margin: 0px;}
	h4 {text-transform:uppercase;}
	.mrg-top{margin-top:20px; display:block;}
	.flt-left {float:left;}
	.hdr { margin-bottom:20px;}
	.hdr b {border-bottom:2px solid #f1f1f1; padding:10px 20px;}
	.obj-center {margin:0 auto; display:block;}
	.mrg-btm {margin-bottom:20px;}
	.form-group h4 {background:#e8e8e8;}
  </style>
<div class="express-lon-ban">
	<img src="images/rectify-banner.png" class="img-responsive" width="100%"/>
</div>

<div id="fh5co-hero">
    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                  <div class="wrapper-content bg-white pinside40">
                    <div class="section-faq" id="section-faq">
                        <div class="">

                            <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                <div class="mb60  section-title text-center  ">
                                <h1 class=""><center>Rectify Credit Score</center></h1>
                                
                                </div>
                            </div>

                             <div class="row">    
                       
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 300px;">
                                           
                        <div id="registration_form">
                            <form id="rectify_credit_form" name="rectify_credit_form" enctype="multipart/form-data" role="form" method="POST">
					        {{ csrf_field() }}

					        <div class="col-md-12"><h4 class="hdr pad1 text-center">Registration Form</h4></div>
                             
                                    
                                      <!-- customer name -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input name="first_name" id="first_name" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" placeholder="First Name"  required="">
                                          </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input name="last_name" id="last_name" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" placeholder="Last Name"  required="">
                                          </div>
                                      </div>
                                     
                                      
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="email" id="email_address" oninput="mail('email_address')" class="form-control"  required="" placeholder="Email ID">
										<span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
										</div>
									</div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="mobile" id="mobile" minlength="10" maxlength="10" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Mobile No" required="">
										</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                  	<select class="form-control select-sty" name="state" id="state" required>
				                      <option selected disabled="" value="">State</option>
									  <option value="ANDAMAN-NICOBAR">ANDAMAN-NICOBAR</option>
									  <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
									  <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
									  <option value="ASSAM">ASSAM</option>
									  <option value="BIHAR">BIHAR</option>
									  <option value="CHANDIGARH">CHANDIGARH</option>
									  <option value="CHHATTISGARH">CHHATTISGARH</option>
									  <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR HAVELI</option>
									  <option value="DAMAN & DIU">DAMAN & DIU</option>
									  <option value="DELHI">DELHI</option>
									  <option value="GOA">GOA</option>
									  <option value="GUJARAT">GUJARAT</option>
									  <option value="HARYANA">HARYANA</option>
									  <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
									  <option value="JAMMU KASHMIR">JAMMU KASHMIR</option>
									  <option value="JHARKHAND">JHARKHAND</option>
									  <option value="KARNATAKA">KARNATAKA</option>
									  <option value="KERALA">KERALA</option>
									  <option value="LAKSHADWEEP">LAKSHADWEEP</option>
									  <option value="MADHYA PRADESH">MADHYA PRADESH</option>
									  <option value="MAHARASHTRA">MAHARASHTRA</option>
									  <option value="MANIPUR">MANIPUR</option>
									  <option value="MEGHALAYA">MEGHALAYA</option>
									  <option value="MIZORAM">MIZORAM</option>
									  <option value="NAGALAND">NAGALAND</option>
									  <option value="ORISSA">ORISSA</option>
									  <option value="PONDICHERRY">PONDICHERRY</option>
									  <option value="PUNJAB">PUNJAB</option>
									  <option value="RAJASTHAN">RAJASTHAN</option>
									  <option value="SIKKIM">SIKKIM</option>
									  <option value="TAMILNADU">TAMILNADU</option>
									  <option value="TRIPURA">TRIPURA</option>
									  <option value="UTTAR PRADESH">UTTAR PRADESH</option>
									  <option value="UTTARAKHAND">UTTARAKHAND</option>
									  <option value="WEST BENGAL">WEST BENGAL</option>
						                      
		                              </select> 
                                      </div>
                                      </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          <input type="text" name="city" id="city" class="form-control" placeholder="City" required="">
                                      </div>
									</div>



									  <div class="col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                  	<select class="form-control select-sty" name="language" id="language" required>
				                        <option selected disabled="" value="">Language Of Preference</option>
										<option value="hindi">Hindi</option>
										<option value="english">English</option>
										<option value="marathi">Marathi</option>
										<option value="punjabi">Punjabi</option>
										<option value="gujarati">Gujarati</option>
										<option value="malayalam">Malayalam</option>
										<option value="kannada">Kannada</option>
										<option value="tamil">Tamil</option>
										<option value="telugu">Telugu</option>
										<option value="bengali">Bengali</option>
										<option value="santali">Santali</option>
										<option value="odia">Odia</option>
										<option value="maithili">Maithili</option>
										<option value="other">Other</option>
							          </select>
                                      </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
									 <div class="form-group">
									 <textarea class="form-control" placeholder="Comments" id="comment" name="comment" rows="2"></textarea>
									 </div>	
									</div>

									<!-- <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="created_on" id="created_on" class="form-control" placeholder="Created On" required="">
                                          </div>
                                      </div> -->
                                      <br />
                               <div class="col-md-12">
                              <a class="btn btn-default btn-sm" id="confirm_registration">Confirm And Proceed</a>
                              </div>


                                 </form>
                                 </div>

                                 <div id="rectify_form" style="display: none;">
                            <form id="rectify_personal_details" name="rectify_personal_details" role="form" enctype="multipart/form-data" method="POST">
					                  {{ csrf_field() }}

					                  <div class="col-md-12"><h4 class="hdr pad1 text-center">Rectify Form</h4></div>
                             
                                    <input type="text" name="App_Id" id="App_Id" >
                                      <!-- customer name -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input name="FullName" id="FullName" type="text" class="form-control"  onkeypress="return AllowAlphabet(event)" placeholder="Full Name"  required="">
                                          </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                            <input type="text" name="DOB" id="date" class="form-control" placeholder="Date of Birth" required="">
                                          </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                        <input type="text" name="PAN" id="txtpan" oninput="pan_card('txtpan')" style="text-transform:uppercase" minlength="10" maxlength="10" class="form-control" placeholder="Pan No"  required="">
                                        <span id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
                                          </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                            <input type="text" name="AadharNo" id="txtadhar" oninput="aadhar('txtadhar')" minlength="12" maxlength="12" class="form-control" placeholder="Aadhar Number">
                                            <span id="aadhar_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Aadhar Number.!!</span>

                                          </div>
                                      </div>

                                      
                                     
                                      
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                  										<input type="text" name="Email" id="txtemail" class="form-control"   required="" placeholder="Email ID">
                  										
                  										</div>
									                    </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                  										<input type="text" name="Mobile" id="txtmobile"  class="form-control"  placeholder="Mobile No" required="">
                  										</div>
									                    </div>

									                   <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
										                  <input type="text" name="State" id="txtstate" class="form-control"   required="" placeholder="State">
										
										                  </div>
									                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          <input type="text" name="City" id="txtcity" class="form-control"   placeholder="City" required="">
                                      </div>
									                  </div>

                                     <div class="col-md-4 col-sm-12 col-xs-12">
                                     <div class="form-group">
                                     <textarea class="form-control" placeholder="Address" id="txtadd" name="Addr" required rows="2"></textarea>
                                     </div> 
                                    </div>

                                     <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                      <input type="text" name="PinNo" id="txtpin" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="6" class="form-control" placeholder="Pincode"  required="">
                                      </div>
                                      </div>
                                       
                                       <hr style="color:transparent; width:100%" /></br>
                                      <div class="col-md-12"><h4 class="hdr pad1 text-center mrg-top">Financial Details</h4></div>

                                          <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                              <input type="text" name="LoanFin" id="txtloanfin" class="form-control" placeholder="Loans / Bank from Financial Institutions" onkeypress="return fnAllowNumeric(event)"  required="">


                                            </div>
                                          </div>

                                          <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                              <input type="text" name="LoanOther" id="txtloanother" class="form-control" placeholder="Loans from Family / Friends" onkeypress="return fnAllowNumeric(event)"  required="">


                                            </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                              <input type="text" name="NoLoan" id="txtnoloan" class="form-control" placeholder="Total number of loans" onkeypress="return fnAllowNumeric(event)"  required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="MonthlyIncome" id="txtmonincome" class="form-control" placeholder="Total Monthly Income" minlength="5" maxlength="9" onkeypress="return fnAllowNumeric(event)"  required="">


                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="AvgCredit" id="txtavgcredit" class="form-control" placeholder="Average Monthly CC Payment" onkeypress="return fnAllowNumeric(event)"  required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="Expenses" id="txtexp" class="form-control" placeholder="Monthly Expenses" onkeypress="return fnAllowNumeric(event)"  required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="EMI" id="txtemi" class="form-control" placeholder="Total Monthly EMI" onkeypress="return fnAllowNumeric(event)"  required="">
                                              </div>
                                              </div>

                                              <hr style="color:transparent; width:100%" /></br>

                                              <div class="col-md-12"><h4 class="hdr pad1 text-center">Education Qalification</h4></div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <select class="form-control select-sty" name="Degree" id="txtdeg" required>
                                              <option selected disabled="" value="">Highest Educational Qualification</option>
                                              <option value="Under Graduate">Under Graduate</option>
                                              <option value="Graduate/Diploma">Graduate/Diploma</option>
                                              <option value="Post Graduate">Post Graduate</option>
                                              <option value="Professional">Professional</option>
                                              </select> 
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="University" id="txtuni" class="form-control" placeholder="Name of University & Collage"   required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="YrofPassing" id="datepickeryear" class="form-control" placeholder="Year of Passing"  required="">
                                              </div>
                                              </div>

                                              <hr style="color:transparent; width:100%" /></br>

                                              <div class="col-md-12"><h4 class="hdr pad1 text-center">Employment Details</h4></div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="CurrentEmployer" id="txtemp" class="form-control" placeholder="Name of Current Employer"   required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="TotWorkExp" id="txtworkexp" class="form-control" placeholder="Total Years of Work Expesrience" maxlength="2" onkeypress="return fnAllowNumeric(event)"  required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="Designation" id="txtdesig" class="form-control" placeholder="Current Designation"   required="">
                                              </div>
                                              </div>


                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="TotalJobDone" id="txtnojob" class="form-control" placeholder="Total No. of Jobs Done" onkeypress="return fnAllowNumeric(event)" maxlength="2"  required="">
                                              </div>
                                              </div>

                                              <div class="col-md-4 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                              <input type="text" name="LongestJob" id="txtlongjob" class="form-control" maxlength="2" placeholder="Longest Job in years" onkeypress="return fnAllowNumeric(event)"  required="">
                                              </div>
                                              </div>

                                              <hr style="color:transparent; width:100%" /></br>



                  <div class="col-md-12"><h4 class="hdr pad1 text-center">Upload Report</h4></div>



                  <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                            <input type="file" name="attachment" id="image_file" class="form-control"  required="">

                                            </div>
                  </div>

                                 <div class="col-md-2"><h3 class="text-center"> -- OR --</h3></div>

                                   <div class="col-md-5"><h5 class="form-control">In case if you don't have <b>Credit Report</b>
                                   <a href="{{URL::to('http://qa.rupeeboss.com/equifax-verification')}}">Click here</a></h5></div>

                                            <hr style="color:transparent; width:100%" />
                                          </br>



                                              

                                  <br />
                               <div class="col-md-12">
                              <a class="btn btn-default btn-sm" id="submit_form">Submit</a>
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
</div>

@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="rectify-credit-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;" >Your Lead Id is <span id="app_id"></span> and <span id="reasn"></span> successfully.<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary rectify_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rectify-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;">Oops!! Couldn't process due to <span id="rectify-error"></span> and <span id="reason"></span> .<h5></p></h4>
        
      </div>
   </div>
  </div>
</div>

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


    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#created_on").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });


    var d = new Date();
    var year = d.getFullYear()-21;
    d.setFullYear(year);

    $("#date").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });

    var d = new Date();
    var year = d.getFullYear();
    d.setFullYear(year);

    $("#datepickeryear").datepicker({ dateFormat: "yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });



    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='txtpan' ){
                   var str =$('#txtpan').val();
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
    

    
    function aadhar(obj,val){
        // //console.log(obj);
        if(obj=='txtadhar' ){
                   var str =$('#txtadhar').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // //console.log('Aadhar No. is valid one.!!');
                        $('#aadhar_number').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Aadhar No..!!');
                    $('#aadhar_number').show();

                    return false;
                  }
                  
    }
}


 function mail(obj,val){
    // console.log(obj);
    if(obj=='email_address' ){
                   var str =$('#email_address').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>


<script type="text/javascript">
	$('#submit_form').click(function(){
    
  if (!$('#rectify_personal_details').valid()) {

 }else{
  $.ajax({
          url:"{{URL::to('rectify-submit')}}" ,  
          data:new FormData($("#rectify_personal_details")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
             console.log(msg.Status);
             
             if (msg.status==1) 
              {
              $('#app_id').empty().append(msg.response_id);
              $('#rectify-credit-popup').modal('show');
              $('#reasn').empty().append(msg.message);
              } 
              else 
              {
              $('#rectify-credit-popup').modal('hide');
              $('#rectify-error').empty().append(msg.error_message);
              $('#reason').empty().append(msg.message);
              $('#rectify-popup-error').modal('show');
              }
             
              
            
            }
        });
}
  });
  
</script>

<script type="text/javascript">
	$('#confirm_registration').click(function(){
 
  if (!$('#rectify_credit_form').valid()) {
  return false;
    }
    else
    {    

    	var f_name=$('#first_name').val().concat($('#last_name').val());;
    	 $('#FullName').val(f_name);

    	 var mobile=$('#mobile').val();
    	 $('#txtmobile').val(mobile);

    	 var email=$('#email').val();
       console.log(email);
    	 $('#txtemail').val(email);

    	 var state=$('#state').val();
    	 $('#txtstate').val(state);

    	 var city=$('#city').val();
    	 $('#txtcity').val(city);
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('rectify-registration')}}",
         data : $('#rectify_credit_form').serialize(),
         success: function(msg){
            
         if (msg.status==1) {
              $('#registration_form').hide();
              $('#rectify_form').show();
              $('#App_Id').val(msg.response_id);
              $('#message').val(msg.message);
            } 
            
              
        }  
      });   
     }
  });
</script>

<script type="text/javascript">
  $('.rectify_proceed').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
  });
</script>

<script type="text/javascript">
  function ApplicantObligations(){
var result = true;
$("#txtemi").each(function() {
        if (!this.value) {
            this.value = 0;
        }
        
        if(jQuery.isNumeric(this.value) && this.value>=0){
            
        }else{
            result = false;
        }
    });
    return result;
}

$('#submit_form').click(function(){
    var testInput = ApplicantObligations();
    if(testInput){
        var finalValue = $('#txtemi').val();
         $('span').text(finalValue);
    }
});
</script>




