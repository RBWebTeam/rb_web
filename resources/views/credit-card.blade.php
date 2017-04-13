@include('layout.header')

  
  <div id="fh5co-hero">
    <div class="container animate-box" id="fh5co-services-section">
       <div class="row">
          <div class="col-md-12">
         <h2 class="align-center loan-head">Credit Cards</h2>
    </div>
  <div class="row">
  <div class="col-md-12">
        <div class="col-md-4">
            <div class="desc">
            <a href="{{url('credit-card-compare/rbl')}}"> <img src="images/rbl_credit-crd.jpg" alt="RBL Credit Cards" title="RBL Credit Cards" class="img-responsive box-shadow"/></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="desc">
              <a href="{{url('credit-card-compare/icici')}}"> <img src="images/icici_credit-crd.jpg" alt="ICICI Credit Cards" title="ICICI Credit Cards"  class="img-responsive box-shadow"/></a>
          </div>
        </div>
        <div class="col-md-4">
            <div class="desc">
              <a href="{{url('credit-card-compare/hdfc')}}">  <img src="images/hdfc_credit-crd.jpg" alt="HDFC Credit Cards" title="HDFC Credit Cards" class="img-responsive box-shadow"/></a>
            </div>
        </div>
   </div>
        </div> 
      </div>
    </div>  
</div>
<br>
<?php
          $myString = isset($_GET['referrer']);
          // 
          if($myString){
            
            $myArray = explode('@', $_GET['referrer']);
            if(isset($myArray[0])){
              Session::put('empid', $myArray[0]);
              $empid = Session::get('empid');
             
            }else{
              $empid="";
            }
            if(isset($myArray[1])){
             Session::put('brokerid', $myArray[1]);
              $brokerid = Session::get('brokerid');
            }else{
              $brokerid="";
            }
            if(isset($myArray[2])){
              Session::put('source', $myArray[2]);
              $source = Session::get('source');
            //$a= str_replace('�', '', $brokerid);
            // echo $empid;
             //print_r($a);
          }else{
              $source="";
            }
        }else{
            $empid = Session::get('empid')?Session::get('empid'):'';
            $brokerid =Session::get('brokerid')?Session::get('brokerid'):'';
            $source =Session::get('source')?Session::get('source'):'';
          }
          
          ?>

         
	

@include('layout.footer')
@include('layout.script')
