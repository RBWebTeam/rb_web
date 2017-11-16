<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> 
 <style>
   
   span.multiselect-native-select select {
  border: 0!important;
  clip: rect(0 0 0 0)!important;
  height: 1px!important;
  margin: -1px -1px -1px -3px!important;
  overflow: hidden!important;
  padding: 0!important;
  position: absolute!important;
  width: 1px!important;
  left: 50%;
  top: 30px
}
.multiselect-container {
  position: absolute;
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-top: -738px;
}
.multiselect-container .input-group {
  margin: 5px
}
.multiselect-container>li {
  padding: 0
}
.multiselect-container>li>a.multiselect-all label {
  font-weight: 700
}
.multiselect-container>li.multiselect-group label {
  margin: 0;
  padding: 3px 20px 3px 20px;
  height: 100%;
  font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
  cursor: pointer
}
.multiselect-container>li>a {
  padding: 0
}
.multiselect-container>li>a>label {
  margin: 0;
  height: 100%;
  cursor: pointer;
  font-weight: 400;
  padding: 3px 0 3px 30px
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
  margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
  margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
  padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
  margin-left: -20px;
  margin-right: 0
}
.multiselect {height:42px;z-index:1000;}


@media  only screen and (max-width: 768px) {
.loan-head {
    margin-top:0px;
    width: 80%;
    margin-bottom:40px;
}
}
 </style>



