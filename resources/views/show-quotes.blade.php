@include('layout.header')
    <div id="fh5co-hero">
	<div class="container">
	<div class=" pad">
	<p class="text-left">home/{{$product}}</p>
    <h2 class="align-center loan-head">View Options</h2>
	</div>
   <div class="col-md-3 fadeInUp tbl fltr tbl1" style="display:none;">
    <h3>Filter</h3>
	<hr>
	<h4>Interest Type</h4>
	
	
	
	<hr>
	<h4>Min / Max Loan Requirment</h4>
	Filter by price interval: 
	<input type="hidden" name="min_value" id="min_value" value="">
 <hr>
 <h4>EMI Capacity</h4>
	<input type="hidden" name="min_value" id="min_value" value="">
	<hr>
	<h4>Bank Type</h4>
	<span><input type="radio" name="radio" />Private Bank</span><br>
	<span><input type="radio" name="radio" />PSU Bank </span>
	<hr>
	<h4>Max Tenure</h4>
	<span><input type="radio" name="radio" />3 Years</span><br>
	<span><input type="radio" name="radio" />4 Years</span><br>
	<span><input type="radio" name="radio" />5 Years</span>
	<hr>
	<h4>Processing Fee</h4>
	<input type="checkbox" name="1" />No Processing Fee
	<hr>
    </div>
    
	<div class="col-md-12 pad11">
    
    <div class="">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
    <td>Your Personal Loan Search for <b>5 Lakhs</b> Loan</td>
    <td><a class="default btn btn-primary" href="{{URL::to('test-personal-loan')}}">Modify Details</a></td>
    <td>sort by 
    <select>
        <option>Interest Rate</option>
        <option>10000</option>
        <option>20000</option>
        <option>30000</option>
        
    </select>
    </td>
    <td>Processing Fees 
    <select>
        <option>3000</option>
        <option>3000</option>
        <option>2000</option>
        <option>3000</option>
        
    </select></td>
  </tr>
</table>
</div>
@if(count($quote_data) > "")
@foreach($quote_data as $q) 
 <div class="table-responsive">
<table width="100%" border="1" class="tbl">
  <tr>
    <td width="9%" class="upper">Compare</td>
    <td width="16%" class="upper"><span style="color:red;">{{$q->Bank_Name}}</span></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><button>Apply Online</button></td>
  </tr>
  <tr>
    <td>
    <input type="checkbox" name="checkbox" value="{{$q->Bank_Name}}" class="{{$q->Bank_Id}}"  data-id="{{$q->Bank_Id}}"/></td>
    <td>Personal Loan</td>
    <td>{{$q->roi }}%</td>
    <td>{{$q->LoanRequired}}</td>
    <td>{{$q->emi}} (for {{$q->LoanTenure}} years)</td>
    <td rowspan="2"><strong>Specil Features:</strong>- Pre close Fee {{$q->Pre_Closer_Fixed}}%</td>
  </tr>
  <tr>
    <td><i class="icon-thumbs-up"></i></td>
    <td class="upper"><a href="#">Know More</a></td>
    <td>Processing Fee - INR {{$q->processingfee}} + ST</td>
    <td>Guarantor Required - {{$q->guarantor_required}}</td>
    <td>Instant Approval - {{$q->eApproval}}</td>
    </tr>
</table>
</div>
@endforeach
@else
<p style="text-align: center;">No Result Found</p>
@endif



	</div>
	</div>
</div>
	
<div class="container-fluid white-bg">	
<div class="container pad">
 <div class="col-md-12 animate-box fadeInUp animated col">
 <div class="col-md-4 img-c"><img src="images/compare-img.png"></div>

   <form action="#" method="post">

<div id="AllBank">

</div>
<!--   <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="images/axis.png" width="50" height="46">Axis Bank</div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="images/hdfc.png" width="50" height="46">HDFC Bank</div>
 -->
  <div class="col-md-2 comp-btn"><a href="#" class="btn btn-primary btn-outline with-arrow">Compare<i class="icon-arrow-right"></i></a></div>

 </form>

 </div>
</div>
</div>



@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
var clicks = 0;
var limit =4;
$('input[name="checkbox"]').change(function(){ 
  if($("input[name='checkbox']:checked").length >= limit) {
       this.checked = false;      

     
   }else{
      var id=$(this).attr("data-id");
  if (this.checked) {
       var id=$(this).attr("data-id");
       var span="<div class='col-md-2 col img-c white-bg' id='" +id + "'><span class='close btnspan' >×</span><img src='images/kotak.png' width='50' height='46'>" + this.value + "</div>";

           // var count=$(span).size();

        $("#AllBank").append(span);
  
  }else{
   
  $("#"+id).remove();

  }
   }
  
});

 
$(document).ready(function () {
    $(document).on('click', '.btnspan', function () {

         var id=$(this).closest("div").attr("id");
        $("."+id).attr('checked',false);
        $("#"+id).remove();
    

  });

});

</script>