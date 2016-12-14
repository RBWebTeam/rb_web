
    <script src="{{URL::to('js/modernizr-2.6.2.min.js')}}"></script>
        <!-- jQuery -->
    <script src="{{URL::to('js/jquery.min.js')}}"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="{{URL::to('emi/Chart.js')}}"></script>




    <script>
           $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
    // Avoid following the href location when clicking
    event.preventDefault(); 
    // Avoid having the menu to close when clicking
    event.stopPropagation(); 
    // Re-add .open to parent sub-menu item
    $(this).parent().addClass('open');
    $(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
});
    </script>
    <!-- function addede later -->

    <script type='text/javascript'>
  $(function(){
    $('.datepicker').datepicker({
        changeMonth: false,
        changeYear: true,
        showButtonPanel: true,
        yearRange: '1950:2017',
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 0, 1));
        }});
    });
</script>
<script>
     function changeTest(obj,val){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(val).style.display='block';
        
        $('#pop1').empty();
        if(val=='q2'){
        $('#pop1').append( "<p>Enter the amount you want</p>" );
        }else if(val=='q4'){
          $('#pop1').append( "<p>Any loan taken in past</p>" );
        }else if(val=='q5'){
          $('#pop1').append( "<p>Any credit card you have</p>" );
        }else if(val=='q6'){
          $('#pop1').append( "<p>Ever delayed EMI?</p>" );
        }else if(val=='m_sal'){
          $('#pop1').append( "<p>You net salary</p>" );
        }else if(val=='stay_in'){
           $('#pop1').append( "<p>You stay with</p>" );
        }else if(val=='dob'){
           $('#pop1').append( "<p>I wonder if your birthday is today</p>" );//now if else from car -praveen
        }else if(val=='manufacture'){
        document.getElementById('preferred').style.display='none';
        document.getElementById('work_at').style.display='none';
        document.getElementById('takehome_sal').style.display='none ';
        document.getElementById('exp').style.display='none ';
        document.getElementById('total_exp').style.display='none';
        document.getElementById('salary_by').style.display='none';
        document.getElementById('salary_deposit').style.display='none';
        document.getElementById('amt_borrow').style.display='none';
        document.getElementById('car_step1').style.display='none';

        $('#pop1').append( "<p>Which car you want(manufacture-year)</p>" );
        }else if(val=='preferred'){
          if(obj.value=="New Car"){
            
            document.getElementById('manufacture').style.display='none  ';
            document.getElementById('work_at').style.display='none';
            document.getElementById('takehome_sal').style.display='none ';
            document.getElementById('exp').style.display='none ';
            document.getElementById('total_exp').style.display='none';
            document.getElementById('salary_by').style.display='none';
            document.getElementById('salary_deposit').style.display='none';
            document.getElementById('amt_borrow').style.display='none';
           document.getElementById('car_step1').style.display='none';

          }
          $('#pop1').append( "<p>Your Dream Car</p>" );
        }else if(val=='living_currently'){
          $('#pop1').append( "<p>Where do yo reside</p>" );
        }else if(val=='work_at'){
          $('#pop1').append( "<p>Where do you work</p>" );

        }else if(val=='takehome_sal'){
          $('#pop1').append( "<p>Your monthly takehome salary!!</p>" );
        }else if(val=='exp'){
          $('#pop1').append( "<p>Your experience in the above company is</p>" );
           }else if(val=='salary_deposit'){
          $('#pop1').append( "<p>Where your money/salary get deposit into</p>" );
        }else if(val=='amt_borrow'){
          $('#pop1').append("<p>Amount to be borrowed</p>");
        }
        else if(val=='living_in'){
          $('#pop1').append( "<p>You stay with</p>" );
        }else if(val=='birth'){
           $('#pop1').append( "<p>I wonder if your birthday is today</p>" );
        }else if(val=='type_of_profession'){ //business loan script
          //console.log(val);

          document.getElementById('type_of_emp_profession').style.display='none';
          $('#type_of_emp_profession').value="";
          document.getElementById('gross_annual').style.display='none';
           $('#gross_annual').value="";
          document.getElementById('desired_amt').style.display='none';
           $('#desired_amt').value="";
          document.getElementById('residence').style.display='none';
            $('#residence').value="";
          document.getElementById('btn_step1').style.display='none';
           $('#pop1').append( "<p>Select your business</p>" );
        }else if(val=='turnover'){
          //console.log(val);
           $('#pop1').append( "<p>Enter your gross annual sales/turnover</p>" );
        }else if(val=='emi_pay'){
           $('#pop1').append( "<p>How much total EMI you pay currently</p>" );
        }else if(val=='pan_card'){
           $('#pop1').append( "<p>Please enter your pan card number</p>" );
        }else if(val=='type_of_emp_profession'){
          //console.log(val);
          document.getElementById('type_of_profession').style.display='none';
          $('#type_of_profession').value="";
          document.getElementById('turnover').style.display='none';
           $('#turnover').value="";
          document.getElementById('desired_amt').style.display='none';
          $('#desired_amt').value="";
          document.getElementById('residence').style.display='none';
             $('#residence').value="";
          document.getElementById('btn_step1').style.display='none';
           $('#pop1').append( "<p>Select your profession</p>" );
        }else if(val=='gross_annual'){
           $('#pop1').append( "<p>Enter your gross annual reciept</p>" );
        }else{
           $('#pop1').append( "<p>Please Proceed</p>" );
        }
        return false;
      }


       function changeDiv(prv,nxt){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(prv).style.display='none';
        document.getElementById(nxt).style.display='block';
        $('#pop1').empty();
        if(nxt=='step-2'){
          $('#pop1').append( "<p>Where do you work?</p>" );   
        }else if(nxt=='step-3'){
          $('#pop1').append( "<p>Tell us about the your residence</p>" );   
        }else if(nxt=='start-2'){
          $('#pop1').append( "<p>Living in city since?</p>" );   //of car loan by praveen
        }else{
          $('#pop1').append( "<p>Great! please fill this form too</p>" );
        }
        window.scrollTo(0, 0);
        return false;
      }

  function yr_months(yr,mnth,obj){

        //alert(obj.options[obj.selectedIndex].value);
        var m=$("#"+mnth).val();
        var y= parseInt($("#"+mnth).val(),10) /12;
        var new_y=parseInt(y,10);
        if(m>=12)
          {
            var new_m=parseInt($("#"+mnth).val(),10) % 12;
            $('#'+yr).empty();
            $('#'+yr).val(parseInt($("#"+yr).val(),10)+new_y);
            $('#'+mnth).empty();
            $('#'+mnth).val(new_m);
            $('#pop1').empty();
            $('#pop1').append( "<p>1 year has 12 months only</p>" );
            }else if(obj=='sal_rcv_by' || obj=='salary_by'){
              $('#pop1').empty();
            $('#pop1').append( "<p>How you get your Vitamin M(money/salary)</p>" );
            }else{
            $('#pop1').empty();
            $('#pop1').append( "<p>Great!! tell us more</p>" );
          }
          
          document.getElementById(obj).style.display='block';
          return false;
      }
      
      function changeText(obj,val){
        $("#"+obj).keyup(function() {
            //pan card validation code 
            if(obj=='card'){
               var str =$('#card').val();
               var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
               var res = str.match(pancardPattern);
               if(res){
                $('#pop1').empty();
                $('#pop1').append( "<p>Great!! tell us more</p>" );
                 document.getElementById(val).style.display='block';
               }else{
                $('#pop1').empty();
                $('#pop1').append( "<p>Enter correct pan card number</p>" );
                document.getElementById(val).style.display='none';
               }
               return false;
            }

          //Rest code for text fields with numbers
            var x=$(this).val().length ;
            if (((obj=='total_sal' || obj=='loan') && x>6) ||(x>=5 && x<=8) ) {
              document.getElementById(val).style.display='block';
            return false;
          }
          else {
            if(x>8){
            $('#pop1').empty();
            $('#pop1').append( "<p>We dont provide that much of loan.</p>" );
            } if(obj=='annual_receipt' ||  obj=='total_emi'){
                document.getElementById(val).style.display='block';
                $('#pop1').empty();
                $('#pop1').append( "<p>Please Proceed</p>" );
            }if(x<5){
            document.getElementById(val).style.display='none';
           }if(obj=='pincode'){
                document.getElementById(val).style.display='block';
                $('#pop1').empty();
                $('#pop1').append( "<p>Enter your  pincode</p>" );
            }if(x<6){
            document.getElementById(val).style.display='none';
           }
            return false;
          }
           
      });

      $('#pop1').empty();
      if(val=='q3'){
           $('#pop1').append( "<p>Have any existing loan</p>" );
        }else if(val=='exp'){
          $('#pop1').append( "<p>Entr your expierience in current company</p>" );
        }else if(val=='total_exp'){
          $('#pop1').append( "<p>Entr your total expierience</p>" );
        }else if(val=='desired_amt'){ 
        //business loan script//
          $('#pop1').append( "<p>Enter your desired loan amount</p>" );
        }else if(val=='residence'){
          $('#pop1').append( "<p>Where do you reside and since when</p>" );
        }else if(val=='date_birth'){
          $('#pop1').append( "<p>I wonder if your birthday is today</p>" );
        }else if(val=='residence_pincode'){
          $('#pop1').append( "<p>Enter your residence pincode</p>" );
        }else{
          $('#pop1').append( "<p>Please go on</p>" );
        }
}

      function fnAllowNumeric(evt) {
      evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
          }
        return true;
      }

