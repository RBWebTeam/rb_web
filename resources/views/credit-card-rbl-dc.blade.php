<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>BALANCE TRANSFER SAVING</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />    
	<link href="{{URL::to('css/component.css')}}" rel="stylesheet" type="text/css"  />
    <link href="{{URL::to('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{URL::to('css/style-home-loan.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{URL::to('css/responsive-home-loan.css')}}" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>css/bootstrap-material-datetimepicker.css
    <![endif]-->

	<link rel="stylesheet" href="{{URL::to('css/bootstrap-material-datetimepicker.css')}}"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<!--<script src="js/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>-->
	
	
	<script type="text/javascript" src="{{URL::to('js/material.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('js/moment-with-locales.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('js/bootstrap-material-datetimepicker.js')}}"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>


	<style>
	.slider {
  position: relative;
  margin-top: 20px;
  margin-bottom: 15px;
  width: 90%;
  background: #2A3137;
  /* -moz-box-shadow: inset 0 0 10px #999;
  -webkit-box-shadow: inset 0 0 10px #999;
  box-shadow: inset 0 0 10px #999;*/
  height: 15px;
  border-radius: 10px;
  border: 1px solid #DDDDDD;
  margin-left: 15px;
}

.slider .ui-slider-handle {
  position: absolute;
  background: #10A447;
  border-radius: 5px;
  width: 20px;
  height: 50px;
  top: -16px;
  left: 50px;
  border-style: none;
  box-shadow: none;

}

.no-brd {border-bottom:none;}

	 
.price-box {
	margin: 0 auto;
	border-radius: 10px;
	
}

.ui-widget-content {
	border: 1px solid #bdc3c7;
	background: #e1e1e1;
	color: #222222;
	margin-top: 4px;
}

.ui-slider .ui-slider-handle {
	position: absolute !important;
	z-index: 2 !important;
	width: 4.0em !important;
	height: 2.1em !important;
	cursor: default !important;
	margin: 0 -20px auto !important;
	text-align: center !important;	
	
	color: #FFFFFF !important;
	
}

.ui-corner-all {
	/*border-radius: 20px;*/
}

.ui-slider-horizontal .ui-slider-handle {
	top: -3em !important;
}

.ui-state-default,
.ui-widget-content .ui-state-default {
	background: #393a40 !important;
}

.ui-slider-horizontal .ui-slider-handle {
	margin-left: -27px !important;
}

.ui-slider .ui-slider-handle {
	cursor: pointer;
}

.ui-slider a,
.ui-slider a:focus {
	cursor: pointer;
	outline: none;
}

.price, .lead p {
	font-weight: 600;
	font-size: 32px;
	display: inline-block;
	line-height: 60px;
}

h4.great {
	background: #00ac98;
	margin: 0 0 55px -60px;
	padding: 7px 15px;
	color: #ffffff;
	font-size: 18px;
	font-weight: 600;
	border-radius: 5px;
	display: inline-block;
	-moz-box-shadow:    2px 4px 5px 0 #ccc;
  	-webkit-box-shadow: 2px 4px 5px 0 #ccc;
  	box-shadow:         2px 4px 5px 0 #ccc;
}

.price-slider {
	margin-bottom: 70px;
}

.form-pricing {
	background: #ffffff;
	padding: 20px;
	border-radius: 4px;
}

.price-form {
	background: #ffffff;
	margin-bottom: 10px;
	padding: 20px;
	border: 1px solid #eeeeee;
	border-radius: 4px;
}

.form-group {
	margin-bottom: 0;
}

.form-group span.price {
	font-weight: 200;
	display: inline-block;
	color: #7f8c8d;
	font-size: 14px;
}

.help-text {
	display: block;
	margin-top: 32px;
	margin-bottom: 10px;
	color: #737373;
	position: absolute;
	font-weight: 200;
	text-align: right;
	width: 188px;
}

.price-form label {
	font-weight: 200;
	font-size: 21px;
}

.ui-slider-range-min {
	background: #2980b9;
}

.ui-slider-label-inner {
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #393a40;
    display: block;
    left: 50%;
    margin-left: -10px;
    position: absolute;
    top: 100%;
    z-index: 99;
}

