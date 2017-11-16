@include('layout.header')



<div id="fh5co-hero">
  <img src="{{URL::to('images/yesbank.png')}}" alt="Yes Bank Home Loan Banner" width="100%" title="Yes Bank Home Loan" class="img-responsive">

  <div class="container">
    <br>
<div class="row">
		

				<div class="row">
				                  
									<div class="form-group title-1">
									 
                    										<h1 class="loan-head" >Yes Bank Home Loan</h1>
                    										<div class="col-md-1"></div>
                                        <form id="Yes_Bank_HL_form" name="Yes_Bank_HL_form" method="POST">
                                        {{ csrf_field() }}
                    										<div class="col-md-10 white-bg pad1 box-shadow">
                                        
                    										

                                        <div class="col-md-4">
                                        <span>Lead Type</span>
                                        <select class="form-control block drop-arr select-sty" name="LeadType" id="LeadType"  required>
                                            <option disabled selected  value="">Lead Type</option>
                                            <option value="I">Individual</option>
                                            <option  value="C">Company</option>
                                        </select> 
                                        </div>
										                    <div class="col-md-4">
										                    <span>Employment Type</span>
										                    <select class="form-control block drop-arr select-sty" name="EmpType" id="EmpType"  required>
                                            <option disabled selected  value="">Employment Type</option>
                                            <option  value="1">Salaried</option>
                                            <option  value="2">Self Employed</option>
						                            </select> 
						                            </div>

                            

                    										<div class="col-md-4" style="display: none;" id="first_nm">
                    										<span>First Name</span>
                    											<input  type="text" class="form-control" placeholder= "First Name*" name="FirstName" id="FirstName" onkeypress="return AllowAlphabet(event)" maxlength="40" required>
                    										</div>
                    										
										
                    										<div class="col-md-4 lst-nam" style="display: none;" id="last_nm">
                    										<span>Last Name</span>
                    											<input  type="text" class="form-control" placeholder="Last Name*" name="LastName" id="LastName" onkeypress="return AllowAlphabet(event)" maxlength="40"  required>
                    										</div>
                    										<div class="col-md-4 lst-nam">
                    										<span>Company Name</span>
                    											<input type="text" class="form-control" placeholder="Company Name*" name="CompanyName" id="CompanyName" maxlength="140"  required>
                    										</div>

                                        <div class="col-md-4">
                                        <span>Company Type</span>
                                        <select class="form-control block drop-arr select-sty" name="Company_Type" 
                                        id="Company_Type" required>
                                            <option disabled selected  value="">Company Type</option>
                                            <option value="Central Government">Central Government</option>
                                            <option value="MNC">MNC</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Private Limited">Private Limited</option>
                                            <option value="Proprietorship">Proprietorship</option>
                                            <option value="PSU">PSU</option>
                                            <option value="Public Limited">Public Limited</option>
                                            <option value="State Government">State Government</option>
                                        </select> 
                                        </div>

                    										<div class="col-md-4">
                    										<span>Contact Person</span>
                    											<input type="text" class="form-control lastReporteddob" id="ContactPerson"  name="ContactPerson" onkeypress="return AllowAlphabet(event)" maxlength="40" placeholder="Contact Person" required>
                    										</div>
                                        
                                        <div class="col-md-4">
                                          <span>Applicant Email</span>
                                          <input  type="text" class="form-control" placeholder="Email" name="Email" id="Email" oninput="mail('Email')" required>
                                          <div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                          </div>

                                        <div class="col-md-12"><hr></div>
                                         <div class="col-md-4">
                    										 <span>Loan Amount</span>
                    											<input type="text" class="form-control " id="LnAmt" name="LnAmt" placeholder="Loan Amount*" onkeypress="return fnAllowNumeric(event)" minlength="1" maxlength="9" required>
                    										</div>
                    										<div class="col-md-4">
                                             <span>Tenure(in years)</span>
										                        <select class="block drop-arr select-sty" name="TnrYears" id="TnrYears" required>
						                                <option disabled selected  value="">Tenure Years</option>
                                            <option value="1">1 Year</option>
                                            <option value="2">2 Year</option>
                                            <option value="3">3 Year</option>
                                            <option value="4">4 Year</option>
                                            <option value="5">5 Year</option>
                                            <option value="6">6 Year</option>
                                            <option value="7">7 Year</option>
                                            <option value="8">8 Year</option>
                                            <option value="9">9 Year</option>
                                            <option value="10">10 Year</option>
                                            <option value="11">11 Year</option>
                                            <option value="12">12 Year</option>
                                            <option value="13">13 Year</option>
                                            <option value="14">14 Year</option>
                                            <option value="15">15 Year</option>
                                            <option style="display: none;" value="16">16 Year</option>
                                            <option style="display: none;" value="17">17 Year</option>
                                            <option style="display: none;" value="18">18 Year</option>
                                            <option style="display: none;" value="19">19 Year</option>
                                            <option style="display: none;" value="20">20 Year</option>
						                       
          						                    </select> 
          						                    </div>
                    									  <div class="col-md-4">
                    										 <span>Pan Card</span>
                    											<input type="text" class="form-control " id="PAN" name="PAN" placeholder="Pan Card*" oninput="pan_card('PAN')" maxlength="10"  required>
                    											<span id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</span>
                    										</div>
                      										<div class="col-md-4">
                      										 <span>Residence City</span>
                      											<!-- <input type="text" class="form-control search_city_kot" id="City" name="City" placeholder="Residence City*"  required>
                                            <input type="hidden" name="ResCity" id="ResCity"> -->
                                            <select class="form-control drop-arr select-sty" name="ResCity" id="ResCity" style="height: 50px" required>
                                            <option disabled selected value="">CITY</option>
                                            </select>
                      										</div>
                      										
                      										

                                            <div class="col-md-4">
                                           <span>Mobile Number</span>
                                            <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile*" maxlength="10" onkeypress="return fnAllowNumeric(event)"  required>
                                          </div>

                                          <div class="col-md-4">
                                           <span>Alternate Number</span>
                                            <input type="text" class="form-control" id="Alt_Mobile" name="Alt_Mobile" placeholder="Alternate Mobile Number" maxlength="10" onkeypress="return fnAllowNumeric(event)"  >
                                          </div>

                                          


                      										
                      										
                      										<div class="col-md-12">
                      										<div class="col-md-4"></div>
                      										<div class="col-md-2"><a class="btn  btn-primary block btn-outline animate-box fadeInUp animated dis-tbl" id="yes-bank-hl-submit">Submit</a></div>

                                          
                                          
                                          <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                          <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
                                         </div>
                                         
                      										</div>
                      									</div>
                                        </form>
			</div>				
		</div>
		</div>
		<br>
		
	</div>

