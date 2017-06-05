
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<form ng-app="test" ng-init="messages:in">
<p ng-bind=@{{messages}}>@{{messages}}</p>
	<input ng-modal="messages">
</form>
