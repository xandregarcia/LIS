angular.module('referral-module',['bootstrap-growl','bootstrap-modal','form-validator','block-ui']).factory('form', function($http,$compile,$timeout,growl,bootstrapModal,validate,bui){
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
      
      scope.referral = {};
      scope.referral.id = 0;
      
      scope.referral = []; // list
	};

	self.list = function(scope) {
      
      bui.show();
      
      scope.referral = {};
      scope.referral.id = 0;
		
      $http({
        method: 'POST',
        url: 'handlers/referral/list.php',
      }).then(function mySucces(response) {
			
        scope.referral = response.data;
			
        bui.hide();
			
      }, function myError(response) {

        bui.hide();
			
      });
		

      ('#x_content').load('lists/referral.html', function() {
        $timeout(function() { $compile($('#x_content')[0])(scope); },100);								
        // instantiate datable
        $timeout(function() {
          $('#referral').DataTable({
            "ordering": true,
            "paging":true
                    
          });	
        },200);
			
      });				
		
    };
    
  }
});