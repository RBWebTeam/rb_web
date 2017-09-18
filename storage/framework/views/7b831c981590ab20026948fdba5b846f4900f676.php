
  <!-- Modal  Sign in-->
  <div class="modal fade" id="log_popup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
         <div class="modal-content">
          <div id="login">
             <!-- login-->
         
      <div class="modal-body login-modal">  
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <br>
       <div class="panel pan-log">
          <div class="panel-heading">
            <div class="row" id="forgot-password-hide">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <div class="row displaynone" id="forgot-password-show">
              <div class="col-xs-6">
                <h3>Forgot Password</h3>
              </div>
            </div>
            <hr>
          </div>

          <div class="panel-body">
            <div class="row">
              <div class="col-lg-6">
            <form class="login-form block" name="login_form" id="login_form"  method="post" >                   <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                    <input type="text" name="email_login" id="email_login" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                     <div class="form-group">
                    <input type="password" name="login_pass" id="login_pass" tabindex="2" class="form-control" placeholder="Password">
                    <span id="msg" class="error-msg"></span>
                  </div>
                      
                
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                         <!--  <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a> -->
                           <a href="#" id="forgot-form-link">Forgot password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                            <button id="login_submit" class="form-control btn btn-log login-submit ">Login</button>
                      </div>
                    </div>
                  </div>

                </form>
                </div>
                <div class="col-lg-6 social-ico">
               <a href="javascript:void(0);" onclick="fbLogin();" id="fbid" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Facebook </a>
                <a href="#" class="btn btn-default google" onclick="login();"> <i class="fa fa-google-plus modal-icons"></i> Google</a>
               </div>

                <div class="col-lg-12">
                <form class="register-form displaynone"  name="registration_form" id="registration_form"   method="post" > 
                 <?php echo e(csrf_field()); ?>


                  <div class="form-group">
                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Username" >
                      <span id="errorName" class="error-msg"></span>
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address"  >
                    <span id="errorEmail"  class="error-msg" ></span>
                  </div>

                   <div class="form-group">
                    <input type="text" name="contact" id="contact" onkeypress="return fnAllowNumeric(event)" maxlength="10"  tabindex="1" class="form-control" placeholder="Mobile Number" >
                    <span id="errorcontact"  class="error-msg"></span>
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                     <span id="errorpassword"  class="error-msg" ></span>
                  </div>
                   
                  <div class="form-group">
                    <input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password">
                     <span id="errorpasswordconfirm"  class="error-msg"></span>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <button class="form-control btn btn-log registration-submit" id="registration_submit"> Register</button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
              
         <div class="col-lg-12">
             <form class="forgot-form displaynone"  name="forgot_password_form" id="forgot_password_form"   method="post"  >
              <?php echo e(csrf_field()); ?>

                 <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email ID" >
                    <span id="forgotpass"  class="text-danger"></span>
                  </div>
                    <div class="form-group">
                    <div class="row">
                      <div class="col-sm-3 col-sm-offset-3">
                        <button class="form-control btn btn-log " id="f_password">Submit</button>
                        
                      </div>
                      <a href="#" id="back_id" class="btn btn-default">Back</a>
                    </div>


                  </div>           
              </form>
                <span class="forgotps"></span>
          </div>
              
              
            </div>
          </div>
        </div>
      

           </div>
         </div>
       </div>
    </div>
</div>


