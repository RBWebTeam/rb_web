
    <script src="{{URL::to('js/modernizr-2.6.2.min.js')}}"></script>
        <!-- jQuery -->
        
    <script src="{{URL::to('js/jquery.min.js')}}"></script>
    <script>
           $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
    // Avoid following the href location when clicking
    event.preventDefault(); 
    // Avoid having the menu to close when clicking
    event.stopPropagation(); 
    // Re-add .open to parent sub-menu item
    $(this).parent().addClass('open');
    $(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
});
    </script>
    <!-- function addede later -->
<script>
     function changeTest(obj,val){

        //alert(obj.options[obj.selectedIndex].value);

        document.getElementById(val).style.display='block';
        return false;
      }

      function changeText(obj,val){
        $('input[name="loanamt"]').keyup(function() {
          var x=$(this).val().length ;
        if (x>=5 && x<=8) {
        document.getElementById(val).style.display='block';
        return false;
      }
      else{
        document.getElementById(val).style.display='none';
        return false;
      }
});
              }

      function fnAllowNumeric(evt) {
      evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
          }
        return true;
      }

</script>
<script>

$(document).ready(function(){
    $(".hide-dv").click(function(){
        $(".sidebar").hide("fast");
        $(".arrow-don").show("fast");
    });
    $(".arrow-don").click(function(){
        $(".sidebar").show("fast");
        $(".arrow-don").hide("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $(".chat").click(function(){
        $(".chat-win").toggle();
     });
    });
  </script> 
  <script>
   $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    </script>
	<!-- jQuery Easing -->
	<script src="{{URL::to('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{URL::to('js/jquery.waypoints.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{URL::to('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{URL::to('js/chatbox.js')}}"></script>
    	<!-- ChatBox -->
	<!-- MAIN JS -->
	<script src="{{URL::to('js/main.js')}}"></script>

<script type='text/javascript'>
    $.fn.bootstrapCarousel = $.fn.carousel;
    delete $.fn.carousel;
</script>
<!---Instant Call Back Start ----------->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instant Call Back</h4>
        </div>
        <div class="modal-body">
          <form name="subscribe-form" id="subscribe-form1" method="post">
									<div>
										<fieldset>
											<input class="newsletter-name" name="" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name=""pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Instant Call Back End ----------->
<!---Talk to us Start ----------->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Talk To Us</h4>
        </div>
        <div class="modal-body">
          <form name="subscribe-form" id="subscribe-form1" method="post">
									<div>
										<fieldset>
											<input class="newsletter-name" name="" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name=""pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Talk To Us End ----------->
<!---Email Us Start ----------->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Email Us</h4>
        </div>
        <div class="modal-body">
          <form name="subscribe-form" id="subscribe-form1" method="post">
									<div>
										<fieldset>
											<input class="newsletter-name" name="" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name=""pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Email Us End ----------->
<!---Help Start ----------->
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help</h4>
        </div>
        <div class="modal-body">
          <form name="subscribe-form" id="subscribe-form1" method="post">
									<div>
										<fieldset>
											<input class="newsletter-name" name="" placeholder="Name" required>
										</fieldset>
										</div>
									<div>
										<fieldset>
											<input type="text" class="newsletter-name" name=""pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
										</fieldset>									
										</div>
									<div>
											<button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
									</div>
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Help End --------- -->

	</body>
</html>

