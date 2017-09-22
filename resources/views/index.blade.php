@include('layout.header')


    <div class="container-fluid">
	<aside id="fh5co-hero">

		<div class="container-fluid">
		
<div id="myCarousel" class="carousel slide carousel-fade"  data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!--<li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>-->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
<!--  <div class="pull-right mar-tp ">
         <ul>
		    <li><a href="{{URL::to('comfy')}}"><b>Rupeeboss Comfy</b></a></li>
			<li><a href="{{URL::to('express-loan')}}"style="background:red;"><b>Express Loan</b></a></li>
			<li><a href="{{URL::to('idfc')}}">Savings Account</a></li>

			<li><a href="{{URL::to('home-loan')}}"><b>Pradhan Mantri Awas Yojana</b></a></li>
			<!-- <li><a href="{{URL::to('contact-us')}}"><b>SME Car Leasing</b></a></li> 
		 </ul>
</div> -->


    <div class="item active animate-box fadeInDown animated">
	<div class="slide-txt">

	<!--<img src="{{URL::to('../images/home-ic.png')}}" class="center-block"> --->
	<h2>Home Loan </h2>
   <h4>Choose the right Home Loan for you ...!!</h4>
   <br>
   
   <a href="{{URL::to('home-loan')}}"><button class="btn btn-primary btn-outline sidebar-submit btn-more">VIEW MORE</button></a>
   
   </div>
        <img src="{{URL::to('images/slide_2.jpg')}}" alt="Personal Loan Banner" title="Personal Loan " class="slide-hm">
    </div>

    <div class="item">
	<div class="slide-txt">

	<!-- <img src="{{URL::to('../images/personal-ic.png')}}" class="center-block"> -->
	<h2>Personal Loan </h2>
   <h4>Finance Your Dreams...!!</h4>
   <br>
   <a href="{{URL::to('personal-loan')}}"><button class="btn btn-primary btn-outline sidebar-submit btn-more">VIEW MORE</button></a>
   </div>
    
	  <img src="{{URL::to('images/slide_1.jpg')}}" alt="Home Loan Banner" title="Home Loan " class="slide-hm"> 
    </div>

   <!-- <div class="item">
	<div class="slide-txt">
	
	<img src="{{URL::to('../images/lap-ic.png')}}"class="center-block">
	<h2>Loan Against Property</h2>
   <h4>Finding you a better Deal...!!</h4>
   <a href="{{URL::to('loan-against-property')}}" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="{{URL::to('images/slide_3.jpg')}}" alt="Loan Against Property " title="Loan Against Property " class="slide-hm">
    </div>

    <div class="item">
	<div class="slide-txt">
	
	<img src="{{URL::to('../images/sme-ic.png')}}" class="center-block">
	<h2>SME Loan</h2>

   <h4>We Support Make in India..!!</h4>
   <a href="{{URL::to('sme-working-capital')}}" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="{{URL::to('images/slide_4.jpg')}}" alt="SME Loan Banner" title="SME Loan " class="slide-hm">
    </div>
	
	
	<div class="item">
	<div class="slide-txt" >

	<img src="{{URL::to('../images/balance-ic.png')}}"class="center-block">
	<h4>Unsecured</h4>
	<h2>Business Loan</h2>
   <h4>Experience on your side...!!</h4>
   <a href="{{URL::to('business-loan')}}" class="btn btn-primary btn-lg btn-view">View More</a>

   </div>
      <img src="{{URL::to('images/slide_5.jpg')}}" alt="Business Loan Banner" title="Business Loan " class="slide-hm">
    </div>
	<div class="item">
	<div class="slide-txt">
	
	<img src="{{URL::to('../images/car-ic.png')}}"class="center-block">
	<h2>Car Loan</h2>
   <h4>Thinking of your comfort first !!</h4>
   <a href="{{URL::to('car-loan')}}" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="{{URL::to('images/slide_6.jpg')}}" alt="car-slider-img" title="car Loan " class="slide-hm">
    </div>
  </div> -->

  <!-- Left and right controls 
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="icon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="icon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>

</div>

