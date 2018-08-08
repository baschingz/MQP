app.controller('ManageQueueController',function($scope,$http,API_URL){
    console.log("test1");
    $http.get(API_URL + "bedEnable")
        .then(function(response){
            $scope.beds = response.data ; 
    });

    $scope.form=null;
    $scope.sendData = function(form){
       //debugger;
        console.log('click');
        var url = API_URL + "queue";
        var req ={
            method:'POST',
            data:$.param($scope.form),
            url:url,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }
        $http(req)
            .then(function(response){
                alert(response.data);
                location.reload();
            }).catch(function(response){
                console.log(response.data);
                alert('This is embarassing. An error has occured. Please check the log for details');
            });
   }
});