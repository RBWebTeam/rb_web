@include('layout.header')
<br>
<div class="container" id="fh5co-hero">


<!DOCTYPE html>
<html lang="en">
<head>
<title>Application Form</title>
<!-- meta data -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- css files -->
<link href="css/ganeshchaturthi_offer/css/style1.css" type="text/css" rel="stylesheet" media="all">   
<!-- //css files -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
<style>
  .pad {padding:20px;background:#fff; border:10px solid #f8f8f8;mrg-top:margin-top:40px 60px;box-shadow:1px 1px 3px 1px #999;} 
  body {font-family:arial;
  background:url("images/ganeshchaturthi/landmark.jpg"); repeat-x;
}
.text-center {padding:20px;display:block;}
.hy-lnk 
{
    color:#333333;
    width: 150px;
    height: 150px;
    padding:10px;
    text-align: center;
    border-radius: 50%;
    border: 10px solid #f1f1f1;
    display: block;
    cursor: pointer;
    margin-bottom: 10px;
    background:#ffe9e9;
    font-size:13px;
    text-transform:uppercase;
    border: 10px solid #fbe6e6;
    transition:all 0.3s linear;
    -moz-transition:all 0.3s linear;
    -webkit-transition:all 0.3s linear;
}
.hy-lnk:hover {background:#fff;padding:10px;border:1px solid #ffe9e9; box-shadow:1px 1px 3px 1px #999;transition:all 0.3s linear;-moz-transition:all 0.3s linear; -webkit-transition:all 0.3s linear;}
.tit {padding:10px; margin:15px 0px;border-bottom:1px dashed #eee; float:left;width:100%;font-size:20px;}
.hy-lnk p {margin-top:42px !important;margin: 0px}
.center-alig input {margin:0 auto;display:block; width:100%;}
.hy-lnk input {visibility:hidden; position: absolute;}


@media only screen and (max-width:768px) {
    .pad {
        float: left;
		padding:2px;
		
    }
	.btn.with-arrow {
    float: left;
    width: 100%;
	}
	.container {
		    padding: 4px !important;
	}
	#application_submit {display:block;}
}
</style>
</head>
<!-- body starts -->
<body>
<!-- section -->
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6 pad mrg-top">
<section class="application">
    <div class="application-full">
        
        <div class="application-right">
            <div class="application-in">
                <h2>Application Form</h2>
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
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company "><p><input type="radio" name="Status" id="option1">Landmark</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company "><p><input type="radio" name="Status" id="option1">DC</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company" ><p><input type="radio" name="Status" id="option1">Intersteller</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company"><p><input type="radio" name="Status" id="option1">Rupeeboss</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary company"><p><input type="radio" name="Status" id="option1">Landmark Auto</p></span></div>
                        </div>
                        <br>
                        <div class="btn-grp" data-toggle="buttons">
                        <p class="text-center tit">Click One of Them</p>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><p><input type="radio" name="Status" id="option1">Early Salary</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><p><input type="radio" name="Status" id="option1">Credit Card</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><p><input type="radio" name="Status" id="option1">Low Cost</p> Housing Finance</span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><p><input type="radio" name="Status" id="option1">Balance Transfer</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><p><input type="radio" name="Status" id="option1">Personal Loan</p></span></div>
                        <div class="col-md-4 col-xs-6"><span class="hy-lnk btn btn-primary product"><p><input type="radio" name="Status" id="option1">Credit sudhar</p></span></div>
                        </div>
                        
                        
                        <div class="col-md-12"><a class="btn btn-danger btn-outline with-arrow mrg-top" id="application_submit">Submit <i class="icon-arrow-right"></i></a></div>
                    </form>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    <div class="clear"> </div>
    </div>

</section>
</div>
</div>
<!-- //section -->
</body> 
<!-- //body ends -->
</html>

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

                           window.location.href ="{{URL::to('contact-us?CampaignName=GaneshChaturthi')}}";
                          } else if(product =='Credit sudhar'){
                             window.location.href ="{{URL::to('contact-us?CampaignName=GaneshChaturthi')}}";

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

