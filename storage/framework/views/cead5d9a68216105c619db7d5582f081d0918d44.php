<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
#fh5co-hero {
    padding: 4em 0;
    /* background: url(../images/bg.jpg); */
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
    color: #8c8c8c;
    padding: 0.5em 0em;
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
.styled-input input:focus ~ label, .styled-input input:valid ~ label,.styled-input textarea:focus ~ label ,.styled-input textarea:valid ~ label{
    font-size: .9em;
    color: #333333;
    top: -1.3em;
    -webkit-transition: all 0.125s;
	-moz-transition: all 0.125s; 
	-o-transition: all 0.125s;
	-ms-transition: all 0.125s;
    transition: all 0.125s;
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
    padding: 0.5em .9em;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    pointer-events: none;
    font-weight: 400;
    font-size: .9em;
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
    padding: .3em 1em;
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
</style>

<div id="fh5co-hero">

<div class="container">
<section class="register">
	<div class="register-full">
		
		
		<form id="early_salary_form" name="" method="POST">
		 <?php echo e(csrf_field()); ?>

		 
	
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<h2 style="padding:10px;background:#981e32;color:#fff;margin-bottom:0px; text-align:left;">Prescreen Credit Score</h2>
		<div class="register-right">
		 
			<div class="register-in">
				
				<div class="register-form col-md-12 col-xs-12">
					<!-- <form action="#" method="post"> -->
					<div><h4>Report Information</h4></div>
						<div class="fields-grid">
					
							<div class="styled-input agile-styled-input-top col-md-6">
								<input type="text" name="" id=""   required=""> 
								<label>Reference No.</label>
								<span></span>
							</div>
							<div class="styled-input col-md-6">
							
								<select name="" class="drop-arr select-sty" id=""  required>
								 <option disabled selected  value="" class="text-danger">Inquiry Purpose</option>
                                 <option value="">Select Inquiry Purpose</option>
								</select>
							</div>
							 
							 <div class="styled-input col-md-6">
								<input type="text" name="" id="" required=""> 
								<label>Transaction Amount (Rs)</label>
								<span></span>
							</div>

							<div class="styled-input col-md-6">
								<select name="" class="drop-arr select-sty" id=""  required>
								 <option disabled selected  value="">Product</option>
                                 <option value="">Select Product</option>
								</select>
							</div>
							
							
							
						</div>
						<br>

			
			<div class="col-md-12"><h4>Retail Account No.</h4></div>
				      <div class="styled-input col-md-6">
								<input type="text" name="" id="" maxlength="14" required>
								<label>Account Number 01</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="" id="" maxlength="14" required>
								<label>Account Number 02</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="" id="" maxlength="14" required>
								<label>Account Number 03</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="" id="" maxlength="14" required>
								<label>Account Number 04</label>
								<span></span>
					    </div>
				<div class="col-md-12"><h4>Consumer Name And Address</h4></div>
				        
						<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>First Name</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Middle Name</label>
								<span></span>
					    </div>
						<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Last Name</label>
								<span></span>
					    </div>
			           <div class="col-md-12"><h6 class="text-danger text-sm">* Atleast one of the Address is Mandatory (marked in RED)</h6></div>
					   
					   
				<div class="col-md-12"><h4>Address Information 1</h4></div>
			        <div class="col-md-12">
					<textarea> Address 1</textarea>
					
					 </div>
					 
					 <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Postal Pin</label>
								<span></span>
					  </div>
				   <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>State / Union Territory</label>
								<span></span>
					</div>
				
				<div class="col-md-12"><h4>Address Information 2</h4></div>
			        <div class="col-md-12">
					<textarea> Address 2</textarea>
					
					 </div>
					 
					 <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Postal Pin</label>
								<span></span>
					  </div>
				   <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>State / Union Territory</label>
								<span></span>
					    </div>
				
				<div class="col-md-12"><h4>Address Information 3</h4></div>
			        <div class="col-md-12">
					<textarea> Address 3</textarea>
					
					 </div>
					 
					 <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Postal Pin</label>
								<span></span>
					  </div>
				   <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>State / Union Territory</label>
								<span></span>
					</div>
					
					
					
					<div class="col-md-12"><h4>Consumer ID And Personal Information</h4></div>
					<div class="col-md-12"><h6 class="text-danger text-sm">* Atleast one of the Personal IDs or Phone Numbers is mandatory.</h6></div>
						      <div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>TAX ID / PAN</label>
								<span></span> 
								</div>	
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Passport ID*</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Voter ID*</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Phone (Home)</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Phone (Mobile)</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Phone (Other)</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>Driver Licence</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="text" name="" id="" required>
								<label>National ID Card (UIN)</label>
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
								<input type="date" name="" id="" required>
								<!-- <label>DD/MM/YY</label> -->
								<span></span> 
								</div>
							<div class="styled-input col-md-6">
							
								<select name="" class="drop-arr select-sty" id=""  required>
								 <option disabled selected  value="" class="text-danger">Gender</option>
                                 <option value="">Male</option>
								 <option value="">Female</option>
								</select>
							</div>
				</div>
		
		</div>
		<div class="col-md-12 white-bg flt-left"><div class="col-md-4"></div><div class="col-md-4 col-xs-12"><a class="btn btn-danger block col-xs-12 btn-outline  mrg-top mrg-btm " id="early_salary_submit">Submit</a></div></div>
		
		</div>
		
		</div>
		</div>
		
		<!-- </form> -->
		
		
	<div class="clear"> </div>
	</div>

</section>
</div>

</div>

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



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
  $('#Salary').click(function(){
     $('#sal_div').show();
  });
  $('#Self_Employed').click(function(){
    $('#sal_div').hide();
  });
</script>

