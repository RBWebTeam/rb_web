<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<<<<<<< HEAD
<title>SME Emailer</title>
<link rel="stylesheet" href="{{url('smejs/main.css')}}">

<style>
   .error1 {font-size:10px;color:red; display:block;}
=======
<title>SME - RupeeBoss</title>
<link rel="stylesheet" href="{{url('smejs/main.css')}}">

<style>
   .error1 {font-size:11px;color:red; display:block; padding-top:5px;}
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d

</style>
</head>

<body style="margin:0px; padding:0px; background:#f1f1f1;">
<table width="750" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:arial; font-size:14px;">
  <tr>
    
    <td><a href="#" target="_blank"><img src="{{url('smejs/images/SME-Emailer_1_01.png')}}" border="0"  /></a></td>
  </tr>
  <tr>
    <td>
  <a href="#" target="_blank"><img src="{{URL::to('smejs/images/SME-Emailer_1_02.png')}}" border="0" /></a>  
  </td>
  </tr>
  <tr>
  <td><a href="#" target="_blank"><img src="{{URL::to('smejs/images/SME-Emailer_1_04.jpg')}}" border="0" /></a></td>
  
  </tr>
  <tr>
    <td>
  <a href="#" target="_blank"><img src="{{URL::to('smejs/images/SME-Emailer_1_06.jpg')}}" border="0" /></a>  
  </td>
  </tr>
</table>

<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
   <h2>PLEASE FILL IN DETAILS BELOW  </h2>
    <div class="ContentBody">
    <form name="myForm" id="myForm" action="smemailer" method="post">   <!-- onsubmit="return validateForm()" -->

    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <table  width="90%" cellpadding="0" cellspacing="0" border="0" align="center" class="poptbl">
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="name" placeholder="Full Name" ><span  class="error_fullname error1"></span></td>
                
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="tel" onkeypress="return fnAllowNumeric(event)" maxlength="10" name="mobile" placeholder="Mobile" >
                <span class="error_mobile error1"></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email"   name="email" placeholder="Email" ><span  class="error_email error1"></span></td>
            </tr>

            <tr>
                <td>Designation</td>
                <td><input type="text" name="designation" placeholder="Designation" ><span  class="error_designation error1"></span></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="company" placeholder="Company Name" ><span  class="error_company error1"></span></td>
            </tr>
      <tr>
                <td>City</td>
             
           <td><input type="text" name="city" placeholder="City Name" > <span  class="error_city error1"></span></td>
        
            </tr>
            <tr>
                <td>Turn Over</td>
                <td><input type="number" name="turnover" onkeypress="return fnAllowNumeric(event)" placeholder="Turn Over "><span  class="error_turnover error1"></span></td>
            </tr>
            <tr>
                <td colspan="2" id="popupfoot"> <input type="submit" class="close1" name="submit" value="Submit" ></td><!--  class="close" -->
            </tr>
        </table>
        </form>
    </div>

  </div>
  <div style="width: 100%; color:white; height: 100%; display: none; opacity: 0.7;" id="mask"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script src="{{URL::to('smejs/main.js')}}"></script>

<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
 -->
</body>
</html>

<script>
// just for the demos, avoids form submit
  $(document).ready(function(){

    $(".close1").click(function(e){
   e.preventDefault();


         $.ajax({  
             type: "POST",  
             url: "{{URL::to('smemailer')}}",
             data : $("#myForm").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){ 
               
                if(msg.name){
                        $(".error_fullname").text(msg.name);
                      }else{
                        $(".error_fullname").text('');
                      }
                      if(msg.mobile){
                        $(".error_mobile").text(msg.mobile);
                      }else{
                        $(".error_mobile").text('');
                      }

                      if(msg.email){
                        $(".error_email").text(msg.email);
                      }else{
                        $(".error_email").text('');
                      }

                      if(msg.designation){
                        $(".error_designation").text(msg.designation);
                      }else{
                        $(".error_designation").text('');
                      }

                      if(msg.company){
                        $(".error_company").text(msg.company);
                      }else{
                        $(".error_company").text('');
                      }

                       if(msg.city){
                        $(".error_city").text(msg.city);
                      }else{
                        $(".error_city").text('');
                      }

                       if(msg.turnover){
                        $(".error_turnover").text(msg.turnover);
                      }else{
                        $(".error_turnover").text('');
                      }

                         if(msg==1){
                             // alert("Thank you contacting us..");
                            //  $('.window').hide();

                            document.location = "sme-thank-you";


                            }else if(msg==0){
                              alert("Oops! Something went Wrong...");
                            } 

                 
                           
                      

                               
           }  
       });

});

    });


   function fnAllowNumeric(evt)
    {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
       return false;

     return true;
   }
</script>