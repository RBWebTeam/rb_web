   @include('layout.header')
   <div class="container">
    
    <aside id="fh5co-hero">
      
        <div class="row">
		<h3 class="text-center" style="padding:20px;"><i class="icon-user"></i> My Profile</h3>
		 <div class="white-bg pad mrg-btm">
            
            
            
            <div class="col-md-3 col-sm-12">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-stacked tabs-left">
                    
                    <li class="active"><a href="#profile" id="#profile" data-toggle="tab" class="pad-lft-rgt">My Profile<i class="icon-profile"></i></a></li>
                <!--     <li><a href="#messages" data-toggle="tab">Notifications</a></li> -->
                       
                     <li><a href="#extraDetails" data-toggle="tab">Extra Details</a></li>
                     <li><a href="#credit-score" data-toggle="tab">My Credit Score </a></li>
                     <li><a href="#Loan-history" data-toggle="tab">My Quotes </a></li>
                         <!-- <li><a href="#Track-Apllication" data-toggle="tab">Track Application </a></li> -->
                            
                               @if($query->password!='0')
                                      <li><a href="#change-password" data-toggle="tab">Change password </a></li>
                                @endif
                                     
                        

                    <li></li>
                   
                </ul>
            </div>
			<!-- Tab panes -->
                <div class="row">
            <div class="col-md-8 col-sm-12">
                
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <form name="profile_update" id="profile_update" method="post">
                                <div class="col-md-6 pad11"><input name="username" value="{{$query->username}}" type="text" placeholder="Type Your Full Name" required></div>
                                <div class="col-md-6 pad11"><input name="email" value="{{$query->email}}" type="text" placeholder="Email Id" readonly></div>
                               
                               <div class="col-md-6 pad11">
                                 @if($query->contact==0)
                                    <input name="contact" type="text" placeholder="Mobile No."  required maxlength="10" min="8"  pattern="[7-9]{1}[0-9]{9}">
                                  @else
                                     <input name="contact" type="text" placeholder="Mobile No." value="{{$query->contact}}" required maxlength="10" min="8"  pattern="[7-9]{1}[0-9]{9}">
                                  @endif

                               </div>
                                <div class="col-md-6 pad11 text-danger"  id="errorphon"></div>
                            
                                <input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">

                                <div  class="col-md-12">
                                <button class="btn btn-primary btn-outline with-arrow profile-details">Update<i class="icon-arrow-right"></i></button>
                                </div>
                            </form>

                            <!-- <div class="col-md-12"><p>Get Free Credit Report <a href="#"> click Here..</a></p></div> -->
                        </div>


                        <div class="tab-pane" id="extraDetails">   
                         <form name="extradetailsform" id="extradetailsform" method="post" >   
                                <div class="col-md-6 pad11">
                                    @if(isset($cquery->dob))
                                     <input type="text" class="datepicker minimumSize lastReporteddate" name="dob" value="{{$cquery->dob}}"  />
                                  @else
                                    <input type="text" class="datepicker minimumSize lastReporteddate" name="dob"  placeholder="Date Of Birth" required />
                                  @endif
                           

  </div>
                                <div class="col-md-6 pad11 text-danger" id="errordetails"></div>
                                

                                  @if(isset($cquery->gender))
                                      <?php $gender=$cquery->gender;?>
                                  @else
                                      <?php $gender='';?>
                                  @endif
                                <div class="col-md-12">
                                    <span><strong>Gender :-</strong></span> &nbsp;&nbsp; Male 
                                    <input name="gender" value="male" <?php if ($gender == 'male'){ echo "checked='checked'";}else{ echo "checked='checked'"; } ?>  type="radio" class="rado" > | Female 
                                    <input name="gender" <?php if ($gender == 'female') echo "checked='checked'"; ?> value="female" type="radio" class="rado"  >
                                </div>
                                        <br>


                                   @if(isset($cquery->address))
                                      <?php $address=$cquery->address;?>
                                   @else
                                      <?php $address='';?>
                                   @endif
                                 <div class="col-md-12 pad11">
                                    <textarea name="address" cols="" rows="4" placeholder="Address" required>{{$address}}</textarea>
                                 </div>

                                 <input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">
                                       
                                <div  class="col-md-12">
                                 <button class="btn btn-primary btn-outline with-arrow extradetailsbtn">Submit <i class="icon-arrow-right"></i> </button>
                                 </div>
                         </form>
                        </div>


                          <div class="tab-pane" id="credit-score">
                            @if(isset($cquery->credit_score))
                               
                                      <?php if($cquery->credit_score!='' && $cquery->credit_score!='0'){ $credit_score=$cquery->credit_score;}else{
                                            $credit_score='Not yet Evaluated.';}?>
                            @else
                                      <?php $credit_score='Not yet Evaluated.';?>
                            @endif
                          
                          <div class="col-md-12"><h2> Your credit score :: {{$credit_score}}</h2>  </div>
                           <div class="col-md-12">
                           <p>Get Free Credit Report <a href="{{url('credit-report')}}"> click Here..</a></p>
                           </div>

                          </div>


                         
                          <div class="tab-pane" id="Loan-history">
                          <div>
                          <h2  >Quotes history </h2>
                               @if(isset($loan_history))
                                <ul class="list-group">
                                  <?php foreach ($loan_history as $key => $value) { ?>
                                  <li class="list-group-item"  >

                                     <?php if($value->ProductId==9){?>
                                    <a href="http://beta.erp.rupeeboss.com/homeloan/Home_Loan_Application_Form.aspx?appid=0&qoutid={{$value->ID}}&BankId={{$value->bank_id}}">Searched for   {{$value->Product_Name}}  <span class="badge">Date :{{date('Y:m:d', strtotime($value->created_at))}}  </span><span class="btn btn-success btn-sm pull-right view-btn-tp-mrg">View </span></a>
                                    <?php }else{ ?>
                                      <a href="http://beta.erp.rupeeboss.com/personalloan/personalloan.aspx?appid=0&qoutid={{$value->ID}}&BankId={{$value->bank_id}}">Searched for   {{$value->Product_Name}}  <span class="badge">Date :{{date('Y:m:d', strtotime($value->created_at))}}  </span><span class="btn btn-success btn-sm pull-right view-btn-tp-mrg">View </span></a>
                                    <?php } ?>


                                  </li>


                                  <?php } ?>
                                </ul>
                               
                                @else
                               <p>No histories yet!!!</p>
                                @endif
                             </div>
                      
                          </div>
						  

                          <div class="tab-pane" id="Track-Apllication">
                         Track application
                          </div>


                          <div class="tab-pane" id="change-password">
                          
                          
                          
                          
         
            <div class="tab-pane active" id="profile">
                 <form id="confirmpassword" name="confirmpassword" role="form" method="POST"> {{ csrf_field() }}

                <div class="has-error">
                  <div class="high">
                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password"  />
					<span id="currentp"></span>
                  </div>
                </div>

                  <div class="has-error">
                    <div class="high"> 
                    <input type="password" name="password" id="password" class="form-control clr-ddd"  placeholder="New Password" >
					<span id="newpass"></span>
                    </div>

                  </div>

                <div class="has-error">
                    <div class="high"> 
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control clr-ddd"  placeholder="Confirm Password" >
				           	<span id="confirmpass"></span>
                    <br>
                   <span id="success1" class="col-md-6 pad11 text-danger"></span>
                    <br>
                   <span id="success" class="col-md-5 text-success"></span>
                    <br>
                    </div>

                   
                    
                  </div>
                  
                  
                  <div> 
                    <button class="btn btn-primary btn-outline with-arrow change_password_form" >Submit<i class="icon-arrow-right"></i></button>
                  </div>

      </form>

                        </div>


                          </div>
                        
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
         </div>
        
    </aside>
</div>


@include('layout.footer')
@include('layout.script')

