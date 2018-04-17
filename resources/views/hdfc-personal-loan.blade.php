@include('layout.header')

<div class="express-lon-ban">
	<img src="images/hdfc-personal-loan.png" class="img-responsive" width="100%"/>
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
                                <h1 class=""><center>Apply HDFC Business Loan</center></h1>
                                
                                </div>
                            </div>

                             <div class="row">    
                       
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 1000px;">
                                           
                        
                            <form id="hdfc_personal_loan" name="hdfc_personal_loan" role="form" method="POST">
							 {{ csrf_field() }}
                             
                                    <!-- Branch Location -->
                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">                                           
                                            <select name="branch_location" id="branch_location" class="form-control select-sty" required="">
											  <option selected disabled="" value="">Branch Location</option>
											  <option value="AHMEDABAD">AHMEDABAD</option>
											  <option value="Bangalore-PL">Bangalore-PL</option>
											  <option value="Bangalore-BL">Bangalore-BL</option>
											  <option value="Bhuvaneshwar">Bhuvaneshwar</option>
											  <option value="Chandigarh">Chandigarh</option>
											  <option value="Chennai">Chennai</option>
											  <option value="Chennai-BL">Chennai-BL</option>
											  <option value="Cochin">Cochin</option>
											  <option value="Coimbatore">Coimbatore</option>
											  <option value="DELHI-PL">DELHI-PL</option>
											  <option value="Delhi-BL">Delhi-BL</option>
											  <option value="Hyderabad">Hyderabad</option>
											  <option value="Hyderabad-BL">Hyderabad-BL</option>
											  <option value="INDORE">INDORE</option>
											  <option value="Jaipur">Jaipur</option>
											  <option value="Kolkata">Kolkata</option>
											  <option value="Lucknow">Lucknow</option>
											  <option value="MUMBAI">MUMBAI</option>
											  <option value="MUMBAI-BL">MUMBAI-BL</option>
											  <option value="NAGPUR">NAGPUR</option>
											  <option value="Nellore">Nellore</option>
											  <option value="PUNE">PUNE</option>
											  <option value="Rajahmundry">Rajahmundry</option>
											  <option value="Vijaywada">Vijaywada</option>
											  <option value="Vizag">Vizag</option>
											  
											</select>
                                            </div>
                                        </div>
                                        <!-- Branch Location end -->

                                        <!-- Branch Code -->
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<select name="branch_code" id="branch_code" class="form-control block drop-arr select-sty" required="">
											<option data-group='SHOW' value=''>Branch Code</option>
											  <option data-group="AHMEDABAD" value="AhmedabadOpen - BEU">AhmedabadOpen - BEU</option>
											  <option data-group="Bangalore-PL" value="BangaloreOpen - BEU">BangaloreOpen - BEU</option>
											  <option data-group="Bangalore-BL" value="BangaloreOpen - BEU">BangaloreOpen - BEU</option>
											  <option data-group="Bhuvaneshwar" value="bhubeneswaropen-beu">bhubeneswaropen-beu</option>
											  <option data-group="Chandigarh" value="chandigarhopen_beu">chandigarhopen_beu</option>
											  <option data-group="Chennai" value="Chennai Open BEU">Chennai Open BEU</option>
											  <option data-group="Chennai-BL" value="Chennai Open BEU">Chennai Open BEU</option>
											  <option data-group="Cochin" value="CochinOpen - BEU">CochinOpen - BEU</option>
											  <option data-group="Coimbatore" value="Coimbatore open- BEU">Coimbatore open- BEU</option>
											  <option data-group=" DELHI-PL" value="Delhiopen1-beu">Delhiopen1-beu</option>
											  <option data-group="Delhi-BL" value="DelhiOpen - BEU">DelhiOpen - BEU</option>
											  <option data-group="Hyderabad" value="HyderabadOpen - BEU">HyderabadOpen - BEU</option>
											  <option data-group="Hyderabad-BL" value="HyderabadOpen - BEU">HyderabadOpen - BEU</option>
											  <option data-group="INDORE" value="Indore Open - BEU">Indore Open - BEU</option>
											  <option data-group="Jaipur" value="JaipurOpen - BEU">JaipurOpen - BEU</option>
											  <option data-group="Kolkata" value="kolkattaopen-beu">kolkattaopen-beu</option>
											  <option data-group="Lucknow" value="Lucknow_openbeu">Lucknow_openbeu</option>
											  <option data-group="MUMBAI" value="MumbaiOpen - BEU">MumbaiOpen - BEU</option>
											  <option data-group="MUMBAI-BL" value="MumbaiOpen - BEU">MumbaiOpen - BEU</option>
											  <option data-group="NAGPUR" value="Nagpur Open - BEU">Nagpur Open - BEU</option>
											  <option data-group="Nellore" value="Nellore Open - BEU">Nellore Open - BEU</option>
											  <option data-group="PUNE" value="PuneOpen - BEU">PuneOpen - BEU</option>
											  <option data-group="Rajahmundry" value="Rajahmundry Open - BEU">Rajahmundry Open - BEU</option>
											  <option data-group="Vijaywada" value="Vijayawadaopen-BEU">Vijayawadaopen-BEU</option>
											  <option data-group="Vizag" value="Vizagopen-BEU">Vizagopen-BEU</option>											  
											</select>
                                          </div>
                                      </div>
                                      <!-- Branch Code end -->
                                      <!-- customer name -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input name="customer_name" id="customer_name" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" placeholder="Customer Name"  required="">
                                          </div>
                                      </div>
                                      <!-- customer name end -->
                                      <!-- dob -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="dob" id="dob" class="form-control" placeholder="Date of Birth" required="">
                                          </div>
                                      </div>
                                      <!-- dob end -->
                                      <!-- qualificaton -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<select class="form-control select-sty" name="qualification" id="qualification" required>
						                      <option selected disabled="" value="">Highest Educational Qualification</option>
						                      <option value="Under Graduate">Under Graduate</option>
						                      <option value="Graduate/Diploma">Graduate/Diploma</option>
						                      <option value="Post Graduate">Post Graduate</option>
						                      <option value="Professional">Professional</option>
						                      
						                    </select> 
                                          </div>
                                      </div>
                                      <!-- qualification end -->
                                      <!-- loan amt -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="loanamount" id="loanamount" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" class="form-control" placeholder="Required Loan Amount" required="">
                                          </div>
                                      </div>
                                      <!-- loan amt end -->
                                      <br />
                                      <hr style="color:transparent; width:100%" />
                                      <br />
                                      <!-- pan -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                          	<input type="text" name="pancard" id="pancard" oninput="pan_card('pancard')" minlength="10" maxlength="10" class="form-control" placeholder="PAN Number"  required="">
					<span id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
                                          </div>
                                      </div>
                                      <!-- pan end -->

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" required="">
										</div>
									</div>

										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<select name="profile" id="profile" class="form-control block drop-arr select-sty" required="" >
										<option selected disabled="" value="">Profile</option>
										  <option value="Salaried">Salaried</option>
										  <option value="Self Employed">Self Employed</option>
										</select>
										</div>
									</div>

										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="mobile_num" id="mobile_num" minlength="10" maxlength="10" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Mobile " required="">
										</div>
									</div>

										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="alternate_num" id="alternate_num" minlength="10" maxlength="10" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Alternate Mobile" >
										</div>
									</div>

										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="landline" id="landline" minlength="8" maxlength="10" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Landline no 1">
										</div>
									</div>
									<br />

									<hr style="color:transparent; width:100%" />
									<br />

									<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="alt_landline" id="alt_landline" minlength="8" maxlength="10" class="form-control"  onkeypress="return fnAllowNumeric(event)" placeholder="Landline no 2" >
										</div>
									</div>

										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="net_income" id="net_income" minlength="5" maxlength="6" class="form-control" placeholder="Net Income" required="">
										</div>
									</div>

										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="pincode" id="pincode" onkeypress="return fnAllowNumeric(event)" maxlength="6" class="form-control" placeholder="Pincode"  required="">
										</div>
									</div>
										
										
										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="emi" id="emi" onkeypress="return fnAllowNumeric(event)" class="form-control" required="" placeholder="Ongoing EMI">
										</div>
									</div>
										
										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="text" name="yrs_of_emp" id="yrs_of_emp" minlength="1" maxlength="2" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="No of Years in Employment" required="">
										</div>
									</div>
										
										<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
										<input type="email" name="email" id="email" oninput="mail('email')" class="form-control"  required="" placeholder="Email ID">
										<!-- <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span> -->
										</div>
									</div>
									 <br />
                                      <hr style="color:transparent; width:100%" />
                                      <br />
										
									
                                     <div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
									<input type="text" name="current_add" id="current_add" class="form-control" placeholder="Current Address"  required="">
										</div>
									</div>

					<div class="col-xs-12"><P style="padding:10px;font-size: 14px;line-height: 16px; display:-webkit-inline-box;" class="pull-left"><input type="checkbox" name="same" id="same_id" onclick="same_as_above('same_id');"/> &nbsp;&nbsp;Same As Above</p></div>

					<div class="col-md-4 col-sm-12 col-xs-12">
                                          <div class="form-group">
					<input type="text" name="per_add" id="per_add" class="form-control" placeholder="Permanent Address" required="">
					</div>
				</div>
					
					<div class="col-md-12">
					<a class="btn btn-default btn-sm" id="hdfc_submit" >SUBMIT</a>
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

