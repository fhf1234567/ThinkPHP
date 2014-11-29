<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/nodex.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css" />
</head>
<body>
<div id="wrap">
    <a href="<?php echo U('Admin/Rbac/addNode');?>" class="add-app">添加应用</a>
        <?php if(is_array($node)): foreach($node as $key=>$v): ?><div class="app">
            <p>
                <strong><?php echo ($v["title"]); ?></strong>
                [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$v['id'],'level'=>2),false);?>">添加控制器</a>]
                [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false);?>">修改</a>]
                [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false);?>">删除</a>]
             </p>
            <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$action): ?><dl>
                    <dt>
                        <strong><?php echo ($action["title"]); ?></strong>
                        [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>3),false);?>">添加方法</a>]
                    </dt>
                </dl>
                <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                        <strong><?php echo ($method["title"]); ?></strong>
                        [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false);?>">修改</a>]
                        [<a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$action['id'],'level'=>4),false);?>">删除</a>]
                    </dd><?php endforeach; endif; ?>
                <div class="clear"></div><?php endforeach; endif; ?>
        </div><?php endforeach; endif; ?>
</div>
</body>
</html>