<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Lead :: RupeeBoss</title>
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
    
      <div id="logo" class="text-center"><img id="myImage" src="http://erp.rupeeboss.com/personalloan/images/logo.png" class=""></div>
    
      <h4 class="text-center pg-titl">APPLY FOR OTHER LOANS</h4>

    
    <div class="col-md-3"></div>
  
  
            <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
            
            <!-- <form action="">  -->  
            <div class="col-md-12">

            <form class="form12" id="lead_form" name="lead_form" role="form" method="POST" >
              {{ csrf_field() }}
            <div class="panel-group" id="accordion" >
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    
                    &nbsp;<center>OTHER LOANS</center>
                  
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body"> 
                            <?php if(isset($_GET['brokerId'])){?>
                            <input type="hidden" name="brokerId" id="brokerId" value="<?php echo isset($_GET['brokerId'])?$_GET['brokerId']:'';?>">
                            <?php }else{?>
                            <input type="hidden" name="brokerId" id="brokerId" value="0">
                            <?php }?>
                            <?php if(isset($_GET['Source'])){?>
                            <input type="hidden" name="Source" id="Source" value="<?php echo isset($_GET['Source'])?$_GET['Source']:'';?>">
                            <?php }else{?>
                            <input type="hidden" name="Source" id="Source" value="">
                            <?php }?>

                            <div class="col-xs-6 form-padding">
                            <div>
                              <input type="text" name="Name" id="Name" class="form-control inp-fld " onkeypress="return AllowAlphabet(event)"  required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">NAME</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding">
                            <div>
                              <input type="text" name="EMail" id="EMail" oninput="mail_id('EMail')" class="form-control inp-fld" required >
                              <div id="mail" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Email Id.!!</div>
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">EMAIL</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding">
                            <div>
                              <input type="tel" name="Mobile" id="Mobile" class="form-control inp-fld" minlength="10"  maxlength="10" required >
                             
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">MOBILE NUMBER</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding">
                            <div>
                              <input type="text" name="status" id="status" class="form-control inp-fld used" onkeypress="return AllowAlphabet(event)" value="New" required readonly >

                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">STATUS</label>
                              <div class="clear"></div>
                            </div>  
                            </div>
                              <input type="hidden" name="Status" id="Status" value="43">

                            
                            <div class="col-xs-6 form-padding">
                            <select class="form-control drop-arr select-sty" name="ProductId" id="ProductId" style="height: 50px">
                              <option disabled selected value="">PRODUCT</option>
                            </select>
                            
                            </div>

                            <div id="amount" class="col-xs-6 form-padding">
                            <div>
                              <input type="number" name="Loan_amt" id="Loan_amt" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)"  minlength="5" maxlength="9" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">LOAN AMOUNT</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                              <div class="col-xs-6 form-padding">
                            <div>
                              <input type="number" name="FBA_Id" id="FBA_Id" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)"required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">FBA ID</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding">
                            <div>
                              <input type="number" name="Monthly_income" id="Monthly_income" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)"  minlength="5" maxlength="9" required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">MONTHLY INCOME</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                           <!--  <div class="col-xs-6 form-padding">
                            <div>
                              <input type="text" name="Assgn" id="Assgn" class="form-control inp-fld used" onkeypress="return fnAllowNumeric(event)" value="CREDIT PERSON" readonly required >

                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">ASSIGNED</label>
                              <div class="clear"></div>
                            </div>  
                            </div> -->
                            <!-- <input type="hidden" name="AssgnId" id="AssgnId" value="1271"> -->

                            <div class="col-xs-6 form-padding">
                            <div>
                              <input type="text" name="Remark" id="Remark" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)"  required >
                              <span class="highlight"></span><span class="bar"></span>
                              <label class="form-label-new lble">REMARK</label>
                              <div class="clear"></div>
                            </div>  
                            </div>

                            <div class="col-xs-6 form-padding">
                            <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                            <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">FOLLOW-UP DATE</span>
                            <input type="text" class="form-control lastReporteddob" id="datepicker" name="followupDate" style="color:#636363 !important; font-size:14px;" required>
                            <i class="fa fa-calendar" id="DateOfBirth" style="font-size: 25px;position: absolute;top: 15px;right: 11px;color: #3f7cb3;"></i>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                       <div >
                       <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
                       &nbsp;&nbsp;&nbsp;&nbsp;<button class="sbmt-btn dis-tbl" id="other-loans-submit" >Confirm & Continue<i class="icon-arrow-right"></i></button>
                      </div> 
                      </div>
                      </form>
                      </div>  
                      </section>    
                      </div>
                
   


    <div class="modal fade" tabindex="-1" role="dialog" id="lead-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your lead added successfully And LeadId is <b><span id="leadid"></span></b>.<h5></p></h4>
        
      </div>

      
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="lead-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b><span id="errorinfo"></span></b>.<h5></p></h4>
        
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
  function mail_id(obj,val){
    // console.log(obj);
    if(obj=='EMail' ){
                   var str =$('#EMail').val();
                   var emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
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

 $.ajax({ 
   url: "{{URL::to('product-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
     {      $.each(data, function( index, value ) {
      if (value.Product_Id!='10') {
         $('#ProductId').append('<option value="'+value.Product_Id+'">'+value.Product_Name+'</option>');
      }
            


        }); 

    }else{
      $('#ProductId').empty().append('No Result Found');
    }

   },

 });
</script>

<!-- <script type="text/javascript">
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
</script> -->

<script>
      $( function() {
      $( '#datepicker,#datepicker1,#datepicker2' ).datepicker({
        changeMonth:true,
        changeYear:true,
        minDate: new Date(),
        dateFormat: 'mm-dd-yy',
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
  $('#other-loans-submit').click(function(event){
    // alert('okae');
    event.preventDefault();
    if(! $('#lead_form').valid())
       {
         
        }
        else
        {
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('other-loans-submit')}}",
         data : $('#lead_form').serialize(),
         success: function(msg){
          console.log(msg.Status);
          if (msg.Status==1) 
          {
            
            $('#leadid').empty().append(msg.Lead_Id);
            $('#lead-popup').modal('show');
          } 
          else 
          {   
            $('#errorinfo').empty().append(msg.Errorinfo);
              $('#lead-popup').modal('hide');
            
             $('#lead-popup-error').modal('show');
          }
         }  
      });   
     }
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


   <!--  <script>
$('#ProductId').on('change', function() {
  // alert('okae');
  var ProductId=$('#ProductId').find(":selected").val();
  // console.log(LeadType);
  if ( ProductId == '10')
      {
       
        
        $("#amount").hide();
        
      }
      else{
        
        $("#amount").show();
        
      }
});
</script> -->

<!-- <script>
$('#ProductId').on('change', function() {
  // alert('okae');
  var ProductId=$('#ProductId').find(":selected").val();
  // console.log(LeadType);
  if ( ProductId == '10')
      {
      continue;
      }
      
});
</script> -->
<script type="text/javascript">
$('#Mobile').keyup(function () {
    if (!this.value.match(/[0-9]/)) {
        this.value = this.value.replace(/[^0-9]/g, '');
    }
});
</script>






