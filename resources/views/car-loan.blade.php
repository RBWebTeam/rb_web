@include('layout.header')
    <div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	<!-- <p class="text-left"><a href="{{URL::to('/')}}">Home</a>/{{$id->Product_Name}}</p> -->
	<h2 class="align-center loan-head">Car-Loan</h2>
	</div>
	<div class=""></div>
	<div class="flexslider col-md-8">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
 
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{URL::to('images/01/car.jpg')}}" alt="gear_pic">
    </div>

    <div class="item">
      <img src="{{URL::to('images/01/car.jpg')}}" alt="gear_pics">
    </div>

    
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			
	  	</div>

		<div class="col-md-4 red-bg1 ">
	   <div class="form-in ">

              <span class="head-1 heading-bmar">Request A Call Back</span>
              <form class="" id="compareform" role="form" method="POST">
            
              {{ csrf_field() }}
                <input type="hidden" name="form" value="subscribe-form">
				  <div class="has-error">
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
				       <input type="hidden" class="form-control" id="product" value="car" name="product"  />
				    </div>
				  </div>
			<div class="has-error">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control clr-ddd" onkeypress="return fnAllowNumeric(event)" 
			pattern="[789][0-9]{9}" required maxlength="10" minlength="10" placeholder="Mobile No." >
		    </div>
		  </div>
				 <div class="has-error">
				  
				    <div>
				      <input type="email" class="form-control clr-ddd" id="email" name="email" placeholder="Email Id" required  />
                 
				    </div>
				  </div>
			 
			  
			  <div class="centr-obj"> 
			    
			    <button class="btn btn-primary btn-outline with-arrow sidebar-submit" >Submit<i class="icon-arrow-right"></i></button>
			   
			  </div>
			</form>
		</div>	
		<div class='msg displaynonemsg'><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynonemsg'><p>Ooops. Something went wrong.</p></div>
	</div>
	</aside>
	</div>
	
	
	<div id="fh5co-pricing-section">
		<div class="container">
			
			<div class="row">
				<div class="pricing pad">
					<div class="col-md-4 animate-box">
					    <a href="{{URL::to('contact-us')}}" >
						<div class="price-box popular">
							
							<div class="ic1"><img src="images/ic1.png" alt="compare_pic" /></div>
							<h4 class="mrg-btm">Compare Loan</h4>
							<ul>
							     <li>Check & compare loans from thousand of banks</li>
								 <li>Compare PSU & Private rates</li>
								 <li>Compare with 100 banks.</li>
							</ul>
						
							<!-- <a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('get-loan')}}/{{$id->Product_Id}}" >Compare<i class="icon-arrow-right"></i></a> -->
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('contact-us')}}" >Compare<i class="icon-arrow-right"></i></a>
						</div>
						</a>
					</div>

					<div class="col-md-4 animate-box">
					    <a href="{{URL::to('check_emi')}}">
						<div class="price-box popular">
							<div class="ic1"><img src="images/ic2.png" alt="ic2_pic" /></div>
							<h4 class="mrg-btm">Calculate EMI</h4>
							<ul>
							     <li>EMI Calculator is easy to use, intuitive to understand and is quick to perform.</li>
								 <li>Calculate your EMIs.</li>
							</ul>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check_emi')}}">Calculate EMI<i class="icon-arrow-right"></i></a>
						</div>
						</a>
					</div>
					
					<div class="col-md-4 animate-box">
					   <a  href="{{URL::to('apply-car-loan')}}">
						<div class="price-box popular">
							<div class="ic1 text-center"><img src="images/ic3.png" alt="ic3_pic" /></div>
							<h4 class="mrg-btm">Apply Online Loan</h4>
							<ul>
							     <li>Expert Assistance</li>
								 <li>Faster Processing</li>
								 <li>Minimum Documentation</li>
								 <li>More convenient</li>
							</ul>
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('apply-car-loan')}}">Apply Online
							<i class="icon-arrow-right"></i></a>
						</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
<div class="col-md-9">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
<li><a data-toggle="tab" href="#menu1">Points to Consider</a></li>
<li><a data-toggle="tab" href="#menu2">The Rupeeboss Advantage</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row">
				
				<div class="col-md-12 animate-box">
					<a href="#" class="item-grid text-center">
						
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Real people, Real care</h3>
								<P class="p-clr">Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.</P>
							</div>
						</div>
					</a>
				</div>
				
			</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="row">
				<div class="col-md-12 animate-box">
					<a href="#" class="item-grid text-center">
						
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Fill the form & get the loan</h3>
								<P class="p-clr">Applying is as simple as reading this. The process will be completed before your coffee gets cold!
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.
								Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.</P>
							</div>
						</div>
					</a>
				</div>
				
			</div>
  </div>
</div>
</div>
<!--- <div class="col-md-3 testimonials"></div> ---->
<div class="flexslider col-md-3 testimonials">
<h4 class="text-center">Clients Testimonials</h4>
<div class="user-ico"><i class="icon-user"></i></div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <p class="text-center btm-o">Mr. rajesh Shukla</p>
<p class="text-center">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</p>
    </div>

    <div class="item">
      <p class="text-center btm-o">Mr. rajesh Shukla</p>
<p class="text-center">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</p>
    </div>

    <div class="item">
      <p class="text-center btm-o">Mr. rajesh Shukla</p>
<p class="text-center">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</p>
    </div>

    <div class="item">
      <p class="text-center btm-o">Mr. rajesh Shukla</p>
<p class="text-center">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</p>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			
	  	</div>
		
		
		
		
		
</div>
</div>
	
@include('layout.footer')
@include('layout.script')