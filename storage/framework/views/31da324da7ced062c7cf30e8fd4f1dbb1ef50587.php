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
										 <span>Employment Type</span>
										     <select class="form-control block drop-arr select-sty" name="EmpType" id="EmpType"  required>
                                            <option disabled selected  value="">Employment Type</option>
                                            <option  value="1">Salaried</option>
                                            <option  value="2">Self Employed</option>
						                    </select> 
						                 </div>
										<div class="col-md-4">
										<span>First Name</span>
											<input type="text" class="form-control" placeholder= "First Name*" name="FirstName" id="FirstName" onkeypress="return AllowAlphabet(event)" maxlength="40" required>
										</div>
										
										
										<div class="col-md-4 lst-nam">
										<span>Last Name</span>
											<input type="text" class="form-control" placeholder="Last Name*" name="LastName" id="LastName" onkeypress="return AllowAlphabet(event)" maxlength="40"  required>
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
										     <select class="block drop-arr select-sty" name="" id="" required>
						                      <option>Tenure Years</option>
						                       
						                    </select> 
						                    </div>
									  <div class="col-md-4">
										 <span>Pan Card</span>
											<input type="text" class="form-control " id="PAN" name="PAN" placeholder="Pan Card*" oninput="pan_card('PAN')" maxlength="10"  required>
											<span id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</span>
										</div>
										<div class="col-md-4">
										 <span>Residence City</span>
											<input type="text" class="form-control search_citynm " id="ResCity" name="ResCity" placeholder="Residence City*"  required>
										</div>
										
										<div class="col-md-4">
										 <span>Residence City Area</span>
											<input type="text" class="form-control " id="" name="" placeholder="Residence City Area*"  required>
										</div>
										
										
										<div class="col-md-12">
										<div class="col-md-4"></div>
										<div class="col-md-2"><button class="btn  btn-primary block btn-outline animate-box fadeInUp animated lendingkart-submit dis-tbl">Submit</button></div>
										</div>
									</div>
			</div>				
		</div>
		</div>
		<br>
		
	</div>

</div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
<!-- <script type="text/javascript">
$('#EmpType').change(function() 
{ 
    var selectedValue = parseInt(jQuery(this).val());

    //Depend on Value i.e. 0 or 1 respective function gets called. 
    switch(selectedValue){
        case 0:
            salaried();
            break;
        case 1:
            self_employed();
            break;
        //etc... 
        default:
            alert("catch default");
            break;
    }
});

function salaried(){
       
}

function self_employed(){
    alert("Do some other stuff");
}

</script> -->

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
    src = "<?php echo e(route('searchkotakcityajax')); ?>";
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
          $(".search_citynm").val("data-value");
          // $(".search_citynm").attr("disabled", false);
         
        }else{
            $(".search_citynm").attr("data-value", ui.item.datavalue);
                 
          
             }
           }

        
      });
   });

</script>


