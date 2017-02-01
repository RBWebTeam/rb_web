@include('layout.header')
    <div id="fh5co-hero">
	<div class="container">
	<div class=" pad">

    <h2 class="align-center loan-head">View Options</h2>
	</div>

    
	<div class="col-md-12 pad11">
    
    

 @foreach ($getQuery as $key=>$value)
    <div class="table-responsive outer-brd">
	<table width="100%" border="1" class="tbl">
   

  <tr>    
    <td class="bdr-btm"><center><img src="{{ $value->Bank_Logo}}" width="130" ></center></td>

   
        <td width="16%" class="upper bdr-btm"> Loan Amount </td>
    <td width="16%" class="upper bdr-btm">Loan Tenure</td>
    <td width="16%" class="upper bdr-btm">Processing Fee</td>
    <td width="18%" class="upper bdr-btm">Interest Rate</td>



    <?php $Loans=strtolower(str_replace(' ','-',$home_loan)); ?>
     <?php if($Loans=='lap'){?>
    <td width="17%" class="blue-bg"><h4><a href="{{url('apply-loan-against-property')}}" class="apply-btn">Apply Online</h4></a></td>
    <?php }else{?>
   <td width="17%" class="blue-bg"><h4><a href="{{url('apply-')}}<?php echo $Loans?>" class="apply-btn">Apply Online</a></h4></td>
    <?php }?>
  </tr>

  <tr>
     <td class="upper">  <button type="button" data-toggle="collapse" data-target="#{{$key}}">Know More</button></td>
     <td>{{(int)$value->amt_from }}-{{(int)$value->amt_to}}</td>
     <td> {{$value->Min_Tenure}}-{{$value->Max_Tenure}} Years</td>
     <td>{{$value->pf}} %</td>
     <td>{{$value->roi}}%</td>

     <td></td>
  </tr>,

  

    
      
 <table>
<div id="{{$key}}" class="collapse" style="background-color: #F6F6F6; width: 100%;height: auto;"> 
  <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> No guarantor required</li>
          <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> No pre-closure and part payment fee
            <mark style="color: red">Special offers are available for women applicants at a lower rate</mark></li>
          <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Age at least 18 and less than 60</li>
           <li class="list-group-item"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Salaried / Self - Employed with regular income,Earn more than the minimum income required</li>
  </div>
   </table>
</table>
</div>
@endforeach
	</div>
	</div>
</div>
	

@include('layout.footer')
@include('layout.script')