@include('layout.header')
<br>
<div class="container" id="fh5co-hero">
<h1>Hello {{$data[0]->Name?$data[0]->Name:"User"}}</h1>
<?php if($data[0]->Status =="1"){?>
<h3>We Cannot find any details with Your given Application Id and Mobile Number</h3>
<a class="btn btn-success" href="{{URL::to('track-application')}}">Go Back and correct your details!!!</a>
<?php }else{?>
<h3>Here is your application details</h3>
<table class="table table-bordered">
    <thead>
     <tr>
        <td>Name</td>
        <td>Product</td>
        <td>Loan Amt Taken(in lac)</td>
        <td>Lead Status</td>
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
  <?php }?>
</div>
@include('layout.footer')
@include('layout.script')