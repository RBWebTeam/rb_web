<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>RBL Credit Card Form</h2>
					
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row text-left comp-pg rate white-bg box-shadow">

						
							<form class="" id="compareform" role="form" method="POST" >
							 

								<div class="row">
									<div class="form-group">
									
										
										
										 
										<div class="col-md-2">
										     <select class="block drop-arr select-sty" name="" id="" required>
						                      <option disabled selected  value="">MR</option>
						                        <option value="1">MRS</option>
						                        
						                    </select> 
						                    </div>
										<div class="col-md-5">
											<input type="text" class="form-control" placeholder="Credit Card Applied" name="" id="">
										</div>
										<div class="col-md-5 lst-nam">
											<input type="text" class="form-control" placeholder="Had Loan or Credit Card From Any Bank" name="" id="" required>
										</div>
										

										<div class="col-md-4">
											<input type="text" class="form-control" id="" name="" placeholder="First Name" required>
										</div>

                                         <div class="col-md-4">
											<input type="text" class="form-control " id="" name="" placeholder="Middle Name" required>
										</div>
										
										<div class="col-md-4">
											<input type="text" class="form-control " id="" name="" placeholder="Last Name" required>
										</div>

										<div class="col-md-4">
											<input type="text" class="form-control " id="" name="" placeholder="Father Name" onkeypress="return AllowAlphabet(event)" required>
										</div>


										<div class="col-md-4">
										<div class="form-control border-none">
									   <label class="label-txt">Gender</label>
										<input type="radio"  name="Gender" id="150"  class="radiob" checked value="Male"><label for="150">&nbsp;Male</label>
                                        <input type="radio" name="Gender" id="151"  class="radiob" value="Female" ><label for="151">&nbsp;Female </label>
										
					                    </div>
										</div>
										
										<div class="col-md-4">
											<input type="text" class="form-control " id="" name="" placeholder="Date of Birth" required>
										</div>
										
									
                                        
                                        

					                   

									</div>
									<hr>
								</div>
								
								
								
								
								<div class="row sec" id="section1">
									<div class="form-group">
									
									<hr>
										
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Residence Address 1" name="" id="" required="">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Residence Address 2" name="" id="" required="">
										</div>
										
										<div class="col-md-4">
											<input type="text" id="" name="" class="form-control" placeholder="Landmark"  required>
										</div>

										<div class="col-md-4">
											<input type="text" id="" name="" class="form-control" placeholder="Residence City"  required>
										</div>
										
										<div class="col-md-4">
											<input type="text" id="" name="" class="form-control" placeholder="Residence Pincode"  required>
										</div>
                                        
                                        <div class="col-md-4">
											<input type="text" id="" name="" class="form-control" placeholder="Email ID"  required>
											<div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
										</div>
                             
                                       <div class="col-md-4">
											<input type="text" id="" name="" class="form-control" placeholder="Applicant Net Monthly Income
"  required>
										</div>

										<div class="col-md-4">
											 <input type="text" class="form-control" id="" name=""  required maxlength="10" placeholder="Mobile Number" >
										</div>

										<div class="col-md-4">
					                    <select class="block drop-arr select-sty" name="" id="" required>
					                      <option disabled selected value="">Employee Type</option>
					                    </select> 
					                     </div>
  										<div class="col-md-4">
										     <input  type="text" class="form-input-new form-control" name="" id="" placeholder="Pancard No." required>
										</div>
										
										
										</div>
										<hr>
									</div>	
							</form>
					
					
					
					<button class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id"  id="credit_id">SUBMIT<i class="icon-arrow-right" ></i></button>

			</div>
			<br>
		</div>	
	</div>
</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="credit_process_sorry">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Application id is <b><span id="drop"></span></b>.<br>You have been <b><span id="drop1"></span></b>.<br><b><span id="drop2"></span></b><h5></p></h4>
        
      </div>
      
      <div class="modal-footer">
        <a type="button" id="upload" name="upload" class="btn btn-primary" onclick="Redirect();" >Proceed to Document Upload</a>
        
      </div>
    </div>
  </div>
</div>






