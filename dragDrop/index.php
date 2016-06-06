<!doctype html>
<html lang="en" ng-app="dd">
<head>
	<meta charset="UTF-8">
	<script src="../libraries/angular/angular.js" type="text/javascript"></script>
    <script src="../libraries/angular/angular-animate.min.js" type="text/javascript"></script>
    <script src="../libraries/angular/angular-dragdrop.min.js" type="text/javascript"></script>
	<title>Angular Lesson 1 directives(ng-app | ng-model)</title>
</head>
<body>
	
    <div class="btn btn-primary" data-drag="true" data-jqyoui-options="{revert: 'invalid'}" ng-model="list1" jqyoui-draggable="{animate:true}" ng-hide="!list1.title">{{list1.title}}</div>
    
    <div class="thumbnail" data-drop="true" data-jqyoui-options ng-model="list2" jqyoui-droppable style='height:50px;'>
        <div class="btn btn-success" data-drag="false" data-jqyoui-options ng-model="list2" jqyoui-draggable ng-hide="!list2.title">{{list2.title}}</div>
    </div>
    
    
    <script>
        var App = angular.module("dd", ["ngDragDrop"]);
        App.controller('OverviewCtrl', function($scope) {
          $scope.list1 = {title: 'AngularJS - Drag Me'};
          $scope.list2 = {};
        });
    
    </script>
    
    
</body>
</html>