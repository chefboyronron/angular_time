<!doctype html>
<html ng-app="empInfo">
	<head>
	<title>Working with AJAX</title>
		<script src="../libraries/angular/angular.min.js"></script>
		<script src="../libraries/angular/angular-route.min.js"></script>
	</head>
	<style>
		.controller_div ul li {
			list-style: none;
		}
	</style>
<body>

	
	<div class="controller_div" ng-view>
		
	</div>
	
	<script type="text/javascript">

		var empInfo = angular.module( "empInfo", 
			[
				"ngRoute",
				"empListModules"
			]
		);
		
		empInfo.config(
			[ "$routeProvider", 
				function($routeProvider){
					$routeProvider.
						when( "/emplist_temp", {
							templateUrl : "templates/emplist_temp.php",
							controller 	: "EmpListController"
						}).
						when( "/emplist_limit/:itemId", {
							templateUrl : "templates/emplist_limit.php",
							controller 	: "EmpListLimitController"
						}).
						otherwise({
							redirectTo	: "/emplist_temp"
						})
				}
			]
		);
	
	</script>
	
	<script type="text/javascript">
		var empListModules = angular.module("empListModules", []);
		empListModules.controller(
			"EmpListController", 
			[
				'$scope', '$http', function($scope,$http){
					$http.get("../assets/php/employees_list.php").success(function(data){
						$scope.employees = data;
						$scope.orderEmp = 'name';
					});
				}
			]
		);
		empListModules.controller(
			"EmpListLimitController", 
			[
				'$scope', '$http', '$routeParams', function($scope,$http, $routeParams){
					$http.get("../assets/php/employees_list.php").success(function(data){
						$scope.employees = data;
						$scope.theEmp = $routeParams.itemId;
						if( $routeParams.itemId > 0){
							$scope.prevItem = Number($routeParams.itemId) - 1;
						}else{
							$scope.prevItem = $scope.employees.length - 1;
						}
						if( $routeParams.itemId < $scope.employees.length - 1 ){
							$scope.nextItem = Number($routeParams.itemId) + 1;
						}else{
							$scope.nextItem = 0;
						}
					});
				}
			]
		);
	</script>

</body>
</html>