<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div class="container-fluid">
	<aside id="fh5co-hero">

		<div class="container-fluid">
		<div id="" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <div class="pull-right mar-tp ">
         <ul>
		    <li><a href="<?php echo e(URL::to('comfy')); ?>"><b>Rupeeboss Comfy</b></a></li>
			<li><a href="<?php echo e(URL::to('express-loan')); ?>"style="background:red;"><b>Express Loan</b></a></li>
			<li><a href="<?php echo e(URL::to('idfc')); ?>">Savings Account</a></li>

			<li><a href="<?php echo e(URL::to('home-loan')); ?>"><b>Pradhan Mantri Awas Yojana</b></a></li>
			<li><a href="<?php echo e(URL::to('contact-us')); ?>"><b>SME Car Leasing</b></a></li>
		 </ul>
</div>

  

    <div class="item active">
	<div class="slide-txt">
	<!-- <i class="sprite sprite-home-ic center-img-align img-responsive hidden-xs"></i> -->
	<img src="<?php echo e(URL::to('../images/home-ic.png')); ?>" class="center-block"> 
	<h2>Home Loan </h2>
   <h4>Choose the right Home Loan for you ...!!</h4>
   <a href="<?php echo e(URL::to('home-loan')); ?>" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="<?php echo e(URL::to('images/slide_1.jpg')); ?>" alt="Home Loan Banner" title="Home Loan " class="slide-hm"> 
    </div>

    <div class="item">
	<div class="slide-txt">
	<!-- <i class="sprite sprite-personal-ic center-img-align img-responsive hidden-xs"></i> -->
	<img src="<?php echo e(URL::to('../images/personal-ic.png')); ?>" class="center-block">
	<h2>Personal Loan </h2>
   <h4>Finance Your Dreams...!!</h4>
   <a href="<?php echo e(URL::to('personal-loan')); ?>" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="<?php echo e(URL::to('images/slide_2.jpg')); ?>" alt="Personal Loan Banner" title="Personal Loan " class="slide-hm">
    </div>

    <div class="item">
	<div class="slide-txt">
	<!-- <i class="sprite sprite-lap-ic center-img-align img-responsive hidden-xs"></i>-->
	<img src="<?php echo e(URL::to('../images/lap-ic.png')); ?>"class="center-block">
	<h2>Loan Against Property</h2>
   <h4>Finding you a better Deal...!!</h4>
   <a href="<?php echo e(URL::to('loan-against-property')); ?>" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="<?php echo e(URL::to('images/slide_3.jpg')); ?>" alt="Loan Against Property " title="Loan Against Property " class="slide-hm">
    </div>

    <div class="item">
	<div class="slide-txt">
	<!--  <i class="sprite sprite-sme-ic center-img-align img-responsive hidden-xs"></i>-->
	<img src="<?php echo e(URL::to('../images/sme-ic.png')); ?>" class="center-block">
	<h2>SME Loan</h2>

   <h4>We Support Make in India..!!</h4>
   <a href="<?php echo e(URL::to('sme-working-capital')); ?>" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="<?php echo e(URL::to('images/slide_4.jpg')); ?>" alt="SME Loan Banner" title="SME Loan " class="slide-hm">
    </div>
	
	
	<div class="item">
	<div class="slide-txt" >
	<!-- <i class="sprite sprite-balance-ic center-img-align img-responsive hidden-xs"></i> -->
	<img src="<?php echo e(URL::to('../images/balance-ic.png')); ?>"class="center-block">
	<h4>Unsecured</h4>
	<h2>Business Loan</h2>
   <h4>Experience on your side...!!</h4>
   <a href="<?php echo e(URL::to('business-loan')); ?>" class="btn btn-primary btn-lg btn-view">View More</a>

   </div>
      <img src="<?php echo e(URL::to('images/slide_5.jpg')); ?>" alt="Business Loan Banner" title="Business Loan " class="slide-hm">
    </div>
	<div class="item">
	<div class="slide-txt">
	<!-- <i class="sprite sprite-car-ic center-img-align img-responsive hidden-xs"></i> -->
	<img src="<?php echo e(URL::to('../images/car-ic.png')); ?>"class="center-block">
	<h2>Car Loan</h2>
   <h4>Thinking of your comfort first !!</h4>
   <a href="<?php echo e(URL::to('car-loan')); ?>" class="btn btn-primary btn-lg btn-view">View More</a>
   </div>
      <img src="<?php echo e(URL::to('images/slide_6.jpg')); ?>" alt="car-slider-img" title="car Loan " class="slide-hm">
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

