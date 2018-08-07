<<<<<<< HEAD
app.controller('LoginController',function($scope,$http){
    
});

$(function(){
    var username = $('#username');
    var password = $('#password');
    
    
=======
/*$(function(){
    var username = $('#username');
    var password = $('#password');
    var req = {
        method:'POST',
        Header:'',
        data:{
            
        }
    }
    
    $("#submit").click(function(){
        console.log("login!!!");   
    })
>>>>>>> b8e3fcde238247231c2d00f51398936a33ac0dd5

});*/
window.addEventListener("beforeunload", function() { debugger; }, false)

    var form = $('input[type="submit"]');
    form.click(function (e){
        e.preventDefault();

        console.log("Login!!");
        var username = $('#username');
        var password = $('#password');
        
        var data = {
            "username" : username,
            "password" : password 
        };

        console.log(username.val);
        console.log(password.val);
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post", 
            url : "/api/v1/auth", 
            data : JSON.stringify(data),
            contentType : "application/json",
            dataType : "json",
            success:function(data){

                alert(data.success);
  
             }
        });
    })