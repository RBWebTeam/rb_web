<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Kotak Home Loan :: RupeeBoss</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
  <link href="css/icici_css/component.css" rel="stylesheet" type="text/css"  />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/icici_css/style-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="css/icici_css/responsive-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/icici_css/jquery.datepicker.css">
  <link rel="stylesheet" href="css/icici_css/bootstrap-material-datetimepicker.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="js/icici_js/jquery.min.js"></script>
  <script type="text/javascript" src="js/icici_js/material.min.js"></script>
  <script type="text/javascript" src="js/icici_js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/icici_js/bootstrap-material-datetimepicker.js"></script>
  <script src="js/icici_js/classie.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>  
  <link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
  <script src="js/jquery-ui.js" ></script>
 
  </script>


<script type="text/javascript" src="js/icici_js/jquery.datepicker.js"></script>


    
<script src="js/jquery.mask.js"></script>
<script src="js/icici_js/jquery.validate.min.js"></script>
  <style>
  .inp-fld {margin-bottom:10px; height:50px; position:relative;text-transform: uppercase;}
  .emp-nat span {padding:3px 5px;}
  .txt-tlt {padding-left:5px;width:100%;text-align:center; color:#666;font-size:18px;}
  .pg-titl {text-transform:uppercase;}
  .redio-lft {float:left;}
  .p-padding {padding:10px;}
  .mand-fld { display:block;}
  label.error {display: none !important; }
       .error {
                    border:1px solid red;
                }
  .lble {bottom:19px;}
  
  .sbmit-btn {
    padding: 10px 30px;
    top: 0px;
    position: absolute;
    color: #fff;
    font-size: 20px;
    right: 0px;
    border: none;
    background: #0070c0;
}
.icici {margin-top:-13px;}
 select option {text-transform:uppercase;}
 select {color:#636363 !important;}
 .lastReporteddob {color:#636363 !important;}
 
@media  only screen and (max-width:768px) {
  
  .col-md-12 {padding:0px;margin:2px;}
}
.emp-nat span {
    padding: 3px 5px;
    font-size: 12px;
}
.lastReporteddob {height:48px;} 
.hdn5 {margin:0px !important}
#DateOfBirth {cursor:pointer;}
.text-lower {margin-bottom: 10px;height: 50px;position: relative;}
  </style>
  
  <script>
$(document).ready(function(){
    $(".click-hr").click(function(){
        $(".emil-id").toggle();
    });
});
</script>
  </head>
  
  <body class="cbp-spmenu-push">
  <script>
$(".top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>


               
<div>
       <!-- Main content -->
        <section class="container">
      <div class="row">
      <div class="col-md-12">
    <br>
    
      <div id="logo" class="text-center"><img id="myImage" src="http://erp.rupeeboss.com/personalloan/images/logo.png" class=""></div>
    
      <h4 class="text-center pg-titl">APPLY FOR <img src="images/bank/kotak.png" class="img-responsive icici" width="130"/> PERSONAL LOAN</h4>

    
    <div class="col-md-3"></div>
  
  <!-- <form id="to_view_url" name="to_view_url" method="POST">
  <?php echo e(csrf_field()); ?>

    <div id="hideview" class="text-center col-md-6">
                                            <div class="form-padding">
                                                <h6 class="text-center top-heading click-hr"><a id="urlweb" href="javascript:void(0)">click here</a>
                                                to view this page in browser</h6>
                                                 <span id="urlmail_id" style="display:none;color: red;">Please Enter Valid Email Id.</span> 
                                               
                                              <div id="hideemailid" class="emil-id" style="margin-bottom: 14px; height: 50px; position: relative; display:none;">
                                                <input class="form-control text-lower" required type="text" id="urlemailid" name="urlemailid" oninput="url_mail('urlemailid')">
                                                
                                                <button class="sbmit-btn sub-btn1 pull-right" id="btnweburl">Submit</button> 
                                                <span class="highlight"></span><span class="bar"></span>
                                                <label class="form-label-new">E-MAIL ID (PERSONAL)</label>
                                                <div class="clear"></div>
                                              </div>
                                                
                                              <h5 id="msgalert" class="top-heading text-success text-center" style="display:none;font-size:15px;font-weight:bold; margin-bottom:15px;">As per your request we have sent a mail to your email ID.</h5>
                                            </div>
                                        </div>
                                        </form> -->
                    
                    

                <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
            
          <!-- <form action="">  -->  
            <div class="col-md-12">

            <form class="form12" id="Kotak_hl_form_dc" name="Kotak_hl_form_dc" role="form" method="POST" >
              <?php echo e(csrf_field()); ?>

            <div class="panel-group" id="accordion" >
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    
                    &nbsp; PERSONAL INFORMATION
                  
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">    

                            <div class="col-xs-6 form-padding">
                                  <select class="form-control block drop-arr select-sty" name="LoanPurpose" id="LoanPurpose"   required>
                                          <option disabled selected  value="">LOAN PURPOSE</option>
                                          <option value="1">Purchase of Home/Flat</option>
                                          <option value="2">Balance Transfer of existing loan from another bank</option>
                                          <option value="3">Composite Loan (Plot + Construction)</option>
                                          <option value="4">Construction on a plot owned by you</option>
                                          <option value="5">Extension/Renovation of owned house</option>
                                          <option value="6">Corporate Home Loan</option>
                                          <option value="7">Purchase of Commercial Property</option>
                                  </select> 
                            </div>


             
                           <div class="col-xs-6 form-padding">
                                  <select class="form-control inp-fld" name="LeadType" id="LeadType" required>
                                            <option disabled selected  value="">Lead Type</option>
                                            <option value="I">Individual</option>
                                            <option  value="C">Company</option>
                                  </select> 
                            </div>
         
                            <div class="col-xs-6 form-padding">
                                  <select class="form-control inp-fld" name="EmpType" id="EmpType" required>
                                            <option disabled selected  value="">Employment Type</option>
                                            <option  value="1">Salaried</option>
                                            <option  value="2">Self Employed</option>
                                  </select> 
                            </div>

                            <div class="col-xs-6 form-padding inp-fld" style="display: none;" id="first_nm">
                            <div>
                              <input type="text" name="FirstName" id="FirstName" class="form-control" onkeypress="return AllowAlphabet(event)" maxlength="40" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">FIRST NAME</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding inp-fld" style="display: none;" id="last_nm">
                            <div>
                              <input type="text" name="LastName" id="LastName" class="form-control" onkeypress="return AllowAlphabet(event)" maxlength="40" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">LAST NAME</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding inp-fld">
                            <div>
                              <input type="text" name="CompanyName" id="CompanyName" class="form-control" onkeypress="return AllowAlphabet(event)" maxlength="140" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">COMPANY NAME</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding inp-fld">
                            <div>
                              <input type="text" name="ContactPerson" id="ContactPerson" class="form-control" onkeypress="return AllowAlphabet(event)" maxlength="40" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">CONTACT PERSON</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding inp-fld">
                            <div>
                              <input type="text" name="LnAmt" id="LnAmt" class="form-control" onkeypress="return fnAllowNumeric(event)"  minlength="1" maxlength="9" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">LOAN AMOUNT</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding">
                                  <select class="form-control block drop-arr select-sty" name="TnrYears" id="TnrYears"  required>
                                            <option disabled selected  value="">TENURE YEARS</option>
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

                            <div class="col-xs-6 form-padding inp-fld">
                            <div>
                              <input type="text" name="PAN" id="PAN" class="form-control" oninput="pan_card('PAN')" maxlength="10" required >
                              <div id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</div>
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">PANCARD</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding inp-fld">
                            <select class="form-control drop-arr select-sty" name="ResCity" id="ResCity" style="height: 50px">
                                            <option disabled selected value="">CITY</option>
                                            </select>
                            </div>

                            <div style="display: none;" class="col-xs-6 form-padding inp-fld">
                            <select class="form-control drop-arr select-sty" name="ResCityArea" id="ResCityArea" style="height: 50px">
                                            <option disabled selected value="">CITY AREA</option>
                                            </select>
                            </div>

                            <div class="col-xs-6 form-padding inp-fld">
                            <div>
                              <input type="text" name="Mobile" id="Mobile" class="form-control"  maxlength="10" onkeypress="return fnAllowNumeric(event)" required >
                             
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">MOBILE NUMBER</label>
                              <div class="clear"></div>
                            </div>  
                            </div>
                            </div>
                            </div>
                            </div>
                <div class="col-md-12">
                <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
                  &nbsp;&nbsp;&nbsp;&nbsp;<button class="sbmt-btn dis-tbl" id="kotak-hl-submit" >Confirm & Continue<i class="icon-arrow-right"></i></button>
                 </div> 

                 <div class="col-md-12">
                <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
                  &nbsp;&nbsp;&nbsp;&nbsp;<button class="sbmt-btn dis-tbl" id="kotak-hl-status">Check Status<i class="icon-arrow-right"></i></button>
                 </div>


      
                  
                </div>
                </form>
                </div>  
                </section>    
                </div>
                
   <!-- Modal  -->
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

<!-- Status Form Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="kotak-hl-popup-status-dc">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Track Status</h4>
      </div>
      <div class="modal-body">
        <form name="kotak_home_loan_status_dc" id="kotak_home_loan_status_dc" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="kotak_home_loan_status_dc">
                  <div class="col-xs-6 form-padding inp-fld">
                            <div>
                              <input type="text" name="Mobile" id="Mobile" class="form-control"  maxlength="10" onkeypress="return fnAllowNumeric(event)" required >
                             
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">MOBILE NUMBER</label>
                              <div class="clear"></div>
                            </div>  
                            </div>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow" id="kotak_status">Submit<i class="icon-arrow-right"></i></button>
                  </div>

            </form>
        
      </div>
      
      
    </div>
  </div>
</div>


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


    
    
  <!-- Script -->  
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
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
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
  $('#kotak-hl-submit').click(function(event){
    event.preventDefault();
    // alert('okae');
    if(! $('#Kotak_hl_form_dc').valid())
       {
               alert('Please Fill Up All Details');
        }
        else
        {
          
           
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('kotak-home-loan-dc-submit')); ?>",
         data : $('#Kotak_hl_form_dc').serialize(),
         success: function(msg){
           console.log(msg);
           console.log(msg.status);
           if (msg.status =="1") {
             $('#kotak_hl').empty().append(msg.refcode);
             $('#kotak-hl-popup').modal('show');
           } else {
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
    if(! $('#kotak_home_loan_status_dc').valid())
       {
               alert('Please Fill Up All Details');
        }
        else
        {
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('kotak-home-loan-status-dc')); ?>",
         data : $('#kotak_home_loan_status_dc').serialize(),
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


