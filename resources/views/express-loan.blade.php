@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	
	<h2 class="align-center loan-head">Express Loan</h2>
	</div>

	<!-- <div class="flexslider col-md-8">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>

  <!-- Wrapper for slides 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{URL::to('images/birla_ban.png')}}" alt="birla_banner">
    </div>

    <div class="item">
      <img src="{{URL::to('images/tribe_bann.png')}}" alt="tribe_banner">
    </div>
  </div>

  <!-- Left and right controls 
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
	  	</div> -->

   <!-- <div class="col-md-4 red-bg1 ">
	   <div class="form-in">
              <span class="head-1 heading-bmar">Request A Call Back</span>
              <form  id="callback_form" role="form" method="POST">
              {{ csrf_field() }}
                <input type="hidden" name="form" value="subscribe-form">
				  <div class="has-error">
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
				       <input type="hidden" class="form-control" id="product" value="Express_Loan" name="product"  />
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
			    <button class="btn btn-primary btn-outline with-arrow sidebar-submit" >Submit</button>
			   
			  </div>
			</form>
		</div>	
		<div class='msg displaynonemsg'><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynonemsg'><p>Ooops. Something went wrong.</p></div>
	</div> -->
	</aside>
	</div> 

	<div id="fh5co-pricing-section">
		<div class="container">
			
			<div class="row">
				<div class="pricing pad">
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							
							<div class="center-blg"><img src="{{URL::to('images/tribe.png')}}" alt="Tribe Logo" title="Tribe Logo" /></div>
							<h4 class="mrg-btm">Tribe</h4>
							
						
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('tribe')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/birla.png')}}" alt="Aditya Birla Group Logo" title="Aditya Birla Group Logo" /></div>
							<h4 class="mrg-btm">Aditya Birla</h4>
						
							<a class="btn btn-primary btn-outline with-arrow" onclick="Redirect();">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/apply-online.png')}}" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">Edelweiss</h4>
							
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('edelweiss')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/iifl.png')}}" width="140" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">IIFL</h4>
							
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('apply-iifl-loan')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/lendingkart.png')}}" width="150" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">LendingKart</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('lendingkart')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/earlysalary.png')}}" width="150" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">Early Salary</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('early-salary')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/yes.png')}}" width="150" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">Yes Bank</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('contact-us')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/idfc.png')}}" width="150" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">IDFC</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('contact-us')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/kotak.png')}}" width="150" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">Kotak Home Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('kotak-home-loan')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/hdfc.png')}}" width="160" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">HDFC</h4>
							
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('contact-us')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/rbl.png')}}"width="160" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">RBL Personal Loan </h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('rbl-personal-loan')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/icici.png')}}"width="160" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">ICICI</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('contact-us')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>

					<!-- <div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/kotak.png')}}"width="160" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">Kotak Home Loan</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('kotak-home-loan')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div> -->

					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/bank/tata-capital.png')}}"width="160" alt="apply_online_pic" /></div>
							<h4 class="mrg-btm">Tata Capital BL</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('tata-capital-business-loan')}}">Apply Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>

					
					

				</div>
			</div>
		</div>
	</div>
<!--  <div id="fh5co-work-section" class="fh5co-light-grey-section">
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
</div> 
</div>
</div>
</div> -->

@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
	function Redirect() 
          {
            
            window.location="http://www.abfldirect.com?utm_source=RUPEEBOSS&utm_medium=DSA&utm_campaign=DirectSME";
            
          }
</script>