<div class="container-fluid slider-lnk">
<ul>
<li><h2 class="pad text-center"><a href="{{URL::to('comfy-sales')}}">Rupeeboss Comfy</a></h2></li>
<li><h2 class="pad text-center"><a href="{{URL::to('express-loan')}}">Express Loan</a></h2></li>
<li><h2 class="pad text-center"><a href="{{URL::to('savings-account')}}">Savings Account</a></h2></li>
<li><h2 class="pad text-center"><a href="{{URL::to('home-loan')}}">Pradhan Mantri Awas Yojana</a></h2></li>
<li><h2 class="pad text-center"><a href="{{URL::to('contact-us')}}">SME Car Leasing</a></h2></li>
</ul>
</div>
	
	
	
	<div class="col-md-6 hom-rig animate-box fadeInUp animated" style="position: absolute;z-index: 1;top:135px;">
	<div class="profile-smdl">
				<div class="profile-text-left">
					
					 <img src="{{URL::to('images/loan-icons/home-loan.png')}}" /> 
					<p>HOME LOAN</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/personal-loan.png')}}" />
					<p>PERSONAL LOAN</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/lap.png')}}"/>
					<p>Loan against Property</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/sme.png')}}" />
					<p>SME Loan</p>
				</div>
				
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/business.png')}}" />
					<p>Business Loan</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/car.png')}}" />
					<p>Car Loan</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/working-capital.png')}}" />
					<p>Working Capital</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/car.png')}}" />
					<p>Used Car Loan</p>
				</div>
				<div class="profile-text-left red-bg1">
					<img src="{{URL::to('images/loan-icons/express-loan.png')}}" />
					<p>Express Loan</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/credit-card.png')}}" />
					<p>Credit Cards</p>
				</div>
				
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/emi-cal.png')}}" />
					<p>EMI Calculators</p>
				</div>
				
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/balance-transfer.png')}}" />
					<p>Balance Transfer</p>
				</div>
				
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/credit-report.png')}}"  />
					<p>Free Credit Report</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/elite.png')}}" />
					<p>Elite</p>
				</div>
				<div class="profile-text-left">
					<img src="{{URL::to('images/loan-icons/rb-lifestyle.png')}}" />
					<p>RB Life Style</p>
				</div>
				
				
				<div class="clear"> </div>
			</div>
	
	</div>
	
	</div>
	<!--<div id="fh5co-services-section">
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
					<div class="services1 services">
						<a class="anchor_decoration" href="{{URL::to('personal-loan')}}">
						<div class="desc">
						<i class="icon-user"></i>
							<h3>Personal Loan</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services2 services">
						<a class="anchor_decoration" href="{{URL::to('loan-against-property')}}">
						<div class="desc">
						<i class="icon-money"></i>
							<h3>Loan against <br>Property</h3>
						
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services3 services">
						<a class="anchor_decoration" href="{{URL::to('sme-working-capital')}}">
						<div class="desc">
						<span  ><i class="sprite sprite-SME_icon marginauto"></i></span>
							<h3>SME Loan</h3>
						
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services4 services">
						<a class="anchor_decoration" href="{{URL::to('business-loan')}}">
						<div class="desc">
						<i class="icon-line-chart"></i>
							<h3>Business <br> Loan </h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services5 services">
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
	</div> -->
	
		<div class="container pad flt-non">
			
			<div class="animate-box pad1">
                  
					<div class="col-md-8 animate-box fadeInUp animated mrg-btm">
					<br>
					<h1 class="text-left"><b class="text-danger">Free Credit Report</b></h1>
						<p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<p class="text-left"> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
						
						
						<button class="btn btn-primary btn-outline with-arrow sidebar-submit pull-left">Apply Now<i class="icon-arrow-right"></i></button>
						
					</div>
					<div class="col-md-4 padd">
				
					<!-- <img src="images/Report.png" alt="Credit Report" title="Credit Report" class="img-responsive hidden-sm pad crd-rpt"> 
			
					<a class="tp-margin" href="{{URL::to('credit-report-otp')}}">Apply For FREE Credit Report</a>-->
					<img src="{{URL::to('images/credit-report.png')}}" width="350" class="img-circle img-thumbnail hidden-xs"/>
					</div>
					
					<br>
                   <div class="col-md-1"></div>
				   
			</div>
		</div>
	
	<div id="fh5co-pricing-section">
		<div class="container-fluid bg-gray no-padding">
			
			<div class="row no-margin">
				<div class="pricing">
					<div class="width-20 animate-box no-padding col-xs-6">
						<div class="img-box popular">
							
							<!-- <div class="icon-style"><i class="sprite sprite-icon1"></i></div>-->
							<div class="txt-con">
							<h4 class="mrg-btm">Buy With Confidence</h4>
							<p>Our strong relationship with leading Banks means we can give you the confidence you need to make the right choice.</p>
							</div>
						</div>
					</div>
 
					<div class="width-20 animate-box no-padding col-xs-6">
						<div class="img-box2 popular">
							<!-- <div class="icon-style"><i class="sprite sprite-icon2"></i></div>  -->
							<div class="txt-con">
							<h4 class="mrg-btm">Experts in small stuff</h4>
							<p>Our Experts take care of all the small & big Terms & conditions so that you enjoy what really matters to you.</p>
							</div>
						</div>
					</div>
					
					<div class="width-20 animate-box no-padding col-xs-6">
						<div class="img-box3 popular">
							<!-- <div class="icon-style"><i class="sprite sprite-icon3"></i></div> -->
							<div class="txt-con">
							<h4 class="mrg-btm">Beyond the Bucks</h4>
							<p>We don't sell a product, We make Relationship and We are together with you in this journey.</p>
							</div>
						</div>
					</div>

					<div class="width-20 animate-box no-padding col-xs-6">
						<div class="img-box4 popular">
							<!-- <div class="icon-style"><i class="sprite sprite-icon4"></i></div> -->
							<div class="txt-con">
							<h4 class="mrg-btm">Your way or Highway</h4>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					<div class="width-20 animate-box no-padding col-xs-6">
						<div class="img-box5 popular">
							<!-- <div class="icon-style"><i class="sprite sprite-icon4"></i></div> -->
							<div class="txt-con">
							<h4 class="mrg-btm">Your way or Highway</h4>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="container no-padding">
			<div class="row no-margin">
			  <div class="col-md-3 animate-box fadeInUp animated">
			    <div class="quick-esy padd-80">
				<p class="text-left">Our Feature</p>
				<h1 class="text-left">Quick Easy Flexible</h1>
				</div>
			  </div>
			  <div class="col-md-9 padd-80 white-bg animate-box fadeInUp animated over-lap box-shadow">
			   <div class="col-md-4 animate-box hov-brd">
						<div>
							 <div class="icon-style"><img src="{{URL::to('images/ico/01.png')}}" /></div>
							<div>
						  <h5 class="head-5">Lower Rate</h5>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					 <div class="col-md-4 animate-box hov-brd">
						<div>
							 <div class="icon-style"><img src="{{URL::to('images/ico/02.png')}}" /></div>
							<div>
						     <h5 class="head-5">Quick And Easy</h5>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					 <div class="col-md-4 animate-box hov-brd">
						<div>
							 <div class="icon-style"><img src="{{URL::to('images/ico/03.png')}}" /></div>
							<div>
							<h5 class="head-5">No Payment Penalty</h5>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="col-md-4 animate-box hov-brd">
						<div>
							 <div class="icon-style"><img src="{{URL::to('images/ico/04.png')}}" /></div>
							<div>
						     <h5 class="head-5">Secure Process</h5>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					 <div class="col-md-4 animate-box hov-brd">
						<div>
							 <div class="icon-style"><img src="{{URL::to('images/ico/05.png')}}" /></div>
							<div>
						     <h5 class="head-5">5-Minute Application</h5>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					</div>
					 <div class="col-md-4 animate-box hov-brd">
						<div>
							 <div class="icon-style"><img src="{{URL::to('images/ico/06.png')}}" /></div>
							<div>
							<h5 class="head-5">Only 3% Interest</h5>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							</div>
						</div>
					
					
					

					</div>
			  </div>
			</div>
		</div>
		<br>
		<div class="container-fluid no-padding white-bg padd-up-down">
		    <div class="container pad">
			<div class="row no-margin">
			<div class="col-md-6">
			<h1><b>How Much</b> Do You Need?</h1>
			<br>
			<h3>Amount
			<input type="range" class="col-md-6 mrg-btm" min="1" max="7" steps="1"/>
			
			</h3>
			<h3>Tenure
			<input type="range" class="col-md-6"/>
			</h3>
			<br>
			<button class="btn btn-primary btn-outline with-arrow sidebar-submit pull-left">SUBMIT<i class="icon-arrow-right"></i></button>
			
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 black-bg">
			<br>
			<p class="text-center">Loan Amount
			<h1>₹ 5,00,000</h1>
			</p>
			<hr>
			<div class="col-md-6">
			<p class="text-center">Loan EMI
			<h2>₹ 10,000</h2>
			</p>
			</div>
			<div class="col-md-6">
			<p class="text-center">Total Payable Interest
			<h2>₹ 632012</h2>
			</p>
			</div>
			</div>
			</div>
			</div>
			</div>
		
		
		<div class="container-fluid">
		<div class="container pad flt-non">
			<hr>
			<div class="animate-box ">
                    
					<div class="col-md-4 padd">
					   <img src="images/about.jpg"  class="pull-left"/>
					</div>
					<div class="col-md-7 animate-box fadeInUp animated">
					<h1 class="text-left"><b class="text-danger">Who We Are</b></h1>
					<h3 class="text-left">About Rupeeboss.com</h3>
						
