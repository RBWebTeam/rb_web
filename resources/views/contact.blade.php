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
                                    <form class="contact-us" method="post" action="#">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-md-12 col-xs-12">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.section title start-->
                        </div>
                        
                        <div class="map" id="googleMap"></div>
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
    <script type="text/javascript" src="js/menumaker.js"></script>
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




<div id="modal-welcome" class="iziModal"></div>

    


    
    <div id="modal-custom2" class="iziModal" data-iziModal-group="grupo1">


        <button data-iziModal-close class="fa fa-times-circle"></button>


      




         <header>
            <a href="#" id="signin">Log In</a>
            <a href="#" class="active">Register</a>
        </header>


        <section class="hide">

             <a type="button" style="background-color: #3D5A98; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://facebook.com" target="_blank" class="ui-link"><strong>With Facebook</strong></a>

             <a type="button" style="background-color: #ed1c24; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://gmail.com" target="_blank" class="ui-link"><strong>With Google Plus</strong></a>
            <br /><br />
            <h4>OR</h4>
            

            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <p style="text-align:right"><a href="forgot-password.html">Forgot Password ?</a></p>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <button type="login" class="btn btn-default btn-sm " style="width: 100%;">Log In</button>     
                
                       
            </div>

           
        </section>


        <section>

             <a type="button" style="background-color: #3D5A98; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://facebook.com" target="_blank" class="ui-link"><strong>With Facebook</strong></a>

             <a type="button" style="background-color: #ed1c24; color: #fff;  padding: 14px 20px; margin-bottom:50px; border: none; cursor: pointer; text-align:center; width: 30%;" href="http://gmail.com" target="_blank" class="ui-link"><strong>With Google Plus</strong></a>
            <br /><br />
            <h4>OR</h4>
            

            <!--<button class="thm-btn"><i class="fa fa-facebook"></i> Sign up with Facebook</button>    -->

            <input type="text" placeholder="User Name">
            <input type="text" placeholder="Email Address">
            <input type="mobile" placeholder="Mobile Number">
            <input type="password" placeholder="Password">
            <input type="confirm-password" placeholder="Confirm Password">
            
           <div class="col-md-4 col-sm-4 col-xs-12">
                    
                 <button type="register" class="btn btn-default btn-sm " style="width: 100%;">Register</button>
                    
            </div>

           
        </section>



        <br /><br />
    </div>
    

     <!--<script src="assets/js/vendor/jquery-2.1.3.min.js" type="text/javascript"></script>-->
    <script src="js/iziModal.mind1eb.js?=v2" type="text/javascript"></script>
    <script src="js/javascript.js?v=1" type="text/javascript"></script>
</body>




@include('layout.footer')
