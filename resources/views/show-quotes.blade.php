@include('layout.header')

    <div id="fh5co-hero" class="fclass" style="display:block;">
	<div class="container" >

	<div class=" pad">
<!-- 	<p class="text-left">home/{{$product}}</p> -->
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
    
	<div class="pad11">
    
    <div class="table-responsive">
    <table width="100%" border="1" class="tbl">
  <tr>
    <td>Your {{$product}} Search for <b>{{$loan_amount}} Lakhs</b> Loan</td>
    <td><a class="default btn btn-primary" href="<?php echo $url;?>">Modify Details</a></td>
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
    <td width="16%" class="upper"><span style="color:red;"><img src="{{$q->Bank_Logo}}" class="img-responsive"></span></td>
    <td width="16%" class="upper">Interest Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><a class="btn btn-success" 
    href="{{URL::to('apply-lead-online')}}?appid=0&qoutid={{$quote_id}}&BankId={{$q->Bank_Id}}">Apply Online</a></td>
  </tr>
  <tr>
    <td>
    <input type="checkbox" name="checkbox" value="{{$q->Bank_Name}}"  class="{{$q->Bank_Id}}"  data-id="{{$q->Bank_Id}}"/></td>
    <input type="hidden" name="logo" class="logo" value="{{$q->Bank_Logo }}">
    <input type="hidden" name="interst" class="interst" value="{{$q->roi }}">
    <input type="hidden" name="LoanRequired" class="LoanRequired" value="{{$q->LoanRequired }}">
    <input type="hidden" name="emi" class="emi" value="{{$q->emi }}">
    <input type="hidden" name="LoanTenure" class="LoanTenure" value="{{$q->LoanTenure }}">
   <input type="hidden" name="Pre_Closer_Fixed" class="Pre_Closer_Fixed" value="{{$q->Pre_Closer_Fixed }}">

    <input type="hidden" name="processingfee" class="processingfee" value="{{$q->processingfee }}">
    <input type="hidden" name="url" class="url" value="{{URL::to('apply-lead-online')}}?appid=0&qoutid={{$quote_id}}&BankId={{$q->Bank_Id}}">


    <td >{{$product}}</td>
    <td >{{$q->roi }}%</td>
    <td >{{$q->LoanRequired}}</td>
    <td >{{$q->emi}} (for {{$q->LoanTenure}} years)</td>
    <td   rowspan="2"><strong>Special Features:</strong>- Pre close Fee {{$q->Pre_Closer_Fixed}}%</td>
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
	


<div class="container-fluid white-bg"  id="compID" style=" display: block;">	
<div class="container pad">
 <div class="col-md-12 animate-box fadeInUp animated col">
 <div class="col-md-4 img-c"><img src="images/compare-img.png"></div>

   

<!-- <div id="AllBank">
</div><form   method="post" name="compareform" id="compareform" action="compare">
<input type="hidden" id='_token' name="_token" value="{{csrf_token()}}">

 -->
<!--   <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="images/axis.png" width="50" height="46">Axis Bank</div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="images/hdfc.png" width="50" height="46">HDFC Bank</div> </form>
 -->
 <div id="AllBank" ></div>
  <div style="display: none"  id="btncompare" class="col-md-2 comp-btn"><a class="btn btn-primary btn-outline with-arrow comparebutton">Compare<i class="icon-arrow-right"></i></a></div>



 
<!-- <div class="table-responsive">
<table  id="tables"  width="100%" border="1" class="table-bordered">

<tbody style='float:left;'>
<tr><td>Bank Name </td></tr>
<tr><td>Loan Amount</td></tr>
<tr><td>Rate</td></tr>
<tr><td>EMI</td></tr>
<tr><td>Processing Fee</td></tr>
<tr><td>Pre closed Fee</tr></td>
</tbody>

</table >
</div> -->


 </div>
</div>

</div>

<!--compare page-->

