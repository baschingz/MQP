app.controller('ManageQueueController',function($scope,$http,API_URL){

    console.log("test1");
    
    $http.get(API_URL + "bedEnable")
        .then(function(response){
            $scope.beds = response.data ; 
        });

//     $scope.form=null;
//     $scope.sendData = function(e){
//        debugger;
//     var req ={
//         method:'POST',
//         data:e,
//         url:''
//     }
//     $http(req).then(function(response){

//     },function(response){

//     });
//    }
});