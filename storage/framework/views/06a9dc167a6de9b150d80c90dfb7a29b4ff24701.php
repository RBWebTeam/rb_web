<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
ssss

<div class="container">
	<div id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">IDFC</h2>
	</div>
	<div class="col-md-12 white-bg pad1 mrg-btm box-shadow">
<img src="<?php echo e(URL::to('images/idfc-img.png')); ?>" alt="IDFC Process" title="IDFC Process" class="img-responsive"/>

 </div>
	<div class="col-md-12 white-bg pad box-shadow fl-lft">
	<div class="col-md-8">
	<br>
	<img src="<?php echo e(URL::to('images/idfc_banner_left.png')); ?>" alt="IDFC Banner" title="IDFC Banner" class="img-responsive"/>

	<a class="btn btn-success btn-outline with-arrow" href="<?php echo e(URL::to('/savings-account')); ?>">View Brochure
							<i class="icon-arrow-right"></i></a>
	</div>



	 
	 <div class="col-md-4">
	   <div class="border brd-for">

             <form class="" id="compareform" role="form" method="POST" >
				  <?php echo e(csrf_field()); ?>

              <input type="hidden" name="form" value="idfc_form">

				  
				    <div>
					  <label>Name</label>
				      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
				    </div>

				    <div>
					<label>Email</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
				    </div>

				    <div>
					<label>Mobile</label>
				      <input type="tel" class="form-control" id="contact" placeholder="Enter number" name="contact" maxlength="10" pattern="[789][0-9]{9}" required="">
				    </div>

				    <div>
					<label>City</label>
				      <input type="text" class="form-control search_city_n" placeholder="City" name="City" id="City" required>
				    </div>
              
			  <div class="mrg-top"> 
			    
			     <button class="btn-submt sidebar-submit">Apply Now</button>
				 
			   
			  </div>
			</form>
			<div class='msg displaynone' ><p><b>Thanks. We will reach you soon.<b></p></div>
            <div class='msg_err displaynone' ><p><b>Ooops. Something went wrong.<b></p></div>
		</div>	
	</div> 
	
	
	
	</div>
	</div>
</div>
	
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">

	

 $(document).ready(function(){
    src = "<?php echo e(route('searchajax')); ?>";
    $(".search_city_n").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_city_n").val("");
          $(".search_city_n").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

