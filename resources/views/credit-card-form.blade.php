
@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>Apply For Credit Card</h2>
					
				</div>
				<div class="col-md-12 white-bg">
					<div class="row text-left comp-pg rate">
						
							<form class="" id="compareform" role="form" method="POST" >
							 {{ csrf_field() }}
							 <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
						          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
						          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
								<div class="row">
									<div class="form-group">
									
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder= "FirstName*" name="ApplicantFirstName" id="ApplicantFirstName" onkeypress="return AllowAlphabet(event)" required>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Middle Name" name="ApplicantMiddleName" id="ApplicantMiddleName">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Last Name*" name="ApplicantLastName" id="ApplicantLastName" onkeypress="return AllowAlphabet(event)" required>
										</div>

										<div class="col-md-4">
											<input type="text" class="form-control lastReporteddob" id="DateOfBirth" name="DateOfBirth" placeholder="Date of Birth*" required>
										</div>
										<div class="col-md-4">Male &nbsp;&nbsp;
											<input type="radio" name="Gender"  class="radiob" checked value="Male"> Female &nbsp;&nbsp;<input type="radio" name="Gender" class="radiob" value="Female" required>
										</div>
										<div class="col-md-4">Salaried &nbsp;&nbsp;
											<input type="radio" name="CustomerProfile"  class="radiob" checked  value="Salaried"> Selfemployed &nbsp;&nbsp;<input type="radio" name="CustomerProfile" class="radiob"  value="Selfemployed" required>
										</div>

									</div>
								</div>
								<div class="row sec">
									<div class="form-group">
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Company Name</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Company Name*" name="CompanyName" id="CompanyName" required="">
										</div>
										<div class="col-md-4">
											<input type="text" id="Income" name="Income" class="form-control" placeholder="Income*" onkeypress="return fnAllowNumeric(event)"  required>
										</div>
										<!-- <div class="col-md-4">ICICI Bank Relationship<b>:</b> Yes &nbsp;&nbsp;
											<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship"  class="radiob" required value="Yesrelationship">&nbsp;&nbsp;  No&nbsp;&nbsp;<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship" class="radiob" value="Norelationship">
										</div>

 -->
 									       <div class="col-md-4">
  
										     <select class="block drop-arr select-sty" name="ICICIBankRelationship" id="ICICIBankRelationship" required>
											  <option value="">ICICIBankRelationship</option>
											    <option value="Salary">Salary</option>
												<option value="Saving">Saving</option>
												<option value="Loan">Loan</option>
												<option value="Norelationship">Norelationship</option>
												
											</select>
  											</div>

  											<div class="col-md-4">
										     <input  type="text" class="form-input-new form-control" name="Total_Exp" id="Total_Exp" placeholder="Total Experience" onkeypress="return isNumberKey(event)"  required>
											</div>

											

											<div class="col-md-4">
										     <input  style='display:none;' type="text" class="form-input-new form-control" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" placeholder="ICICI Relationship Number" maxlength="15" onkeypress="return isNumberKey(event)"  required>
											</div>
		
		
										
										
											<div class="col-md-8">Salary Account With Other Bank<b>:</b> Yes &nbsp;&nbsp;
											<input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank"  class="radiob" checked value="Yes"> No &nbsp;&nbsp;<input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" class="radiob" value=" No">
										</div>
										</div>
									</div>
								<div class="row sec">
									<div class="form-group">
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Current Addresses Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="flat No / Plot No / House No*" name="ResidenceAddress1" id="ResidenceAddress1" required>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Building / Society Name" name="ResidenceAddress2" id="ResidenceAddress2">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Road No / Area / Locality" name="ResidenceAddress3" id="ResidenceAddress3">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_citynm" placeholder="City*" name="City" id="City" required>
										</div>
										<div class="col-md-4">
												<input type="text" id="ResidencePincode" name="ResidencePincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
											</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_statenm" placeholder="State*" name="ResidenceState" id="ResidenceState" required>
										</div>	
										</div>
									</div>
									<div class="row sec">
										<div class="form-group">
											<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h4>
										
											<div class="col-md-4">
												<input type="text" class="form-control" id="ResidencePhoneNumber" name="ResidencePhoneNumber" placeholder="Telephone No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="ResidenceMobileNo" name="ResidenceMobileNo" placeholder="Mobile No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
											</div>
											<!-- <div class="col-md-12">
												<input type="email" class="form-control" placeholder="Email Address*" name="email" required>
											</div> -->
											<div class="col-md-4">
												<input type="text" class="form-control" id="STDCode" name="STDCode" placeholder="STD Code" required  onkeypress="return fnAllowNumeric(event)" maxlength="4"  >
											</div>
												
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Identity Details</h4>
											<div class="col-md-4">
												<input type="text" id="ApplicationNumber" name="ApplicationNumber" class="form-control" placeholder="Application Number*"  maxlength="13" minlength="13" required>
											</div>
											<!-- <div class="col-md-4">
												<input type="text" class="form-control" placeholder="Passport No*" name="passport"	>
											</div> -->
											<div class="col-md-4">
  
										     <select class="block drop-arr select-sty" name="SalaryAccountOpened" id="SalaryAccountOpened" required>
											  <option value="">SalaryAccountOpened</option>
											    <option value="Above2Months"> > 2 Months</option>
												<option value="Below2Months"><=2 Months</option>
												
												
											</select>
  											</div>
  											
											<div class="col-md-4">
												<input type="text" id="PanNo" name="PanNo" class="form-control" placeholder="Pancard*" oninput="pancard('PanNo')" maxlength="10" minlength="10" required >
												<div id="pannumber" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
											</div>
											
											<!-- <div class="col-md-4">
												<input type="text" class="form-control lastReporteddob" id="SalaryAcOpenDate" name="SalaryAcOpenDate" placeholder="Salary Ac Open Date*" required>
											</div> -->
										<div class="col-md-12">
										<input type="checkbox" name="terms" required>
											I hereby confirm that I have read and understood the
			<a href="#" data-toggle="modal" data-target="#Experian_terms_modal"> Rupeeboss Terms</a> and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.

										</div>
										
										</div class="col-md-12">
										&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated credit-submit dis-tbl" >Confirm & Continue<i class="icon-arrow-right"></i>


									</button>
									<div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
									<p><b>All <mark style="color:red">*</mark>fields are mandatory.</b></p>
								</div>
							</form>
					</div>

				</div>
			</div>
		</div>	
	</div>
