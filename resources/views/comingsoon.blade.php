@include('layout.header')

	<div class="container-fluid" id="elem" style="background:#cc8682;margin-top:-20px;">
	<br>
	
	<center>
	<h1 class="text-center" style="font-size:60px; color:#fff; padding:10px;font-family: cursive;">COMING SOON</h1>
<img src=" {{URL::to('images/comingsoon.png')}}" class="img-responsive" >

 <div class="error-actions">
 <a href="{{URL::to('/')}}" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-home"></span>
 Take Me Home </a>
 </div><br></center>
</div>

@include('layout.script')
@include('layout.footer')
