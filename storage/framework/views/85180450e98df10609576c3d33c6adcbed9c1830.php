<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>RBL Credit Card Form</h2>
				</div>
				        <div class="col-md-1"></div>
				        <div class="col-md-10">
				        <div class="row text-left comp-pg rate white-bg box-shadow">
			           <form  id="rbl_ccc_form" role="form">
			           <?php echo e(csrf_field()); ?>

				        <div class="row">
					     <div class="form-group titl-1">
						<div class="col-md-4">
						<span>title</span>
						    <select class="block drop-arr select-sty" name="Title" id="title" required>
		                    <option disabled selected  value="">Select Title</option>
		                    <option value=1>Mr</option>
		                    <option value=2>Ms</option>
		                    <option value=2>Mrs</option>
		                    <option value=2>Dr</option>
		                    <option value=99>Other</option>
		                    </select> 
		                    </div>
						<div class="col-md-4">
						   <span>Credit Card Applied</span>
							<input type="text" class="form-control" placeholder="Credit Card Applied" name="CreditCardApplied" id="cc_applied" value="<?php echo e($card); ?>" disabled="" >
						</div>

						<div class="col-md-4">
						   <span>Processing Fee</span>
							<input type="text" class="form-control" placeholder="Joining Fee" name="ProcessingFee" id="ProcessingFee" value="<?php echo e($ProcessingFee); ?>" disabled="" >
						</div>
						<div class="col-md-4">
						   <span>Date of Birth</span>
							<input type="text" class="form-control lastReporteddate " id="dob" name="DOB" placeholder="Date of Birth" required>
						</div>
						<div class="col-md-4">
						<span>First Name</span>
							<input type="text" class="form-control" id="f_name" name="FirstName" placeholder="First Name" required>
						</div>
                         <div class="col-md-4">
						 <span>Middle Name</span>
							<input type="text" class="form-control " id="m_name" name="MiddleName" placeholder="Middle Name" >
						</div>						
						<div class="col-md-4">
						<span>Last Name</span>
							<input type="text" class="form-control " id="l_name" name="LastName" placeholder="Last Name" required>
						</div>
						<div class="col-md-4">
						<span>Father Name</span>
							<input type="text" class="form-control " id="father_name" name="FatherName" placeholder="Father Name"  required>
						</div>
						<div class="col-md-4">
						<span>Gender</span>
						<div class="form-control border-none">
						<input type="radio"  name="Gender" id="male"  class="radiob" checked value="1"><label for="150">&nbsp;Male</label>
                        <input type="radio" name="Gender" id="female"  class="radiob" value="2" ><label for="151">&nbsp;Female </label>
	                    </div>
						</div>
						<div class="col-md-4">
						<span>Had Loan Or CreditCard From AnyBank</span>
						<div class="form-control border-none">
					 
						<input type="radio"  name="HadLoanOrCreditCardFromAnyBank" class="radiob" checked value="Y"><label for="150">&nbsp;Yes</label>
                        <input type="radio" name="HadLoanOrCreditCardFromAnyBank"  class="radiob" value="N" ><label for="151">&nbsp;No </label>
	                    </div>
						</div>
					    </div>
					    <hr>
				        </div>
				        <div class="row sec" id="section1">
					    <div class="form-group titl-1">
					    <hr>
						<div class="col-md-4">
						<span>Residence Address 1</span>
							<input type="text" class="form-control" placeholder="Residence Address 1" name="ResAddress1" id="res_add1" required="">
						</div>
						<div class="col-md-4">
						<span>Residence Address 1</span>
							<input type="text" class="form-control" placeholder="Residence Address 2" name="ResAddress2" id="res_add2" required="">
						</div>
						<div class="col-md-4">
						<span>Landmark</span>
							<input type="text" id="landmark" name="Landmark" class="form-control" placeholder="Landmark"  required>
						</div>
						<div class="col-md-4">
						<span>City</span>
						     <select class="block drop-arr" name="ResCity" id="city" required>
		                      <option disabled selected  value="">Select City</option>
		                       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
								    <option value="<?php echo e($city->city_code); ?>"><?php echo e($city->city_name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		                    </select> 
		                    </div>
						<div class="col-md-4">
						<span>Residence Pincode</span>
							<input type="text" id="res_pin" name="ResPIN" class="form-control" placeholder="Residence Pincode" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
						</div>
                        <div class="col-md-4">
						<span>Email ID</span>
							<input type="text" id="email_id" name="Email" class="form-control" placeholder="Email ID" oninput="mail('email_id')" required />
							<div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
						</div>
                       <div class="col-md-4">
					   <span>Applicant Net Monthly Income</span>
							<input type="text" id="monthly_income" name="NMI" class="form-control" placeholder="Applicant Net Monthly Income" onkeypress="return fnAllowNumeric(event)" required>
						</div>
						<div class="col-md-4">
						<span>Mobile Number</span>
							 <input type="text" class="form-control" id="mobile" name="Mobile"  required maxlength="10" placeholder="Mobile Number" minlength="10" maxlength="10" onblur ="return fnAllowNumeric(event)" onkeydown=" mobile_valid(this)">
						</div>
						<div class="col-md-4">
						<span>Employment Type</span>
						<div class="form-control border-none">
						<input type="radio"  name="EmpType" class="radiob" checked value="1"><label for="150">&nbsp;Salaried</label>
                        <input type="radio" name="EmpType"  class="radiob" value="2" ><label for="151">&nbsp;Self-Employed </label>
	                    </div>
						</div>
							<div class="col-md-4">
							<span>Pancard No</span>
						     <input  type="text" class="form-input-new form-control" name="PAN" id="pan" placeholder="Pancard No." oninput="pan_card('pan')" minlength="10" maxlength="10" required>
						     <div id="pan_number" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
						</div>
						</div>
						<hr>
					    </div>	
					    <a class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="rbl_card_submit">SUBMIT<i class="icon-arrow-right" ></i></a>
					    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
						  <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
						 </div>

			            </form>
					
					
					
					
			            </div>
			            <br>
		                </div>	
	                    </div>
                        </div>

                        </div>
                        </div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





<div id="rb_cc_modal" class="modal fade" role="dialog">
  <div class="modal-dialog" >
        <!-- Modal content-->
   <div class="modal-content pad1">
        <div class="modal-header">          
        <h4 class="modal-title text-center"><b>Status</b></h4>


           
        </div>
		<div class="text-center">
         <p id="rbl_cc_apply_status" class="text-success pad"></p>     
         <p id="reason" class="text-success pad"></p>     
         <p  id="reference" class="text-success pad"></p>         	      
         </div>   
</div>
</div>
</div>


<script type="text/javascript">
	var application_status=0;
	var red_url= "<?php echo e(URL::to('thank-you')); ?>";
	$('#rbl_card_submit').click(function(){
		
		if(! $('#rbl_ccc_form').valid()){
			return false;
		}else{
			 $(".iframeloading").show();
			$.ajax({
				type:"POST",
				data:$('#rbl_ccc_form').serialize(),
				url:"<?php echo e(URL::to('rbl-cc-submit')); ?>",
				success:function(msg){
					$(".iframeloading").hide();
					var returnedData = JSON.parse(msg);
					var status_id=returnedData.Status;
					var error=returnedData.Errorinfo;
					var mobile=$('#mobile').val();
					var card=$('#cc_applied').val();
					if(status_id==0){
						e_id=returnedData.Errorcode;
						status="Ooops! Error occured.";
						if(e_id)
						{
							error=get_rbl_error(e_id);
						}
						
					}else if(status_id==1){
						status="Successful";
						error=returnedData.ReferenceCode;
						red_url='http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id='+error+'&CardType=RBL&MobileNo='+mobile+'';
						application_status=1;
					}else if(status_id==2){
						status="Successful Referred";
						error=returnedData.ReferenceCode;
						red_url='http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id='+error+'&CardType=RBL&MobileNo='+mobile+'';
						application_status=1;
					}else{
						status="Rejected";
						error=returnedData.ReferenceCode;
					}
					$('#rbl_cc_apply_status').empty().text(status);
					$('#reason').empty().append(error);
					
					$('#rb_cc_modal').modal('toggle');
					
				}
			});
		}
		
	});
		function get_rbl_error(id){
			error='';
			switch (id) {
				case 1: 
					error="INPUT OUT OF MASTERS RANGE";
					break;
				case 2: 
					error="VALIDATION ERROR";
					break;
				case 3: 
					error="INPUT NOT IN VALID DATA FORMAT (SPECIAL CHARACTERS etc)";
					break;
				case 4:
					error="SYSTEM UNAVAILABLE";
					break;
				case 5: 
					error="DECISION CENTER ERROR";
					break;
				case 6:
					error="DUPLICATE APPLICATION";
				 	break;
			}
				return error;
		}
		$('#rb_cc_modal').on('hidden.bs.modal', function () {
		 	
		 	if(application_status==1){
		 		window.location.href = red_url;
		 	}

		});
</script>

<script type="text/javascript">
  function mail(obj,val){
    console.log(obj);
    if(obj=='email_id' ){
                   var str =$('#email_id').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
    function pan_card(obj,val){
        console.log(obj);
        if(obj=='pan' ){
                   var str =$('#pan').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                        $('#pan_number').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_number').show();

                    return false;
                  }
                  
    }
    }
    </script>



