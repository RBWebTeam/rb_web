
    <script src="{{URL::to('js/modernizr-2.6.2.min.js')}}"></script>
        <!-- jQuery -->
    <script src="{{URL::to('js/jquery.min.js')}}"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="{{URL::to('emi/Chart.js')}}"></script>
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


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
          $('#self_q').hide();
          $('#self_q2').hide();
          $('#self_q3').hide();
          $("#q2_year").hide();
          $('#profit').val('');
          $('#depreciation').val('');
          $('#remuneration').val('');
          $("#income_year").val('');
          $('#pop1').append( "<p>Enter your net Income</p>" );
        }else  if(val=='q5'){
            $('#pop1').empty();
            $('#pop1').append( "<p>Loan amount you wants to borrow</p>" );
            $("#q4").hide();
        }else  if(val=='q2_year'){
          $('#pop1').append( "<p>Enter your net Income</p>" );
          $("#q2").hide();
          $('#income').val('');
        }else if(val=='co_sal'){
           $('#co_self').hide();
          $('#co_self_q2').hide();
          $('#co_self_q3').hide();
          $('#co_profit_all').hide();
          $('#co_profit').val('');
          $('#co_depreciation').val('');
          $("#co_income_year").val('');
          $('#co_remuneration').val('');
        }else if(val=='co_self'){
          $('#co_sal').hide();
          $('#income').val('');
          $('#pop1').empty();
          $('#pop1').append( "<p>Enter your net Income</p>" );
        }
        else{
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
            //pan card validation
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
           
            if ((obj=='loan_tenure')||((obj=='total_sal' || obj=='loan') && x>6) ||(x>=5 && x<=8) ) {
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
        }else if(val=='q6'){
          $('#pop1').append( "<p>Enter your loan tenure</p>" );
        }else if(val=='q7'){
          $('#pop1').append( "<p>I wonder if your birthday is today</p>" );
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
        $("#sidebar").hide("fast");
        $(".arrow-don").show("fast");
    });
    $(".arrow-don").click(function(){
        $(".sidebar").show("fast");
        $(".arrow-don").hide("fast");
    });
    $("#co_button").click(function(){
        $("#have_co_applicant").val("yes");
    });
    $("#no_co_app").click(function(){
        $("#have_co_applicant").val("no");
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
       var input_name_id=$('input[name='+input_name+']:checked','#'+form_name).attr('data-value');
         //console.log(input_name_id);
        $('#'+span_name).val(append);
        $('#'+span_name+'_id').val(input_name_id);
        $(modal_name).modal('hide');
        
      });
    });

     $(".sidebar-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //return false;
    console.log(form);

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


       // ...login...dp..

//        if(form=="login_form"){


//          if(! $form.valid()){
//          }else{
             
//              $.ajax({  
//                type: "POST",  
//                url: "{{URL::to('login')}}",
//                data : $('#'+form).serialize(),
//                success: function(msg){
              
//                      $("#login_form").show();
//                      if(msg=="email"){



//             $("#msg").text("Your email or password is incorrect. please try again?");               
//                      }else if(msg=="right"){


//                        window.location.href ='http://localhost:8000/';
//                      }


//                }  
//            }); 


//    }
// }

 
//    // ...registration_form...dp..
//        if(form=="registration_form"){
//          if(! $form.valid()){
//          }else{

 
//           $.ajax({  
//                type: "POST",  
//                url: "{{URL::to('registration')}}",
//                data : $('#'+form).serialize(),
//                success: function(msg){
                
//                 if(msg=='1'){
//                   $("#registration1").show();
//                   $form.show();
//                   $("#errors").text("password and confirm password does not match");
//                  }else if(msg=="2"){
//                   $("#registration1").show();
//                   $form.show();
//                   $("#erroremail").text("Email already exist in our database");
//                 }else if(msg=="3"){
//                  window.location.href ='http://localhost:8000/';

//                 }else{
                 
//                   // $form.hide();
//                   // $('.msg').show();
//                 }
//                 //console.log(msg);
//                }  
//                }); 

//          }
       
//        }

//        //end by dp

  });


