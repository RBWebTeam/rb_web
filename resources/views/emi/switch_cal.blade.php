<?php
if(isset($_POST))
{
$loanamount=$_POST['loanamount'];
$loaninterest=$_POST['loaninterest']/12/100;
$loanterm=$_POST['loanterm']; 

//  $bank=$_POST['bank']; 


//   $a = array('ADITYA' => 9.15 ,'ADITYA-BIRLA HOUSING FINANCIAL LIMITED' => 8.2,'AU HOUSING FINANCE LIMITED' =>12.4,'AXIS BANK LTD' =>9.8,);
//   $d=json_encode($a); 

// //$a = array('ADITYA-BIRLA HOUSING FINANCIAL LIMITED' => 9.15 ,'HDFC' => 8.2,'ICIC' =>12.4,'ICIC' =>15,);
//   //$d=json_encode($a); 

//   foreach ($a as $key => $value) {
//       if($key==$bank){

//        $new_rate=$value/12/100;

//          break;
//       }
//   }



$new_rate=10.00/12/100;

//print_r($loanterm);exit();

$amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
$total =(($amount*$loanterm)-$loanamount);
$ttl_payment = $loanamount+$total;

//savings//

$new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));
$new_total =(($new_amount*$loanterm)-$loanamount);
$new_ttl_payment = $loanamount+$new_total;
$drop_emi= $amount-$new_amount;
$drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
$savings=$total-$new_total;
//echo round($amount);
echo json_encode($arrayName = array('amount' => ($amount),
	                                'drop_emi'=>($drop_emi),
	                                'new_amount'=>($new_amount),
	                                 'drop_in_int'=>($drop_in_int),
	                                 'savings'=>($savings)));
                                    // 'bank'=>($d)
	                                // 'ttl_pay'=>($total),
									// 'ttl_payment'=>($ttl_payment)));
                                    
}
?>