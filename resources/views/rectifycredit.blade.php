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
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 1000px;">
                                           
                        
                            <form id="rectify_credit_form" name="rectify_credit_form" enctype="multipart/form-data" role="form" method="POST">
					        {{ csrf_field() }}

					        <div class="col-md-12"><h4 class="hdr pad1 text-center">Personal Details</h4></div>
                             
                                    
                                      <!-- customer name -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input name="FName" id="FName" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" placeholder="Full Name"  required="">
                                          </div>
                                      </div>
                                     
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="DateOfBirth" id="DateOfBirth" class="form-control" placeholder="Date of Birth" required="">
                                          </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="PanNum" id="PanNum" oninput="pan_card('PanNum')" minlength="10" maxlength="10" class="form-control" placeholder="Pan No"  required="">
				               <span id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
                                          </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="Aadhar_Num" id="Aadhar_Num" oninput="aadhar('Aadhar_Num')" minlength="12" maxlength="12" class="form-control" placeholder="Aadhar Number">
                                          	<span id="aadhar_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Aadhar Number.!!</span>

                                          </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="Mobile_Num" id="Mobile_Num" minlength="10" maxlength="10" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Mobile No" required="">
										</div>
									</div>

									<!-- <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="Email" id="Email" oninput="mail('Email')" class="form-control" placeholder="Email Id"  required="">
										<span id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>

										</div>
									</div> -->
									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="email" id="email" oninput="mail('email')" class="form-control"  required="" placeholder="Email ID">
										<span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
										</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="Address" id="Address" class="form-control" placeholder="Address" maxlength="40" required="">
										</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          <input type="text" name="City" id="City" class="form-control" placeholder="City" required="">
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
										<input type="text" name="Pincode" id="Pincode" onkeypress="return fnAllowNumeric(event)" maxlength="6" class="form-control" placeholder="Pincode"  required="">
										</div>
									</div>

									<hr style="color:transparent; width:100%" /></br>



									<div class="col-md-12"><h4 class="hdr pad1 text-center">Upload Document</h4></div>



									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="file" name="file" id="image_file" class="form-control"  required="">

                                          	</div>
									</div>

                                 <div class="col-md-2"><h3 class="text-center"> -- OR --</h3></div>

                                   <div class="col-md-5"><h5 class="form-control">In case if you don't have <b>Credit Report</b>
                                   <a href="{{URL::to('http://qa.rupeeboss.com/equifax-verification')}}">Click here</a></h5></div>

                                          	<hr style="color:transparent; width:100%" />
                                          </br>





									<div class="col-md-12"><h4 class="hdr pad1 text-center mrg-top">Financial Details</h4></div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Loans_From_Financial_Institutions" id="Loans_From_Financial_Institutions" class="form-control" placeholder="Loans / Bank from Financial Institutions" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Loans_From_Family" id="Loans_From_Family" class="form-control" placeholder="Loans from Family / Friends" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="No_Of_Loans" id="No_Of_Loans" class="form-control" placeholder="Total number of loans" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Monthly_Income" id="Monthly_Income" class="form-control" placeholder="Total Monthly Income" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Credit_Payment" id="Credit_Payment" class="form-control" placeholder="My average Monthly Credit Card Payment" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Monthly_Expenses" id="Monthly_Expenses" class="form-control" placeholder="My contribution to Monthly Family Expenses" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Total_EMI" id="Total_EMI" class="form-control" placeholder="Total Monthly EMI" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>
									<hr style="color:transparent; width:100%" /></br>

									<div class="col-md-12"><h4 class="hdr pad1 text-center">Education Qalification</h4></div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<select class="form-control select-sty" name="Qualification" id="Qualification" required>
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
                                          		<input type="text" name="University_Nm" id="University_Nm" class="form-control" placeholder="Name of University & Collage"   required="">


                                          	</div>
									</div>

									 <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Year_Of_Passing" id="Year_Of_Passing" class="form-control" placeholder="Year of Passing"  required="">


                                          	</div>
									</div>
									<hr style="color:transparent; width:100%" /></br>

									<div class="col-md-12"><h4 class="hdr pad1 text-center">Employment Details</h4></div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Employer_Nm" id="Employer_Nm" class="form-control" placeholder="Name of Current Employer"   required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Work_Exp" id="Work_Exp" class="form-control" placeholder="Total Years of Work Expesrience" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Designation" id="Designation" class="form-control" placeholder="Current Designation"   required="">


                                          	</div>
									</div>


									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Jobs_Done" id="Jobs_Done" class="form-control" placeholder="Total No. of Jobs Done" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          		<input type="text" name="Longest_Jobs" id="Longest_Jobs" class="form-control" placeholder="Longest Job in years" placeholder="Longest Job in years" onkeypress="return fnAllowNumeric(event)"  required="">


                                          	</div>
									</div>

									<br />
                                      <hr style="color:transparent; width:100%" />
                                      <br />

                  <a class="btn btn-default btn-sm" id="rectify-submit">SUBMIT</a>


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
        <h4><p id="modalerr"><h5 style="color: black;" >Your Lead Id is <span id="rectify"></span> .<h5></p></h4>
        
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
        <h4><p id="modalerr"><h5 style="color: black;">Oops!! Couldn't process due to <span id="rectify-error"></span>.Kindly Try With Alternate Number.<h5></p></h4>
        
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
    var year = d.getFullYear()-25 ;
    d.setFullYear(year);

    $("#DateOfBirth").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-84Y",
      yearRange: '-84:' + year + '',
      defaultDate: d
    });


    var d = new Date();
    var year = d.getFullYear();
    d.setFullYear(year);

    $("#Year_Of_Passing").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });



    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='PanNum' ){
                   var str =$('#PanNum').val();
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
        if(obj=='Aadhar_Num' ){
                   var str =$('#Aadhar_Num').val();
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


// function mail(obj,val){
//     // //console.log(obj);
//     if(obj=='Email' ){
//                    var str =$('#Email').val();
//                    var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
//                    var res = str.match(emailPattern);
//                    if(res){
//                      // //console.log('Pancard is valid one.!!');
//                       $('#email').hide();

//                   }else{
//                     // //console.log('Oops.Please Enter Valid Pan Number.!!');
//                     $('#email').show();

//                     return false;
//                   }
                  
//   }
// }
 function mail(obj,val){
    // console.log(obj);
    if(obj=='email' ){
                   var str =$('#email').val();
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
	$('#rectify-submit').click(function(){
 
  if (!$('#rectify_credit_form').valid()) {

 }else{
  $.ajax({
          url:"{{URL::to('rectify-submit')}}" ,  
          data:new FormData($("#rectify_credit_form")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
             console.log(msg.Status);
             if (msg.Status==1) {
              $('#rectify-credit-popup').modal('show');
              $('#rectify').empty().append(msg.Lead_Id);
            } 
            else {
              $('#rectify-credit-popup').modal('hide');
              $('#rectify-error').empty().append(msg.Errorinfo);
              $('#rectify-popup-error').modal('show');
                
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


