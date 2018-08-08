app.controller('ManageQueueController',function($scope,$http,API_URL){
    
    var size = 0 ;
    $http.get(API_URL + "bed")
        .then(function(response){
            $scope.beds = response.data ; 
            size = response.data.length ; 
            $http.get(API_URL + "queueByRow/" + size )
                .then(function(response){
                    $scope.items = [] ;
                    for( i = 0 ; i < size ; i ++) {
                        $scope.items[i] = {} ; 
                        $scope.items[i].id = i+1 ; 
                        $scope.items[i].column1 = response.data[i+1][0].name ;
                        $scope.items[i].column2 = response.data[i+1][1].name ;
                        $scope.items[i].column3 = response.data[i+1][2].name ;
                        $scope.items[i].column4 = response.data[i+1][3].name ; 
                    } 
                
                    // $scope.items = [] ;
                    // $scope.items[0] = {} ; 
                    // $scope.items[0].column1 = response.data[1][0].name ;
                    // $scope.items[0].column2 = response.data[1][1].name ;
                    // $scope.items[0].column3 = response.data[1][2].name ;
                    // $scope.items[0].column4 = response.data[1][3].name ; 
                });
            
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
                alert('โปรดใส่ข้อมูลให้ครบถ้วน');
            });
   }
});

$(function(){

});