
@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div id="fh5co-page">

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h3>ICICI Credit Card</h3>
					</div>				
				<div class="col-md-12">
					<div class="row pad white-bg box-shadow">

<div class="col-md-4">
<h3>Net Annual Income</h3>
   <div class="btn-grp mrg-top income-tab" data-toggle="buttons" id="income">
      <span class="btn btn-default outer-brd btn-block active">
     <input type="radio"><a onclick="set_annual_income('>2.5Lacs')">> 2.5 Lacs</a>
      </span>
      <span class="btn btn-default outer-brd btn-block ">
     <input type="radio"><a onclick="set_annual_income('>5.0Lacs')">>5.0 Lacs</a></span>
      
	  <span class="btn btn-default outer-brd btn-block ">
     <input type="radio"><a onclick="set_annual_income('>10Lacs')">>10 Lacs</a></span>

	  <span class="btn btn-default outer-brd btn-block ">
     <input type="radio"><a onclick="set_annual_income('>15Lacs')">>15 Lacs</a></span>
         </div>
</div>
<div class="col-md-8">
<ul class="nav nav-tabs nav-justified" id="interest">
  <li class="active"><a data-toggle="tab" href="#home" onclick="set_interest('Lifestyle')">Lifestyle</a></li>
  <li><a data-toggle="tab" href="#menu1" onclick="set_interest('Travel')">Travel</a></li>
  <li><a data-toggle="tab" href="#menu2" onclick="set_interest('Motorsports')">Motorsports</a></li>
</ul>

<div class="tab-content text-left">
  <div id="home"  class="tab-pane fade in active">
  <div class="col-md-4">
	<img src="images/CS/RD_1/SD_ICIC_Rohit_Khanna_Platinum_VISA_Card.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h2><b>Platinum Chip Credit Card</b></h2>
    <ul class="pad-lft">
		<li>No Joining Fee. No Annual Fee</li>
        <li>Earn 2 PAYBACK points on every Rs.100 spent</li>
        <li>Min. 15% savings on dining at participating restaurants</li>
       <li>Save on 1% fuel surcharge, waived off at HPCL petrol pumps</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="coral" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/CS/RD/JET-CORAL-VISA.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3><b>Jet Coral Credit Card</b></h3>
    <ul class="pad-lft">
		<li>Joining Fee - ₹.1,250 + ST</li>
        <li>2,500 Welcome Bonus JPMiles on joining</li>
        <li>2,500 activation bonus JPMiles on achieving spends threshold of ₹50,000</li>
        <li>1,250 bonus JPMiles every year on renewal each year</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="o" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/CS/RD_1/SD_ICIC_Rohit_Khanna_Platinum_VISA_Card.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3>Coral Credit Card</h3>
    <ul class="pad-lft">
		<li>Limited period offer: Joining fee Rs.500</li>
        <li>2X cash rewards on dining, groceries and at supermarkets</li>
        <li>Buy 1, get 1 movie ticket free at BookMyShow</li>
       <li>Get a complimentary tie from Provogue on joining</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
</div>

<!-- 5.0 -->
<div class="tab-content text-left">
  <div id="home1" style="display: none;" class="tab-pane fade in active">
  <div class="col-md-4">
	<img src="images/CS/RD/DA_Coral-Mastercard-MasterCard_1.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h2><b>Coral Credit Card</b></h2>
    <ul class="pad-lft">
		<li>No Joining Fee. No Annual Fee</li>
        <li>Earn 2 PAYBACK points on every Rs.100 spent</li>
        <li>Min. 15% savings on dining at participating restaurants</li>
       <li>Save on 1% fuel surcharge, waived off at HPCL petrol pumps</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="menu1" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/CS/RD/JET-CORAL-VISA.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3><b>Jet Coral Credit Card</b></h3>
    <ul class="pad-lft">
		<li>Joining Fee - ₹.1,250 + ST</li>
        <li>2,500 Welcome Bonus JPMiles on joining</li>
        <li>2,500 activation bonus JPMiles on achieving spends threshold of ₹50,000</li>
        <li>1,250 bonus JPMiles every year on renewal each year</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="menu2" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/CS/RD_1/SS_ICICI-RED-STRAIGHT-CARD-MERGED_DateChange.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3><b>Ferrari Platinum Credit Card</b></h3>
    <ul class="pad-lft">
		<li>Limited period offer: Joining fee Rs.500</li>
        <li>2X cash rewards on dining, groceries and at supermarkets</li>
        <li>Buy 1, get 1 movie ticket free at BookMyShow</li>
       <li>Get a complimentary tie from Provogue on joining</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
</div>

