<!doctype html>
<html ng-app="empInfo">
	<head>
	<title>Creating Module</title>
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
		 * "function($scope)" = callback
		 *		- $scope = EventListener | global variable
		*/
		empInfoModule.controller("information", function($scope){
			$scope.employees = [
				{
					"name" : "Ron Seminiano",
					"title" : "PHP Developer",
					"company" : "Circus Int. Philippines",
					"username" : "ron"
				},
				{
					"name" : "Kyle Seminiano",
					"title" : "Cute baby",
					"company" : "HTA",
					"username" : "kyle"
				},
			]
		});
		
	</script>
	<!-- Creating a Module -->
</body>
</html>