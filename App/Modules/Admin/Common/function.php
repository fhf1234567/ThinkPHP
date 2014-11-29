<?php
/**
 * Created by PhpStorm.
 * User: haifeng
 * Date: 2014/11/29 0029
 * Time: 10:23
 */

//地柜重组节点信息为多为数组

/**
 * @param $node    [要处理的节点数组]
 * @param int $pid [父级id]
 */
function node_merge($node,$access=null,$pid=0){
    $arr = array();
    foreach($node as $v){
        if(is_array($access)){
            $v['access'] = in_array($v['id'],$access)? 1:0;
        }
        if($v['pid'] == $pid){
            $v['child'] = node_merge($node,$access,$v['id']);
            $arr[] = $v;
        }
    }
    return $arr;
}