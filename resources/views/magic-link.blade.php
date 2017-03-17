@include('layout.header')
<br>
<div id="fh5co-hero">

<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
	<ul class="mag-lnk">
	    <li><a href="{{URL::to('home-loan-transfer/home-loan')}}">HOME LOAN BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan-transfer/loan-against-property-loan')}}">LOAN AGAINST PROPERTY BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('home-loan-transfer/personal-loan')}}">PERSONAL LOAN BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('working-capital')}}">WORKING CAPITAL BALANCE TRANSFER</a></li>
		<li><a href="{{URL::to('apply-home-loan')}}">APPLY FOR HOME LOAN</a></li>
		<li><a href="{{URL::to('apply-personal-loan')}}">APPLY FOR PERSONAL LOAN</a></li>
		<li><a href="{{URL::to('apply-loan-against-property')}}">APPLY FOR LOAN AGAINST PROPERTY</a></li>
		<li><a href="{{URL::to('apply-car-loan')}}">APPLY FOR CAR LOAN</a></li>
		<li><a href="{{URL::to('apply-business-loan')}}">APPLY UNSECURED BUSINESS LOAN</a></li>
		<li><a href="{{URL::to('credit-card')}}">APPLY FOR CREDIT CARD</a></li>
		
	</ul>
</div>	
	
	
</div><!-- container -->

</div>
<br>
@include('layout.script')

