@include('layout.header')
<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> 
 <style>
   
   span.multiselect-native-select select {
  border: 0!important;
  clip: rect(0 0 0 0)!important;
  height: 1px!important;
  margin: -1px -1px -1px -3px!important;
  overflow: hidden!important;
  padding: 0!important;
  position: absolute!important;
  width: 1px!important;
  left: 50%;
  top: 30px
}
.multiselect-container {
  position: absolute;
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-top: -738px;
}
.multiselect-container .input-group {
  margin: 5px
}
.multiselect-container>li {
  padding: 0
}
.multiselect-container>li>a.multiselect-all label {
  font-weight: 700
}
.multiselect-container>li.multiselect-group label {
  margin: 0;
  padding: 3px 20px 3px 20px;
  height: 100%;
  font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
  cursor: pointer
}
.multiselect-container>li>a {
  padding: 0
}
.multiselect-container>li>a>label {
  margin: 0;
  height: 100%;
  cursor: pointer;
  font-weight: 400;
  padding: 3px 0 3px 30px
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
  margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
  margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
  padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
  margin-left: -20px;
  margin-right: 0
}
.multiselect {height:42px;z-index:1000;}


@media only screen and (max-width: 768px) {
.loan-head {
    margin-top:0px;
    width: 80%;
    margin-bottom:40px;
}
}
 </style>



       <div class=" ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                               <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                <div class="mb60  section-title text-center  ">
                                <h1 class="">
                                  <h2><center style="border-bottom:1px dashed #ccc;padding-bottom:5px;">Tata Capital Personal Loan</center></h2>
                         </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 300px;">
                      <div id="personal_loan">
                <form id="company_list" name="company_list" method="POST">
                           {{ csrf_field() }}
                               <div class="row">
                  <div class="form-group">
                    <!-- <div class="col-md-12"><h4 class="hdr pad1 text-center">Company List</h4></div> -->

                            <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4">
                      <div class="form-group">
                            <!-- <label for="Company_Name">Company Name: </label> -->
                            <input type="text" class="form-control" name="cFilter" placeholder="Company Name" id="Company_Name">
                            </div>
                          </div>
                            
                            </div>
                            </div>


                          </form>

                          <form id="roi" name="roi" method="POST">
                           {{ csrf_field() }}
                           

                           <div class="col-md-12"><h4 class="hdr pad1 text-center">ROI Acc.To Company</h4></div>

                           <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nSalary" id="nSalary" minlength="5" maxlength="9" placeholder="Net Salary" onkeypress="return fnAllowNumeric(event)"" required>
                      </div>
                    </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" minlength="5" maxlength="9" name="nAmount" id="nAmount" placeholder="Required Loan Amount" onkeypress="return fnAllowNumeric(event)" required>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="nSalary">City: </label>
                                        <select class="form-control drop-arr select-sty" name="cCity" id="cCity" required>
                                          <option disabled selected value="">City</option>
                                        </select>
                                      </div>
                                    </div>
                                     <input type="hidden" class="form-control" name="nComp" id="Company">
                            <br>
                           <div class="col-md-2 col-md-offset-5"> <a class="btn btn-primary btn btn-sm" id="tata_capital_roi"  >Submit</a></div>
                          </form>
                          </div>
                         

                      <div id="tata_capital_pl_form" style="display: none;">
                        <form class="" id="tata_capital_form" name="tata_capital_form" role="form" method="POST" >
                             {{ csrf_field() }}
                             
                               <div class="row">
                                    <div class="form-group">
                                      <div class="col-md-12"><h4 class="hdr pad1 text-center">Personal Details</h4></div>

                                    
                                       
                                       <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                            <select class="form-control"  name="title"  id="title" required>
                                              <option selected disabled value="">Title</option>
                                              <option value="Mr.">Mr.</option>
                                              <option value="Ms.">Ms.</option>
                                              <option value="Mrs.">Mrs.</option>
                                                
                                            </select>
                                        </div>
                                      </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name(as per PAN Record)" maxlength="30" onkeypress="return AllowAlphabet(event)" required>
                                        </div>
                                      </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name(as per PAN Record)" maxlength="30"  onkeypress="return AllowAlphabet(event)">
                                        </div>
                                      </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                             <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name(as per PAN Record)" maxlength="30"  onkeypress="return AllowAlphabet(event)" required>
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                             <input type="text" class="form-control" id="motherMaidenName" name="motherMaidenName" placeholder="Mother Maiden Name" maxlength="40"  onkeypress="return AllowAlphabet(event)">
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                            <select class="form-control"  name="maritalStatus"  id="maritalStatus" required>
                                              <option selected disabled value="">Marital Status</option>
                                                <option value="M">Married</option>
                                                <option value="S">UnMarried</option>
                                                <option value="D">Divorced</option>
                                                <option value="W">Widow</option>
                                                
                                            </select>
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                        
                                            <input type="text" class="form-control lastReporteddob" id="dob" name="dob" placeholder="DOB" required="">
                                            
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                        
                                            <input type="text" class="form-control" id="idValue" name="idValue" oninput="pan_card('idValue')" maxlength="10" placeholder="PAN Number" required>
                                            <div id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</div>
                                        </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                            <input type="text" class="form-control" id="resEmailId" name="resEmailId" placeholder="Email" oninput="mail('resEmailId')" maxlength="255" required>
                                            <div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                        </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                                            <select class="form-control"  name="gender" id="gender" required>
                                              <option value="">Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                
                                            </select>
                                        </div>
                                      </div>

                     

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <select class="form-control"  name="relationship"  id="relationship" required>
                                              <option selected disabled value="">Relationship</option>
                                                <option value="F">Father</option>
                                                <option value="S">Spouse</option>
                                                <option value="NA">NA</option>
                                            </select>
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="relationshipFirstName" name="relationshipFirstName" placeholder="Relationship First Name" maxlength="30" onkeypress="return AllowAlphabet(event)" required>
                                        </div>
                                        </div>

                                        
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="resMobNo" name="resMobNo" placeholder="Mobile No" maxlength="10" onkeypress=" return fnAllowNumeric(event)" required>
                                            <div id="mob_no" style="display:none;color: red; font-size: 10px">Mobile No should be of 10 digits.</div>
                                        </div>
                                      </div>



                                        </div>
                                    
                                </div>
                                <hr>

                                 <!-- <div class="row">
                                    <div class="form-group">
                                    
                                       <h1 class="loan-head" >Personal Details</h1>
                                    </div>
                                    <hr>
                                </div>       
 -->
                                 <div class="row">
                                    <div class="form-group">
                                      <div class="col-md-12"><h4 class="hdr pad1 text-center">Address Details</h4></div>
                                  
                                     <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="resAddress1" name="resAddress1" placeholder="Address Line 1" maxlength="200" required>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="resAddress2" name="resAddress2" placeholder="Address Line 2" maxlength="200" required>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="resAddress3" name="resAddress3" placeholder="Address Line 3" maxlength="200" required >
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="resAddress4" name="resAddress4" placeholder="Address Line 4" maxlength="200">
                                        </div>
                                      </div>

                                        

                                          <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="resState" id="resState" class="form-control block drop-arr select-sty" required>
                                          <option selected disabled="" value="">State</option>
                                          <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                          <option value="CHATTISGARH">CHATTISGARH</option>
                                          <option value="GUJARAT">GUJARAT</option>
                                          <option value="HARYANA">HARYANA</option>
                                          <option value="KARNATAKA">KARNATAKA</option>
                                          <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                          <option value="MAHARASHTRA">MAHARASHTRA</option>
                                          <option value="JHARKHAND">JHARKHAND</option>
                                          <option value="ORISSA">ORISSA</option>
                                          <option value="PUNJAB">PUNJAB</option>
                                          <option value="RAJASTHAN">RAJASTHAN</option>
                                          <option value="TAMILNADU">TAMILNADU</option>
                                          <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                          <option value="WEST BENGAL">WEST BENGAL</option>
                                          <option value="CHANDIGARH">CHANDIGARH</option>
                                          <option value="DELHI">DELHI</option>
                                          </select>
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="losState" id="losState" class="form-control block drop-arr select-sty" required>
                                          
                                          <option data-group='SHOW' value='0'>StateID</option>
                                          <option data-group="ANDHRA PRADESH" value="2">2</option>
                                          <option data-group="CHATTISGARH" value="7">7</option>
                                          <option data-group="GUJARAT" value="8">8</option>
                                          <option data-group="HARYANA" value="10">10</option>
                                          <option data-group="KARNATAKA" value="16">16</option>
                                          <option data-group="MADHYA PRADESH" value="20">20 </option>
                                          <option data-group="MAHARASHTRA" value="22">22</option>
                                          <option data-group="JHARKHAND" value="29">29</option>
                                          <option data-group="ORISSA" value="30">30</option>
                                          <option data-group="PUNJAB" value="32">32</option>
                                          <option data-group="RAJASTHAN" value="34">34</option>
                                          <option data-group="TAMILNADU" value="38">38</option>
                                          <option data-group="UTTAR PRADESH" value="42">42 </option>
                                          <option data-group="WEST BENGAL" value="44">44</option>
                                          <option data-group="CHANDIGARH" value="80">80</option>
                                          <option data-group="DELHI" value="84">84</option>
                                          </select>
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="resCity" id="resCity" class="form-control block drop-arr select-sty" required>
                                          <option selected disabled="" value="">City</option>
                                          <option value="HYDERABAD">HYDERABAD</option>
                                          <option value="VIJAYAWADA">VIJAYAWADA</option>
                                          <option value="RAIPUR">RAIPUR</option>
                                          <option value="AHMEDABAD">AHMEDABAD</option>
                                          <option value="BARODA">BARODA</option>
                                          <option value="SURAT">SURAT</option>
                                          <option value="FARIDABAD">FARIDABAD</option>
                                          <option value="GURGAON">GURGAON</option>
                                          <option value="BENGALURU">BENGALURU</option>
                                          <option value="HUBLI">HUBLI</option>
                                          <option value="BHOPAL">BHOPAL</option>
                                          <option value="MUMBAI">MUMBAI</option>
                                          <option value="PUNE">PUNE</option>
                                          <option value="NASIK">NASIK</option>
                                          <option value="THANE">THANE</option>
                                          <option value="NAVI MUMBAI">NAVI MUMBAI</option>
                                          <option value="JAMSHEDPUR">JAMSHEDPUR</option>
                                          <option value="RANCHI">RANCHI</option>
                                          <option value="BHUBANESWAR">BHUBANESWAR</option>
                                          <option value="PATIALA">PATIALA</option>
                                          <option value=" JAIPUR">JAIPUR</option>
                                          <option value="UDAIPUR">UDAIPUR</option>
                                          <option value="JAIPUR (RAJASTHAN)">JAIPUR (RAJASTHAN)</option>
                                          <option value="CHENNAI">CHENNAI</option>
                                          <option value="KANPUR">KANPUR</option>
                                          <option value="LUCKNOW">LUCKNOW</option>
                                          <option value="GHAZIABAD - NOIDA">GHAZIABAD - NOIDA</option>
                                          <option value=" KOLKATA">KOLKATA</option>
                                          <option value="CHANDIGARH">CHANDIGARH</option>
                                          <option value="DELHI">DELHI</option>
                                          <option value="DELHI, NCR">DELHI, NCR</option>
                                          
                                          </select>
                                        </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="losCity" id="losCity" class="form-control block drop-arr select-sty" required>
                                          <option data-group='SHOW' value='0'>CityID</option>
                                          <option data-group="HYDERABAD" value="500">500</option>
                                          <option data-group="VIJAYAWADA" value="520">520</option>
                                          <option data-group="RAIPUR" value="492">492</option>
                                          <option data-group="AHMEDABAD" value="380">380</option>
                                          <option data-group="BARODA" value="390">390</option>
                                          <option data-group="SURAT" value="395">395</option>
                                          <option data-group="FARIDABAD" value="121">121</option>
                                          <option data-group="GURGAON" value="113">113</option>
                                          <option data-group="BENGALURU" value="560">560</option>
                                          <option data-group="HUBLI" value="58A">58A</option>
                                          <option data-group="BHOPAL" value="462">462</option>
                                          <option data-group="MUMBAI" value="400">400</option>
                                          <option data-group="PUNE" value="411">411</option>
                                          <option data-group="NASIK" value="422">422</option>
                                          <option data-group="THANE" value="406">406</option>
                                          <option data-group="NAVI MUMBAI" value="40R">40R</option>
                                          <option data-group="JAMSHEDPUR" value="831">831</option>
                                          <option data-group="RANCHI" value="83U">83U</option>
                                          <option data-group="BHUBANESWAR" value="751">751</option>
                                          <option data-group="PATIALA" value="147">147</option>
                                          <option data-group=" JAIPUR" value="30C">30C</option>
                                          <option data-group="UDAIPUR" value="313">313</option>
                                          <option data-group="JAIPUR (RAJASTHAN)" value="302">302</option>
                                          <option data-group="CHENNAI" value="600">600</option>
                                          <option data-group="KANPUR" value="200">200</option>
                                          <option data-group="LUCKNOW" value="226">226</option>
                                          <option data-group="GHAZIABAD - NOIDA" value="201">201</option>
                                          <option data-group=" KOLKATA" value="700">700</option>
                                          <option data-group="CHANDIGARH" value="160">160</option>
                                          <option data-group="DELHI" value="100">100</option>
                                          <option data-group="DELHI, NCR" value="110">110</option>
                                          
                                          </select>
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="resPincode" name="resPincode" placeholder="Pincode" maxlength="6" onkeypress="return fnAllowNumeric(event)" required>
                                            
                                        </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="residenceOwnedBy" id="residenceOwnedBy" class="form-control block drop-arr select-sty">
                                          <option selected disabled="" value="">Residence</option>
                                          <option value="BA">Bachelor Accommodation</option>
                                          <option value="CP">COMPANY PROVIDED</option>
                                          <option value="PS">PAGADI SYSTEM-not work</option>
                                          <option value="P">PARENTS</option>
                                          <option value="RL">RELATIVE</option>
                                          <option value="R">RENTED</option>
                                          <option value="S">SELF</option>
                                          <option value="SO">SIBLING OWNED-not work</option>
                                          <option value="SQ">STAFF QUARTER-not work</option>
                                          </select>
                                        </div>
                                      </div>

                                          <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="noOfYearsInCity" name="noOfYearsInCity" placeholder="No Of Years In City" onkeypress="return fnAllowNumeric(event)" required>
                                            
                                          </div>
                                        </div>

                                      

                                            <input type="text" class="form-control" id="yrsCurrentResidence" name="yrsCurrentResidence" placeholder="No Of Years At Current Residence" onkeypress="return fnAllowNumeric(event)" required>

                                            
                                          </div>
                                        </div>

                                          
                                    </div>
                                    
                                </div>
                                <hr>

                                <div class="row">
                                   <div class="form-group">
                                  &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="same" id="same_id" onclick="same_fn();" />Same As Above
                                   <div class="col-md-12"><h4 class="hdr pad1 text-center">Permanent Address Details</h4></div>
                                
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Permanent Addr 1" name="permAddr1" id="permAddr1" readonly>
                                </div>
                              </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Permanent Addr 2" name="permAddr2" id="permAddr2" readonly>
                                </div>
                              </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Permanent Addr 3" name="permAddr3" id="permAddr3" readonly>
                                </div>
                              </div>
                                
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                    <input type="hidden" id="permPincode" name="permPincode" class="form-control" placeholder="Pincode" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="6" required>
                                  </div>
                                </div>
                                  <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                  <input type="hidden" class="form-control" placeholder="City" name="losPermCity" id="losPermCity" required>
                                </div>
                              </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                  <input type="hidden" class="form-control" placeholder="State" name="losPermState" id="losPermState" required>
                                </div>
                              </div>
                                </div>
                                
                                </div>
                                <hr>

                                 <div class="row">
                                    <div class="form-group">
                                       <div class="col-md-12"><h4 class="hdr pad1 text-center">Office Details</h4></div>
                                   
                                     <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="companyName" name="companyName" readonly placeholder="Company Name" required>
                                            
                                        </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="yrsInCurrentEmp" name="yrsInCurrentEmp" required placeholder="Yrs In Current Emp" minlength="1" maxlength="2" onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                          <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="employmentType" id="employmentType" class="form-control block drop-arr select-sty" required>
                                          
                                          <option disabled selected value="">Employment Type</option>
                                          <option value="SAL">SALARIED</option>
                                          <option value="SE">SELF EMPLOYED NON PROFESSIONAL</option>
                                          <option value="SEP">SELF EMPLOYED PROFESSIONAL</option>
                                          </select>
                                        </div>
                                      </div>
                                        
                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="employerType" id="employerType" class="form-control block drop-arr select-sty" required>
                                          
                                          <option disabled selected value="">Employer Type</option>
                                          <option value="Multinational">Multinational</option>
                                          <option value="Central Govt">Central Govt</option>
                                          <option value="State Govt">State Govt</option>
                                          <option value="Others">Others</option>
                                          <option value="Partnership">Partnership</option>
                                          <option value="Private Limited">Private Limited</option>
                                          <option value="Proprietorship">Proprietorship</option>
                                          <option value="Public Limited">Public Limited</option>
                                          <option value="Public Sector">Public Sector</option>
                                          </select>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="totWorkExp" name="totWorkExp" required placeholder="Total Work Exp" minlength="1" maxlength="2" onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="industry" id="industry" class="form-control block drop-arr select-sty" required>
                                          
                                          <option disabled selected value="">Industry</option>
                                          <option value="01"> IT</option>
                                          <option value="02"> BPO</option>
                                          <option value="03"> Insurance</option>
                                          <option value="04">Others</option>
                                          </select>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Office Addr 1" name="empAddressLine1" id="empAddressLine1" required>

                                        </div>
                                      </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Office Addr 2" name="empAddressLine2" id="empAddressLine2" required>

                                        </div>
                                      </div>
                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Office Addr 3" name="empAddressLine3" id="empAddressLine3" required>

                                        </div>
                                      </div>

                                        <!-- <div class="col-md-4">
                                        <select class="form-control drop-arr select-sty" name="empCity" id="empCity" required>
                                          <option disabled selected value="">City</option>
                                        </select>
                                        </div> -->
                                        <input type="hidden" name="empCity" id="empCity" value="">

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-control drop-arr select-sty" name="empProvince" id="empProvince" required>
                                          <option disabled selected value="">State</option>
                                        </select>
                                        </div>
                                      </div>

                                     <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="empPostalCode" name="empPostalCode" required placeholder="Pincode" maxlength="6" onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="officeEmailId" name="officeEmailId" placeholder="Email" oninput="email('officeEmailId')" maxlength="255" >
                                            <div id="e_mail" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="empCode" name="empCode" placeholder="Employer Code" required>
                                            
                                        </div>
                                      </div>
                                        <input type="hidden" name="employerCode" id="employerCode">

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="customerCategory" id="customerCategory" class="form-control block drop-arr select-sty" required>
                                          
                                          <option disabled selected value="">Customer Category</option>
                                          <option value="0213">HOUSE WIFE</option>
                                          <option value="0206">OTHERS</option>
                                          <option value="0214">RETIRED</option>
                                          <option value="0103">SALARIED</option>
                                          <option value="0209">SELF EMPLOYED NON PROFESSIONAL</option>
                                          <option value="0202">SELF EMPLOYED PROFESSIONAL</option>
                                          </select>
                                        </div>
                                      </div>

                                    </div>
                                    
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="form-group">
                                       <div class="col-md-12"><h4 class="hdr pad1 text-center">Financial Details</h4></div>
                                    
                                     <input type="hidden" name="includeFinancial" value="Y">
                                     <input type="hidden" name="includeIncomeFlag" value="Y">
                                     

                                      <!-- <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="mainBankingReq" id="mainBankingReq" class="form-control block drop-arr select-sty" required>
                                          <option disabled selected value="">Main Banking Req</option>
                                          <option value="Y">Yes</option>
                                          <option value="N">No</option>
                                          </select>
                                        </div>
                                      </div> -->
                                      <input type="hidden" name="mainBankingReq" value="Y">
                                      <input type="hidden" name="pdcEcsReq" value="Y">

                                        <!-- <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="pdcEcsReq" id="pdcEcsReq" class="form-control block drop-arr select-sty" required>
                                          <option disabled selected value="">Pdc Ecs Req</option>
                                          <option value="Y">Yes</option>
                                          <option value="N">No</option>
                                          </select>
                                        </div>
                                      </div> -->

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="modeOfSalary" id="modeOfSalary" class="form-control block drop-arr select-sty" required>
                                          <option disabled selected value="">Mode Of Salary</option>
                                          <option value="P"> PDC </option>
                                          <option value="D"> Direct </option>
                                          </select>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="prevMonthSalary" name="prevMonthSalary" required placeholder="Prev Month Salary" maxlength="9" onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="currMonthIncome" name="currMonthIncome" required placeholder="Curr Month Income" maxlength="9" onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="nextMonthSalary" name="nextMonthSalary" required placeholder="Next Month Salary" maxlength="6" onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="obligationMonth" name="obligationMonth" required placeholder="EMI(if existing otherwise 0)"  onkeypress="return fnAllowNumeric(event)">
                                            
                                        </div>
                                      </div>

                                       <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="bankName" name="bankName" required placeholder="Bank Name" >
                                        </div>
                                      </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="noOfChequeBounced" name="noOfChequeBounced" required placeholder="No Of Cheque Bounced"  onkeypress="return fnAllowNumeric(event)">
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="accountType" id="accountType" class="form-control block drop-arr select-sty" required>
                                          <option disabled selected value="">Account Type</option>
                                          <option value="CC"> CC</option>
                                          <option value="CR"> Current</option>
                                          <option value="SV"> Saving</option>
                                          <option value="OD"> Over Draft</option>
                                          </select>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="loanAmount" name="loanAmount" required placeholder="Req Loan Amount" minlength="5" maxlength="9"  onkeypress="return fnAllowNumeric(event)">
                                        </div>
                                      </div>
                                     
                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="loanTerm" id="loanTerm" class="form-control block drop-arr select-sty" required>
                                          <option disabled selected value="">Loan Term</option>
                                          <option  value="12">12 months</option>
                                            <option  value="24">24 months</option>
                                            <option  value="36">36 months</option>
                                            <option  value="48">48 months</option>
                                            <option  value="60">60 months</option>
                                          </select>
                                        </div>
                                      </div>

                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="incomeCategory" id="incomeCategory" class="form-control block drop-arr select-sty" required>
                                          <option disabled selected value="">Income Category</option>
                                          <option value="009">INSURANCE</option>
                                          <option value="007">RENT RECEIPTS</option>
                                          <option value="005">SAL: SUPER CAT A</option>
                                          <option value="004">SAL: TATA EMPL</option>
                                          <option value="006">SAL: UNLISTED CAT</option>
                                          <option value="001">SAL:CATEGORY A</option>
                                          <option value="002">SAL:CATEGORY B</option>
                                          <option value="003">SAL:CATEGORY C</option>
                                          <option value="202">SENP: MFG/Trader/Printer</option>
                                          <option value="201">SENP: SERVICE PROVIDER</option>
                                          <option value="008">SEP Doctors Gross Receipts</option>
                                          <option value="103">SEP: DOCTOR</option>
                                          <option value="104">SEP: DOCTORS-OTHERS</option>
                                          <option value="101">SEP: OTHERS</option>
                                          </select>
                                        </div>
                                      </div>
                                        
                                    </div>
                                    
                                </div>
                                 
                                      <div class="col-md-4 col-md-offset-4">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn btn-sm" id="tata_capital_submit"  >Confirm & Continue<i class="icon-arrow-right"></i></a>
                                        </div>
                                        
                                    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                    <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
                                   </div>
                                   
                                
                            </form>         
                                
                    </div>
                   
                    </div>
                  </form>
                </div>
              </div>

                    

                </div>
              </div>
            </h1>
          </div>
        </div>

            </div>
        </div>  
    </div>
