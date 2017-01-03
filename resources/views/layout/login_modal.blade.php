
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

                    
                 <a id="login_submit" class="btn btn-success modal-login-btn login-submit ">Login</a>

                  <!--  <div>
                      <a class="btn btn-primary btn-outline with-arrow sidebar-submit" id="registration_submit">Submit<i class="icon-arrow-right"></i></a>
                  </div> -->

                 </form>

                 <!--  <a href="#"  class="login-link text-center">Lost your password?</a> -->
              </div>
        
              <div class='modal-body-right'>
                <div class="modal-social-icons">
                  <a href="{{url('facebook')}}" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
                   <a href="{{url('google')}}" class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
                 <!--  <a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Sign In with Twitter </a>
                 
                  <a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Sign In with Linkedin </a> -->
                </div> 
              </div>  
              <div id='center-line'> OR </div>
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
        <input class="newsletter-name" name="name"  placeholder="Name" >
         <div  class="text-danger" id="errorName"></div>
          </fieldset>
         
        </div>

          <div><fieldset>
          <input class="newsletter-name" type="email" placeholder="Email" id="reg_email" name="email" >
          <div  class="text-danger" id="errorEmail"></div>
          </fieldset>                 
          </div>
          
          <div><fieldset>
            <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}"  maxlength="10" placeholder="Mobile Number" >
              <div class="text-danger" id="errorcontact"></div>
          </fieldset>                 
          </div>

      <div><fieldset>
        <input type="password" class="newsletter-name" id="password"  name="password" placeholder="password" >
         <div class="text-danger" id="errorpassword"></div>
          </fieldset>
      </div>

      <div>

      <fieldset>
         <input type="password" class="newsletter-name"  name="password_confirm" id="password_confirm" placeholder="password confirm" >
         <div class="text-danger" id="errorpasswordconfirm"></div>
       </fieldset>

      </div>
                  <div>
                      <a class="btn btn-primary btn-outline with-arrow registration-submit" id="registration_submit">Submit<i class="icon-arrow-right"></i></a>
                  </div>
      </form>

         <div class='msg' style="display: none;"><p>Thanks. You are successfully registered.</p></div>
        </div>
        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close
                           </button>
                            <div style="float: left;" id="Login-here">   <a href="#"  onclick="backf()"> Login here</a>
                            </div>
        </div>

     </div>
</div>

      </div>
      
    </div>
  </div>
  <!-- Modal  Sign in end -->

