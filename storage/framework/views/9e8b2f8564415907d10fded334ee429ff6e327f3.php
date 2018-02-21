 <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="wrapper-content bg-white pinside40">
                        <h1 class=""><center>Apply Now</center></h1>
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                <div class="row">
                                    
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">



                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
                       

             <form action=""  id="rbl_ccc_form" role="form" action="method">
             <?php echo e(csrf_field()); ?>

                            <!-- Text input-->

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              
                                <select class="form-control input-md select-sty" name="Title" id="title" required>
                                                            <option selected disabled>Select Title</option>
                                                            <option value="1">Mr</option>
                                                            <option value="2">Ms</option>
                                                            <option value="2">Mrs</option>
                                                            <option value="2">Dr</option>
                                                            <option value="99">Other</option>
 
                                                    </select>
                                                     
                            </div>
                            </div>
                           
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="cc_applied" >Platinum Delight Card</label>
                                <!-- <input id="platinum-delight-card" name="loan-required" type="text" placeholder="Platinum Delight Card" disabled class="form-control input-md" required="required"> -->

                                 <input type="text" class="form-control" placeholder="Credit Card Applied" name="CreditCardApplied" id="cc_applied" value="<?php echo e($card); ?>" disabled="" >



                            </div>
                            </div>




                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ProcessingFee" >Procesing Fee</label>
                                <!-- <input id="platinum-delight-card" name="loan-required" type="text" placeholder="Platinum Delight Card" disabled class="form-control input-md" required="required"> -->

                                 <input type="text" class="form-control" placeholder="Joining Fee" name="ProcessingFee" id="ProcessingFee" value="<?php echo e($ProcessingFee); ?>" disabled="" >



                            </div>
                            </div>



                            
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="dob">Date of Birth</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input type="text" class="form-control lastReporteddate " id="dob" name="dob"  placeholder="Date of Birth" required">

                               <!--  <input type="text" class="form-control lastReporteddate " id="dob" name="DOB" placeholder="Date of Birth" required> -->
						</div>
                            </div>
                           
                            
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                             	<label class="control-label sr-only" for="f_name">First Name</label>
                               <!--  <input id="first-name" name="first-name" type="text" placeholder="First Name" class="form-control input-md" required="required"> -->
                               <input type="text" class="form-control" id="f_name" name="FirstName" placeholder="First Name" required>
						

                             </div>
                             </div>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                             	<label class="control-label sr-only" for="m_name">Middle Name</label>
                                <input id="m_name" name="MiddleName" type="text" placeholder="Middle Name" class="form-control input-md" required="required">



                               <!--  
                                <input type="text" class="form-control " id="m_name" name="MiddleName" placeholder="Middle Name" onkeypress="return AllowAlphabet(event)" required >
 -->
                                <!--  <input type="text" class="form-input-new  form-control" name="company_name" id="company_name" placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required >
 -->
						

                             </div>
                             </div>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                             	<label class="control-label sr-only" for="l_name">Last Name</label>
                                <!-- <input id="last-name" name="last-name" type="text" placeholder="Last Name" class="form-control input-md" required="required"> -->
                                <input type="text" class="form-control " id="l_name" name="LastName" placeholder="Last Name" required>
						</div>

                             </div>
                             <!-- </div> -->

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="father_name">Father Name</label>
                               <!--  <input id="father-name" name="father-name" type="text" placeholder="Father Name" class="form-control input-md" required="required"> -->
                               <input type="text" class="form-control " id="father_name" name="FatherName" placeholder="Father Name"  required>

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <select id="Female" class="form-control input-md" name="Gender" required>
                                                            <option selected disabled>Gender</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
 
                                </select>

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <select id="HadLoanOrCreditCardFromAnyBank" class="form-control input-md" name="HadLoanOrCreditCardFromAnyBank" required>
                                                            <option selected disabled>Had Loan / Credit Card From Any Bank</option>
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
 
                                </select>

                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="res_add1">Residence Address 1</label>
                                <!-- <input id="address1" name="address1" type="text" placeholder="Residence Address 1" class="form-control input-md" required="required"> -->
                                <input type="text" class="form-control" placeholder="Residence Address 1" name="ResAddress1" id="res_add1" required="">

                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="res_add2">Residence Address 2</label>
                                <!-- <input id="address2" name="address1" type="text" placeholder="Residence Address 2" class="form-control input-md" required="required"> -->
                                <input type="text" class="form-control" placeholder="Residence Address 2" name="ResAddress2" id="res_add2" required="">

                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="landmark">Landmark</label>
                                <!-- <input id="landmark" name="landmark" type="text" placeholder="Landmark" class="form-control input-md" required="required"> -->
                                <input type="text" id="landmark" name="Landmark" class="form-control" placeholder="Landmark"  required>

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="city">City</label>
                               <!--  <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" required="required"> -->
                                <select class="form-control input-md" name="ResCity" id="city" required>
		                      <option disabled selected  value="">Select City</option>
		                       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
								    <option value="<?php echo e($city->city_code); ?>"><?php echo e($city->city_name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		                    </select> 

		                   
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="res_pin">Residence Pincode</label>
                                <!-- <input id="pincode" name="pincode" type="text" placeholder="Residence Pincode" class="form-control input-md" required="required"> -->
                                <input type="text" id="res_pin" name="ResPIN" class="form-control" placeholder="Residence Pincode" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>

                       
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="email_id">Email ID</label>
                               <!--  <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="required"> -->
                                <input type="Email" id="email_id" name="Email" class="form-control" placeholder="Email ID" oninput="mail('email_id')" required />


							<div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>

         



                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="monthly_income">Applicant Net Monthly Income</label>
                                <!-- <input id="mothly-income" name="mothly-income" type="text" placeholder="Applicant Net Monthly Income" class="form-control input-md" required="required"> -->
                                <input type="text" id="monthly_income" name="NMI" class="form-control" placeholder="Applicant Net Monthly Income" onkeypress="return fnAllowNumeric(event)" required>


                             </div>
                             </div>




                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="mobile">Mobile Number</label>
                               <!--  <input id="mobile" name="mobile" type="text" placeholder="Mobile Number" class="form-control input-md" required="required"> -->

                               <input type="text" class="form-control" id="mobile" name="Mobile"  required maxlength="10" placeholder="Mobile Number" minlength="10" maxlength="10" onblur ="return fnAllowNumeric(event)" onkeydown=" mobile_valid(this)">


                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <select id="EmpType" class="form-control input-md" name="EmpType" required>
                                                            <option selected disabled>Employment Type</option>
                                                            <option value="1">Salaried</option>
                                                            <option value="2">Self Employed</option>
 
                                </select>

                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">

                                <label class="control-label sr-only" for="pan">Pancard No</label>
                               <!--  <input id="pancard" name="pancard" type="text" placeholder="Pancard No." class="form-control input-md" required="required"> -->

                               <input  type="text" class="form-input-new form-control" name="PAN" id="pan" placeholder="Pancard No." oninput="pan_card('pan')" minlength="10" maxlength="10" required>
						     <div id="pan_number" style="display:none;color: red; font-size: 10px">Please Enter Valid Pancard Number.</div>

                             </div>
                             

                                   <br>
                                                <a class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="rbl_card_submit">SUBMIT</a>


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
        // alert('okae');
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




