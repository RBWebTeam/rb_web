
@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div id="fh5co-page">

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>ICICI Credit Card</h2>
					</div>				
				<div class="col-md-12">
					<div class="row pad11 white-bg comp-pg">

<div class="col-md-4">
<h3>Net Annual Income</h3>
   <div class="btn-grp mrg-top income-tab" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-block active">
     <a onclick="set_annual_income('>2.5Lacs')" name="net_income" value=">2.5Lacs">> 2.5 Lacs</a>
      </span>
      <span class="btn btn-primary outer-brd btn-block"><a onclick="set_annual_income('>5.0Lacs')" name="net_income" value=">5.0Lacs">> 5 Lacs</a></span>
	  <span class="btn btn-primary outer-brd btn-block"><a type="radio" onclick="set_annual_income('>10Lacs')" name="net_income" value=">10Lacs">> 10 Lacs</a></span>
	  <span class="btn btn-primary outer-brd btn-block"><a type="radio" onclick="set_annual_income('>15Lacs')" name="net_income" value=">15lacs">> 15 Lacs</a>
         </div>
</div>
<div class="col-md-8">
<ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#" onclick="set_interest('Lifestyle')">Lifestyle</a></li>
  <li><a data-toggle="tab" href="#" onclick="set_interest('Travel')">Travel</a></li>
  <li><a data-toggle="tab" href="#" onclick="set_interest('Motorsports')">Motorsports</a></li>
</ul>

<div class="tab-content text-left">
  <div id="home" class="tab-pane fade in active">
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
  <div id="menu1" class="tab-pane fade">
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
  <div id="menu2" class="tab-pane fade">
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

	}
</script>

