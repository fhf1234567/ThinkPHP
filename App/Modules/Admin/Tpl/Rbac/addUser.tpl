<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <js file="__PUBLIC__/Js/jquery-1.7.2.min.js"/>
    <js file="__PUBLIC__/Js/login.js"/>
    <style>
        .add-role{
            display: inline-block;
            width:100px;
            height:26px;
            line-height:26px;
            text-align:center;
            border:1px solid blue;
            border-radius:4px;
            margin-left:20px;
            cursor:pointer;
        }
    </style>
    <script>
        $(function(){
            $('.add-role').click(function() {
                var obj = $(this).parents('tr').clone();
                obj.find('.add-role').remove();
                $('#last').before(obj);
            });
        });
    </script>
</head>
<body>
<div>
    <form action="{:U(GROUP_NAME.'/Rbac/addUserHandle','',false)}" method="post" id="addUser">
        <table border="1" width="100%">
            <tr>
                <th colspan="2">添加用户:</th>
            </tr>
            <tr>
                <td align="right">用户账号:</th>
                <td><input type="text" class="len250" name="username"/></td>
            </tr>
            <tr>
                <td align="right">用户密码:</td>
                <td><input type="password" name="password" class="len250"/></td>
            </tr>
            <tr>
                <td align="right">所属角色:</td>
                <td>
                    <select name="role_id[]">
                        <option value="">请选择角色</option>
                        <foreach name="role" item="v">
                            <option value="{$v['id']}">{$v.name}({$v.remark})</option>
                        </foreach>
                    </select>
                    <span class="add-role">添加一个角色</span>
                </td>
            </tr>
            <tr  id="last">
                <td colspan="2" align="center" >
                    <input type="submit" value="提交"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>