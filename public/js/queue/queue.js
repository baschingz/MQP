
app.controller('queueController', function($scope, $http, API_URL){

        $http.get(API_URL + "queue")
             .then(function(response){
                 console.log(response.data); 
                $scope.queues = response.data ; 
             });
});



// $.ajax({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//     type: "get",
//     url: "/api/v1/queue",
//     contentType: "application/json",
//     dataType: "json",
//     success: function (data) {
//         if (data.success != null) {
//             console.log(data.success);
//             //alert(data.success);
//         } else {
//             console.log(data);
//             console.log(typeof (data));
//             ///alert(data);
//         }


//     }
// });

console.log("test2");

