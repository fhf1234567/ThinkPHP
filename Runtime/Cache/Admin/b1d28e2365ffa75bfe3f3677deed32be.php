<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="__PUBLIC__/Css/login.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
    <style>
        th {
             text-align: center !important;
            font-size:25px;
        }
    </style>
    <script>
        var URL = "<?php echo U(GROUP_NAME.'/Login/verify','',false);?>/";
    </script>
</head>
<body>
<div>
    <form action="<?php echo U(GROUP_NAME.'/Rbac/addRoleHandle','',false);?>" method="post" id="addRole">
        <table border="1" width="100%">
            <tr>
                <th colspan="2">添加角色:</th>
            </tr>
            <tr>
                <td align="right">角色名称:</th>
                <td><input type="text" class="len250" name="name"/></td>
            </tr>
            <tr>
                <td align="right">角色描述:</td>
                <td><input type="text" name="remark" class="len250"/></td>
            </tr>
            <tr>
                <td align="right">是否开启:</td>
                <td>
                   <input type="radio" name="status" value="1" checked>&nbsp;开启
                   <input type="radio" name="status" value="0">&nbsp;不开启
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" >
                    <input type="submit" value="提交"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>