<p class="text-left">At RupeeBoss.com, we are guided by the philosophy – When You Need a Loan, You’re not Alone! This guiding principle is a reflection of our commitment towards ensuring the most hassle-free experience in procuring a loan, be it for personal needs, or that of your business.</p>

<p class="text-left"> RupeeBoss.com aspires to be India’s preferred destination for the widest range of loan products including retail, SME and Credit Card products. We will offer best terms for Person Loan, Home Loan, Car Loan to Working Capital, SME Loan, Business Loan, and more. Our product advisors leave no stone unturned to ensure that your loan requirement is not just well studied, it’s also taken up with utmost sincerity to ensure you get the best of breed options to choose from.</p>

<!-- <p class="text-left">Our extensive relationships with all major national, PSU, Private and NBFC service providers, coupled with the cutting edge technology ensure that upon specifying your requirement, you get the most competitive options that are tailor made to suit your needs, and all of this done at a few clicks.</p>

<p class="text-left">At RupeeBoss.com, we are committed in ensuring the best experience in terms of customer service and satisfaction, and hence all our customer reps are cherry picked and our escalation matrix goes right up to our CEO. So let’s get started together and get you the loan / credit card that you deserve.</p> -->
						
						
						<button class="btn btn-primary btn-outline with-arrow sidebar-submit pull-left">VIEW MORE<i class="icon-arrow-right"></i></button>
						
					</div>
					
					
					<br>
                   <div class="col-md-1"></div>
				   
			</div>
		</div>
		</div>
 <!-- <div class="fh5co-cta backimg" >
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box wht-brd pad">
				<h1 class="h1-hd">Need Expert Assistance ?</h1>
				<h3>Talk to our experts to have all your questions answered</h3>
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
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>


			</div>
		</div>
	</div>  -->
	<!---  <div id="fh5co-work-section" class="fh5co-light-grey-section">
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
					<span class="item-grid text-center">
					
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">10yrs+ Experience</h3>
								<p class="p-clr">Our Trained Experts have the right knowledge & ability to get you the Best Deal.</p>
							</div>
						</div>
					</span>
				</div>
				<div class="col-md-4 animate-box">
					<span class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Dedicated Service</h3>
								<p class="p-clr">We Listen, We Discuss then we Advise the Best solution to fit your Requirements.</p>
                                <br>
							</div>
						</div>
					</span>
				</div>
				<div class="col-md-4 animate-box">
					<span class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Real People, Real Care</h3>
								<P class="p-clr">Our Experts know the pain of getting a Loan. They put your Interest First & work to achieve it.</P>
							</div>
						</div>
					</span>
				</div>
				
			</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="row">
				<div class="col-md-4 animate-box">
					<span class="item-grid text-center">
					
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Give your requirements</h3>
								<p class="p-clr">Tell us what you need by answering few simple questions.</p>
							</div>
						</div>
					</span>
				</div>
				<div class="col-md-4 animate-box">
					<span class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">View Best Quotes</h3>
								<p class="p-clr">View, Compare, Discuss the quotes matching your requirements. We can also customise them if you desire.</p>
                                <br>
							</div>
						</div>
					</span>
				</div>
				<div class="col-md-4 animate-box">
					<span class="item-grid text-center">
						
						<div class="v-align md-higt">
							<div class="v-align-middle">
								<h3 class="title">Fill the form & get the loan</h3>
								<P class="p-clr">Applying is as simple as reading this. The process will be completed before your coffee gets cold!</P>
							</div>
						</div>
					</span>
				</div>
				
			</div>
  </div>
