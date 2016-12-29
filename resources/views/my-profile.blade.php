   @include('layout.header')
   <div class="container">
    
    <aside id="fh5co-hero">
      
        <div class="row" style="min-height:300px;">
            
            <h3 class="text-center" style="padding:20px;"><i class="icon-user"></i> My Profile</h3>
            
            <div class="col-md-3 col-sm-12">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-stacked tabs-left">
                    
                    <li class="active"><a href="#profile" data-toggle="tab" class="pad-lft-rgt">My Profile<i class="icon-profile"></i></a></li>
                  <!--   <li><a href="#messages" data-toggle="tab">Notifications</a></li> -->
                    <li><a href="#extra_details" data-toggle="tab">Extra Details</a></li>
                    <li><a href="#credit_score" data-toggle="tab">My Credit Score</a></li>
                    <li><a href="#loan_history" data-toggle="tab">My Loan History</a></li>
                    <li><a href="#track_application" data-toggle="tab"><i class="fa fa-map-marker" aria-hidden="true"></i>  Track Application</a></li>
                    
                   <!--  <li><a href="#">Logout</a></li> -->
                </ul>
            </div>
            <div class="col-md-9 col-sm-12">
                <!-- Tab panes -->
                <div class="row">
                    <div class="tab-content pad-no">
                        <div class="tab-pane active" id="profile">
                            <form>
                                <div class="col-md-6 pad11"><input name="" type="text" placeholder="Type Your Full Name"></div>
                                <div class="col-md-6 pad11"><input name="" type="text" placeholder="Email Id"></div>
                                <!-- <div class="col-md-6 pad11"><input name="" type="date" placeholder="Date of Birth"></div> -->
                                <div class="col-md-6 pad11"><input name="" type="text" placeholder="Mobile No."></div>

                                <div class="col-md-9 col-sm-12">
                                    <center><button type="button" class="btn btn-danger">Update</button></center>
                                </div>
                                
                               
                                
                            </form>
                           
                        </div>
                        <!-- <div class="tab-pane" id="messages">Messages Tab.</div> -->
                        <div class="tab-pane" id="extra_details">
                             <form>

                                <div class="col-md-6 pad11"><input name="" type="date" placeholder="Date of Birth"></div>
                                 
                                  <div class="col-md-12"><span><strong>Gender :-</strong></span> &nbsp;&nbsp; Male <input name="mal" type="radio" class="rado"> | Female <input name="mal" type="radio" class="rado"></div>
                                <br>
                                <div class="col-md-12 pad11"><textarea name="" cols="" rows="4" placeholder="Address"></textarea></div>
                             </form>

                             <div class="col-md-9 col-sm-12">
                                    <center><button type="button" class="btn btn-danger">Submit</button></center>
                                </div>
                                
                        </div>

                        <div class="tab-pane" id="credit_score">
                            <form>
                                 <center><div class="col-md-12"><p>Get Free Credit Report <a href="#"> click Here..</a></p></div></center>
                            </form>


                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        
    </aside>
</div>
@include('layout.footer')
@include('layout.script')