// by dp

$(".login-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //console.log(form);return false;
         $form=$('#'+form);
         if(! $form.valid()){
         }else{
          var s=$('#'+form).serialize();

             $.ajax({  
               type: "POST",  
               url: "{{URL::to('login')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
              
                     $("#login_form").show();
                     if(msg=="email"){



            $("#msg").text("Your email or password is incorrect. please try again?");               
                     }else if(msg=="right"){


                       window.location.href ="{{URL::to('profile')}}";
                     }


               }  
           }); 
   }

 });

// ...registration_form...dp..
$(".registration-submit").click(function(event){
    event.preventDefault();
    var form=$(this).closest("form").attr('id');
    //console.log(form);return false;
         $form=$('#'+form);
         if(! $form.valid()){
         }else{
          $.ajax({  
               type: "POST",  
               url: "{{URL::to('registration')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
                
                if(msg=='1'){
                  $("#registration1").show();
                  $form.show();
                  $("#errors").text("password and confirm password does not match");
                 }else if(msg=="2"){
                  $("#registration1").show();
                  $form.show();
                  $("#erroremail").text("Email already exist in our database");
                }else if(msg=="3"){
                 window.location.href ='http://localhost:8000/';

                }else{
                 
                  // $form.hide();
                  // $('.msg').show();
                }
                //console.log(msg);

               }  
           }); 

         }
    
   });
       //end by dp


});

$('document').ready(function(){
        /* $('#search-input').attr('autocomplete', 'on');*/
        $("#q").autocomplete({
        source : "{{ URL('search/autocomplete') }}",
        minlength: 2  ,
       select: function(event,ui){
           $('#q').val(ui.item.value);
            }
      });
});

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
                    $('#login_process').modal('hide');
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
                     //$.post('loan-submit', $('#'+form_name).serialize());
                     $('#'+form_name).submit();
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
<!-- //emi scripts started -->
<script type="text/javascript">

  $(document).ready(function(){
    $("#Month").change(function(){
      var amt = $("#loanterm").val();
      var month = amt *12;
      //console.log(month);
      $('#loanterm').val(month);
    });
    $("#Year").change(function(){
      var amt1 = $("#loanterm").val();
      var yr = amt1 / 12;
      //console.log(year);
      $('#loanterm').val(yr);
    });
    });
</script>

<script type="text/javascript">

  function myfun(){
    var lm = $("#loanamount").val().length;
       var lin = $("#loaninterest").val().length;
       var lt = $("#loanterm").val().length;
       if(lm >0 && lin >0 && lt>0){
      //  var loanamount = $("#loanamount").val();
      //  var loaninterest = $("#loaninterest").val();
      //  var loanterm = $("#loanterm").val();

      //  var monthlyInterestRatio = (loaninterest/100)/12;
  
      //  var top = Math.pow((1+loaninterest),loanterm);
      //  var bottom = top -1;
      //  var sp = top / bottom;
      //  var emi = ((loanamount * monthlyInterestRatio) * sp);
      //  console.log(emi);
      var loanamount = $("#loanamount").val();
      var loaninterest = $("#loaninterest").val();
      

      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
      }else{
        var loanterm = $("#loanterm").val();
      }
      //console.log(loanterm);
      var v_token = "{{csrf_token()}}";
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('emi_cal')}}",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm, '_token': v_token},
               success: function(msg){
               // console.log(msg);
                change(msg.amount,msg.ttl_pay,msg.ttl_payment);
                emibreakup(msg.amount,loanamount,loaninterest,loanterm);
                 var numb = msg.amount.toFixed();
                  $('#emi').empty().append(numb);
                  var numb1 = msg.ttl_pay.toFixed();
                  $('#emi1').empty().append(numb1);
                   var numb2 = msg.ttl_payment.toFixed();
                  $('#emi2').empty().append(numb2);
                   $("#1").show();
                   $("#2").show();
                   $("#3").show();
                   //console.log(msg.saving);
               }  
               }); 
        //myfun1(document.getElementById('emi').innerHTML,document.getElementById('emi1').innerHTML,document.getElementById('emi2').innerHTML);
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }
  function change(a,b,c){
    //console.log(a);
      var ctx = $("#mycanvas").get(0).getContext("2d");
      //console.log(a);
        //pie Chart data
        //sum of values = 360
        var data = [
          {
            value: a,
            color: "#c2da6b",
            highlight: "#c2da6b",
            label: "Loan EMI"
          },
          {
            value: b,
            color: "#00B9B9",
            highlight: "#00B9B9",
            label: "Total Payable Interest "
          },
          {
            value: c,
            color: "#4A9ACF",
            highlight: "#4A9ACF",
            label: "Total Payment(Principal + Interest)"
          }
        ];

        //alert("draw")
        var piechart = new Chart(ctx).Pie(data);
      }
       var month=new Array();

  month[0]="Jan",month[1]="Feb",month[2]="Mar",month[3]="Apr",month[4]="May",month[5]="Jun",month[6]="Jul",month[7]="Aug",month[8]="Sep",month[9]="Oct",month[10]="Nov",month[11]="Dec";
