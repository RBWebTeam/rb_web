
<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RupeeBoss Lifestyle</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
<link rel='stylesheet prefetch' href='css/angular-material.css'>
<link rel='stylesheet prefetch' href='css/docs.css'>
<style class="cp-pen-styles">.inputdemoErrors .inputErrorsApp {
  min-height: 48px; }

.inputdemoErrors md-input-container > p {
  font-size: 0.8em;
  text-align: left;
  width: 100%; }
  
  sub {
    bottom: 0.75em !important;
}

md-input-container.md-default-theme .md-placeholder, md-input-container .md-placeholder, md-input-container.md-default-theme label, md-input-container label {
    color: rgba(0, 0, 0, 0.7);
}

md-input-container.md-default-theme:not(.md-input-focused):not(.md-input-invalid) label.md-required::after, md-input-container:not(.md-input-focused):not(.md-input-invalid) label.md-required::after {
    color: rgba(0, 0, 0, 0.7);
}

md-select.md-default-theme .md-select-value.md-select-placeholder, md-select .md-select-value.md-select-placeholder {
    color: rgba(0, 0, 0, 0.7);
}

</style>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

</head>

<body ng-controller="AppCtrl" layout="column" ng-cloak="" class="inputdemoErrors full loading" ng-app="MyApp">

    <nav class="navbar navbar-inverse  navbar-fixed-top topHeader" role="navigation">
        <!--div class="container"-->
                <div style="float:left;"><a class="navbar-brand" href="#"><img src="images/RupeeBoss-LifeStyle-Logo.png"></a></div>
                <div  style="float:right;" class="call"><font style="font-size:12px;">For Enquiry, Call</font><br>1800-267-629-6</div>
        <!--/div!-->
    </nav>

    <div style="margin-top:90px;">
        <div class="booking disNone">BOOKINGS OPEN<br>SHORTLY</div>
        <div class="col-lg-4">
        <div><img src="images/jeeptext.png"></div>
        <div class="formbox">
            <h2>REGISTER YOUR INTEREST</h2>
            <div>
                <md-content layout-padding="" style="background:none;">
                    <form name="projectForm" action="submit.php" method="POST">

                    <input type="hidden" name="product" value="Jeep Compass" >

                      <div layout="row">
                        <md-input-container flex="50">
                          <label>Name</label>
                          <input required="" name="clientName" ng-model="project.clientName">
                          <div ng-messages="projectForm.clientName.$error">
                            <div ng-message="required">This is required.</div>
                          </div>
                        </md-input-container>

                        <md-input-container flex="50">
                          <label>Email Id</label>
                        <input required="" type="email" name="clientEmail" ng-model="project.clientEmail" minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/">
                         <div ng-messages="projectForm.clientEmail.$error" role="alert">
                          <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
                            Please enter a valid e-mail address.
                          </div>
                        </div>
                      </div>

                      <div layout="row">
                        <md-input-container flex="50" flex-gt-sm>
                          <label>Mobile</label>
                         <input required="" type="tel" name="phone" ng-model="project.phone" ng-pattern="/^[0-9]{10}$/" />
                          <div ng-messages="projectForm.phone.$error" ng-hide="showHints">
                            <div ng-message="pattern">Please enter a valid mobile number.</div>
                          </div>
                        </md-input-container>

                        
						<md-input-container flex="50">
                          <label>Select City</label>
                            <md-select name="SelType" ng-model="project.SelType" required>
                            <md-option value="gurgaon">Gurgaon</md-option>
                            <md-option value="faridabad">Faridabad</md-option>
                            <md-option value="noida">Noida</md-option>
                            <md-option value="greater-noida">Greater Noida</md-option>
                            <md-option value="ghaziabad">Ghaziabad</md-option>
                            <md-option value="newdelhi">New Delhi</md-option>
                            <md-option value="thane">Thane</md-option>
                            <md-option value="mumbai">Mumbai</md-option>
                            <md-option value="navi-mumbai">Navi Mumbai</md-option>
                            <md-option value="other">Other</md-option>
                          </md-select>
                          <div class="errors" ng-messages="projectForm.SelType.$error">
                              <div ng-message="required">Required</div>
                            </div>
                        </md-input-container>
                      </div>
                      <md-input-container class="md-block">
                        <md-checkbox name="tos" ng-model="project.tos" required="">
                          I accept the terms of service.
                        </md-checkbox>
                        <div ng-messages="projectForm.tos.$error" multiple="" md-auto-hide="false">
                          <div ng-message="required">
                            You must accept the terms of service before you can proceed.
                          </div>
                        </div>
                      </md-input-container>
                      <?php
                      if (isset($_GET['true'])) { ?>
                       <p style="color:red">Thank you. We will get back to you soon.</p>
                      <?php }?>
                      <div>
                        <md-button type="submit">Submit</md-button>
                      </div>
                    </form>
                  </md-content>


            </div>
        </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <!--div class="container"-->
        <div style="padding-left:10px;padding-right:10px;">
        <div style="float: left;" class="mainmenu">
            <ul>
                <li class="color">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-AJ"><div style="text-align: center;"><i class="fa fa-info-circle" style="font-size:20px; color:#fff;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">About</div></a>
                </li>

                <li>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-LU"><div style="text-align: center;"><i class="fa fa-map-marker" style="font-size:20px; color:#ffb302;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">Contact</div></a>
                </li>
                <li class="color video-lnk">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-VG"><div style="text-align: center;"><i class="fa fa-play-circle-o" style="font-size:20px; color:#fff;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">Video</div></a>
                    </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-IG"><div style="text-align: center;"><i class="fa fa-picture-o" style="font-size:20px; color:#ffb302;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">Gallery</div></a>
                </li>
                <li class="color">
                    <div class="btn-group dropup btn-group1">
                      <a class="btn btn-secondary dropdown-toggle btn1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div style="text-align: center; color:#fff;"><img src="images/ico-jeep.png"></div>
                        <div style="text-align: center; color:#fff;">Vehicles</div>
                      </a>
                      <div class="dropdown-menu">
                        <ul>
                            <li><a href="grand-cherokee.html" target="_blank">Grand Cherokee</a></li>
                            <li><a href="grand-cherokee-srt.html" target="_blank">Grand Cherokee SRT</a></li>
                            <li><a href="wrangler-unlimited.html" target="_blank">Wrangler Unlimited</a></li>
                        </ul>
                      </div>
                    </div>
                </li>
            </ul>
        </div>
        <div style="float: right; padding-top:10px;" class="disNone">
            <a href="https://twitter.com/JeepIndia" target="_blank" class="btns btn-social-icon btn-twitter">
                <span class="fa fa-twitter"></span>
            </a>
            <a href="https://www.facebook.com/JeepIndia" target="_blank" class="btns btn-social-icon btn-facebook">
                <span class="fa fa-facebook"></span>
            </a>
            <a href="https://www.instagram.com/jeepindia" target="_blank" class="btns btn-social-icon btn-instagram">
                <span class="fa fa-instagram"></span>
            </a>
            <a href="https://www.youtube.com/user/jeepindia" target="_blank" class="btns btn-social-icon btn-youtube">
                <span class="fa fa-youtube"></span>
            </a>
        </div>
        </div>
        <!--/div-->
    </nav>


    <script src='js/angular.js'></script>
    <script src='js/angular-animate.min.js'></script>
    <script src='js/angular-route.min.js'></script>
    <script src='js/angular-aria.min.js'></script>
    <script src='js/angular-messages.min.js'></script>
    <script src='js/svg-assets-cache.js'></script>
    <script src='js/angular-material.js'></script>
