
<div class="container white-bg">
<div class="table-responsive">
<div class="outer-border">
<br>
<center><h1>Savings Table:</center>
<br>
<table class="table table-bordered table-striped" id="emipaymenttable">

  <tr class="tbl-clr">
    <th bgcolor="#999"  class="col-xs-3 col-md-1" id="bankheader">Bank Name</th>

    <th bgcolor="#999" class="col-sm-2 hidden-xs" id="rateheader"><center>Rate Of Interest</center></th>

    <th bgcolor="#999" class="col-sm-2 hidden-xs" id="rateheader"><center>Processing FEE</center></th>

    <th bgcolor="#999" class="col-sm-2 hidden-xs" id="emiheader"><center>Loan EMI</center></th>

    <th bgcolor="#999" class="col-sm-3 hidden-xs" id="newemiheader"><center>New Loan EMI</center></th>

    <th bgcolor="#999" class="col-xs-4 col-sm-3" id="dropemiheader"><center>Drop EMI</center></th>

    <th bgcolor="#999" class="col-sm-3 hidden-xs" id="dropininterestheader"><center>Drop In Interest</center></th>

    <th bgcolor="#999" class="col-sm-3" id="savingsheader"><center>Savings</center></th>

    <th bgcolor="#999" class="col-sm-3" id="applyheader"><center>Apply Online</center></th>

  </tr>
  

  
  <?php 
  $loanamount =(float)$sata['loanamount'];
  $loaninterest =(float)$sata['loaninterest'];
  $loanterm =(float)$sata['loanterm'];
  $product_id=$sata['product_id'];
  $broker_id =$sata['brokerid'];
  
foreach ($data as $key => $value){?>
<tr>

	<td><img src="{{ $value['Bank_Logo']}}" class="img-responsive"></td>
    <td>{{ $value['roi']}}</td>
    <td>{{ $value['pf']}} &nbsp; ({{ $value['pf_type']}})</td>
    
    <?php try{
    $new_rate=$value['roi']/12/100;
    
    //print_r($loanamount);exit();

 

    $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
    $total =(($amount*$loanterm)-$loanamount);

    $ttl_payment = $loanamount+$total;

    $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

	  $new_total =(($new_amount*$loanterm)-$loanamount);
	  $new_ttl_payment = $loanamount+$new_total;
	  $drop_emi= $amount-$new_amount;
	  $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
	  $savings=$total-$new_total;
  }catch (Exception $e){

  }
    ?>
    <td><?php echo number_format((float)$amount, 2, '.', '');  ?>  </td>
    <td><?php  echo number_format((float)$new_amount, 2, '.', ''); ?>  </td>
    <td><?php echo number_format((float)$drop_emi, 2, '.', ''); ?>  </td>
    <td><?php echo ($drop_in_int); ?>  </td>
    <td><?php echo round($savings); ?>  </td>
    <td width="17%">
     <?php if($product_id == 12) {?>
     <a href="{{URL::to('apply-lead-online')}}?appid=0&qoutid=0&BankId={{$value['Bank_Id']}}&brokerid={{$broker_id}}&loanamount={{ $loanamount}}&loaninterest={{$loaninterest }}&loanterm={{$loanterm}}">Apply Online</a></td>
    <?php }elseif($product_id == 9){?>
    <a href="{{URL::to('apply-lead-online')}}?appid=0&qoutid=0&BankId={{$value['Bank_Id']}}&brokerid={{$broker_id}}&loanamount={{ $loanamount}}&loaninterest={{$loaninterest }}&loanterm={{$loanterm}}">Apply Online</a></td>
    <?php }else{?>
    <a href="{{URL::to('apply-lead-online')}}?appid=0&qoutid=0&BankId={{$value['Bank_Id']}}&brokerid={{$broker_id}}&loanamount={{ $loanamount}}&loaninterest={{$loaninterest }}&loanterm={{$loanterm}}">Apply Online</a></td>
    <?php }?>
                           

    </tr>


<?php }?>

<style>
.brd-rgt {border-right: 2px dashed #ccc;}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</table>
    
  </div>
  </div>
  </div>
