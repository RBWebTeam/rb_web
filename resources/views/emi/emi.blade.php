@include('layout.header')
<style>
  .rw-hei {height:360px;border: 2px dashed #ccc;border-right:none;}
  .brd-rgt {border-right: 2px dashed #ccc;}
  body {color:#666;}
  .tbl-clr {color:#fff; }
  .tbl-clr td {text-align:center;}
   .rw-hei p {font-size:16px;color:#999;}
   .rw-hei h1 {margin-top:10px;}
   .sub-title {color:#999;}
   .emi-cal {background:#333;padding:10px;display:block;color:#fff; text-align:center;}
   .mthy {Font-weight:bold;}
   .table-bordered>thead>tr>th {color:#fff;}
   .em1 {color:#c2da6b;}
   .em2 {color:#00B9B9;}
   .em3 {color:#4A9ACF;}
</style>
</head>
<body>
<center>
<div class="section-title"><h1>Personal Loan EMI Calculator</h1></div>
<p class="sub-title">Recalculate your Personal Loan EMI and Total Interest Due in a snap!</p>
<h3 class="section-title" id="emi-loan-header">Your Personal Loan Details</h3>
</center>

    <div class="container">
    <div class="row">
    <div class="col-sm-4 rw-hei" style="background-color:lavender;"><h3 class="emi-cal">EMI Calculator</h3>


    <div class="form-group">
       <label class="control-label" for="Loan Amount">Loan Amount:</label>
       <input type="number" name="loanamount" class="form-control" id="loanamount" placeholder="Loan Amount" value=""  onblur="myfun()">
    </div>
    <div class="form-group">
      <label class="control-label" for="Interest Rate">Interest Rate:</label>
      <input type="number" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Interest"  value="" onblur="myfun()">
    </div>
    <div class="form-group right-block">
       <label class="control-label" for="Loan Tenure">Loan Tenure:</label>
        <input type="number" name="loanterm" class="form-control" id="loanterm" placeholder="Loan Tenure" value="" onblur="myfun()">
    <br>
    <div class="btn-group">
          <label class="btn btn-primary"><input type="radio" name="Year" id="Year" value="" checked="checked">Yr</label>
             <label class="btn btn-primary"><input type="radio" name="Year" id="Month" value="">Mo</label>

    </div>
   
    
    </div>
     <p id="err" style="display:none;">Please Fill All Inputs
    </div>
    

   

    <div class="col-sm-4 rw-hei" style="background-color:lavenderblush;">
     <br><br>
     <center>
       <p>Loan EMI :</p>
       <h2 class="em1">₹ <b><span id="emi">0</span></b></h2>
       <p>Total Payable Interest :</p>
       <h2 class="em2">₹ <b><span id="emi1">0</span></b></h2>
       <p>Total Payment(Principal + Int) :</p>
       <h2 class="em3">₹ <b><span id="emi2">0</span></b></h2>
      </center>
    </div>

      
    
    <div class="col-sm-4 rw-hei brd-rgt" style="background-color:lavender"><h3><center>Break-up of Loan Details</center></h3>

           <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#c2da6b;"></i>&nbsp;<span>Loan EMI</span></div>
           <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#00B9B9;"></i>&nbsp;<span>Total Payable Interest</span></div>
           <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#4A9ACF;"></i>&nbsp;<span>Total Payment(Principal + Interest)</span></div>
       <div><center><canvas id="mycanvas" width="220" height="230"></div></canvas></center>
    </div>
    </div>
   </div>
<div class="container">

  <h2 class="text-center">Schedule showing payments:</h2>
    <table class="table table-bordered table-striped" id="emipaymenttable">

    <thead>
      <tr class="tbl-clr">
        <th bgcolor="#c2da6b" class="col-xs-3 col-md-1" id="yearheader">Year</th>

        <th bgcolor="#4A9ACF" class="col-sm-3 hidden-xs" id="principalheader"><center>Principal</center><center>(A)</center></th>
        
        <th bgcolor="2DC6D1" class="col-sm-3 hidden-xs" id="interestheader"><center>Interest</center><center>(B)</center></th>
        <th bgcolor="BF5850" class="col-sm-3 hidden-xs" id="totalheader"><center>Total Payment</center><center>(A+B)</center></th>
        <th bgcolor="D8BC31" class="col-xs-4 col-sm-3" id="balanceheader"><center>Balance</center></th>
        </tr>
    </thead>
    <tbody>
      
    </tbody>


  </table>
</div>

@include('layout.footer')
@include('layout.script')
<!-- //emi scripts started -->
<script type="text/javascript">

  $(document).ready(function(){
    $("#Month").change(function(){
      var amt = $("#loanterm").val();
      var month = amt *12;
      //console.log(month);
      $('#loanterm').val(month);
    });
    $("#Year").change(function(){
      var amt1 = $("#loanterm").val();
      var yr = amt1 / 12;
      //console.log(year);
      $('#loanterm').val(yr);
    });
    });
</script>

<script type="text/javascript">

  function myfun(){
    var lm = $("#loanamount").val().length;
       var lin = $("#loaninterest").val().length;
       var lt = $("#loanterm").val().length;
       if(lm >0 && lin >0 && lt>0){
      //  var loanamount = $("#loanamount").val();
      //  var loaninterest = $("#loaninterest").val();
      //  var loanterm = $("#loanterm").val();

      //  var monthlyInterestRatio = (loaninterest/100)/12;
  
      //  var top = Math.pow((1+loaninterest),loanterm);
      //  var bottom = top -1;
      //  var sp = top / bottom;
      //  var emi = ((loanamount * monthlyInterestRatio) * sp);
      //  console.log(emi);
      var loanamount = $("#loanamount").val();
      var loaninterest = $("#loaninterest").val();
      

      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
      }else{
        var loanterm = $("#loanterm").val();
      }
      //console.log(loanterm);
      var v_token = "{{csrf_token()}}";
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('emi_cal')}}",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm, '_token': v_token},
               success: function(msg){
                console.log(msg);
                change(msg.amount,msg.ttl_pay,msg.ttl_payment);
                emibreakup(msg.amount,loanamount,loaninterest,loanterm);
                 var numb = msg.amount.toFixed();
                  $('#emi').empty().append(numb);
                  var numb1 = msg.ttl_pay.toFixed();
                  $('#emi1').empty().append(numb1);
                   var numb2 = msg.ttl_payment.toFixed();
                  $('#emi2').empty().append(numb2);
                   $("#1").show();
                   $("#2").show();
                   $("#3").show();
                   //console.log(msg.saving);
               }  
               }); 
        //myfun1(document.getElementById('emi').innerHTML,document.getElementById('emi1').innerHTML,document.getElementById('emi2').innerHTML);
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }
  function change(a,b,c){
    //console.log(a);
      var ctx = $("#mycanvas").get(0).getContext("2d");
      //console.log(a);
        //pie chart data
        //sum of values = 360
        var data = [
          {
            value: a,
            color: "#c2da6b",
            highlight: "#c2da6b",
            label: "Loan EMI"
          },
          {
            value: b,
            color: "#00B9B9",
            highlight: "#00B9B9",
            label: "Total Payable Interest "
          },
          {
            value: c,
            color: "#4A9ACF",
            highlight: "#4A9ACF",
            label: "Total Payment(Principal + Interest)"
          }
        ];

        //alert("draw")
        var piechart = new Chart(ctx).Pie(data);
      }
       var month=new Array();

  month[0]="Jan",month[1]="Feb",month[2]="Mar",month[3]="Apr",month[4]="May",month[5]="Jun",month[6]="Jul",month[7]="Aug",month[8]="Sep",month[9]="Oct",month[10]="Nov",month[11]="Dec";
function emibreakup(E,P,r,n)

{// console.log(E);console.log(P);console.log(r);console.log(n);
    var start=new Date(),
    myArray = [], int =r/100, mir=int/12, mi='', map='',lP=P,
    xd='',
    tempDate = start, 
    monthCount = 1,
  fdr='<table><thead><tr><th bgcolor="#c2da6b" class="mthy">Month-Year</th><th bgcolor="4A9ACF" class="pa">Principal(A)</th><th bgcolor="2DC6D1" class="int">Interest(B)</th><th bgcolor="BF5850" class="tp">Total Payment(A + B)</th><th bgcolor="D8BC31" class="tbal">Balance</th></tr></thead><tbody>';
     
    var color='white';
    for(var i=0;i<n;i++)
    {

      if (tempDate.getFullYear()%2==0) 
      {
        //console.log(tempDate.getFullYear());

        color='lightblue';
      }
      else
      {
        //console.log("in else");
        color='#ffc8c4';
      }

        var e=tempDate.getMonth()+1;
        mi=lP*mir;
        map=E-mi;
        lP=lP-map;
        fdr+='<tr style="background-color:'+color+'"><td class="mthy">'+month[tempDate.getMonth()]+'-'+tempDate.getFullYear()+'</td><td class="pa"><span class="WebRupee"> ₹ </span>'+CommaFormatted(Math.round(E-mi))+'</td><td class="int"><span class="WebRupee">₹ </span>'+CommaFormatted(Math.round(mi))+'</td><td class="tp"><span class="WebRupee">₹ </span>'+CommaFormatted(Math.round(E))+'</td><td class="tbal"><span class="WebRupee"> ₹ </span>'+CommaFormatted(Math.round(lP))+'</td></tr>';
        tempDate.setMonth(e);
    }

    fdr+='</tbody></table>';
    $('#emipaymenttable').html(fdr);
}
  function CommaFormatted(amount) {
    var numberStr = amount.toString();
    var thousandsMatcher = /(\d+)(\d{3})$/;
    var thousandsAndRest = thousandsMatcher.exec(numberStr);
    if (!thousandsAndRest) return numberStr;
        return thousandsAndRest[1].replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + thousandsAndRest[2];
    }
  </script>
<!-- emi scripts end -->
