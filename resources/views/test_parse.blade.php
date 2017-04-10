<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8"/>
  

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />

    <!-- The main CSS file -->
    <!-- <link href="style.css" rel="stylesheet" /> -->

    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <!-- The ng-app directive tells angular that the code below should be evaluated -->

  <body ng-app="mainApp" ng-controller="NavController">

    <!-- The navigation menu will get the value of the "active" variable as a class.
       The $event.preventDefault() stops the page from jumping when a link is clicked. -->

    <nav class="@{{active}}" ng-click="$event.preventDefault()" ng-init="setActive('BASIC DETAIL')">

      <!-- When a link in the menu is clicked, we set the active variable -->
    <a href="#" id="nav0" ng-click="setActive('BASIC DETAIL')" >BASIC DETAIL</a>
    <a href="#" ng-click="setActive('LOAN DETAIL')" id="nav1" class="go_to_next"><b>LOAN DETAIL</a>
    <a href="#" ng-click="setActive('PERSONAL DETAIL')" id="nav2" class="go_to_next"><b>PERSONAL DETAIL</a>
    <a href="#" ng-click="setActive('BUSINESS DETAIL')" id="nav3" class="go_to_next"><b>BUSINESS DETAIL</a>
    <a href="#" ng-click="setActive('ONLINE ID')" id="nav5" class="go_to_next"><b>ONLINE ID</a>
    <a href="#" ng-click="setActive('REFERENCE')" id="nav6" class="go_to_next"><b>REFERENCE</a>
    <a href="#"  id="nav4" ng-click="setActive('DOCUMENT')" class="go_to_next"><b>DOCUMENT</a>
    <a href="#"  id="nav7" ng-click="setActive('BANK STATEMENT')" class="go_to_next"><b>BANK STATEMENT</a>


    </nav>

    <!-- ng-show will show an element if the value in the quotes is truthful,
       while ng-hide does the opposite. Because the active variable is not set
       initially, this will cause the first paragraph to be visible. -->


    <p ng-show="active">You chose <b>@{{active}}</p>
    <div ng-show="checkActive('BASIC DETAIL')">
      <span>Into the basic</span>
    </div>
    <div ng-hide="checkActive('@{{active}}')">
      <span>Into the REFERENCE</span>
    </div>
    <!-- Include AngularJS from Google's CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
  </body>
</html>
  <script>
         var mainApp = angular.module("mainApp", []);
         
         mainApp.controller('NavController', function($scope) {
          $scope.setActive = function(activeDiv){
            $scope.active=activeDiv;
            console.log($scope.active);
          }
          $scope.checkActive=function(check){
            console.log($scope.active+"asd");
            if($scope.active=='BASIC DETAIL'){
              return true;
            }else{
              return false;
            }
          }
          
          
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