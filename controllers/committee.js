var app = angular.module('committee',['account-module','committee-module']);

app.controller('committeeCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});
