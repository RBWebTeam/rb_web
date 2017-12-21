<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
#fh5co-hero {
    padding: 4em 0;
     background: url(../images/bg.jpg);
	background-attachment:fixed;
	background-size:cover;
}
.register {opacity:0.8;}

.register-left {
    background: #ed1c24;
    height: 400px;
    padding: 38px 0px;
}
.register-left p {color:#ff9599;}
.register-right {
    background: #FFFFFF;
	height: auto;
    float: left;
    width: 100%;
}
.register-in {
    padding:1.5em;
	padding-top:0px;
}
.register-left, .register-right {
   
  /*  float: left; */
}
.register-left p {
    margin: 2em 0;
    line-height: 1.8em;
    font-size: 1em;
    letter-spacing: 1px;
}
.register-left h1 {
    font-size: 2.5em;
    text-transform: uppercase;
    font-weight: 400;
	text-align:left;
    margin-bottom:12px;
    color: #FFFFFF;

}
.register-left h2 {
	
	color:#ff9599;
}
.register-right h2 {
    text-transform: uppercase;
    font-size: 2em;
    font-weight: 700;
    text-align: center;
    letter-spacing: 1px;
    word-spacing: 5px;
}
.link a {
    color: #FFFFFF;
    padding: .5em;
    font-size: 1.5em;
    border:2px solid #fb7b80;
}
.checkbox a {
    color: #009688;
}
.link a:hover{
	color:#000;
    border:2px solid #FFFFFF;
	background:none;
}
.register-form{
	margin:2em 0 0 0;
	float:left;
}
.register-form h4,.address h4{
    margin-bottom: 1em;
    color: #404040;
        margin: 1em 0 1.5em 0;
    font-weight: normal;
    font-size: 15px;
    color: #8c8c8c;
    background: #f3f3f3;
    padding: 10px;
}
 .register input[type="text"],.register input[type="date"],.register input[type="email"],.register input[type="password"],.register input[type="tel"],.register select{
    font-size: 1em;
    color: #333;
    padding: 0.5em 0em;
    padding-bottom:0.2em;
    border: 0;
    width:100%;
    border-bottom: 1px solid #dcdcdc;
    background: none;
    -webkit-appearance: none;
	outline: none;
}
input[type="checkbox"] {
    cursor: pointer;
}
.register textarea { 
	width:98%;
}
/*-- input-effect --*/
.styled-input.agile-styled-input-top {
    margin-top: 0;
} 

.styled-input {
	
    position: relative;
    margin: 0 0 1.2em;
}
.styled-input:nth-child(1),.styled-input:nth-child(3){
	margin-left:0;
}
.textarea-grid{
	float:none !important;
	width:100% !important;
	margin-left:0 !important;
}
.styled-input label {
	color: #8c8c8c;
    padding: 0.8em 16px;
    position: absolute;
    top:-10px;
    left: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    pointer-events: none;
    font-weight: 400;
    font-size: .7em;
    display: block;
    line-height: 1em;
}
.styled-input input ~ span,.styled-input textarea ~ span {
	display: block;
    width: 0;
    height: 2px;
    background: #333;
    position: absolute;
    bottom: 0;
    left: 0;
    -webkit-transition: all 0.125s;
    -moz-transition: all 0.125s;
    transition: all 0.125s;
}
.styled-input textarea ~ span { 
    bottom: 5px; 
}
.styled-input input:focus.styled-input textarea:focus { 
	outline: 0; 
} 
.styled-input input:focus ~ span,.styled-input textarea:focus ~ span {
	width: 100%;
	-webkit-transition: all 0.075s;
	-moz-transition: all 0.075s;  
	transition: all 0.075s; 
} 
/*-- //input-effect --*/
.register-form input[type="submit"] {
    outline: none;
    color: #FFFFFF;
    padding: .3em 3em;
    font-size: 1.4em;
    margin: 1em 0 0 0;
    -webkit-appearance: none;
    background: #009688;
    border: 2px solid #009688;
    cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
	font-family: 'Yanone Kaffeesatz', sans-serif;
}
.register-form input[type="submit"]:hover {
    background: #FFFFFF;
	color:#009688;
	border: 2px solid #009688;
}
input[type="text"] {
    width: 100%;
}
/*-- //contact --*/
/*-- copyright --*/
.agile-copyright {
    color: #fff;
    text-align: center;
    font-size: 1em;
    margin: 2em 0 0;
    word-spacing: 5px;
}

.pad-a {padding:5px 0px; border:1px dashed #eee; width:100%;}
.col-md-4 {padding:2px;}

/*-- //copyright --*/

@media  only screen and (max-width: 768px) {
.register-right {
    background: #FFFFFF;
	 height:auto;
	 float:left;
}
.flt-left {float:left; width:100%;}
}
textarea {margin-bottom:15px;border:1px solid #ddd;}
#accordion {
    margin-top: 34px;
    float: left;
    width: 100%;
}
.panel-default > .panel-heading {
    color: #333333;
    background-color: #ffd7d9;
    border-color: #ddd;
}
</style>

<div id="fh5co-hero">

<div class="container">
<section class="register">
	<div class="register-full">
		
		
		<form id="equifax_form" method="POST" >
		 <?php echo e(csrf_field()); ?>

		 
	
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<h2 style="padding:10px;background:#666;color:#fff;margin-bottom:0px; text-align:center;">Credit Score</h2>
		<div class="register-right">
		 
			<div class="register-in">
				
				<div class="register-form col-md-12 col-xs-12">
					<!-- <form action="#" method="post"> -->
					<div><h3><b>Report Information</b></h3></div>
						<div class="col-md-12"><h4><b>Consumer Name And Address</b></h4></div>
				        
						<div class="styled-input col-md-6">
								<input type="text" name="FirstName" id="FirstName" maxlength="40"   onkeypress="return AllowAlphabet(event)" required >
								<label>First Name</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="MiddleName" id="MiddleName"  maxlength="40"  onkeypress="return AllowAlphabet(event)" >
								<label>Middle Name</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="LastName" id="LastName" maxlength="40"  onkeypress="return AllowAlphabet(event)" required>
								<label>Last Name</label>
								<span></span>
					    </div>

					    
								 <div class="styled-input col-md-6 drop-arr">
								<SELECT name="MaritalStatus" id="MaritalStatus" required>
									<option selected value=""  disabled>Marital Status</option>
									<option value="single">Single</option>
									<option value="married">Married</option>
									<option value="divorced">Divorced</option>
								</SELECT> 
					    </div>
			           <div class="col-md-12"><h6 class="text-danger text-sm">* Atleast one of the Address is Mandatory (marked in RED)</h6></div>
					   </div>
			   
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Address Information 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      <div class="col-md-12">
					<textarea placeholder="Address" name="AddressLine[]" required> </textarea>
					
					 </div>
					 <div class="styled-input col-md-6 drop-arr">
				   	<select name="AddressType[]" id="AddressType" required>
				   		<option disabled selected value="" >Select Address Type</option>
				   		<option value="C">Current or Present</option>
				   		<option value="P"> Permanent</option>
				   		<option value="O">Office</option>
				   		<option value="X">Other or Unspecified</option>
				   	</select>
					</div>
					<div class="styled-input col-md-6">
								<input type="text" name="Locality1[]" id="Locality1" maxlength="40" required>
								<label>Locality 1</label>
								<span></span>
					  </div>
					  <div class="styled-input col-md-6">
								<input type="text" name="Locality2[]" id="Locality2" maxlength="40" required>
								<label>Locality 2</label>
								<span></span>
					  </div>
					  <div class="styled-input col-md-6">
								<input type="text" name="City[]" id="City" required>
								<label>City</label>
								<span></span>
					  </div>
					 
					 <div class="styled-input col-md-6">
								<input type="text" name="Postal[]" id="Postal" onkeypress="return Numeric(event)" required maxlength="6">
								<label>Postal Pin</label>
								<span></span>
					  </div>
				   <div class="styled-input col-md-6 drop-arr">
				   	<select name="State[]" required>
				   		<option disabled selected value="" >Select State</option>
				   		<?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <option value="<?php echo e($value->state_code); ?>"><?php echo e($value->state_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				   	</select>
					</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Address Information 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      	
      	<div class="col-md-12">
					<textarea placeholder="Address" name="AddressLine[]" maxlength="220"> </textarea>
					
					 </div>
					 <div class="styled-input col-md-6 drop-arr">
				   	<select name="AddressType[]" id=AddressType>
				   		<option disabled selected value="" >Select Address Type</option>
				   		<option value="C">Current or Present</option>
				   		<option value="P"> Permanent</option>
				   		<option value="O">Office</option>
				   		<option value="X">Other or Unspecified</option>
				   	</select>
					</div>
					<div class="styled-input col-md-6">
								<input type="text" name="Locality1[]" id="Locality1" maxlength="40" >
								<label>Locality 1</label>
								<span></span>
					  </div>
					  <div class="styled-input col-md-6">
								<input type="text" name="Locality2[]" id="Locality2" maxlength="40" >
								<label>Locality 2</label>
								<span></span>
					  </div>
					  <div class="styled-input col-md-6">
								<input type="text" name="City[]" id="City" maxlength="40" >
								<label>City</label>
								<span></span>
					  </div>
					 
					 <div class="styled-input col-md-6">
								<input type="text" name="Postal[]" id="Postal"  maxlength="6">
								<label>Postal Pin</label>
								<span></span>
					  </div>
				   <div class="styled-input col-md-6 drop-arr">
				   	<select name="State[]">
				   		<option disabled selected value="" >Select State</option>
				   		<?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <option value="<?php echo e($value->state_code); ?>"><?php echo e($value->state_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				   	</select>
					</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Address Information 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      	<div class="col-md-12">
					<textarea placeholder="Address" name="AddressLine[]"> </textarea>
					
					 </div>
					 <div class="styled-input col-md-6 drop-arr">
				   	<select name="AddressType[]" id=AddressType>
				   		<option disabled selected value="" >Select Address Type</option>
				   		<option value="C">Current or Present</option>
				   		<option value="P"> Permanent</option>
				   		<option value="O">Office</option>
				   		<option value="X">Other or Unspecified</option>
				   	</select>
					</div>
					<div class="styled-input col-md-6">
								<input type="text" name="Locality1[]" id="Locality1" maxlength="40" >
								<label>Locality 1</label>
								<span></span>
					  </div>
					  <div class="styled-input col-md-6">
								<input type="text" name="Locality2[]" id="Locality2" maxlength="40" >
								<label>Locality 2</label>
								<span></span>
					  </div>
					  <div class="styled-input col-md-6">
								<input type="text" name="City[]" id="City" >
								<label>City</label>
								<span></span>
					  </div>
					 
					 <div class="styled-input col-md-6">
								<input type="text" name="Postal[]" id="Postal"  maxlength="6" >
								<label>Postal Pin</label>
								<span></span>
					  </div>
				   <div class="styled-input col-md-6 drop-arr">
				   	<select name="State[]">
				   		<option disabled selected value="" >Select State</option>
				   		<?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                         <option value="<?php echo e($value->state_code); ?>"><?php echo e($value->state_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				   	</select>
					</div>
      </div>
    </div>
  </div>
</div>
					
					
					
					<div class="col-md-12 address"><h4><b>Consumer ID And Personal Information</b></h4>
                    <!-- <h6 class="text-danger text-sm">* Atleast one of the Personal IDs or Phone Numbers is mandatory.</h6> -->
                    <br />
					</div>
					
						      <div class="styled-input col-md-6">
								<input type="text" name="PANId" id="PANId" oninput="pancard('PANId')" required maxlength="10">
								<span id="pannumber" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid Pan Number.!!</span>
								<label>TAX ID / PAN</label>
								<span></span> 
								</div>	
							<div class="styled-input col-md-6">
								<input type="text" name="PassportId" id="PassportId" minlength="7" maxlength="20" >
								<label>Passport ID</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="VoterId" id="VoterId" oninput="voterid('VoterId')"  maxlength="10">
								<span id="voternumber" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid VoterId Number.!!</span>
								<label>Voter ID</label>
								<span></span> 
								</div>

								<div class="styled-input col-md-6">
								<input type="text" name="DriverLicense" id="DriverLicense" maxlength="20" >
								<label>Driving License</label>
								<span></span> 
								</div>

								<div class="styled-input col-md-6">
								<input type="text" class="lastReporteddob" name="DOB" id="DOB" required>
								<!-- <label>DD/MM/YY</label> -->
								<label>Date Of Birth</label>
								<span></span> 
								</div>
					   
					    <div class="styled-input col-md-6">
							
								<select name="Gender" class="drop-arr select-sty" id="Gender" required >
								 <option disabled selected value="" class="text-danger">Gender</option>
                                 <option value="1">Male</option>
								 <option value="2">Female</option>
								</select>
							</div>
							

								<div class="styled-input col-md-6 drop-arr">
								<select name="PhoneType" required>
							   		<option disabled selected value="" >Select Phone Type</option>
							   		<?php $__currentLoopData = $phone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			                         <option value="<?php echo e($value->phone_type_code); ?>"><?php echo e($value->phone_type); ?></option>
			                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							   	</select>
								</div>
							
							<div class="styled-input col-md-6">
								<input type="text" name="MobilePhone" id="MobilePhone" minlength="10" maxlength="12" onkeypress="return Numeric(event)" required>
								<label>Phone (Mobile)</label>
								<span></span> 
								</div>

								<div class="styled-input col-md-6">
								<input type="text" name="HomePhone" id="HomePhone" onkeypress="return Numeric(event)" minlength="5" maxlength="12" >
								<label>Phone (Home)</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6" style="display: none;">
								<input type="text" name="" id="" onkeypress="return Numeric(event)"  >
								<label>Phone (Other)</label>
								<span></span> 
								</div>
							
							<div class="styled-input col-md-6" style="display: none;">
								<input type="text" name="NationalIdCard" id="NationalIdCard" maxlength="20" >
								<label>National ID Card (UIN)</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6" style="display: none;">
								<input type="text" name="RationCard" id="RationCard" maxlength="20" >
								<label>Ration Card </label>
								<span></span> 
								</div>
							
							
						<br>

			
			<div class="col-md-12 address"><h4><b>Retail Account No</b></h4></div>
				      <div class="styled-input col-md-6">
								<input type="text" name="AccountNumber[0]" id="" maxlength="14"  required>
								<label>Account Number 01</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="AccountNumber[1]" id="" maxlength="14"  >
								<label>Account Number 02</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="AccountNumber[2]" id="" maxlength="14" >
								<label>Account Number 03</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="AccountNumber[3]" id="" maxlength="14" >
								<label>Account Number 04</label>
								<span></span>
					    </div>
			<div class="fields-grid">
					
							<!-- <div class="styled-input agile-styled-input-top col-md-6">
								<input type="text" name="" id=""    > 
								<label>Reference No.</label>
								<span></span>
							</div> -->
							<div class="styled-input col-md-6">
							
								<select name="InquiryPurpose" class="drop-arr select-sty" id="InquiryPurpose"  required >
								 <option disabled selected value="" class="text-danger">Inquiry Purpose</option>
                                 <?php $__currentLoopData = $inq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                 <option value="<?php echo e($value->inquiry_code); ?>"><?php echo e($value->inquiry_purpose); ?></option>
                             	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								</select>
							</div>
							 
							 <div class="styled-input col-md-6">
								<input type="text" name="TransactionAmount" id="TransactionAmount"   onkeypress="return Numeric(event)" required> 
								<label>Transaction Amount (Rs)</label>
								<span></span>
							</div>

							
						</div>		    
				
				</div>
		
		</div>
		<div class="col-md-12 white-bg flt-left"><div class="col-md-4"></div><div class="col-md-4 col-xs-12">
			<a class="btn btn-danger block col-xs-12 btn-outline  mrg-top mrg-btm " id="equifax_submit">Submit</a> 
		<!-- <a href="#"><input type="submit" name="submit" value="submit" class="btn btn-danger btn-outline with-arrow animate-box fadeInUp animated" ><i class="icon-arrow-right"></i></a>-->

		<!-- <input type="submit" name="submit" value="submit" class="btn btn-danger btn-outline animate-box fadeInUp animated otp-btn">
 -->
		</div></div>

	 
		
		</div>
		
		</div>
		</div>
		
		</form>
		
		
	<div class="clear"> </div>
	</div>

</section>
</div>

</div>

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<script type="text/javascript">
  function AllowAlphabet(e){
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else{
    // alert('Please Enter Only Character values.');
    return false;
      }
}


 function Numeric(event) {
      if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode != 8) {
          event.keyCode = 0;
          return false;
      }
    }


</script>

<script type="text/javascript">
	function pancard(obj,val){
		// console.log(obj);
		if(obj=='PANId' ){
                   var str =$('#PANId').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#pannumber').hide();
                     	// $('.credit-submit').show();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#pannumber').show();
                  	// $('.credit-submit').hide();

                  	return false;
                  }
                  
	}
}
</script>

<script type="text/javascript">
	function voterid(obj,val){
		// console.log(obj);
		if(obj=='VoterId' ){
                   var str =$('#VoterId').val();
                   var voteridPattern = /^([a-zA-Z]{3})(\d{7})$/;
                   var res = str.match(voteridPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#voternumber').hide();
                     	// $('.credit-submit').show();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#voternumber').show();
                  	// $('.credit-submit').hide();

                  	return false;
                  }
                  
	}
}
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
	$('#equifax_submit').click(function(){
		
    
      // if(! $('#equifax_form').valid())
      //  {
      //         // alert('not valid');
      //   }
      //   else{
        
           $('#equi_score').empty();
           $('.equi_msg_err').addClass('displaynone');
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('equifax-query')); ?>",
         data : $('#equifax_form').serialize(),
         success: function(msg){
         	  console.log(msg);
         	  json=JSON.parse(msg)
              if(json.status==1){
              	$('.equi_doc_link').attr("href","<?php echo e(URL::to('/uploads/PDF')); ?>/"+json.name);
              	$('.equi_doc_link').show();
              	$('#equi_score').append(json.score[0]);
              }else{
              	$('.equi_msg_err').append(json.err);
              	$('.equi_msg_err').removeClass('displaynone');
              	$('.equi_doc_link').hide();
              }
              
              $('#equifax_modal').modal('show');
              // if (msg.status=="200") 
              // {
              //  $('#early_salary').modal('show');
              // }
              // else if(msg.error=="2")
              // {
              //  $('#early_salary_error').modal('show')
              // }
              
        },


      });   
     //}
	});
</script>







