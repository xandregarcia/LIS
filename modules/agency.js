angular.module('agency-module',['bootstrap-growl','bootstrap-modal','form-validator','block-ui']).factory('form', function($http,$compile,$timeout,growl,bootstrapModal,validate,bui){
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
      
      scope.agency = {};
      scope.agency.id = 0;
      
      scope.agency = []; // list
	};

	self.list = function(scope) {
      
      bui.show();
      
      scope.agency = {};
      scope.agency.id = 0;
		
      $http({
        method: 'POST',
        url: 'handlers/agency/list.php',
      }).then(function mySucces(response) {
			
        scope.agency = response.data;
			
        bui.hide();
			
      }, function myError(response) {

        bui.hide();
			
      });
		

      ('#x_content').load('lists/agency.html', function() {
        $timeout(function() { $compile($('#x_content')[0])(scope); },100);								
        // instantiate datable
        $timeout(function() {
          $('#agency').DataTable({
            "ordering": true,
            "paging":true
                    
          });	
        },200);
			
      });				
		
    };
    
  }
});