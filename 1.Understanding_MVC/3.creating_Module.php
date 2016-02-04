<!doctype html>
<html ng-app="empInfo">
	<head>
	<title>Creating Module</title>
		<script src="../libraries/angular/angular.min.js"></script>
	</head>
<body>
	
	<!--
		* Template : Views
		* {{methods.record_key}} = expression
		* + = concatination
	-->
	
	<div ng-controller="information">
		<h1>{{employees.name}}</h1>
		<p>{{employees.title}} + ' - ' + {{employees.company}}</p>
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
			$scope.employees = {
				"name" : "Ron Seminiano",
				"title" : "PHP Developer",
				"company" : "Circus Int. Philippines"
			}
		});
		
	</script>
	<!-- Creating a Module -->
</body>
</html>