<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>HOME LOAN</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
  <link href="css/component.css" rel="stylesheet" type="text/css"  />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.datepicker.css">
  <link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/material.min.js"></script>
  <script type="text/javascript" src="js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-material-datetimepicker.js"></script>
   
</script>
<script type="text/javascript" src="js/jquery.datepicker.js"></script>
<script src="js/classie.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>  
<link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
<script src="js/jquery-ui.js" ></script>
    
<script src="js/jquery.mask.js"></script>
<script src="js/jquery.validate.min.js"></script>
  <style>
  .inp-fld {margin-bottom:10px; height:50px; position:relative;}
  .emp-nat span {padding:3px 5px;}
  .txt-tlt {padding-left:5px;width:100%;text-align:center; color:#666;font-size:18px;}
  .pg-titl {padding:10px; text-transform:uppercase;}
  .redio-lft {float:left;}
  .p-padding {padding:10px;}
  .mand-fld { display:block;}
  
  </style>
  </head>
  
  <body class="cbp-spmenu-push">
  <script>
$(".top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  alert("Test Msg");
  return false;
});
</script>

<form class="" id="compareform" role="form" method="POST" >
               {{ csrf_field() }}
               <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'0';?>">
                      <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'0';?>">
                      <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'0';?>"> 
                      <input type="hidden" name="type" class="type" value="DC"> 