</div>
@include('layout.footer')
@include('layout.script')

<!-- Status Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="tatacapital-pl-status-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Tata Capital PL Lead Id is <b><span id="tata-capital"></span>.<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary tata_capital_pl_proceed">Proceed to Document Upload</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="tata-capital-pl-status-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Remarks:<b><span id="tata-capital-remarks"></span>.<h5></p></h4>
        
      </div>

       <!-- <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary tata_capital_pl_proceed">Proceed to Document Upload</a>
        
      </div> -->
      
      
    </div>
  </div>
</div>

<!-- Rate Of Interest Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="tata-capital-pl-roi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">You Are Eligible for:<br><b>Max Loanamt:<span id="nMaxLoanAmount"></span><br><b>Min Loanamt:<span id="nMinLoanAmount"></span><br><b>Min Tenure:<span id="nMinTenureMonths">months</span><br><b>Min Tenure:<span id="nMinTenureYears">years</span><br><b>Max EMI:<span id="nMaxEMI"></span><br><b>Max FOIR:<span id="nMaxFOIR"></span><br><b>Info:<span id="cInfo"></span><h5></p></h4>

        <p>Kindly fill the below details to proceed.</p>
        
      </div>

       
      
      
    </div>
  </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="doc_popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Documents Uploaded Successfully.<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="doc" name="okae" class="btn btn-primary">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="status">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your:<b><span id="meassge"></span>&nbsp;&nbsp;<span id="Status"></span><h5></p></h4>
        
      </div>
 
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="document_upload">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Document Upload</h4>
      </div>
      <div class="modal-body">

           <form name="document_upload_form" id="document_upload_form" enctype="multipart/form-data"  method="post">
          {{ csrf_field() }}
               <input type="hidden" name="webtopNo" id="web_top_no">
               <input type="hidden" name="lead_id" id="lead_id">
              
                <div class="row">
                                    <div class="form-group">
                    
                     
                      <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                      <select  class="form-control" id="identity_proof" name="docUploadType[]" required>
                      <option disabled selected  value="0">ID Proof</option>
                      <option value="Aadhar Card">Aadhar Card</option>
                      <option value="Bank Pass Book with photograph">Bank Pass Book with photograph</option>
                      <option value="Bankers Certificate with Photo attested">Bankers Certificate with Photo attested</option>
                      <option value="Driving License">Driving License</option>
                      <option value="PAN Card">PAN Card</option>
                      <option value="Passport">Passport</option>
                       <option value="Photo ID Card (Credit or Debit or  Kisan)">Photo ID Card (Credit or Debit or  Kisan)</option>
                      </select class="pad">
                  </div>
              </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                     <input type="file"  name="docUploadName[]" id="identity" class="form-control" required="" data-category="1">
                     </div>
                     </div>
                      <!-- <a class="btn btn-success btn-outline with-arrow mrg-top" id="reset_1">Reset<i class="icon-arrow-right"></i></a> -->
                 

                  
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group"> 
                      <select  class="form-control" id="address_proof" name="docUploadType[]" required>
                      <option disabled selected  value="0">Address Proof</option>
                      <option value="Electricity Bill">Electricity Bill</option>
                      <option value="Gas Connection Bill">Gas Connection Bill</option>
                      <option value="Leave and License Agreement (Registered)">Leave and License Agreement (Registered)</option>
                      <option value="MOA and AOA (Companies)">MOA and AOA (Companies)</option>
                      <option value="Property registration document">Property registration document</option>
                      <option value="Property tax receipt">Property tax receipt</option>
                      <option value="Rent Agreement (Registered)">Rent Agreement (Registered)</option>
                      <option value="Electricity Bill">Electricity Bill</option>
                      <option value="Gas Connection Bill">Gas Connection Bill</option>
                      <option value="Leave and License Agreement (Registered)">Leave and License Agreement (Registered)</option>
                      <option value="MOA and AOA (Companies)">MOA and AOA (Companies)</option>
                      <option value="Property registration document">Property registration document</option>
                      </select class="pad">
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                     <input type="file" name="docUploadName[]" id="address" class="form-control" required="" data-category="2">
                 </div>
             </div>

                     <!-- <a class="btn btn-success btn-outline with-arrow mrg-top" id="reset_2">Reset<i class="icon-arrow-right"></i></a> -->
                   

          
                    <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group"> 
                      <select  class="form-control" id="income_proof" name="docUploadType[]" required>
                      <option disabled selected  value="0">Income Proof</option>
                      <option value="AppointmentIncrement Letter">AppointmentIncrement Letter</option>
                      <option value="Audit or Provisional Breakup">Audit or Provisional Breakup</option>
                      <option value="Audited Financials year -1">Audited Financials year -1</option>
                      <option value="Audited Financials year -2">Audited Financials year -2</option>
                      <option value="Audited Financials year -3">Audited Financials year -3</option>
                      <option value="Bank Statement 1">Bank Statement 1</option>
                      <option value="Bank Statement 2">Bank Statement 2</option>
                      <option value="Bank Statement 3">Bank Statement 3</option>
                      <option value="Bank Statement 4">Bank Statement 4</option>
                      <option value="Bank Statement 5">Bank Statement 5</option>
                      <option value="Bank Statement 6">Bank Statement 6</option>
                      <option value="Bank Statement 7">Bank Statement 7</option>
                      <option value="Bank Statement 8">Bank Statement 8</option>
                      <option value="Form 16">Form 16</option>
                      <option value="Form 60 or 61">Form 60 or 61</option>
                      <option value="ITRs">ITRs</option>
                      <option value="Salary Slips">Salary Slips</option>
                      <option value="Tax Audit report">Tax Audit report</option>
                      </select class="pad">
                  </div>
              </div>

                   <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                  <input type="file" name="docUploadName[]" id="income" class="form-control" required data-category="3">
                  </div>
                  </div>
                   <!-- <a class="btn btn-success btn-outline with-arrow mrg-top" id="reset_3">Reset<i class="icon-arrow-right"></i></a> -->
                   

                 
                   <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">  
                      <select  class="form-control" id="other_documents" name="docUploadType[]" required>
                      <option disabled selected  value="0">Other Documents</option>
                      <option value="Approval COM Name Mismatch">Approval COM Name Mismatch</option>
                      <option value="Approval DOB Mismatch">Approval DOB Mismatch</option>
                      <option value="Approval SM Confirmation">Approval SM Confirmation</option>
                      <option value="Continuity Proof Document">Continuity Proof Document</option>
                      <option value="Customer request letter for BT OR TOP UP">Customer request letter for BT OR TOP UP</option>
                      <option value="Demand Letter">Demand Letter</option>
                      <option value="Disbursement Request Form.">Disbursement Request Form.</option>
                      <option value="Document Tracker">Document Tracker</option>
                      <option value="Educational Certificate">Educational Certificate</option>
                      <option value="Mark Sheet">Mark Sheet</option>
                      <option value="MOE">MOE</option>
                      <option value="Payment Receipt">Payment Receipt</option>
                      <option value="VAT FORM-201">VAT FORM-201</option>
                      <option value="Tata AIA Group Mediprime">Tata AIA Group Mediprime</option>
                      <option value="Waiver Approval">Waiver Approval</option>
                      </select class="pad">
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                    <input type="file" name="docUploadName[]" id="other_doc" class="form-control" required data-category="4">
                    </div>
                    </div>

                     </div>
                       </div>

                     <!-- <a class="btn btn-success btn-outline with-arrow mrg-top" id="reset_4">Reset<i class="icon-arrow-right"></i></a> -->
                 
           

                  <!-- <span id="statement"></span> -->
                                <div style="text-align: center;">
                                <a class="btn btn-danger btn btn-sm" id="tatacapital_doc">Submit</a>
                                <a class="btn btn-info btn btn-sm" id="tatacapital_status"  >Check Status</a></div>

                                

                           

                                

            </form>
            
        </div>
      
    </div>
  </div>
