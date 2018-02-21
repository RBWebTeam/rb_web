<div  id="form_ID">
<div class="fclass" style="display:block;">
   <div class="container" >
      <div class="table-responsive">
         <div class=" pad">
            <!--  <p class="text-left">home/<?php echo e($product); ?></p> -->
            <h2 class="align-center loan-head">View Options</h2>
            <div class="iframeloading" style= "display:none;position:absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
               <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  /> 
            </div>
         </div>
         <div class="col-md-3 fadeInUp tbl fltr tbl1" style="display:none;">
            <h3>Filter</h3>
            <hr>
            <h4>Interest Type</h4>
            <hr>
            <h4>Min / Max Loan Requirment</h4>
            Filter by price interval: 
            <input type="hidden" name="min_value" id="min_value" value="">
            <hr>
            <h4>EMI Capacity</h4>
            <input type="hidden" name="min_value" id="min_value" value="">
            <hr>
            <h4>Bank Type</h4>
            <span><input type="radio" name="radio" />Private Bank</span><br>
            <span><input type="radio" name="radio" />PSU Bank </span>
            <hr>
            <h4>Max Tenure</h4>
            <span><input type="radio" name="radio" />3 Years</span><br>
            <span><input type="radio" name="radio" />4 Years</span><br>
            <span><input type="radio" name="radio" />5 Years</span>
            <hr>
            <h4>Processing Fee</h4>
            <input type="checkbox" name="1" />No Processing Fee
            <hr>
         </div>
         <div class="col-md-12 pad11 pad-no">
            <div class="">
               <table width="100%" border="1" class="tbl pad1">
                  <tr>
                     <td>Your <?php echo e($product); ?> Search for <b><?php echo e($loan_amount); ?> Lakhs</b> Loan</td>
                     <td><a class="default btn btn-primary"  id="Modify_Details">Modify Details</a></td>
                     <!-- <td>sort by 
                        <select>
                            <option>Interest Rate</option>
                            <option>10000</option>
                            <option>20000</option>
                            <option>30000</option>
                            
                        </select>
                        </td>
                        <td>Processing Fees 
                        <select>
                            <option>3000</option>
                            <option>3000</option>
                            <option>2000</option>
                            <option>3000</option>
                            
                        </select></td> -->
                  </tr>
               </table>
            </div>
            <?php $key=0; $countQuotes=0; ?>
            <?php if(count($quote_data) > ""): ?>
            <?php $__currentLoopData = $quote_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> <?php $key++; ?>
            <div class="table-responsive outer-brd">
               <form id="quote_form_<?php echo e($key); ?>">
                  <?php echo e(csrf_field()); ?>

                  <table width="100%" border="1" class="tbl">
                     <tr>
                        <td width="9%" class="upper">Compare</td>
                        <td width="16%" class="upper"><span style="color:red;"><img src="<?php echo e($q->Bank_Logo); ?>" class="img-responsive"></span></td>
                        <td width="16%" class="upper">Interest Rate</td>
                        <td width="16%" class="upper">Loan Amount</td>
                        <td width="18%" class="upper">emi</td>
                        <?php if($product == "Personal Loan"){
                           $prod ="9";
                           }elseif($product == "Car Loan"){
                             $prod="4";
                           
                           }elseif($product == "Business Loan"){
                              $prod="13";
                           
                           }elseif($product == "Loan Against Property"){
                              $prod="7";
                           
                           
                           }else{
                           $prod="12"; 
                             }?>
                        <?php if(Session::get('is_login')): ?>
                        <td width="17%"><a class="btn btn-success myClass" >Apply Online</a></td>
                        <?php else: ?>
                        <td width="17%"><a class="btn btn-success quote_ID"   data-toggle="modal" data-target="#login_process"
                           >Apply Online </a> 
                        </td>
                        <?php endif; ?>    
                     </tr>
                     <tr>
                        <td>
                           <input type="checkbox" name="checkbox" value="<?php echo e($q->Bank_Name); ?>"  class="<?php echo e($q->Bank_Id); ?>"  data-id="<?php echo e($q->Bank_Id); ?>"/>
                        </td>
                        <input type="hidden" name="logo" class="logo" value="<?php echo e($q->Bank_Logo); ?>">
                        <input type="hidden" name="interst" class="interst" value="<?php echo e($q->roi); ?>">
                        <input type="hidden" name="LoanRequired" class="LoanRequired" value="<?php echo e($q->loan_eligible); ?>">
                        <input type="hidden" name="emi" class="emi" value="<?php echo e($q->emi); ?>">
                        <input type="hidden" name="LoanTenure" class="LoanTenure" value="<?php echo e($q->LoanTenure); ?>">
                        <input type="hidden" name="Pre_Closer_Fixed" class="Pre_Closer_Fixed" value="<?php echo e($q->Pre_Closer_Fixed); ?>">
                        <input type="hidden" name="product" class="product" value="<?php echo e($product); ?>">
                        <input type="hidden" name="processingfee" class="processingfee" value="<?php echo e($q->processingfee); ?>">
                        <input type="hidden" name="url" class="url" value="<?php echo e(URL::to('apply-lead-online')); ?>?&BankId=<?php echo e($q->Bank_Id); ?>&quote_id=<?php echo e($quote_id); ?>&product=<?php echo e($prod); ?>&processing_fee=<?php echo e($q->processingfee); ?>&loan_eligible=<?php echo e($q->loan_eligible); ?>&roi_type=<?php echo e($q->roi_type); ?>">
                        <td ><?php echo e($product); ?></td>
                        <td ><?php echo e($q->roi); ?>%</td>
                        <td ><?php echo e($q->loan_eligible); ?></td>
                        <td ><?php echo e($q->emi); ?> (for <?php echo e($q->LoanTenure); ?> years)</td>
                        <td   rowspan="2"><strong>Special Features:</strong>- Pre close Fee <?php echo e($q->Pre_Closer_Fixed); ?>%</td>
                     </tr>
                     <tr>
                        <td><i class="icon-thumbs-up"></i></td>
                        <td class="upper">
                           <!-- <a href="#">Know More</a>  --><button type="button" data-toggle="collapse" data-target="#<?php echo e($key); ?>"><span class="hidden-xs">Know</span> More</button>
                        </td>
                        <td>Processing Fee - INR <?php echo e($q->processingfee); ?> + ST</td>
                        <td>Guarantor Required - <?php echo e($q->guarantor_required); ?></td>
                        <td>Instant Approval - <?php echo e($q->eApproval); ?></td>
                     </tr>
                     <table>
                        <div id="<?php echo e($key); ?>" class="collapse" style="background-color: #F6F6F6; width: 100%;height: auto;">
                           <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> No guarantor required</li>
                           <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> No pre-closure and part payment fee
                              <mark style="color: red">Special offers are available for women applicants at a lower rate</mark>
                           </li>
                           <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Age at least 18 and less than 60</li>
                           <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Salaried / Self - Employed with regular income,Earn more than the minimum income required</li>
                        </div>
                     </table>
                  </table>
               </form>
            </div><br />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            <?php else: ?>
            <p style="text-align: center;">No Result Found</p>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid white-bg"  id="compID" style=" display: block;">
   <div class="container pad">
      <div class="col-md-12 animate-box fadeInUp animated col">
         <div class="col-md-4 img-c"><img src="images/compare-img.png"></div>
         <div id="AllBank" ></div>
         <div style="display: none"  id="btncompare" class="col-md-2 comp-btn"><a class="btn btn-primary btn-outline with-arrow comparebutton">Compare<i class="icon-arrow-right"></i></a></div>
      </div>
   </div>