</div>
@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="credit_process">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Thank you for your interest in ICICI Bank Credit Cards. Our representative will get in touch with you within 3 working days subject to your application meeting the eligibility criteria</b>.</p></h4>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      	</div>
    	</div>
  </div>
</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="credit_process_sorry">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Ooops. Something went wrong.</b>.</p></h4>
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(".credit-submit").click(function(event){
		event.preventDefault();
      var form=$(this).closest("form").attr('id');
      $form=$('#'+form);
      if(! $form.valid()){
      }else{
        //var s=$('#'+form).serialize();

        $(".iframeloading").show();
        $(".credit-submit").hide(); 
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('credit-submit')}}",
         data : $('#'+form).serialize(),
         dataType: 'json',
         success: function(msg){
         $(".iframeloading").hide();  
        
         // console.log(msg);
          if(msg==2){
          	// alert("OKAE");
          	 alert("Something Went Wrong");

           
            // $('#credit_process').modal('show');        
          } 
          else{
          	// console.log(msg);
            alert(" Your Application id is "+msg+" Thank you for your interest in ICICI Bank Credit Cards. Our representative will get in touch with you within 3 working days subject to your application meeting the eligibility criteria");
             // $('#credit_process_sorry').modal('show');
          }

        }  
      }); 
      }

    });


</script>



<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">

	

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_citynm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
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
          $(".search_citynm").val("");
          $(".search_citynm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>
<script type="text/javascript">
	

 $(document).ready(function(){
	  
    $(".search_statenm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchstateajax') }}",
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
          $(".search_statenm").val("");
          $(".search_statenm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
	function pancard(obj,val){
		// console.log(obj);
		if(obj=='PanNo' ){
                   var str =$('#PanNo').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#pannumber').hide();
                     	// $('.credit-submit').show();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#pannumber').show();
                  	// $('.credit-submit').hide();

                  	return false;
                  }
                  
	}
}
</script>

<script type="text/javascript">
	$(document).ready(function(){
    $('#ICICIBankRelationship').on('change', function() {
    	console.log(this.value);
      if ( this.value == 'Salary')
      {
        $("#ICICIRelationshipNumber").show();
      }
      else
      {
        $("#ICICIRelationshipNumber").hide();
      }
    });
});
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



