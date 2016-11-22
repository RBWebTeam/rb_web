@include('layout.header')
    <div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	<p class="text-left"><a href="{{URL::to('/')}}">Home</a>/Personal Loan</p>
	<h2 class="align-center loan-head">Personal Loan</h2>
	</div>
	<div class=""></div>
	<div class="flexslider col-md-8">
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
      <img src="{{URL::to('images/loan.jpg')}}" alt="">
    </div>

    <div class="item">
      <img src="{{URL::to('images/loan.jpg')}}" alt="">
    </div>

    <div class="item">
      <img src="{{URL::to('images/loan.jpg')}}" alt="">
    </div>

    <div class="item">
      <img src="{{URL::to('images/loan.jpg')}}" alt="">
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

		<div class="col-md-4 red-bg1">
	   <div class="form-in">
              <span class="head-1 heading-bmar">Request A Call Back</span>
             <form class="" id="compareform" role="form" method="POST">
            
              {{ csrf_field() }}
                <input type="hidden" name="form" value="subscribe-form">
				  <div class="form-group">
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
				    </div>
				  </div>
			<div class="form-group">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control clr-ddd" onkeypress="fnAllowNumeric(event)" 
			pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile No." >
		    </div>
		  </div>
				 <div class="form-group">
				  
				    <div>
				      <input type="email" class="form-control clr-ddd" id="email" name="email" placeholder="Email Id" required  />
                 
				    </div>
				  </div>
			 
			  
			  <div class="form-group centr-obj"> 
			    
			    <button class="btn btn-primary btn-outline with-arrow sidebar-submit" disabled="disabled">Submit<i class="icon-arrow-right"></i></button>
			   
			  </div>
			</form>
			<div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
		</div>	
	</div>
	</aside>
	</div>
	
	
	<div id="fh5co-pricing-section">
		<div class="container">
			
			<div class="row">
				<div class="pricing pad">
					<div class="col-md-4 animate-box">
						<div class="price-box popular">
							
							<div class="ic1"><img src="images/ic1.png" /></div>
							<h4 class="mrg-btm">Compare Loan</h4>
							<ul>
							     <li>Check & compare loans from thousand of banks</li>
								 <li>compare PSU & Private rates</li>
								 <li>Comapre with 100 banks.</li>
							</ul>
						
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('compare')}}" >Compare<i class="icon-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box popular">
							<div class="ic1"><img src="images/ic2.png" /></div>
							<h4 class="mrg-btm">Check Eligibility & Calculate EMI</h4>
							<ul>
							     <li>Check your credit score</li>
								 <li>check your elgibility</li>
								 <li>calculate your EMIs.</li>
							</ul>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('emi')}}">Calculate EMI<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular">
							<div class="ic1 text-center"><img src="images/ic3.png" /></div>
							<h4 class="mrg-btm">Apply Online Loan</h4>
							<ul>
							     <li>Expert Assistance</li>
								 <li>Faster Processing</li>
								 <li>Minimum Documentation</li>
							</ul>
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('/apply_personal_loan')}}">Apply Online
							<i class="icon-arrow-right"></i></a>
						</div>
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