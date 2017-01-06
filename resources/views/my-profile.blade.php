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
                <!--     <li><a href="#messages" data-toggle="tab">Notifications</a></li> -->
                   <li><a href="#extraDetails" data-toggle="tab">Extra Details</a></li>
                     <li><a href="#credit-score" data-toggle="tab">My Credit Score </a></li>
                       <li><a href="#Loan-history" data-toggle="tab">Loan History </a></li>
                         <li><a href="#Track-Apllication" data-toggle="tab">Track Application </a></li>
                    <li></li>
                   
                </ul>
            </div>
            <div class="col-md-9 col-sm-12">
                <!-- Tab panes -->
                <div class="row">
                    <div class="tab-content pad-no">
                        <div class="tab-pane active" id="profile">
                            <form name="profile_update" id="profile_update" method="post">
                                <div class="col-md-6 pad11"><input name="username" value="{{$query->username}}" type="text" placeholder="Type Your Full Name" required></div>
                                <div class="col-md-6 pad11"><input name="email" value="{{$query->email}}" type="text" placeholder="Email Id" readonly></div>
                               
                               <div class="col-md-6 pad11">
                               <input name="contact" type="text" placeholder="Mobile No." value="{{$query->contact}}" required maxlength="10" min="8"  pattern="[7-9]{1}[0-9]{9}">
                               </div>
                                <div class="col-md-6 pad11 text-danger"  id="errorphon"></div>
                               

                            
                                <input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">



                                <div  class="col-md-12">
                                <button class="btn btn-primary profile-details">Update</button>
                                </div>
                            </form>

                            <!-- <div class="col-md-12"><p>Get Free Credit Report <a href="#"> click Here..</a></p></div> -->
                        </div>


                        <div class="tab-pane" id="extraDetails">   
                         <form name="extradetailsform" id="extradetailsform" method="post" >   
                                <div class="col-md-6 pad11">
                                  @if(isset($cquery->dob))
                                     <?php $dob=$cquery->dob;?>
                                  @else
                                     <?php $dob='';?>
                                  @endif
                                    <input name="text" value="{{$dob}}" class="datepicker" placeholder="Date of Birth" required>

                                    
                                </div>
                                <div class="col-md-6 pad11 text-danger" id="errordetails"></div>
                                

                                  @if(isset($cquery->dob))
                                      <?php $gender=$cquery->gender;?>
                                  @else
                                      <?php $gender='';?>
                                  @endif
                                <div class="col-md-12">
                                    <span><strong>Gender :-</strong></span> &nbsp;&nbsp; Male 
                                    <input name="gender" value="male" <?php if ($gender == 'male') echo "checked='checked'"; ?>  type="radio" class="rado" required> | Female 
                                    <input name="gender" <?php if ($gender == 'female') echo "checked='checked'"; ?> value="female" type="radio" class="rado" required>
                                </div>
                                        <br>


                                   @if(isset($cquery->dob))
                                      <?php $address=$cquery->address;?>
                                   @else
                                      <?php $address='';?>
                                   @endif
                                 <div class="col-md-12 pad11">
                                    <textarea name="address" cols="" rows="4" placeholder="Address" required>{{$address}}</textarea>
                                 </div>

                                 <input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">
                                       
                                <div  class="col-md-12">
                                 <button class="btn btn-primary extradetailsbtn">Submit</button>
                                 </div>
                         </form>
                        </div>


                          <div class="tab-pane" id="credit-score">

                          <div class="col-md-12"> Your credit score  </div>

                           <div class="col-md-12">
                           <p>Get Free Credit Report <a href="#"> click Here..</a></p>
                           </div>

                          </div>


                          <div class="tab-pane" id="Loan-history">

                         Loan history

                          </div>


                          <div class="tab-pane" id="Track-Apllication">

                         Track application

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


