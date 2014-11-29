<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="__PUBLIC__/Css/login.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <js file="__PUBLIC__/Js/jquery-1.7.2.min.js"/>
    <js file="__PUBLIC__/Js/login.js"/>
</head>
<body>
<div class="table">
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>角色名称</th>
            <th>角色描述</th>
            <th>开启状态</th>
            <th>操作</th>
        </tr>
        <foreach name="role" item="v">
            <tr>
                <td>{$v.id}</td>
                <td>{$v.name}</td>
                <td>{$v.remark}</td>
                <td>
                    <if condition="$v['status']">
                        开启
                        <else/>
                        关闭
                    </if>
                </td>
                <td>
                    <a href="{:U('Admin/Rbac/access',array('rid'=>$v['id']),false)}">配置权限</a>
                </td>
            </tr>
        </foreach>

    </table>
</div>
</body>
</html>