</div>
			
</div>
</div>  --->
	
	<!-- <div id="fh5co-blog-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
            
				<div class="col-md-6 col-sm-6 animate-box">
					<div class="item-grid">
						<div class="v-align blu-clr cs-blu-bg">
							<div class="v-align-middle">
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
 
  <!-- Wrapper for slides 
  <div class="carousel-inner carousel1" role="listbox">
  <div class="item active">
      <h3 class="title">Customers Speak</h3>
<img src="{{URL::to('images/rahil.png')}}" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;" />							
<p>I'm thankful of the services I have been offered by your staff.Looking forward for 
more business.I would like to recommend about your services to my family and friends.  
 </p>
<p class="align-right">Rahil Farooqui</p>
    </div>
    <div class="item">
      <h3 class="title">Customers Speak</h3>
	<img src="{{URL::to('images/user-icon.png')}}" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>				
<p> I found them professional, straightforward, and since they don’t push you to apply for a specific bank, they are impartial. On a long term basis one needs an intermediary as a one stop shop and these guys seems to be in the business for long term. Their experts follow up on time, give a frank advise, clarify everything so that one does not feel cheated and make a wise decision to save money. </p>

<p class="align-right">Ashish Sharma</p>
    </div>

    

    <div class="item">
    <h3 class="title">Customers Speak</h3>
