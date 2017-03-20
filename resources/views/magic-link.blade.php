@include('layout.header')

<div id="fh5co-hero" class="star">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-7">
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
<video id="my-video" class="video" autoplay="autoplay" loop="loop" muted="" width="300" height="150">
  <source src="media/demo.mp4" type="video/mp4" />
  <source src="media/demo.ogv" type="video/ogg" />
  <source src="media/demo.webm" type="video/webm" />
  </video>
@include('layout.footer')

@include('layout.script')


