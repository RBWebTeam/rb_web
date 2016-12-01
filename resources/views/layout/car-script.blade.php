
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
<script>
   

   function changeTest(obj,val){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(val).style.display='block';
        
        $('#pop1').empty();
        if(val=='q2'){
        //  document.getElementById('q3').style.display='none';
        $('#pop1').append( "<p>Which car you want(manufacture-year)</p>" );
        }else if(val=='q3'){
          
          if(obj.value=="New Car"){
            document.getElementById('q2').style.display='none  ';
          }
          $('#pop1').append( "<p>Your Dream Car</p>" );
        }else if(val=='q4'){
          $('#pop1').append( "<p>Where do yo reside</p>" );
        }else if(val=='q5'){
          $('#pop1').append( "<p>Where do you work</p>" );

        }else if(val=='q6'){
          $('#pop1').append( "<p>Your monthly takehome salary!!</p>" );
        }else if(val=='q7'){
          $('#pop1').append( "<p>Your experience in the above company is</p>" );
           }else if(val=='q10'){
          $('#pop1').append( "<p>Where your Vitamin M(money/salary) get deposit into</p>" );
        }else if(val=='stay_in'){
          $('#pop1').append( "<p>You stay with</p>" );
        }else if(val=='stay_in'){
           $('#pop1').append( "<p>You stay with</p>" );
        }else if(val=='dob'){
           $('#pop1').append( "<p>I wonder if your birthday is today</p>" );
        }
        else{
           $('#pop1').append( "<p>Great !!! please proceed</p>" );
        }
        return false;
      }
       function changeDiv(prv,nxt){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(prv).style.display='none';
        document.getElementById(nxt).style.display='block';
        $('#pop1').empty();
        if(nxt=='step-2'){
          $('#pop1').append( "<p>Living in city since?</p>" );   
        }else if(nxt=='step-3'){
          $('#pop1').append( "<p>Tell us about the your residence</p>" );   
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
            }else if(obj=='q9'){
              $('#pop1').empty();
            $('#pop1').append( "<p>How you get your Vitamin M(money/salary)</p>" );
            }else{
            $('#pop1').empty();
            $('#pop1').append( "<p>Entr your total expierience</p>" );
          }
          
          document.getElementById(obj).style.display='block';
          return false;
      }
      
      function changeText(obj,val){
        $("#"+obj).keyup(function() {
            var x=$(this).val().length ;
            if ((obj=='total_sal' && x>=5)  ) {
            

            document.getElementById(val).style.display='block';
            return false;
          }
          else {
            document.getElementById(val).style.display='none';
            return false;
          }
           
      });

      $('#pop1').empty();
      if(val=='q4'){
           $('#pop1').append( "<p>Where do you reside</p>" );
        }else if(val=='exp'){
          $('#pop1').append( "<p>Entr your expierience in current company</p>" );
        }else if(val=='total_exp'){
          $('#pop1').append( "<p>How you recieve your salary</p>" );
        }else{
          $('#pop1').append( "<p>Entr your expierience in current company</p>" );
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


    
  //    $('#exst_loan_form input').on('change', function() {
  //   $('#exst_loan_detail').empty().append($('input[name=exst_loan]:checked', '#exst_loan_form').val());
  //   $('#page2').modal('toggle');
  //   changeTest(this,'q4');
  // });
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
//      $(function()
// {
//    $( "#q" ).autocomplete({
//     source: "search/autocomplete",
//     minLength: 3,
//     select: function(event, ui) {
//       $('#q').val(ui.item.value);
//     }
//   });
// });
  });


$('document').ready(function(){
/* $('#search-input').attr('autocomplete', 'on');*/
$("#q").autocomplete({
source : "{{ URL('search/autocomplete') }}",
minlength: 2  ,

       select: function(event,ui){

           $('#q').val(ui.item.value);
           console.log($('#q').val(ui.item.value));

            }
    });
});

   $(document).ready(function() {
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
    //console.log(form);return false;
    $form=$('#'+form);
    if(! $form.valid()){
      return false;
    }else{
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('otp')}}",
               dataType:"json",
               data : $('#'+form).serialize(),
               success: function(data){
                 var data_1=data['data'];
                // console.log(data_1);
                if(data_1==true){
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
    //console.log(form);return false;
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
                 //console.log(data_1);
                if(data_1==true){
                   // $.post('personal-loan-submit', $('#personal_loan_process_form').serialize());
                  
                     var form_name=$('#elem').parent().find('form').attr('id');
                     $.post('personal-loan-submit', $('#'+form_name).serialize());
                     
                    $('#otp_modal').modal('hide');
                  }else{
                    $('#otp_err').show();
                  }
               }  
      }); 
    }
  });

    });


</script>



	</body>
</html>
@include('layout.modal')