label {
    color: #fff;13px
    font-size: ;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left:10px;
    top: 1px;
    transition: all 0.2s ease;
    font-weight: 500;
}
.error{
	color: red !important; 
}
	</style>
	
  </head>
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
			           <form  id="rbl_ccc_form" role="form">
			           {{csrf_field()}}
				        <div class="row">
					     <div class="form-group titl-1">
						<div class="col-md-4">
						<span>Title</span>
						    <select class="block drop-arr select-sty form-control" name="Title" id="title" required>
		                    <option disabled selected  value="">Select Title</option>
		                    <option value=1>Mr</option>
		                    <option value=2>Ms</option>
		                    <option value=2>Mrs</option>
		                    <option value=2>Dr</option>
		                    <option value=99>Other</option>
		                    </select> 
		                    </div>
						<div class="col-md-4">
						   <span>Credit Card Applied</span>
							<input type="text" class="form-control" placeholder="Credit Card Applied" name="CreditCardApplied" id="cc_applied" value="{{$card}}" disabled="" >
						</div>
						<div class="col-md-4">
						   <span>Date of Birth</span>
							<input type="text" class="form-control lastReporteddate " id="dob" name="DOB" placeholder="Date of Birth" required>
						</div>
						<div class="col-md-4">
						<span>First Name</span>
							<input type="text" class="form-control" id="f_name" name="FirstName" placeholder="First Name" required>
						</div>
                         <div class="col-md-4">
						 <span>Middle Name</span>
							<input type="text" class="form-control " id="m_name" name="MiddleName" placeholder="Middle Name" required>
						</div>						
						<div class="col-md-4">
						<span>Last Name</span>
							<input type="text" class="form-control " id="l_name" name="LastName" placeholder="Last Name" required>
						</div>
						<div class="col-md-4">
						<span>Father Name</span>
							<input type="text" class="form-control " id="father_name" name="FatherName" placeholder="Father Name"  required>
						</div>
						<div class="col-md-4">
						<span>Gender</span>
						
						<input type="radio"  name="Gender" id="male"  class="radiob" checked value="1">Male
                        <input type="radio" name="Gender" id="female"  class="radiob" value="2" >Female 
	                  
						</div>
						<div class="col-md-4">
						<span>Had Loan Or CreditCard From AnyBank</span>
						<div class="form-control border-none">
					 
						<input type="radio"  name="HadLoanOrCreditCardFromAnyBank" class="radiob" checked value="Y">Yes
                        <input type="radio" name="HadLoanOrCreditCardFromAnyBank"  class="radiob" value="N" >No
	                    </div>
						</div>
					    </div>
					    <hr>
				        </div>
				        <div class="row sec" id="section1">
					    <div class="form-group titl-1">
					    <hr>
						<div class="col-md-4">
						<span>Residence Address 1</span>
							<input type="text" class="form-control" placeholder="Residence Address 1" name="ResAddress1" id="res_add1" required="">
						</div>
						<div class="col-md-4">
						<span>Residence Address 1</span>
							<input type="text" class="form-control" placeholder="Residence Address 2" name="ResAddress2" id="res_add2" required="">
						</div>
						<div class="col-md-4">
						<span>Landmark</span>
							<input type="text" id="landmark" name="Landmark" class="form-control" placeholder="Landmark"  required>
						</div>
						<div class="col-md-4">
						<span>City</span>
						     <select class="block drop-arr form-control" name="ResCity" id="city" required>
		                      <option disabled selected  value="">Select City</option>
		                       @foreach ($data as $city)  
								    <option value="{{$city->city_code}}">{{$city->city_name}}</option>
								@endforeach
		                    </select> 
		                    </div>
						<div class="col-md-4">
						<span>Residence Pincode</span>
							<input type="text" id="res_pin" name="ResPIN" class="form-control" placeholder="Residence Pincode" onkeypress="return fnAllowNumeric(event)" required>
						</div>
                        <div class="col-md-4">
						<span>Email ID</span>
							<input type="email" id="email_id" name="Email" class="form-control" placeholder="Email ID"  required />
							<div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
						</div>
                       <div class="col-md-4">
					   <span>Applicant Net Monthly Income</span>
							<input type="text" id="monthly_income" name="NMI" class="form-control" placeholder="Applicant Net Monthly Income" onkeypress="return fnAllowNumeric(event)" required>
						</div>
						<div class="col-md-4">
						<span>Mobile Number</span>
							 <input type="text" class="form-control" id="mobile" name="Mobile"  required maxlength="10" placeholder="Mobile Number" minlength="10" maxlength="10" onblur ="return fnAllowNumeric(event)" onkeydown=" mobile_valid(this)">
						</div>
						<div class="col-md-4">
						<span>Employment Type</span>
						<div class="form-control ">
						<input type="radio"  name="EmpType" class="radiob" checked value="1">Salaried
                        <input type="radio" name="EmpType"  class="radiob" value="2" >Self-Employed
	                    </div>
						</div>
							<div class="col-md-4">
							<span>Pancard No</span>
						     <input  type="text" class="form-input-new form-control" name="PAN" id="pan" placeholder="Pancard No." onkeyup="pan_card_valid(this)" minlength="10" maxlength="10" required>
						</div>
						</div>
						<hr>
					    </div>	
					    <a class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="rbl_card_submit">SUBMIT<i class="icon-arrow-right" ></i></a>
					    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
						  <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
						 </div>

			            </form>
					
					
					
					
			            </div>
			            <br>
		                </div>	
	                    </div>
                        </div>

                        </div>
                        </div>