</div>


<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>


<script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='idValue' ){
                   var str =$('#idValue').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_number').show();

                    return false;
                  }
                  
    }
    }
    </script>

    


<script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='resEmailId' ){
                   var str =$('#resEmailId').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function email(obj,val){
    // console.log(obj);
    if(obj=='officeEmailId' ){
                   var str =$('#officeEmailId').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#e_mail').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#e_mail').show();

                    return false;
                  }
                  
  }
}
</script>



<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()-21  ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
  $('#tata_capital_submit').click(function(){
  //alert('okae');
  event.preventDefault();
      $form=$('#tata_capital_form');
      if(! $form.valid()){
        // alert("no")
        alert("Please Fill All Mandatory Fields.");
         return false;
      }else{

        var empcode=$('#empCode').val();
        var employerCode= String('0000000000000000' + empcode).slice(-16);
        // alert(employerCode);
        $('#employerCode').val(employerCode);

   
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('tata-capital-personal-submit')}}",
         data : $('#tata_capital_form').serialize(),
         success: function(msg){
          console.log(msg.RetStatus);
          if (msg.RetStatus=="SUCCESS") 
          {
            $('#tatacapital-pl-status-popup').modal('show');
            $('#tata-capital').empty().append(msg.LeadId);
            $('#lead_id').val(msg.LeadId);
            $('#web_top_no').val(msg.WebTopNo);
          } 
          else 
          {
            $('#tatacapital-pl-status-popup').modal('hide');
            $('#tata-capital-pl-status-error').modal('show');
            $('#tata-capital-remarks').empty().append(msg.Remarks);
          }
       }  
      }); 
      }

  });
