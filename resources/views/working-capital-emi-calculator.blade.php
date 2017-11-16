
@include('layout.header')
<br>
<div class="container" id="fh5co-hero">

  <center>
    <h1 class="loan-head">Working Capital   Calculator</h1>
    <!-- <p class="sub-title">Recalculate your Loan EMI and Total Interest Due in a snap!</p>  -->
  </center>
  <div class="row">

<form  id="calculator_form" name="calculator_form" method="post" action="calculator_form">
  {{ csrf_field() }}
    <div class="col-sm-4">
<<<<<<< HEAD
	  <div class="heigh-bt2 pad1 white brdr-blu">
=======
	  <div class="heigh-bt2 pad1 white">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
	<!--  <h3 class="emi-cal"><b>WC Calculator</b></h3> -->
	
      <div class="form-group">
       <label class="control-label" for="Loan Amount">Turnover/Topline</label>
       <input type="text" name="turnover" class="form-control" id="turnover" placeholder="Turnover/Topline" onkeypress="return workNumberKey(event,this)"    required > 
     </div>

 <div class="form-group">
       <label class="control-label" for="Loan Amount">Profit Before Tax</label>
       <input type="text" name="profitbefore" class="form-control" id="profitbefore" placeholder="Profit Before Tax" onkeypress="return workNumberKey(event,this)"    required > 
     </div>

     <div class="form-group">
      <label class="control-label" for="Interest Rate">Depreciation</label>
      <input type="text" name="depreciation"  class="form-control" id="depreciation" placeholder="Depreciation" onkeypress="return workNumberKey(event,this)" required >
    </div>

    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Finance Cost</label>
     <input type="text" name="financecost" class="form-control" id="financecost" placeholder="Finance Cost" onkeypress="return workNumberKey(event,this)"  required >
   </div>

   

   </div>
</div>
  
  
  <div class="col-sm-4">
<<<<<<< HEAD
	<div class="heigh-bt2 pad1 white brdr-blu">
=======
	<div class="heigh-bt2 pad1 white">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
      <div class="form-group">
       <label class="control-label" for="Loan Amount">Inventory</label>
       <input type="text" name="inventory" class="form-control" id="inventory" placeholder="Inventory" onkeypress="return workNumberKey(event,this)" required > 
    </div>

     <div class="form-group">
      <label class="control-label" for="Interest Rate">Debtors</label>
      <input type="text" name="debtors"   class="form-control" id="debtors" placeholder="Debtors" onkeypress="return workNumberKey(event,this)"  required >
    </div>
    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Creditors</label>
     <input type="text" name="creditors" class="form-control" id="creditors" placeholder="Creditors" onkeypress="return workNumberKey(event,this)" required >
	 </div>
	 
	 <div class="form-group">
      <label class="control-label" for="Interest Rate">Existing OD/CC</label>
      <input type="text" name="existing"   class="form-control" id="existing" placeholder="Existing OD/CC" onkeypress="return workNumberKey(event,this)"   required >
    </div>
     <div>

	   <button type="submit" class="btn btn-primary pull-left" id="calculator_id">Submit</button>
    </div>
   
  </div>
  </div>
  
  </form>
  
 <div class="col-sm-4 brd-rgt">
<<<<<<< HEAD
  <div class="heigh-bt2 pad1 white brdr-blu">
=======
  <div class="heigh-bt2 pad1 white">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
 <h3 class="emi-cal"><b>Eligible Loan Amount</b></h3>

    <center><h3 id="proposedlimit_ID" style="color: red; margin: 116px 10px 20px 40px "></h3></center>
   
 </div>
 </div>

</div>
</br>
</div>

<script type="text/javascript">
  
    function workNumberKey(evt,val){

      // var charCode = (evt.which) ? evt.which : evt.keyCode;
      // if (charCode != 46 && charCode > 31  && (charCode < 48 || charCode > 57) ||  charCode=="" )
      //  return false;
              var charCode = (evt.which) ? evt.which : evt.keyCode;
          switch (charCode){
        case 45:
           // return val.value.length == 0 ? true : false;
            break;
        case 48:
        case 49:
        case 50:
        case 51:
        case 52:
        case 53:
        case 54:
        case 55:
        case 56:
        case 57:
            return true;
            break;
        default:
            return false;
            break;
    }

     
   }
</script>

@include('layout.footer')
@include('layout.script') 
<script type="text/javascript">
  $(document).ready(function(){
    $('#calculator_id').on('click',function(e){
      e.preventDefault();
        if(!$('#calculator_form').valid()){
              return false;
        }else{
           $.ajax({  
             type: "POST",  
             url: "{{URL::to('api/working-capital-emi-calculator-api')}}",
             data : $("#calculator_form").serialize(),
             dataType: 'json',
             success: function(msg){ 
                 if(msg.statusid==0){
                      
                        $('#proposedlimit_ID').empty().append('<i class="fa fa-inr" aria-hidden="true"></i> '+parseInt(msg.data['proposedlimit']));
                       
                 }else if(msg.statusid==1){
                  $('#proposedlimit_ID').empty().append("Proposed limit reject..");
                 }

            }


          });
     
        }
        
    })   

  });
</script>