</div>
<div id="fh5co-hero" style="display:none;top: auto;" class="fclass1">
   <div class="fh5co-contact animate-box">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
               <h2>Compare</h2>
            </div>
            <div class="col-md-12">
               <div class="row pad11 white-bg comp-pg">
                  <div class="col-md-3 col-sm-6 txt-title1">
                     <ul class="comp comp-fix-pos txt-title">
                        <li>&nbsp;</li>
                        <br>
                        <li>Loan Amount - </li>
                        <li>EMI - </li>
                        <li>Rate - </li>
                        <li>Processing Fee - </li>
                        <li>Pre closed Fee - </li>
                        <li></li>
                        <li> <a href="#" id="backid" class="btn btn-primary btn-outline">Back</a></li>
                     </ul>
                  </div>
                  <div id="tables"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div></div>
<script type="text/javascript">
   var clicks = 0;
   var limit =4;
   var array=[];
   
   var max = 2;
   var x = 0;
   var ids=0;
   $('input[name="checkbox"]').change(function(){ 
     if($("input[name='checkbox']:checked").length >= limit) {
          this.checked = false;      
   
   
          alert("Please select no more than 3 Banks.");
   
       
      }else{
      var id=$(this).attr("data-id");
      var tid=id;
      var closest=$(this).closest('tr');
      var logo =closest.find('.logo').val();
      var pinterst =closest.find('.interst').val();
      var LoanRequired =closest.find('.LoanRequired').val();
      var processingfee =closest.find('.processingfee').val();
      var emi =closest.find('.emi').val();
      var LoanTenure =closest.find('.LoanTenure').val();
      var Pre_Closer_Fixed =closest.find('.Pre_Closer_Fixed').val();
      var url = closest.find('.url').val();
      var product = closest.find('.product').val();
   
     var logo =closest.find('.logo').val();
   
     if (this.checked) {
   
          var span="<div class='col-md-2 col img-c white-bg' id='" +id + "'><input type='hidden' name='bank_id[]' id='"+id+"' value='"+id+"' ><span class='close btnspan' >×</span><img src='"+logo+"'class='img-responsive' width='100' height='80'>" + this.value + "</div>";
   
   
    var tables="<div class='col-md-3 col-sm-6 bdr-btm' id='" +tid+ "'>  <ul  class='comp hide-title'><li><img src='"+logo+"' width='100' height='50'></li><li><span class='hidden-lg'>Loan Amount - </span>"+LoanRequired+"</li><li><span class='hidden-lg'>Rate - </span>"+emi+"(for "+LoanTenure +" years)</li><li><span class='hidden-lg'>EMI - </span>"+pinterst+"%</li><li><span class='hidden-lg'>Processing Fee - </span>"+processingfee+"</li><li><span class='hidden-lg'>Pre closed Fee - </span>"+Pre_Closer_Fixed+" %</li><li></li><li><a href='"+url+"'  class='btn btn-primary btn-outline'>Apply Now</a></li></ul></div>";
   
   
             if(x==2){
               $('#btncompare').show();} x++;
               $("#AllBank").append(span);
               $("#tables").append(tables);
               }else{
               $("#"+id).remove();
               $("#"+tid).remove();
               if(x!=2){
               $('#btncompare').hide();}x--;
          }
   
   
      }
   
       
     
   });
   
   //  if bank name cut  than remove bank name and unselect check box
   $(document).ready(function () {
       $(document).on('click', '.btnspan', function () {
            var id=$(this).closest("div").attr("id");
            var tid=id;
                   $("."+id).attr('checked',false);
                   $("#"+id).remove();
                    $("#"+tid).remove();
                   if(x!=2){
                   $('#btncompare').hide(); 
         }x--;
     });
   
   });
   
   // show hide btn
   $(document).on('click','#btncompare',function(e){
   $('.fclass1').show();
   $("html, body").animate({
           scrollTop: 0
       }, 600);
   $('.fclass').hide();
   $('#compID').hide();
   });
   $(document).on('click','#backid',function(e){
   $('.fclass1').hide();
   $('.fclass').show();
   $('#compID').show();
   });
   
   
   // $(document).on('click','.comparebutton',function(e){
   // e.preventDefault();
   //   var form=$(this).closest("form").attr("id");
   
   //      $.ajax({  
   //                type: "POST",  
   //                url: "<?php echo e(URL::to('compare')); ?>",
   //                data : $('#'+form).serialize(),
   //               // dataType: 'json',
   //                success: function(msg){  
   
               
   //                alert(msg); 
   
   
   //                }  
   //            }); 
   
   // });
   
