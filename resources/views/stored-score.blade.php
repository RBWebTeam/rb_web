@include('layout.header')
<div class="fh5co-contact animate-box">
    <div class="container" id="fh5co-hero">
      <div class="row">
                
        <div class="col-md-12">
          <div class="row pad11 white-bg comp-pg">
    <img src="{{URL::to('images/Experian_logo.png')}}" style="margin:0 auto;"/>
			<div class="row">
      <h2> Your credit Score is :: {{$data}}</h2>
      <div class="row">
      {{$html}}
  </div>
  </div>
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  


@include('layout.footer')
@include('layout.script')
