@include('layout.header')
    <div id="fh5co-hero">
	<div class="container">
	<div class=" pad">

    <h2 class="align-center loan-head">View Options</h2>
	</div>

    
	<div class="col-md-12 pad11">
    
    <div class="">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
   <!--  <td>Your {{$home_loan}}  Search for --> 
  </tr>
</table>
</div>

 @foreach ($getQuery as $key=>$value)
    <div class="table-responsive">
	<table width="100%" border="1" class="tbl">
   
  

  <tr>
    <!-- <td width="9%" class="upper">Compare</td> -->
    <td><img src="{{ $value->Bank_Logo}}" width="100" height="30">{{$value->Bank_Name}}</td>
    <td width="16%" class="upper">Interest Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <?php $Loans=strtolower(str_replace(' ','-',$home_loan)); ?>
     
     <?php if($Loans=='lap'){?>

    <td width="17%"><h4><a href="{{url('apply-loan-against-property')}}">Apply Online</h4></a></td>

    <?php }else{?>
   <td width="17%"><h4><a href="{{url('apply-')}}<?php echo $Loans?>">Apply Online</a></h4></td>
    <?php }?>
  </tr>

  <tr>
<!--     <td><input type="checkbox" name="cehckbox"/></td> -->
    <td>{{$home_loan}}</td>
    <td>{{$value->roi}}</td>
    <td>{{$value->amt_from}}-{{$value->amt_to}}</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Special Features:-</strong> Pre close Fee 0%</td>
  </tr>
    <tr>
  <!--   <td><i class="icon-thumbs-up"></i></td> -->
    <td class="upper">  <button type="button" data-toggle="collapse" data-target="#{{$key}}">Know More</button><!-- <a href="#">Know More</a> --></td>
    <td>Processing Fee - INR {{$value->pf}} + ST</td>
    <td>Interest Paid - INR 50,000</td>
    <td>Max tenure - {{$value->Max_Tenure}}Years</td>
    </tr>

    
      
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