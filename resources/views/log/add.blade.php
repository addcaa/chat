<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
账号：<input type="text" name="u_number" id="u_number"><br>
密码：<input type="password" name="u_pwd" id="u_pwd"><br>
<input type="submit" value="登录" id="sub">
</body>
</html>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    $(function(){
        $("#sub").click(function(){
            var u_number=$("#u_number").val();

            var u_pwd=$("#u_pwd").val();
            $.post(
                    '/log/login',
                    {u_number:u_number,u_pwd:u_pwd},
                    function(reg){
                        if(reg.on==0){
                            alert(reg.msg);
                            window.location.replace("/index");
                        }else{
                            alert(reg.msg);
                        }
                    }
            );
        })
    })
</script>