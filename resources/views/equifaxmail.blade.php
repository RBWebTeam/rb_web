@include('layout.header')
<style type="text/css">
	.thank-u {margin-bottom:20px;}
.thank-u .center-img {margin:0 auto; display:block;}
.thank-txt {padding:10px; color:#666666; font-size:65px; display:block;}
.h4-txt {color:#666;}
.downld-btn {margin:0 auto; display:block; background:#0767b3;padding:10px 20px;; color:#fff;margin-top:20px; margin-bottom:20px;border-radius:40px;-moz-border-radius:40px;-webkit-border-radius:40px;}
.thank-sig {margin-top:20px;}


</style>
<div id="fh5co-hero">

<div class="container">


	<div class="col-md-12"> 
		@if($error)
			 <div class="white-bg box-shadow pad thank-u">
			     <img src="{{url('images/thank-you-sign.png')}}" width="80" height="80" class="img-responsive center-img thank-sig"/>

				 <h1 class="thank-txt text-center">Ooops!</h1>
				 
				 <br><br>
				 <h4 class="text-center h4-txt">Soory We are unable to get your Credit report</h4>
				 <a href="{{URL::to('/')}}" class="downld-btn" style="width: 200px;">Go Home</a>
			
			 </div>
			 @else
			 <div class="white-bg box-shadow pad thank-u">
			     <img src="{{url('images/thank-you-sign.png')}}" width="80" height="80" class="img-responsive center-img thank-sig"/>

				 <h1 class="thank-txt text-center">Thank You!</h1>
				 
				 <br><br>
				 <h4 class="text-center h4-txt">Click on Below Button For Download Credit Report</h4>
				 
			<a download="{{$NAME}}" href="{{URL::to('Equifax/PDF')}}/{{$NAME}}" class="downld-btn" style="width: 200px;">Download Credit Report</a>
			 </div>
			 @endif
			</div>

 
</div>

</div>

@include('layout.footer')
@include('layout.script')



 







 






