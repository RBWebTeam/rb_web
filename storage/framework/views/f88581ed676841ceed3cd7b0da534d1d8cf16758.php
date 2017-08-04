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
    height: 600px;
}
.register-left p {color:#ff9599;}
.register-right {
    background: #FFFFFF;
	 height: 600px;
}
.register-in {
    padding:1.5em;
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
    margin: 0 0 1.6em;
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


</style>

<div id="fh5co-hero">

<div class="container">
<section class="register">
	<div class="register-full">
		<div class="register-left col-md-4">
			<div class="register-in">
				<h1><b>Cash On The Go</b></h1>
				<h2>Without Any Hassle</h2>
				<p>Borrowing money from Rupeeboss Website is as simple as cooking an instant noodle just 3 simple steps and the money is credited to your account.</p>
				<div class="col-md-4 text-center"><p class="pad-a" title="Login & Apply">APPLY</p></div>
				<div class="col-md-4 text-center"><p class="pad-a" title="Approval">APPROVAL</p></div>
				<div class="col-md-4 text-center"><p class="pad-a" title="Cash Transfer">TRANSFER</p></div>
				
				<p>Login your Account, tell us how much cash you need and when you want to return, upload some basic document.</p>
				
			</div>
		</div>
		<form id="early_salary_form" name="early_salary_form" method="POST">
		 <?php echo e(csrf_field()); ?>

		<div class="register-right col-md-4">
			<div class="register-in">
				<h2>register With Us</h2>
				<div class="register-form">
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
								<input type="text" name="Email" id="Email" oninput="mail('Email')" required="">
								<div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="City" id="City" class="search_citynm" required="">
								<label>City</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="phoneNumber" id="phoneNumber" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>
								<label>Mobile Number</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Designation" id="Designation" required="">
								<label>Designation</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="NoOfEmployees" id="NoOfEmployees" onkeypress="return fnAllowNumeric(event)" minlength="2" maxlength="6" required="">
								<label> No of Employees</label>
								<span></span>
							</div>
							<div class="clear"> </div>
							
						</div>
						
				
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		
		<div class="register-right col-md-4">
			<div class="register-in">
			<br>
				<div class="register-form">
					
						<div class="fields-grid">
							<div class="styled-input">
								<input type="text" name="CompanyName" id="CompanyName" required="">
								<label>Company Name</label>
								<span></span>
							</div>
							
							<div class="styled-input">
								<select name="Company_Category" id="Company_Category"  required>
								 <option value="">Company Category</option>
                                 <option value="Service">Service</option>
                                 <option value="Manufacturing">Manufacturing</option>
								</select>
								<span></span>
							</div>
							
							
							
							<div class="clear"> </div>
							
						</div>
						
						<a class="btn btn-danger btn-outline with-arrow mrg-top" id="early_salary_submit">Submit <i class="icon-arrow-right"></i></a>
					</form>
				</div>
			</div>
			<div class="clear"> </div>
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
        <h4><p id="modalerr"><h5 style="color: black"><b>Thank You For Early Salary. Our Representative Will Get In Touch With You.</b><h5></p></h4>
        
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
        <h4><p id="modalerr"><h5 style="color: black"><b>Mobile No. Already Exists.Try With Alternate Number </b><h5></p></h4>
        
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
  function mail(obj,val){
    // console.log(obj);
    if(obj=='Email' ){
                   var str =$('#Email').val();
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

  

 $(document).ready(function(){
    src = "<?php echo e(route('searchajax')); ?>";
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
	$('#early_salary_submit').click(function(){
      if(! $('#early_salary_form').valid())
       {
              //alert('not valid');

        }
        else
        {
           
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('early-salary-submit')); ?>",
         data : $('#early_salary_form').serialize(),
         success: function(msg){
              console.log(msg.status);
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