</script>
<script>

$(document).ready(function(){
    $(".hide-dv").click(function(){
        $(".sidebar").hide("fast");
        $(".arrow-don").show("fast");
    });
    $(".arrow-don").click(function(){
        $(".sidebar").show("fast");
        $(".arrow-don").hide("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $(".chat").click(function(){
        $(".chat-win").toggle();
     });
    });
  </script> 
  <script>
   $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    </script>
	<!-- jQuery Easing -->
	<script src="{{URL::to('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{URL::to('js/jquery.waypoints.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{URL::to('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{URL::to('js/chatbox.js')}}"></script>
    	<!-- ChatBox -->
	<!-- MAIN JS -->
	<script src="{{URL::to('js/main.js')}}"></script>

<script type='text/javascript'>
    $.fn.bootstrapCarousel = $.fn.carousel;
    delete $.fn.carousel;
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.pop_up').click(function(){
       // console.log($(this).closest("form").attr('id'));
       var span_name=$(this).parent().find('input').attr('id');
       var modal_name=$(this).parent().find('a').attr('data-target');
       var form_name=$(modal_name).find('form').attr('id');
        $('#'+form_name +' input').on('change', function() {
       var input_name=$('#'+form_name).find('input').attr('name');   
       var append=$('input[name='+input_name+']:checked','#'+form_name).val();
        //  console.log($('#'+span_name));
        $('#'+span_name).val(append);
        $(modal_name).modal('hide');
        
      });
    });

     $(".sidebar-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //console.log(form);return false;
    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('sidebar')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
                if(msg=='true'){
                  $form.hide();
                  $('.msg').show();
                }else{
                  $form.hide();
                  $('.msg_err').show();
                }
                //console.log(msg);
               }  
               }); 
    }
  });
});
//search city autocomplete
// $('document').ready(function(){
//         /* $('#search-input').attr('autocomplete', 'on');*/
//         $("#q").autocomplete({
//         source : "{{ URL('search/autocomplete') }}",
//         minlength: 3,
//        select: function(event,ui){
//            $('#q').val(ui.item.value);
//             }
//       });
// });

   $(document).ready(function(){
    src = "{{ route('searchajax') }}";
     $(".search_city").autocomplete({
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
        min_length: 3,
       
    });

});
//city search ends here
$(document).ready(function(){
   $("#send_otp_button").click(function(event){
    event.preventDefault();
    
    var form=$(this).closest("form").attr('id');   
    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      $('#send_otp_button').hide();
    $('#pls_wait').show();
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('otp')}}",
               dataType:"json",
               data : $('#'+form).serialize(),
               success: function(data){
                 var data_1=data['data'];
                if(data_1==true){
                    $('#otp_modal').modal('toggle');
                    $('#login').modal('hide');
                  }else{
                    $('#msg_err').show();
                     
                  }
               }  
      }); 
    }
  });

   $("#verify_otp").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    $('#wait').show();
    $('#verify_otp').hide();
    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('otp_verify')}}",
               dataType:"json",
               data : $('#'+form).serialize(),
               success: function(data){
                 var data_1=data['data'];
                if(data_1==true){
                     var form_name=$('#elem').parent().find('form').attr('id');
                     $.post('personal-loan-submit', $('#'+form_name).serialize());

                    $('#otp_modal').modal('hide');
                  }else{
                    $('#otp_err').show();
                    $('#wait').hide();
                    $('#verify_otp').show();
                  }
               }  
      }); 
    }
  });

  $('.product_name').click(function (){
    var prod_name=$('#product').val();
    $('#product_login').val(prod_name);
  });

  
  


    });

  //get location of the person on load chrome
