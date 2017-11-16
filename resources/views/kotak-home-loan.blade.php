@include('layout.header')

<div id="fh5co-hero">
  <img src="{{URL::to('images/kotak_banner.jpg')}}" alt="Kotak Home Loan Banner" title="Kotak Home Loan" class="img-responsive">

  <div class="container">
    <br>
<div class="row">
		

				<div class="row">
				                  
									<div class="form-group title-1">
									 
                    										<h3 class="hdr col-md-12 text-center">Kotak Home Loan</h4>
                    										<div class="col-md-1"></div>
                                  <form id="Kotak_HL_form" name="Kotak_HL_form" method="POST">
                                   {{ csrf_field() }}
                    										<div class="col-md-10 white-bg pad1 box-shadow">
                    										<div class="col-md-4">
                    										<span>Loan Purpose</span>
										                    <select class="form-control block drop-arr select-sty" name="LoanPurpose" id="LoanPurpose"  required>
                                            <option disabled selected  value="">Loan Purpose</option>
                                            <option value="1">Purchase of Home/Flat</option>
                                            <option value="2">Balance Transfer of existing loan from another bank</option>
                                            <option value="3">Composite Loan (Plot + Construction)</option>
                                            <option value="4">Construction on a plot owned by you</option>
                                            <option value="5">Extension/Renovation of owned house</option>
                                            <option value="6">Corporate Home Loan</option>
                                            <option value="7">Purchase of Commercial Property</option>
                                           
                                              
                                          </select> 
						                            </div>

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
                    										<span>Contact Person</span>
                    											<input type="text" class="form-control lastReporteddob" id="ContactPerson"  name="ContactPerson" onkeypress="return AllowAlphabet(event)" maxlength="40" placeholder="Contact Person" required>
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
                      											<input type="text" class="form-control search_citynm " id="City" name="City" placeholder="Residence City*"  required>
                                            <input type="hidden" name="ResCity" id="ResCity">
                      										</div>
                      										
                      										<div class="col-md-4">
                      										 <span>Residence City Area</span>
                      											<input type="text" class="form-control search_city_area " id="CityArea" name="CityArea" placeholder="Residence City Area*"  required>
                                            <input type="hidden" name="ResCityArea" id="ResCityArea">
                      										</div>

                                            <div class="col-md-4">
                                           <span>Mobile Number</span>
                                            <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile*" maxlength="10" onkeypress="return fnAllowNumeric(event)"  required>
                                          </div>
                      										
                      										
                      										<div class="col-md-12">
                      										<div class="col-md-4"></div>
                      										<div class="col-md-2"><a class="btn  btn-primary block btn-outline animate-box fadeInUp animated dis-tbl" id="kotak-hl-submit">Submit</a></div>
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

	

 $(document).ready(function(){
    src = "{{ route('searchkotakcityajax') }}";
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
          $("#ResCity").attr("data-value","");


          // $(".search_citynm").attr("disabled", false);
         
        }else{

          alert( ui.item.datavalue);
            $("#ResCity").val(ui.item.datavalue);
                 
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">

  

 $(document).ready(function(){
    src = "{{ route('searchkotakcityareaajax') }}";
    $(".search_city_area").autocomplete({
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
          $("#ResCityArea").attr("data-value","");
          // $(".search_citynm").attr("disabled", false);
         
        }else{
            $("#ResCityArea").val(ui.item.datavalue);
                 
          
             }
           }

        
      });
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
    if ( EmpType == '2')
      {
       
        $("#TnrYears option[value='16']").show();
        $("#TnrYears option[value='17']").show();
        $("#TnrYears option[value='18']").show();
        $("#TnrYears option[value='19']").show();
        $("#TnrYears option[value='20']").show();
      }
      });
</script>

<script type="text/javascript">
  $('#kotak-hl-submit').click(function(){
    // alert('okae');
    if(! $('#Kotak_HL_form').valid())
       {
               alert('Please Fill Up All Details');
        }
        else
        {
          
           
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('kotak-home-loan-submit')}}",
         data : $('#Kotak_HL_form').serialize(),
         success: function(msg){
            console.log(msg.ReferenceCode);
             console.log(msg);
              
              
        }  
      });   
     }
  });
</script>



