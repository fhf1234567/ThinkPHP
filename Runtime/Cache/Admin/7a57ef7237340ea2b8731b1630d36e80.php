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
</head>
<body>
<div>
    <form action="<?php echo U(GROUP_NAME.'/Rbac/addNodeHandle','',false);?>" method="post" id="addNode">
        <table border="1" width="100%">
            <tr>
                <th colspan="2">添加节点:</th>
            </tr>
            <tr>
                <td align="right"><?php echo ($type); ?>名称:</th>
                <td><input type="text" class="len250" name="name"/></td>
            </tr>
            <tr>
                <td align="right"><?php echo ($type); ?>描述:</td>
                <td><input type="text" class="len250" name="title"/></td>
            </tr>
            <tr>
                <td align="right">是否开启:</td>
                <td>
                    <input type="radio" name="status" value="1" checked>&nbsp;开启
                    <input type="radio" name="status" value="0">&nbsp;不开启
                </td>
            </tr>
            <tr>
                <td align="right">排序
                </td>
                <td><input type="text" name="sort" value="1"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center" >
                    <input type="hidden" name="pid" value="<?php echo ($pid); ?>"/>
                    <input type="hidden" name="level" value="<?php echo ($level); ?>"/>
                    <input type="submit" value="提交"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>