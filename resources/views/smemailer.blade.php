<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SME Emailer</title>
<link rel="stylesheet" href="{{url('sme/main.css')}}">


</head>

<body style="margin:0px; padding:0px; background:#f1f1f1;">
<table width="750" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:arial; font-size:14px;">
  <tr>
    
    <td><a href="#" target="_blank"><img src="{{url('sme/images/SME-Emailer_1_01.png')}}" border="0"  /></a></td>
  </tr>
  <tr>
    <td>
  <a href="#" target="_blank"><img src="{{URL::to('sme/images/SME-Emailer_1_02.png')}}" border="0" /></a>  
  </td>
  </tr>
  <tr>
  <td><a href="#" target="_blank"><img src="{{URL::to('sme/images/SME-Emailer_1_04.jpg')}}" border="0" /></a></td>
  
  </tr>
  <tr>
    <td>
  <a href="#" target="_blank"><img src="{{URL::to('sme/images/SME-Emailer_1_06.jpg')}}" border="0" /></a>  
  </td>
  </tr>
</table>

<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
   <h2>Let's Ensure you Insure right</h2>
    <div class="ContentBody">
    <form name="myForm" id="myForm" action="smemailer" method="post">   <!-- onsubmit="return validateForm()" -->

    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <table  width="90%" cellpadding="0" cellspacing="0" border="0" align="center" class="poptbl">
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname" placeholder="Full Name" required=""></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="tel" onkeypress="return fnAllowNumeric(event)" name="mobile" placeholder="Mobile" required></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td><input type="email"   name="Email" placeholder="Email" required></td>
            </tr>

            <tr>
                <td>Designation</td>
                <td><input type="text" name="makemodel" placeholder="Designation" required></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="mfdyear" placeholder="Company Name" required></td>
            </tr>
      <tr>
                <td>City</td>
             
           <td><input type="text" name="city" placeholder="City Name" required></td>
        
            </tr>
            <tr>
                <td>Turn Over</td>
                <td><input type="number" name="turnover" onkeypress="return fnAllowNumeric(event)" placeholder="Turn Over "></td>
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
<script src="{{URL::to('sme/main.js')}}"></script>

<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</body>
</html>

<script>
// just for the demos, avoids form submit
  $(document).ready(function(){

    $(".close11").click(function(e){
   e.preventDefault();
    if(!$('#myForm').valid()){
    
            return false;
          }else{

         alert("dddd");
 }

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