<div class="container-fluid slider-lnk">
<ul>
<li><h2 class="pad text-center"><a href="<?php echo e(URL::to('comfy-sales')); ?>">Rupeeboss Comfy</a></h2></li>
<li><h2 class="pad text-center"><a href="<?php echo e(URL::to('express-loan')); ?>">Express Loan</a></h2></li>
<li><h2 class="pad text-center"><a href="<?php echo e(URL::to('savings-account')); ?>">Savings Account</a></h2></li>
<li><h2 class="pad text-center"><a href="<?php echo e(URL::to('home-loan')); ?>">Pradhan Mantri Awas Yojana</a></h2></li>
<li><h2 class="pad text-center"><a href="<?php echo e(URL::to('contact-us')); ?>">SME Car Leasing</a></h2></li>
</ul>
</div>
	
	
	</div>
	<div id="fh5co-services-section">
		<div class="container-fluid">
			
			<div class="dv-hr">
				<div class="col-md-2 animate-box no-padding">
					<div class="services">
						<a class="anchor_decoration" href="<?php echo e(URL::to('home-loan')); ?>">
						<div class="desc">
						<i class="icon-home"></i>
							<h3>Home Loan</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services1 services">
						<a class="anchor_decoration" href="<?php echo e(URL::to('personal-loan')); ?>">
						<div class="desc">
						<i class="icon-user"></i>
							<h3>Personal Loan</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services2 services">
						<a class="anchor_decoration" href="<?php echo e(URL::to('loan-against-property')); ?>">
						<div class="desc">
						<i class="icon-money"></i>
							<h3>Loan against <br>Property</h3>
						
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services3 services">
						<a class="anchor_decoration" href="<?php echo e(URL::to('sme-working-capital')); ?>">
						<div class="desc">
						<span  ><i class="sprite sprite-SME_icon marginauto"></i></span>
							<h3>SME Loan</h3>
						
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services4 services">
						<a class="anchor_decoration" href="<?php echo e(URL::to('business-loan')); ?>">
						<div class="desc">
						<i class="icon-line-chart"></i>
							<h3>Business <br> Loan </h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-2 animate-box no-padding">
					<div class="services5 services">
						<a class="anchor_decoration" href="<?php echo e(URL::to('car-loan')); ?>">
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
	
		<div class="container-fluid white-bg credit-report-bg flt-non">
			
			<div class="animate-box">
                    <div class="col-md-1"></div>
					<div class="col-md-6 animate-box fadeInUp animated">
						
					</div>
					<div class="col-md-4 padd">
				
					<img src="images/Report.png" alt="Credit Report" title="Credit Report" class="img-responsive hidden-sm pad crd-rpt">
			
					<a class="tp-margin" href="<?php echo e(URL::to('credit-report-otp')); ?>">Apply For FREE Credit Report</a>
					</div>
					<br>
                   <div class="col-md-1"></div>
			</div>
		</div>
	
	<div id="fh5co-pricing-section">
		<div class="container-fluid bg-gray">
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
							
							<div class="icon-style"><i class="sprite sprite-icon1"></i></div>
							<h4 class="mrg-btm">Buy With Confidence</h4>
							<p>Our strong relationship with leading Banks means we can give you the confidence you need to make the right choice.</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<div class="icon-style"><i class="sprite sprite-icon2"></i></div>
							<h4 class="mrg-btm">Experts in small stuff</h4>
							<p>Our Experts take care of all the small & big Terms & conditions so that you enjoy what really matters to you.</p>
							
						</div>
					</div>
					
					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<div class="icon-style"><i class="sprite sprite-icon3"></i></div>
							<h4 class="mrg-btm">Beyond the Bucks</h4>
							<p>We don't sell a product, We make Relationship and We are together with you in this journey.</p>
							
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<div class="icon-style"><i class="sprite sprite-icon4"></i></div>
							<h4 class="mrg-btm">Your way or Highway</h4>
							<p>We don't push, We give you plenty of options, solution & facts, its your call, your decision. We are only here to help you.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <div class="fh5co-cta backimg" >
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box wht-brd pad">
				<h1 class="h1-hd">Need Expert Assistance ?</h1>
				<h3>Talk to our experts to have all your questions answered</h3>
				<br>
				 <form name="talk_us_form" id="talk_us_form" method="post">
          			<?php echo e(csrf_field()); ?>

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
</div>
	
	<div id="fh5co-blog-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
            
				<div class="col-md-6 col-sm-6 animate-box">
					<div class="item-grid">
						<div class="v-align blu-clr cs-blu-bg">
							<div class="v-align-middle">
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel1" role="listbox">
  <div class="item active">
      <h3 class="title">Customers Speak</h3>
