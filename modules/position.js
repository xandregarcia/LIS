angular.module('position-module',['bootstrap-growl','bootstrap-modal','form-validator','block-ui']).factory('form', function($http,$compile,$timeout,growl,bootstrapModal,validate,bui){
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
      
      scope.position = {};
      scope.position.id = 0;
      
      scope.position = []; // list
	};

	self.list = function(scope) {
      
      bui.show();
      
      scope.position = {};
      scope.position.id = 0;
		
      $http({
        method: 'POST',
        url: 'handlers/position/list.php',
      }).then(function mySucces(response) {
			
        scope.position = response.data;
			
        bui.hide();
			
      }, function myError(response) {

        bui.hide();
			
      });
		

      ('#x_content').load('lists/position.html', function() {
        $timeout(function() { $compile($('#x_content')[0])(scope); },100);								
        // instantiate datable
        $timeout(function() {
          $('#position').DataTable({
            "ordering": true,
            "paging":true
                    
          });	
        },200);
			
      });				
		
    };
    
  }
});