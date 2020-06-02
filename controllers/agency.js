var app = angular.module('agency',['account-module','agency-module']);

app.controller('agencyCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});