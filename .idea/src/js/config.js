define("config",[],function(){

    require.config({
      baseUrl:"./js",
      paths:{
          "jquery":["https://cdn.bootcss.com/jquery/3.3.1/jquery","lib/jquery/jquery"],
          "validate":"lib/jquery-validation/jquery.validate",
          "methods":"lib/jquery-validation/additional-methods"
      },
        shim:{
          "validate":{
              deps:["jquery"]
          },
            "methods":{
                deps:["jquery","validate"]
            }
        }


    })

})