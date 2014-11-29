<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="__PUBLIC__/Css/login.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <js file="__PUBLIC__/Js/jquery-1.7.2.min.js"/>
    <js file="__PUBLIC__/Js/login.js"/>
    <script>
        var URL = "{:U(GROUP_NAME.'/Login/verify','',false)}/";
    </script>
</head>
<body>
<div id="top">

</div>
<div class="login">
    <form action="{:U(GROUP_NAME.'/Login/doLogin','',false)}" method="post" id="login">
        <div class="title">
            后盾网 | 登录后台
        </div>
        <table border="1" width="100%">
            <tr>
                <th>管理员帐号:</th>
                <td>
                    <input type="username" name="username" class="len250"/>
                </td>
            </tr>
            <tr>
                <th>密码:</th>
                <td>
                    <input type="password" class="len250" name="password"/>
                </td>
            </tr>
            <tr>
                <th>验证码:</th>
                <td>
                    <input type="code" class="len250" name="code"/>
                    <img src="{:U(GROUP_NAME.'/Login/verify','',false)}" id="code"/>
                    <a href="javascript:void(change_code(this));">看不清</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left:160px;">
                    <input type="submit" class="submit" value="登录"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>