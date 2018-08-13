app.controller('HistoryController',function($scope,$http,API_URL){
    $http.get(API_URL + "history")
            .then(function(response){
                $scope.items = response.data ; 
        });

    $scope.select=function(){

        console.log($scope.selection);
        
        $http.get(API_URL + "selectHistory/" + $scope.selection)
                .then(function(response){
                    console.log(response.data);
                    $scope.hisories = response.data ; 
                }).catch(function(response){
                    console.log(response.data);
                });
    }

    $("#button").click(function(){
        var date = $scope.selection ; 
        console.log("click!!");
        $("#historyTable").table2excel({

            exclude:".noExl",
            name: "Queue_" + date ,
            filename:"Queue_" + date 
        });
    });
});

