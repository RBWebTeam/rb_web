@include('layout.header')
<body class="">
  
    <div class="iifl-image">
    <img src="images/equifax.png">
    </div>
    <div class=" ">


    <div class=" ">
        <!-- content start -->



<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                <div class="mb60  section-title text-center  ">
                                <h1 class=""><center>Equifax credit Score</center></h1>
                                
                                </div>
                                </div>
                                
                                <div class="row">    
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 830px;">
                     <form id="equifax_form" method="POST" >
                     {{ csrf_field() }}
                        <div class="col-md-12"><h4 >Consumer Name And Address </h4></div>
                       
                            <!-- Text input-->
                            <div class="col-md-12" style="display: none;">
                         <div class="white-bg box-shadow pad thank-u">
                             <img src="images/thank-you-sign.png" width="80" height="80" class="img-responsive center-img thank-sig"/>

                             <h1 class="thank-txt text-center">Thank You!</h1>
                             
                             <br><br>
                             <h4 class="text-center h4-txt">Click on Below Button For Download Credit Report</h4>
                             
                             <button class="downld-btn">DOWNLOAD PDF</button>
                         </div>
                        </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                 <input type="text" name="FirstName" id="FirstName" maxlength="40"   onkeypress="return AllowAlphabet(event)" class="form-control input-md" Placeholder="First Name" required >
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="MiddleName" id="MiddleName"  maxlength="40"  onkeypress="return AllowAlphabet(event)" class="form-control input-md" Placeholder="Middle Name" >
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="LastName" id="LastName" maxlength="40"  onkeypress="return AllowAlphabet(event)" class="form-control input-md"  Placeholder="Last Name" required>
                            </div>
                            </div>
                            
                            
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="MaritalStatus">Marital Status</label>
                                <select id="MaritalStatus" name="MaritalStatus" class="form-control" required="">
                                    <option selected value=""  disabled>Marital Status</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                            </div>
                            </div>


                            <hr style="color:transparent; width:100%">


                         
                         
 <div>
  <div>
    <div class="panel-heading">
      <h4 class="panel-title">
        
        <div class="col-md-12">ADDRESS INFORMATION </div>
      </h4>
    </div>
    <div>
      <div >
      
      <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
            <input type="text" class="form-control input-md" placeholder="Address" name="AddressLine[]" maxlength="200"  required></input>
            </div>
        </div>
        
         <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="AddressType">Select Address Type</label>
                                <select id="AddressType" name="AddressType[]" class="form-control dropdown" required="">
                                    <option disabled selected value="" >Select Address Type</option>
                                       <option value="C">Current or Present</option>
                                       <option value="P"> Permanent</option>
                                       <option value="O">Office</option>
                                       <option value="X">Other or Unspecified</option>
                                </select>
                            </div>
                            </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
             <input type="text" name="Locality1" id="Locality1" maxlength="40" Placeholder="Locality 1" maxlength="40" class="form-control input-md"  required>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;">
            <div class="form-group">
           <input type="text" name="Locality2[]" id="Locality2" maxlength="40" class="form-control input-md" Placeholder="Locality 2"  >
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
         <div class="form-group">
         <label class="control-label sr-only" for="City">Select City</label>
         
          <input type="text" class=" form-control dropdown search_citynm" name="City[]" id="City" Placeholder="City" required>
           </div>
           </div>
           
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
           <input type="text" name="Postal[]" id="Postal" onkeypress="return Numeric(event)" required minlength="6" maxlength="6" class="form-control input-md" Placeholder="Postal Pin">
            </div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
         <div class="form-group">
         <select name="State[]" class="form-control dropdown" required>
                           <option disabled selected value="" >Select State</option>
                           @foreach($state as $value)
                         <option value="{{$value->state_code}}">{{$value->state_name}}</option>
                        @endforeach
                       </select>
           </div>
           </div>
        
      
      
      </div>
    </div>
  </div>
  
