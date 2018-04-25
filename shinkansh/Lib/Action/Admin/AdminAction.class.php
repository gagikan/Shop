<?php
class AdminAction extends Action {
    public function t1() {
        // 创建session
        session ( 'username', 'shinkan' );
        session ( 'password', 'shinkan' );
    }
    public function t2() {
        // 获取session的值
        echo '用户:' . session ( 'username' ) . '<hr>';
        echo '密码：' . session ( 'password' ) . '<hr>';
    }
    
    public function login() {
        import ( '@.Common.Cart' );
        $cart = new Cart();
        var_dump($cart);
        D('Admin')->select();
        $this->display('login');
    }
    
        /*  检查用户登陆成功*/
    public function checkLogin() {
        // 获取用户输入的验证码
        $code = $_POST ['code'];
        // 判断验证码与用户输入的是否一致
        if (session ( 'verify' ) != md5 ( $code )) {
            $this->error ( '验证码不正确', 'login' );
            exit ();
        }
        if(isset ($_POST['btnOk'])) {
            $username = $_POST ['username'];
            $password = $_POST ['password'];
            $count = D ( 'Admin' )->where ( "username='$username' and password='$password'" )->count ();
            // 如果返回结果大于0，表示登录成功
            if ($count > 0) {
                // 记录登录管理员的用户名
                session ( 'username', $username ); 
                $this->redirect ( 'Index/index', array (), 3, '系统登录中......' );
            } else {
                // 登录失败
                $this->error ( '登录失败', 'login' );
            }
        }
    }
    /**
     * 用于创建验证码图片
     */
    public function createCode() {
        import ( 'ORG.Util.Image' );
        Image::buildImageVerify ();
    }
}