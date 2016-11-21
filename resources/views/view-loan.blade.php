@include('layout.header')
    <div id="fh5co-hero">
  <div class="container">
  <div class=" pad">
  <p class="text-left">home/personal-loan</p>
    <h2 class="align-center loan-head">View Options</h2>
  </div>
   <div class="col-md-3 fadeInUp tbl fltr">
    <h3>Filter</h3>
  <hr>
  <h4>Interest Type</h4>
  <select>
          <option>Less Then 15000</option>
      <option>Less Then 20,000</option>
  </select>
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
    
  <div class="col-md-9 pad11">
    
    <div class="table-responsive">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
    <td>Your Personal Loan Search for <b>5 Lakhs</b> Loan</td>
    <td><button class="default">Modify Details</button></td>
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
    <div class="table-responsive">
  <table width="100%" border="1" class="tbl">
  <tr>
    <td width="9%" class="upper">Compare</td>
    <td><div class="img-c"><img src="images/axis.jpg" width="100" height="30"></div></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><button>Apply Online</button></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="cehckbox"/></td>
    <td>Personal Loan</td>
    <td>15.20%</td>
    <td>150000</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Specil Features:-</strong> Pre close Fee 0%</td>
  </tr>
  <tr>
    <td><i class="icon-thumbs-up"></i></td>
    <td class="upper"><a href="#">Know More</a></td>
    <td>Processing Fee - INR 11200 + ST</td>
    <td>Intrest Paid - INR 50,000</td>
    <td>Max tenure - 2Years</td>
    </tr>
</table>
</div>
<div class="table-responsive">
<table width="100%" border="1" class="tbl">
  <tr>
    <td width="9%" class="upper">Compare</td>
    <td><div class="img-c"><img src="{{URL::to('images/axis.jpg')}}" width="100" height="30"></div></td>
    <td width="16%" class="upper">Interst Rate</td>
    <td width="16%" class="upper">Loan Amount</td>
    <td width="18%" class="upper">emi</td>
    <td width="17%"><button>Apply Online</button></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="cehckbox"/></td>
    <td>Personal Loan</td>
    <td>15.20%</td>
    <td>150000</td>
    <td>10,000 (for 3 years)</td>
    <td rowspan="2"><strong>Specil Features:</strong>- Pre close Fee 0%</td>
  </tr>
  <tr>
    <td><i class="icon-thumbs-up"></i></td>
    <td class="upper"><a href="#">Know More</a></td>
    <td>Processing Fee - INR 11200 + ST</td>
    <td>Intrest Paid - INR 50,000</td>
    <td>Max tenure - 2Years</td>
    </tr>
</table>
</div>

  </div>
  </div>
</div>
  
	
<div class="container-fluid white-bg">	
<div class="container pad">
 <div class="col-md-12 animate-box fadeInUp animated col">
 <div class="col-md-4 img-c"><img src="{{URL::to('images/compare-img.png')}}"></div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button>
    <img src="{{URL::to('images/kotak.png')}}" width="50" height="46">Kotak Mahindra Bank</div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="{{URL::to('images/axis.png')}}" width="50" height="46">Axis Bank</div>
  <div class="col-md-2 col img-c white-bg"><button type="button" class="close" data-dismiss="modal">×</button><img src="{{URL::to('images/hdfc.png')}}" width="50" height="46">HDFC Bank</div>
  <div class="col-md-2 comp-btn"><a href="#" class="btn btn-primary btn-outline with-arrow">Compare<i class="icon-arrow-right"></i></a></div>
 </div>
</div>
</div>

@include('layout.footer')
@include('layout.script')