//   window.onload = function() {
//   var startPos;
//   var geoSuccess = function(position) {
//     startPos = position;
//     var lat= startPos.coords.latitude;
//     var log = startPos.coords.longitude;
//    // console.log(lat);
//  // console.log(log);
//   };
//   navigator.geolocation.getCurrentPosition(geoSuccess);


// };


</script>

	</body>
</html>
<!-- login Start-->
    <div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Fill details</h4>
      </div>
      <div >
     <div> 
   <div id="send_otp">  
    <form class="form-horizontal" id="login_form" method="POST">
     {{ csrf_field() }}
   
    <div class="form-group">
    
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="your good name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="contact" class="col-sm-2 control-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact number"  pattern="[789][0-9]{9}" required maxlength="10" minlength="10" onkeypress="return fnAllowNumeric(event)">
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-10">
     <span id='msg_err' style="display: none;">oops something went wrong</span>
     <span id='pls_wait' style="display: none;color: red;">Please wait .....</span>
    </div>

  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="product" id="product_login" value="">
      <a class="btn btn-default"  id="send_otp_button" >Send OTP</a>
    </div>
  </div>
  </form>
  </div>
      </div>
      </div>
      
    </div>
   
  </div>
</div>

<!-- login end-->
<!-- otp Start-->
<div id="otp_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enter OTP</h4>
        <form id="otp_form" class="form-horizontal">
         {{ csrf_field() }}
         <input type="text" class="form-control" name="otp" id="otp" minlength="6" maxlength="6" required onkeypress="return fnAllowNumeric(event)">
         <span id='otp_err' style="display: none; color: red">oops!! OTP is wrong</span><br>
         <button class="btn btn-default"  class="form-control" id="verify_otp" >Verify</button><br>
         </form>
      </div>
    </div>
  </div>
</div>

<!-- otp end-->

@include('layout.modal')
