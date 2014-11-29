<?php
/**
 * Created by PhpStorm.
 * User: haifeng
 * Date: 2014/11/29 0029
 * Time: 15:10
 *
 * 用户与角色关联模型
 */

class UserRelationModel extends RelationModel{

    //定义主表名称
    protected $tableName = "user";


    //定义关联关系
    protected $_link = array(
        'role'=>array(
            'mapping_type'=>MANY_TO_MANY,
            'relation_table'=>'think_role_user',//中间表
            'foreign_key'=>'user_id',//主表外键名称
            'relation_key'=>'role_id',//副表外键
            'mapping_fields'=>'id,name,remark'
        ),
    );

}