<div id="fh5co-hero">
    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                    <center>
                        <h1 class="loan-head" >TATA CAPITAL BUSINESS LOAN</h1>
                       
                      </center>
                    
                </div>
                <div class="col-md-12">
                    <div class="row text-left comp-pg rate white-bg">
                          
                        
                            <form class="" id="tata_capital_form" name="tata_capital_form" role="form" method="POST" >
                             <?php echo e(csrf_field()); ?>

                             
                                <div class="row">
                                    <div class="form-group">
                                    
                                       <h1 class="loan-head" >Personal Details</h1>
                                        <div class="col-md-4">
                                            <select class="form-control"  name="title"  id="title">
                                              <option selected disabled value="">Title</option>
                                              <option value="Mr.">Mr.</option>
                                              <option value="Ms.">Ms.</option>
                                              <option value="Mrs.">Mrs.</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name(as per PAN Record)" maxlength="30" onkeypress="return AllowAlphabet(event)" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name(as per PAN Record)" maxlength="30"  onkeypress="return AllowAlphabet(event)">
                                        </div>
                                        <div class="col-md-4">
                                             <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name(as per PAN Record)" maxlength="30"  onkeypress="return AllowAlphabet(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                             <input type="text" class="form-control" id="motherMaidenName" name="motherMaidenName" placeholder="Mother Maiden Name" maxlength="40"  onkeypress="return AllowAlphabet(event)">
                                        </div>

                                        <div class="col-md-4">
                                            <select class="form-control"  name="maritalStatus"  id="maritalStatus">
                                              <option selected disabled value="">Marital Status</option>
                                                <option value="Married">Married</option>
                                                <option value="UnMarried">UnMarried</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-md-4" >
                                        
                                            <input type="text" class="form-control lastReporteddob" id="dob" name="dob" placeholder="DOB" maxlength="10">
                                            
                                        </div>

                                         <div class="col-md-4" >
                                        
                                            <input type="text" class="form-control" id="pan" name="pan" oninput="pan_card('pan')" maxlength="10" placeholder="PAN Number" required>
                                            <div id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="resEmailId" name="resEmailId" placeholder="Email" oninput="mail('resEmailId')" maxlength="255" required>
                                            <div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                        </div>

                                        <div class="col-md-4">
                                            <select class="form-control"  name="gender" id="gender">
                                              <option value="">Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                        </div>

                                         <div class="col-md-4">
                                            <input type="text" class="form-control" id="resMobNo" name="resMobNo" placeholder="Mobile No" maxlength="10" onkeypress=" return fnAllowNumeric(event)" required>
                                            <div id="mob_no" style="display:none;color: red; font-size: 10px">Mobile No should be of 10 digits.</div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="resLandlineNo" name="resLandlineNo" placeholder="Home Phone" maxlength="10" onkeypress=" return fnAllowNumeric(event)">
                                            <div id="mob_no" style="display:none;color: red; font-size: 10px">Mobile No should be of 10 digits.</div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="resAddress1" name="resAddress1" placeholder="Address Line1" maxlength="200">
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="resAddress2" name="resAddress2" placeholder="Address Line2" maxlength="200" >
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="resAddress3" name="resAddress3" placeholder="Address Line3" maxlength="200" >
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="resPincode" name="resPincode" placeholder="Pincode" maxlength="6" onkeypress="return fnAllowNumeric(event)" required>
                                            
                                        </div>

                                         <div class="col-md-4">
                                            <input type="text" class="form-control search_statenm" id="resState" name="resState" placeholder="State" maxlength="40">
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control search_citynm" id="resCity" name="resCity" placeholder="City" required maxlength="20">
                                            
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="loanAmount" name="loanAmount"  minlength="6" maxlength="9" onkeypress="return fnAllowNumeric(event)"  placeholder="Loan Amount">
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="tenure" name="tenure"  onkeypress="return fnAllowNumeric(event)" minlength="2" maxlength="3"  placeholder="Tenure (in months)">
                                        </div>

                                        </div>
                                    <hr>
                                </div>

                                 <!-- <div class="row">
                                    <div class="form-group">
                                    
                                       <h1 class="loan-head" >Personal Details</h1>
                                    </div>
                                    <hr>
                                </div>       
 -->
                                 <div class="row">
                                    <div class="form-group">
                                   <h1 class="loan-head" >Business Details</h1>
                                    <div class="col-md-4">
                                            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="CompanyName" onkeypress="return AllowAlphabet(event)" maxlength="60">
                                            
                                        </div>

                                      <div class="col-md-4">
                                            <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" maxlength="20">
                                            
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="monthlySalary" name="monthlySalary" maxlength="5" maxlength="9" onkeypress="return fnAllowNumeric(event)" placeholder="Salary" >
                                            
                                        </div>
                                       <div class="col-md-4">
                                            <input type="text" class="form-control" id="officeEmailId" name="officeEmailId" placeholder="Work Email" maxlength="255" oninput="e_mail('officeEmailId')" >
                                            <div id="mail" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                        </div>

                                        <div class="col-md-4" >
                                        
                                            <input type="text" class="form-control" id="officeMobNo" name="officeMobNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" placeholder="Work Phone">
                                        </div>

                                         
                                        

                                        

                                        

                                        
                                    </div>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                     <h1 class="loan-head" >Referral Details</h1>
                                     
                                        

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="referralName" name="referralName" placeholder="Referral Name" maxlength="80"  onkeypress="return AllowAlphabet(event)" >
                                        </div>

                                        <div class="col-md-4" >
                                        
                                            <input type="text" class="form-control lastReporteddob" id="referralDob" name="referralDob" placeholder="Referral DOB" maxlength="10">
                                            
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="referralMob" name="referralMob" placeholder="Referral Mobile" maxlength="10" onkeypress=" return fnAllowNumeric(event)" >
                                            <div id="mob_no" style="display:none;color: red; font-size: 10px">Mobile No should be of 10 digits.</div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="referralContractNo" name="referralContractNo" placeholder="Referral Contract No"  onkeypress=" return fnAllowNumeric(event)">
                                            
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="referralEmpId" name="referralEmpId" placeholder="Referral EmpID" maxlength="10">
                                            
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                                 


                                     
                                     
                                     
                                
                              
                                        
                                        <div class="col-md-12">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated  dis-tbl" id="tata_capital_submit"  >Confirm & Continue<i class="icon-arrow-right"></i></button>
                                    <!-- <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div> -->
                                   
                                
                            </form>
                    </div>
                    <hr>
                    </div>
                    

                </div>
            </div>
        </div>  
    </div>
</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="tata-bl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your TataCapital Business Loan Lead Id is <b><span id="tata_bl"></span></b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="tatacapital-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Something Went Wrong. Error Message is<b><span id="tata_error_bl"></b><h5></p></h4>
        
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
        if(obj=='pan' ){
                   var str =$('#pan').val();
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
    function pancard(obj,val){
        // console.log(obj);
        if(obj=='Company_PAN' ){
                   var str =$('#Company_PAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_no').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_no').show();

                    return false;
                  }
                  
    }
    }
    </script>


<script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='resEmailId' ){
                   var str =$('#resEmailId').val();
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
  function e_mail(obj,val){
    // console.log(obj);
    if(obj=='officeEmailId' ){
                   var str =$('#officeEmailId').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#mail').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mail').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()  ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
  $('#tata_capital_submit').click(function(){
  //alert('okae');
  event.preventDefault();
      $form=$('#tata_capital_form');
      if(! $form.valid()){
        // alert("no")
        alert("Please Fill All Mandatory Fields.");
         return false;
      }else{

        

   
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('tata-capital-business-submit')); ?>",
         data : $('#tata_capital_form').serialize(),
         success: function(msg){
          console.log(msg);
         
          console.log(msg.RetStatus);

          if (msg.RetStatus=='SUCCESS') 
            {
              $('#tata_bl').empty().append(msg.leadId);
           
              $('#tata-bl-popup').modal('show');
            } 
            else if(msg.RetStatus=='FAIL') 
            {

             $('#tata-bl-popup').modal('hide');
             $('#tata_error_bl').empty().append(msg.ErrorMessage);
             $('#tatacapital-error').modal('show');
            }
          

          

        }  
      }); 
      }

  });
</script>

<script type="text/javascript">

  

 $(document).ready(function(){
    src = "<?php echo e(route('searchtatacityajax')); ?>";
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
          url: "<?php echo e(route('searchtatastateajax')); ?>",
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


