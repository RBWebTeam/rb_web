<!DOCTYPE html>
<html class="no-js"> 
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"> -->
  <title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan";  ?></title>
  <!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
  <meta name="msvalidate.01" content="3744048BDD61F7FE6837BD664522C8F9" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
  <meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "rupeeboss loans getloan expressloan"; ?>" />
  <meta name="p:domain_verify" content="05d8ec5b6a704fa5b78abd5f636fdc24"/>
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="{{URL::to('images/rb_fav.png')}}">
  <!-- <link rel="stylesheet" href="{{URL::to('fonts/Raleway.css')}}" type="text/css"> -->
  <!-- Animate.css -->

  <link  rel="stylesheet" type="text/css" href="{{URL::to('css/mysite.css')}}"/>
<link  rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}"/>
<script src="js/icici_js/jquery.min.js"></script>
  <script type="text/javascript" src="js/icici_js/material.min.js"></script>
  <script type="text/javascript" src="js/icici_js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/icici_js/bootstrap-material-datetimepicker.js"></script>
   
</script>


<script type="text/javascript" src="js/icici_js/jquery.datepicker.js"></script>


    
<script src="js/jquery.mask.js"></script>
<script src="js/icici_js/jquery.validate.min.js"></script>
<script src="js/icici_js/classie.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>  
<link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
<script src="js/jquery-ui.js" ></script>
<script type="text/javascript" src="js/datepicker.js"></script>


 
<div class="container">
<h1 class="loan-head" >Credit Card</h1>
			<div class="row">
      <br>
			<div class="sbi-banner"></div>
				<div class="col-md-12 white-bg mrg-tp-minus box-shadow">
					<form id="sbi_cc" name="sbi_cc" method="POST">
                    {{ csrf_field() }}

					<div class="form-group">

					<div class="col-md-12"><h4 class="hdr pad1 text-center">Personal Details</h4></div>
          <input type="hidden" name="CardType" id="CardType" value="0"> 
          <input type="hidden" name="Joining_Fee" id="Joining_Fee" value="0">              

					<div class="col-md-3">
					<label>Name <i style="color:red"> *</i></label>
					<input type="text" id="FirstName" name="FirstName" class="form-control" onkeypress="return AllowAlphabet(event)"  required="">

					</div>

					<div class="col-md-3">
					<label>Middle Name</label>
					<input type="text" id="MiddleName" name="MiddleName" class="form-control" onkeypress="return AllowAlphabet(event)">
					</div>
					<div class="col-md-3">
					<label>Last Name<i style="color:red"> *</i></label>
					<input type="text" id="LastName" name="LastName" class="form-control" onkeypress="return AllowAlphabet(event)"  required="">
					</div>
         
					<div class="col-md-3">
					<label>Date Of Birth<i style="color:red"> *</i></label>
					<input type="text" id="dob" name="DOB" class="form-control date"  required="">
					</div>
					<div class="col-md-3">
					<label>Pan card No<i style="color:red"> *</i></label>
					<input type="text" id="pan_number" name="Pan_No" class="form-control" oninput="pan_card('pan_number')" maxlength="10"  required="">
                    <span id="pan_num" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
					</div>
					<div class="col-md-3">
					<label>Current Residence Address<i style="color:red"> *</i></label>
					<input type="text" id="Residence_Addr" name="Residence_Addr" class="form-control"  required="">
					</div>
					<hr>
					<div class="col-md-3">
					<label>Landmark</label>
					<input type="text" id="Landmark" name="Landmark" class="form-control">
					</div>
                    <div class="col-md-3">
                    <label>City</label>
                    <input type="text" id="City" name="City" required class="form-control">
                    </div>
                    <div class="col-md-3">
                    <label>State</label>
                    <select class="form-control" name="State" id="State" required="">
                      <option disabled selected  value="">State</option>
                       <option value="ANDAMAN-NICOBAR">ANDAMAN-NICOBAR</option>
                        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                        <option value="ASSAM">ASSAM</option>
                        <option value="BIHAR">BIHAR</option>
                      <option value="CHANDIGARH">CHANDIGARH</option>
                      <option value="CHHATTISGARH">CHHATTISGARH</option>
                      <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR HAVELI</option>
                      <option value="DAMAN & DIU">DAMAN & DIU</option>
                      <option value="DELHI">DELHI</option>
                      <option value="GOA">GOA</option>
                      <option value="GUJARAT">GUJARAT</option>
                      <option value="HARYANA">HARYANA</option>
                      <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                      <option value="JAMMU KASHMIR">JAMMU KASHMIR</option>
                      <option value="JHARKHAND">JHARKHAND</option>
                      <option value="KARNATAKA">KARNATAKA</option>
                      <option value="KERALA">KERALA</option>
                      <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                      <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                      <option value="MAHARASHTRA">MAHARASHTRA</option>
                      <option value="MANIPUR">MANIPUR</option>
                      <option value="MEGHALAYA">MEGHALAYA</option>
                      <option value="MIZORAM">MIZORAM</option>
                      <option value="NAGALAND">NAGALAND</option>
                      <option value="ORISSA">ORISSA</option>
                      <option value="PONDICHERRY">PONDICHERRY</option>
                      <option value="PUNJAB">PUNJAB</option>
                      <option value="RAJASTHAN">RAJASTHAN</option>
                      <option value="SIKKIM">SIKKIM</option>
                      <option value="TAMILNADU">TAMILNADU</option>
                      <option value="TRIPURA">TRIPURA</option>
                      <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                      <option value="UTTARAKHAND">UTTARAKHAND</option>
                      <option value="WEST BENGAL">WEST BENGAL</option>
                     
          </select>
                    </div>
					<div class="col-md-3">
					<label>Pincode<i style="color:red"> *</i></label>
					<input type="text" id="Pin" name="Pin" class="form-control" maxlength="6" onkeypress="return fnAllowNumeric(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Mobile No<i style="color:red"> *</i></label>
					<input type="text" id="Mobile" name="Mobile" pattern="[789][0-9]{9}" class="form-control" maxlength="10" onkeypress="return fnAllowNumeric(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Email Id<i style="color:red"> *</i></label>
					<input type="text" id="email" name="Email" class="form-control" oninput="mail('email')"  required="">
                    <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
					</div>
					<div class="col-md-12"><h4 class="hdr pad1 text-center">Office Details</h4></div>
					<div class="col-md-3">
					<label>Occupation type<i style="color:red"> *</i></label>
					<select class="form-control" name="Occupation" id="Occupation" required="">
                      <option disabled selected  value="">Occupation type</option>
					  <option value="Homemaker">Homemaker</option>
					  <option value="Retired/Pensioner">Retired/Pensioner</option>
					  <option value="Salaried">Salaried</option>
					  <option value="Self Employed">Self Employed</option>
                      <option value="Student">Student</option>
					</select>
					</div>
					<div class="col-md-3">
					<label>Designation<i style="color:red"> *</i></label>
					<input type="text" id="Designation" name="Designation" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Company Name<i style="color:red"> *</i></label>
					<input type="text" id="CompanyName" name="CompanyName" class="form-control"  required="">
					</div>
					<div class="col-md-3">
					<label>Office Address<i style="color:red"> *</i></label>
					<input type="text" id="Office_Addr" name="Office_Addr" class="form-control"  required="">
					</div>
                    <div class="col-md-3">
                    <label>City</label>
                    <input type="text" id="Office_City" name="Office_City" required class="form-control">
                    </div>
                    <div class="col-md-3">
                    <label>State</label>
                    <select class="form-control" name="Office_State" id="Office_State" required="">
                      <option disabled selected  value="">State</option>
                       <option value="ANDAMAN-NICOBAR">ANDAMAN-NICOBAR</option>
                        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                        <option value="ASSAM">ASSAM</option>
                        <option value="BIHAR">BIHAR</option>
                      <option value="CHANDIGARH">CHANDIGARH</option>
                      <option value="CHHATTISGARH">CHHATTISGARH</option>
                      <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR HAVELI</option>
                      <option value="DAMAN & DIU">DAMAN & DIU</option>
                      <option value="DELHI">DELHI</option>
                      <option value="GOA">GOA</option>
                      <option value="GUJARAT">GUJARAT</option>
                      <option value="HARYANA">HARYANA</option>
                      <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                      <option value="JAMMU KASHMIR">JAMMU KASHMIR</option>
                      <option value="JHARKHAND">JHARKHAND</option>
                      <option value="KARNATAKA">KARNATAKA</option>
                      <option value="KERALA">KERALA</option>
                      <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                      <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                      <option value="MAHARASHTRA">MAHARASHTRA</option>
                      <option value="MANIPUR">MANIPUR</option>
                      <option value="MEGHALAYA">MEGHALAYA</option>
                      <option value="MIZORAM">MIZORAM</option>
                      <option value="NAGALAND">NAGALAND</option>
                      <option value="ORISSA">ORISSA</option>
                      <option value="PONDICHERRY">PONDICHERRY</option>
                      <option value="PUNJAB">PUNJAB</option>
                      <option value="RAJASTHAN">RAJASTHAN</option>
                      <option value="SIKKIM">SIKKIM</option>
                      <option value="TAMILNADU">TAMILNADU</option>
                      <option value="TRIPURA">TRIPURA</option>
                      <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                      <option value="UTTARAKHAND">UTTARAKHAND</option>
                      <option value="WEST BENGAL">WEST BENGAL</option>
                     
          </select>
                    </div>
					<div class="col-md-3">
					<label>Pincode<i style="color:red"> *</i></label>
					<input type="text" id="Pincode" name="Pincode" class="form-control" maxlength="6" onkeypress="return fnAllowNumeric(event)"  required="">
					</div>
					<div class="col-md-3">
					<label>Gross Income</label>
					<input type="text" id="Income" name="Income" onkeypress="return fnAllowNumeric(event)"  class="form-control" minlength="5" maxlength="9">
					</div>
					<div class="col-md-3">
					<label>Annual Income<i style="color:red"> *</i></label>
					<input type="text" class="form-control" id="Annual_Income" name="Annual_Income" minlength="5" maxlength="9" required="">
					</div>
					
					
					
					
					<!-- Column 2 End -->
					
					
				
					
					
			       <hr>
				   <div class="col-md-12">
                    The fields marked with <i style="color:red"><b> *</b></i> are <i style="color:red"><b>mandatory</b>.</i>
					<div class="grup-btn-center flt-left ">
					<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="submit">Submit<i class="icon-arrow-right"></i></a>

					<!-- <button class="btn btn-primary btn-outline">Back</button>
					<button class="btn btn-primary btn-outline">Save As Draft</button>
					<button class="btn btn-primary btn-outline">Clear</button> -->
					</div>
					</div>
					</div>
					</form>
				</div>
				
				
			</div>
		</div>
		<br>



