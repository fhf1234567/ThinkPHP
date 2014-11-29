<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <js file="__PUBLIC__/Js/jquery-1.7.2.min.js"/>
    <js file="__PUBLIC__/Js/login.js"/>
    <css file="__PUBLIC__/Css/nodex.css"/>
    <css file="__PUBLIC__/Css/login.css"/>
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
<a href="{:U('Admin/Rbac/role')}" class="add-app">返回</a>
<form method="post" action="{:U('Admin/Rbac/setAccess')}">
    <div id="wrap">
        <foreach name="node" item="v">
            <div class="app">
                <p>
                    <strong>{$v.title}</strong>
                    <input type="checkbox" name="access[]" value="{$v.id}_1" level="1"
                    <if condition="$v['access']"> checked ='checked'</if> />
                </p>
                <foreach name="v.child" item="action">
                    <div class="app1">
                        <dl>
                            <dt>
                                <strong>{$action.title}</strong>
                                <input type="checkbox" name="access[]" value="{$action.id}_2" level="2"
                                <if condition="$action['access']"> checked ='checked'</if> />
                            </dt>
                        </dl>
                        <foreach name="action.child" item="method">
                            <dd>
                                <strong>{$method.title}</strong>
                                <input type="checkbox" name="access[]" value="{$method.id}_3" level="3"
                                <if condition="$method['access']"> checked ='checked'</if> />
                            </dd>
                        </foreach>
                    </div>
                    <div class="clear"></div>
                </foreach>
            </div>
        </foreach>
    </div>
    <input type="hidden" name="rid" value="{$rid}"/>
    <input type="submit" value="保存修改" style="display:block;margin:20px auto;"/>
</form>
</body>
</html>