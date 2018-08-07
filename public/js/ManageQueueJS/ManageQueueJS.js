app.controller('ManageQueueController',function($scope,$http){
    $scope.form=null;
   $scope.sendData = function(e){
       debugger;
    var req ={
        method:'POST',
        data:e,
        url:''
    }
    $http(req).then(function(response){

    },function(response){

    });
   }
});