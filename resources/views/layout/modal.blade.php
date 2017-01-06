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

