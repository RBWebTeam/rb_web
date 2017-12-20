
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

  md-input-container.md-default-theme .md-placeholder, md-input-container .md-placeholder, md-input-container.md-default-theme label, md-input-container label {
    color: rgba(0, 0, 0, 0.7);
}

md-input-container.md-default-theme:not(.md-input-focused):not(.md-input-invalid) label.md-required::after, md-input-container:not(.md-input-focused):not(.md-input-invalid) label.md-required::after {
    color: rgba(0, 0, 0, 0.7);
}

md-select.md-default-theme .md-select-value.md-select-placeholder, md-select .md-select-value.md-select-placeholder {
    color: rgba(0, 0, 0, 0.7);
}

.md-button.md-default-theme.md-primary, .md-button.md-primary {
    color: rgb(255, 255, 255)!important;

}
md-checkbox.md-default-theme.md-checked .md-icon, md-checkbox.md-checked .md-icon {
    background-color: rgba(255, 0, 0, 0.87);
}

</style>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />



<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-84383331-1', 'auto');
ga('send', 'pageview');

</script>

</head>

<body ng-controller="AppCtrl" layout="column" ng-cloak="" class="inputdemoErrors full loading" ng-app="MyApp">

    <nav class="navbar navbar-inverse  navbar-fixed-top topHeader" role="navigation">
        <!--div class="container"-->
                <div style="float:left;"><a class="navbar-brand" href="#"><img src="images/RupeeBoss-LifeStyle-Logo.png"></a></div>
                <div  style="float:right;">
                    <div style="float: left; padding-top:10px; padding-right:10px;" class="disNone">
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
                <div style="float:right;" class="call"><font style="font-size:12px;">For Enquiry, Call</font><br>1800-267-629-6</div>
                </div>
        <!--/div!-->
    </nav>

    <div style="margin-top:90px;">
        
        <div class="col-lg-4">
        <div><img src="images/jeeptext-booking-open.png"></div>
        <div class="formbox" style="margin-top:5px;">
            <h2>BOOK A TEST DRIVE</h2>
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
                          <input type="tel" name="phone" ng-model="project.phone" ng-pattern="/^[0-9]{10}$/" maxlength="10" minlength="10" />
                          <div ng-messages="projectForm.phone.$error" ng-hide="showHints">
                            <div ng-message="pattern">Please enter a valid mobile number.</div>
                          </div>
                        </md-input-container>

                        <md-input-container flex="50">
                          <label>Select City</label>
                            <md-select name="SelectCity" ng-model="project.SelectCity" required="remote">
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
                          <div class="errors" ng-messages="projectForm.SelectCity.$error">
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
                       <p style="color:#fff; background: rgba(0, 0, 0, 0.5); text-align: center; font-size:12px;padding:5px;">Thank you. We will get back to you soon.</p>
                      <?php }?>
                      <div>
                        <md-button ng-click="save()" class="md-primary" style="color:#fff;">Submit</md-button>
                      </div>
                    </form>
                  </md-content>
            </div>
        </div>
        