<script>
angular.module('MyApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])

.controller('AppCtrl', function($scope) {
  $scope.project = {
    description: 'RupeeBoss Lifestyle',
    rate: 500,
    special: true
  };
});
</script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script>
		// Popup Window
		var scrollTop = '';
		var newHeight = '100';

		$(window).bind('scroll', function() {
		   scrollTop = $( window ).scrollTop();
		   newHeight = scrollTop + 100;
		});

		$('.popup-trigger').click(function(e) {
  		 e.stopPropagation();
		 if(jQuery(window).width() < 767) {
		   $(this).after( $(this).nextAll('.popup:first') );
		   $(this).nextAll('.popup:first').show().addClass('popup-mobile').css('top', 0);
		   $('html, body').animate({
				scrollTop: $(this).nextAll('.popup:first').offset().top
			}, 500);
		 } else {
			 $('.popup').hide();
			 $(this).nextAll('.popup:first').removeClass('popup-mobile').css('top', newHeight).toggle();
		 };
		});

		$('html').click(function() {
		 $('.popup').hide();
		});

		$('.popup-btn-close').click(function(e){
		  $(this).parent().hide();
		});

		$('.popup').click(function(e){
		  e.stopPropagation();
		});
		</script>



        <div class="modal fade bs-example-modal-AJ" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">About Jeep</h4>
              </div>
              <div class="modal-body bkg-about">
                <img src="images/silhouette.png">
                <p>75 YEARS OF HISTORY</p>
                <h1>a lifetime of adventure</h1>
                <h2>a heritage of heroes</h2>
                <p>For 75 years the Jeep<sub>&reg;</sub> brand has been indelibly linked to freedom, adventure, authenticity and passion. The brand's unwavering commitment to strength and meaningful engineering has helped forge an extraordinary, uncommon bond between the vehicles and their owners.</p>
                <p>Our core values are embodied in every Jeep vehicle's DNA. Jeep vehicle owners have long known that Go Anywhere. Do Anything.<sub>&reg;</sub> is a way of life, not just a slogan. The Jeep badge stands for more than a brand. In truth, it's a badge of honor.</p>
                <p>Explore our legendary lineup, then create your own timeless story.</p>
                <h2>2000 - Today</h2>
                <p>The radical 2003 Jeep<sub>&reg;</sub> Wrangler Rubicon was the most capable vehicle ever produced by the Jeep brand. A new four-door Wrangler variant was launched and took the industry by storm. Wrangler Unlimited opened up the world of capability to people who needed the room and utility of four doors. In 2006, Compass and Patriot were the first Jeep vehicles to reach into the small cross-utility segment.</p>
                <p>An All-New redesigned 2011 Grand Cherokee was launched to rave reviews and refreshed in 2013 with many new styling cues and a new 3.0L EcoDiesel engine. The All-New 2014 Cherokee replaced the Liberty, promising to redefine the midsize segment. And in 2015, the Jeep brand entered the small SUV market with the Renegade, once again bringing capability and Jeep brand style to a whole new market.</p>

              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-LU" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
              </div>
              <div class="modal-body">
                <!--h2>New Delhi</h2>
                <p><b>Landmark Lifestyle Cars Pvt Ltd - Showroom</b></p>
                <p>D5, Block No. B1, Mohan Cooperative Industrial Area, <br>Mathura Road, New Delhi - 110044, Delhi
<br><b>Phone No :</b> 9711616307, 011 - 66156615
<br><b>Opening Days :</b> Mon - Sat
<br><b>Opening hours :</b> 09:30 AM - 08:00 PM</p>
                <hr>
                <p><b>Landmark Lifestyle Cars Pvt Ltd - Showroom</b></p>
                <p>Plot No.10A, Shivaji Marg, Motinagar, <br>New Delhi - 110015, Delhi
<br><b>Phone No :</b> 9711612952, <b>Reception :</b> 011 49044900
<br><b>Opening Days :</b> Mon - Sat
<br><b>Opening hours :</b> 09:30 AM - 08:00 PM</p>
               <hr>
<h2>Mumbai</h2>
                <p><b>Landmark Lifestyle Cars Pvt Ltd - Showroom</b></p>
                <p>Ground floor, D wing, Shivsagar Estate, Dr. Annie Besant Road, <br>Worli - 400018, Mumbai, Maharashtra
<br><b>Phone No :</b> 022 - 66752222, 7045877721
<br><b>Opening Days :</b> Mon - Sun
<br><b>Opening hours :</b> 09:30 AM - 08:00 PM</p>
                <hr>
                <p><b>Landmark Lifestyle Cars Pvt Ltd - Showroom</b></p>
                <p>15, Mahableshwar Property, Champion Compound, <br>Parsi Panchayat Off Western Express Highway, <br>Andheri East - 400069, Mumbai, Maharashtra
<b>Phone No :</b> 022 - 49056600, 7045877732
<b>Opening Days :</b> Mon - Sat
<b>Opening hours :</b> 09:30 AM - 06:30 PM</p-->
                <h2>RupeeBoss Financial Services Pvt. Ltd.</h2>
                <p>5C/5D, 1st Floor, The Centrium, Phoenix Marketcity, Kurla West, Mumbai-400070, Maharashtra</p>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-VG" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Driving Your Way | The Jeep Compass. Coming Soon.</h4>
              </div>
              <div class="modal-body">
                <iframe title="YouTube video player" class="youtube-player" type="text/html"
width="100%" height="390" src="http://www.youtube.com/embed/rhfkytrowYU"
frameborder="0" allowFullScreen></iframe>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-IG" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Image Gallery</h4>
              </div>
              <div class="modal-body">
                <!--div class="imgDiv">
                <img src="images/WhatsApp Image 2017-04-17 at 14.45.43.jpeg">
                </div-->

              <section class="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
          	    	    <img src="images/img-01.jpg" />
          	    		</li>
          	    		<li>
          	    	    <img src="images/deep-cherry-red-crystal-pearl.jpg" />
          	    		</li>
                        <li>
          	    	    <img src="images/gallery/2017-Jeep-Compass-official-images-1.jpg" />
          	    		</li>
                        <li>
          	    	    <img src="images/gallery/2017-Jeep-Compass-official-images-2.jpg" />
          	    		</li>
                        <li>
          	    	    <img src="images/gallery/2017-Jeep-Compass-official-images-3.jpg" />
          	    		</li>
                        <li>
          	    	    <img src="images/gallery/2017-Jeep-Compass-Trailhawk-rear-angle-images.jpg" />
          	    		</li>
                        <li>
          	    	    <img src="images/gallery/2017-Jeep-Compass-Trailhawk-side-images.jpg" />
          	    		</li>
                        <li>
          	    	    <img src="images/gallery/2017-Jeep-Compass-Trailhawk-top-side-images.jpg" />
          	    		</li>
                  </ul>
                </div>
              </section>

              </div>
            </div>
          </div>
        </div>
        <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animaion: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
  <script>
$('.video-lnk').click(function(){
  $('.youtube-player').each(function(){
    $(this).stopVideo();
  });
});
</script>

@include('layout.script')
</body>


</html>
