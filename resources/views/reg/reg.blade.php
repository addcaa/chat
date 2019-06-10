<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
用户名：<input type="text" name="u_name" id="u_name"><br>
密码：<input type="password" name="u_pwd" id="u_pwd"><br>
<input type="submit" value="申请账号" id="sub">
</body>
</html>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    $(function(){
        $("#sub").click(function(){
            var u_name=$("#u_name").val();
            var u_pwd=$("#u_pwd").val();
            $.post(
                    'reg/rego',
                    {u_name:u_name,u_pwd:u_pwd},
                    function(reg){
                        if(reg.on==0){
                            alert(reg.msg+';'+'账号是：'+reg.arr);
                            window.location.replace("log/add");
                        }else{
                            alert(reg.msg);
                        }
                    }
            );
        })
    })
</script>