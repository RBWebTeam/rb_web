@include('layout.header')


<div class="container">
	<div id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Comfy Card</h2>
	</div>
	<div class="col-md-12 white-bg pad1 mrg-btm box-shadow">
<img src="{{URL::to('images/comfy_banner.png')}}" class="img-responsive"/>

 </div>
	<div class="col-md-12 white-bg pad box-shadow fl-lft">
	<div class="col-md-8">
	<div class="pad border">
	<h3 class="pad text-center">Comfy Card</h3>
	<p>What if you were to unfortunatly with an accident & your car needs repairs at the garage fot few days? it is both frustrating and disappointing , not to have your prized in your sight & trying to figure out your travel.</p>

<p>We are cognizant times that are getting uncertain by the day.Our lives hang in the balance of unpredictable situation. One minute you,re driving the road whisting a tune the next moment the car right in front of you spinsout of control and crashes. We Understand your pain & the need of a reliable partner who can share burden.</p>

<p>While we cannot control what happens, we can keep you better prepared with comfy at your recue.</p>
 <button class="btn-submt">View Brochure</button>
 </div>
	</div>

	 
	 <div class="col-md-4">
	   <div class="border brd-for">

             <form class="" id="compareform" role="form" method="POST" action="">
				  
				  
				    <div class="inp-hig">
					  <label class="form-label-new">Name</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Email</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Email" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Mobile</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Mobile No." required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">City</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your City" required class="clr-ddd" />
				    </div>
              
			  <div class="mrg-top"> 
			    
			     <button class="btn-submt">Apply Now</button>
				 
			   
			  </div>
			</form>
		</div>	
	</div> 
	
	
	
	</div>
	</div>
</div>
	
@include('layout.footer')
@include('layout.script')

