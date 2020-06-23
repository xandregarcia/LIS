var app = angular.module('comm_ord',['comm_ord-module']);

app.controller('comm_ordCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});