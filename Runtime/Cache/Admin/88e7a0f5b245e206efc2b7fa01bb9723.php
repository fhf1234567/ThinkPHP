<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="__PUBLIC__/Css/login.css" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
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
        <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["remark"]); ?></td>
                <td>
                    <?php if($v['status']): ?>开启
                        <?php else: ?>
                        关闭<?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo U('Admin/Rbac/access',array('rid'=>$v['id']),false);?>">配置权限</a>
                </td>
            </tr><?php endforeach; endif; ?>

    </table>
</div>
</body>
</html>