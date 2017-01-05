@include('layout.header')
    <div class="container-fluid">
	<aside id="fh5co-hero">
	<div class=""></div>
		<div class="flexslider col-md-12">

		<div class="pull-right mar-tp ">

		<a href="{{URL::to('comfy-sales')}}" class="img2"><img src="images/sliding-right-img-2.png" class="img-responsive"/></a>
		  <a href="{{URL::to('express-loan')}}" class="img3"><img src="images/sliding-right-img-1.png" class="img-responsive"/></a>
		   <a href="{{URL::to('comfy-sales')}}" class="img4"><img src="images/sliding-right-img-3.png" class="img-responsive"/></a>

		</div>
			<ul class="slides">
		   	<li style="background-image: url(images/slide_1.png);">
		   		<div class="overlay-gradient"></div>
		   		  <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   				 <img src="images/home-ic.png" class="center-img-align img-responsive" />
		   					<h2 class="slide-head">Home Loan </h2>
							<h5>Stay ahead of the curve with the Best in the Market</h5>
		   					<p><a href="{{URL::to('home-loan')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
		   	<li style="background-image: url(images/slide_1.png);">
		   		  <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   				<img src="images/personal-ic.png" class="center-img-align img-responsive" />
		   					<h2 class="slide-head">Personal Loan</h2>
							<h5>Stay ahead of the curve with the Best in the Market</h5>
		   					<p><a href="{{URL::to('personal-loan')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
		   	<li style="background-image: url(images/slide_1.png);">
		   		   <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   				<img src="images/lap-ic.png" class="center-img-align img-responsive" />
		   					<h2 class="slide-head"> Loan against Property</h2>
							<h5>Stay ahead of the curve with the Best in the Market</h5>
		   					<p><a href="{{URL::to('loan-against-property')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
			<li style="background-image: url(images/slide_1.png);">
		   		    <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   				<img src="images/sme-ic.png" class="center-img-align img-responsive" />
		   					<h2 class="slide-head">SME Loan</h2>
							<h5>Stay ahead of the curve with the Best in the Market</h5>
		   					<p><a href="{{URL::to('sme-loan')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
			<li style="background-image: url(images/slide_1.png);">
		   		    <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   				<img src="images/balance-ic.png" class="center-img-align img-responsive" />
		   					<h2 class="slide-head">Business Loan</h2>
							<h5>Stay ahead of the curve with the Best in the Market</h5>
		   					<p><a href="{{URL::to('business-loan')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
			<li style="background-image: url(images/slide_1.png);">
		   		  <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   				<img src="images/car-ic.png" class="center-img-align img-responsive" />
		   					<h2 class="slide-head">Car Loan</h2>
							<h5>Stay ahead of the curve with the Best in the Market</h5>
		   					<p><a href="{{URL::to('car-loan')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
		  	</ul>
	  	</div>
		
	</aside>
	</div>
	<div id="fh5co-services-section">
		<div class="container-fluid">
			
			<div class="dv-hr">
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="{{URL::to('home-loan')}}">
						<div class="desc">
						<i class="icon-home"></i>
							<h3>Home Loan</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="{{URL::to('personal-loan')}}">
						<div class="desc">
						<i class="icon-user"></i>
							<h3>Personal Loan</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="{{URL::to('loan-against-property')}}">
						<div class="desc">
						<i class="icon-money"></i>
							<h3>Loan against <br>Property</h3>
						
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="{{URL::to('sme-loan')}}">
						<div class="desc">
						<span  ><img style="margin:0 auto;" src="{{URL::to('images/SME_icon.png')}}"></span>
							<h3>SME Loan</h3>
						
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="{{URL::to('business-loan')}}">
						<div class="desc">
						<i class="icon-line-chart"></i>
							<h3>Business <br> Loan </h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="{{URL::to('car-loan')}}">
						<div class="desc">
						<i class="icon-car"></i>
							<h3>Car Loan</h3>
						
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="container-fluid bg-gray">
			
			<div class="animate-box">
                    <div class="col-md-1"></div>
					<div class="col-md-6 animate-box fadeInUp animated">
						<div class="center-img">
							<div><img src="images/Credit-Report.png" class="img-responsive" /></div>
												
						</div>
					</div>
					<div class="col-md-4 left-lin"><img src="images/Report.png" class="img-responsive hidden-sm" /><button class="btn btn-primary btn-outline with-arrow top-mrg">Apply For Credit Report<i class="icon-arrow-right"></i></button></div>
                   <div class="col-md-1"></div>
			</div>
		</div>
	
	<div id="fh5co-pricing-section">
		<div class="container-fluid white-bg">
			<div class="row no-margin">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
				<br>
					<h2>What you get?</h2>
					
				</div>
			</div>
			<div class="row no-margin">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							
							<div class="icon-style"><img src="{{URL::to('images/icon1.png')}}" /></div>
							<h4 class="mrg-btm">Buy With Confidence</h4>
							<p>Our strong relationship with leading Banks means we can give you the confidence you need to make the right choice.</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<div class="icon-style"><img src="{{URL::to('images/icon2.png')}}" /></div>
							<h4 class="mrg-btm">Experts in small stuff</h4>
							<p>Our Experts take care of all the small & big Terms & conditions so that you enjoy what really matters to you.</p>
							
						</div>
					</div>
					
					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<div class="icon-style"><img src="{{URL::to('images/icon3.png')}}" /></div>
							<h4 class="mrg-btm">Beyond the Bucks</h4>
							<p>We don't sell a product, We make Relationship and We are together with you in this journey.</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<div class="icon-style"><img src="{{URL::to('images/icon4.png')}}" /></div>
							<h4 class="mrg-btm">Your way or Highway</h4>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box wht-brd pad">
				<h1 class="h1-hd">Confused About Loans ?</h1>
				<h3>Talk to our experts to have all your question answered</h3>
				<br>
				 <form name="talk_us_form" id="talk_us_form" method="post">
          			{{ csrf_field() }}
		          		<input type="hidden" name="form" value="talk_to_us_form">
		          		
						<div class=" col-sm-offset-1 col-sm-4">
							<fieldset>
								<input class="newsletter-name" name="name" placeholder="Name" required>
							</fieldset>
							</div>
						<div class="col-sm-4">
							<fieldset>
								<input type="text" class="newsletter-name" name="contact" onkeypress="return fnAllowNumeric(event)" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number" >
							</fieldset>									
							</div>
						<div class="col-sm-2 btncent">
								<button class="btn btn-primary btn-outline with-arrow sidebar-submit">Call Me Now<i class="icon-arrow-right"></i></button>
						</div>
				</form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>


			</div>
		</div>
	</div>
	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container-fluid bg-gray">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Who We Are?</h2>
				
				</div>
			</div>
			
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">WHY CHOOSE US?</a></li>
<li><a data-toggle="tab" href="#menu1">HOW DOES IT WORKS ?</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
					
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">10yrs+ Experience</h3>
								<p class="p-clr">Our Trained Experts have the right knowledge & ability to get you the Best Deal.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Dedicated Service</h3>
								<p class="p-clr">We Listen, We Discuss then we Advise the Best solution to fit your R+5`equirements.</p>
                                <br>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Real people, Real care</h3>
								<P class="p-clr">Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.</P>
							</div>
						</div>
					</a>
				</div>
				
			</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
					
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Give your requirements</h3>
								<p class="p-clr">Tell us what you need by answering few simple questions.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">View Best Quotes</h3>
								<p class="p-clr">View, Compare, Discuss the quotes matching your requirements. We can also customise them if you desire.</p>
                                <br>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Fill the form & get the loan</h3>
								<P class="p-clr">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</P>
							</div>
						</div>
					</a>
				</div>
				
			</div>
  </div>
</div>
			
</div>
</div>
	
	<div id="fh5co-blog-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
            
				<div class="col-md-6 col-sm-6 animate-box">
					<span class="item-grid">
						<div class="v-align blu-clr">
							<div class="v-align-middle">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators car-gl">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <h3 class="title">Customers Speak</h3>
							
<p>" I found them professional, straightforward, and since they don’t push you to apply for a specific bank, they are impartial. On a long term basis one needs an intermediary as a one stop shop and these guys seems to be in the business for long term. Their experts follow up on time, give a frank advise, clarify everything so that one does not feel cheated and make a wise decision to save money. </p>
<p class="align-right">Ashish Sharma</p>
    </div>

    <div class="item">
      <h3 class="title">Customers Speak</h3>
							
<p>" I found them professional, straightforward, and since they don’t push you to apply for a specific bank, they are impartial. On a long term basis one needs an intermediary as a one stop shop and these guys seems to be in the business for long term. Their experts follow up on time, give a frank advise, clarify everything so that one does not feel cheated and make a wise decision to save money. </p>
<p class="align-right">Ashish Sharma</p>
    </div>

    <div class="item">
    <h3 class="title">Customers Speak</h3>
							
<p>" I found them professional, straightforward, and since they don’t push you to apply for a specific bank, they are impartial. On a long term basis one needs an intermediary as a one stop shop and these guys seems to be in the business for long term. Their experts follow up on time, give a frank advise, clarify everything so that one does not feel cheated and make a wise decision to save money. </p>
<p class="align-right">Ashish Sharma</p>
    </div>

  </div>
  </div>

							</div>
						</div>
					</span>
				</div>
                
				<div class="col-md-6 col-sm-6 animate-box">
					<span class="item-grid">
						
						<div class="v-align blu-clr1">
							<div class="v-align-middle">
								<h3 class="title">Our Partners</h3>
								<img src="{{URL::to('images/dsd.png')}}" class="img-responsive"/>
							</div>
						</div>
					</span>
				</div>
				
			</div>
		</div>
	</div>
	

	
@include('layout.footer')
@include('layout.script')