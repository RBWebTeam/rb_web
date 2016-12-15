<div class="fh5co-cta" style="background-image: url(/images/slide_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="col-md-12 text-center animate-box">
                <h3>Want to save your Hard-earned Money?</h3>
                <p>Subscribe to our monthly newsletter</p>
                <form name="subscribe-form" id="subscribe-form" method="post">
                   {{ csrf_field() }}
                <input type="hidden" name="form" value="subscribe-form">
                        
                    <div class=" col-sm-offset-1 col-sm-4">
                        <fieldset>
                            <input class="newsletter-name" id="name" name="name" placeholder="Name" required>
                        </fieldset>
                        </div>
                    <div class="col-sm-4">
                        <fieldset>
                            <input type="email" class="newsletter-name" name="email"  required placeholder="Email Id">
                        </fieldset>                                 
                        </div>
                    <div class="col-sm-2 btncent">
                    <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Subscribe Now<i class="icon-arrow-right"></i></button>

                    </div>
            </form>
            <div class='msg' style="display: none;"><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err' style="display: none;"><p>Ooops. Something went wrong.</p></div>
            </div>
        </div>
    </div>
    <div class="container">
<div class="col-md-12 quotes"><h2>Quotes generated till date :25856</h2></div>
</div>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="col-md-2 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Home Loan</h3>
				<ul class="float">
					<li><a href="{{URL::to('home-loans/icici')}}">ICICI Bank</a></li>
					<li><a href="{{URL::to('home-loans/axis')}}">Axis Bank</a></li>
					<li><a href="{{URL::to('home-loans/sbi')}}">SBI Bank</a></li>
					<li><a href="{{URL::to('home-loans/hdfc')}}">HDFC Bank</a></li>
                    <li><a href="{{URL::to('home-loans/indiabulls')}}">Indiabulls Bank</a></li>
                    <li><a href="{{URL::to('home-loans/citi')}}">Citi Bank</a></li>
                    <li><a href="{{URL::to('home-loans/dhfl')}}">DHFL Bank</a></li>
                    <li><a href="{{URL::to('home-loans/idbi')}}">IDBI Bank</a></li>
                    <li><a href="{{URL::to('home-loans/union')}}">Union Bank</a></li>
                    <li><a href="{{URL::to('home-loans/l&t')}}">L & T Finance</a></li>
                    <li><a href="{{URL::to('home-loans/canara')}}">Canara Bank</a></li>
                    <li><a href="{{URL::to('home-loans/pnb')}}">PNB Housing </a></li>
                    <li><a href="{{URL::to('home-loans/finance')}}">Finance</a></li>
                    <li><a href="{{URL::to('home-loans/reliance')}}">Reliance Capital</a></li>
                    <li><a href="{{URL::to('home-loans/standard')}}">Standard Chartered</a></li> 
				</ul>
			</div>
			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Personal Loan</h3>
				<ul class="float">
					<li><a href="{{URL::to('personal-loans/axis')}}">Axis Bank</a></li>
					<li><a href="{{URL::to('personal-loans/hdfc')}}">HDFC</a></li>
					<li><a href="{{URL::to('personal-loans/bajaj')}}">Bajaj Finance</a></li>
					<li><a href="{{URL::to('personal-loans/shriram')}}">Shriram Finance</a></li>
                    <li><a href="{{URL::to('personal-loans/fulletron')}}">Fullerton India</a></li>
					<li><a href="{{URL::to('personal-loans/icici')}}">ICICI Bank</a></li>
					<li><a href="{{URL::to('personal-loans/kotak')}}">Kotak Mahindra</a></li>
					<li><a href="{{URL::to('personal-loans/reliance')}}">Reliance Capital</a></li>
                    <li><a href="{{URL::to('personal-loans/union')}}">Union Bank</a></li>
                    <li><a href="{{URL::to('personal-loans/l&t')}}">L & T Finance</a></li>
				</ul>

			</div>
            <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>SME Loan</h3>
				<ul class="float">
					<li><a href="{{URL::to('sme-loans/axis')}}">Axis Bank</a></li>
					<li><a href="{{URL::to('sme-loans/hdfc')}}">HDFC</a></li>
					<li><a href="{{URL::to('sme-loans/bajaj')}}">Bajaj Finance</a></li>
					<li><a href="{{URL::to('sme-loans/shriram')}}">Shriram Finance</a></li>
                    <li><a href="{{URL::to('sme-loans/fulletron')}}">Fullerton India</a></li>
					<li><a href="{{URL::to('sme-loans/icici')}}">ICICI Bank</a></li>
					<li><a href="{{URL::to('sme-loans/kotak')}}">Kotak Mahindra</a></li>
                    <li><a href="{{URL::to('sme-loans/reliance')}}">Reliance Capital</a></li>
					<li><a href="{{URL::to('sme-loans/union')}}">Union Bank</a></li>
					<li><a href="{{URL::to('sme-loans/l&t')}}">L & T Finance</a></li>
				</ul>

			</div>
             <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Business Loan</h3>
				<ul class="float">
					<li><a href="{{URL::to('business-loans/dcb')}}">DCB</a></li>
					<li><a href="{{URL::to('business-loans/kotak')}}">Kotak Mahindra </a></li>
					<li><a href="{{URL::to('business-loans/yes')}}">Yes Bank</a></li>
					<li><a href="{{URL::to('business-loans/bajaj')}}">Bajaj Finance</a></li>
                    <li><a href="{{URL::to('business-loans/magma')}}">Magma Finance</a></li>
					<li><a href="{{URL::to('business-loans/icici')}}">ICICI Bank</a></li>
					<li><a href="{{URL::to('business-loans/hdfc')}}">HDFC</a></li>
                    <li><a href="{{URL::to('business-loans/tata')}}">Tata Capital</a></li>
					<li><a href="{{URL::to('business-loans/capital')}}">Capital First</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>Office Address</h3>
            <p><a href="https://goo.gl/iCZ5nl" target="_blank"><i class="icon-map-marker"></i></a>&nbsp;  5C/5D, 1 st ﬂoor,
            The Centrium, 
             Phoenix Marketcity, 
             Kurla West, 
             Mumbai-400070, Maharashtra</p>
				<ul class="fh5co-social">
					<li><a href="#" target="_blank"><i class="icon-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="icon-instagram"></i></a></li>
				</ul>
                <br>
                <p class="mrg-btm1"><b>Appointment Now</b></p>
				
            <p class="mrg-btm"><b>1800-267-629-6</b></p>
			<span class="mrg-btm"><i class="icon-envelope"></i>&nbsp;wecare@rupeeboss.com</span>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>Disclaimer : Please note that the interest rates given here are based on the market research. To enable the comparisons certain set of data has been reorganized / restructured / tabulated .Users are advised to recheck the same with the individual companies / organizations. This site does not take any responsibility for any sudden / uninformed changes in interest rates.</p>
                <p>All Right Reserved © 2016 rupeeboss.com</p>	
                <p><a href="#">Disclaimer</a> | <a href="#">Privacy Policy</a></p>
			</div>
			
		</div>
	</footer>
	</div>
<!--- chat Box Start  -->
<div class="container chat-win">
    <div class="row chat-window col-xs-12 col-md-3" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><i class="icon-minus glyphicon-minus icon_minim"></i></a>
                        <a href="#"><i class="icon-remove glyphicon icon_close glyphicon-minus"></i></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="" class=" img-responsive ">
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="" class=" img-responsive ">
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_sent">
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="" class=" img-responsive ">
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="" class=" img-responsive ">
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10 ">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="" class=" img-responsive ">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
    		</div>
        </div>
    </div>
    
    <div class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-cog"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
            <li class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
        </ul>
    </div>
</div>
<!--- chat Box End  --->