</script>

<script type="text/javascript">

  

 $(document).ready(function(){
    src = "{{ route('searchtatacityajax') }}";
    $(".search_citynm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_citynm").val("");
          $(".search_citynm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  

 $(document).ready(function(){
    
    $(".search_statenm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchtatastateajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_statenm").val("");
          $(".search_statenm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  
    $('#resCity').on('change', function(){
        var val = $(this).val();
        // alert(val);
        
        var sub = $('#losCity');

        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
    $('#resCity').trigger('change');
</script>

<script type="text/javascript">
  
    $('#resState').on('change', function(){
        var val = $(this).val();
        // alert(val);
        
        var sub = $('#losState');

        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
    $('#resState').trigger('change');
</script>

<script type="text/javascript">

 function same_fn(checked){

       var id=  document.getElementById("same_id");
         // document.getElementById("same_id").checked = false;
     
     if(id.checked){

     $('#permAddr1').val($('#resAddress1').val());
     $('#permAddr2').val($('#resAddress2').val());
     $('#permAddr3').val($('#resAddress3').val());
     $('#losPermState').val($('#losState').val());

     $('#losPermCity').val($('#losCity').val());
     $('#permPincode').val($('#resPincode').val());
     
     }else{

     $('#permAddr1').val('');
     $('#permAddr2').val(''); 
     $('#permAddr3').val('');

     $('#PerCity').val('');
     $('#losPermState').val('');
     $('#losPermCity').val('');
     $('#permPincode').val('');
       
     }
 }

</script>



<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('tata-capital-city')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   // console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#cCity').append('<option value="'+value.los_city_id+'">'+value.city_name+'</option>');

        }); 
    }else{
      $('#cCity').empty().append('No Result Found');
    }

   },

 });
</script>

<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('tata-capital-state')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   // console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#empProvince').append('<option value="'+value.los_state_id+'">'+value.state_name+'</option>');

        }); 
    }else{
      $('#empProvince').empty().append('No Result Found');
    }

   },

 });
