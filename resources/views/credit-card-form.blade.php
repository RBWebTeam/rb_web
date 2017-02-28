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
								<div class="row">
									<div class="form-group">
									
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder= "FirstName*" name="ApplicantFirstName" id="ApplicantFirstName" required>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Middle Name" name="ApplicantMiddleName" id="ApplicantMiddleName">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Last Name*" name="ApplicantLastName" id="ApplicantLastName" required>
										</div>

										<div class="col-md-4">
											<input type="text" class="form-control lastReporteddob" id="DateOfBirth" name="DateOfBirth" placeholder="Date of Birth*" required>
										</div>
										<div class="col-md-4">Male &nbsp;&nbsp;
											<input type="radio" name="Gender"  class="radiob" required value="Male">&nbsp;&nbsp; Female &nbsp;&nbsp;<input type="radio" name="Gender" class="radiob" value="Female">
										</div>
										<div class="col-md-4">Salaried &nbsp;&nbsp;
											<input type="radio" name="CustomerProfile"  class="radiob" required value="Salaried">&nbsp;&nbsp; Selfemployed &nbsp;&nbsp;<input type="radio" name="CustomerProfile" class="radiob" value="Selfemployed">
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
										<div class="col-md-4">ICICI Bank Relationship<b>:</b> Yes &nbsp;&nbsp;
											<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship"  class="radiob" required value="Yesrelationship">&nbsp;&nbsp;  No&nbsp;&nbsp;<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship" class="radiob" value="Norelationship">
										</div>

										
										
											<div class="col-md-8">Salary Account With Other Bank<b>:</b> Yes &nbsp;&nbsp;
											<input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank"  class="radiob" required value="Yes">&nbsp;&nbsp; No &nbsp;&nbsp;<input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" class="radiob" value=" No">
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
											<input type="text" class="form-control search_city_nm" placeholder="City*" name="City" id="City" required>
										</div>
										<div class="col-md-4">
												<input type="text" id="ResidencePincode" name="ResidencePincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
											</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_state_nm" placeholder="State*" name="ResidenceState" id="ResidenceState" required>
										</div>	
										</div>
									</div>
									<div class="row sec">
										<div class="form-group">
											<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h4>
										
											<div class="col-md-4">
												<input type="text" class="form-control" id="ResidencePhoneNumber" name="ResidencePhoneNumber" placeholder="Telephone No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="ResidenceMobileNo" name="ResidenceMobileNo" placeholder="Mobile No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
											</div>
											<!-- <div class="col-md-12">
												<input type="email" class="form-control" placeholder="Email Address*" name="email" required>
											</div> -->
											<div class="col-md-4">
												<input type="text" class="form-control" id="STDCode" name="STDCode" placeholder="STD Code" required="" onkeypress="return fnAllowNumeric(event)" maxlength="2" minlength="2">
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
												<input type="text" id="PanNo" name="PanNo" class="form-control" placeholder="Pancard*" maxlength="10" minlength="10" required >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control lastReporteddob" id="SalaryAcOpenDate" name="SalaryAcOpenDate" placeholder="Salary Ac Open Date*" required>
											</div>
										<div class="col-md-12">
										<input type="checkbox" name="terms" required>
											I hereby confirm that I have read and understood the
			<a href="#" data-toggle="modal" data-target="#Experian_terms_modal"> Rupeeboss Terms</a> and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.

										</div>
										
										</div class="col-md-12">
										&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated credit-submit" >Confirm & Continue<i class="icon-arrow-right"></i>
									</button>
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

<script type="text/javascript">
	$(".credit-submit").click(function(event){
		event.preventDefault();
      var form=$(this).closest("form").attr('id');
      $form=$('#'+form);
      if(! $form.valid()){
      }else{
        //var s=$('#'+form).serialize();

   
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('credit-submit')}}",
         data : $('#'+form).serialize(),
         dataType: 'json',
         success: function(msg){
         //console.log(msg);
          if(msg==1){

            alert("Thank you for your interest in ICICI Bank Credit Cards. Our representative will get in touch with you within 3 working days subject to your application meeting the eligibility criteria");
          } 
          else if(msg==2){
            alert("Something Went Wrong");
          }

        }  
      }); 
      }

    });


</script>

<script type="text/javascript">

	

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_city_nm").autocomplete({
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
          $(".search_city_nm").val("");
          $(".search_city_nm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
	

 $(document).ready(function(){
	  
    $(".search_state_nm").autocomplete({
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
          $(".search_state_nm").val("");
          $(".search_state_nm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
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


