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

  <!-- Modal  Sign in-->
  <div class="modal fade" id="log_popup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
         <div class="modal-content">
          <div style="display: block;" id="login">
             <!-- login-->
          <div class="modal-header login_modal_header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2 class="modal-title" id="myModalLabel">Login to Your Account</h2>
          </div>
          <div class="modal-body login-modal">
            <p id="msg" style="color:#EF6C00;font-size: 12"></p>
            <br/>
            <div class="clearfix"></div>
            <div id='social-icons-conatainer'>
        
              <div class='modal-body-left' >

               <form name="login_form" id="login_form"   method="post">

               <div class="form-group">
                  <input type="text"  name="email_login" placeholder="Enter  Email"  class="form-control login-field" required>
                      <i class="fa fa-user login-field-icon"></i>
                 </div>
                     
                    <input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                      <input type="password" name="login_pass" placeholder="Password"  class="form-control login-field" required>
                      <i class="fa fa-lock login-field-icon"></i>
                  </div>

                    
                 <a id="login_submit" class="btn btn-success modal-login-btn sidebar-submit ">Login</a>

                  <!--  <div>
                      <a class="btn btn-primary btn-outline with-arrow sidebar-submit" id="registration_submit">Submit<i class="icon-arrow-right"></i></a>
                  </div> -->

                 </form>

                  <a href="#"  class="login-link text-center">Lost your password?</a>
              </div>
        
              <!-- <div class='modal-body-right'>
                <div class="modal-social-icons">
                  <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
                  <a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Sign In with Twitter </a>
                  <a href='#' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
                  <a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Sign In with Linkedin </a>
                </div> 
              </div>  
              <div id='center-line'> OR </div> -->
            </div>                                                        
            <div class="clearfix"></div>

            <div class="form-group modal-register-btn">
              <button id="registration" onclick="registration()" class="btn btn-default"> New User Please Register</button>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="modal-footer login_modal_footer">
          </div>
        
      </div>

 <div style="display:none;" id="registration1">
             <!-- registration-->


 <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration</h4>
        </div>
        <div class="modal-body">
          <form name="registration_form" id="registration_form"   method="post"  >
          {{ csrf_field() }}

               <div><fieldset>
        <input class="newsletter-name" name="name"  placeholder="Name" required>
          </fieldset>
        </div>

          <div><fieldset>
          <input class="newsletter-name" type="email" id="reg_email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="email" required>
          <div id="erroremail"></div>
          </fieldset>                 
          </div>
          
          <div><fieldset>
            <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number" >
          </fieldset>                 
          </div>

      <div><fieldset>
        <input type="password" class="newsletter-name" id="password"  name="password" placeholder="password" required>
          </fieldset><div id="errors"></div>
      </div>

      <div><fieldset>
        <!--  <input type="password" class="newsletter-name" onblur="confirmp()"  name="password_confirm" placeholder="password_confirm" > -->

         <input type="password" class="newsletter-name"  name="password_confirm" id="password_confirm" placeholder="password confirm" >
          </fieldset>
      </div>


                  <div>
                      <a class="btn btn-primary btn-outline with-arrow sidebar-submit" id="registration_submit">Submit<i class="icon-arrow-right"></i></a>
                  </div>

                  <a href="#" onclick="backf()">login</a>

            </form>




            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>






</div>

      </div>
      
    </div>
  </div>
  <!-- Modal  Sign in end -->

