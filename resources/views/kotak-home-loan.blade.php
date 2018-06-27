@include('layout.header')



<div class="iifl-image">
    <img src="images/kotak-banner.jpg">
    </div>
    <div class=" ">
        <!-- content start -->



<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                <div class="mb60  section-title text-center  ">
                                <h1 class=""><center>Kotak Home Loan</center></h1>
                                </div>
                                </div>
                                
                                <div class="row">    
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 500px;">
                        <h4 >Personal Details</h4>
                        <form id="Kotak_HL_form" name="Kotak_HL_form" method="POST">
                                        {{ csrf_field() }}
                            <!-- Text input-->

                             <input type="hidden" name="CampaignName" value="{{$CampaignName}}">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LoanPurpose">Loan Purpose</label>
                                <select id="LoanPurpose" name="LoanPurpose" class="form-control">
                                    <option selected disabled="">Loan Purpose</option>
                                    <option value="1">Purchase of Home / Flat</option>
                                    <option value="2">Balance Transfer of Existing Loan from Another Bank</option>
                                    <option value="3">Composite Loan (Plot + Construction)</option>
                                    <option value="4">Construction on a Plot Owned by You</option>
                                    <option value="5">Extension / Renovation of Owned House</option>
                                    <option value="6">Corporate Home Loan</option>
                                    <option value="7">Purchase of Commercial Property</option>
                                </select>
                            </div>
                            </div>



                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LeadType">Lead Type</label>
                                <select id="LeadType" name="LeadType" class="form-control">
                                    <option selected disabled="">Lead Type</option>
                                    <option value="I">Individual</option>
                                    <option value="C">Company</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="EmpType">Employment Type</label>
                                <select id="EmpType" name="EmpType" class="form-control">
                                    <option selected disabled="">Employment Type</option>
                                    <option value="1">Salaried</option>
                                    <option value="2">Self Employed</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;" id="first_nm">
                            <div class="form-group">
                                <label class="control-label sr-only" for="FirstName">First Name</label>
                                <input  type="text" class="form-control" placeholder= "First Name*" name="FirstName" id="FirstName" onkeypress="return AllowAlphabet(event)" maxlength="40" required>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;" id="last_nm">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LastName">First Name</label>
                                <input  type="text" class="form-control" placeholder= "Last Name*" name="LastName" id="LastName" onkeypress="return AllowAlphabet(event)" maxlength="40" required>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="CompanyName">Company Name</label>
                                <input id="CompanyName" name="CompanyName" type="text" placeholder="Company Name" class="form-control input-md" maxlength="140" required="required">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ContactPerson">Contact Person</label>
                                <input id="ContactPerson" name="ContactPerson" onkeypress="return AllowAlphabet(event)" maxlength="40" type="text" placeholder="Contact Person" class="form-control input-md" required="required">
                            </div>
                            </div>



                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LnAmt">Loan Amount</label>
                                <input id="LnAmt" name="LnAmt" type="text" placeholder="Loan Amount" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" minlength="1" maxlength="9" required="required">
                            </div>
                            </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="TnrYears">Tenure (in years)</label>
                                <select id="TnrYears" name="TnrYears" class="form-control">
                                    <option selected disabled="">Tenure (in years)</option>
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
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="PAN"> Pan Card</label>
                                <input id="PAN" name="PAN" type="text" oninput="pan_card('PAN')" minlength="10" maxlength="10" placeholder="Pan Card" class="form-control input-md" required="required">
                                <span id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ResCity">Residence City</label>
                                 <select id="ResCity" name="ResCity" class="form-control">
                                  <option disabled selected value="">CITY</option>
                                            </select>
                            </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ResCityArea">Residence City Area</label>
                                 <select  id="ResCityArea" name="ResCityArea" class="form-control">
                                 <option disabled selected  value="">CITY AREA</option>

                                            </select>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="Mobile">Mobile Number</label>
                                <input id="Mobile" name="Mobile" type="text" minlength="10" maxlength="10" placeholder="Mobile Number" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" required="required">
                            </div>
                            </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                            
                            <a class="btn btn-default btn-sm" id="kotak-hl-submit">Submit</a><br><br>

                            <a class="btn btn-default btn-sm" id="kotak-hl-status">Check Status</a>


                            
                                                
                                    

                            

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

