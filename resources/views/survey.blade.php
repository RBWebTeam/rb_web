@include('layout.header')

<div class="container" id="fh5co-hero">

<div class="col-md-12">
         <h2 class="align-center loan-head">Customer Satisfaction Survey</h2>
    </div>
	<br>
	<br>
	<br>
<div class="container bdy-clr comp-pg bg-yellow">
  <div class="row">
  
   <div class="col-md-2"></div>
	<div class="col-md-8">
	<form name="surveyform" id="surveyform" method="POST">
    {{ csrf_field() }}
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl bg-danger"><p class="head-1 bg-danger">1</p> How would you rate your overall satisfaction with us?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" id="s-option" name="overall_satisfaction"  value="Very satisfied" class="required"/> <label for="s-option">Very satisfied</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="overall_satisfaction"  value="Somewhat satisfied" id="t-option" /><label for="t-option"> Somewhat satisfied </label> <div class="check"><div class="inside"></div></li>
<li><input type="radio" name="overall_satisfaction"  value="Neutral" id="u-option" /><label for="u-option"> Neutral</label> <div class="check"><div class="inside"></div></li>
<li><input type="radio" name="overall_satisfaction"  value="Somewhat dissatisfied" id="v-option" /><label for="v-option"> Somewhat dissatisfied</label> <div class="check"><div class="inside"></div></li> 
<li><input type="radio" name="overall_satisfaction"  value="Very dissatisfied" id="w-option" /><label for="w-option"> Very dissatisfied</label> <div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl"><span class="head-1 bg-info">2</span> How likely is it that you would recommend us to a friend/colleague?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="recommend_to_friend" id="a-option" value="Very likely" class="required"/><label for="a-option"> Very likely</label><div class="check"><div class="inside"></div> </li>
<li><input type="radio" name="recommend_to_friend" id="b-option" value="Somewhat likely"/> <label for="b-option">Somewhat likely</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="recommend_to_friend" id="c-option" value="Neutral"/><label for="c-option"> Neutral </label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="recommend_to_friend" id="d-option" value="Somewhat unlikely"/><label for="d-option"> Somewhat unlikely</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="recommend_to_friend" id="e-option" value="Very unlikely"/> <label for="e-option">Very unlikely</label><div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
	
    
    <div class="col-md-12 ccc animate-box fadeInUp animated">
	
    <h3 class="titl"><div><p>Please rate us on the following attributes:</p></div><span class="head-1 bg-success">3</span> Customer service</h3>

    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="customer_service" id="f-option" value="Very satisfied" class="required"/><label for="f-option"> Very satisfied</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="customer_service" id="i-option" value="Somewhat satisfied"/><label for="i-option"> Somewhat satisfied</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="customer_service" id="j-option" value="Neutral"/><label for="j-option"> Neutral</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="customer_service" id="k-option" value="Somewhat dissatisfied"/><label for="k-option"> Somewhat dissatisfied</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="customer_service" id="l-option" value="Very dissatisfied"/><label for="l-option"> Very dissatisfied</label><div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl"><span class="head-1 bg-warning">4</span>Professionalism</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="professionalism" id="m-option" value="Very satisfied" class="required"/><label for="m-option"> Very satisfied</label><div class="check"><div class="inside"></div> </li>
<li><input type="radio" name="professionalism" id="n-option" value="Somewhat satisfied"/><label for="n-option"> Somewhat satisfied</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="professionalism" id="o-option" value="Neutral"/><label for="o-option"> Neutral</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="professionalism" id="p-option" value="Somewhat dissatisfied"/><label for="p-option"> Somewhat dissatisfied</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="professionalism" id="q-option" value="Very dissatisfied"/><label for="q-option"> Very dissatisfied</label><div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl"><span class="head-1 bg-info">5</span> Sales staff</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="sales_staff" id="qq-option" value="Very satisfied" class="required"/><label for="qq-option"> Very satisfied</label><div class="check"><div class="inside"></div></li> 
<li><input type="radio" name="sales_staff" id="r-option" value="Somewhat satisfied"/><label for="r-option"> Somewhat satisfied</label><div class="check"><div class="inside"></div></li> 
<li><input type="radio" name="sales_staff" id="rr-option" value="Neutral"/><label for="rr-option"> Neutral</label><div class="check"><div class="inside"></div> </li>
<li><input type="radio" name="sales_staff" id="sss-option" value="Somewhat dissatisfied"/><label for="sss-option"> Somewhat dissatisfied </label><div class="check"><div class="inside"></div></li> 
<li><input type="radio" name="sales_staff" id="ss-option" value="Very dissatisfied"/><label for="ss-option"> Very dissatisfied</label><div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl"><span class="head-1 bg-danger">6</span> How likely are you to continue doing business with us?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="continue_business" id="tttttt-option" value="Very likely" class="required"/><label for="tttttt-option"> Very likely</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="continue_business" id="tt-option" value="Somewhat likely"/><label for="tt-option"> Somewhat likely</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="continue_business" id="ttt-option" value="Neutral"/><label for="ttt-option"> Neutral</label><div class="check"><div class="inside"></div> </li>
<li><input type="radio" name="continue_business" id="tttt-option" value="Somewhat unlikely"/><label for="tttt-option"> Somewhat unlikely</label><div class="check"><div class="inside"></div></li> 
<li><input type="radio" name="continue_business" id="ttttt-option" value="Very unlikely"/><label for="ttttt-option"> Very unlikely</label><div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl"><span class="head-1 bg-success">7</span> Do you have any suggestions for improving our products/ services?</h3>
    <div class="text-left mrg-left">
