<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<div id="fh5co-hero">
  <img src="<?php echo e(URL::to('images/kotak_banner.jpg')); ?>" alt="Kotak Home Loan Banner" title="Kotak Home Loan" class="img-responsive">

  <div class="container">
    <br>
<div class="row">
		

				<div class="row">
				                  
									<div class="form-group title-1">
									 
                    										<h3 class="hdr col-md-12 text-center">Kotak Home Loan</h4>
                    										<div class="col-md-1"></div>
                                        <form id="Kotak_HL_form" name="Kotak_HL_form" method="POST">
                                        <?php echo e(csrf_field()); ?>

                    										<div class="col-md-10 white-bg pad1 box-shadow">
                                         <input type="hidden" name="CampaignName" value="<?php echo e($CampaignName); ?>">
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
                      											<!-- <input type="text" class="form-control search_city_kot" id="City" name="City" placeholder="Residence City*"  required>
                                            <input type="hidden" name="ResCity" id="ResCity"> -->
                                            <select class="form-control drop-arr select-sty" name="ResCity" id="ResCity" style="height: 50px" required>
                                            <option disabled selected value="">CITY</option>
                                            </select>
                      										</div>
                      										
                      										<div style="display: none;" class="col-md-4">
                      										 <span>Residence City Area</span>
                      											<!-- <input type="text" class="form-control search_city_area" id="CityArea" name="CityArea" placeholder="Residence City Area*"  required>
                                            <input type="hidden" name="ResCityArea" id="ResCityArea"> -->
                                            <select class="form-control drop-arr select-sty" name="ResCityArea" id="ResCityArea" style="height: 50px">
                                            <option disabled selected value="">CITY AREA</option>
                                            </select>
                      										</div>

                                            <div class="col-md-4">
                                           <span>Mobile Number</span>
                                            <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile*" maxlength="10" onkeypress="return fnAllowNumeric(event)"  required>
                                          </div>
                      										
                      										
                      										<div class="col-md-12">
                      										<div class="col-md-4"></div>
                      										<div class="col-md-2"><a class="btn  btn-primary block btn-outline animate-box fadeInUp animated dis-tbl" id="kotak-hl-submit">Submit</a></div>

                                          <div class="col-md-2"><a class="btn  btn-success block btn-outline animate-box fadeInUp animated dis-tbl" id="kotak-hl-status">Check Status</a></div>
                                          
                                          <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                          <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
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
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
        <h4><p id="modalerr"><h5 style="color: black">Oops!! Unable To Process Due Duplicate Application.<h5></p></h4>
        
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
          <?php echo e(csrf_field()); ?>

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
   url: "<?php echo e(URL::to('kotak-city-master')); ?>",
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
$('#ResCity').on('change', function() {
   // alert('okae');
  var ResCity=$('#ResCity').find(":selected").val();
   console.log(ResCity);
    var v_token ="<?php echo e(csrf_token()); ?>";
   $.ajax({  
                type: "POST",  
                url: "<?php echo e(URL::to('kotak-city-area-master')); ?>",
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
            $('#kotak-hl-submit').hide();
            $(".iframeloading").show();
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('kotak-home-loan-submit')); ?>",
         data : $('#Kotak_HL_form').serialize(),
         success: function(msg){
            $(".iframeloading").hide();
            console.log(msg);
            console.log(msg.status);
            if (msg.status =="1") {
             $('#kotak_hl').empty().append(msg.refcode);
             $('#kotak-hl-popup').modal('show');
            } else {
             $('#kotak-hl-submit').show();
             $('#kotak-hl-popup').modal('hide');
             $('#kotak-hl-popup-error').modal('show');
            }
             
            
              
              
        }  
      });   
     }
  });
</script>

<script type="text/javascript">
  $('.kotak_hl_proceed').click(function(){
    window.location.href ="<?php echo e(URL::to('thank-you')); ?>";
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
         url: "<?php echo e(URL::to('kotak-home-loan-status')); ?>",
         data : $('#kotak_home_loan_status').serialize(),
         success: function(msg){

          console.log(msg.status);
         if (msg.status =="1") {
             
             $('#kotakrefcode').empty().append(msg.refcode);
             $('#kotakstatus').empty().append(msg.appstatusdesc);
             $('#kotak-status-popup').modal('show');
           } else {
             $('#kotak-status-popup').modal('hide');
            
             $('#kotak-hl-status-error').modal('show');
           }
           
            
              
              
        }  
      });   
     }
  });
</script>


