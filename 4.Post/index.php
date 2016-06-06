<!doctype html>
<html ng-app="loginApp">
	<head>
	<title>Working with AJAX:POST</title>
		<script src="../libraries/angular/angular.min.js"></script>
		<script src="../libraries/angular/angular-route.min.js"></script>
		<script src="../libraries/angular/angular-resource.min.js"></script>
	</head>
	<style>
		.controller_div ul li {
			list-style: none;
		}
	</style>
<body>


<div ng-view></div>


<script>
var app = angular.module( "loginApp", [ "ngRoute" ] );
//Template Routing
app.config([
	"$routeProvider",
	function($routeProvider){
		$routeProvider.when( "/login", { templateUrl : "templates/login.php" });
		$routeProvider.otherwise( { redirectTo : "/login" } );
	}
]);

//Login Directives
app.directive("loginDirective", function(){
	return {
		templateUrl : "templates/login.tpl.php",
		controller : "loginController"
	}
});

//login Controller
app.controller("loginController", ["$scope", "loginService", function($scope, loginService){
	$scope.responseMsg = "";
	$scope.login = function(user){
		loginService.login(user, $scope);
	}
}]);

//login Service
app.factory("loginService", function($http){
	var factory = {};
	factory.login = function(user, scope){
		var $request = $http.post("php/user.php", user);
		$request.then(function(result){
			if(result.data.error == false){
				scope.responseMsg = "Correct Information";
			}else{
				scope.responseMsg = "Username or Password is incorrect.";
			}
		});
		
	}
	return factory;
});
</script>
</body>
</html>