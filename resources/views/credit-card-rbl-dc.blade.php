<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RBL Credit Card :: RupeeBoss</title>
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
 
@media only screen and (max-width:768px) {
	
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
    <br>
    
    
    
      <div id="logo" class="text-center"><img id="myImage" src="http://erp.rupeeboss.com/personalloan/images/logo.png" class=""></div>
    
      <h4 class="text-center pg-titl">Apply For <img src="images/bank/rbl.png" class="img-responsive rbl" width="130"/> Credit Card</h4>
    
    <!-- <div class="col-md-3"></div>
	
	<form id="to_view_url" name="to_view_url" method="POST">
  {{ csrf_field() }}
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

            <form class="form12" id="rbl_cc_dc" role="form" method="POST" >
              
            <div class="panel-group" id="accordion" >
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp; PERSONAL INFORMATION
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">    

          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="Title" id="title" required>
                      <option disabled selected  value="">Select Title</option>
                        <option value=1>Mr</option>
                        <option value=2>Ms</option>
                        <option value=2>Mrs</option>
                        <option value=2>Dr</option>
                        <option value=99>Other</option>
                    </select> 
                  </div>
             
             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="CreditCardApplied" id="cc_applied" class="form-control inp-fld used" onkeypress="return AllowAlphabet(event)" value="{{$card}}" disabled="" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Credit Card Applied</label>
                      <div class="clear"></div>
                    </div>  
              </div>

              <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ProcessingFee" id="ProcessingFee" class="form-control inp-fld used" onkeypress="return AllowAlphabet(event)" value="{{$ProcessingFee}}" disabled="" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Joining Fee</label>
                      <div class="clear"></div>
                    </div>  
              </div>
              
                  
            <div class="col-xs-6 form-padding">
                    <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                    <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">DATE OF BIRTH</span>
                      <input type="text" class="form-control lastReporteddob" id="datepicker" name="DOB" style="color:#636363 !important; font-size:14px;" required>
                    <i class="fa fa-calendar" id="DateOfBirth" style="font-size: 25px;position: absolute;top: 15px;right: 11px;color: #3f7cb3;"></i>
                    </div>
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="FirstName" id="f_name" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">First Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="MiddleName" id="m_name" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Middle Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="LastName" id="l_name" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Last Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  
                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="FatherName" id="father_name" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Father Name</label>
                      <div class="clear"></div>
                    </div>  
                             </div>

                     <div class="col-xs-6 col-md-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px;position: relative; padding: 0px 0px; margin-bottom:10px;">
                      <div class="padd-lef gender">
                       <div class="btn-grp" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="Gender" checked value="1"><img id="myImage"  src="images/male.png" class=""/></span>
                                    <span class="btn btn-primary outer-brd1"><input type="radio" name="Gender" value="2"><img id="myImage1"  src="images/female.png" class="" ></span>
                             </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;"> Had Loan Or CreditCard From AnyBank.</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="HadLoanOrCreditCardFromAnyBank" id="HadLoanOrCreditCardFromAnyBank" checked value="Y"  >Yes</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="HadLoanOrCreditCardFromAnyBank" id="HadLoanOrCreditCardFromAnyBank" value="N">No</span>
                  </div>
                    </div>
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;"> Employment Type.</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="EmpType" id="EmpType" checked value="1"  >Yes</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="EmpType" id="EmpType" value="2">No</span>
                  </div>
                    </div>
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="monthly_income" name="NMI" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)"   >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Applicant Net Monthly Income</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
         
                
               
        </div>
    </div>
    
  
  <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; RESIDENCE ADDRESS DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">      
          
              <h4 class="txt-tlt pull-left hdn5">Current Address Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ResAddress1" id="res_add1" class="form-control inp-fld" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Residence Address 1</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="ResAddress2" id="res_add2" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Residence Address 2</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="Landmark" id="landmark" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Landmark</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="ResCity" id="city" required>
                          <option disabled selected  value="">Select City</option>
                           @foreach ($data as $city)  
                    <option value="{{$city->city_code}}">{{$city->city_name}}</option>
                       @endforeach
                        </select>
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="res_pin" name="ResPIN" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)" maxlength="6"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pincode</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="mobile" name="Mobile" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)" maxlength="10"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Mobile Number</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
         
          
      
                   <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="email_id" name="Email" class="form-control inp-fld" oninput="email('email_id')"  required >
                       <span id="mail_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Email ID(Personal)</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="pan" name="PAN" class="form-control inp-fld" oninput="pancard('pan')"  required minlength="10" maxlength="10" >
                       <span id="pannumber" style="display:none;color: red; font-size: 10px">Please Enter Valid Pancard No..</span>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pancard</label>
                      <div class="clear"></div>
                    </div>  
                    </div>
          
                    </div>
                    </div>
         
  </div>
  </div>
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


          <div class="col-md-12">
            
            
            <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
            &nbsp;&nbsp;&nbsp;&nbsp;<button class="sbmt-btn rbl-credit-submit dis-tbl " >Confirm & Continue<i class="icon-arrow-right"></i>


                  </button>
                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
            <!-- <b>All <mark style="color:red">*</mark>fields are mandatory.</b> -->
            </div> 
      
                  
          </div>
        </div>  
      </section>    
    </div>
    </form>

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
         <h4><p id="modalerr"><h5>Thank you for choosing RBL Credit Card. A link has been sent to your registered Email Id. Kindly Click on the link to upload your supporting documents.<h5></p></h4>              
         </div>  
         <div class="modal-footer">
        <a type="button" id="upload" name="upload" class="btn btn-primary" onclick="Redirect();" >OK</a>
        
      </div> 