<!-- 10 -->
<div class="tab-content text-left">
  <div id="home2" style="display: none;" class="tab-pane fade in active">
  <div class="col-md-4">
	<img src="images/CS/RD/Rubyx-MasterCard-02.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h2><b>Rubyx Credit Card</b></h2>
    <ul class="pad-lft">
		<li>Exclusive privileges - entertainment, dining, wellness and golf</li>
        <li>Complimentary airport lounge access</li>
        <li>Buy 1, get 1 movie ticket free at BookMyShows</li>
       <li>A set of complimentary Sennheiser HD 221 headphones on joining</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="menu1" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/CS/RD/JET-RUBYX-VISA.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3><b>Jet Rubyx Credit Card</b></h3>
    <ul class="pad-lft">
		<li>Joining Fee - ₹.2,500 + ST</li>
        <li>Welcome: 5,000 JPMiles + Complimentary Jet Airways Ticket</li>
        <li>5,000 activation bonus JPMiles on achieving spends threshold of ₹75,000</li>
       <li>Renewal: 2,500 JPMiles + Complimentary Jet Airways Ticket</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="menu" style="display: none;" class="tab-pane fade"> Signature
  <div class="col-md-4">
    <img src="images/CS/RD_1/SS_ICICI-BLACK-STRAIGHT-CARD_R1_EX.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3><b>Ferrari Signature Credit Card</b></h3>
    <ul class="pad-lft">
		<li>Complimentary Scuderia Ferrari watch on joining</li>
        <li>Discounts on Ferrari merchandise at Ferrari Online Store</li>
        <li>2 complimentary domestic airport lounge visits/ quarter</li>
       <li>Buy 1, get 1 movie ticket free at BookMyShow</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
</div>

<!-- 15 -->
<div class="tab-content text-left">
  <div id="home3" style="display: none;" class="tab-pane fade in active">
  <div class="col-md-4">
	<img src="images/CS/RD/JET-SAPPHIRO-AMEX.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h2><b>Sapphiro Credit Card</b></h2>
    <ul class="pad-lft">
		<li>Exclusive privileges - entertainment, dining, wellness and golf</li>
        <li>Complimentary membership to the Priority Pass programme</li>
        <li>Buy 1, get 1 movie ticket free at BookMyShow</li>
        <li>Complimentary All New Kindle on joining</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="menu" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/icici-credit-card.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3>Coral Credit Card</h3>
    <ul class="pad-lft">
		<li>Limited period offer: Joining fee Rs.500</li>
        <li>2X cash rewards on dining, groceries and at supermarkets</li>
        <li>Buy 1, get 1 movie ticket free at BookMyShow</li>
       <li>Get a complimentary tie from Provogue on joining</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
  <div id="menu" style="display: none;" class="tab-pane fade">
  <div class="col-md-4">
    <img src="images/CS/RD_1/SD_ICIC_Rohit_Khanna_Platinum_VISA_Card.jpg" width="230" class="pull-left card-img"/>
	</div>
	<div class="col-md-8">
	<h3>Coral Credit Card</h3>
    <ul class="pad-lft">
		<li>Limited period offer: Joining fee Rs.500</li>
        <li>2X cash rewards on dining, groceries and at supermarkets</li>
        <li>Buy 1, get 1 movie ticket free at BookMyShow</li>
       <li>Get a complimentary tie from Provogue on joining</li>
	</ul>
	</div>
	<div class="col-md-8 pull-right"><a href="#" class="btn btn-primary">Apply Now</a></div>
  </div>
</div>


	</div>				
					
					
					
					
					
					
					
					
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

<script type="text/javascript">
 var income= '>2.5Lacs';
 var interest='Lifestyle';
	function set_annual_income(value)
	{ 
   		 income=value;
   		 show_card();
	}
	function set_interest(value)
	{ 
   		 interest=value;
   		 show_card();
	}
	function show_card(){
		console.log(interest + ""+income);
		if (( interest == 'Lifestyle' && income == '>2.5Lacs'))
      {
       
        $("#home1").hide();
        $("#home").show();
        $("#home2").hide();
         $("#home3").hide();
          $('#menu2').hide();
      }
		if (( interest == 'Lifestyle' && income == '>5.0Lacs'))
      {
       
        $("#home1").show();
        $("#home").hide();
        $("#home2").hide();
         $("#home3").hide();
      }
      if (( interest == 'Lifestyle' && income == '>10Lacs'))
      {
       
        $("#home2").show();
        $("#home").hide();
        $("#home1").hide();
        $("#home3").hide();
        $('#menu2').hide();
      }
      if (( interest == 'Lifestyle' && income == '>15Lacs'))
      {
       
        $("#home2").hide();
        $("#home").hide();
        $("#home1").hide();
        $("#home3").show();
      }
      if (( interest == 'Travel' && income == '>5.0Lacs'))
      {
       
        $("#home2").hide();
        $("#home").hide();
        $("#home1").hide();
        $("#home3").hide();
        $('#menu1').show();
        $('#menu3').hide();
         $('#menu2').hide();
      }
      if (( interest == 'Travel' && income == '>10Lacs'))
      {
       
        $("#home2").hide();
        $("#home").hide();
        $("#home1").hide();
        $("#home3").hide();
        $('#menu1').hide();
        $('#menu3').show();
         $('#menu2').hide();
      }
      if (( interest == 'Motorsports' && income == '>5.0Lacs'))
      {
       
        // $("#home2").hide();
        $("#home").hide();
        // $("#home1").hide();
        $("#home3").hide();
        $('#menu1').hide();
        // $('#menu3').show();
         $('#menu2').show();
      }
      if (( interest == 'Motorsports' && income == '>10Lacs'))
      {
       
        $("#home2").hide();
        $("#home").hide();
        $("#home1").hide();
        $("#home3").hide();
        $('#menu1').hide();
        $('#menu3').hide();
        $('#menu').show();
      }
      

	}
</script>