<div class="modal fade" tabindex="-1" role="dialog" id="kotak-hl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Kotak Home Loan Lead Id is <b><span id="kotak_hl"></span></b>.<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary kotak_hl_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak-hl-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Oops!! Unable To Process Due to <span id="kotakerror"></span>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak-hl-popup-status">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Track Status</h4>
      </div>
      <div class="modal-body">
        <form name="kotak_home_loan_status" id="kotak_home_loan_status" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="form" value="kotak_home_loan_status">
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="Mobile" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow" id="kotak_status">Submit<i class="icon-arrow-right"></i></button>
                  </div>

            </form>
        
      </div>
      
      
    </div>
  </div>
</div>

<!-- Status Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="kotak-status-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Kotak Home Loan Lead Id is <b><span id="kotakrefcode"></span></b> And Status Is<b><span id="kotakstatus"></span></b> .<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary kotak_hl_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak-hl-status-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Something Went Wrong.<h5></p></h4>
        
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

 $.ajax({ 
   url: "{{URL::to('kotak-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#ResCity').append('<option value="'+value.city_code+'">'+value.city_area+'</option>');

        }); 
    }else{
      $('#ResCity').empty().append('No Result Found');
    }

   },

 });
</script>

<script>
$('#ResCity').on('change', function() {
   // alert('okae');
  var ResCity=$('#ResCity').find(":selected").val();
   console.log(ResCity);
    var v_token ="{{csrf_token()}}";
   $.ajax({  
                type: "POST",  
                url: "{{URL::to('kotak-city-area-master')}}",
                 data : {'_token': v_token,'ResCity':ResCity},
                success: function(msg){
                   
                    console.log(msg);
                    if(msg)
                    {      $.each(msg, function( index, value ) {
                              $('#ResCityArea').empty().append('<option value="'+value.area_code+'">'+value.city_area+'</option>');

                    }); 
                    }else{
                        $('#ResCityArea').empty().append('No Result Found');
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
  $('#kotak-hl-submit').click(function(){
    // alert('okae');
    if(! $('#Kotak_HL_form').valid())
       {
          alert('Please Fill Up All Details');
        }
        else
        {
            // $('#kotak-hl-submit').hide();
            $(".iframeloading").show();
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('kotak-home-loan-submit')}}",
         data : $('#Kotak_HL_form').serialize(),
         success: function(msg){
            $(".iframeloading").hide();
            console.log(msg);
            console.log(msg.status);
             console.log(msg.errorinfo);
            if (msg.status =="1") {
             $('#kotak_hl').empty().append(msg.refcode);
             $('#kotak-hl-popup').modal('show');
            } 
            else if(msg.status =="0")
            {
             // $('#kotak-hl-submit').show();
             // $('#kotak-hl-popup').modal('hide');
             $('#kotakerror').empty().append(msg.errorinfo);
             $('#kotak-hl-popup-error').modal('show');
            }
             
            
              
              
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

<script type="text/javascript">
  $('#kotak-hl-status').click(function(){
    // alert('okae');
     $('#kotak-hl-popup-status').modal('show');
     
  });
</script>

<script type="text/javascript">
  $('#kotak_status').click(function(event){
     event.preventDefault();
     // alert('okae');
    if(! $('#kotak_home_loan_status').valid())
       {
               alert('Please Fill Up All Details');
        }
        else
        {
         
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('kotak-home-loan-status')}}",
         data : $('#kotak_home_loan_status').serialize(),
         success: function(msg){

          console.log(msg.status);
         if (msg.status =="1") {
             
             $('#kotakrefcode').empty().append(msg.refcode);
             $('#kotakstatus').empty().append(msg.appstatusdesc);
             $('#kotak-status-popup').modal('show');
           }else {
             $('#kotak-status-popup').modal('hide');
             
             $('#kotak-hl-status-error').modal('show');
           }
           
            
              
              
        }  
      });   
     }
  });
</script>


