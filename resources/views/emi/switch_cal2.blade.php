<center>
                    <div class="type-cover">
                      <p>Remaning Tenure</p>
                    </div>
                  </center>
                <a href="#">
                    </a>
  <?php 
  $loanamount =(float)$sata['loanamount'];
  $loaninterest =(float)$sata['loaninterest'];
  $loanterm =(float)$sata['loanterm'];
  
foreach ($data as $key => $value){?>
   
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
 
    <table class="table table-bordered">
                  <tbody><tr><td class="td-main-1" width="146">
                      <img src="images/logo-aditya-birla.png" class="img-responsive">
                      <p>{{ $value['Bank_Name']}}</p>
                    </td>
                    <td class="td-main">
                      <div class="loan-amt">
                        <p>LOAN AMOUNT</p>
                        <h6><?php echo $loanamount ?></h6>
                      </div>
                      <div class="loan-floating">
                        <p>FLOATING</p>
                        <h6><?php echo ($drop_in_int); ?></h6>
                      </div>
                    </td>
                    <td class="td-main">
                      <div class="loan-amt">
                        <p>EMI</p>
                        <h6><?php  echo number_format((float)$new_amount, 2, '.', ''); ?></h6>
                      </div>
                      <div class="loan-floating">
                        <p>PROCESSING FEE</p>
                        <h6>{{ $value['pf']}}</h6>
                      </div>
                    </td>
                    <td class="td-main">
                      <div class="loan-amt">
                        <p>EMI PER LAC</p>
                        <h6>815</h6>
                      </div>
                      <div class="loan-floating">
                        <p>TENURE</p>
                        <h6><?php echo $loanterm ?></h6>
                      </div>
                    </td>
                    <td class="td-main-1"><a href="{{URL::to('apply-home-loan')}}"> <img src="images/edit-home-icon.png" class="img-responsive"></a>
                    
                    </td>
                  </tr>
                            
              </tbody>
              </table>
          


<?php }?>