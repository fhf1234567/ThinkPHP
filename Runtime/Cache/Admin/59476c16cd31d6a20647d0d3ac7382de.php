<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/nodex.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css" />
    <script type="text/javascript">
        $(function () {
            $('input[level=1]').click(function () {
                var inputs = $(this).parents('.app').find('input');
                $(this).attr('checked') ? inputs.attr('checked', 'checked') :
                        inputs.removeAttr('checked');

            });

            $('input[level=2]').click(function () {
                var inputs = $(this).parents('.app1').find('input');
                $(this).attr('checked') ? inputs.attr('checked', 'checked') :
                        inputs.removeAttr('checked');
            });
        });
    </script>
</head>
<body>
<a href="<?php echo U('Admin/Rbac/role');?>" class="add-app">返回</a>
<form method="post" action="<?php echo U('Admin/Rbac/setAccess');?>">
    <div id="wrap">
        <?php if(is_array($node)): foreach($node as $key=>$v): ?><div class="app">
                <p>
                    <strong><?php echo ($v["title"]); ?></strong>
                    <input type="checkbox" name="access[]" value="<?php echo ($v["id"]); ?>_1" level="1"
                    <?php if($v['access']): ?>checked ='checked'<?php endif; ?> />
                </p>
                <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$action): ?><div class="app1">
                        <dl>
                            <dt>
                                <strong><?php echo ($action["title"]); ?></strong>
                                <input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_2" level="2"
                                <?php if($action['access']): ?>checked ='checked'<?php endif; ?> />
                            </dt>
                        </dl>
                        <?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
                                <strong><?php echo ($method["title"]); ?></strong>
                                <input type="checkbox" name="access[]" value="<?php echo ($method["id"]); ?>_3" level="3"
                                <?php if($method['access']): ?>checked ='checked'<?php endif; ?> />
                            </dd><?php endforeach; endif; ?>
                    </div>
                    <div class="clear"></div><?php endforeach; endif; ?>
            </div><?php endforeach; endif; ?>
    </div>
    <input type="hidden" name="rid" value="<?php echo ($rid); ?>"/>
    <input type="submit" value="保存修改" style="display:block;margin:20px auto;"/>
</form>
</body>
</html>