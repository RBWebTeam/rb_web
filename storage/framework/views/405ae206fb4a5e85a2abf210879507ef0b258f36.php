<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
/* RBL Credit Card CSS*/
	
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  -webkit-box-shadow: 1px 1px 3px 0px rgba(0,0,0,.175);
  box-shadow: 1px 1px 3px 0px rgba(0,0,0,.175);
  -moz-box-shadow: 1px 1px 3px 0px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .icon-credit-card,
div.bhoechie-tab-menu div.list-group {
  color: #28a0ff;
}

div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #0767b3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #0767b3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
.rbl-cr-lst li {margin-bottom:5px; padding:0px;}
.rbl-cr-lst {padding:15px;}
	
/* RBL Credit Card CSS END */	
	
	
.btn-more {margin-left:30%;}
	
.price-box {
    text-align: center;
    padding: 20px;
    background: #fff;
	color:#666;
    margin-bottom: 20px;
    position: relative;
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
    -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
    top: 2px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}
.price-box h4 {color:#666666;}
.hom-rig {margin-left:5%;}	
.rbl-hed {background: #ccc; padding: 12px;}
table td {font-size:12px;}
div.bhoechie-tab-content {background:transparent;}

@media  only screen and (max-width: 768px) {

h3 {
    font-size: 20px;
    padding: 10px 20px;
}
}
	
</style>

<div id="fh5co-hero">
<img src="<?php echo e(url('images/rbl_banner.jpg')); ?>" class="rbl img-responsive hidden-xs" width="1349"/>

<br>
  <div class="container">
  <div class="row">
        <div class="col-md-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="icon-credit-card"></h4>Titanium Delight Card
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="icon-credit-card"></h4>Platinum Maxima Card
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="icon-credit-card"></h4>Platinum Delight Card
                </a>
                
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                      
                    <div class="col-md-4"><br><img src="<?php echo e(url('images/titanium_crd.png')); ?>" class="rbl" width="260"/></div>
					<div class="col-md-8">
					<h3 class="text-left">Titanium Delight Card</h3>
					 <ul class="rbl-cr-lst text-left">
					 <li>Exclusive Wednesday offers - free movie tickets, value back on groceries & pizzas</li>
					 <li>4,000 bonus reward points on crossing spends of Rs. 1.2 lacs</li>
					 <li>1 Reward point on every Rs.100 spent except fuel</li>
					 <li>Waiver of fuel surcharge up to Rs. 100 every month</li>
           <li>Joining Fee Rs.750</li>
					 </ul>
					 <a href="<?php echo e(URL::to('credit-card-rbl')); ?>?card=1" class="btn btn-primary mrg-btm pad pull-left">APPLY NOW</a>
					</div>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      
                     <div class="col-md-4"><br><img src="<?php echo e(url('images/platinum_crd.png')); ?>" class="rbl" width="260"/></div>
					<div class="col-md-8">
					<h3 class="text-left">Platinum Maxima Card</h3>
					<ul class="rbl-cr-lst text-left">
					 <li>Free movie ticket every month</li>
					 <li>10 Reward points on every Rs. 100 spent on dining, entertainment, utility bills, fuel and every international spends</li>
					 <li>2 Reward points for every Rs.100 spent and 5X Reward on selected categories</li>
					 <li>20,000 bonus Reward Points every year on crossing 3.5 lacs spends</li>
					 <li>Complimentary access to Airport Lounges</li>
           <li>Joining Fee Rs.2000</li>
					 </ul>
					 <a href="<?php echo e(URL::to('credit-card-rbl')); ?>?card=2" class="btn btn-primary mrg-btm pad pull-left">APPLY NOW</a>
					</div>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      
                     <div class="col-md-4"><br><img src="<?php echo e(url('images/platinum_delight_crd.png')); ?>" class="rbl" width="260"/></div>
					<div class="col-md-8">
					<h3 class="text-left">Platinum Delight Card</h3>
					<ul class="rbl-cr-lst text-left">
					 <li>2 Reward Points on every Rs. 100 spent on weekdays</li>
					 <li>2X Reward Points on every Rs. 100 spent on weekends</li>
					 <li>1,000 bonus Reward Points every month on 5 transactions of Rs.1000 or more</li>
					 <li>Waiver of fuel surcharge up to Rs.150 every month</li>
           <li>Joining Fee Rs.1000</li>
					 </ul>
					 <a href="<?php echo e(URL::to('credit-card-rbl')); ?>?card=3" class="btn btn-primary mrg-btm pad pull-left">APPLY NOW</a>
					</div>
                    </center>
                </div>
                
                
            </div>
        </div>
  </div>
  
  <br>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class=" pad" style="display:none;">
    <h2 class="align-center loan-head">Credit Card</h2>
  </div>
  <div class="col-md-12 pad11" style="display:none;">
    <div class="table-responsive box-shadow">
  <table width="100%" border="1" class="tbl table table-striped">
    <tr>
        <td width="9%" class="upper dis-non">Select</td>
        <td class="upper"><h4><b>Credit Card</b></h4></td>
        <td width="16%" class="upper"><h4><b>Benefits</b></h4></td>
        <td width="16%" class="upper"><h4><b>Joining Fee</b></h4></td>
        <td width="18%" class="upper"><h4><b>Annual Fee</b></h4></td>
        <td width="17%" class="upper"><h4><b>Apply Now</b></h4></td>
    </tr>
     <!-- RBL Credit Card  - -->
  <tr class="RBL-Card">
       <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#0" aria-expanded="true">Details </button></td>
        <td><img src="<?php echo e(url('images/rbl-credit-card.jpg')); ?>" alt="RBL Titanium Delight Card" title="RBL Titanium Delight Card" width="150" height="96" style="margin:0 auto; margin-bottom:5px;">
        <span>RBL Titanium Delight Card</span>
        </td>
    <td>Blockbuster Benefits Rs. 1000 BookMyShow voucher as a welcome gift free movie ticket per month on crossing spends of Rs. 10,000 and 1 Additional free movie ticket every month 
          <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content=" on crossing spends of Rs. 15,000 10 Reward Points / Rs. 100 spent at BookMyShow and select dining partners. Waiver of Convenience fee at BookMyShow for first 15 transactions every year. Accelerated Rewards Earn accelerated 20 reward points per Rs. 100 spent on all dining spends on Wednesdays Earn accelerated 10 reward points per Rs 100 spent on BookMyShow and select dining partners years." style="color:#39F; font-weight:bold;">More</a></td>
        <td class="v-align"></td>
        
        <td>Annual Fees- Rs.1000/- plus applicable service tax Annual Fees Reversal- On crossing Rs.1.5 lac annual spends in a year get annual fees reversal worth Rs.1000</td>
        <td class="v-align"><a href="<?php echo e(URL::to('contact-us')); ?>"><button>Apply Online</button></a></td>
  </tr>
  
  <tr class="RBL-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#1" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/rbl-credit-card_1.jpg')); ?>" alt="RBL Platinum Maxima Card" title="RBL Platinum Maxima Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>RBL Platinum Maxima Card</span>
    </td>
    
    <td>Earn 1 reward point for every Rs 100 spent on all purchases.Swipe within 60 days and get 2000 reward points. Spend Rs 10,000 and get additional 1000 reward points.
      <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Use your card for purchases of Rs1.2 Lakhs or more in a year and get a gift voucher of Rs1000.Fuel Surcharge waiver of 2.5%*.*Fuel Transactions between Rs 500 to Rs 4,000 will be eligible for waiver of fuel surcharge." style="color:#39F; font-weight:bold;">More</a></td>
     <td class="v-align"></td>
  <td>Annual Fees- Rs 750 Joining Fees Nil Renewal Fees* Rs 750 Renewal Fees is waived on usage of Rs 1 lakh or more in a year.</td>
    <td class="v-align"><a href="<?php echo e(URL::to('contact-us')); ?>"><button>Apply Online</button></a></td>
  </tr>

  <tr class="RBL-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#2" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/rbl-credit-card_1.jpg')); ?>" alt="RBL Platinum Delight Card" title="RBL Platinum Delight Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>RBL Platinum Delight Card</span>
    </td>
    
    <td>Double reward points on all your spends during the weekends .2 reward points for every Rs 100 on all purchases during weekdays.
      <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Reward Points worth Rs 10,650 + Fuel waiver Rs 1,80. Fuel Transaction between Rs 500 to Rs 4,000 will be eligible for waiver of fuel surcharge " style="color:#39F; font-weight:bold;">More</a></td>
     <td class="v-align"></td>
  
  <td>Annual Fees Rs 1000 Joining Fees - Nil Renewal Fees-Next year fee waived if spend is greater than Rs 1.5 lakh in previous year</td>
    <td class="v-align"><a href="<?php echo e(URL::to('contact-us')); ?>"><button>Apply Online</button></a></td>
  </tr>

    <!-- ICICI Credit Card  - -->
  <tr class="ICICI-Card">
     <td colspan="5" class="blue-bg-tbl"><h4>GEMSTONE</h4></td>
  </tr>
  <tr class="ICICI-Card">
    <td class="dis-non" width="20%"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#3" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD_1/SD_ICIC_Rohit_Khanna_Platinum_VISA_Card.jpg')); ?>" alt="ICICI Bank Coral Credit Card" title="ICICI Bank Coral Credit Card" width="150" height="100" style="margin:0 auto; margin-bottom:5px;">
    <span>Platinum Chip</span>
    </td>
    <td>No Joining Fee. No Annual Fee, Earn 2 PAYBACK points on every Rs.100 spent <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program. Save on 1% fuel surcharge, waived off at HPCL petrol pumps" style="color:#39F; font-weight:bold;">More</a></td>
    <td  class="v-align"></td>
    <td class="v-align"></td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>

  
  <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#4" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD/DA_Coral-Mastercard-MasterCard_1.jpg')); ?>" alt="ICICI Bank HPCL Coral Visa/MasterCard Credit Cards" title="ICICI Bank HPCL Coral Visa/MasterCard Credit Cards" width="150" height="96" style="margin:0 auto; margin-bottom:5px;">
    <span>Coral Contactless</span>
    </td>
    <td>Built-in MasterCard contactless technology to make quick and secure payments at retail outlets<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="2X Cash rewards on dining, groceries and at supermarkets. Complimentary Provogue tie on joining. 1 complimentary domestic airport lounge visits per quarter. 2 complimentary movies every month under the Buy One Get One Offer through www.bookmyshow.com, Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program. " style="color:#39F; font-weight:bold;"> More</a></td>
    <td>You pay a Joining Fee of Rs. 1,000 + service tax and get a complimentary tie worth Rs. 999 from Provogue.
      <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content=" This will be directly delivered to you within 30 days of payment of the Joining Fee." style="color:#39F; font-weight:bold;"> More</a></td>
    <td>You pay an Annual Fee of Rs.500 + service tax from 2nd year onwards - waived off if you spend more than Rs. 1,50,000 in the previous year</td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  
  
  <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD/Rubyx-MasterCard-02.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="96" style="margin:0 auto; margin-bottom:5px;">
    <span>Rubyx</span>
    </td>
    <td>Complimentary set of Sennheiser HD221 Headphones upon joining. Complimentary round of golf every month at the golf course of your choice based on eligible spends on your card<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="2 complimentary movies every month under the Buy One Get One Offer through www.bookmyshow.com, 2 complimentary domestic airport lounge visits per quarter courtesy of MasterCard and 10 domestic airport lounge visits per year courtesy of American Express. Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program." style="color:#39F; font-weight:bold;"> More..</a></td>
  
    <td>You pay a Joining Fee of Rs.3,000 + service tax and get a complimentary set of Sennheiser HD221 Headphones directly delivered to you within 30 days of payment</td>
    <td>You Pay an Annual Fee of Rs.2,000 + service tax from 2nd year onwards. This fee is waived off if you spend more than Rs. 3,00,000 in the previous year.</td>
  
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  
  
  <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD/ICICI-BANK-SAPPHIRO-AMEX-CHIP-01.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>Sapphiro</span>
    </td>
    <td>Get complimentary All New Kindle on payment of the Joining fee. Complimentary membership to the Priority Pass lounge access programme <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Unlimited Complimentary access to select airport lounges in India, courtesy of MasterCard and American Express. Complimentary round of golf every month at the golf course of your choice based on eligible spends on your card. 2 Complimentary movie tickets every month under the Buy One Get One Offer through www.bookmyshow.com" style="color:#39F; font-weight:bold;">More</a></td>
    <td>You pay a Joining Fee of Rs. 6,500 + service tax and get a complimentary All New Kindle delivered to you within 30 days of payment of the Joining Fee
      </td>
    <td>You pay an Annual Fee of Rs. 3,500 + service tax from 2nd year onwards - waived off if you spend more than Rs. 6,00,000 in the previous year.</td>
  
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
   
    <tr class="ICICI-Card">
     <td colspan="5" class="brown-bg-tbl"><h4>JET</h4></td>
  </tr>
   <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD/JET-CORAL-VISA.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>Coral</span>
    </td>
    <td>2,500 welcome bonus JPMiles on joining. 1,250 renewal bonus JPMiles every year. Complimentary airport lounge access<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Buy one get one free movie ticket through the week at www.bookmyshow.com, Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program." style="color:#39F; font-weight:bold;"> More</a></td>
    <td class="v-align">Rs.1250 + ST</td>
    <td class="v-align">Rs.1250 + ST</td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  
  <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD/JET-CORAL-AMEX.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>Rubyx</span>
    </td>
    <td>5,000 welcome bonus JPMiles on joining. 2,500 renewal bonus JPMiles every year. Complimentary airport lounge access.<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Earn upto 5 JPMiles for every `100 spent on the card. Buy one get one free movie ticket through the week at www.bookmyshow.com, Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program." style="color:#39F; font-weight:bold;"> More</a></td>
    <td class="v-align">Rs.2500 + ST</td>
    <td class="v-align">Rs. 2500 + ST</td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD/JET-SAPPHIRO-VISA.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>Sapphiro</span>
    </td>
    <td>10,000 welcome bonus JPMiles on joining. 5,000 renewal bonus JPMiles every year. Complimentary airport lounge access.<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Earn upto 7 JPMiles for every `100 spent on the card. Complimentary golf rounds, movie tickets, discounts on dining and more!" style="color:#39F; font-weight:bold;"> More</a></td>
    <td class="v-align">Rs.5000 + ST</td>
    <td class="v-align">Rs.5000 + ST</td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  
  
  <tr class="ICICI-Card">
     <td colspan="5" class="yellow-bg-tbl"><h4>FERRARI</h4></td>
  </tr>
   <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD_1/SS_ICICI-RED-STRAIGHT-CARD-MERGED_DateChange.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>Platinum</span>
    </td>
    <td>Discounts on Ferrari merchandise at the Online Ferrari Store. 1 complimentary domestic Airport Lounge visit per quarter.<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="2 complimentary movie tickets every month under the Buy 1, Get 1 offer from BookMyShow. Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program. Waiver of 1% on fuel surcharge valid on a maximum spend of ` 4000 per transaction at all HPCL pumps." style="color:#39F; font-weight:bold;"> More</a></td>
    <td>You pay a Joining Fee of Rs. 499 + Service Tax </td>
    <td>You pay an Annual Fee of Rs. 499 + Service Tax from the second year onwards. The Annual Fee is waived off, if you spend more than Rs.1,25,000 in the previous year.</td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  <tr class="ICICI-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#5" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/CS/RD_1/SS_ICICI-BLACK-STRAIGHT-CARD_R1_EX.jpg')); ?>" alt="ICICI Ruby Credit Card" title="ICICI Ruby Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>Signature</span>
    </td>
    <td>Complimentary Access to domestic airport lounges in India. Buy One Get One’ offer on www.bookmyshow.com<a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Minimum 15% savings on dining bill at over 2,500+ restaurants across India courtesy our Culinary Treats program. Waiver of 1% on fuel surcharge valid on a maximum spend of ` 4000 per transaction at all HPCL pumps" style="color:#39F; font-weight:bold;"> More</a></td>
    <td>You pay a Joining Fee of Rs.3,999 + Service Tax and get a complimentary Scuderia Ferrari watch. This will be directly delivered to you within 30 days of payment of the Joining Fee.</td>
    <td>You pay an Annual Fee of Rs. 999 + Service Tax from the second year onwards. The Annual Fee is waived off, if you spend more than Rs. 2,50,000 in the previous year.</td>
    <td class="v-align"><a href="<?php echo e(URL::to('credit-card-form')); ?>"><button>Apply Online</button></a></td>
  </tr>
  

    <!-- HDFC Credit Card  - -->
  
<tr class="HDFC-Card">
    <td class="dis-non"><input type="checkbox" name="cehckbox"/> <button style="display:none;" data-toggle="collapse" data-target="#6" aria-expanded="true">Details </button></td>
    <td><img src="<?php echo e(url('images/hdfc-credit-card.jpg')); ?>" alt="HDFC JetPrivilege Credit Card" title="HDFC JetPrivilege Credit Card" width="150" height="110" style="margin:0 auto; margin-bottom:5px;">
    <span>JetPrivilege HDFC Bank World</span>
    </td>
    
    <td>Welcome Benefit of up to 10,000 Bonus JP Miles and one way (base fare waived) Jet Airways ticket. Earn 6 JP Miles .
      <a data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="for every Rs. 150 spent and 18 JP Miles on every flight booked on www.jetairways.com Dedicated Check-in with additional baggage allowance Lounge access through Priority Pass and MasterCard Lounge Program.Get 1 JP Tier Point on every 2 lac spends. Faster way to move to higher JP Tier.Enjoy Lounge access at airport in India or overseas.Get Renewal Fee waived if you spend Rs. 3 lac in 12 months prior to renewal.Get extended validity of JP Miles for 5 years" style="color:#39F; font-weight:bold;">More</a></td>
    <td class="v-align"></td>
  <td>First Year and Renewal Fee on JetPrivilege HDFC Bank World Credit Card is Rs, 2,500/- (Service Tax as applicable)</td>
    <td class="v-align"><a href="<?php echo e(URL::to('contact-us')); ?>"><button>Apply Online</button></a></td>
  </tr>
   <!--  <tr id="6" class="collapse" aria-expanded="true">
    <td colspan="6"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></td>
  </tr> -->
  <!-- card 7 End -->
</table>

</div>

  </div>
  </div>
</div>
  
 
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <script type="text/javascript">
    
$(document).ready(function(){
var full_url = document.URL; // Get current url
var url_array = full_url.split('/') // Split the string into an array with / as separator
var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)

var rbl = document.getElementsByClassName("RBL-Card");
var ICICI = document.getElementsByClassName("ICICI-Card"); 
var HDFC = document.getElementsByClassName("HDFC-Card");

   if(last_segment=='rbl'){
     $(".RBL-Card").show();
     $(".ICICI-Card").hide();
     $(".HDFC-Card").hide();
   }else if(last_segment=='icici'){
     $(".RBL-Card").hide();
     $(".ICICI-Card").show();
     $(".HDFC-Card").hide();
   }else if(last_segment=='hdfc'){
     $(".RBL-Card").hide();
     $(".ICICI-Card").hide();
     $(".HDFC-Card").show();
   } 
      
     

 
});
  </script>
  
  <script>
     $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
  </script>
