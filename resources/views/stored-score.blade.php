@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
    <img src="{{URL::to('images/Experian_logo.png')}}" style="margin:0 auto;"/>
			<div class="row">
      <h2> Your Scredit Score is :: {{$data}}</h2>
  </div>
  </div>
  </div>
  </div>


@include('layout.footer')
@include('layout.script')