</script>

<script type="text/javascript">
  $('.tata_capital_pl_proceed').click(function(){
       $('#document_upload').modal('show');
     $('#tatacapital-pl-status-popup').modal('hide');
  });
</script>

<script type="text/javascript">
  $('#tatacapital_doc').click(function(){
        //alert('ok');
       if(! $('#document_upload_form').valid()){
             // alert('not valid');

        }else{

            // $('#financial_doc').show();
        $.ajax({
          url:"{{URL::to('tata-capital-documents')}}" ,  
          data:new FormData($("#document_upload_form")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
             console.log(msg.RetStatus);
             if (msg.RetStatus=="SUCCESS") 
             {
             
             $('#doc_popup').modal('show');
             }
             else{
              alert("Your Documents Could not be Uploaded");
             }
            
              
            
            }
        });
     } 
    });
</script>



<!-- <script type="text/javascript">
    $('#reset_1').click(function(){
        $("#identity_proof")[0].selectedIndex = 0;
        $("#identity").val("");
    });

    $('#reset_2').click(function(){
        $("#address_proof")[0].selectedIndex = 0;
        $("#address").val("");
    });

    $('#reset_3').click(function(){
        $("#vat")[0].selectedIndex = 0;
        $("#vat_proof").val("");
    });

    $('#reset_4').click(function(){
        $("#activity")[0].selectedIndex = 0;
        $("#Proof_of_activity").val("");
    });
