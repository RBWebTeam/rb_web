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
    margin-bottom: 2em;
    color: #404040;
    margin: 0 0 2em 0;
    font-weight: 600;
}
 .register input[type="text"],.register input[type="email"],.register input[type="password"],.register input[type="tel"],.register select{
    font-size: 1em;
    color: #8c8c8c;
    padding: 0.5em 1em;
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
	min-height: 150px;
    resize: none;
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
	width: 100%;
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

</style>

<div id="fh5co-hero">

<div class="container">
<section class="register">
	<div class="register-full">
		<!--  <div class="register-left col-md-4">
			<div class="register-in">
				<h1><b>Cash On The Go</b></h1>
				<h2>Without Any Hassle</h2>
				<p>Borrowing money from Rupeeboss Website is as simple as cooking an instant noodle just 3 simple steps and the money is credited to your account.</p>
				<div class="col-md-4 text-center"><p class="pad-a" title="Login & Apply">APPLY</p></div>
				<div class="col-md-4 text-center"><p class="pad-a" title="Approval">APPROVAL</p></div>
				<div class="col-md-4 text-center"><p class="pad-a" title="Cash Transfer">TRANSFER</p></div>
				
				<p>Login your Account, tell us how much cash you need and when you want to return, upload some basic document.</p>
				
			</div>
		</div> -->
		
		<form id="early_salary_form" name="early_salary_form" method="POST">
		 <?php echo e(csrf_field()); ?>

		 
		
		<div class="col-md-4">
		<h1 class="text-center">WANT TO GET INSTANT LOAN ?</h1>
		<h4 class="text-center">Apply now and get money transferred to your bank A/C today.</h4>
			<img src="<?php echo e(URL::to('images/bag.png')); ?>" alt="bag" class="img-responsive"/>
			</div>
			<div class="col-md-8">
			<h2 style="padding:10px;background:#2c86c0;color:#fff;margin-bottom:0px;">Register With Us</h2>
		<div class="register-right">
		 
			<div class="register-in">
				
				<div class="register-form col-md-6 col-xs-12">
					<!-- <form action="#" method="post"> -->
						<div class="fields-grid">
						<input type="hidden" name="merchantId" id="merchantId" value="66">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="FirstName" id="FirstName" onkeypress="return AllowAlphabet(event)"  required=""> 
								<label>First name</label>
								<span></span>
							</div>
							 
							 <div class="styled-input">
								<input type="text" name="LastName" id="LastName" onkeypress="return AllowAlphabet(event)" required=""> 
								<label>Last name</label>
								<span></span>
							</div>
							
							
							<div class="styled-input">
								<select name="City" id="City"  required>
								 <option disabled selected  value="">Select City</option>
                 <option value="Mumbai">Mumbai</option>
								 <option value="Thane">Thane</option>
								 <option value="Navi-Mumbai">Navi-Mumbai</option>
								 <option value="Delhi">Delhi</option>
								 <option value="Nodia">Nodia</option>
								 <option value="Gurgaon">Gurgaon</option>
								 <option value="Gaziabad">Gaziabad</option>
								 <option value="Faridabad">Faridabad</option>
								 <option value="Pune">Pune</option>
								 <option value="PMPC">PMPC</option>
								 <option value="Hyderabad">Hyderabad</option>
								 <option value="Secunderabad">Secunderabad</option>
								 <option value="Bangalore">Bangalore</option>
								 <option value="Gandhinagar">Gandhinagar</option>
								 <option value="Jaipur">Jaipur</option>
								 <option value="Chennai">Chennai</option>
                                
								</select>
								<span></span>
							</div>
							
							<div class="styled-input">
							<input type="radio" id="Salary" value="Salary" name="Employment"  /> Salary <input type="radio" id="Self_Employed" value="Self_Employed" name="Employment"/> Self Employed </div>
							
							
							
						</div>
						
				
				</div>
			
			
			<div class="register-form col-md-6 col-xs-12">
				      <div class="styled-input">
								<input type="text" name="phoneNumber" id="phoneNumber" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>
								<label>Mobile Number</label>
								<span></span>
							</div>
				
				     
					     
              <div class="styled-input">
								<input type="text" name="Age" id="Age" onkeypress="return fnAllowNumeric(event)"  maxlength="2" required>
								<label>Age</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="RefferalCode" id="RefferalCode" onkeypress="return fnAllowNumeric(event)" value="0">
								<label>Refferal Code (If any)</label>
								<span></span>
							</div>
						
							<div class="styled-input" id="sal_div" style="display: none;">
								<input type="text" name="MonthlySalary" id="MonthlySalary" onkeypress="return fnAllowNumeric(event)" 
                maxlength="9" required>
								<label>Monthly Take Home Salary</label>
								<span></span>
							</div>
						
						<div class="styled-input">
                <input type="text" name="LoanAmount" id="LoanAmount"  maxlength="6"  onkeypress="return fnAllowNumeric(event)" required>
                <label>Loan Amount</label>
                <span></span>
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

<div class="modal fade" tabindex="-1" role="dialog" id="early_salary">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Thank You!<br>
         For sharing your details. We've sent you a link to download the EarlySalary app on your mobile phone. Go ahead and start applying for instant cash!.</b><h5></p></h4>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="early_salary_error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black" ><b>Thank You!<br> 
         For sharing your details. The details that you've shared doesn't meet our basic criteria. You should be living in the 8 cities that we are operational in and drawing a minimum take home salary of Rs 20,000 (OR) Your Mobile No. Already Exists With Us. Kindly, Try With Your Alternate No.

         We've SMS'ed you the link to download the app. If you still wish to apply. </b><h5></p></h4>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="salary">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Salary should be equal to 20000 OR greater than 20000.</b><h5></p></h4>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="loanamount">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Amount should be equal to 10000 &  less than (OR) equal to 100000.</b><h5></p></h4>
        
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
	$('#early_salary_submit').click(function(){
    if($('input[name=Employment]:checked').length<=0)
     {
         alert("No radio checked")
         return false;
     }
      if(! $('#early_salary_form').valid())
       {
              // alert('not valid');
        }
        else
        {
          if ((($('#MonthlySalary').val().length)<5))
          {
            // alert('Salary should be equal to 20000 OR greater than 20000');
            $('#salary').modal('show');
            return false;
          }
          if ((($('#LoanAmount').val().length)<5))
          {
            //alert('Amount should be between 10000-1000000');
            $('#loanamount').modal('show');
            return false;
          }
           
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('early-salary-submit')); ?>",
         data : $('#early_salary_form').serialize(),
         success: function(msg){
              // console.log(msg.status);
              if (msg.status=="200") 
              {
               $('#early_salary').modal('show');
              }
              else if(msg.error=="2")
              {
               $('#early_salary_error').modal('show')
              }
              
        }  
      });   
     }
	});
</script>

<script type="text/javascript">
  $('#Salary').click(function(){
     $('#sal_div').show();
  });
  $('#Self_Employed').click(function(){
    $('#sal_div').hide();
  });
</script>

