requirejs(["config"],function(){

    requirejs(["jquery","validate","methods"],function($,v,m){

        //自己定于校验的规则
        $.validator.addMethod("onlyChar",function(value,element){
            var tel = /^[a-zA-Z]{6,16}$/;
            return this.optional(element) || (tel.test(value));
        },"用户名只能是字符串")

        $(document).ready(function(){

            $("#myform").validate({
                rules : {
                    "u_name" : {
                        "required" : true,
                        "rangelength" : [6,16],
                        "onlyChar" : true,
                        "remote":"../server/userexiste.php"
                    },
                    "u_pwd":{
                        "required" : true,
                        "rangelength" : [6,16],

                    },
                    "u_pwd2":{
                        "equalTo":"#pwd1"
                    },
                    "u_telphone" : {
                        "required" : true,
                        "remote":"../server/phoneexiste.php"
                    },


                },
                messages : {
                    "u_name" : {
                        required : "用户名必填",
                        rangelength : "用户名必须是{0}-{1}",
                        "remote":"该用户名已经存在"
                    },
                    "u_pwd" : {
                        required : "用户名必填",
                        rangelength : "用户名必须是{0}-{1}",
                    },
                    "u_pwd2":{
                        "equalTo":"2次密码不一致"
                    },
                    "u_telphone" : {
                        "required" : "手机号码必填",
                        "remote":"该手机号已经存在"
                    },
                },

                //提交
                submitHandler:function(){

                    $.ajax({
                        url:"../server/register.php",
                        type:"post",
                        data:$("#myform").serialize()


                    }).then(function(res){
                        if(JSON.parse(res).status==1){
                            alert(JSON.parse(res).msg);
                            window.location.assign("login.html")

                        }else{
                            alert(JSON.parse(res).msg);

                        }
                    })




                    return false;//  阻止默认行为
                }

            })

        })

    })

})