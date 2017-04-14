@include('layout.header')
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
  <div ng-app="mainApp" ng-controller="NavController" id="fh5co-hero">

    <!-- The navigation menu will get the value of the "active" variable as a class.
       The $event.preventDefault() stops the page from jumping when a link is clicked. -->

    <nav class="@{{active}}" ng-click="$event.originalEvent.defaultPrevented" ng-init="active ='BASIC DETAIL'">

      <!-- When a link in the menu is clicked, we set the active variable -->
    <a href="#" id="nav0" ng-click="active ='BASIC DETAIL'" >BASIC DETAIL</a>
    <a href="#" ng-click="active='LOAN DETAIL'" id="nav1" class="go_to_next"><b>LOAN DETAIL</a>
    <a href="#" ng-click="active='PERSONAL DETAIL'" id="nav2" class="go_to_next"><b>PERSONAL DETAIL</a>
    <a href="#" ng-click="active='BUSINESS DETAIL'" id="nav3" class="go_to_next"><b>BUSINESS DETAIL</a>
    <a href="#" ng-click="active='ONLINE ID'" id="nav5" class="go_to_next"><b>ONLINE ID</a>
    <a href="#" ng-click="active='REFERENCE'" id="nav6" class="go_to_next"><b>REFERENCE</a>
    <a href="#"  id="nav4" ng-click="active='DOCUMENT'" class="go_to_next"><b>DOCUMENT</a>
    <a href="#"  id="nav7" ng-click="active='BANK STATEMENT'" class="go_to_next"><b>BANK STATEMENT</a>


    </nav>

    <!-- ng-show will show an element if the value in the quotes is truthful,
       while ng-hide does the opposite. Because the active variable is not set
       initially, this will cause the first paragraph to be visible. -->


    <div ng-show="active">
    <span>
    You chose <b>@{{active}}
    </span>
    </div>
    <form id="tribe_form" name="tribe_form">
    <div id="basic_detail" ng-show="active=='BASIC DETAIL'">
       <div class="col-md-12">
      <h3 class="mrg-top">Partner Details</h3>
    <hr>
      <div class="col-md-3"><p>Are you a Tribe Partner?</p></div>
      <div class="col-md-4">
      <p><input type="radio" name="is_loan_distributor" value="true" ng-model="is_tribe_dist"/> Yes&nbsp;&nbsp;
       <input type="radio" name="is_loan_distributor" value="false" ng-model="is_tribe_dist" checked /> No</p></div>
    <div  id="tribe_partner_div"  ng-if="is_tribe_dist === 'true'">
      <div class="col-md-6"><p>partnerID*</p></div>
      <div class="col-md-6"><input type="text" name="partner_id" class="form-control form-group" required /></div>
      <div class="col-md-6"><p>Agent Name*</p></div>
      <div class="col-md-6"><input type="text" name="agent_name"  class="form-control form-group" required /></div>
    </div>
    </div>
    <div class="col-md-12 mrg-top">

    <h3>Company Details</h3>
  <hr>
    <div class="col-md-3"><p>Company Name*</p></div>
    <div class="col-md-8"><input type="text" name="company_name" id="company_name" class="form-control form-group" required /></div>
    
    <div class="col-md-3"><p>Owner Name*</p></div>
    <div class="col-md-8">
    <input type="text" name="owner_name" id="owner_name" class="form-control form-group" required /></div>
    
    <div class="col-md-3"><p>Owner Email*</p></div>
    <div class="col-md-8">
    <input type="email" name="owner_email" id="owner_email" ng-model="owner_email" class="form-control form-group" required />
    <p ng-show="tribe_loan_form.owner_email.$error.email" class="error">Invalid Email address</p>
     <a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main1')">Next<i class="icon-arrow-right"></i></a>
    </div>
    

  </div>
    </div>
    <div id="loan_detail" ng-show="active=='LOAN DETAIL'">
      <span>LOAN DETAIL</span>
       <a class="btn btn-primary btn-outline with-arrow" data-toggle="collapse" data-target="#demo">Collapsible</a>

      <div id="demo" class="collapse">
      Lorem ipsum dolor text....
      </div>
    </div>
    <div id="loan_detail" ng-show="active=='PERSONAL DETAIL'">
      <span>PERSONAL DETAIL</span>
    </div>
    <div id="loan_detail" ng-show="active=='BUSINESS DETAIL'">
      <span>BUSINESS DETAIL</span>
    </div>
    <div id="loan_detail" ng-show="active=='ONLINE ID'">
      <span>ONLINE ID</span>
    </div>
    <div id="loan_detail" ng-show="active=='REFERENCE'">
      <span>REFERENCE</span>
    </div>
    <div id="loan_detail" ng-show="active=='DOCUMENT'">
      <span>DOCUMENT</span>
    </div>
    <div id="loan_detail" ng-show="active=='BANK STATEMENT'">
      <span>BANK STATEMENT</span>
    </div>
    <!-- Include AngularJS from Google's CDN -->
    </form>
  </div>
  @include('layout.footer')
  @include('layout.script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
  <script>
         var mainApp = angular.module("mainApp", []);
         
         mainApp.controller('NavController', function($scope) {
         // console.log($scope);
          
          
         });
      </script>
<style type="text/css">
  *{
  margin:0;
  padding:0;
}


/*-------------------------
  General Styles
--------------------------*/


body{
  font:15px/1.3 'Open Sans', sans-serif;
  color: #5e5b64;
  text-align:center;
}

a, a:visited {
  outline:none;
  color:#389dc1;
}

a:hover{
  text-decoration:none;
}

section, footer, header, aside, nav{
  display: block;
}


/*-------------------------
  The menu
--------------------------*/


nav{
  display:inline-block;
  margin:60px auto 45px;
  background-color:#55B460;
  box-shadow:0 1px 1px #ccc;
  border-radius:2px;
}

nav a{
  display:inline-block;
  padding: 18px 30px;
  color:#fff !important;
  font-weight:bold;
  font-size:14px;
  text-decoration:none !important;
  line-height:1;
  text-transform: uppercase;
  background-color:transparent;

  -webkit-transition:background-color 0.25s;
  -moz-transition:background-color 0.25s;
  transition:background-color 0.25s;
}

nav a:first-child{
  border-radius:2px 0 0 2px;
}

nav a:last-child{
  border-radius:0 2px 2px 0;
}

nav.home .home,
nav.team.team,
nav.about .about,
nav.contact .contact{
  background-color:#5867E3;
}

p{
  font-s
  color:#7d9098;
}

p b{
  color:#ffffff;
  display:inline-block;
  padding:5px 10px;
  background-color:#DC64C6;
  border-radius:2px;ize:22px;
  font-weight:bold;
  text-transform:uppercase;
  font-size:18px;
}
</style>