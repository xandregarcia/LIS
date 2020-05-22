angular.module('origin-module',['bootstrap-growl','bootstrap-modal','form-validator','block-ui']).factory('form', function($http,$compile,$timeout,growl,bootstrapModal,validate,bui){
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
      
      scope.origin = {};
      scope.origin.id = 0;
      
      scope.origin = []; // list
	};

	self.list = function(scope) {
      
      bui.show();
      
      scope.origin = {};
      scope.origin.id = 0;
		
      $http({
        method: 'POST',
        url: 'handlers/origin/list.php',
      }).then(function mySucces(response) {
			
        scope.origin = response.data;
			
        bui.hide();
			
      }, function myError(response) {

        bui.hide();
			
      });
		

      ('#x_content').load('lists/origin.html', function() {
        $timeout(function() { $compile($('#x_content')[0])(scope); },100);								
        // instantiate datable
        $timeout(function() {
          $('#origin').DataTable({
            "ordering": true,
            "paging":true
                    
          });	
        },200);
			
      });				
		
    };
    
  }
});