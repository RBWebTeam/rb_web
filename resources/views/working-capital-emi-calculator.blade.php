
@include('layout.header')
<br>
<div class="container" id="fh5co-hero">

  <center>
    <h1 class="loan-head">Working Capital EMI Calculator</h1>
    <!-- <p class="sub-title">Recalculate your Loan EMI and Total Interest Due in a snap!</p>  -->
  </center>
  <div class="row">

<form  id="calculator_form" name="calculator_form" method="post" action="calculator_form">
  {{ csrf_field() }}
    <div class="col-sm-4">
	  <div class="heigh-bt2 pad1 white">
	<!--  <h3 class="emi-cal"><b>WC Calculator</b></h3> -->
	
      <div class="form-group">
       <label class="control-label" for="Loan Amount">Turnover/Topline</label>
       <input type="text" name="fturnover" class="form-control" id="fturnover" placeholder="Turnover/Topline" onkeypress="return isNumberKey(event)"    required > 
     </div>

 <div class="form-group">
       <label class="control-label" for="Loan Amount">Profit Before Tax</label>
       <input type="text" name="fprofitbefore" class="form-control" id="fprofitbefore" placeholder="Profit Before Tax" onkeypress="return isNumberKey(event)"    required > 
     </div>

     <div class="form-group">
      <label class="control-label" for="Interest Rate">Depreciation</label>
      <input type="text" name="fdepreciation"  class="form-control" id="fdepreciation" placeholder="Depreciation" onkeypress="return isNumberKey(event)" required >
    </div>

    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Finance Cost</label>
     <input type="text" name="financecost" class="form-control" id="financecost" placeholder="Finance Cost" onkeypress="return isNumberKey(event)"  required >
   </div>

   

   </div>
</div>
  
  
  <div class="col-sm-4">
	<div class="heigh-bt2 pad1 white">
      <div class="form-group">
       <label class="control-label" for="Loan Amount">Inventory</label>
       <input type="text" name="finventory" class="form-control" id="finventory" placeholder="Inventory" onkeypress="return isNumberKey(event)" required > 
    </div>

     <div class="form-group">
      <label class="control-label" for="Interest Rate">Debtors</label>
      <input type="text" name="fdebtors"   class="form-control" id="fdebtors" placeholder="Debtors" onkeypress="return isNumberKey(event)"  required >
    </div>
    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Creditors</label>
     <input type="text" name="fcreditors" class="form-control" id="fcreditors" placeholder="Creditors" onkeypress="return isNumberKey(event)" required >
	 </div>
	 
	 <div class="form-group">
      <label class="control-label" for="Interest Rate">Existing OD/CC</label>
      <input type="text" name="fexisting"   class="form-control" id="fexisting" placeholder="Existing OD/CC" onkeypress="return isNumberKey(event)"   required >
    </div>
     <div>

	   <button type="submit" class="btn btn-primary pull-left" id="calculator_id">Submit</button>
    </div>
   
  </div>
  </div>
  
  </form>
  
 <div class="col-sm-4 brd-rgt">
  <div class="heigh-bt2 pad1 white">
 <h3 class="emi-cal"><b>Eligible Loan Amount</b></h3>

    <center><h1 id="proposedlimit_ID" style="color: red"></h1></center>
   
 </div>
 </div>

</div>
</br>
</div>


@include('layout.footer')
@include('layout.script') 




<script type="text/javascript">

  
   var turnover=0;
   var profitbefore=0;
   var depreciation=0;
   var financecost=0;
   var inventory=0;
   var debtors=0;
   var creditors=0;
   var existing=0;  

   var turnovertemp =0;
   var temp =0;
   var proposedlimit =0;

  $(document).ready(function(){
    $('#calculator_id').on('click',function(e){
      e.preventDefault();
      
        if(!$('#calculator_form').valid()){
              
              return false;
        }else{


           $.ajax({  
             type: "POST",  
             url: "{{URL::to('working-capital-emi-calculator-api')}}",
             data : $("#calculator_form").serialize(),
            dataType: 'json',
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){ 
                 
                 if(msg.status==1){

                    $('#proposedlimit_ID').text(msg.data['proposedlimit']);

                 }
            }


          });
          // turnover     =$('#fturnover').val();
          // profitbefore =$('#fprofitbefore').val();
          // depreciation =$('#fdepreciation').val();
          // financecost  =$('#financecost').val();
          // inventory    =$('#finventory').val();
          // debtors      =$('#fdebtors').val();
          // creditors    =$('#fcreditors').val();
          // existing     =$('#fexisting').val();

       


        }
        
    })   

  });
</script>