@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="hdfc-bank-pl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;" >Your HDFC Bank Personal Loan Lead Id is <span id="hdfcbank"></span> .<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary hdfcbank_pl_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="hdfc-bank-pl-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;">Oops!! Couldn't process due to <b><span id="hdfc_pl_bank"></span></b>. Kindly Try With Alternate Number.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>


<script type="text/javascript">
	
    $('#branch_location').on('change', function(){
    	$("#branch_code").val('');
        var val = $(this).val();
        // alert(val);
        
        var sub = $('#branch_code');

        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
    $('#branch_location').trigger('change');
</script>

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
    var year = d.getFullYear()-21 ;
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
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='pancard' ){
                   var str =$('#pancard').val();
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
	$('#hdfc_submit').click(function(){
      // alert('okae');
      if (!$('#hdfc_personal_loan').valid()) {

      }else{
      	$.ajax({  
         type: "POST",  
         url: "{{URL::to('hdfc-personal-loan-submit')}}",
         data : $('#hdfc_personal_loan').serialize(),
         success: function(msg){
         	console.log(msg);
            if (msg.Status==1) {
              $('#hdfc-bank-pl-popup').modal('show');
              $('#hdfcbank').empty().append(msg.Lead_Id);
            } 
            else {
                $('#hdfc-bank-pl-popup').modal('hide');
                 $('#hdfc_pl_bank').empty().append(msg.Errorinfo);
                 $('#hdfc-bank-pl-popup-error').modal('show');
                
            }
         	

					
					  
      }   
     });
      }
	});
</script>

<script type="text/javascript">
	
  function same_as_above(obj,val){

     console.log(obj);
     var atLeastOneIsChecked = $('#same_id:checkbox:checked').length > 0;
     // console.log(atLeastOneIsChecked);
    if (atLeastOneIsChecked == true) {
      // alert("ok");

    $('#per_add').val($('#current_add').val());
     
  }
}
</script>

<script type="text/javascript">
  $('.hdfcbank_pl_proceed').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
  });
</script>

<script type="text/javascript">
  function ApplicantObligations(){
var result = true;
$("#emi").each(function() {
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

$('#hdfc_submit').click(function(){
    var testInput = ApplicantObligations();
    if(testInput){
        var finalValue = $('#ApplicantObligations').val();
         $('span').text(finalValue);
    }
});
</script>