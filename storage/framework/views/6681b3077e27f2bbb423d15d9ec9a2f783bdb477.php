<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
	 
	<aside class="pad-tp">
	<div class="col-md-12">
	<!-- <p class="text-left"><a href="<?php echo e(url('/')); ?>">home</a>/<?php echo e($bank_name); ?></p> -->
	</div>
	<div class="col-md-8 bg-white bnkpg">
		<div class="text-center bankpg">

		<img src="<?php echo e($Bank_Logo); ?>" class="img-responsive" />
		
		 
		</div>	
	  	</div>

		<div class="col-md-4 red-bg1 ">
	   <div class="form-in">

              <span class="head-1 heading-bmar">Request A Call Back</span>
              <form class="" id="compareform" role="form" method="POST">
            
              <?php echo e(csrf_field()); ?>

                <input type="hidden" name="form" value="subscribe-form">
				  <div class="has-error">
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
				       <input type="hidden" class="form-control" id="product" value="<?php echo e($product); ?>" name="product"  />
				    </div>
				  </div>
			<div class="has-error">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control clr-ddd" onkeypress="fnAllowNumeric(event)" 
			pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile No." >
		    </div>
		  </div>
				 <div class="has-error">
				  
				    <div>
				      <input type="email" class="form-control clr-ddd" id="email" name="email" placeholder="Email Id" required  />
                 
				    </div>
				  </div>
			 
			  
			  <div class="centr-obj"> 
			    
			    <button class="btn btn-primary btn-outline with-arrow sidebar-submit" >Submit</button>
			   
			  </div>
			</form>
		</div>	
		<div class='msg displaynone'><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone'><p>Ooops. Something went wrong.</p></div>
	</div>
	</aside>
	</div>

	
   
	<div class="container">
	 <div class="row">
	   <div class="col-md-12 pad11">
    
    <div class="">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
   <!--  <td>Your  Loan Search for <b>5 Lakhs</b> Loan</td>
   -->
</table>
</div>
 

 <?php $__currentLoopData = $getQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


 <div class="table-responsive outer-brd">
	<table width="100%" border="1" class="tbl">
  <tr>
    <!-- <td width="9%" class="upper">Compare</td> -->
    <!-- <td><div class="img-c"> --><!-- <img src="<?php echo e(url('images/axis.jpg')); ?>" width="100" height="30"> --><!-- Bank_ID</div></td> -->
    <td class="upper">Rate Of Interest</td>
    <td class="upper">Loan Amount</td>
    <td class="upper">Minimum Income</td>
    <td class="upper">Age</td>
    <td class="upper">Women Rate Of Interest</td>
    <td class="upper">Minimum Credit Score</td>
    <td class="upper">Tenure</td>
    <td class="upper">Profession</td>
    <?php if($product_id == 12 || $product_id ==9){

    ?>

    <?php $product=strtolower(str_replace(' ','-',$product)); ?>
    <td class="upper"><a href="<?php echo e(URL::to('')); ?>/<?php echo e($product); ?>" class="apply-btn">Apply Online</a></td>
	<?php }else{ ?>
	<td class="upper"><a href="<?php echo e(URL::to('business-loan')); ?>" class="apply-btn">Apply Online</a></td>

	<?php } ?>

   <!--  <td class="upper" width="17%"><a href="<?php echo e(url('apply')); ?>dw">Apply Online</a></td> -->
  </tr>

  <tr>
