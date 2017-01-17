@include('layout.header')
<div class="container" id="fh5co-hero">
<div>
<div class="row">
		<div class="col-sm-5">
			<img src="{{URL::to('images/helpbg _new.jpg')}}" class="img-responsive">
		</div>
		<div align="center" class="col-sm-7">
			<h1 class="">Have us call you now.</h1>
			<h2>Your contact details:</h2>
			<div class="row">
			<!-- <form name="contact_back_now" id="subscribe-form" method="post">
                   {{ csrf_field() }}
                <input type="hidden" name="form" value="contact-back-form">
                        
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-4">
                        <input class="newsletter-name" id="name" name="name" placeholder="Name" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contact">Contact:</label>
                    <div class="col-sm-4">
                        <input type="tel" class="newsletter-name" name="contact" onkeypress="return fnAllowNumeric(event)" placeholder="Number" required>
                    </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-8"><br>
                            <button class="btn btn-primary btn-outline with-arrow sidebar-submit" >Call Me Back<i class="icon-arrow-right"></i></button>

                    </div>
                    </div> 
            </form> -->
            <form class="form-inline" name="contact_back_now" id="subscribe-form" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="form" value="contact-back-form">
              <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail2">Email</label>
                <input type="text" class="form-control"  name="contact" onkeypress="return fnAllowNumeric(event)" placeholder="Number" minlength="10" maxlength="10">
              </div>
              <button type="submit" class="btn btn-primary btn-outline with-arrow sidebar-submit">Send invitation<i class="icon-arrow-right"></i></button>
            </form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
           
			</div>
             <span id='err' style="color: red; display: none;">Will reach you soon</span>
		</div>
	</div>
</div>
</div>
@include('layout.footer')
@include('layout.script')

