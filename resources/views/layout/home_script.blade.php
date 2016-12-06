
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

function validation(val){
          var obj=new Object;
              obj.empty=$('#home_append').empty();
              obj.append=$('#home_append').append(val);
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


     function homeLoanFn(f1,f2,f3,f4,f5){

                 if(arguments.length==0){

                 }else if(arguments.length==1){

                 }else if(arguments.length==2){

                  if(f2=='home_property'){
                     validation('Enter your desired loan amount');
                     show_hide('purpose_of_your',1); 
                  }else if(f2=='Enter_amount'){
                  $(document).on('keyup','#amount',function(){
                        var num=parseInt($(this).val());
                  if(num>50000){
                      validation('Select currently employed');
                      show_hide('currently_employed',1);
                  }else{
                     validation('Please enter an amount greater than Rs 1,00,000');
                     show_hide('currently_employed',0);  
                  }});

                  }else if(f2=='Salaried'){
                    validation('Select currently employed');
                    show_hide('annual_income',1);
                    
                  }else if(f2=='Self_employed'){
                    validation('Select currently employed');
                    show_hide('annual_income',1);
                    
                  }else if(f2=='annu_income'){

                  $(document).on('keyup','#annu_income',function(){
                    var num=parseInt($(this).val());
                  if(num>50000){
                      validation('Select  property you want');
                      show_hide('property_identified',1);
                  }else{
                     validation('Please enter an amount greater than Rs 1,00,000');
                     show_hide('property_identified',0);  
                  }});
                      

                  }else if(f2=='ready_to_move'){
                     validation('Enter property name');
                     show_hide('property_name',1); 
                     show_hide('type_of_loan',0);
                     show_hide('cost_of_the_plot',0);

                  }else if(f2=='plot'){
                   validation('Type of loan are you looking for');
                   show_hide('type_of_loan',1); 
                   show_hide('property_name',0); 
                   show_hide('property_Cost',0); 
                  }else if(f2=='pro_name_h'){
                    validation('Property Cost');
                    show_hide('property_Cost',1); 
                  }else if(f2=='purchase_plot'){
                   validation(' What is the cost of the plot');
                   show_hide('cost_of_the_plot',1); 
                  show_hide('cost_of_construction',0);
                  }else if(f2=='construct_plot'){
                   show_hide('cost_of_construction',1); 
                   show_hide('cost_of_the_plot',0); 
                  }
                  else if(f2=='cost_of_'){
                    validation('Choose your property city');
                    show_hide('property_city',1); 
                    
                  }


                 }else if(arguments.length==3){

                 }

     }






//      function changeTest(obj,val){
            
             
//          if(obj.value=="property_identified"){
        
//            $('#pop1').empty();
//            $('#pop1').append("<p> Enter your desired loan amount</p>");
//            document.getElementById('purpose_of_your').style.display='block';
//             }else if(obj.value=="not_identified"){

//            $('#pop1').empty();
//            $('#pop1').append("<p> Enter your desired loan amount</p>");
//             document.getElementById('purpose_of_your').style.display='block';

//          }else if(obj.value=="existing_home_laon"){
//             $('#pop1').empty();
//             $('#pop1').append("<p> Enter your desired loan amount</p>");
//             document.getElementById('purpose_of_your').style.display='block';
//           }else{
//               document.getElementById('purpose_of_your').style.display='block';
//           }
         
      
//         return false;
//       }
      
//       function  currently_employee(val,obj){
//                    $('#pop1').empty();
//                    $('#pop1').append("<p>Your gross annual income</p>");
//                    document.getElementById('annual_income').style.display="block";
//                      var incom=document.getElementById('annu_income');
//                      incom.addEventListener('keyup', function(evt){
//                    var   n = parseInt(this.value.replace(/\D/g,''),10);

//                   if(n>20000 && n<=10000000){
//                    $('#pop1').empty();
//                    $('#pop1').append("<p> What kind of property you want.</p>");
//                    document.getElementById('property_identified').style.display="block";
//                    incom.value = n.toLocaleString();
//                   }else{

//                      $('#pop1').empty();
//                      $('#pop1').append( "<p '>Please enter an amount greater than Rs 1,00,000</p>" );
//                       document.getElementById('property_identified').style.display="none";
//                       incom.value = n.toLocaleString();
//                   }

//                 },false);
               
//               return false;

//       }

         
//          function Enter_amount(val,obj){
                  
//          var fnf = document.getElementById("amount");
//           fnf.addEventListener('keyup', function(evt){
//         var   n = parseInt(this.value.replace(/\D/g,''),10);

//                   if(n>10000 && n<=10000000){
//                  $('#pop1').empty();
//                  $('#pop1').append("<p>How are you currently employed </p>");
//                 document.getElementById('currently_employed').style.display="block";
//                 // document.getElementById('property_name').style.display="none";
                 
//              fnf.value = n.toLocaleString();
//               return false;
// }else{
      
//        $('#pop1').empty();
//        $('#pop1').append( "<p '>10000000</p>" );
//       document.getElementById('currently_employed').style.display="none";

//                    fnf.value = n.toLocaleString();
//               return false;
// }

//                 }, false);

        

//          }
     


//          function kind_of_property(val,obj){
//                if(obj=='plot'){
//                  $('#pop1').empty();
//                  $('#pop1').append("<p>What type of loan are you looking for </p>");
//                document.getElementById('type_of_loan').style.display="block";
//                document.getElementById('property_name').style.display="none";
//                 document.getElementById('property_Cost').style.display="none";
//                }else{
//                  $('#pop1').empty();
//                  $('#pop1').append("<p>Property name </p>");
//                document.getElementById('property_name').style.display="block";
//                document.getElementById('type_of_loan').style.display="none";
//                document.getElementById('cost_of_the_plot').style.display="none";
//                document.getElementById('cost_of_construction').style.display="none";
//                }
             
//          }

//        function proprty_f(val,obj){
           
//            var x=val.value.length ;
           
//            if(x>5){

//           $('#pop1').empty();
//           $('#pop1').append("<p>Property Cost</p>");
         
//           document.getElementById('property_Cost').style.display="block";
//             }else{
//                $('#pop1').empty();
//                $('#pop1').append("<p>length must be exactly 6 characters</p>");
//                document.getElementById('property_Cost').style.display="none";
//             }

//        }



//         function type_of_loan(val,obj){

//                if(obj=='purchase_plot'){

//                        $('#pop1').empty();
//                        $('#pop1').append("<p>What is the cost of the plot</p>");
                 
//                     document.getElementById('cost_of_the_plot').style.display="block";
//                     document.getElementById('cost_of_construction').style.display="none";
            
//                }else if(obj=='construct_plot'){



//                        $('#pop1').empty();
//                        $('#pop1').append("<p>What is your cost of construction</p>");

//                    document.getElementById('cost_of_construction').style.display="block";
//                     document.getElementById('cost_of_the_plot').style.display="none";
//                }else{

//                     document.getElementById('cost_of_the_plot').style.display="none";
//                     document.getElementById('cost_of_construction').style.display="none";
//                     document.getElementById('property_name').style.display="none";
//                }

//         }

//         function property_cost(){


//               //var x=val.value.length ;

//              $('#pop1').empty();
//              $('#pop1').append("<p>Choose your property city</p>");

//             document.getElementById('property_city').style.display="block";
//         }

         
//          function cost_of_plot(obj){
//              $('#pop1').empty();
//              $('#pop1').append("<p>Choose your property city</p>");
//             document.getElementById('property_city').style.display="block";

//          }

//          function cost_ofconstruction(obj){
//              $('#pop1').empty();
//              $('#pop1').append("<p>Choose your property reside</p>");
//              document.getElementById('property_city').style.display="block";
          
//          }


//          function property_city(){
          
//              $('#pop1').empty();
//              $('#pop1').append("<p>Go to next step</p>");
//             document.getElementById('currently_reside').style.display="block";
//             //document.getElementById('next_step').style.display="block";
//             //document.getElementById('step_First').style.display="none";
//          }

//          function currently_reside(){
          
//              $('#pop1').empty();
//              $('#pop1').append("<p>Secound Step</p>");
//             //document.getElementById('currently_reside').style.display="block";
//             document.getElementById('next_btn').style.display="block";
//             //document.getElementById('step_First').style.display="none";
//          }

        
//        function next_step_(step2,step3){
            

         
//         document.getElementById('step_First').style.display="none";
//         document.getElementById('next_step').style.display="block";
        
        

//        }

//         function next_step_3(step2,step3){

       
//         document.getElementById('next_step').style.display="none";
//         document.getElementById('next_step3').style.display="block";

//         }
          
//        function preview(){

//          document.getElementById('step_First').style.display="none";
//        }   


//        //    secound STEP  2  /////////

//        function profession_f(){
//         document.getElementById('bank_acc').style.display="block";
//         document.getElementById('full_name').style.display="none";
//         document.getElementById('total_emi').style.display="none";
//         document.getElementById('pan_card').style.display="none";
//        }

//        function bankaccount_f(){

     
//         document.getElementById('total_emi').style.display="block";
//         document.getElementById('full_name').style.display="none";
//         document.getElementById('pan_card').style.display="none";

//        }

//        function emi_f(){
//         document.getElementById('full_name').style.display="block";
//         document.getElementById('pan_card').style.display="none";
//        }

//        function fullname_f(){
//         document.getElementById('pan_card').style.display="block";
//         //document.getElementById('dob').style.display="none";
//        }

       

//        function pancard_f(){

//          document.getElementById('next_btn3').style.display="block";

//         //document.getElementById('dob').style.display="block";
//        }

//           //   secound STEP  3 /////////

//        function dob_f(){
//         document.getElementById('residence_pincode').style.display="block";
//        }

//        function pincode_f(){
        
        
       
//        document.getElementById('annual_turnover').style.display="block";
//        }

//        function turnover_f(){
//         document.getElementById('co_borrower').style.display="block";
//        }

//        function co_borrower_f(val,obj){

//           if(obj=="No"){
//                 document.getElementById('btn_v').style.display="block";
//                 document.getElementById('employment_type').style.display="none";
//                  document.getElementById('annual_in').style.display="none";
//                  document.getElementById('emi_paid').style.display="none";
//                   document.getElementById('btn_v').style.display="none";
//                    document.getElementById('relation_ship').style.display="none";
//           }else if(obj=="Yes"){
//         document.getElementById('relation_ship').style.display="block";
//         }else{
//             document.getElementById('relation_ship').style.display="none";
//         }

//        }

//        function relationship_f(){
//         document.getElementById('employment_type').style.display="block";
//        }

       

//        function employment_f(){
//        document.getElementById('annual_in').style.display="block";


//        }

//        function co_borrower_annual_f(){
//         document.getElementById('emi_paid').style.display="block";
//        }

//        function total_emi(){

//          document.getElementById('btn_v').style.display="block";
//        }

      
 


       function fnString(e, t){

         
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
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


<script type="text/javascript">
  $(document).ready(function(){
    $('.purposeofloan_popup').click(function(){
       // console.log($(this).closest("form").attr('id'));
       var span_name=$(this).parent().find('input').attr('id');
       var modal_name=$(this).parent().find('a').attr('data-target');
       var form_name=$(modal_name).find('form').attr('id');
        $('#'+form_name +' input').on('change', function() {
       var input_name=$('#'+form_name).find('input').attr('name');   
       var append=$('input[name='+input_name+']:checked','#'+form_name).val();
          console.log($('#'+span_name));
        $('#'+span_name).val(append);
        $(modal_name).modal('hide');
        
      });

    });

     /****kind_of_property_popup ****/

     // $('.currently_employee').click(function(){

     //    var span_name=$(this).parent().find('input').attr('id');
     //   var modal_name=$(this).parent().find('a').attr('data-target');
     //   var form_name=$(modal_name).find('form').attr('id');
     //    $('#'+form_name +' input').on('change', function() {
     //   var input_name=$('#'+form_name).find('input').attr('name');   
     //   var append=$('input[name='+input_name+']:checked','#'+form_name).val();
     //      console.log($('#'+span_name));
     //    $('#'+span_name).val(append);
     //    $(modal_name).modal('hide');
        
     //  });

     // });

     /****What kind of property you want popup ****/

     // $('.kind_of_property_popup').click(function(){

     
     //   var span_name=$(this).parent().find('input').attr('id');
     //   var modal_name=$(this).parent().find('a').attr('data-target');
     //   var form_name=$(modal_name).find('form').attr('id');
     //    $('#'+form_name +' input').on('change', function() {
     //   var input_name=$('#'+form_name).find('input').attr('name');   
     //   var append=$('input[name='+input_name+']:checked','#'+form_name).val();
     //      console.log($('#'+span_name));
     //    $('#'+span_name).val(append);
     //    $(modal_name).modal('hide');
        
     //  });

     // });

      /****>What type of loan are you looking for ****/

  //    $('.type_of_loan__').click(function(){

     
  //      var span_name=$(this).parent().find('input').attr('id');
  //      var modal_name=$(this).parent().find('a').attr('data-target');
  //      var form_name=$(modal_name).find('form').attr('id');
  //       $('#'+form_name +' input').on('change', function() {
  //      var input_name=$('#'+form_name).find('input').attr('name');   
  //      var append=$('input[name='+input_name+']:checked','#'+form_name).val();
  //         console.log($('#'+span_name));
  //       $('#'+span_name).val(append);
  //       $(modal_name).modal('hide');
        
  //     });

  //    });

  });
</script>
	</body>
</html>
@include('layout.modal')