<img src="<?php echo e(URL::to('images/rahil.png')); ?>" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;" />							
<p>I'm thankful of the services I have been offered by your staff.Looking forward for 
more business.I would like to recommend about your services to my family and friends.  
 </p>
<p class="align-right">Rahil Farooqui</p>
    </div>
    <div class="item">
      <h3 class="title">Customers Speak</h3>
	<img src="<?php echo e(URL::to('images/user-icon.png')); ?>" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>				
<p> I found them professional, straightforward, and since they don’t push you to apply for a specific bank, they are impartial. On a long term basis one needs an intermediary as a one stop shop and these guys seems to be in the business for long term. Their experts follow up on time, give a frank advise, clarify everything so that one does not feel cheated and make a wise decision to save money. </p>

<p class="align-right">Ashish Sharma</p>
    </div>

    

    <div class="item">
    <h3 class="title">Customers Speak</h3>
<img src="<?php echo e(URL::to('images/user-icon.png')); ?>" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>							
<p> Thanks a lot for processing my personal loan in time. I would like to give you 
special thanks for the service given by you. Your personal visits to my office 
for all documentation and other queries saved my personal as well as official
time a lot. I appreciate your positive approach towards customer needs and satisfaction.  Special thanks. 
 </p>
<p class="align-right">Milind Bedekar</p>
    </div>

    <div class="item">
    <h3 class="title">Customers Speak</h3>
<img src="<?php echo e(URL::to('images/user-icon.png')); ?>" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>							
<p> Great Work. I appreciate your efforts for disbursement of my loan in time. Your strong followup and deep subject 
knowledge helped me to get loan amount in time. Keep up the good work,expecting the same support from 
you in future.
 
 </p>
<p class="align-right">Satyen Pattarkine</p>
    </div>

    <div class="item">
    <h3 class="title">Customers Speak</h3>
<img src="<?php echo e(URL::to('images/jangam.png')); ?>" alt="Tribe Logo" class="img-responsive user-ico" width="60px;" height="60px;"/>							
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
								<img src="<?php echo e(URL::to('images/dsd.png')); ?>" class="img-responsive" alt=" Ours Partners" title="Ours Partners" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</aside>
	</div>
	

<!-- <div id="popup" class="modal fade">
    <div class="modal-dialog">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            
            <div class="modal-body">
			 <button type="button" class="close close-btn" data-dismiss="modal">×</button>
				<a href="<?php echo e(URL::to('home-loan-transfer/home-loan')); ?>"><img src="<?php echo e(URL::to('images/popup.jpg')); ?>" class="img-responsive"/></a>
                
            </div>
        </div>
    </div>
</div> -->