</div>
</div>
</div>



    
    
    
    <script>
    $(document).ready( function(){
    
      $('.income-source > div').click(function(){
        $('.income-source > div').removeClass('income-source-active');
        $(this).toggleClass('income-source-active');
      });
      
      $('.scenario > div').click(function(){
        $('.scenario > div').removeClass('scenario-active');
        $(this).toggleClass('scenario-active');
      });
    });
      
  </script>
  
  
  
  

    
  
    
    <script>
    function toggleChevron(e) {
      $(e.target)
        .prev('.panel-heading,.panel-heading1,.panel-heading2')
        .find("i.indicator")
        .toggleClass('glyphicon-minus glyphicon-plus');
    }
    $('#accordion').on('shown.bs.collapse', toggleChevron);
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    </script>
    
    <script>
      $(window, document, undefined).ready(function() {

        $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
          top: y + 'px',
          left: x + 'px'
        });

        $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
        });

      });
    </script>


  
    <script>
      $(window, document, undefined).ready(function() {

        $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
          top: y + 'px',
          left: x + 'px'
        });

        $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
        });

      });
    </script>
    
    
 


<script>
$(document).ready(function($){
    $("#phone").mask("(99) 9999-9999"); 
    $("#telf1").mask("(99) 9999*-9999");    
    $("#telf2").mask("(99) 9999?-9999"); 
});
</script>
 
 

<script>
$(document).ready(function(){

  
  // fade in #back-top
  $(function () {
    

    // scroll body to 0px on click
    $('.top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      
    });
  });

});
</script>
  </body>
