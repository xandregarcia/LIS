var app = angular.module('ordinance',['account-module','ordinance-module']);

app.controller('ordinanceCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});
