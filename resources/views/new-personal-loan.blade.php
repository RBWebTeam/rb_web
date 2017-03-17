@include('layout.header')

<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Personal Loan</h2>
	</div>
 <div class="col-md-12 white-bg mrg-btm box-shadow">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div>
 <div class="col-md-12 white-bg pad box-shadow fl-lft">
    
    <form class="form-horizontal" id="personal_loan_form">
      {{ csrf_field() }}
	<div class="col-md-8">
	<h3 class="main-header">Genral Information</h3>
<center><div class="type-cover"><span>PURPOSE OF LOAN</span></div></center>
<div class="text-center flt-lft">
							<div class="scenario">
								<div class="col-xs-6 pad-no scenario-active"><a class="scenario-1">Marriage</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 scenario-border">Home Releted</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 scenario-top-border">Business</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 scenario-top-border scenario-border">Other</a></div>
							</div>
						</div>
						
						<div class="col-xs-4 form-padding">
     <input type="text" name="custom_id" id="custom_id" class="form-input-new form-control" placeholder="Existing Custom Id if Any" onkeypress="return isNumberKey(event)" required="">
	</div>
	<div class="col-xs-4 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Loan Required" required="">
	</div>
	<div class="col-xs-4 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="City of Location" required="">
	</div>
	
	<div class="loan-tenure">
									<center>
										<div class="type-cover">
											<span>LOAN TENURE</span>
										</div>
									</center>
									<div class="scaling-slider">
									
										<div class="tenure offset5 pad">
			                    <div  id="unranged-value" style="width:100%; height:10px;"></div>
			                     
									</div>
									</div>
								</div>
								
								
								
  
	   <div class="col-xs-8 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Applicant Name" required="">
	</div>
	
	<div class="col-xs-4 form-padding">
	 <div class="btn-grp form-control border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 active"><input type="radio" name="Status" id="option1"><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs"> Male</span>
                                   <span class="btn btn-default outer-brd1 "><input type="radio" name="Status" id="option2"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs"> Female</span>
           </div>		   
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="date" class="form-input-new form-control" placeholder="Date of Birth" required="">
	</div>
	
	<div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-blu active"><input type="radio" name="Status" id="option1"> Salaried</span>
      <span class="btn btn-primary outer-brd btn-blu"><input type="radio" name="Status" id="option2"> Self-Emp</span>
         </div>
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Monthly Income" required="">
	</div>
	
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Exsisting EMI (If Any)" required="">
	</div>
	
	<div class="col-md-12">						
	<button class="btn btn-primary btn-outline with-arrow top-mrg pull-left quotes">Get Best Quotes<i class="icon-arrow-right"></i></button>
	</div>
     </div>
     </form>

	 
	 <div class="col-md-4">
	   <div class="border brd-for">

             <form class="" id="compareform" role="form" method="POST" action="">
				  
				  
				    <div class="inp-hig">
					  <label class="form-label-new">Loan Amount</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="5,00,000" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Best ROI</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Best ROI" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
                 <label class="form-label-new">Tenure</label>
					  <select class="form-control">

					  <option>5</option>
					   <option>1</option>
					  <option>3</option>
					 
					  <option>7</option>
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>30</option>
					  </select>
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Processing Fee</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="2,500" required class="clr-ddd" />
				    </div>

			  <div> 
			    
			     <button style="display:block; width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">Apply Now</button>
				 <button style="width:49%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">Eligibility</button>
				 <button style="width:49%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">Call For RM</button>
			   
			  </div>
			</form>
		</div>	
	</div> 
	
	
	
	</div>
	</aside>
	</div>
	<br>
	
	
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
  $(".quotes").click(function(event){
    event.preventDefault();
      $form=$('#personal_loan_form');
      if(! $form.valid()){
         // alert("hiee");
      }else{
        //var s=$('#'+form).serialize();
    // alert("hiee");
   
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('RBA-login')}}",
         data : $('#rba_form').serialize(),
         success: function(msg){
         
          if(msg=='true'){
            console.log("ok");
             // console.log(msg);
              window.location.href ="{{URL::to('thank-you')}}";
            
          }else{
            $("#showerror").show();

            //console.log("bye");
            //window.location.href ="{{URL::to('went-wrong')}}";
          } 
          

        }  
      }); 
      }

    });


</script>

