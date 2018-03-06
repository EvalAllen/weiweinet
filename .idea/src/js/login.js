requirejs(["config"],function(){

     requirejs(["jquery"],function($){
         $(function(){


             $("#myform").on("submit",function(){


                 var loginData=$(this).serialize();

                 $.ajax({
                     "url":"../server/login.php",
                     "type":"post",
                     "data":loginData
                 }).done(function(res){

                     if(JSON.parse(res).status==1){

                         console.log(JSON.parse(res).data);

                         alert("登陆成功");

                         window.sessionStorage.setItem("userinfo",JSON.stringify(JSON.parse(res).data))
                        window.location.href="../src/main.php"
                     }else{
                         alert("用户名密码错误");
                     }

                 })



                return false;
             })





         })
     })



})