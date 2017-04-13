@include('layout.header')
<br>
<div class="container" id="fh5co-hero">

<div class="row white-bg pad1">
		<div class="col-sm-5">
			<img src="{{URL::to('images/contact_img.jpg')}}" alt="Contact Us" title="Contact Us" class="img-responsive">
		</div>
		<div  class="col-sm-6">
			<h2 class="">Have us call you now.</h2>
			<h3>Your contact details:</h3>
			<div class="row">
			<form name="contact_back_now" id="subscribe-form" method="post"> 
                   {{ csrf_field() }}
                <input type="hidden" name="form" value="contact-back-form">
                        
                    <div class="form-group col-sm-12">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="">
                        <input class="newsletter-name" id="name" name="name" placeholder="Name" required />
                    </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="control-label col-sm-2" for="contact">Contact:</label>
                    <div>
                        <input type="tel" class="newsletter-name" name="contact" onkeypress="return fnAllowNumeric(event)" placeholder="Number" minlength="10" maxlength="10" required />
                    </div>
					<br>
					 <button class="btn btn-primary btn-outline with-arrow pull-left sidebar-submit" >Call Me Back<i class="icon-arrow-right"></i></button>
                    </div>
                          
                   
                           

                  
                    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div> 
            </form>
            
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone'><p>Ooops. Something went wrong.</p></div>
           
			</div>

             <span id='err' class='displaynonemsg'>Will reach you soon</span>

		</div>
	</div>

</div>
<br>
@include('layout.footer')
@include('layout.script')

