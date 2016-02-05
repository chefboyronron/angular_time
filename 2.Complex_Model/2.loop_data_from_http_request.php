<!doctype html>
<html ng-app="empInfo">
	<head>
	<title>Working with AJAX</title>
		<script src="../libraries/angular/angular.min.js"></script>
	</head>
	<style>
		.controller_div ul li {
			list-style: none;
		}
	</style>
<body>
	
	<!--
		* Template : Views
		* {{methods.record_key}} = expression
		* + = concatination
	-->
	
	<div class="controller_div" ng-controller="information">
		<ul>
			<li ng-repeat="emp in employees">
				<img ng-src="../assets/images/emp/{{emp.username}}.png" alt="Image of {{emp.username}}">
				<h3>{{emp.name}}</h3>
				<p>{{emp.title + ' - ' + emp.company}}</p>
			</li>
		</ul>
	</div>
	
	<!-- Creating a Module -->
	<script type="text/javascript">
		/************ Create a module ************/
		/*	angular.module(params)
		 *	"empInfo" = application name, usually the value of ngApp directive
		 * "[]" = empty javasript array
		*/
		var empInfoModule = angular.module("empInfo", []);
		
		/************ Creating a controller *************/
		/* controller(params)
		 * "information" = funtion name
		 * [$scope, $http] = protect name from minification
		 * "function($scope)" = callback
		 *		- $scope = EventListener | global variable
		 *		- $http = httpRequest
		 * $http.get = create a get request
		 *		- data = request result
		*/
		empInfoModule.controller(
			"information", 
			[
				'$scope', '$http', function($scope,$http){
					$http.get("../assets/php/employees_list.php").success(function(data){
						$scope.employees = data;
					});
				}
			]
		);
		
	</script>
	<!-- Creating a Module -->
</body>
</html>