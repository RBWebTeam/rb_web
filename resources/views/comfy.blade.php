@include('layout.header')


<div class="container">
	<div id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Comfy Card</h2>
	</div>
	<div class="col-md-12 white-bg pad1 mrg-btm box-shadow">
<img src="{{URL::to('images/comfy_banner.png')}}" class="img-responsive"/>

 </div>
	<div class="col-md-12 white-bg pad box-shadow fl-lft">
	<div class="col-md-8">
	<div class="pad border">
	<h3 class="pad text-center">Comfy Card</h3>
	<p>What if you were to unfortunatly with an accident & your car needs repairs at the garage fot few days? it is both frustrating and disappointing , not to have your prized in your sight & trying to figure out your travel.</p>

<p>We are cognizant times that are getting uncertain by the day.Our lives hang in the balance of unpredictable situation. One minute you,re driving the road whisting a tune the next moment the car right in front of you spinsout of control and crashes. We Understand your pain & the need of a reliable partner who can share burden.</p>

<p>While we cannot control what happens, we can keep you better prepared with comfy at your recue.</p>
 <a class="btn btn-success btn-outline with-arrow" href="{{URL::to('/comfy-sales')}}">View Brochure
							<i class="icon-arrow-right"></i></a>
 </div>
	</div>

	 
	 <div class="col-md-4">
	   <div class="border brd-for">

             <form class="" id="compareform" role="form" method="POST" >
             {{ csrf_field() }}
              <input type="hidden" name="form" value="comfy_form">

				  
				  
				    <div class="inp-hig">
					  <label class="form-label-new">Name</label>
				      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
				    </div><br>

				    <div class="inp-hig">
					<label class="form-label-new">Email</label>
				        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
				    </div><br>

				    <div class="inp-hig">
					<label class="form-label-new">Mobile</label>
				      <input type="tel" class="form-control" id="contact" placeholder="Enter number" name="contact" maxlength="10" pattern="[789][0-9]{9}" required="">
				    </div><br>

				    <div class="inp-hig">
					<label class="form-label-new">City</label>
				      <input type="text" class="form-control search_city_n" placeholder="City" name="City" id="City" required>
				    </div><br>
              
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
	
@include('layout.footer')
@include('layout.script')



<script type="text/javascript">

	

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
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

