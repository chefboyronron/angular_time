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
		* Template : search field
		* ng-model="bindSearch" = model that is going to bind on the event
	-->
	
	<!--
		* Template : Employees
		* {{obj.method}} = expression
		* + = concatination
	-->
	
	<div class="controller_div" ng-controller="information">
		
		<input ng-model="bindSearch" placeholder="Search employees.." autofocus><br><br>
			
		<select ng-model="orderEmp">
			<option value="name">Name</option>
			<option value="title">Title</option>
			<option value="company">Company</option>
		</select><br><br>
			
		<label>
			<input type="radio" ng-model="direction" checked>
			Ascending
		</label>
		<label>
			<input type="radio" ng-model="direction" value="reverse">
			Descending
		</label>
	
		<ul>
			<li ng-repeat="emp in employees | filter:bindSearch | orderBy:orderEmp:direction">
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
		 * "information" = funtion name | ng-controller name
		 * [$scope, $http] = protect name from minification
		 * "function($scope)" = callback
		 *		- $scope = EventListener | global variable
		 *		- $http = httpRequest
		 * $http.get = create a get request
		 *		- data = request result
		 * 	- $scope.orderEmp = 'name'  | initialize select tag value
		*/
		empInfoModule.controller(
			"information", 
			[
				'$scope', '$http', function($scope,$http){
					$http.get("../assets/php/employees_list.php").success(function(data){
						$scope.employees = data;
						$scope.orderEmp = 'name';
					});
				}
			]
		);
		
	</script>
	<!-- Creating a Module -->
</body>
</html>