<!--     <td><input type="checkbox" name="cehckbox"/></td> -->
   <!--  <td><?php echo e($value->Bank_Id); ?></td>  -->
    <td><?php echo e($value->roi); ?>%</td> 
    <td><?php echo e((int)$value->Min_Loan_Amt/100000); ?>Lacs-<?php echo e((int)$value->Max_Loan_Amt/10000000); ?>Cr</td> 
   <td><?php echo e((int)$value->Min_Income); ?></td>
   <td><span><?php echo e((int)$value->Min_Age); ?>-<?php echo e((int)$value->Max_Age); ?></span></td>
     <?php if($value->women_roi!=''): ?>
        <td><?php echo e($value->women_roi); ?>%</td> 
     <?php else: ?>
      <td>-</td> 
     <?php endif; ?>


   <td><?php echo e($value->MinCredit_Score); ?></td> 
   <td><?php echo e((int)$value->Min_Tenure); ?>-<?php echo e((int)$value->Max_Tenure); ?>&nbsp;Years</td> 
   <td><?php echo e($value->Profession_Name); ?></td> 
  <!--  <td class="upper" width="17%"><a href="<?php echo e(URL::to('apply-')); ?><?php echo e($product); ?>">Apply Online</a></td> -->

    <td rowspan="2"><strong>Special Features:-</strong> Pre close Fee <?php echo e($value->Pre_Closer_Fixed); ?>%</td>
  </tr>
    <tr>
  <!--   <td><i class="icon-thumbs-up"></i></td> -->
    <td class="upper">  <button type="button" data-toggle="collapse" data-target="#<?php echo e($key); ?>">Know More</button><!-- <a href="#">Know More</a> --></td>
    <!-- <td>Processing Fee - INR ertert + ST</td> -->
   <!--  <td>Intrest Paid - INR 50,000</td> -->
    <!-- <td width="18%" class="upper">Tenure:<?php echo e($value->Min_Tenure); ?>-<?php echo e($value->Max_Tenure); ?>years</td> -->
    </tr>

    
      
 <table>
<div id="<?php echo e($key); ?>" class="collapse" style="background-color: #F6F6F6; width: 100%;height: auto;">
   
   <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> No guarantor required</li>
          <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> No pre-closure and part payment fee
            <mark style="color: red">Special offers are available for women applicants at a lower rate</mark></li>
          <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Age at least 18 and less than 60</li>
           <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Salaried / Self - Employed with regular income,Earn more than the minimum income required</li>
  </div>

   </table>

</table>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