<input type="text" placeholder="" name="suggestions" class="col-md-12 pad input-box" border="0" required/>
</div>
    </div>
    
    <div class="col-md-12 ccc animate-box fadeInUp animated">
    <h3 class="titl"><span class="head-1 bg-warning">8</span>If your problem was not resolved, did our staff offer to follow-up after the call?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="follow_up_after_call" id="uu-option" value="Yes" class="required"/><label for="uu-option"> Yes</label><div class="check"><div class="inside"></div></li>
<li><input type="radio" name="follow_up_after_call" id="uuu-option" value="No" /><label for="uuu-option"> No.</label><div class="check"><div class="inside"></div></li>
</ul>
</div>
    </div>
   <button class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="credit_id">SUBMIT<i class="icon-arrow-right"></i></button>
   </form>
   </div>
    </div>

  </div>
</div>
<br>
@include('layout.footer')
@include('layout.script')


  <div id="myModal112" class="modal fade" role="dialog" aria-hidden="true" >
		<div class="modal-dialog">
			
			<!-- Modal content -->
			<div class="modal-content row">
            <form name="surveyform_cust" id="surveyform_cust" method="POST">
            {{ csrf_field() }}
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">X</button>
					<h4 class="modal-title">Client Referral Form</h4>
				</div>
				<div class="modal-body">
					<form name="info_form" class="form-inline" action="#" method="post">
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="customer_name" id="name" placeholder="Name" required>
						</div>
						
						
						<div class="form-group col-sm-12">
							<select class="block drop-arr select-sty" name="loan_type">
							   <option>Type Of Loan Needed </option>
							   <option>Home Loan</option>
							   <option>Personal Loan</option>
							   <option>Loan Aganst Property</option>
							   <option>Business Loan</option>
							   <option>Car Loan</option>
							   
							</select>
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="customer_contact" id="phone" placeholder="Contact Number*" required>
						</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="customer_email" id="email" placeholder="Enter Email" required>
						</div>
						
						
						<div class="form-group col-sm-12">
							<button type="submit" id="sub_all" class="btn btn-default pull-left">Submit</button>
							
						</div>
					</form>
				</div>
				</form>
			</div>

			</div>
			
      
</div>


<script type="text/javascript">

 $("#credit_id").click(function(event){
         event.preventDefault();
      if(!  $('#surveyform').valid()){
        return false;
      }else{
        // console.log($('#surveyform').serialize());
        //document.getElementById('tracapp').submit();
         $('#myModal112').modal('show');

      }
            
      
      // }
});
</script>
<script type="text/javascript">
    $("#sub_all").click(function(event){
         event.preventDefault();
      if(!  $('#surveyform').valid()){
        return false;
      }else{
        // console.log($('#surveyform').serialize());
        //document.getElementById('tracapp').submit();
         if(!  $('#surveyform_cust').valid()){
              return false;
            }else{
                alert("ok");
                 $.ajax({  
               type: "POST",  
               url: "{{URL::to('survey_form')}}",
               data : $('#surveyform, #surveyform_cust').serialize(),
               dataType: 'json',
               success: function(msg){
               $(".iframeloading").hide(); 
                if(msg==2){
                   alert("Something Went Wrong");       
                } 
                else{
                  
                }

              }  
            });

      }
            
      
      }
});
</script>
