<!---Instant Call Back Start-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instant Call Back</h4>
        </div>
        <div class="modal-body">
          <form name="instant_call_form" id="instant_call_form" method="post" >
          {{ csrf_field() }}
          <input type="hidden" name="form" value="instant_call">
									<div>
										<fieldset>
											<input class="newsletter-name" name="name" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<a class="btn btn-primary btn-outline with-arrow sidebar-submit" id="instant_call_submit">Submit<i class="icon-arrow-right"></i></a>
									</div>
						</form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Instant Call Back End -->
<!---Talk to us Start -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Talk To Us</h4>
        </div>
        <div class="modal-body">
          <form name="talk_to_us_form" id="talk_to_us_form" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="form" value="talk_to_us_form">
									<div>
										<fieldset>
											<input class="newsletter-name" name="name" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Talk To Us End -->
<!---Email Us Start -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Email Us</h4>
        </div>
        <div class="modal-body">
          <form name="email_us_form" id="email_us_form" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="form" value="email_us_form">
									<div>
										<fieldset>
											<input class="newsletter-name" name="name" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="email" class="newsletter-name" name="email"  required  placeholder="Email address">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Email Us End -->
<!---Help Start -->
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help</h4>
        </div>
        <div class="modal-body">
          <form name="help_form" id="help_form" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="form" value="help_form">
									<div>
										<fieldset>
											<input class="newsletter-name" name="name" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!---Help End -->
<!-- login Start-->
    <div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Fill details</h4>
      </div>
      <div >
     <div> 
   <div id="send_otp">  
    <form class="form-horizontal" id="login_form" method="POST">
     {{ csrf_field() }}
   
    <div class="form-group">
    
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="your good name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="contact" class="col-sm-2 control-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact number"  pattern="[789][0-9]{9}" required maxlength="10" minlength="10" onkeypress="return fnAllowNumeric(event)">
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-10">
     <span id='msg_err' style="display: none;">oops something went wrong</span>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="product" value="personal_loan">
      <button class="btn btn-default"  id="send_otp_button" data-toggle="modal" data-target="#otp_modal">Send OTP</button>
    </div>
  </div>
  </form>
  </div>
      </div>
      </div>
      
    </div>
   
  </div>
</div>

<!-- login end-->
<!-- otp Start-->
<div id="otp_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enter OTP</h4>
        <form id="otp_form" class="form-horizontal">
         {{ csrf_field() }}
         <input type="text" class="form-control" name="otp" id="otp" minlength="6" maxlength="6" required onkeypress="return fnAllowNumeric(event)">
         <span id='otp_err' style="display: none; color: red">oops!! OTP is wrong</span><br>
         <button class="btn btn-default"  class="form-control" id="verify_otp" >Verify</button><br>
         
      </div>
    </div>
  </div>
</div>

<!-- otp end-->
