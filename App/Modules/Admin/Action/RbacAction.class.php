<?php
/**
 * Created by PhpStorm.
 * User: haifeng
 * Date: 2014/11/26 0026
 * Time: 15:50
 *
 * 给予角色的访问控制
 */
class RbacAction extends Action{

    //添加角色
    public function addRole(){
        $this->display();
    }

    //用户列表
    public function index(){
        $this->display();
    }

    //添加用户
    public function addUser(){
        $this->role = M('role')->select();
        $this->display();
    }

    //添加用户表单处理
    public function addUserHandle(){
        $user = array(
            'username'=>I('username'),
            'password'=>I('password','','md5'),
            'logintime'=>time(),
            'loginip'=>get_client_ip(),
        );

        //所属角色
        $role = array();
        if($uid = M('user')->add($user)){
            foreach($_POST['role_id'] as $v){
                $role[] = array(
                    'role_id'=>$v,
                    'user_id'=>$uid
                );
            }
            //添加用户角色
            M('role_user')->addAll($role);
            $this->success('添加成功',U(GROUP_NAME.'/Rbac/index'));
        }else{
            $this->error('添加失败');
        }
    }

    //节点列表
    public function node(){
        $field = array('id','name','title','pid');
        $node = M('node')->field($field)->order('sort')->select();
        $node = node_merge($node);
        $this->node = $node;
        $this->display();
    }

    //添加节点
    public function addNode(){
        $pid   = I('pid');
        $level = I('level');

        switch($level){
            case '1' :
                $this->type="应用";
                break;
            case '2' :
                $this->type="控制器";
                break;
            case '3' :
                $this->type="动作方法";
                break;
        }

        $this->pid = $pid;
        $this->level = $level;

        $this->display();
    }

    public function addNodeHandle(){
        if(!IS_POST){
            halt('非法请求');
        }
        if(M('node')->add($_POST)){
            $this->success('添加成功',U('Admin/Rbac/node'));
        }else{
            $this->error('添加失败');
        }
    }

    //角色列表
    public function role(){
        $this->role = M('role')->select();
        $this->display();
    }

    public function addRoleHandle(){
        if(M('role')->add($_POST)){
            $this->success('添加成功',U('Admin/Rbac/role'));
        }else{
            $this->error('添加失败',U('Admin/Rbac/addRole'));
        }
    }

    //配置权限
    public function access(){
        $rid = I('rid',0,'intval');
        $field = array('id','name','title','pid');
        $node = M('node')->field($field)->order('sort')->select();

        //原有权限
        $access = M('access')->where(array('role_id'=>$rid))->getField('node_id',true);

        $node = node_merge($node,$access);//节点  权限

        $this->node =  $node;
        $this->rid = $rid;
        $this->display();
    }

    //修改权限
    public function setAccess(){
        $rid = I('rid',0,'intval');
        $data = array();

        foreach($_POST["access"] as $v){
            $tmp  = explode("_",$v);
            $data[] = array(
                "role_id"=>$rid,
                "node_id"=>$tmp[0],
                "level"=>$tmp[1]
            );
        }
        $db = M('access');
        //清空原权限
        $db->where(array("role_id"=>$rid))->delete();
        //添加新权限
        if($db->addAll($data)){
            $this->success('修改成功',U('Admin/Rbac/role'));
        }else{
            $this->error('修改失败');
        }
    }
}