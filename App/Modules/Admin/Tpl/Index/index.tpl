<!DOCTYPE html>
<html>
<js file="__PUBLIC__/Js/jquery-1.7.2.min.js"/>
<js file="__PUBLIC__/Js/index.js"/>
<css file="__PUBLIC__/Css/public.css"/>
<css file="__PUBLIC__/Css/index.css"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
<div id="top">
    <div class="menu">
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
    </div>
    <div class="exit">
        <a href="{:U(GROUP_NAME.'/Login/logout','',false)}" target="_self">退出</a>
        <a href="http://bbs.houdunwang.com" target="_blank">获得帮助</a>
        <a href="http://www.houdunwang.com" target="_blank">后盾网</a>
    </div>
</div>
<div id="left">
    <dl>
        <dt>RBAC</dt>
        <dd><a href="{:U(GROUP_NAME.'/Rbac/addRole','',false)}">添加角色</a></dd>
        <dd><a href="{:U(GROUP_NAME.'/Rbac/role','',false)}">角色列表</a></dd>
        <dd><a href="{:U(GROUP_NAME.'/Rbac/addUser','',false)}">添加用户</a></dd>
        <dd><a href="{:U(GROUP_NAME.'/Rbac/index','',false)}">用户列表</a></dd>
        <dd><a href="{:U(GROUP_NAME.'/Rbac/node','',false)}">节点列表</a></dd>
        <dd><a href="{:U(GROUP_NAME.'/Rbac/addNode','',false)}">添加节点</a></dd>
    </dl>
</div>
<div id="right">
    <iframe name="iframe" src="#"></iframe>
</div>
</body>
</html>