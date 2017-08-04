<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div id="fh5co-hero">
	<div class="container">
	<div class=" pad">

    <h2 class="align-center loan-head">View Options</h2>
	</div>

    
	<div class="col-md-12 pad11">
    
    

 <?php $__currentLoopData = $getQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div class="table-responsive outer-brd">
	<table width="100%" border="1" class="tbl">
   
  

  <tr>
    <!-- <td width="9%" class="upper">Compare</td> -->
    <td class="bdr-btm"><center><img src="<?php echo e($value->Bank_Logo); ?>" width="130" ></center></td>
    <td width="16%" class="upper bdr-btm">Interest Rate</td>
    <td width="16%" class="upper bdr-btm">Loan Amount</td>
    <td width="18%" class="upper bdr-btm">emi</td>
    <?php $Loans=strtolower(str_replace(' ','-',$home_loan)); ?>
     
     <?php if($Loans=='lap'){?>

    <td width="17%" class="blue-bg"><h4><a href="<?php echo e(url('apply-loan-against-property')); ?>" class="apply-btn">Apply Online</h4></a></td>

    <?php }else{?>
   <td width="17%" class="blue-bg"><h4><a href="<?php echo e(url('apply-')); ?><?php echo $Loans?>" class="apply-btn">Apply Online</a></h4></td>
    <?php }?>
  </tr>

  <tr>
<!--     <td><input type="checkbox" name="cehckbox"/></td> -->
    <td><?php echo e($home_loan); ?></td>
    <td><?php echo e($value->roi); ?></td>
    <td><?php echo e($value->amt_from); ?>-<?php echo e($value->amt_to); ?></td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Special Features:-</strong> Pre close Fee 0%</td>
  </tr>
    <tr>
  <!--   <td><i class="icon-thumbs-up"></i></td> -->
    <td class="upper">  <button type="button" data-toggle="collapse" data-target="#<?php echo e($key); ?>">Know More</button><!-- <a href="#">Know More</a> --></td>
    <td>Processing Fee - INR <?php echo e($value->pf); ?> + ST</td>
    <td>Interest Paid - INR 50,000</td>
    <td>Max tenure - <?php echo e($value->Max_Tenure); ?>Years</td>
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
	</div>
	</div>
</div>
	

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>