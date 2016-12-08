
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
     function popup(val){
          var obj=new Object;
              obj.empty=$('#popup').empty();
              obj.append=$('#popup').append(val);
              return obj;
     }
     function show_hide(val,vis){
                  var dis;
                       if(vis==1){
                           dis="block";
                       }
                       if(vis==0){
                          dis="none";
                       }
           var doc=document.getElementById(val).style.display=dis;
        return doc;
     }

   function commaSeparateNumber(index, val) {
    val = val.replace(/\D/g, '');
    var array = val.split('');
    var index = -3;
    while (array.length + index > 0) {
        array.splice(index, 0, ',');
        // Decrement by 4 since we just added another unit to the array.
        index -= 4;
    }
    return array.join('');
};

     
   function loanAgainstfn(f1,f2,f3){
  
            if(arguments.length==0){
             }else if(arguments.length==1){

               if(f1=='step_2'){       
                  
                 popup("you are currently residing ");           
                 show_hide("step2ofagiansp",1);
                 show_hide("step1ofagiansp",0);
              

              }

              if(f1=='step_1'){
               show_hide("step2ofagiansp",0);
               show_hide("step1ofagiansp",1);

              }
              if(f1=='step_3'){
                
               popup("relationship with co-borrower ");
               show_hide("step3ofagiansp",1);
               show_hide("step2ofagiansp",0);
               show_hide("step1ofagiansp",0);
              }
              if(f1=='step_2_of3'){
               
               show_hide("step3ofagiansp",0);
               show_hide("step2ofagiansp",1);
               show_hide("step1ofagiansp",0);
                   
              }



                 
             }else if(arguments.length==2){
                   
                  if(f2=='against2qe'){
                            console.log(f1.value+f2);
                            popup("What is your property value");
                            show_hide("agains_value",1);
                  }else if(f2=='against3qe'){
                        if(f1.value.length>5){
                            popup("Choose your property city ");
                            show_hide("livehere",1);
                      }else{
                            popup("Please enter an amount greater than Rs 1,00,000");
                            show_hide("livehere",0);
                      }
                 }else if(f2=='city_live'){                          
                           if(f1.value.length!=''){
                            popup("How much would you like to borrow");
                            show_hide("link_borrow",1);
                      }else{
                           popup("Please select city");
                           show_hide("link_borrow",0);
                           }
                }else if(f2=='lik_borrow'){
                           $(document).on('keyup', '#lik_borrow', function () {
                           var num=parseInt($(this).val());
                           if(num>50000){
                           popup("How long do you want to borrow it for");
                           show_hide("borrow_it_for",1);
                      }else{
                           popup("Please enter an amount greater than Rs 1,00,000");
                           show_hide("borrow_it_for",0);
                           }});
               }else if(f2=='borrow_year'){
                         $(document).on('keyup','#borrow_year',function(){
                          var num=parseInt($(this).val());
                    if(num!=0 && num<10){
                          popup(" Select currently employed");
                          show_hide("curr_empl_y",1);
                    }else{
                          show_hide("curr_empl_y",0);
                          popup("Please enter year between 1 to 9");
                          }});
              }else if(f2=='selectpro'){
                          show_hide("next_step",1);
                          popup("Select currently residing"); 
              }else if(f2=='curr_residing'){
                    if(f1.value.length!='' ){
                          popup("What is your gross annual income");
                          show_hide("grossanual",1);
                    }else{
                          popup("Select city");
                          show_hide("grossanual",0);
                          }
              }else if(f2=='anualincome'){
                          $(document).on('keyup','#anualainc',function(){
                          var num=parseInt($(this).val());
                    if(num>50000){
                          popup("Enter Your annual turnover");
                          show_hide("anulaTurnover",1);
                          }else{
                          show_hide("anulaTurnover",0);
                          popup("Please enter year between 1 to 9");
                          }});            
              }else if(f2=='annual_turnovers'){
                          $(document).on('keyup','#annual_turnover',function(){
                          var num=parseInt($(this).val());
                    if(num>50000){
                          popup("What is the total EMI you pay currently");
                          show_hide("total_EMI",1);
                    }else{
                          popup("Please enter an amount greater than Rs 1,00,000");
                          show_hide("total_EMI",0);
                          }});
               }else if(f2=='totalEmi'){
                       $(document).on('keyup','#totalEmi',function(){
                        var num=parseInt($(this).val());
                     if(num>50000){
                         popup("Your bank account is with");
                         show_hide("bankAcount",1);
                    }else{
                         popup("Please enter an amount greater than Rs 1,00,000");
                         show_hide("bankAcount",0);
                         }});
               }else if(f2=='bankacount'){
                        popup("Select Yes or No");
                        show_hide("want_co_borrower",1);                      
               }else if(f2=='releation_agai'){                   
                        popup("Select employment ");
                        show_hide("employment_co_borrow",1);
               }else if(f2=='co_borrwo'){
                      $(document).on('keyup','#co_borrwo',function(){
                        var num=parseInt($(this).val());
                     if(num>50000){
                        popup("What is the total EMI co-borrower pays");
                        show_hide("co_borrow_EMI",1);
                    }else{
                        popup("Please enter an amount greater than Rs 1,00,000");
                        show_hide("co_borrow_EMI",0);
                           }});                      
                }else if(f2=='co_borrowemi'){
                       $(document).on('keyup','#co_borrowemi',function(){
                        var num=parseInt($(this).val());
                      if(num>50000){
                       popup(" Step complete");
                     //  show_hide("step_2_gainst",1);
                       show_hide("step3",1);
                        
                        
                        
                  }else{ 
                        popup("Please enter an amount greater than Rs 1,00,000");
                      //  show_hide("step_2_gainst",0);
                  }});
                  }
            }else if(arguments.length==3){
                    if(f2=='curr_emp_id'){
                    if(f3=='Salaried'){
                          popup("Next Step"); 
                          show_hide("TypProfession",0);
                          show_hide("next_step",1);
                    }else if(f3=='professional'){
                                   
                              popup("Select Profession type");
                              show_hide("TypProfession",1);
                              show_hide("next_step",0);
                    }else if(f3=='Business'){
                              show_hide("TypProfession",1);
                              popup("Select Profession type");
                              show_hide("next_step",0);
                    }else{
                              
                              show_hide("TypProfession",0);
                              show_hide("next_step",0);
                    }
                  }

                  if(f2=='borrower_against'){
   
                          if(f3=='yes'){
                            popup("Slect final step");
                            
                             show_hide("stepAgainst2",1);
                             show_hide("step2_against_sumbit",0);
                            
                          }else{
                            popup("Next Step");
                           
                            
                          }
                          if(f3=='no'){
                            show_hide("stepAgainst2",0);
                            show_hide("step2_against_sumbit",1);
                            
                          }
                        
                        
                  }

                  if(f2=='employment_tuype_against'){

                          if(f3=='Salaried'){
                              popup(" co-borrower monthly income");
                              show_hide("cobor_month",1);
                              show_hide("step3",0);
                           
                          }
                          if(f3=='self_emp'){
                              popup(" co-borrower monthly income");
                             show_hide("cobor_month",1);
                              show_hide("step3",0);
                          }
                          if(f3=='no_work'){
                             popup(" Step complete");
                             show_hide("cobor_month",0);
                             show_hide("co_borrow_EMI",0);
                             show_hide("step3",1);
                            
                          
                          }


                  }

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
                      window.location.href = "{{URL::to('view-loan')}}";
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
