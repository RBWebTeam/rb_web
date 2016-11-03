@include('layout.header')
    <div class="container">
	<aside id="fh5co-hero">
	<div class=""></div>
		<div class="flexslider col-md-8">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		  <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="slide-head">Home Loan aSAsaS</h2>
							<p>Stay ahead of the curve with the Best in the Market</p>
		   					<p><a href="#" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		  <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="slide-head">Personal Loan</h2>
							<p>Stay ahead of the curve with the Best in the Market</p>
		   					<p><a href="{{URL::to('personal_loan')}}" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		   <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
						    <h2>Loan</h2>
		   					<h2 class="slide-head">against Property</h2>
							<p>Stay ahead of the curve with the Best in the Market</p>
		   					<p><a href="#" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
			<li style="background-image: url(images/slide_4.jpg);">
		   		    <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="slide-head">SME Loan</h2>
							<p>Stay ahead of the curve with the Best in the Market</p>
		   					<p><a href="#" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
			<li style="background-image: url(images/slide_3.jpg);">
		   		    <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="slide-head">Home Loan Transfer</h2>
							<p>Stay ahead of the curve with the Best in the Market</p>
		   					<p><a href="#" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
			<li style="background-image: url(images/slide_5.jpg);">
		   		  <br>
		   			<div class="slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="slide-head">Car Loan</h2>
							<p>Stay ahead of the curve with the Best in the Market</p>
		   					<p><a href="#" class="btn btn-primary btn-lg">View More</a></p>
		   				</div>
		   			</div>
		   		
		   	</li>
		  	</ul>
	  	</div>
		<div class="col-md-4 red-bg">
	   <div class="form-in">
             <div class="trapezium1"> 
              <span class="head-1">Compare, Research & Buy<span>
             </div>
             <form class="" id="compareform" role="form" method="POST" action="customer_form.php">
				  <div class="form-group">
				  
				    <div>
				
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required class="clr-ddd" />
                 
				    </div>
				  </div>
			<div class="form-group">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Contact" class="clr-ddd">
		    </div>
		  </div>
				  <div class="form-group">
				   
				    <div class=""> 
				       <select name="sell" class="form-control" id="sell" required>
				       <option value=""><span style="color: gray;font-family: bold; ">City</span></option>
					
					</select>


				    </div>
				  </div>
			  <div class="form-group">
			   
			    <div class=""> 
			      <select class="form-control" name="prod" id="prod" required>
			        <option value=""><span style="color: gray;font-family: bold; ">Loan</span></option>
			        
			      </select>
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
	<div id="fh5co-services-section">
		<div class="container borrd-btm">
			<!-- <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Get Free Quote </h2>
					<p class="mrg-btm">Our strong relationship with leading Banks means we can give you the confidence you need to make the right choice.</p>
				</div>
			</div> -->
			<div class="row dv-hr">
				<div class="col-md-2 animate-box h3-pd-btm">
					<div class="services">
						
						<div class="desc">
						<i class="icon-home"></i>
							<h3>Home Loan</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box h3-pd-btm">
					<div class="services">
						
						<div class="desc">
						<i class="icon-user"></i>
							<h3>Personal Loan</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box h3-pd-btm">
					<div class="services">
						
						<div class="desc">
						<i class="icon-money"></i>
							<h3>Loan against <br>Property</h3>
						
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box h3-pd-btm">
					<div class="services">
						
						<div class="desc">
						<i class="icon-tablet"></i>
							<h3>SME Loan</h3>
						
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box h3-pd-btm">
					<div class="services">
						
						<div class="desc">
						<i class="icon-line-chart"></i>
							<h3>Home <br> Loan Transfer</h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box h3-pd-btm">
					<div class="services">
						
						<div class="desc">
						<i class="icon-car"></i>
							<h3>Car Loan</h3>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-pricing-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>What you get?</h2>
					<p class="mrg-btm">Stay ahead of the curve with the Best in the Market</p>
				</div>
			</div>
			<div class="row">
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
			<div class="col-md-12 text-center animate-box wht-brd">
				<h1 class="h1-hd">Confused About Loans ?</h1>
				<h3>Talk to our experts to have all your question answered</h3>
				<br>
				<form name="subscribe-form" id="subscribe-form1" method="post">
									<div class=" col-sm-offset-1 col-sm-4">
										<fieldset>
											<input class="newsletter-name" name="" placeholder="Name" required>
										</fieldset>
										</div>
									<div class="col-sm-4">
										<fieldset>
											<input type="text" class="newsletter-name" name=""pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div class="col-sm-2 btncent">
											<button class="btn btn-primary btn-outline with-arrow">Call Me Now<i class="icon-arrow-right"></i></button>
									</div>
						</form>
			</div>
		</div>
	</div>
	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>About RupeeBoss</h2>
				
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
			
</div></div>
	
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
	
	<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>Want to save your Hard-earned Money?</h3>
                <p>Subscribe to our monthly newsletter</p>
                <form name="subscribe-form" id="subscribe-form1" method="post">
									<div class=" col-sm-offset-1 col-sm-4">
										<fieldset>
											<input class="newsletter-name" id="" name="" placeholder="Name" required>
										</fieldset>
										</div>
									<div class="col-sm-4">
										<fieldset>
											<input type="text" class="newsletter-name" name="" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div class="col-sm-2 btncent">
									<button class="btn btn-primary btn-outline with-arrow">Call Me Now<i class="icon-arrow-right"></i></button>
		
									</div>
						</form>
				
			</div>
		</div>
	</div>
@include('layout.footer')
@include('layout.script')