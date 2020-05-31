var app = angular.module('sp_profile',['account-module','app-module']);

app.controller('sp_profCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});