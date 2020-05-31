angular.module('app-module',['bootstrap-growl','bootstrap-modal','form-validator','block-ui']).factory('form', function($http,$compile,$timeout,growl,bootstrapModal,validate,bui){

function form(){

	var self = this;
	
	var loading = '<div class="col-sm-offset-4 col-sm-8"><button type="button" class="btn btn-dark" title="Loading" disabled><i class="fa fa-spinner fa-spin"></i>&nbsp; Please wait...</button></div>';
	
	self.data = function(scope){

		scope.mode = null;
			
		scope.controls = {
			ok: {
				btn: false,
				label: 'Save'
			},
			cancel: {
				btn: false,
				label: 'Cancel'
			}
		};
			
		scope.incomingcomm = {};
		scope.incomingcomm.id = 0;

		scope.incomingcomms = []; // list

	};

	// function groups(scope){

	// 	$http({

	// 		url: "api/suggestions/groups.php",
	// 		method: "POST"
	// 	}).then(function success(res){

	// 		scope.groups = res.data;
	// 	}, function error(res){

	// 		//error
	// 	});
	// }

	// function departments(scope){

	// 	$http({

	// 		url: "api/suggestions/departments.php",
	// 		method: "POST"
	// 	}).then(function success(res){

	// 		scope.departments = res.data;
	// 	}, function error(res){

	// 		//error
	// 	});
	// }
	
	self.list = function(scope) {
			
		bui.show();
		
		scope.incomingcomm = {};
		scope.incomingcomm.id = 0;
		
		$http({
		  method: 'POST',
		  url: 'handlers/incomingcomm/list.php',
		}).then(function mySucces(response) {
			
			scope.incomingcomms = response.data;
			
			bui.hide();
			
		}, function myError(response) {
			 
			bui.hide();
			
		});
		
		$('#x_content').load('lists/incomingcomm.html', function() {
			$timeout(function() { $compile($('#x_content')[0])(scope); },100);								
			// instantiate datable
			$timeout(function() {
				$('#incomingcomm').DataTable({
                    // "ordering": true,
                    // "paging":true
                    
				});	
			},200);
			
		});				
		
	};
	
	function validate(scope) {
									// change
		var controls = scope.formHolder.incomingcomm.$$controls;
		
		angular.forEach(controls,function(elem,i) {
			
			if (elem.$$attr.$attr.required) elem.$touched = elem.$invalid;
								
		});
							 // change
		return scope.formHolder.incomingcomm.$invalid;
		
	};
	
	function mode(scope,row) {
			
		if (row == null) {
			scope.controls.ok.label = 'Save';
			scope.controls.ok.btn = false;
			scope.controls.cancel.label = 'Cancel';
			scope.controls.cancel.btn = false;
		} else {
			scope.controls.ok.label = 'Update';
			scope.controls.ok.btn = true;
			scope.controls.cancel.label = 'Close';
			scope.controls.cancel.btn = false;				
		}
		
	};
	
	self.addEdit = function(scope,row) {	
		
		scope.incomingcomm = {};
		scope.incomingcomm.id = 0;
		
		mode(scope,row);
		
		$('#x_content').html(loading);
		$('#x_content').load('forms/incomingcomm.html',function() {
			$timeout(function() { $compile($('#x_content')[0])(scope); },200);
		});
		
		if (row != null) {
		
			if (scope.$id > 2) scope = scope.$parent;				
			$http({
			  method: 'POST',
			  url: 'handlers/incomingcomm/view.php',
			  data: {id: row.id}
			}).then(function mySucces(response) {
				
				angular.copy(response.data, scope.incomingcomm);
				
			}, function myError(response) {
				 
			  // error
				
			});					
		};
		// groups(scope);
		// departments(scope);
	
	};
	
	self.edit = function(scope) {
			
		scope.controls.ok.btn = !scope.controls.ok.btn;
		
	};
		
	self.save = function(scope) {
		
		if (validate(scope)){ 
		growl.show('btn btn-danger',{from: 'top', amount: 55},' Please complete required fields.');
		return;
		}
		
		$http({
			method: 'POST',
			url: 'handlers/incomingcomm/save.php',
			data: {incomingcomm: scope.incomingcomm}
		}).then(function mySucces(response) {
			
			if (scope.incomingcomm.id == 0) {
				scope.incomingcomm.id = response.data;
				growl.show('btn btn-success',{from: 'top', amount: 55},'Information successfully added.');
				}	else{
					growl.show('btn btn-success',{from: 'top', amount: 55},'Information successfully updated.');
				}
			mode(scope,scope.incomingcomm);
			
		}, function myError(response) {
			 
		  // error
			
		});			
		
	};	
	
	self.delete = function(scope,row) {
			
		var onOk = function() {
			
			if (scope.$id > 2) scope = scope.$parent;			
			
			$http({
			  method: 'POST',
			  url: 'handlers/incomingcomm/delete.php',
			  data: {id: [row.id]}
			}).then(function mySucces(response) {

				self.list(scope);
				
				growl.show('btn btn-danger',{from: 'top', amount: 55},'Brand Information successfully deleted.');
				
			}, function myError(response) {
				 
			  // error
				
			});

		};

		bootstrapModal.confirm(scope,'Confirmation','Are you sure you want to delete this record?',onOk,function() {});
			
		};


};

return new form();

});