@include('layout.header')
<br>
<div class="container" id="fh5co-hero">
<div class="div-heigh" style="height:550px;">
<br>
<h3 class="text-center">Hello <b>{{$data[0]->Name?$data[0]->Name:"User"}}</b></h3>
<?php if($data[0]->Status =="0"){?>
<h3 class="text-center">We Cannot find any details with Your given Application Id and Mobile Number</h3>
<br>
<div class="col-md-5"></div>
<div class="col-md-3"><a class="btn btn-success" href="{{URL::to('track-application')}}">Go Back and correct your details!!!</a></div>
<?php }else{?>
<h3 class="text-center">Here is your application details</h3>
<br>
<div class="col-md-2"></div>
<div class="col-md-8">

<table class="table table-bordered white-bg">
    <thead>
     <tr class="text-uppercase bg-danger">
        <td><b>Name</b></td>
        <td><b>Product</b></td>
        <td><b>Loan Amt (in lac)</b></td>
        <td><b>Lead Status</b></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$data[0]->Name}}</td>
        <td>{{$data[0]->Product}}</td>
        <td>{{$data[0]->Loan_Amt}}</td>
        <td>{{$data[0]->Lead_Status}}</td>
      </tr>
    </tbody>
  </table>
  </div>
  <?php }?>
</div>
</div>
@include('layout.footer')
@include('layout.script')