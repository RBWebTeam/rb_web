@include('layout.header')
<style>
    .ull {background:#fff; font-size:13px; display:block; border:1px solid #ccc;}
	.ull li {list-style-type:none; display:block;padding:2px;border-bottom:1px dashed #eee;}
	.sbi-banner {background: url("images/sbi-banner.jpg"); width:100%; height:500px;box-shadow: 1px 0px 2px 1px #666; }
	.grup-btn-center {width: 342px;margin-left: 30%;margin: 30px 0px;display: block !important;}
	label {font-size:11px;margin: 0px;}
	h4 {text-transform:uppercase;}
	.mrg-top{margin-top:20px; display:block;}
	.flt-left {float:left;}
	.hdr { margin-bottom:20px;}
	.hdr b {border-bottom:2px solid #f1f1f1; padding:10px 20px;}
	.obj-center {margin:0 auto; display:block;}
	.mrg-btm {margin-bottom:20px;}
	.form-group h4 {background:#e8e8e8;}
  </style>
<div class="express-lon-ban">
	<img src="images/rectify-banner.png" class="img-responsive" width="100%"/>
</div>

<div id="fh5co-hero">
    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                  <div class="wrapper-content bg-white pinside40">
                    <div class="section-faq" id="section-faq">
                        <div class="">

                            <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                <div class="mb60  section-title text-center  ">
                                <h1 class=""><center>Rectify Credit Score</center></h1>
                                
                                
                                </div>
                            </div>

                             <div class="row">    
                       
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 300px;">
                                           
                        <div id="registration_form">
                            <form id="rectify_credit_form" name="rectify_credit_form" enctype="multipart/form-data" role="form" method="POST">
					                 {{ csrf_field() }}

					        <div class="col-md-12"><h4 class="hdr pad1 text-center">Registration Form</h4></div>
                             
                                    
                                      <!-- customer name -->
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input name="FirstName" id="first_name" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" placeholder="First Name"  required="">
                                      </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input name="LastName" id="last_name" type="text" class="form-control" onkeypress="return AllowAlphabet(event)" placeholder="Last Name"  required="">
                                      </div>
                                      </div>
                                     
                                      
                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
										                  <select id="MaritalStatus" name="MaritalStatus" class="form-control" required="">
                                      <option selected value=""  disabled>Marital Status</option>
                                      <option value="single">Single</option>
                                      <option value="married">Married</option>
                                      <option value="divorced">Divorced</option>
                                      </select>
										                  </div>
									                   </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
										                  <select id="Gender" name="Gender" class="form-control" required="">
                                      <option selected value=""  disabled>Gender</option>
                                      <option value="1">Male</option>
                                      <option value="2">Female</option>
                                      
                                      </select>
										                  </div>
									                    </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" class="form-control input-md" placeholder="Address" name="AddrLine1[]" maxlength="200"  required>
                                      </div>
                                      </div>
                                      

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <select id="AddressType" name="AddressType[]" class="form-control dropdown" required="">
                                      <option disabled selected value="" >Select Address Type</option>
                                      <option value="C">Present</option>
                                      <option value="P"> Permanent</option>
                                      <option value="O">Office</option>
                                      <option value="X">Other or Unspecified</option>
                                      </select>
                                      </div>
                                      </div>



                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <select name="State[]" class="form-control dropdown valid" required="">
                                      <option disabled="" selected="" value="">Select State</option>
                                      <option value="AN">Andaman &amp; Nicobar Islands</option>
                                      <option value="AP">Andhra Pradesh</option>
                                      <option value="AR">Arunachal Pradesh</option>
                                      <option value="AS">Assam</option>
                                      <option value="BR">Bihar</option>
                                      <option value="CH">Chandigarh</option>
                                      <option value="CG">Chhattisgarh</option>
                                      <option value="DN">Dadra &amp; Nagar Haveli</option>
                                      <option value="DD">Daman &amp; Diu</option>
                                      <option value="DL">Delhi</option>
                                      <option value="GA">Goa</option>
                                      <option value="GJ">Gujarat</option>
                                      <option value="HR">Haryana</option>
                                      <option value="HP">Himachal Pradesh</option>
                                      <option value="JK">Jammu &amp; Kashmir</option>
                                      <option value="JH">Jharkhand</option>
                                      <option value="KA">Karnataka</option>
                                      <option value="KL">Kerala</option>
                                      <option value="LD">Lakshadweep</option>
                                      <option value="MP">Madhya Pradesh</option>
                                      <option value="MH">Maharashtra</option>
                                      <option value="MN">Manipur</option>
                                      <option value="ML">Meghalaya</option>
                                      <option value="MZ">Mizoram</option>
                                      <option value="NL">Nagaland</option>
                                      <option value="OR">Orissa</option>
                                      <option value="PY">Pondicherry/Puducherry</option>
                                      <option value="PB">Punjab</option>
                                      <option value="RJ">Rajasthan</option>
                                      <option value="SK">Sikkim</option>
                                      <option value="TN">Tamil Nadu</option>
                                      <option value="TR">Tripura</option>
                                      <option value="UP">Uttar Pradesh</option>
                                      <option value="UL">Uttaranchal/Uttarakhand</option>
                                      <option value="WB">West Bengal</option>
                                      </select>
                                      </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" class=" form-control dropdown search_citynm" name="City[]" id="City" Placeholder="City" required>
                                      </div>
                                      </div>


									                  

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" name="Postal[]" id="Postal" class="form-input-new form-control" placeholder="Pincode" required="">
                                      </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" name="PANId" id="PANId" oninput="pancard('PANId')" style="text-transform:uppercase" class="form-control input-md" required minlength="10" maxlength="10" placeholder="PAN">
                                      <span id="pannumber" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid Pan Number.!!</span>
                                      </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" name="Email" id="mail" oninput="e_mail('mail')" class="form-control input-md" required placeholder="Email">
                                      <span id="mailing" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid Email Addr.!!</span>
                                      </div>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" class=" form-control input-md lastReporteddob" name="DOB" id="DOB" placeholder="Date Of Birth" readonly required>
                                      </div>
                                      </div>

                                      <input type="hidden" name="PhoneType" id="PhoneType" value="M">

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="text" name="MobilePhone" id="MobilePhone" minlength="10" maxlength="10" class="form-control input-md" onkeypress="return Numeric(event)" placeholder="Phone (Mobile)" required>
                                      </div>
                                      </div>

                                      <input type="hidden" name="InquiryPurpose" id="InquiryPurpose" value="00">

                                      <input type="hidden" name="TransactionAmount" id="TransactionAmount" value="0">

                                      <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                  	  <select class="form-control select-sty" name="Lang_Preferred" id="Lang_Preferred" required>
				                              <option selected disabled="" value="">Language Of Preference</option>
                  										<option value="hindi">Hindi</option>
                  										<option value="english">English</option>
                  										<option value="marathi">Marathi</option>
                  										<option value="punjabi">Punjabi</option>
                  										<option value="gujarati">Gujarati</option>
                  										<option value="malayalam">Malayalam</option>
                  										<option value="kannada">Kannada</option>
                  										<option value="tamil">Tamil</option>
                  										<option value="telugu">Telugu</option>
                  										<option value="bengali">Bengali</option>
                  										<option value="santali">Santali</option>
                  										<option value="odia">Odia</option>
                  										<option value="maithili">Maithili</option>
                  										<option value="other">Other</option>
							                        </select>
                                      </div>
                                      </div>

                                       <input type="hidden" name="AccountNumber[]" id="AccountNumber" value="">
                                       <input type="hidden" name="MiddleName" id="MiddleName" value="">
                                     
                                       <input type="hidden" name="Locality1[]" id="Locality1" value="">
                                       <input type="hidden" name="Locality2[]" id="Locality2" value="">
                                       <input type="hidden" name="PassportId" id="PassportId" value="">
                                       <input type="hidden" name="VoterId" id="VoterId" value="">
                                       <input type="hidden" name="DriverLicense" id="DriverLicense" value="">
                                       <input type="hidden" name="HomePhone" id="HomePhone" value="">
                                       <input type="hidden" name="NationalIdCard" id="NationalIdCard" value="">
                                       <input type="hidden" name="RationCard" id="RationCard" value="">
                                      

                                    <!--   <div class="col-md-12"><h4 class="hdr pad1 text-center">Upload Your Credit Report</h4></div> -->
                                      <!-- <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                      <input type="file" name="attachment" id="image_file" class="form-control"  required="">
                                      </div>
                                      </div>
                                      <div class="col-md-2"><h3 class="text-center"> -- OR --</h3></div>
                                      <div class="col-md-5"><h5 class="form-control">In case if you don't have <b>Credit Report</b>
                                      <a href="{{URL::to('http://www.rupeeboss.com/equifax-verification')}}">Click here</a></h5></div>
                                      <hr style="color:transparent; width:100%" />
                                      </br><br /> -->

                                      <div class="col-md-12">
                                      <a class="btn btn-default btn-sm" id="confirm_registration">Confirm And Proceed</a>
                                      </div>
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
</div>

@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="rectify-credit-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;" >Your Reference Id is <span id="App_Id"></span><h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary rectify_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rectify-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;">Oops!! Couldn't process due to <span id="error_message"></span> and <span id="reasn"></span>.<h5></p></h4>
        
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
    var d = new Date();
    var year = d.getFullYear()-21;
    d.setFullYear(year);

    $("#DOB").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });

    function pancard(obj,val){
        // console.log(obj);
        if(obj=='PANId' ){
                   var str =$('#PANId').val();
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


function e_mail(obj,val){
    // //console.log(obj);
    if(obj=='mail' ){
                   var str =$('#mail').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#mailing').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mailing').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
	$('#confirm_registration').click(function(){
 
  if (!$('#rectify_credit_form').valid()) {
  return false;
    }
    else
    {    

    	$.ajax({  
         url:"{{URL::to('rectify-submit')}}" ,  
          data:new FormData($("#rectify_credit_form")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
            console.log(msg.Ref_Id);
         if (msg.Status==1) {
            
             
             $('#App_Id').text(msg.Ref_Id);
             // $('#message').text(msg.message);
             $('#rectify-credit-popup').modal('show');
            }
            else{
             
             
             $('#error_message').text(msg.error_message);
             $('#reasn').text(msg.message);
              $('#rectify-popup-error').modal('show');
            } 
            
              
        }  
      });   
     }
  });
</script>

<script type="text/javascript">
  $('.rectify_proceed').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
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