</div>
                         

                           <div class="col-md-12"> <h4 >Consumer id And Personal Information</h4></div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="PANId" id="PANId" oninput="pancard('PANId')" style="text-transform:uppercase" class="form-control input-md" required minlength="10" maxlength="10" placeholder="PAN">
                                <span id="pannumber" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid Pan Number.!!</span>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12"  style="display: none;">
                            <div class="form-group">
                                <input type="text" name="PassportId" id="PassportId" minlength="7" maxlength="20" class="form-control input-md" placeholder="Passport ID">
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="VoterId" id="VoterId" oninput="voterid('VoterId')"  maxlength="10" placeholder="Voter ID" class="form-control input-md">
                                <span id="voternumber" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid VoterId Number.!!</span>
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="DriverLicense" id="DriverLicense" maxlength="20" placeholder="Driving Licence"  class="form-control input-md">
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                 <input type="text" class=" form-control input-md lastReporteddob" name="DOB" id="DOB" placeholder="Date Of Birth"  required>
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                           <div class="form-group">
                           <label class="control-label sr-only" for="Gender">Gender</label>
                           <select id="Gender" name="Gender" class="form-control dropdown" required>
                          <option selected disabled="">Select Gender</option> 
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                          </select>
                           </div>
                          </div>
                          
                          <div class="col-md-4 col-sm-12 col-xs-12">
                           <div class="form-group">
                           <select name="PhoneType" class="form-control dropdown" required>
                                       <option disabled selected value="" >Select Phone Type</option>
                                       @foreach($phone as $value)
                                     <option value="{{$value->phone_type_code}}">{{$value->phone_type}}</option>
                                    @endforeach
                                   </select>
                           </div>
                          </div>
                          
                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="MobilePhone" id="MobilePhone" minlength="10" maxlength="10" class="form-control input-md" onkeypress="return Numeric(event)" placeholder="Phone (Mobile)" required>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12" style="display: none;">
                            <div class="form-group">
                                 <input type="text" name="HomePhone" id="HomePhone" onkeypress="return Numeric(event)" minlength="5" maxlength="12" class="form-control input-md" placeholder="Phone (Home)" >
                            </div>
                            </div>
                            
                             <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="AccountNumber[0]" id="" mixnlength="11" maxlength="16" placeholder="Saving/Current Account No" class="form-control input-md"  required>
                           
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select name="InquiryPurpose" class="form-control dropdown" id="InquiryPurpose" required>
                                 <option disabled selected value="" class="text-danger">Inquiry Purpose</option>
                                 @foreach($inq as $value)
                                 <option value="{{$value->inquiry_code}}">{{$value->inquiry_purpose}}</option>
                                 @endforeach
                                </select>
                           
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="TransactionAmount" id="TransactionAmount"   onkeypress="return Numeric(event)" placeholder="Transaction Amount" minlength="5" maxlength="9" class="form-control input-md" required>
                           
                            </div>
                            </div>
                           
                           <div class="col-md-6" style="display: none;">
                                <input type="text" name="NationalIdCard" id="NationalIdCard" maxlength="20" placeholder="National ID Card (UIN)" >
                                 
                                </div>
                            <div class="col-md-6" style="display: none;">
                                <input type="text" name="RationCard" id="RationCard" maxlength="20" placeholder="Ration Card" >
                               
                                </div>



                              <div class="col-md-12 white-bg ">
           <div class="col-md-12">
                    <input type="checkbox"  name="terms" required>
                                            I hereby confirm that I have read and understood the <b>Rupeeboss Terms</b> and Conditions applicable to this service and that all the details furnished by me above are true and correct.
                                            I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.
                                            </div>
                                            </div>
                                            
         

                            <div class="col-md-12">
                                    
                            <!-- <button type="submit" class="btn btn-default btn-sm">SUBMIT</button> -->
                            <a class="btn btn-default btn-sm mrg-top" id="equifax_submit">Submit</a>

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
</body>



@include('layout.script')
@include('layout.footer')

<script type="text/javascript">
  function AllowAlphabet(e){
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else{
    // alert('Please Enter Only Character values.');
    return false;
      }
}


 function Numeric(event) {
      if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode != 8) {
          event.keyCode = 0;
          return false;
      }
    }


</script>

<script type="text/javascript">
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
</script>

<script type="text/javascript">
    function voterid(obj,val){
        // console.log(obj);
        if(obj=='VoterId' ){
                   var str =$('#VoterId').val();
                   var voteridPattern = /^([a-zA-Z]{4})(\d{6})$/;
                   var res = str.match(voteridPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                         $('#voternumber').hide();
                         // $('.credit-submit').show();

                  }else{
                      // console.log('Oops.Please Enter Valid Pan Number.!!');
                      $('#voternumber').show();
                      // $('.credit-submit').hide();

                      return false;
                  }
                 
    }
}
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()-21 ;
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

<script type="text/javascript">
    $('#equifax_submit').click(function(){
       
   
      if(! $('#equifax_form').valid())
       {
             
              
              return false;
             
        }
        else{
            $('.iframeloading').show();
           $('#equi_score').empty();
           $('.equi_msg_err').addClass('displaynone');
        $.ajax({ 
         type: "POST", 
         url: "{{URL::to('equifax-query')}}",
         data : $('#equifax_form').serialize(),
         success: function(msg){
               if (msg.constructor ===  {}.constructor) {
                    json=msg;
                }else{
                    json=JSON.parse(msg);
                }
              
               //console.log(json);
              if(json.status==1){
                  $('.equi_doc_link').attr("href","{{URL::to('/uploads/PDF')}}/"+json.name);
                  $('.equi_doc_link').show();
                  $('#equi_score').append(json.score[0]);
              }else{
                  $('.equi_msg_err').append(json.err);
                  $('.equi_msg_err').removeClass('displaynone');
                  $('.equi_doc_link').hide();
              }
              $('.iframeloading').hide();
              $('#equifax_modal').modal('show');
             
        },


      });  
     }
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
