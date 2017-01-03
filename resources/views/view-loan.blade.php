@include('layout.header')
    <div id="fh5co-hero">
	<div class="container">
	<div class=" pad">
	<p class="text-left">home/{{$home_loan}}</p>
    <h2 class="align-center loan-head">View Options</h2>
	</div>

    
	<div class="col-md-12 pad11">
    
    <div class="">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
    <td>Your {{$home_loan}}  Search for <!-- <b>5 Lakhs</b> Loan</td> -->
  </tr>
</table>
</div>

 @foreach ($getQuery as $key=>$value)
    <div class="table-responsive">
	<table width="100%" border="1" class="tbl">
   
  

  <tr>
    <!-- <td width="9%" class="upper">Compare</td> -->
    <td><div class="img-c"><!-- <img src="{{url('images/axis.jpg')}}" width="100" height="30"> -->{{$value->Bank_Name}}</div></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <?php $Loans=strtolower(str_replace(' ','-',$home_loan));?>
     
     <?php if($home_loan=='apply-lap'){?>

    <td width="17%"><a href="{{url('loan-against-property')}}">Apply Online</a></td>

    <?php }else{?>
   <td width="17%"><a href="{{url('apply-')}}<?php echo $Loans?>">Apply Online</a></td>
    <?php }?>
  </tr>

  <tr>
<!--     <td><input type="checkbox" name="cehckbox"/></td> -->
    <td>{{$home_loan}}</td>
    <td>{{$value->roi}}</td>
    <td>{{$value->amt_from}}-{{$value->amt_to}}</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Specil Features:-</strong> Pre close Fee 0%</td>
  </tr>
    <tr>
  <!--   <td><i class="icon-thumbs-up"></i></td> -->
    <td class="upper">  <button type="button" data-toggle="collapse" data-target="#{{$key}}">Know More</button><!-- <a href="#">Know More</a> --></td>
    <td>Processing Fee - INR {{$value->pf}} + ST</td>
    <td>Intrest Paid - INR 50,000</td>
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
<!-- <div class="table-responsive">
<table width="100%" border="1" class="tbl">
  <tr>
    <td width="9%" class="upper">Compare</td>
    <td><div class="img-c"><img src="images/axis.jpg" width="100" height="30"></div></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><button>Apply Online</button></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="cehckbox"/></td>
    <td>Personal Loan</td>
    <td>15.20%</td>
    <td>150000</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Specil Features:</strong>- Pre close Fee 0%</td>
  </tr>
  <tr>
    <td><i class="icon-thumbs-up"></i></td>
    <td class="upper"><a href="#">Know More</a></td>
    <td>Processing Fee - INR 11200 + ST</td>
    <td>Intrest Paid - INR 50,000</td>
    <td>Max tenure - 2Years</td>
    </tr>


</table>
</div>
 -->




<!-- <div class="table-responsive">
<table width="100%" border="1" class="tbl">
  <tr>
    <td width="9%" class="upper">Compare</td>
    <td><div class="img-c"><img src="images/axis.jpg" width="100" height="30"></div></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><button>Apply Online</button></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="cehckbox"/></td>
    <td>Personal Loan</td>
    <td>15.20%</td>
    <td>150000</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Specil Features:</strong>- Pre close Fee 0%</td>
  </tr>
  <tr>
    <td><i class="icon-thumbs-up"></i></td>
    <td class="upper"><a href="#">Know More</a></td>
    <td>Processing Fee - INR 11200 + ST</td>
    <td>Intrest Paid - INR 50,000</td>
    <td>Max tenure - 2Years</td>
    </tr>
</table>
</div> -->

<!-- <div class="table-responsive">
<table width="100%" border="1" class="tbl">
  <tr>
    <td width="9%" class="upper">Compare</td>
    <td><div class="img-c"><img src="images/axis.jpg" width="100" height="30"></div></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><button>Apply Online</button></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="cehckbox"/></td>
    <td>Personal Loan</td>
    <td>15.20%</td>
    <td>150000</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Specil Features:</strong>- Pre close Fee 0%</td>
  </tr>
  <tr>
    <td><i class="icon-thumbs-up"></i></td>
    <td class="upper"><a href="#">Know More</a></td>
    <td>Processing Fee - INR 11200 + ST</td>
    <td>Intrest Paid - INR 50,000</td>
    <td>Max tenure - 2Years</td>
    </tr>
</table>
</div> -->

	</div>
	</div>
</div>
	
<div class="container-fluid white-bg">	
<div class="container pad">
 <div class="col-md-12 animate-box fadeInUp animated col">
 <div class="col-md-4 img-c"><img src="{{url('images/compare-img.png')}}"></div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button>
    <img src="{{url('images/kotak.png')}}" width="50" height="46">Kotak Mahindra Bank</div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="{{url('images/axis.png')}}" width="50" height="46">Axis Bank</div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="{{url('images/hdfc.png')}}" width="50" height="46">HDFC Bank</div>
  <div class="col-md-2 comp-btn"><a href="#" class="btn btn-primary btn-outline with-arrow">Compare<i class="icon-arrow-right"></i></a></div>
 </div>
</div>
</div>
@include('layout.footer')
@include('layout.script')