function emibreakup(E,P,r,n)

{// console.log(E);console.log(P);console.log(r);console.log(n);
    var start=new Date(),
    myArray = [], int =r/100, mir=int/12, mi='', map='',lP=P,
    xd='',
    tempDate = start, 
    monthCount = 1,
  fdr='<table><thead><tr><th bgcolor="#c2da6b" class="mthy">Month-Year</th><th bgcolor="4A9ACF" class="pa">Principal(A)</th><th bgcolor="2DC6D1" class="int">Interest(B)</th><th bgcolor="BF5850" class="tp">Total Payment(A + B)</th><th bgcolor="D8BC31" class="tbal">Balance</th></tr></thead><tbody>';
     
    var color='white';
    for(var i=0;i<n;i++)
    {

      if (tempDate.getFullYear()%2==0) 
      {
        //console.log(tempDate.getFullYear());

        color='lightblue';
      }
      else
      {
        //console.log("in else");
        color='#ffc8c4';
      }

        var e=tempDate.getMonth()+1;
        mi=lP*mir;
        map=E-mi;
        lP=lP-map;
        fdr+='<tr style="background-color:'+color+'"><td class="mthy">'+month[tempDate.getMonth()]+'-'+tempDate.getFullYear()+'</td><td class="pa"><span class="WebRupee"> ₹ </span>'+CommaFormatted(Math.round(E-mi))+'</td><td class="int"><span class="WebRupee">₹ </span>'+CommaFormatted(Math.round(mi))+'</td><td class="tp"><span class="WebRupee">₹ </span>'+CommaFormatted(Math.round(E))+'</td><td class="tbal"><span class="WebRupee"> ₹ </span>'+CommaFormatted(Math.round(lP))+'</td></tr>';
        tempDate.setMonth(e);
    }

    fdr+='</tbody></table>';
    $('#emipaymenttable').html(fdr);
}
  function CommaFormatted(amount) {
    var numberStr = amount.toString();
    var thousandsMatcher = /(\d+)(\d{3})$/;
    var thousandsAndRest = thousandsMatcher.exec(numberStr);
    if (!thousandsAndRest) return numberStr;
        return thousandsAndRest[1].replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + thousandsAndRest[2];
    }
  </script>
<!-- emi scripts end -->

<!-- login Start-->
    <div id="login_process" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Fill details</h4>
      </div>
      <div >
     <div> 
   <div id="send_otp">  
    <form class="form-horizontal" id="login_form_process" method="POST">
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
      <button class="btn btn-default"  id="send_otp_button" >Send OTP</button>
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


	</body>
</html>


