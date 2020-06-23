var app = angular.module('commOrd',['account-module','commOrd-module']);

app.controller('commOrdCtrl',function($scope,form) {
	
	$scope.views = {};
	$scope.formHolder = {};
	
	form.data($scope);
	form.list($scope);
	
	$scope.form = form;

});