</html>
    
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
  function pancard(obj,val){
    console.log(obj);
    if(obj=='pan' ){
                   var str =$('#pan').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#pannumber').hide();
                      // $('.credit-submit').show();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pannumber').show();
                    // $('.credit-submit').hide();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  

window.onload=function(){
// Change styles according to panels state


// Initialize collapsibles

$('.collapse').collapse({
  toggle: false,
  parent: '#accordion'
});

var application_status=0;
  // var red_url= "{{URL::to('thank-you')}}";
$(".rbl-credit-submit").click(function(event){
  alert('ojkae');
  event.preventDefault();


$('form#rbl_cc_dc').find('input').each(function(){
    if($(this).val() =="" && $('#rbl_cc_dc').valid()){
         var current = $(this).closest(".panel-collapse");
        if (!current.hasClass("in")) {
           current.collapse("show");

   
        }else{

          // current.addClass("in");

        } 



return false;
         
    }else{ 

       if( $('#mobile').val()!='' &&  $('#pan').val()!=''){
        $(".iframeloading").show();
        $('#upload').show();
        
        $.ajax({
        type:"POST",
        data:$('#rbl_cc_dc').serialize(),
        url:"{{URL::to('rbl-credit-submit')}}",
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
               $('#modalerr').hide();
            }
            
          }else if(status_id==1){
            status="Successful";
            error=returnedData.ReferenceCode;
            // red_url='http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id='+error+'&CardType=RBL&MobileNo='+mobile+'';
            // application_status=1;
            // red_url="{{URL::to('thank-you')}}";
            
          }else if(status_id==2){
            status="Successful Referred";
            error=returnedData.ReferenceCode;
            // red_url='http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id='+error+'&CardType=RBL&MobileNo='+mobile+'';
            // application_status=1;
            // red_url="{{URL::to('thank-you')}}";
            
          }else{
            status="Rejected";
            error=returnedData.ReferenceCode;
            $('#modalerr').hide();
          }
          $('#rbl_cc_apply_status').empty().text(status);
          $('#reason').empty().append(error);
          
          $('#rb_cc_modal').modal('toggle');
          
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

     
       return false;
       

      } 
    } 
 
    
});

});
}

</script>

<script type="text/javascript">
  function email(obj,val){
    // console.log(obj);
    if(obj=='email_id' ){
                   var str =$('#email_id').val();
                   var emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#mail_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mail_id').show();

                    return false;
                  }
                  
  }
}
</script>



<script type="text/javascript">
  function url_mail(obj,val){
    //console.log(obj);
    if(obj=='urlemailid' ){
                   var str =$('#urlemailid').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#urlmail_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#urlmail_id').show();

                    return false;
                  }
                  
  }
}
</script>


<!-- <script type="text/javascript">
          function Redirect() 
          {
            var mobile=$('#ResidenceMobileNo').val();
            var app_id=$('#drop').text();
            window.location="http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id="+app_id+"&CardType=ICICI&MobileNo="+mobile;
            // window.location.href ="{{URL::to('thank-you')}}";
          }
</script> -->

<script src="js/icici_js/classie.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>  
<link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
<script src="js/jquery-ui.js" ></script>
<script type="text/javascript" src="js/datepicker.js"></script>


<script>
		  $( function() {
			$( '#datepicker,#datepicker1,#datepicker2' ).datepicker({
				changeMonth:true,
				changeYear:true,
				dateFormat: 'dd-mm-yy',
				yearRange : 'c-65:c+10'
			});
		  });
	 </script>

<script>
  $("#DateOfBirth").click(function() {
    $(".lastReporteddob").datepicker('show');
});





 

  $('#checkboxid').click(function () {
    if ($(this).is(':checked')) {

         $('#checkboxid').val(1);
        
    } else {
        $('#checkboxid').val(0);
    }
});

</script>

<script type="text/javascript">
  $('#btnweburl').click(function(){
    event.preventDefault();
      $form=$('#to_view_url');
      if(! $form.valid()){

      }else{
       $.ajax({  
         type: "POST",  
         url: "{{URL::to('to-view-on-browser-url')}}",
         data : $('#to_view_url').serialize(),
         success: function(msg){
           //console.log(msg);
           if (msg == 1) 
           {
             alert('As per your request we have sent a mail to your email ID.');
           } else 
           {
            alert('Oops..!! Something Went Wrong');
           }
          
        }  
      }); 
      }
  });
</script>

<script type="text/javascript">
          function Redirect() 
          {
            
             window.location.href ="{{URL::to('thank-you')}}";
          }
</script>

<!-- var y=$(':input[required]:hidden');
          y.each(function( index, element ) {
            
            var temp= element.getAttribute("value");
            //console.log(temp);
            if(element.getAttribute("id")!="urlemailid" && temp==null){

              console.log(element.getAttribute("id")+" "+temp);
            }
            
          });
      
 -->
