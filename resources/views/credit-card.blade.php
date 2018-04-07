@include('layout.header')
  <div class="container">
        <div class="row">
            <div class="col-md-12">
      
                <div class="wrapper-content bg-white pinside40">
         <h1 class=""><center>Credit Cards</center></h1>
         </br>
                    <div class="row">
          
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card-listing how-it-block hvr-float-shadow2">
                                <!-- card listing -->
                                <div class="card-img">
                                    <img src="images/rbl-credit-card.png" alt="RBL Credit Card">
                                </div>
                                <div class="card-content" style="text-align: center;">
                                    <h4 class="card-name">RBL Bank Credit Card</h4>
                                    
                                    <a href="{{URL::to('credit-card-compare/rbl')}}" class="btn btn-default btn-sm" style="margin-right: 0px;">Apply Now</a>
                                   
                                </div>
                            </div>
                            <!-- /.card listing -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card-listing how-it-block hvr-float-shadow2">
                                <!-- card listing -->
                                <div class="card-img">
                                    <img src="images/icici-credit-card.png" alt="ICICI Credit Card">
                                </div>
                                <div class="card-content" style="text-align: center;">
                                    <h4 class="card-name">ICICI Bank Credit Card</h4>
                                    
                                    <a href="{{URL::to('icici')}}" class="btn btn-default btn-sm" style="margin-right: 0px;">Apply Now</a>
                                </div>
                            </div>
                            <!-- /.card listing -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card-listing how-it-block hvr-float-shadow2">
                                <!-- card listing -->
                                
                                <div class="card-content" style="text-align: center;">
                                <a href="{{url('coming-soon')}}">  <img src="images/coming_soon_credit_card.jpg" width="200px" height="250px" alt="SBI Credit Cards" title="SBI Credit Cards" class="img-responsive box-shadow"/></a>
                                    
                                </div>
                            </div>
                            <!-- /.card listing -->
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
@include('layout.script')
