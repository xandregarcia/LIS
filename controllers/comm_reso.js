var app = angular.module('comm_reso',['comm_reso-module']);

app.controller('comm_resoCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});