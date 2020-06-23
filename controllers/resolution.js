var app = angular.module('resolution',['account-module','resolution-module']);

app.controller('resolutionCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});
