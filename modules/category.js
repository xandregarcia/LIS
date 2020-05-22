angular.module('category-module',['bootstrap-growl','bootstrap-modal','form-validator','block-ui']).factory('form', function($http,$compile,$timeout,growl,bootstrapModal,validate,bui){
  function form(){
    var self = this;
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
      
      scope.category = []; // list
	};

	self.list = function(scope) {
      
      bui.show();
      
      scope.category = {};
      scope.category.id = 0;
		
      $http({
        method: 'POST',
        url: 'handlers/category/list.php',
      }).then(function mySucces(response) {
			
        scope.category = response.data;
			
        bui.hide();
			
      }, function myError(response) {

        bui.hide();
			
      });
		

      ('#x_content').load('lists/category.html', function() {
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
    
  }
});