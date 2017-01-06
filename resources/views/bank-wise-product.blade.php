@include('layout.header')
    <div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	<!-- <p class="text-left"><a href="{{url('/')}}">home</a>/{{$bank_name}}</p> -->
	</div>
	<div class="col-md-8 bg-white1 bnkpg">
		<div class="jumbotron text-center bankpg">
		<img src="{{URL::to('images/bank/axis.png')}}" class="img-responsive" />
		 <h2>{{$bank_name}}</h2>
		 <p>{{$bank_name}} Home Loan</p>
		</div>	
	  	</div>

		<div class="col-md-4 red-bg1">
	   <div class="form-in">

              <span class="head-1 heading-bmar">Request A Call Back<span><br>
             <form class="" id="compareform" role="form" method="POST" action="customer_form.php">
				  <div class="form-group">
				  
				    <div>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required class="clr-ddd" />
				    </div>
				  </div>
			<div class="form-group">
		   
		    <div> 
		    <input type="text" name="contact" id="contact" class="form-control" 
			pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile No." class="clr-ddd">
		    </div>
		  </div>
				 <div class="form-group">
				  
				    <div>
				      <input type="email" class="form-control" id="name" name="name" placeholder="Email Id" required class="clr-ddd" />
                 
				    </div>
				  </div>
			 
			  
			  <div class="form-group centr-obj"> 
			    
			     <button class="btn btn-primary btn-outline with-arrow">Submit<i class="icon-arrow-right"></i></button>
			   
			  </div>
			</form>
		</div>	
	</div>
	</aside>
	</div>

	
   
	<div class="container">
	 <div class="row">
	   <div class="col-md-12 pad11">
    
    <div class="">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
   <!--  <td>Your  Loan Search for <b>5 Lakhs</b> Loan</td>
   -->
</table>
</div>
 

 @foreach($getQuery as  $key=>$value )
 <div class="table-responsive">
 <div><br>
    <!-- <div class="table-responsive"> -->
	<table width="100%" border="1" class="tbl">
   
  

  <tr>
    <!-- <td width="9%" class="upper">Compare</td> -->
    <!-- <td><div class="img-c"> --><!-- <img src="{{url('images/axis.jpg')}}" width="100" height="30"> --><!-- Bank_ID</div></td> -->
    <td width="16%" class="upper">Rate Of Interest</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">Minimum Income</td>
    <td width="18%" class="upper">Age</td>
    <td width="18%" class="upper">Women Rate Of Interest</td>
    <td width="18%" class="upper">Minimum Credit Score</td>
    <td width="18%" class="upper">Tenure</td>
    <td width="18%" class="upper">Profession</td>
    <td class="upper" width="17%"><a href="{{URL::to('apply-')}}{{$product}}">Apply Online</a></td>



   <!--  <td class="upper" width="17%"><a href="{{url('apply')}}dw">Apply Online</a></td> -->
  </tr>

  <tr>
<!--     <td><input type="checkbox" name="cehckbox"/></td> -->
    <!-- <td>{{$value->bank_id}}</td>  -->
    <td>{{$value->roi}}</td> 
    <td>{{$value->Max_Loan_Amt}}</td> 
   <td>{{$value->Min_Income}}</td>
   <td>{{$value->Min_Age}}-{{$value->Max_Age}}</td>
   <td>{{$value->Women_roi}}</td>
   <td>{{$value->MinCredit_Score}}</td> 
   <td>{{$value->Min_Tenure}}-{{$value->Max_Tenure}}Years</td> 
   <td><p>Salaried</p></td> 
  <!--  <td class="upper" width="17%"><a href="{{URL::to('apply-')}}{{$product}}">Apply Online</a></td> -->

    <td rowspan="2"><strong>Special Features:-</strong> Pre close Fee 0%</td>
  </tr>
    <tr>
  <!--   <td><i class="icon-thumbs-up"></i></td> -->
    <td class="upper">  <button type="button" data-toggle="collapse" data-target="#{{$key}}">Know More</button><!-- <a href="#">Know More</a> --></td>
    <!-- <td>Processing Fee - INR ertert + ST</td> -->
   <!--  <td>Intrest Paid - INR 50,000</td> -->
    <!-- <td width="18%" class="upper">Tenure:{{$value->Min_Tenure}}-{{$value->Max_Tenure}}years</td> -->
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
</div>
@endforeach


</div></div></div><!-- </div> -->


	
	<div class="container">
	 <div class="row">
	   <div class="col-md-12">
	   
	   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Home Loan</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body"><p>Home loans offered by Axis Bank have great features like flexible tenures, transparent processing and quick service. The home loan from Axis bank has various features which are as follows:
