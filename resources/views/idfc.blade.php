@include('layout.header')
ssss

<div class="container">
	<div id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">IDFC</h2>
	</div>
	<div class="col-md-12 white-bg pad1 mrg-btm box-shadow">
<img src="{{URL::to('images/idfc-img.png')}}" class="img-responsive"/>

 </div>
	<div class="col-md-12 white-bg pad box-shadow fl-lft">
	<div class="col-md-8">
	<br>
	<img src="{{URL::to('images/idfc_banner_left.png')}}" class="img-responsive"/>
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