<img src="{{URL::to('images/user-icon.png')}}" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>							
<p> Thanks a lot for processing my personal loan in time. I would like to give you 
special thanks for the service given by you. Your personal visits to my office 
for all documentation and other queries saved my personal as well as official
time a lot. I appreciate your positive approach towards customer needs and satisfaction.  Special thanks. 
 </p>
<p class="align-right">Milind Bedekar</p>
    </div>

    <div class="item">
    <h3 class="title">Customers Speak</h3>
<img src="{{URL::to('images/user-icon.png')}}" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>							
<p> Great Work. I appreciate your efforts for disbursement of my loan in time. Your strong followup and deep subject 
knowledge helped me to get loan amount in time. Keep up the good work,expecting the same support from 
you in future.
 
 </p>
<p class="align-right">Satyen Pattarkine</p>
    </div>

    <div class="item">
    <h3 class="title">Customers Speak</h3>
<img src="{{URL::to('images/jangam.png')}}" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>							
<p> I would like to thank the team for the outstanding service provided in disbursing my loan. It was a smooth process. Thank You. Keep the good work going .
 
 </p>
<p class="align-right">Joel Jangam</p>
    </div>

  </div>
  </div>
  

							</div>
						</div>
					</div>
				</div>
                
				<div class="col-md-6 col-sm-6 animate-box">
					<div class="item-grid">
						
						<div class="v-align blu-clr1">
							<div class="v-align-middle">
								<h3 class="title">Our Partners</h3>
								<img src="{{URL::to('images/dsd.png')}}" class="img-responsive" alt=" Ours Partners" title="Ours Partners" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		</aside>
		</div> -->
		@include('layout.script')
        @include('layout.footer')
		
	
	

<!-- <div id="popup" class="modal fade">
    <div class="modal-dialog">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            
            <div class="modal-body">
			 <button type="button" class="close close-btn" data-dismiss="modal">×</button>
				<a href="{{URL::to('home-loan-transfer/home-loan')}}"><img src="{{URL::to('images/popup.jpg')}}" class="img-responsive"/></a>
                
            </div>
        </div>
    </div>
</div> -->
