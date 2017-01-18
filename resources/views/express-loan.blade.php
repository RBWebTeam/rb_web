@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	
	<h2 class="align-center loan-head">Express Loan</h2>
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
      <img src="images/birla_ban.png" alt="">
    </div>

    <div class="item">
      <img src="images/tribe_bann.png" alt="">
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

              <span class="head-1 heading-bmar">Request A Call Back<span><br>
             <form class="" id="compare_form" role="form" method="POST" action="customer_form.php">
				  <div class="form-group">
				  
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required class="clr-ddd" />
				    </div>
				  </div>
			<div class="form-group">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control" 
			pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile No." class="clr-ddd">
		    </div>
		  </div>
				 <div class="form-group">
				  
				    <div>
				      <input type="email" class="form-control" id="name" name="name" placeholder="Email Id" required class="clr-ddd" />
                 
				    </div>
				  </div>
			 
			  
			  <div class="form-group centr-obj"> 
			    
			     <button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
			   
			  </div>
			</form>
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
							
							<div class="center-blg"><img src="images/tribe.png" /></div>
							<h4 class="mrg-btm">Tribe</h4>
							<ul>
							     <li>Online Sanction</li>
								 <li>Minimum Documentation</li>
								 <li>Express cash</li>
							</ul>
						
							<button class="btn btn-primary btn-outline with-arrow">Apply Now<i class="icon-arrow-right"></i></button>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box popular">
							<div class="center-blg"><img src="images/birla.png" /></div>
							<h4 class="mrg-btm">Aditya Birla</h4>
							<ul>
							     <li>Online Sanction</li>
								 <li>Minimum Documentation</li>
								 <li>Express cash</li>
							</ul>
							<button class="btn btn-primary btn-outline with-arrow">Apply Now<i class="icon-arrow-right"></i></button>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular">
							<div class="center-blg"><img src="images/apply-online.png" /></div>
							<h4 class="mrg-btm">Apply Online Loan</h4>
							<ul>
							     <li>Online Sanction</li>
								 <li>Minimum Documentation</li>
								 <li>Express cash</li>
							</ul>
							
							<button class="btn btn-primary btn-outline with-arrow">Apply Online<i class="icon-arrow-right"></i></button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
					<li><a data-toggle="tab" href="#menu1">Points to Consider</a></li>
					<li><a data-toggle="tab" href="#menu2">The Rupeeboss Advantage</a></li>
				</ul>

				<div class="tab-content">
	<div id="home" class="tab-pane fade in active">
    <div class="row">
				
				<div class="col-md-12 animate-box">
					<a href="#" class="item-grid">
						
						<div>
							<div class="v-align">
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
</div></div></div></div>


@include('layout.footer')
@include('layout.script')

