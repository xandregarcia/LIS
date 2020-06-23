var app = angular.module('communication',['account-module','communication-module']);

app.controller('communicationCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});
