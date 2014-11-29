<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <js file="__PUBLIC__/Js/jquery-1.7.2.min.js"/>
    <js file="__PUBLIC__/Js/login.js"/>
    <css file="__PUBLIC__/Css/nodex.css"/>
    <css file="__PUBLIC__/Css/login.css" />
</head>
<body>
<div id="wrap">
    <a href="{:U('Admin/Rbac/addNode')}" class="add-app">添加应用</a>
        <foreach name="node" item="v">
            <div class="app">
            <p>
                <strong>{$v.title}</strong>
                [<a href="{:U('Admin/Rbac/addNode',array('pid'=>$v['id'],'level'=>2),false)}">添加控制器</a>]
                [<a href="{:U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false)}">修改</a>]
                [<a href="{:U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false)}">删除</a>]
             </p>
            <foreach name="v.child" item="action">
                <dl>
                    <dt>
                        <strong>{$action.title}</strong>
                        [<a href="{:U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>3),false)}">添加方法</a>]
                    </dt>
                </dl>
                <foreach name="action.child" item="method">
                    <dd>
                        <strong>{$method.title}</strong>
                        [<a href="{:U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false)}">修改</a>]
                        [<a href="{:U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false)}">删除</a>]
                    </dd>
                </foreach>
                <div class="clear"></div>
            </foreach>
        </div>
    </foreach>
</div>
</body>
</html>