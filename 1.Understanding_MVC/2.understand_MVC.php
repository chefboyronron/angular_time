<!doctype html>
<html ng-app="showInfo">
	<head>
	<title>Working with Model | View | Controller</title>
		<script src="../libraries/angular/angular.min.js"></script>
	</head>
<body>
	
	<div ng-controller="myinfo">
		<h1>{{author.name}}</h1>
		<p>{{author.title + ' - ' + author.company}}</p>
	</div>
	
	<!-- Creating a controller -->
	<script type="text/javascript">
		angular.module("showInfo", []).controller("myinfo", function($scope) {
			var info = this;
			$scope.author = {
				"name" : "Ron Seminiano",
				"title" : "PHP Developer",
				"company" : "Circus Int. Philippines"
			}
		});
	</script>
	<!-- Creating a controller -->
</body>
</html>