</script> -->

<!-- <script type="text/javascript">
  $("#Company_Name").blur(function(){
        // alert('okae');
         $.ajax({  
         type: "POST",  
         url: "{{URL::to('tata-capital-company-master')}}",
         data : $('#company_list').serialize(),
         success: function(msg){
        
         var availableTags = msg.aComp;
         console.log(availableTags);
         ;

          

          
            
      }   
     });
      
    });
   $( "#Company_Name" ).autocomplete({
            source: availableTags
          })
</script> -->

<script type="text/javascript">
  $("#Company_Name").autocomplete({
      source: function(request, response) {
       
        $.ajax({
          type: "POST",  
         url: "{{URL::to('tata-capital-company-master')}}",
          dataType: "json",
          data : $('#company_list').serialize(),
          success: function(data) {
            

            response(data);
            // console.log(data);
          }
    
        });
      },     change: function (event, ui) {
          // console.log(ui);
        if (ui.item == null || ui.item == undefined || ui.item.value=='Others') {
               
          // $("#Company_Name").val("");
          // $("#Company_Name").attr("disabled", false);
         
        }else{

       
         // $(".Q6").show();

         $('#Company').val(ui.item.datavalue);
         
          
             }
           }
     
        
      });
   

</script>

<script type="text/javascript">
  $('#Company_Name').on('autocompletechange change', function () {
     $('#companyName').val(this.value);
    }).change();

