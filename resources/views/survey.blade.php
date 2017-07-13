@include('layout.header')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .div-bg {background:#fff;}
   .bdy-clr {background:#fff; box-shadow:1px 1px 3px 1px #ccc;}
   .titl {padding:10px; width:100%;text-align:left;font-size:18px;}
   
   
   #myModal .modal-dialog {
    width: 400px;
    padding: 0px ;
    position: relative;
}

#myModal .modal-dialog {
    width: 400px;
    padding: 0px ;
    position: relative;
}


.custom-modal-header {
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
}

#myModal .modal-dialog .close {
    z-index: 99999999;
    color: white;
    text-shadow: 0px 0px 0px;
    font-weight: normal;
    top: 4px;
    right: 6px;
    position: absolute;
    opacity: 1;
}

.custom-modal-header .modal-title {
    /* font-weight: bold; */
    font-size: 18px;
}

#myModal .modal-dialog:after {
    content: '';
    height: 0px;
    width: 0px;
    /* border-right: 50px solid rgba(255, 0, 0, 0.98); */
    border-right: 50px solid #17b6bb;
    border-bottom: 50px solid transparent;
    position: absolute;
    top: 1px;
    right: -14px;
    z-index: 999999;
}

.form-group {
    margin-bottom: 15px !important;
}

.form-inline .form-control {
    display: inline-block;
    width: 100%;
    vertical-align: middle;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #000;
}
.pad {padding:10px;}
.input-box {border:none;border-bottom:1px dashed #999;}




 .ccc {margin-bottom:20px;padding:10px;border-bottom:2px solid #f1f1f1;}
</style>
<script>
$(window).on('load', function(){
        setTimeout(function() {
                $('#myModal11').modal('show');
        }, 1000);
			});
			
  </script>
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
<input type="radio" name="rdo"/> Very satis?ed &nbsp; <input type="radio" name="rdo" /> Somewhat satis?ed &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatis?ed &nbsp; <input type="radio" name="rdo" /> Very dissatis?ed
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
<input type="radio" name="rdo" /> Very satis?ed &nbsp; <input type="radio" name="rdo" /> Somewhat satis?ed &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatis?ed &nbsp; <input type="radio" name="rdo" /> Very dissatis?ed
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">4.Professionalism</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very satis?ed &nbsp; <input type="radio" name="rdo" /> Somewhat satis?ed &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatis?ed &nbsp; <input type="radio" name="rdo" /> Very dissatis?ed
</div>
    </div>
    
    <div class="col-md-12 ccc">
    <h3 class="titl">5.Sales staff</h3>
    <div class="text-left">
<input type="radio" name="rdo" /> Very satis?ed &nbsp; <input type="radio" name="rdo" /> Somewhat satis?ed &nbsp; <input type="radio" name="rdo" /> Neutral &nbsp; <input type="radio" name="rdo" /> Somewhat dissatis?ed &nbsp; <input type="radio" name="rdo" /> Very dissatis?ed
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



  <div id="myModal11" class="modal fade" role="dialog" aria-hidden="true" >
		<div class="modal-dialog">
			
			<!-- Modal content -->
			<div class="modal-content row">
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Enquire Now</h4>
				</div>
				<div class="modal-body">
					<form name="info_form" class="form-inline" action="#" method="post">
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
						</div>
						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="checkin" id="cheeckin" placeholder="Check-In Date">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="checkout" id="cheeckout" placeholder="Check-Out Date">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
						</div>
						
						
						<div class="form-group col-sm-12">
							<button type="submit" class="btn btn-default pull-right">Submit</button>
						</div>
					</form>
				</div>
				
			</div>
			</div>
			
      
</div>
