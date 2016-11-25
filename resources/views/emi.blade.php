@include('layout.header')
	<div id="fh5co-hero">
	<div class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
				<p class="text-left"><a href="{{URL::to('/')}}">Home</a>/EMI</p>
					<h2>EMI</h2>
					
</div>
				
				
				<div class="col-md-12 white-bg">
					<div class="row text-left comp-pg rate">
					
					  <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Loan Against Property EMI calculator</a></li>
                      <li><a data-toggle="tab" href="#menu1">Loan Against Property eligibility</a></li>
                     
                      </ul>

                      <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                     <div>
					 <!-- EMI Calculator Widget START --><script src="{{URL::to('js/emicalc-loader.min.js')}}" type="text/javascript"></script><div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
					 <div id="ecww-widget-iframeinner"></div>
					 <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;"></div>
					 <div id="ecww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;"></div></div>
					 <!-- EMI Calculator Widget END -->
					 <br>
					 <div class="pad pull-center">
					 <a href="#" class="btn btn-primary btn-outline with-arrow">Get Quotes<i class="icon-arrow-right"></i></a>
					<a href="#" class="btn btn-primary btn-outline with-arrow">Apply<i class="icon-arrow-right"></i></a>
					</div>
					 </div>
                      </div>
                      <div id="menu1" class="tab-pane fade">

                      <p>Loan Against Property Content</p>
                      </div>
                      
                      </div>
					  
					</div>
					
				</div>
				
			</div>
		</div>	
	</div>

	
	</div>

@include('layout.footer')
@include('layout.script')

