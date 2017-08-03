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
    font-size: 3.5em;
    text-transform: uppercase;
    font-weight: 400;
    margin-bottom: 1em;
    color: #FFFFFF;
    text-align: center;
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
				<p>Donec ipsum lorem, sodales a sagittis ut, convallis non nibh. Integer vitae cursus nunc, et vestibulum augue. Donec lacinia tristique purus. Aenean in est pretium lectus euismod facilisis.</p>
				
				<div class="link">
					<a href="#">Login</a>
				</div>
			</div>
		</div>
		<form>
		<div class="register-right col-md-4">
			<div class="register-in">
				<h2>register With Us</h2>
				<div class="register-form">
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="First name" required=""> 
								<label>First name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Last name" required=""> 
								<label>Last name</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Email" required="">
								<label>City</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" name="Phone" required="">
								<label>Mobile Number</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="designation" required="">
								<label>Designation</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="employees" required="">
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
								<input type="text" name="company-name" required="">
								<label>Company Name</label>
								<span></span>
							</div>
							
							<div class="styled-input">
								<select>
								  <option>Company Category</option>
								</select>
								<span></span>
							</div>
							
							
							
							<div class="clear"> </div>
							
						</div>
						
						<button class="btn btn-primary btn-outline with-arrow" id="apply_now">Register<i class="icon-arrow-right"></i></button>
					</form>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		</form>
		
		
	<div class="clear"> </div>
	</div>

</section>
</div>

</div>

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

