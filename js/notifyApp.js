
var notifyApp =  angular.module('notifyApp',[]);

notifyApp.controller('alert',function($scope,$http){
	
		$scope.mailing = function (){
			
			 	$http({
					method:"GET",
					url:"services/common.php",
					params : {"action":"remind" ,"_":new Date().getMilliseconds()}
				}).then(function successCallback(resp){
					console.log(resp);
				},function errorCallback(resp){
					console.error(resp);
				});	 
				
				$http({
					method:"GET",
					url:"services/common.php",
					params : {"action":"review" ,"_":new Date().getMilliseconds()}
				}).then(function successCallback(resp){
					console.log(resp.data);
				},function errorCallback(resp){
					console.error(resp);
				});	
		}
	}
);

//load notify mail
angular.element(document).ready(function(){
	
	//notifyApp.reminder();
	
});
