var app = angular.module('incoming',['account-module','app-module']);

app.controller('incomingCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});