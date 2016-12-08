<?php
if(isset($_POST))
{
$loanamount=$_POST['loanamount'];
$loaninterest=$_POST['loaninterest']/12/100;
$loanterm=$_POST['loanterm']; 

$new_rate="8";

//print_r($loanterm);exit();

$amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
$total =(($amount*$loanterm)-$loanamount);
$ttl_payment = $loanamount+$total;
//now coding for savings//
$new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));
$new_total =(($amount*$loanterm)-$loanamount);
$new_ttl_payment = $loanamount+$total;
$saving=$amount-$new_amount;
///echo round($amount);
echo json_encode($arrayName = array('amount' => ($amount),
									'ttl_pay'=>($total),
									'ttl_payment'=>($ttl_payment),
									'saving'=>($saving)));
}
?>