</script>

<script type="text/javascript">
  $('#tata_capital_roi').click(function(){
    if (!$('#roi').valid()) 
      {
        return false;
      } 
      else 
      {
        var city = $('#cCity').val();
        // alert(city);
        $('#empCity').val(city);

        var salary = $('#nSalary').val();
        $('#currMonthIncome').val(salary);

        var loanamt = $('#nAmount').val();
        $('#loanAmount').val(loanamt);
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('tata-capital-roi')}}",
         data : $('#roi').serialize(),
         success: function(msg){
          $('#tata_capital_pl_form').show();
           $('#personal_loan').hide();
          // console.log(msg.nErrorNo);
          if (msg.nErrorNo==0) 
          {
            $('#tata-capital-pl-roi').modal('show');
            $('#nMaxLoanAmount').empty().append(msg.nMaxLoanAmount);
            $('#nMinLoanAmount').empty().append(msg.nMinLoanAmount);
            $('#nMinTenureMonths').empty().append(msg.nMinTenureMonths);
            $('#nMinTenureYears').empty().append(msg.nMinTenureYears);
            $('#nMaxEMI').empty().append(msg.nMaxEMI);
            $('#nMaxFOIR').empty().append(msg.nMaxFOIR);
            $('#cInfo').empty().append(msg.cInfo);

          }
         
          
            
      }   
     });
      }
  });
</script>

<script type="text/javascript">
  $('#doc').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
  });
</script>

<!-- Status -->
<script type="text/javascript">
 $('#tatacapital_status').click(function(){
     var lead_id = $('#lead_id').val();
     console.log(lead_id);
     $.ajax({ 
     url: "{{URL::to('tata-capital-status')}}",
     method:"GET",
     data:{ 'lead_id': lead_id},
     success: function(msg)  
     {
       console.log(msg);

       if (msg.RetStatus=="SUCCESS") 
        {
         $('#message').val(msg.Message);
         $('#Status').val(msg.Status); 
         $('#status').modal('show');
        } 
        
      
     },

 });
 });
</script>