The interest rates charged by the bank under its housing loan scheme are fair and reasonable making them attractive and popular among customers because they can afford the interest rates charged by the bank.</p>
<p>Both fixed and floating rates of interest are available under the Home Loan schemes and the applicant can choose either of the two based on his or her perception about the movements of the interest rates.
A minimum amount of 3 lakhs can be borrowed under the Axis Bank Housing Loan scheme. However, there is no upper limit on borrowing and it depends on the borrower’s repayment capability.</p>
<p>The bank offers balance transfer scheme under the Axis Bank Housing Loan which means that if an applicant already has a home loan from a bank and is not satisfied with the charges and EMIs of that bank, he or she can transfer the existing home loan to Axis Ltd. Home Loan without any additional hassles.
This Axis home loan offers doorstep loan service so that the customer does not need to visit the bank branch. The bank comes to the applicant’s doorstep to complete the loan processing formality
If the applicant wishes to pay off the Axis Home loans earlier than the stipulated tenure, it is possible and there are no charges for prepayment. However, the prepayment facility is only available to customers who have chosen a floating rate of interest.
Premium banking customers like Priority, Wealth or Burgundy, are given special benefits in the rates and charges of the Axis Home loans
Availing of a longer tenure of 30 years results in lower EMIs making the Axis Home loan affordable to the customers.</p>
<p>eDGE Loyalty Points Program enables earning of eDGE Reward points when the customer avails the Axis Home loans or takes a top-up home loan and on every anniversary year of the availed Axis Ltd. home loan.</p>
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Axis Bank Eligibility Criteria</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><p>The following individuals matching the respective criteria are eligible to avail the Axis Home loan:</p>
 
<P>Home Loan Eligibility Criteria for Salaried Applicant</p>

<P>The applicant must have been employed in permanent capacity with recognized private or Government enterprise
The prospective borrower needs to have completed 24 years of age at the time of loan application. Additionally, the maximum age of applicant by which the superannuation of the Axis housing loan must occur is 60 years. However, the home loan from Axis limited may be ended before the applicant reaches the age specified as well.</P>
 
<P>Home Loan Eligibility for Self-Employed Professionals</P>

<P> employed professionals such as management consultant, CA, dentists, doctors, cost accountants, doctors etc. are also eligible to apply for a Axis bank home loan.
Such individuals must be at least 24 years old when applying for the home loan, while they cannot exceed 65 years when the home loan from Axis matures.</P>
 
<P>Eligibility Criteria Specific to Self-Employed Applicant
Any self-employed person who has regularly submitted his/her income tax returns may be considered for a Axis Home Loan.
The maximum age of applicant at the time of home loan maturity is fixed at 65 years, while the minimum age of eligibility for home loan application with Axis bank is 24 years for self employed. </P> 
 
<P>Salaried Individuals with the following criteria
Individuals in reputed companies of Government in permanent service.
Applicants should be above 24 years while applying for Axis housing loan and the maximum allowable age is 60 years or up to superannuation whichever is early at the time of maturity of the Home loan from Axis limited.</P>
 
<P>Professionals with the following criteria
Engineers, architects, dentists, management consultants,doctors, chartered accountants, company secretaries, cost accountants, only can apply for a Axis Home loan
Applicants age should be above 24 at the time of home loan application and 65 years or less at the time of loan maturity.</P>
 
<P>Self-employed Individuals with the following criteria
Any individual filing Income Tax Returns is eligible for applying to Axis Home loans
Applicants should be above 24 years of age at the time of Axis Limited home loan application and 65 years or less at the time of loan maturity.</P>
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Axis Home Loan Interest Rate And Charges</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
	     <table border="1" cellpadding="0" cellspacing="0" class="table tbl">
	<tbody>
		<tr>
			<td style="width:128px">
				<p style="text-align:center">
					<strong>Type</strong>
				</p>
			</td>
			<td style="width:156px">
				<p style="text-align:center">
					<strong>Axis Limited Home Loan Amount</strong>
				</p>
			</td>
			<td style="width:174px">
				<p style="text-align:center">
					<strong>Base Rate + Mark-up</strong>
				</p>
			</td>
			<td style="width:180px">
				<p style="text-align:justify">
					<strong>Effective rate of interest</strong>
				</p>
			</td>
		</tr>
		<tr>
			<td colspan="1" rowspan="3" style="width:128px">
				<p style="text-align:center">
					<strong>Floating Rate</strong>
				</p>

				<p style="text-align:center">
					&nbsp;
				</p>
			</td>
			<td style="width:156px">
				<p style="text-align:center">
					Up to&nbsp; Rs 28 lacs
				</p>
			</td>
			<td style="width:174px">
				<p style="text-align:center">
					MCLR +0.20%
				</p>
			</td>
			<td style="width:180px">
				<p style="text-align:justify">
					9.45% p.a
				</p>
			</td>
		</tr>
		<tr>
			<td style="width:156px">
				<p style="text-align:center">
					Above&nbsp; Rs 28 lacs
				</p>
			</td>
			<td style="width:174px">
				<p style="text-align:center">
					MCLR + 0.25%
				</p>
			</td>
			<td style="width:180px">
				<p style="text-align:justify">
					9.50% p.a
				</p>
			</td>
		</tr>
		<tr>
			<td style="width:156px">
				<p style="text-align:center">
					Top-up
				</p>
			</td>
			<td colspan="2" style="width:354px">
				<p style="text-align:center">
					Up to 30% - Same rate of Home loan
				</p>

				<p style="text-align:center">
					30%-100%- Rates of LAP
				</p>
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
	
	
@include('layout.footer')
@include('layout.script')