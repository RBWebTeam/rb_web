
<script>




  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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

                   if(f1=='step2HomeLone'){
                    validation('Your Profession Type ');
                     show_hide('step_Secound',1); 
                     show_hide('step_First',0); 
                     show_hide('next_step3',0); 
                     
                   }
                   if(f1=='home_step1'){
                     show_hide('step_Secound',0); 
                     show_hide('step_First',1); 
                     show_hide('next_step3',0); 
                      
                   }
                   if(f1=='home_step3'){
                     show_hide('step_Secound',0); 
                     show_hide('step_First',0); 
                     show_hide('next_step3',1); 
                     
                   }if(f1=='home_step2'){

                     show_hide('step_Secound',1); 
                     show_hide('step_First',0); 
                     show_hide('next_step3',0); 
                   }

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
                     show_hide('next_btn',0);
                        document.getElementById ("type_of_loan_").value ='';
                        document.getElementById ("cost_of").value ='';
                        document.getElementById ("cost_construction").value ='';

                  document.getElementById ("pro_name_h").value ='';
                  document.getElementById ("property_cost_h").value ='';
                  document.getElementById ("city_name").value ='';
                  document.getElementById ("current_reside").value ='';

                  }else if(f2=='plot'){
                   validation('Type of loan are you looking for');
                   show_hide('type_of_loan',1); 
                   show_hide('property_name',0); 
                   show_hide('property_Cost',0); 
                    show_hide('next_btn',0);
                    
                  document.getElementById ("pro_name_h").value ='';
                  document.getElementById ("property_cost_h").value ='';
                  document.getElementById ("city_name").value ='';
                  document.getElementById ("current_reside").value ='';
                
                   document.getElementById ("type_of_loan_").value ='';
                        document.getElementById ("cost_of").value ='';
                        document.getElementById ("cost_construction").value ='';

                  }else if(f2=='pro_name_h'){
                    validation('Property Cost');
                    show_hide('property_Cost',1); 

                  }else if(f2=='purchase_plot'){
                   validation(' What is the cost of the plot');
                   show_hide('cost_of_the_plot',1); 
                   show_hide('cost_of_construction',0);
                  }else if(f2=='construct_plot'){
                   validation(' What is your cost of construction');
                   show_hide('cost_of_construction',1); 
                   show_hide('cost_of_the_plot',0); 
                  }
                  else if(f2=='cost_of_'){
                    $(document).on('keyup','#cost_of',function(){
                    var num=parseInt($(this).val());
                  if(num>50000){
                    validation('Choose your property city');
                    show_hide('property_city',1); 
                    }else{
                     validation('Please enter an amount greater than Rs 1,00,000');
                     show_hide('property_city',0); 
                    }});
                  }else if(f2=='ofconstruction'){
                    $(document).on('keyup','#cost_construction',function(){
                    var num=parseInt($(this).val());
                  if(num>50000){
                    validation('Choose your property city');
                    show_hide('property_city',1); 
                  }else{
                    validation('Please enter an amount greater than Rs 1,00,000');
                    show_hide('property_city',0); 
                  }});

                  }else if(f2=='property_cost_h'){
                    validation('Choose your property city');
                    show_hide('property_city',1); 
                  }else if(f2=='city_live'){
                    validation('Select currently reside ');
                    show_hide('currently_reside',1);

                  }else if(f2=='current_reside'){
                    validation('Next step');
                    show_hide('next_btn',1); 
                  }

                   // Secound Step ......
                  
                   else if(f2=='profType'){
                      validation('Select Bank account ');
                      show_hide('bank_acc',1); 
                       
                   }else if(f2=='home_acoutn'){
                    validation('Total EMI you pay currently ');
                    show_hide('total_emi',1); 
                   }else if(f2=='total_emi_'){
                      $(document).on('keyup','#total_emi_',function(){
                    var num=parseInt($(this).val());
                  if(num>50000){
                    validation('Your Full Name (As per PAN Card');
                    show_hide('full_name_pancart',1); 
                    
                  }else{
                    validation('Please enter an amount greater than Rs 1,00,000');
                    show_hide('full_name_pancart',0); 
                  }});

                   }else if(f2=='pan_cart_name'){
                          var name=f1.value;
                           if(name.length>5){
                    validation('Your PAN card number');
                    show_hide('pan_card_number',1); 
                           }

                   }else if(f2=='pan_card_num'){
                   
                       var str =f1.value;
                       var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                       var res = str.match(pancardPattern);
                       if(res){
                        validation('Final Step.');
                        show_hide('step_home',1); 
                        
                       }else{
                            validation('something is wrong with your pan no.');
                            show_hide('step_home',0); 
                       }
                   }


                   // third step....

                   else if(f2=='dob_name'){
                     validation('Residence Pincode .');
                     show_hide('residence_pincode',1);

                   }else if(f2=='pin_code'){
                          var number=f1.value;
                           if(number.length >=5){
                       validation('Your annual turnover  .');
                       show_hide('annual_turnover',1);
                     }else{

                       validation('something wrong.');
                       show_hide('annual_turnover',0);
                       
                   }
                     }else if(f2=='turn_over'){
                        var number=parseInt(f1.value);
                            if(number>50000){
                      validation('Do you want to add co borrower');
                      show_hide('co_borrower',1);
                    }else{

                       validation('Please enter an amount greater than Rs 1,00,000');
                      show_hide('co_borrower',0);
                     }

                    }else if(f2=='Yes'){
                        
                      validation('Select relationship with the co-borrower');
                      show_hide('relation_ship',1);
                      show_hide('btn_v',0);

                      document.getElementById ("relationship").value ='';
                      document.getElementById ("coborrower_employment").value ='';
                      document.getElementById ("income").value ='';
                      document.getElementById ("emipaid").value ='';

                    }else if(f2=='No'){
                             show_hide('btn_v',1);
                              show_hide('relation_ship',0);
                               show_hide('employment_type',0);
                                show_hide('annual_in',0);
                                 show_hide('emi_paid',0);
                                validation('submit query');

                      document.getElementById ("relationship").value ='';
                      document.getElementById ("coborrower_employment").value ='';
                      document.getElementById ("income").value ='';
                      document.getElementById ("emipaid").value ='';

                     
                    }else if(f2=='add_borrow'){
                        validation("Select  co-borrower's employment type");
                       show_hide('employment_type',1);
                    }else if(f2=='co_working'){
                      validation("Co-borrower's annual income ");
                      show_hide('annual_in',1);
                      show_hide('btn_v',0);

                       document.getElementById ("income").value ='';
                                  document.getElementById ("emipaid").value ='';
                     
                    }else if(f2=='no_working'){
                     show_hide('btn_v',1);
                                 show_hide('annual_in',0);
                                 show_hide('emi_paid',0);
                                 validation('submit query');

                                  document.getElementById ("income").value ='';
                                  document.getElementById ("emipaid").value ='';


                    }else if(f2=='income'){

                   var number=parseInt(f1.value);
                            if(number>50000){
                              validation("Co-borrower's total EMI paid currently");
                               show_hide('emi_paid',1);
                            }else{
                                validation('Please enter an amount greater than Rs 1,00,000');
                                show_hide('emi_paid',0);
                            }

                    }else if(f2=='emipaid'){

                       var number=parseInt(f1.value);
                            if(number>50000){
                        show_hide('btn_v',1);
                      }else{
                       validation('Please enter an amount greater than Rs 1,00,000');
                       show_hide('btn_v',0);

                      }

                    }


                 }else if(arguments.length==3){

                 }

     }



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

</script>


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

    

  });
</script>
	