<div class="wrapper-1">
       <!-- Main content -->
        <section class="out-dv">
      <div class="row">
      <div class="col-md-12">
      <!-- <?php
    if(isset($_GET['datacom'])){ ?>
      
    <?php }
    ?> -->
      <h3 class="text-center pg-titl">Apply For Credit Card</h3>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="ApplicantFirstName" id="ApplicantFirstName" class="form-input-new" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">First Name</label>
                      <div class="clear"></div>
                    </div>  
                   </div>
             
             <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="ApplicantMiddleName" id="ApplicantMiddleName" class="form-input-new" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Middle Name</label>
                      <div class="clear"></div>
                    </div>  
                             </div>
              <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="ApplicantLastName" id="ApplicantLastName" class="form-input-new" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Last Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  
            <div class="col-xs-6 form-padding">
                    <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                      <!-- <div class="input-group">
                        <input type="text" name="DateOfBirth" class="form-input-new-1" id="DateOfBirth" placeholder="Date of Birth" data-select="datepicker" data-locked="25/12/2014;1/1/2015">
                        <span class="input-group-btn" style="left:1px;">
                          <button type="button" class="btn btn-primary success-width" data-toggle="datepicker" style="height:50px;">
                          <i class="fa fa-calendar"></i></button>
                        </span>
                        <div class="clear"></div>
                      </div>   -->
                      <input type="text" class="form-control lastReporteddob" id="DateOfBirth" name="DateOfBirth" placeholder="Date of Birth*" required>
                    </div>
                  </div>
        <div class="col-xs-6 form-padding">
                    <div class="form-control" style="height:50px;position: relative; padding: 0px 0px; margin-bottom:10px;">
                      <div class="padd-lef gender">
                       <div class="btn-grp" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="Gender" checked value="Male"><img id="myImage"  src="images/male.png" class=""/></span>
                                    <span class="btn btn-primary outer-brd1"><input type="radio" name="Gender" value="Female"><img id="myImage1"  src="images/female.png" class="" ></span>
                               
                                        </div>
                        </div>
                     </div>
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Employment Nature</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
      <span class="btn btn-primary outer-brd active"><input type="radio" name="CustomerProfile" checked value="Salaried">Salaried</span>
      <span class="btn btn-primary outer-brd"><input type="radio" name="CustomerProfile" value="Selfemployed" >Self-Emp</span>
         </div>
                    </div>
                  </div>
        
            <h4 class="txt-tlt pull-left">Company Name</h4> 
            
            <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" class="form-input-new" name="CompanyName" id="CompanyName" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Company Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" id="Income" name="Income" class="form-input-new" onkeypress="return fnAllowNumeric(event)"  required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Income*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="ICICIBankRelationship" id="ICICIBankRelationship" required required>
                      <option value="">ICICIBankRelationship</option>
                          <option value="Salary">Salary</option>
                        <option value="Saving">Saving</option>
                        <option value="Loan">Loan</option>
                        <option value="Norelationship">Norelationship</option>
                    </select> 
                               </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="Total_Exp" id="Total_Exp" class="form-input-new" onkeypress="return fnAllowNumeric(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Total Experience</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                   <div class="col-xs-6 form-padding">
                   
                    <input  style='display:none;' type="text" class="form-input-new form-control" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" placeholder="ICICI Relationship Number" maxlength="15" onkeypress="return fnAllowNumeric(event)"  required>
                    </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">Salary Account With Other Bank:</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
      <span class="btn btn-primary outer-brd active"><input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" checked value="Yes"  >Yes</span>
      <span class="btn btn-primary outer-brd"><input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" value="No">No</span>
         </div>
                    </div>
                  </div>
              <h4 class="txt-tlt pull-left">Current Addresses Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="ResidenceAddress1" id="ResidenceAddress1" class="form-input-new" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">flat No / Plot No / House No*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text"  name="ResidenceAddress2" id="ResidenceAddress2" class="form-input-new" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Building / Society Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text"  name="ResidenceAddress3" id="ResidenceAddress3" class="form-input-new" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Road No / Area / Locality</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="City" id="City" class="form-input-new search_citynm" required dis>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">City*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" id="ResidencePincode" name="ResidencePincode" class="form-input-new" required onkeypress="return fnAllowNumeric(event)" maxlength="6"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Pincode*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" name="ResidenceState" id="ResidenceState" class="form-input-new search_statenm" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">State*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  
          <h4 class="txt-tlt pull-left">Contact Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" class="form-input-new" id="ResidencePhoneNumber" name="ResidencePhoneNumber" onkeypress="return fnAllowNumeric(event)" maxlength="10" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Telephone No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" class="form-input-new"  id="ResidenceMobileNo" name="ResidenceMobileNo" required onkeypress="return fnAllowNumeric(event)" maxlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Mobile No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" class="form-input-new" id="STDCode" name="STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="4" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">STD Code</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  
          <h4 class="txt-tlt pull-left">Identity Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input type="text" id="ApplicationNumber" name="ApplicationNumber" class="form-input-new" required="" maxlength="13" minlength="13" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Application Number*</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="SalaryAccountOpened" id="SalaryAccountOpened" required >
                      <option value="">SalaryAccountOpened</option>
                          <option value="Above2Months"> > 2 Months</option>
                        <option value="Below2Months"><=2 Months</option>
                        
                    </select> 
                               </div>
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld">
                      <input class="form-input-new"  type="text" id="PanNo" name="PanNo" required oninput="pancard('PanNo')" maxlength="10" minlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new">Pancard*</label>
                      <div class="clear"></div>
                      <div id="pannumber" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                    </div>  
                  </div>
          <div class="col-md-12 pull-left text-justify">
            <p class="p-padding"><input type="checkbox" name="terms"  class="redio-lft"/>&nbsp; I hereby confirm that I have read and understood the Rupeeboss Terms and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.</p>
            
            <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
            &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated icici-credit-submit dis-tbl " >Confirm & Continue<i class="icon-arrow-right"></i>


                  </button>
            <b>All <mark style="color:red">*</mark>fields are mandatory.</b>
            </div>      
                  
          </div>
        </div>  
      </section>    
    </div>
    </form>



    
    
    
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
  
  
  
  

    <!-- <script>
      var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };

      function disableOther( button ) {
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script> -->
  
    
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

<!--     <script>
      var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };

      function disableOther( button ) {
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script> -->
  
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
    
    
  <!-- <script>
  $(function() {                       //run when the DOM is ready
  $(".outer-brd").click(function() {  //use a class, since your ID gets mangled
    $(this).addClass("active1");      //add the class to the clicked element
  });
   $(".outer-brd").dblclick(function() {  //use a class, since your ID gets mangled
    $(this).removeClass("active1");      //add the class to the clicked element
  });
});
</script>

<script>
  $(function() {                       //run when the DOM is ready
  $(".padd-lef img").click(function() {  //use a class, since your ID gets mangled
    $(this).addClass("img-brd");      //add the class to the clicked element
  });
   $(".padd-lef img").mouseenter(function() {  //use a class, since your ID gets mangled
    $(this).removeClass("img-brd");      //add the class to the clicked element
  });
});
</script> -->


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
  $(document).ready(function(){
    $('#ICICIBankRelationship').on('change', function() {
      console.log(this.value);
      if ( this.value == 'Salary')
      {
        $("#ICICIRelationshipNumber").show();
      }
      else
      {
        $("#ICICIRelationshipNumber").hide();
      }
    });
});
</script>

<script type="text/javascript">

  

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
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
          url: "{{ route('searchstateajax') }}",
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

<script type="text/javascript">
  function pancard(obj,val){
    // console.log(obj);
    if(obj=='PanNo' ){
                   var str =$('#PanNo').val();
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
  $(".icici-credit-submit").click(function(event){
    //alert("okae");
    event.preventDefault();
      //var form=$(this).closest("form").attr('id');
      //alert(form);
      //var form=$('#compareform');
      if(!  $('#compareform').valid()){
      }else{
        //var s=$('#'+form).serialize();

        $(".iframeloading").show();
        $(".icici-credit-submit").hide(); 
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('icici-credit-submit')}}",
         data : $('#compareform').serialize(),
         dataType: 'json',
         success: function(msg){
         $(".iframeloading").hide();  
        
         // console.log(msg);
          if(msg==2){
            // alert("OKAE");
             alert("Something Went Wrong");

           
            // $('#credit_process').modal('show');        
          } 
          else{
            // console.log(msg);
            alert(" Your Application id is "+msg+".Thank you for your interest in ICICI Bank Credit Cards. Our representative will get in touch with you within 3 working days subject to your application meeting the eligibility criteria");
             // $('#credit_process_sorry').modal('show');
          }

        }  
      }); 
      }

    });


</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>