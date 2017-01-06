@include('layout.header')
<div class="container" id="fh5co-hero">
<div>
<div class="row">
		<div class="col-sm-5">
			<img src="{{URL::to('images/helpbg _new.jpg')}}" class="img-responsive" style="width:100%;height:auto; border:1px solid #ddd;">
		</div>
		<div align="center" class="col-sm-7">
			<h1 class="">Have us call you now.</h1>
			<h2>Your contact details:</h2>
			<div class="row">
			<form name="contact_back_now" id="subscribe-form" method="post">
                   {{ csrf_field() }}
                <input type="hidden" name="form" value="contact-back-form">
                        
                    <div  class=" col-sm-offset-1 col-sm-4">
                        <fieldset>
                            <input  class="newsletter-name" id="name" name="name" placeholder="Name" required>
                        </fieldset>
                        </div>
                    <div class="col-sm-4">
                        <fieldset>
                            <input type="tel" class="newsletter-name" name="contact" onkeypress="return fnAllowNumeric(event)" required placeholder="Number">
                        </fieldset>                                 
                        </div>
                    <div class="col-sm-2 btncent">
                    <button class="btn btn-primary btn-outline with-arrow sidebar-submit" >Call Me Back<i class="icon-arrow-right"></i></button>

                    </div>
            </form>
           
			</div>
             <span id='err' style="color: red; display: none;">Will reach you soon</span>
		</div>
	</div>
</div>
</div>
@include('layout.footer')
@include('layout.script')