<div class="price">
        <div style="float: left; width:70%;">STARTS AT &#8377;14.95 LACS* <br>
            <font style="font-size:14px; color:#a8a8a8; font-weight: normal;">(Ex-Showroom New Delhi)</font></div>
            <div style="float: right;"><md-button data-toggle="modal" data-target=".bs-example-modal-Price">Know More</md-button></div>
            <div style="clear:both;"></div>
        </div>
        </div>
    </div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <!--div class="container"-->
        <div style="padding-left:10px;padding-right:10px;">
        <div class="mainmenu">
            <ul>
                <li class="color">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-AJ"><div style="text-align: center;"><i class="fa fa-info-circle" style="font-size:20px; color:#fff;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">About</div></a>
                </li>

                <li>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-LU"><div style="text-align: center;"><i class="fa fa-map-marker" style="font-size:20px; color:#ffb302;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">Contact</div></a>
                </li>
                <li class="color">
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
                            <li><a href="grand-cherokee.php">Grand Cherokee</a></li>
                            <li><a href="grand-cherokee-srt.php">Grand Cherokee SRT</a></li>
                            <li><a href="wrangler-unlimited.php">Wrangler Unlimited</a></li>
                        </ul>
                      </div>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-NEWS"><div style="text-align: center;"><i class="fa fa-newspaper-o" style="font-size:20px; color:#ffb302;" aria-hidden="true"></i></div>
                    <div style="text-align: center; color:#fff;">News</div></a>
                </li>
            </ul>
        </div>
        <div style="padding:10px;margin-bottom:10px; margin-top:25px;">
        <div style="color:#a5a5a5; text-align: center">&copy; 2017, RupeeBoss.com | <a href="#" data-toggle="modal" data-target=".bs-example-modal-TC" class="alink">Term & Conditions</a></div>
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
  $scope.save = function() {
    if ($scope.projectForm.$valid) {
      $(projectForm)[0].submit();
    } else {
      alert('Form was invalid!');
    }
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

	<div class="modal fade bs-example-modal-Price" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Jeep Compass Prices</h4>
              </div>
              <div class="modal-body">
                <p>Prices (Ex-Showroom, New Delhi)</p>
                <h2 class="cname">Jeep Compass Petrol</h2>
                <div>
                    <table border="0" cellpadding="0" cellspacing="0" class="jeeptable">
                        <tr>
                            <th>Model</th>
                            <th>Prices</th>
                        </tr>
                        <tr>
                            <td>Jeep Compass Sport</td>
                            <td>Rs 14.95 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compass Limited</td>
                            <td>Rs 18.70 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compass Limited (O)</td>
                            <td>Rs 19.40 LACS</td>
                        </tr>
                    </table>
                </div>

                <h2 class="cname">Jeep Compass Diesel</h2>
                <div>
                    <table border="0" cellpadding="0" cellspacing="0" class="jeeptable">
                        <tr>
                            <th>Model</th>
                            <th>Prices</th>
                        </tr>
                        <tr>
                            <td>Jeep Compass Sport</td>
                            <td>Rs 15.45 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compass Longitude</td>
                            <td>Rs 16.45 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compass Longitude (O)</td>
                            <td>Rs 17.25 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compass Limited</td>
                            <td>Rs 18.05 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compass Limited (O)</td>
                            <td>Rs 18.75 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compas Limited <b>4x4</b></td>
                            <td>Rs 19.95 LACS</td>
                        </tr>
                        <tr>
                            <td>Jeep Compas Limited <b>4x4 (O)</b></td>
                            <td>Rs 20.65 LACS</td>
                        </tr>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>

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
                <h2 class="cname">RupeeBoss Financial Services Pvt. Ltd.</h2>
                <p class="cadd">5C/5D, 1st Foor, The Centrium, <br>
                Phoenix Marketcity, Kurla West, <br>
                Mumbai-400070, Maharashtra<br>
                E-mail: <b>customercare@rupeeboss.com</b><br>
                Toll-Free: <b>1800-267-629-6</b></p>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-VG" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">The Jeep Compass</h4>
              </div>
              <div class="modal-body">
		<div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass | Experience | Autocar India</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/1h1EUuOiW68" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass Diesel Review | NDTV CarAndBike</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/r6mB8ePrR2w" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass | First Drive | Motown India</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/oPZdS4lCwDs" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass - Road Test Review</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/dzqitjdp9TU" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass | Exclusive First Drive | Autocar India</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/YcLd5jnAjB4" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass Design, Engine, Tech, Price talk with Kevin Flynn, James Lyijynen and Bill Zheng | MI</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/YAHgAudS4Gk" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>First look of the Jeep Compass in India : PowerDrift</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/_wjBLFp0_os" frameborder="0" allowfullscreen></iframe>
    <hr>

    <div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass | First Look | ZigWheels.com</b></div>
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/j1D4rYBPgjg" frameborder="0" allowfullscreen></iframe>
    <hr>
		<div style="background:#000; color:#fff; padding:10px;"><b>Jeep Compass - First Drive | Autocar what makes this Jeep special</b></div>
		<iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/o46URwhBrS4" frameborder="0" allowfullscreen></iframe>
		<hr>
		<iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/hcHe4qyKwHA" frameborder="0" allowfullscreen></iframe>
		<hr>
                <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/beUGgqQzgoQ" frameborder="0" allowfullscreen></iframe>
                <hr>
                <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="http://www.youtube.com/embed/rhfkytrowYU" frameborder="0" allowFullScreen></iframe>
                <hr>
                <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/3liYPjZlxJc" frameborder="0" allowfullscreen></iframe>
                <hr>
                <iframe title="YouTube video player" class="youtube-player" type="text/html" width="100%" height="390" src="https://www.youtube.com/embed/v7MsrmIxdM4" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-IG" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Jeep Compass Image Gallery</h4>
              </div>
              <div class="modal-body">

              <section class="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="images/img-01.jpg" />
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
                      <img src="images/gallery/2017-Jeep-Compass-Trailhawk-top-side-images.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-01.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-02.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-03.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-04.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-05.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-06.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-07.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-08.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-09.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-10.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-11.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-12.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-13.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-14.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-15.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-16.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-17.jpg" />
                    </li>
                        <li>
                      <img src="images/gallery/jeep-19.jpg" />
                    </li>
                  </ul>
                </div>
              </section>

              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-TC" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Terms and Conditions for Acceptance & Sales Contract for Fiat / Abarth / Jeep Vehicles </h4>
              </div>
              <div class="modal-body">
                <ol class="tc">
                    <li>Definitions
                        <ul>
                            <li>The "Manufacturer" means FCA India Automobile Pvt. Ltd.</li>
                            <li>The "Dealer" means M/s. Landmark Lifestyle Cars Pvt. Ltd.</li>
                            <li>"Order Acceptance Date" means the date of realization of the Demand Draft / Pay Order / Cheque given by the Applicant / Customer with Booking Order Form for Fiat / Abarth / Jeep Vehicle.</li>
                        </ul>
                    </li>

                    <li>Sales Contract
                        <ul>
                            <li>For applicants who are seeking finance through any finance company / bank for the payment of the Fiat / Abarth / Jeep Vehicle the Dealer can co-ordinate communicate and take all instruction directly with such finance company's bank. The Dealer shall not be responsible for any action taken pursuant to the instructions of the finance company.</li>
                            <li>Sales Contract which is incomplete in any respect or which is not properly signed by the applicant is liable to be rejected.</li>
                            <li>Income tax Pan Number is compulsory as per the rules of Govt. of India, for booking and delivery of vehicle.</li>
                            <li>Orders are non-transferable and no change in the Sales Contract will be accepted.</li>
                            <li>Confirmed orders cannot be cancelled. Cancellation of the same will lead to forfeiture of such amounts from the advance paid as specified under clause 4 below.</li>
                            <li>The nominee designated by the applicant in the Sales Contract shall not be a minor in the event of the death of the applicant the Order may be transferred to the nominee of the deceased or to legal representative upon satisfactory evidence being provided.</li>
                            <li>Orders will be accepted by the Dealer based on the number of Fiat / Abarth / Jeep Vehicles likely to be received from the Manufacturer.</li>
                        </ul>
                    </li>

                    <li>Payment
                        <ul>
                            <li>The price taxes, duties, etc payable will be applicable on the basis of the prices ruling on the date and city of delivery.</li>
                            <li>Any advance payment shall be made along with the Sales Contract by the way of a DD/Pay Order/Cheque in Favour of the M/s. Landmark Lifestyle Cars Pvt. Ltd. Payable at Mumbai. Advance payment will be adjusted against price of the Fiat / Abarth / Jeep Vehicle ruling at the time of the delivery.</li>
                            <li>Based on the communication from the Manufacturer, the Dealer shall intimate the status regarding the vehicle allotment and its readiness to the applicant through a written notice or electronic mail. The applicant will be required to make the balance payment within 7 working days from the date of this intimation, failing which the Sales Contract shall be cancelled. Upon cancellation of the Sales Contract the advance paid will be forfeited in accordance with the terms contained under clause 4.</li>
                            <li>State Entry Tax, if any leviable, will be charged extra on the customer.</li>
                            <li>Any applicable increase in the price of Vehicle, Excise Duty, Surcharge, Central and Sales Tax, Transportation charges and or any Governmental levies which comes into force and is communicated to the dealer before / by the date of delivery / dispatch of the vehicle(s) to the customer shall be payable by the customer.</li>
                            <li>All deliveries shall only be made against realization of 100% payment.</li>
                            <li>In the event of the cheque for the advance payments submitted by the customer is rejected by the bank for any reason whatsoever, the Sales Contract stands cancelled and the customer is liable to pay any charges the Dealer may suffer.</li>
                            <li>In the event of customer's cheque for the balance payment is rejected by the bank for any reason whatsoever, the customer can make the payment within 3 working days through a DD only. Further, the customer shall also intimate the Dealer for any damages suffered by the Dealer for the rejection of the customers cheque by the Bank should the customer not be able to make the required payments in 3 working days, the Sales Contract would be deemed to be cancelled and would lead to forfeiture of the advance paid in accordance with the terms contained under Clause 4.</li>
                        </ul>
                    </li>

                    <!--li>Cancellation
                        <ul>
                            <li>In the event of cancellation of the Sales Contract in accordance with the terms contained herein, the following cancellation charges apply. Dealer shall be entitled to deduct the same from the advance paid by the applicant depending upon the model of the vehicle ordered. In case of all Model of Fiat / Abarth Punto, Rs. 50,000/- would be deducted & for all Model of Jeep / Abarth 595, Rs. 5 Lakhs would be deducted. Upon forfeiting of such amounts as mentioned herein above by the Dealer from the advance paid by the customer, the remaining balance amount shall be returned to the customer. </li>
                        </ul>
                    </li-->

                    <li>Interest
                        <ul>
                            <li>The advance payment received towards the vehicle by the Dealer, shall not carry any interest.</li>
                        </ul>
                    </li>

                    <li>Delivery
                        <ul>
                            <li>Dealer stock vehicles will be delivered within 10 working days from the date of realization of 100% payment.</li>
                            <li>Vehicles with FCA India Mumbai Port will be delivered within 15 working days from the date of realization of 100% payment.</li>
                            <li>The applicant shall not be entitled to claim any damages or losses of any kind for delay in the delivery or non delivery of the Fiat / Abarth / Jeep Vehicle due to natural causes, war or civil strike, labour strike or unrest, natural calamities, etc.</li>
                            <li>The specification and price of the FCA Vehicle are subject to change without prior notice and the price ruling at the time of delivery will be applicable.</li>
                            <li>The company will not be responsible for any damage or shortage reported after the delivery and after obtaining the signature of the customer or his/her authorized representative (including transport contractor through whom the vehicle is transported) on the delivery receipt.</li>
                        </ul>
                    </li>

                    <li>General
                        <ul>
                            <li>The Dealer will not be responsible for delay, loss or rejection of the Sales Contract, or for safe custody or transmission of any Demand Draft / Pay Order or any other payment or documents sent to the Dealer by post / courier.</li>
                            <li>Vehicles once sold will not be taken back under any circumstances.</li>
                            <li>The supply against order will be governed by statutory orders, rules and regulations imposed by Central and State Government from time to time.</li>
                            <li>All vehicles carry maker's standard guarantee or normal warranty. No warranty or guarantee other than that given by the makers shall be stipulated as applicable to this purchase.</li>
                            <li>The company shall not permit in relation to any contracts or intended contracts, any act(s) constituting attempts of inducements to favour or bribe any employee of M/s. Landmark Lifestyle Cars Pvt. Ltd. and reserves the right to cancel or refuse to deal with any person(s) attempting to do so. Company encourages the report to any such misconduct immediately to appropriate authorities</li>
                            <li>All legal proceedings in respect of any matter covered under the Sales Contract shall be governed in accordance with the laws of India. The courts situated in Mumbai shall have the jurisdiction to settle the disputes arising under these terms and conditions to the exclusion of any other court.</li>
                        </ul>
                    </li>

                    <li>Customer Data
                        <ul>
                            <li>By signing the Sales contract the customer is informed that his details will be shared with FCA India Automobile Pvt. Ltd. for the purpose of quality management, and the customer accepts this data sharing.</li>
                        </ul>
                    </li>
                </ol>
              </div>
            </div>
          </div>
        </div>

<div class="modal fade bs-example-modal-NEWS" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NEWS</h4>
              </div>
              <div class="modal-body">
                <table border="0" width="100%" cellpadding="0" cellspacing="0" class="tbl-img">
                    <tr>
                        <td colspan="2" style="padding-bottom:10px;">
                             <h2>First Made-in-India Jeep Compass unveiled - Times of India</h2>
                            <p class="source">PTI | Updated: Jun 2, 2017, 11.29 AM IST - timesofindia.indiatimes.com</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="col-sm-6">
                                <video width="100%" height="240" poster="images/news-times.jpg" controls>
                               <source src="images/3206c4f9d8_F40_360p_600.mp4" type="video/mp4">
                            </video>
                            </div>
                            <div class="col-sm-6 hightlight">
                                <h2>Highlights</h2>
                            <ul>
                                <li>The Jeep Compass SUV rolled out of Fiat Chrysler's plant near Pune</li>
                                <li>Fiat has invested US $280 million in the plant to support local production of Jeep</li>
                                <li>The Indian plant is the only one that will roll out right hand drive models</li>
                            </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="ptext">
                            <p><b>PUNE:</b> Automaker Fiat Chrysler's India arm on Thursday rolled out the first locally manufactured Jeep Compass SUV from its Ranjangaon facility in Pune.</p>
                            <p>The vehicle was rolled off the the assembly line in the presence of Maharashtra Chief Minister Devendra Fadnavis, Fiat Chrysler Automobiles (FCA) chief operating officer - Asia Pacific region (excluding China) Paul Alcala, and president & managing director, FCA India, Kevin Flynn, among others.</p>
                            <p>With this, India has joined China, Mexico and Brazil as a manufacturing and export hub for the Jeep Compass.</p>
                            <p>"The establishment of manufacturing operations and start of production of the Jeep Compass is an important milestone for our journey in India," Alcala said.</p>
                            <p>"The Compass will be the first Made-in-India Jeep vehicle, and we are appreciative of the government's efforts to make India a desirable manufacturing destination for multinational organisations like ours," he said.</p>
                            <p>FCA has invested US $280 million in the plant to support local production of Jeep.</p>
                            <p>"With the start of production and an investment of USD 280 million in Jeep Compass localisation, we are reaffirming our commitment to Indian consumers and our long-term presence in the country," Alcala added.</p>
                            <p>The Jeep Compass will be in full production in July and vehicles are expected to hit the market during the third quarter of the year in three variants - Sport, Longitude and Limited, the company said.</p>
                            <p>It said the export of the vehicle will commence in the last quarter of calendar year 2017.</p>
                            <p>By 2017-end, the Jeep brand portfolio in India will consist of three new models - Jeep Wrangler and Jeep Grand Cherokee, besides Jeep Compass, it said.</p>
                            <p>FCA India Automobiles Pvt Ltd is a wholly-owned subsidiary of Italian-American auto maker Fiat Chrysler Automobiles (FCA).</p>
                            <p>The Compass is the first model from the Jeep range to be produced in India.</p>
                            <p>Fiat Chrysler had launched the Jeep brand in India in August last year with its completely built units (CBUs).</p>
                            <p>The Ranjangaon manufacturing facility, a 50:50 joint venture between FCA and Tata Motors, has a capacity to produce 1.6 lakh units and 3.5 lakh engines.</p>
                            <p>The Indian plant is the only one among the four global manufacturing units of FCA that will roll out right hand drive models.</p>
                            <p>In 2014, FCA had announced plans to launch 12 models in India in five years and start producing models from the Jeep brand in the country by 2015. However, it later revised the plan.</p>
                        </td>
                    </tr>
                </table>
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
</body>

</html>
