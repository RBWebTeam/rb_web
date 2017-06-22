@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	
	<h2 class="align-center loan-head">Calculators</h2>
	</div>

	
	

	<div id="fh5co-pricing-section">
		<div class="container">
			
			<div class="row">
				<div class="pricing pad">
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							
							<div class="center-blg"><img src="{{URL::to('images/cal/04.png')}}" alt="emi_calculator_icon" title="EMI Calculator" /></div>
							<h4 class="mrg-btm">EMI Calculator</h4>
							
						
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check-emi')}}">View Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/cal/02.png')}}" alt="personal_loan_calculator_icon" title="Personal Loan Calculator" /></div>
							<h4 class="mrg-btm">Personal Loan Calculator</h4>
						
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check-emi')}}">View Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/cal/03.png')}}" alt="home_loan_calculator_icon" title="Home Loan Calculator" /></div>
							<h4 class="mrg-btm">Home Loan Calculator</h4>
							
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check-emi')}}">View Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/cal/06.png')}}" alt="business_loan_calculator_icon" title="Business Loan Calculator" /></div>
							<h4 class="mrg-btm">Business Loan Calculator</h4>
							
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check-emi')}}">View Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/cal/05.png')}}" alt="working_capital_loan_calculator_icon" title="Working capital calculator" /></div>
							<h4 class="mrg-btm">Working capital calculator</h4>
							
							
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check-emi')}}">View Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					<div class="col-md-4 animate-box">
						<div class="price-box popular1">
							<div class="center-blg"><img src="{{URL::to('images/cal/01.png')}}" alt="income_loan_calculator_icon" title="Income Calculator" /></div>
							<h4 class="mrg-btm">Income Calculator</h4>
							<a class="btn btn-primary btn-outline with-arrow" href="{{URL::to('check-emi')}}">View Now<i class="icon-arrow-right"></i></a>
						</div>
					</div>
					
					

				</div>
			</div>
		</div>
	</div>
	
	</aside>
	</div> 


@include('layout.footer')
@include('layout.script')

