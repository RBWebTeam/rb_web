<?php
if(isset($_POST))
{
$loanamount=$_POST['loanamount'];
$loaninterest=$_POST['loaninterest']/12/100;
$loanterm=$_POST['loanterm']; 



//print_r($loanterm);exit();

$amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
$total =(($amount*$loanterm)-$loanamount);
$ttl_payment = $loanamount+$total;
///echo round($amount);
echo json_encode($arrayName = array('amount' => ($amount),
									'ttl_pay'=>($total),
									'ttl_payment'=>($ttl_payment)));
}
?>