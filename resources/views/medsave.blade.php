<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>medSAVE</title>
<link rel="stylesheet" type="text/css" href="http://www.rupeeboss.com/css/home.css">
<link rel="stylesheet" type="text/css" href="http://www.rupeeboss.com/css/mysite.css">

<style>
/* medSAVE CSS Start **********************************/
	.blu-bg {background:#2e3779;padding:50px 20px;height:158px;border:8px solid #2e3779;}
	.blu-bg h2 {color:#fff;}
	.yell-bg {background:#e87f27;padding: 50px 20px;height:158px;border:8px solid #e87f27;}
	.yell-bg h2 {color:#fff;}
	.blu-heding {padding:30px;color:#00b6e5;}
	
	.red-bg1 {background:#ed2121;padding: 50px 20px; height:158px;border:8px solid #ed2121;}
	.red-bgg{background:#ed2121 !important;}
	.red-bg1 h2 {color:#fff;}
	.sim-button {margin-top:-41px;margin-left: -12px; border-radius:60%;position: absolute;padding: 48px 20px;text-align: center;color:#333; background:#fff; auto;cursor: pointer;-webkit-transition: all 0.5s;-moz-transition: all 0.5s;-o-transition: all 0.5s;transition: all 0.5s;}
	.sim-button span {margin:0 auto; display:block;}
	
	.button5{
	color:#333;
	display:none;
	position:absolute;
	font-size:13px;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
	border: 1px solid rgba(255,255,255,0.5);
	
}
.button5 a{
	color: rgba(51,51,51,1);
	text-decoration: none;
	display: block;
}
.button5:hover{
     color:#fff;
	-webkit-animation-name: jello;
	animation-name: jello;
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	background-color: rgba(255,255,255,0.2);
	
}
.desc1 {margin:0 auto; display:block; -webkit-transition: all 0.5s;-moz-transition: all 0.5s;-o-transition: all 0.5s;transition: all 0.5s; width:150px;height:150px;border-radius:60%;}
.desc1 h2 {text-align:center;line-height:35px;}
.desc1:hover .button5 {display:block;-webkit-transition: all 0.5s;-moz-transition: all 0.5s;-o-transition: all 0.5s;transition: all 0.5s;}
.desc1:hover h2 {display:none; color:#ed2121;}
.yell-bg:hover {background:#02b4e4; border:8px solid #03acda;transform:scale(1.1,1.1);-moz-transform:scale(1.1,1.1);-webkit-transform:scale(1.1,1.1);}
.blu-bg1:hover {background:#02b4e4;border:8px solid #03acda;transform:scale(1.1,1.1);-moz-transform:scale(1.1,1.1);-webkit-transform:scale(1.1,1.1);}
.red-bg1:hover {background:#02b4e4 !important;border:8px solid #03acda;transform:scale(1.1,1.1);-moz-transform:scale(1.1,1.1);-webkit-transform:scale(1.1,1.1);}
th {text-align:center;font-size:13px;}
.nihon-txt {padding:10px; margin:0px; color:#2e3779;}

.table100.ver1 {
    border-radius: 10px;
    overflow: hidden;
    /* box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15); */
    -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
    -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
}
.table-condensed td {padding:15px !important; font-size:13px;}
.th1 {padding:15px !important; background:#26bde5;color:#fff;}
.no-brd th {border:1px solid #fff !important;}
.no-brd td {border:1px solid #fff !important;}

@media only screen and (max-width:768px) {
.col-md-10 {margin:0px; padding:0px;}
.button5 {margin-left:12%;}
}
	/* medSAVE CSS End **********************************/
</style>
</head>
<body>
<div>
	<h1 class="text-center nihon-txt">NIHON</h1>
  <img src="{{URL::to('images/mrdsave_banner.jpg')}}" width="100%"/>
  <div class="container">
  <br>
	<div class="col-md-12 white-bg box-shadow mrg-btm">
  <!-- <h2 class="text-center blu-heding">No worries….<br>
We bring you Digital Medical loans..!!</h2> -->
		<div class="container animate-box" id="fh5co-services-section">
			
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-1"></div>
	<div class="col-md-10">
    <br>
	<div class="table-responsive">
	<table class="table table-bordered table-striped  table-condensed">
  <thead>
    <tr>
      <th class="th1">&nbsp;</th>
      <th class="th1" style="background: #2e3779;">RBL</th>
      <th class="th1" style="background: #ed2121;">KOTAK</th>
      <th class="th1" style="background: #e87f27;">IIFL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Loan Amount</th>
      <td>1 Lakh-20 lakhs</td>
      <td>1 Lakh-15 lakhs</td>
      <td>1 Lakh-5 lakhs</td>
    </tr>
    <tr>
      <th scope="row">Rate of Interest</th>
      <td>14-16%</td>
      <td>10.99-18%</td>
      <td>13-21%</td>
    </tr>
    <tr>
      <th scope="row">Processing Fee </th>
      <td>2%</td>
      <td>0.99 - 2%</td>
      <td>2%</td>
    </tr>
	<tr>
      <th scope="row">Tenure</th>
      <td>12 - 60 months</td>
      <td>12 - 60 months</td>
      <td>12 - 60 months</td>
    </tr>
	<tr>
      <th scope="row">TAT</th>
      <td>3 days</td>
      <td>6 days</td>
      <td>2 days</td>
    </tr>
	
	<tr class="no-brd">
      <th scope="row"></th>
      <td>              <a href="http://www.rupeeboss.com/rbl-personal-loan-dc" target="_blank">
						<div class="desc1 box-shadow blu-bg">
						<div class="sim-button button5"><span>APPLY NOW</span></div>
						<h2>RBL</h2>
						</div>
						</a>
	  </td>
      <td>               
	                    <a href="http://www.rupeeboss.com/kotak-personal-loan-dc" target="_blank">
	                    <div class="desc1 box-shadow red-bg1">
						<div class="sim-button button5"><span>APPLY NOW</span></div>
						<h2>KOTAK</h2>
					    </div>
						</a>
	  </td>
      <td>
	     <a href="http://www.rupeeboss.com/apply-iifl-loan-dc" target="_blank">
	     <div class="desc1 box-shadow yell-bg">
						<div class="sim-button button5"><span>APPLY NOW</span></div>
						<h2>IIFL</h2>
						</div>
						</a>
	  </td>
    </tr>
  </tbody>
</table>
</div>
	</div>
	</div>

			
			</div>
           
		</div>	
		
		</div>
		
		
		</div>
		<!-- Page End ---->
	</div>
	
</body>
</html>


