<div class="container">
 <div class="outer-border" style="border:2px dashed #ccc; padding:30px">
<h2 class="text-center">Savings:</h2>
<table class="table table-bordered table-striped" id="emipaymenttable">

  <tr class="tbl-clr">
    <th bgcolor="#c2da6b" class="col-xs-3 col-md-1" id="bankheader">Bank Name</th>

    <th bgcolor="#4A9ACF" class="col-sm-3 hidden-xs" id="rateheader"><center>Rate Of Interest<i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></center></th>

    <th bgcolor="2DC6D1" class="col-sm-3 hidden-xs" id="emiheader"><center>Loan EMI</center></th>

    <th bgcolor="BF5850" class="col-sm-3 hidden-xs" id="newemiheader"><center>New Loan EMI<i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></center></th>

    <th bgcolor="D8BC31" class="col-xs-4 col-sm-3" id="dropemiheader"><center>Drop EMI<i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></center></th>

    <th bgcolor="2DC6D1" class="col-sm-3 hidden-xs" id="dropininterestheader"><center>Drop In Interest<i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></center></th>

    <th bgcolor="#c2da6b" class="col-xs-3 col-md-1" id="savingsheader"><center>Savings<i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></center></th>

    <th bgcolor="#4A9ACF" class="col-xs-3 col-md-1" id="applyheader"><center>Apply</center></th>

  </tr>
  

  
  <?php 
  $loanamount =(float)$sata['loanamount'];
  $loaninterest =(float)$sata['loaninterest'];
  $loanterm =(float)$sata['loanterm'];
  
foreach ($data as $key => $value){?>
<tr>
	<td>{{ $value['Bank_Name']}}</td>
    <td>{{ $value['roi']}}</td>
    
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
    <td width="17%"><a href="{{URL::to('apply-home-loan')}}">Apply Online</a></td>
                           

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