<div id="rb_cc_modal" class="modal fade" role="dialog">
  <div class="modal-dialog" >
        <!-- Modal content-->
   <div class="modal-content pad1">
        <div class="modal-header">          
        <h4 class="modal-title text-center"><b>Status</b></h4>


           
        </div>
		<div class="text-center">
         <p id="rbl_cc_apply_status" class="text-success pad"></p>     
         <p id="reason" class="text-success pad"></p>     
         <p id="reference" class="text-success pad"></p>         	      
         </div>   
</div>
</div>
</div>
@include('layout.script')




<script type="text/javascript">
	var application_status=0;
	var red_url= "{{URL::to('thank-you')}}";
	$('#rbl_card_submit').click(function(){
		
		if(! $('#rbl_ccc_form').valid()){
			return false;
		}else{
			$(".iframeloading").show();
			$.ajax({
				type:"POST",
				data:$('#rbl_ccc_form').serialize(),
				url:"{{URL::to('rbl-cc-submit')}}",
				success:function(msg){
					$(".iframeloading").hide();
					var returnedData = JSON.parse(msg);
					var status_id=returnedData.Status;
					var error=returnedData.Errorinfo;
					var mobile=$('#mobile').val();
					var card=$('#cc_applied').val();
					if(status_id==0){
						e_id=returnedData.Errorcode;
						status="Ooops! Error occured.";
						if(e_id)
						{
							error=get_rbl_error(e_id);
						}
						
					}else if(status_id==1){
						status="Successful";
						error=returnedData.ReferenceCode;
						red_url='http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id="'+error+'"&CardType=RBL&MobileNo="'+mobile+'';
						application_status=1;
					}else if(status_id==2){
						status="Successful Referred";
						error=returnedData.ReferenceCode;
						red_url='http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id='+error+'&CardType=RBL&MobileNo="'+mobile+'';
						application_status=1;
					}else{
						status="Rejected";
						error=returnedData.ReferenceCode;
					}
					$('#rbl_cc_apply_status').empty().text(status);
					$('#reason').empty().append(error);
					
					$('#rb_cc_modal').modal('toggle');
					
				}
			});
		}
		
	});
		function get_rbl_error(id){
			error='';
			switch (id) {
				case 1: 
					error="INPUT OUT OF MASTERS RANGE";
					break;
				case 2: 
					error="VALIDATION ERROR";
					break;
				case 3: 
					error="INPUT NOT IN VALID DATA FORMAT (SPECIAL CHARACTERS etc)";
					break;
				case 4:
					error="SYSTEM UNAVAILABLE";
					break;
				case 5: 
					error="DECISION CENTER ERROR";
					break;
				case 6:
					error="DUPLICATE APPLICATION";
				 	break;
			}
				return error;
		}
		$('#rb_cc_modal').on('hidden.bs.modal', function () {
		 	
		 	if(application_status==1){
		 		window.location.href = red_url;
		 	}

		});
</script>



