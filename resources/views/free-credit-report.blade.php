@include('layout.header')
	<div id="fh5co-page">

	

	

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>Free Credit Report</h2>
					
</div>
				
				
				<div class="col-md-9 white-bg">
					<div class="row text-left comp-pg rate">
					<p><b>Would like to know your credit score before applying a loan against property</b></p>
					<p>your personal information is requied to retrive your Experian credit Report and Score. 
					All of the information you provide will be transfrred to us throught a private secure connection</p>
					<form class="" id="compareform" role="form" method="POST" action="">
					<div class="row">
					<div class="form-group">
					<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</h4>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="First Name*" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Middle Name" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Surname*" required=""></div>
					
					<div class="col-md-4"><input type="text" class="form-control" id="name" name="name" placeholder="Date of Birth*" required=""></div>
					<div class="col-md-8">Male &nbsp;&nbsp;<input type="radio" name="name" class="radiob">&nbsp;&nbsp; Female &nbsp;&nbsp;<input type="radio" name="name" class="radiob"></div>
					
					</div>
					</div>
					<div class="row sec">
					<div class="form-group">
					<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Current Addresses Details</h4>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="flat No / Plot No / House No*" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Building / Society Name" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Road No / Area / Locality" required=""></div>
					
					<div class="col-md-4"><input type="text" class="form-control" placeholder="City" required=""></div>
					<div class="col-md-4">
					<select>
					<option>Select City</option>
					</select>
					</div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Pincode*" required=""></div>
					</div>
					</div>
					<!-- <p>Have you been at the current address for more then 6 month. if no, provide the previous address</p> -->
					<div class="row sec">
					<div class="form-group">
					<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h4>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Mobile" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="telephone No" required=""></div>
					<div class="col-md-4">
					<select>
					<option>Telephone Type</option>
					</select>
					</div>
					
					<div class="col-md-12"><input type="email" class="form-control" placeholder="Email Address*" required=""></div>
					</div>
					</div>
					<div class="row">
					<div class="form-group">
					<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Identity Details</h4>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Pancard*" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Passport No*" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Aadhaar No*" required=""></div>
					
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Voter Id*" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Driving License No*" required=""></div>
					<div class="col-md-4"><input type="text" class="form-control" placeholder="Ration card No" required=""></div>
					
					
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated">Confirm & Continue<i class="icon-arrow-right"></i></button>
					</div>
					</form>
					</div>
					
				</div>
				
				<div class="col-md-3 pull-right">
					<div class="text-center guid nl-form-errors">Enter your monthly takehome salary here!
Without any performance bonus or incentives!</div>

        <div class="text-center img1"><img src="images/photo.jpg"></div>
				</div>
			</div>
		</div>	
	</div>

	
	</div>
	
@include('layout.footer')
@include('layout.script')