<div id="fh5co-hero" style="display:none;top: auto;" class="fclass1">
  <div class="animate-box"  >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
        <p class="text-left"><!-- <a href="{{URL::to('/')}}">Home</a>/Compare</p> -->
          <h2>Compare</h2>
          </div>  
        <div class="col-md-12">
          <div class="row pad11 white-bg comp-pg">
  <div class="table-responsive" >
  <a href="#" id="backid" class="btn btn-primary btn-outline with-arrow ">Back</a>
<table   id="tables"   border="1" style="margin: auto;">

<tbody style='float:left;''>
<tr><td><b>Bank Name</b></td></tr>
<tr><td><b>Loan Amount</b></td></tr>
<tr><td><b>Rate</b></td></tr>
<tr><td><b>EMI</b></td></tr>
<tr><td><b>Processing Fee</b></td></tr>
<tr><td><b>Pre closed Fee</b></td></tr>
</tbody>
</table>
</div>
   
</div>
</div>
</div>
</div>
</div>
</div>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
var clicks = 0;
var limit =4;
var array=[];

var max = 2;
var x = 0;
var ids=0;
$('input[name="checkbox"]').change(function(){ 
  if($("input[name='checkbox']:checked").length >= limit) {
       this.checked = false;      

    
   }else{
   var id=$(this).attr("data-id");
   var tid=id;
   var closest=$(this).closest('tr');
   var logo =closest.find('.logo').val();
   var pinterst =closest.find('.interst').val();
   var LoanRequired =closest.find('.LoanRequired').val();
   var processingfee =closest.find('.processingfee').val();
   var emi =closest.find('.emi').val();
   var LoanTenure =closest.find('.LoanTenure').val();
   var Pre_Closer_Fixed =closest.find('.Pre_Closer_Fixed').val();
   var url = closest.find('.url').val();

  // <input type='hidden' name='pinterst[]' id='"+pinterst+"' value='"+pinterst+"' >

  if (this.checked) {

       var span="<div class='col-md-2 col img-c white-bg' id='" +id + "'><input type='hidden' name='bank_id[]' id='"+id+"' value='"+id+"' ><span class='close btnspan' >×</span><img src='"+logo+"'class='img-responsive' width='100' height='80'>" + this.value + "</div>";

       var  tables="<tbody style='float:left;' id='" +tid+ "'><tr><td>"+this.value+"</td></tr><tr><td>"+LoanRequired+"</td></tr><tr><td>"+pinterst+"</td></tr><tr><td>"+emi+"(for "+LoanTenure +" years)</td></tr><tr><td>"+processingfee+"</td></tr><tr><td>"+Pre_Closer_Fixed+" %</td></tr><tr><td><a href='"+url+"' class='btn btn-primary btn-outline'>Apply Now</a></td></tr></tbody>" ;

          if(x==2){
            $('#btncompare').show();} x++;
            $("#AllBank").append(span);
            $("#tables").append(tables);
            }else{
            $("#"+id).remove();
            $("#"+tid).remove();
            if(x!=2){
            $('#btncompare').hide();}x--;
       }
   }
  
});

//  if bank name cut  than remove bank name and unselect check box
$(document).ready(function () {
    $(document).on('click', '.btnspan', function () {
         var id=$(this).closest("div").attr("id");
         var tid=id;
                $("."+id).attr('checked',false);
                $("#"+id).remove();
                 $("#"+tid).remove();
                if(x!=2){
                $('#btncompare').hide(); 
      }x--;
  });

});

// show hide btn
$(document).on('click','#btncompare',function(e){
$('.fclass1').show();
$("html, body").animate({
        scrollTop: 0
    }, 600);
$('.fclass').hide();
$('#compID').hide();
});
$(document).on('click','#backid',function(e){
$('.fclass1').hide();
$('.fclass').show();
$('#compID').show();
});


// $(document).on('click','.comparebutton',function(e){
// e.preventDefault();
//   var form=$(this).closest("form").attr("id");

//      $.ajax({  
//                type: "POST",  
//                url: "{{URL::to('compare')}}",
//                data : $('#'+form).serialize(),
//               // dataType: 'json',
//                success: function(msg){  

            
//                alert(msg); 


//                }  
//            }); 

// });

</script>