<?php
    class LoginAction extends Action{

        /*
         * 用户登入
         */
        public function login(){
            $this->display();
        }

        /*
         * 用户登出
         */
        public function logout(){
            session_unset();
            session_destroy();
            $this->redirect('Admin/Login/login');
        }

        /*
        * 验证码
        */
        public function verify(){
            import('ORG.Util.Image');
            Image::buildImageVerify(4,1,'png',60,30,'verify');
        }

        /*
         * 处理登陆表单
         */
        public function doLogin(){
            if(!IS_POST) halt('非法请求');
            $username = I('username');
            $password = I('password');

            if(I('code','','md5')!= $_SESSION['verify']){
                halt('验证码错误');
            }
            $user = M('user')->where(array('username'=>$username))->find();
            if(!$user){
                $this->error('用户名不正确');
            }

            if( $user['password'] !== md5($password)){
                $this->error('密码不正确');
            }

            $data = array(
                'id'=>$user['id'],
                'username'=>$user['username'],
                'loginip'=>get_client_ip(),
                'logintime'=>time(),
            );

            if(M('user')->data($data)->save()){
                session('id',$user['id']);
                session('username',$user['username']);
                session('logintime',time());
                $this->redirect(GROUP_NAME.'/Admin/Index/index');
            }else{
                $this->redirect(GROUP_NAME.'/Admin/Login/login');
            }
        }
    }
?>