</script>
<script type="text/javascript">
   $("#Modify_Details").click(function() {
     $(window).scrollTop($('#mod').offset().top-20);
    
   });
   
   
   $(document).ready(function () {
   $(document).on('click','.myClass',function(e){ 
   
    e.preventDefault();
    var id=0;
   
   var full_url = document.URL; // Get current url
   var url_array = full_url.split('/') // Split the string into an array with / as separator
   var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)
   
    if(last_segment=='home-loan'){
          id='#home_loan_process_form';
    }else if(last_segment=='personal-loan'){
   
           id='#personal_loan_process_form';
    }else if(last_segment=='loan-against-property'){
   
          id='#lap_process_form';
    }else if(last_segment=='business-loan'){
   
            id='#business_loan_process_form';
    }else if(last_segment=='car-loan'){
   
             id='#car_loan_process_form';
    }
   
    
    
   
        var quote_selected_form=($(this).closest("form").attr('id'));
   
        $(".iframeloading").show();
         $(window).scrollTop($('.iframeloading').offset().top-20);
       $.ajax({  
                type: "POST",  
             
                url: "<?php echo e(URL::to('quotes-head')); ?>",
              // data : $('#home_loan_process_form').serialize(),
                   data :$(id+', #'+quote_selected_form).serialize(),
                success: function(msg){
                 console.log(msg); 
                   if(msg.status==true){
                    $("#apply_new").attr("href", msg.url);
                      window.location.href=(msg.url);
                   }else{
                      console.log(msg); 
                      window.location.href=("<?php echo e(url('went-wrong')); ?>");
                   }
                }
   
              });
    
    
   });
   
   });
</script>