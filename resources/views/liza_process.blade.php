@include('layout.header')
    <!--- liza Step First   - -->
	    <div class="container">
		<div class="liza col-md-8" id="step-1">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 37 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>
			<div class="col-md-12 text-center animate-box cont" id="q1">
			
             <h3>I am a
			 <select class="clr-blue" onchange="changeTest(this,'q2')">
			 <option></option>
			 <option>salaried</option>
			 <option>self-employed (eg. doctor)</option>
			 <option>self-employed business</option>
			 </select> 
			professional</h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q2" ><h3>and I want a <span class="clr-blue1">Personal Loan</span> of Rs. 
			<input type="tel" id="loanamt" name="loanamt"  onkeypress="return fnAllowNumeric(event)" onkeyup="changeText(this,'q3')" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q4')" id="q3">
			<h3>I
			 <select class="clr-blue">
			 <option></option>
			 <option>do</option>
			 <option>do not</option>
			 </select> 
			have existing loan(s)</h3> 
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q5')" id="q4">
			<h3>and I
			 <select class="clr-blue">
			 <option></option>
			 <option>have</option>
			 <option>have never</option>
			 </select> 
			taken loans in the past</h3> 
			</div>
		     
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q6')" id=q5>
			<h3>I
			 <select class="clr-blue">
			 <option></option>
			 <option>have</option>
			 <option>do not have</option>
			 </select> 
			credit card(s).</h3> 
			</div>
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none;" onchange="changeTest(this,'btn_step1')" id="q6">
			<h3>I
			 <select class="clr-blue">
			 <option></option>
			 <option>have</option>
			 <option>have not</option>
			 </select> 
			delayed/defaulted on a Loan EMI or Credit Card payment in the last 3 months..</h3> 
			</div>
			
			<div class="text-center" style="display:none;" id="btn_step1">
			<button class="btn btn-primary btn-outline with-arrow animate-box" >Continue<i class="icon-arrow-right"></i></button>
			</div>
		</div>
	   
	   
	  
	   <div class="col-md-4 liza1" >
			<div class="text-center guid" id="pop1">En     ter your monthly takehome salary here!
	Without any performance bonus or incentives!</div>
<div class="patch"><img src="images/patch_down.png"></div>
        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		</div>

@include('layout.footer')
@include('layout.script')