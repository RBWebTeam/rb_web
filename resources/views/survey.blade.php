@include('layout.header')
<style>
 .head-1 {
	padding: 10px;
    font-size: 35px;
    width: 75px;
    top: -3px;
    left: -71px;
    color: #999;
    height: 75px;
	border:13px solid #fff;
    border-radius: 56px;
    line-height:24px;
    text-align: center;
    position: absolute;
	}
	.sur-list li { list-style-type:none;padding:5px;border-bottom:1px dashed #fffef3;}
	.bg-yellow {background:#fff7be;}
</style>

<div class="container" id="fh5co-hero">
<br>
<div class="container bdy-clr comp-pg bg-yellow">
  <div class="row">
  <div class="col-md-12">
         <h2 class="align-center loan-head">Customer Satisfaction Survey</h2>
    </div>
   <div class="col-md-2"></div>
	<div class="col-md-8">
	
    <div class="col-md-12 ccc">
    <h3 class="titl bg-danger"><p class="head-1 text-danger">1</p> How would you rate your overall satisfaction with us?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo"/> Very satisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat satisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Neutral &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp;</li> 
<li><input type="radio" name="rdo" /> Very dissatisfied</li>
</ul>
</div>
    </div>
    <div class="col-md-12 ccc">
    <h3 class="titl"><span class="head-1">2</span> How likely is it that you would recommend us to a friend/colleague?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo" /> Very likely &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat likely &nbsp; </li>
<li><input type="radio" name="rdo" /> Neutral &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat unlikely &nbsp; </li>
<li><input type="radio" name="rdo" /> Very unlikely</li>
</ul>
</div>
    </div>
	
    <div><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please rate us on the following attributes:</h3></div>
    <div class="col-md-12 ccc">
	
    <h3 class="titl"><span class="head-1">3</span> Customer service</h3>

    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo" /> Very satisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat satisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Neutral &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Very dissatisfied</li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl"><span class="head-1">4</span>Professionalism</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo" /> Very satisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat satisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Neutral &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp; </li>
<li><input type="radio" name="rdo" /> Very dissatisfied</li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl"><span class="head-1">5</span> Sales staff</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo" /> Very satisfied &nbsp;</li> 
<li><input type="radio" name="rdo" /> Somewhat satisfied &nbsp;</li> 
<li><input type="radio" name="rdo" /> Neutral &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat dissatisfied &nbsp;</li> 
<li><input type="radio" name="rdo" /> Very dissatisfied</li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl"><span class="head-1">6</span> How likely are you to continue doing business with us?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo" /> Very likely  &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat likely &nbsp; </li>
<li><input type="radio" name="rdo" /> Neutral &nbsp; </li>
<li><input type="radio" name="rdo" /> Somewhat unlikely &nbsp;</li> 
<li><input type="radio" name="rdo" /> Very unlikely</li>
</ul>
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl"><span class="head-1">7</span> Do you have any suggestions for improving our products/ services?</h3>
    <div class="text-left mrg-left">
<input type="text" placeholder="Suggestions" class="col-md-12 pad input-box"/>
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl"><span class="head-1">9</span>If your problem was not resolved, did our staff offer to follow-up after the call?</h3>
    <div class="text-left mrg-left">
	<ul class="sur-list">
<li><input type="radio" name="rdo" /> Yes &nbsp; </li>
<li><input type="radio" name="rdo" /> No.</li>
</ul>
</div>
    </div>
   <button class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="credit_id">SUBMIT<i class="icon-arrow-right"></i></button>
   </div>
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
							<select class="block drop-arr select-sty">
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
							<button type="submit" class="btn btn-default pull-left">Submit</button>
							
						</div>
					</form>
				</div>
				
			</div>
			</div>
			
      
</div>
