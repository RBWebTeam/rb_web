@include('layout.header')
<style>

.register-full {
    width: 60%;
    margin: 0 auto;
}
.register-left {
    background: #009688;
    height: 605px;
}
.register-right {
    background: #FFFFFF;
}
.register-in {
    padding: 3em;
}
.register-left, .register-right {
    width: 50%;
    float: left;
}
.register-left p {
    margin: 2em 0;
    line-height: 1.8em;
    font-size: 1em;
    letter-spacing: 1px;
}
.register-left h1 {
    font-size: 3em;
    text-transform: uppercase;
    font-weight: 400;
    margin-bottom: 1em;
    color: #FFFFFF;
    text-align: center;
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
    border:2px solid #0a7369;
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
 .register input[type="text"],.register input[type="email"],.register input[type="password"],.register input[type="tel"]{
    font-size: 1em;
    color: #8c8c8c;
    padding: 0.5em 1em;
    border: 0;
    width: 90%;
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
.agile-copyright a:hover{
    color: #FFF;
}
.agile-copyright a {
    color: #009688;
	font-weight:600;
}
/*-- //copyright --*/

/* responsive design */
@media (max-width: 1440px) {
	.register-full {
		width: 65%;
	}
	.register-left h1 {
		font-size: 2.9em;
	}
}
@media (max-width: 1366px) {
	.register-left h1 {
		font-size: 2.7em;
	}
}
@media (max-width: 1080px) {
	.register-full {
		width: 75%;
	}
	.register-left p {
		line-height: 1.6em;
	}
	.link a {
		padding: .4em;
		font-size: 1.4em;
	}
}
@media (max-width: 1024px) {
	.register-full {
		width: 75%;
	}
	.register-left h1 {
		font-size: 2.5em;
	}
	.register-left {
		height: 602px;
}
	.register-right h2 {
		font-size: 1.8em;
	}
}
@media (max-width: 991px) {
	.register-left h1 {
		font-size: 2.8em;
	}
	.register-right h2 {
		font-size: 1.6em;
	}
	.register-left {
		height: 598px;
	}
	.register-full {
		width: 85%;
	}
}

@media (max-width: 800px) {
	.register-full {
		width: 84%;
	}
	.register-in {
		padding: 2em;
	}
	.register-left {
		height: 567px;
	}
	.register-left h1 {
		font-size: 2.1em;
	}
	.register input[type="text"], .register input[type="email"], .register input[type="password"], .register input[type="tel"] {
    width: 87%;
	}
}
@media (max-width: 768px) {
	.register-left h1 {
		font-size: 2em;
	}
	.register-left p {
		line-height: 1.4em;
	}
	.link a {
		padding: .4em;
		font-size: 1.2em;
	}
	.register-form input[type="submit"] {
		font-size: 1.2em;
	}
	.register-left {
		height: 559px;
	}
}

@media (max-width: 736px) {
	.styled-input {
		margin: 0 0 1.2em;
	}
	i {
		line-height: 2em;
	}
	.register-left {
		height: 531px;
	}
	.register-left h1 {
		font-size: 2em;
	}
	.register-right h2 {
		font-size: 1.5em;
	}
}
@media (max-width: 667px) {
	.register-full {
		width: 90%;
	}
	.register-in {
		padding: 2em;
	}
	.register-left {
		height: 531px;
	}
}
@media (max-width: 640px) {
	.register-full {
		width: 92%;
	}
	.register-left {
		height: 547px;
	}
}
@media (max-width: 600px) {
	.register-left {
		height: 547px;
	}
}
@media (max-width: 568px) {
	.register-in {
		padding: 1.5em;
	}
	.register-left h1 {
		font-size: 1.7em;
	}
	.register-left p {
		margin: 2em 0;
		line-height: 1.2em;
	}
	.register-left {
		height: 531px;
	}
}
@media (max-width: 480px) {
	.register-left, .register-right {
		width: 100%;
		height: inherit;
	}
	.register-full {
		width: 70%;
	}
}
@media (max-width: 414px) {
	.register-left{
		width: 100%;
		height: inherit;
	}
	body {
		padding: 3em 0;
	}
	.register-right{
		width:100%;
	}
	.register-full {
		width: 75%;
	}
	.styled-input {
		width: 90%;
	}
	.agile-copyright {
		line-height: 1.4em;
		padding: 0 3em;
	}
}
@media (max-width: 320px) {
	body {
		padding: 2em 0;
	}
	.register-left h1 {
		font-size: 1.6em;
	}
	.register-full {
		width: 80%;
	}
	.register input[type="text"], .register input[type="email"], .register input[type="password"], .register input[type="tel"] {
		padding: 0.3em;
	}
	.register-form input[type="submit"] ,.register-form input[type="submit"]:hover{
		padding: 0.4em;
		border: 1px solid #009688;
	}
	.link a{
		border: 1px solid #0a7369;
	}
	.link a:hover {
		border: 1px solid #FFFFFF;
	}
	.register-left p {
		margin: 1em 0;
	}
	.register-form input[type="submit"] {
		font-size: 1em;
	}
	.agile-copyright {
		margin: 2em 1em 0;
		word-spacing: 3px;
		padding: 0em;
	}
}	

</style>
<br>
<div class="container" id="fh5co-hero">


<section class="register">
	<div class="register-full">
		<div class="register-left">
			<div class="register-in">
				<h1><b>Cash On The Go</b></h1>
				<h2>Without Any Hassle</h2>
				<p>Donec ipsum lorem, sodales a sagittis ut, convallis non nibh. Integer vitae cursus nunc, et vestibulum augue. Donec lacinia tristique purus. Aenean in est pretium lectus euismod facilisis.</p>
				<p>Donec ipsum lorem, sodales a sagittis ut, convallis non nibh. Integer vitae cursus nunc, et vestibulum augue. Donec lacinia tristique purus. Aenean in est pretium lectus euismod facilisis.</p>
				<div class="link">
					<a href="#">Already have an account</a>
				</div>
			</div>
		</div>
		<div class="register-right">
			<div class="register-in">
				<h2>register here</h2>
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
								<input type="tel" name="Phone" required="">
								<label>Phone Number</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required="">
								<label>Password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required="">
								<label> Confirm password</label>
								<span></span>
							</div>
							<div class="clear"> </div>
							 <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>I agree to the <a href="#">Terms and Conditions</a></label>
						</div>
						<input type="submit" value="Register">
					</form>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		
	<div class="clear"> </div>
	</div>

</section>

</div>
<br>
@include('layout.footer')
@include('layout.script')

