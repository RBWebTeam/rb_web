@include('layout.header')



<body class="">
    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                    <div class="contact-us mb60">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1 class="">Contact us</h1>
                                        <h2>We are here to help you </h2>
                                       
                                    </div>
                                    <!-- /.section title start-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="bg-boxshadow pinside30 outline text-center mb30" style="min-height: 280px;">
                                        <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Branch Office</h2>
                                        <p>5C/5D, 1 st ﬂoor, The Centrium,<br>
                                            Phoenix Marketcity, Kurla West, Mumbai-400070. INDIA</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="bg-boxshadow pinside30 outline text-center mb30" style="min-height: 280px;">
                                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Call us at </h2>
                                        <h1 class="text-big">1800-267-629-6 </h1>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="bg-boxshadow pinside30 outline text-center mb30" style="min-height: 280px;">
                                        <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Email Address</h2>
                                        <p>wecare@rupeeboss.com </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Get In Touch</h1>
                                        <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <form name="contact_back_now" id="subscribe-form" method="post"> 
                                           {{ csrf_field() }}
                                        <input type="hidden" name="form" value="contact-back-form">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <!-- <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required> -->
                                                    <input class="form-control input-md" id="name" name="name" placeholder="Name" required />
                                                </div>
                                            </div>
                                            
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="contact">Phone<span class=" "> </span></label>
                                                    <!-- <input id="phone" name="phone" type="text" placeholder="Phone" class="form-     input-md" required> -->
                                                    <input type="tel" class="form-control input-md" name="contact" onkeypress="return fnAllowNumeric(event)" placeholder="Number" minlength="10" maxlength="10" required />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <!-- <button type="submit" class="btn btn-default sidebar-submit">Submit</button> -->
                                                <a class="btn btn-default sidebar-submit" id="target" >Call Me Back</a>
                                            </div>
                                    
                                        </div>
                                    </form>

                                </div>
                                <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
                                <div class='msg_err displaynone'><p>Ooops. Something went wrong.</p></div>
                            </div>
                            <!-- /.section title start-->
                        </div>
                        
                        <!-- <div class="map" id="googleMap"></div> -->
                        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3770.51082761713!2d72.8894307!3d19.0852334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c87d64ffffff%3A0x52070606740f342d!2sRupeeBoss+financial+Services+Pvt.+ltd!5e0!3m2!1sen!2s!4v1492498308982" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
    
   
    <!-- /.tiny footer -->
    <!-- /.tiny footer -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
    <script>
    function initMap() {
        var myLatLng = {
            lat: 19.086501,
            lng: 72.888839
        };

        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 16,
            center: myLatLng,
            scrollwheel: false,

        });
        var image = 'images/map-pin.png';
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title: 'Rupee Boss'

        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABGHAeZDzC6CYoz7sUn6-gRgo1C18d7cY&amp;callback=initMap" async defer></script>





     <!--<script src="assets/js/vendor/jquery-2.1.3.min.js" type="text/javascript"></script>-->
    <script src="js/iziModal.mind1eb.js?=v2" type="text/javascript"></script>
    <script src="js/javascript.js?v=1" type="text/javascript"></script>
</body>




@include('layout.footer')
@include('layout.script')

