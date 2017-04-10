<!DOCTYPE html>
<html ng-app="plunker">

<head>
<meta charset="utf-8">
<title>Leaflet</title>
<script>
  document.write('<base href="' + document.location + '" />');
</script>
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css">
<link rel="stylesheet"  href="style.css" />

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
</head>
 
<body  ng-controller="NavCtrl">

  <div class="navbar">
    <ul class="nav navbar-nav">
      <li ng-class="navClass('home')"><a href='' ng-click="loadHome()">Home</a></li>
      <li ng-class="navClass('about')"><a href='' ng-click="loadAbout()">About Us</a></li>
      <li ng-class="navClass('contact')"><a href='' ng-click="loadContact()">Contact Us</a></li>
    </ul>
  </div>
  
  <div ng-view></div>


</body>
<script type="text/javascript">
  var app = angular.module("plunker", []).
  config(function ($routeProvider, $locationProvider, $httpProvider) {

    $routeProvider.when('/home',
    {
      templateUrl:    'home.html',
      controller:     'HomeCtrl'
    });
    $routeProvider.when('/about',
    {
      templateUrl:    'about.html',
      controller:     'AboutCtrl'
    });
    $routeProvider.when('/contact',
    {
      templateUrl:    'contact.html',
      controller:     'ContactCtrl'
    });
    $routeProvider.otherwise(
    {
      redirectTo:     '/home',
      controller:     'HomeCtrl', 
    }
  );
});

app.controller('NavCtrl', 
['$scope', '$location', function ($scope, $location) {
  $scope.navClass = function (page) {
    var currentRoute = $location.path().substring(1) || 'home';
    return page === currentRoute ? 'active' : '';
  };
  
  $scope.loadHome = function () {
        $location.url('/home');
    };
    
      $scope.loadAbout = function () {
        $location.url('/about');
    };
    
      $scope.loadContact = function () {
        $location.url('/contact');
    };
    
}]);

app.controller('AboutCtrl', function($scope, $compile) {
  console.log('inside about controller');

});

app.controller('HomeCtrl', function($scope, $compile) {
  console.log('inside home controller');

});

app.controller('ContactCtrl', function($scope, $compile) {
  console.log('inside contact controller');

});
</script>
</html>
