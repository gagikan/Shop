<?php
class  IndexAction extends Action {
    /*显示主页面  */
    public function index() {
    // 判断username的session是否存在
// 		if (! session ( '?username' )) {
// 			$this->redirect( 'Admin/login',array(),2,'正在进入登录页面......');
// 		}
        $this->display('index');
    }
    
    public function top() {
        $this->display('top');
    }
    public function left() {
        $this->display('left');
    }
    public function right() {
        $this->display('right');
    }
}