</div></div></div><!-- </div> -->


	<?php  if($product_id == 12){
    ?>
	<div class="container" >
	 <div class="row">
	   <div class="col-md-12">
	   
	   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Home Loan</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      <p>RupeeBoss brings home loans to your doorstep from all leading banks and NBFC’s. Over 300 man-years of collective experience, a dedicated team of experts and a complete package to meet all your housing finance needs, RupeeBoss helps you realize your dreams</p>
      <p>We make available home loans for individuals for fresh purchase or resale or for construction of houses. Applications can be made individually or jointly.</p>

</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      The RupeeBoss Advantage.</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><ul><li>Experienced and well-qualified personnel to ensure smooth and easy processing</li></ul>
      <ul><li>Stage wise updating on applications status</li></ul> 
      <ul><li>Transparency in all dealings</li></ul> 
      <ul><li>Counselling and advisory services while deciding on right loan which suits you.</li></ul> 
      <ul><li>Efficient and quick processing of loans</li></ul>
      <ul><li>Branches across 30 cities in India</li></ul> 
      <ul><li>Dedicated relationship managers</li></ul>
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Home Improvement Loan</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
	    <p>The interiors of any home reflect the personal preferences and tastes of its owners. A need is invariably felt to constantly upgrade the interiors with the changing times. This loan facility seeks to cover repairs and other structural improvements</p>
	  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
       Home Extension Loan</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
	    <p>Home Extension Loan for adding more space to your existing home for meeting the requirements of your growing family.</p>
	  </div>
    </div>
  </div>
</div>
	   
	 </div>
	 </div>
	</div>
	<?php }else if ($product_id == 9){ ?>
	<div class="container" >
	 <div class="row">
	   <div class="col-md-12">
	   
	   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Personal Loan</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      <p>A personal loan is a short term unsecured loan that you can use to meet current personal financial needs. It is commonly used to meet expenses related to debt restructuring, to meet Wedding Expenses, vacations, unexpected medical expenses and down payments, a personal loan may be used for practically any type of expense. Tenure of a personal loan is shorter as compared to a mortgage. Unlike mortgage, a personal loan is commonly for between one and five years.</p>
      <p>Unlike mortgage, a personal loan is commonly for between one and five years.</p>

</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      The RupeeBoss Advantage.</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><ul><li>Experienced and well-qualified personnel to ensure smooth and easy processing.</li></ul>
        <ul><li>Stage wise updating on applications status.</li></ul>
        <ul><li>Transparency in all dealings.</li></ul>
        <ul><li>Counselling and advisory services while deciding on right loan which suits you.</li></ul>
        <ul><li>Efficient and quick processing of loans.</li></ul>
        <ul><li>Branches across 30 cities in India.</li></ul>
        <ul><li>Dedicated relationship managers.</li></ul> 
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Why Choose a Personal Loan?</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
	    <p>There's no limit to the number of ways a personal loan can be used. It can be taken for any personal reason, such as:</p>
	    <ul><li>Renovation of your house</li></ul>
	    <ul><li>To meet wedding expenses.</li></ul>
	    <ul><li>To buy a new Cell Phone</li></ul>
	    <ul><li>To plan and spend holidays with the family</li></ul>
	    <ul><li>To simply pay off credit card bills or other debts.</li></ul>
	  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
       Documents Required:</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
	    <p>Most banks have similar guidelines for documentation requirement for personal loan. The list of documents you need for a personal loan are:</p>
	    <p>For salaried individuals:</p>
	    <ul><li>A copy of latest salary slips or salary certificate.</li></ul>
	    <ul><li>Form 16 and a copy of ITR for the last two years.</li></ul>
	    <ul><li>Copy of the appointment letter or an employment certificate to prove job continuity.</li></ul>
	    <ul><li>Last 6 months' salary account statements.</li></ul>
	    <ul><li>Proof of employment certificate.</li></ul>
	    <ul><li>Proof of employment certificate.</li></ul>
	  </div>
    </div>
  </div>
</div>
	   
	 </div>
	 </div>
	</div>
    <?php }else{ ?>
    <div class="container" >
	 <div class="row">
	   <div class="col-md-12">
	   
	   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Business Loan</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      <p>Do you own a business that needs funds for expansion? Or do you have a big business order in hand and require funds for some working capital?</p>
      <p>If you can relate to any of the above situations, then a Business Loan is the right solution for you. Our team of dedicated professionals helps you determine your requirements, especially for small businesses; and you can get started within the shortest possible time.</p>

</div>
    </div>
  </div>
  <!-- <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      The RupeeBoss Advantage.</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><ul><li>Experienced and well-qualified personnel to ensure smooth and easy processing.</li></ul>
        <ul><li>Stage wise updating on applications status.</li></ul>
        <ul><li>Transparency in all dealings.</li></ul>
        <ul><li>Counselling and advisory services while deciding on right loan which suits you.</li></ul>
        <ul><li>Efficient and quick processing of loans.</li></ul>
        <ul><li>Branches across 30 cities in India.</li></ul>
        <ul><li>Dedicated relationship managers.</li></ul> 
</div>
    </div>
  </div> -->
  <!-- <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Why Choose a Personal Loan?</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
	    <p>There's no limit to the number of ways a personal loan can be used. It can be taken for any personal reason, such as:</p>
	    <ul><li>Renovation of your house</li></ul>
	    <ul><li>To meet wedding expenses.</li></ul>
	    <ul><li>To buy a new Cell Phone</li></ul>
	    <ul><li>To plan and spend holidays with the family</li></ul>
	    <ul><li>To simply pay off credit card bills or other debts.</li></ul>
	  </div>
    </div>
  </div> -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
       Documents Required:</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
	    <p>Most banks have similar guidelines for documentation requirement for personal loan. The list of documents you need for a personal loan are:</p>
	    <p>For salaried individuals:</p>
	    <ul><li>Proof of Identity.</li></ul>
	    <ul><li>Address Proof..</li></ul>
	    <ul><li>Date of Birth Proof.</li></ul>
	    <ul><li>Bank Statements.</li></ul>
	    <ul><li>Latest ITR along with computation of income, B/S & P&L a/c for the last 2 yrs. certified by a CA.</li></ul>
	    <ul><li>Proof of continuation:  Trade license /Establishment /Sales Tax certificate.</li></ul>
	    <ul><li>Other Mandatory Documents (Sole Prop. Decl. Or Cert. Copy of Partnership Deed, Cert. Copy of MOA, AOA & Board resolution.).</li></ul>
	  </div>
    </div>
  </div>
</div>
	   
	 </div>
	 </div>
	</div>
	<?php } ?>

	
	
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>