</div>
<br>
@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="yes-bank-hl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Yes Bank Home Loan Lead Id is .<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary kotak_hl_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="yes-bank-hl-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Oops!! Unable To Process.<h5></p></h4>
        
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
  function mail(obj,val){
    // console.log(obj);
    if(obj=='Email' ){
                   var str =$('#Email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('kotak-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#ResCity').append('<option value="'+value.city_code+'">'+value.city_name+'</option>');

        }); 
    }else{
      $('#ResCity').empty().append('No Result Found');
    }

   },

 });
</script>



<script>
$('#LeadType').on('change', function() {
  // alert('okae');
  var LeadType=$('#LeadType').find(":selected").val();
  // console.log(LeadType);
  if ( LeadType == 'I')
      {
       
        $("#EmpType option[value='1']").show();
        $("#EmpType option[value='2']").hide();
        $("#first_nm").show();
        $("#last_nm").show();
      }
      else{
        $("#EmpType option[value='1']").hide();
        $("#EmpType option[value='2']").show();
        $("#first_nm").hide();
        $("#last_nm").hide();
      }
});
</script>

<script type="text/javascript">
  $('#EmpType').on('change', function() {
    var EmpType=$('#EmpType').find(":selected").val();
    if ( EmpType == '1')
      {
       
        $("#TnrYears option[value='16']").show();
        $("#TnrYears option[value='17']").show();
        $("#TnrYears option[value='18']").show();
        $("#TnrYears option[value='19']").show();
        $("#TnrYears option[value='20']").show();
      }
      else{
       $("#TnrYears option[value='16']").hide();
        $("#TnrYears option[value='17']").hide();
        $("#TnrYears option[value='18']").hide();
        $("#TnrYears option[value='19']").hide();
        $("#TnrYears option[value='20']").hide(); 
      }
      });
</script>

<script type="text/javascript">
  $('#yes-bank-hl-submit').click(function(){
    alert('okae');
    if(! $('#Yes_Bank_HL_form').valid())
       {
          alert('Please Fill Up All Details');
        }
        else
        {
            $('#yes-bank-hl-submit').hide();
            $(".iframeloading").show();
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('yes-bank-home-loan-submit')}}",
         data : $('#Yes_Bank_HL_form').serialize(),
         success: function(msg){
            $(".iframeloading").hide();
            console.log(msg);
            
             
            
              
              
        }  
      });   
     }
  });
</script>

<script type="text/javascript">
  $('.kotak_hl_proceed').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
  });
</script>






