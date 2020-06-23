var app = angular.module('commReso',['account-module','commReso-module']);

app.controller('commResoCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});
