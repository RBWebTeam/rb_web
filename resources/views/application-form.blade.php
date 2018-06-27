@include('layout.header')

<!-- css files -->
<link href="css/ganeshchaturthi_offer/css/style1.css" type="text/css" rel="stylesheet" media="all">   
   
<style>
 /* .pad {padding:20px;background:#fff; border:10px solid #f8f8f8;mrg-top:margin-top:40px 60px;box-shadow:1px 1px 3px 1px #999;} 
  body {font-family:arial;
  background:url("images/ganeshchaturthi/landmark.jpg"); repeat-x;
}*/
body {background:#f5f5f5 !important;}
.text-center {padding:20px;display:block;}
.hy-lnk 
{
    color:#333333;
    width: 130px;
    height: 130px;
  
    text-align: center;
    border-radius: 50%;
   
  
    cursor: pointer;
    margin-bottom: 10px;
    background:#ffe9e9;
    font-size:13px;
    text-transform:uppercase;
  
    transition:all 0.3s linear;
    -moz-transition:all 0.3s linear;
    -webkit-transition:all 0.3s linear;
}
.hy-lnk:hover {background:#ff0000;border:1px solid #ffe9e9; box-shadow:1px 1px 3px 1px #999;transition:all 0.3s linear;-moz-transition:all 0.3s linear; -webkit-transition:all 0.3s linear;}
.tit {padding:10px; margin:15px 0px;border-bottom:1px dashed #eee; float:left;width:100%;font-size:20px;}
.fa-building {margin-top:15px;font-size:25px; color:#999; margin-bottom:5px;}
.hy-lnk:hover .fa-building {color:#fff;}
.hy-lnk:active .fa-building {color:#fff;}
.hy-lnk p {margin: -2px !important; text-align:center;}
.center-alig input {margin:0 auto;display:block; width:100%;}
.hy-lnk input {visibility:hidden; position: absolute;}

@media only screen and (max-width:768px) {
    .pad {
        float: left;
		padding:2px;
		
    }
    .col-md-12 {padding:0px !important;}
    .heading-1 {width:100%;display: contents;} 
	.btn.with-arrow {
    float: left;
    width: 100%;
	}
	.container {
		    padding: 4px !important;
	}

	#application_submit {display:block;}
} 
.box-shadow {box-shadow:1px 1px 3px 1px #ccc;}
.mrg-btm {margin-bottom: 20px;}
.pad {padding:15px; margin-top:0px;}
.wrapper-content {margin-top: -50px; float:left;}
.mrg-btm {margin-bottom:20px;}
#application_submit {float:left;}
</style>
<!-- body starts -->
<body>
<!-- section -->
<br>
<div class="container">
<div class="col-md-12">
<div class="wrapper-content bg-white pinside40">
<div class="col-md-6 col-md-offset-3 pad mrg-top box-shadow">
<section class="application">
    <div class="application-full">
        
        <div class="application-right">
            <div class="application-in">
                <h3 class="pad bg-danger text-center mrg-btm heading-1">Application Form</h3>
                <div class="application-form">
                    <form action="application_form" id="application_form" method="POST">
                    {{ csrf_field() }}
                        <div class="fields-grid">
                        <input type="hidden" name="Company" id="company" value="">
                        <input type="hidden" name="Product" id="product" value="">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Full_Name" id="full_name" onkeypress="return AllowAlphabet(event)" required=""> 
                                <label>Full name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="tel" name="Mobile_No" id="mobile_no" onkeypress="return fnAllowNumeric(event)" maxlength="10" required="">
                                <label>Phone Number</label>
                                <span></span>
                            </div>
                            <div class="styled-input"> 
                                <input type="email" name="Email" id="email" oninput="mail('email')" required="">
                                <label>Email</label>
                                <span></span>
                                <div id="e_mail" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Net_Salary" id="net_salary" onkeypress="return fnAllowNumeric(event) minlength="5" maxlength="9" required=""> 
                                <label>Net Salary</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="btn-grp" data-toggle="buttons">
                        <p class="text-center tit">Click One of Them</p>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company ">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <p><input type="radio" name="Status" id="option1">Landmark</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company "><i class="fa fa-building" aria-hidden="true"></i>
                        <p><input type="radio" name="Status" id="option1">DC</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company" ><i class="fa fa-building" aria-hidden="true"></i>
                        <p><input type="radio" name="Status" id="option1">Intersteller</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company"><i class="fa fa-building" aria-hidden="true"></i>
                        <p><input type="radio" name="Status" id="option1">Rupeeboss</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company"><i class="fa fa-building" aria-hidden="true"></i>
                        <p><input type="radio" name="Status" id="option1">Landmark</p><p>Auto</p></span></div>
                        </div>
                        <br>
                        <div class="btn-grp" data-toggle="buttons">
                        <p class="text-center tit">Click One of Them</p>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><img src="images/application-form/early_Salary.png"><p><input type="radio" name="Status" id="option1">Early</p><p>Salary</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><img src="images/application-form/credit_card.png"><p><input type="radio" name="Status" id="option1">Credit</p><p>Card</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><img src="images/application-form/H_lone.png"><p><input type="radio" name="Status" id="option1">Low Cost</p> <p>Housing</p><p>Finance</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><img src="images/application-form/balance_transfer.png"><p><input type="radio" name="Status" id="option1">Balance </p><p>Transfer</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><img src="images/application-form/personal_loan.png"><p><input type="radio" name="Status" id="option1">Personal</p><p>Loan</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><img src="images/application-form/credit_sudhar.png"><p><input type="radio" name="Status" id="option1">Credit</p><p>Sudhar</p></span></div> 
                        </div>
                        
                        
                        <div class="col-md-12"><a class="btn btn-default btn-sm mrg-top mrg-btm" id="application_submit">Submit</a><br>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    <div class="clear"> </div>
    </div>
    </div>
</section>
</div>
</div>
</div>
<!-- //section -->
</body> 
<!-- //body ends -->


</div>
<br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>

<script type="text/javascript">
  function mail(obj,val){
     // console.log(val);
    if(obj=='email' ){
                   var str =$('#email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#e_mail').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#e_mail').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
var company;
var product;
    $('.company').click(function(){

        company =$(this).text();
      //alert(company);

    });
</script>

<script type="text/javascript">
    $('.product').click(function(){

       product =$(this).text();
        // alert(product);
    });
</script>

<script type="text/javascript">
    $('#application_submit').click(function(){
     //alert(product);

            $('#company').val(company);
            $('#product').val(product);

      if(! $('#application_form').valid())
       {
              // alert('not valid');
        }
        else
        {   
            $.ajax({  
             type: "POST",  
             url: "{{URL::to('application-submit')}}",
             data : $('#application_form').serialize(),
             success: function(msg){
                  console.log(msg);
                if(msg==1){
                         if (product == 'Low Cost Housing Finance') {
                           window.location.href ="{{URL::to('thank-you?CampaignName=GaneshChaturthi')}}";
                          } else if(product =='Credit sudhar'){
                             window.location.href ="{{URL::to('thank-you?CampaignName=GaneshChaturthi')}}";
                          }else if(product== 'Early Salary') {
                            window.location.href ="{{URL::to('early-salary?CampaignName=GaneshChaturthi')}}";
                          }else if(product =='Credit Card'){
                             window.location.href ="{{URL::to('credit-card?CampaignName=GaneshChaturthi')}}";
                         }else if(product =='Balance Transfer'){
                            window.location.href ="{{URL::to('magic-link?CampaignName=GaneshChaturthi')}}";
                        }else{
                          window.location.href ="{{URL::to('apply-iifl-loan?CampaignName=GaneshChaturthi')}}";  
                        }
                    }else{
                        alert("Oops!! Something Went Wrong");
                    }
            }  
          });   
     
        

           
        
     }
    });
</script>

