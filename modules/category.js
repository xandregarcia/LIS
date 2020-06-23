angular.module('category-module', ['bootstrap-growl', 'bootstrap-modal', 'form-validator', 'block-ui']).factory('form', function ($http, $compile, $timeout, growl, bootstrapModal, validate, bui) {

  function form() {
    
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
			
      scope.category = {};
      scope.category.id = 0;

      scope.categories = []; // list

	};

    self.list = function(scope) {
			
      bui.show();
		
      scope.category = {};
      scope.category.id = 0;
		
      $http({
        method: 'POST',
        url: 'handlers/category/list.php',
      }).then(function mySucces(response) {
			
        scope.categories = response.data;
			
        bui.hide();
			
      }, function myError(response) {
			 
        bui.hide();
			
      });
		
      $('#x_content').load('lists/category.html', function() {
        $timeout(function() { $compile($('#x_content')[0])(scope); },100);								
			// instantiate datable
        $timeout(function() {
          $('#category').DataTable({
            "ordering": true,
            "paging":true
                    
          });	
        },200);
			
      });				
		
    };
	
	function validate(scope) {
									// change
		var controls = scope.formHolder.agency.$$controls;
		
		angular.forEach(controls,function(elem,i) {
			
			if (elem.$$attr.$attr.required) elem.$touched = elem.$invalid;
								
		});
							 // change
		return scope.formHolder.agency.$invalid;
		
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
		
		scope.agency = {};
		scope.agency.id = 0;
		
		mode(scope,row);
		
		$('#x_content').html(loading);
		$('#x_content').load('forms/agency.html',function() {
			$timeout(function() { $compile($('#x_content')[0])(scope); },200);
		});
		
		if (row != null) {
		
			if (scope.$id > 2) scope = scope.$parent;				
			$http({
			  method: 'POST',
			  url: 'handlers/agency/view.php',
			  data: {id: row.id}
			}).then(function mySucces(response) {
				
				angular.copy(response.data, scope.agency);
				
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
			url: 'handlers/agency/save.php',
			data: {agency: scope.agency}
		}).then(function mySucces(response) {
			
			if (scope.agency.id == 0) {
				scope.agency.id = response.data;
				growl.show('btn btn-success',{from: 'top', amount: 55},'Information successfully added.');
				}	else{
					growl.show('btn btn-success',{from: 'top', amount: 55},'Information successfully updated.');
				}
			mode(scope,scope.agency);
			
		}, function myError(response) {
			 
		  // error
			
		});			
		
	};	
	
	self.delete = function(scope,row) {
			
		var onOk = function() {
			
			if (scope.$id > 2) scope = scope.$parent;			
			
			$http({
			  method: 'POST',
			  url: 'handlers/agency/delete.php',
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