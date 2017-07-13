@include('layout.header')

<div class="container" id="fh5co-hero">
<br>
<div class="container bdy-clr comp-pg">
  <div class="row">
  <div class="col-md-12">
         <h2 class="align-center loan-head">Customer Satisfaction Survey</h2>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">1. How would you rate your overall satisfaction with us?</h3>
    <div class="text-left">
<input type="radio" name="rdo"/> Very satisfied &nbsp; <input type="radio" name="rdo" /> Somewhat satisfied &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp; <input type="radio" name="rdo" /> Very dissatisfied
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">2. How likely is it that you would recommend us to a friend/colleague?</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very likely &nbsp; <input type="radio" name="rdo" /> Somewhat likely &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat unlikely &nbsp; <input type="radio" name="rdo" /> Very unlikely
</div>
    </div>
	
    
    <div class="col-md-12 ccc">
	<h3 class="text-left"><b>Please rate us on the following attributes:</b></h3>
    <h3 class="titl">3. Customer service</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very satisfied &nbsp; <input type="radio" name="rdo" /> Somewhat satisfied &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp; <input type="radio" name="rdo" /> Very dissatisfied
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">4.Professionalism</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very satisfied &nbsp; <input type="radio" name="rdo" /> Somewhat satisfied &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp; <input type="radio" name="rdo" /> Very dissatisfied
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">5.Sales staff</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very satisfied &nbsp; <input type="radio" name="rdo" /> Somewhat satisfied &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp; <input type="radio" name="rdo" /> Very dissatisfied
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">6.How likely are you to continue doing business with us?</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very likely  &nbsp; <input type="radio" name="rdo" /> Somewhat likely &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat unlikely &nbsp; <input type="radio" name="rdo" /> Very unlikely
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">7. Do you have any suggestions for improving our products/ services?</h3>
    <div class="text-left">
<input type="text" placeholder="Suggestions" class="col-md-12 pad input-box"/>
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">8.If your problem was not resolved, did our staff offer to follow-up after the call?</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Yes &nbsp; <input type="radio" name="rdo" /> No.
</div>
    </div>
    
   <button class="btn btn-info">SUBMIT</button>
    </div>
  </div>
</div>

@include('layout.footer')
@include('layout.script')


  <div id="myModal112" class="modal fade" role="dialog" aria-hidden="true" >
		<div class="modal-dialog">
			
			<!-- Modal content -->
			<div class="modal-content row">
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">X</button>
					<h4 class="modal-title">Client Referral Form</h4>
				</div>
				<div class="modal-body">
					<form name="info_form" class="form-inline" action="#" method="post">
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
						</div>
						
						
						<div class="form-group col-sm-12">
							<select class="form-control block drop-arr select-sty">
							   <option>Type Of Loan Needed </option>
							   <option>Home Loan</option>
							   <option>Personal Loan</option>
							   <option>Loan Aganst Property</option>
							   <option>Business Loan</option>
							   <option>Car Loan</option>
							   
							</select>
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number*">
						</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
						</div>
						
						
						<div class="form-group col-sm-12">
							<button type="submit" class="btn btn-default pull-right">Submit</button>
						</div>
					</form>
				</div>
				
			</div>
			</div>
			
      
</div>