<div class="modal fade" tabindex="-1" role="dialog" id="sbi-cc-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your SBI CC Lead Id is <span id="sbi"></span>.<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary sbi_cc_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="sbi-cc-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Oops!! Unable To Process.Thank You For Banking With SBI.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<!-- script -->
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
    var d = new Date();
    var year = d.getFullYear()-21 ;
    d.setFullYear(year);

    $("#dob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-70Y",
      yearRange: '-70:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='pan_number' ){
                   var str =$('#pan_number').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_num').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_num').show();

                    return false;
                  }
                  
    }
    }
    </script>

    <script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='email' ){
                   var str =$('#email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
    $('#submit').click(function(){
    // alert('okae');
    if(! $('#sbi_cc').valid())
       {
              
        }
        else
        {     
         $.ajax({  
         type: "POST",  
         url: "{{URL::to('new-cc-submit')}}",
         data : $('#sbi_cc').serialize(),
         success: function(msg){
            console.log(msg.Status);
                    
             if (msg.Status==1) {
              $('#sbi-cc-popup').modal('show');
              $('#sbi').empty().append(msg.Lead_Id);
            } 
            else {
                $('#sbi-cc-popup').modal('hide');
                 $('#sbi-cc-popup-error').modal('show');
                
            }         
      }   
     });
        }

    });
</script>

<script type="text/javascript">
  $('.sbi_cc_proceed').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
  });
</script>

<script type="text/javascript">
    

 $(document).ready(function(){
      // alert('okae');
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
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
          }
</script>


