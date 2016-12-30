@include('layout.header')
<div class="container" id="fh5co-hero">
<div class="row">
		<div class="col-sm-5">
			<img src="{{URL::to('images/helpbg _new.jpg')}}" class="img-responsive" style="width:100%;height:auto; border:1px solid #ddd;">
		</div>
		<div class="col-sm-7">
			<h1>Have us call you now. <span style="color:red">It's FREE!</span></h1>
			<h2>Your contact details:</h2>
			<div class="row">
				<form class="col-sm-12 helpform" name="subscribe-form1" id="subscribe-form1" method="POST">
					<div class="row">
						<div class="form-group col-sm-6">
						  <label for="usr">First Name:</label>
						  <input type="text" class="form-control" id="fname" name="fname" required="">
						</div>
						<div class="form-group col-sm-6">
						  <label for="usr">Last Name:</label>
						  <input type="text" class="form-control" id="lname" name="lname" required="">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
						  <label for="usr">Mobile Number:</label>
						  <input type="text" name="subscribe_mobile1" id="subscribe_mobile1" class="form-control" minlength="10" onkeypress="return fnAllowNumeric(event)" pattern="[789][0-9]{9}" required="" maxlength="10" placeholder="Contact">
						</div>
						<div class="form-group col-sm-6">
						  <label for="usr">Select Product:</label>
						  <select class="form-control" name="prod" id="prod" required="">
			        <option value="">Loan</option>
			        						
					<option value="PERSONAL LOAN">Personal loan</option>
											
					<option value="HOME LOAN">Home loan</option>
											
					<option value="CAR LOAN">Car loan</option>
											
					<option value="BUSINESS LOAN">Business loan</option>
											
					<option value="SME">Sme</option>
											
					<option value="LOAN AGAINST PROPERTY">Loan against property</option>
											
					<option value="CREDIT CARD">Credit card</option>
								      </select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
						  <button type="button" id="subscribe-form-submit1" class="btn btn-danger btn-lg" style="background-color:#ed1c24">CALL ME BACK NOW</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('layout.footer')
@include('layout.script')

