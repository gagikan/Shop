<?php

class CategoryAction extends Action
{

    /**
     * 创建方法用于显示所有一级分类
     */
    public function createFirst() {
        // 获取上级分类id
        $cid = $_POST ['cid'];
        // 查询上级分类id为指定值的所有分类
        $data = D ( 'category' )->where ( "cid='$cid'" )->select ();
        // 返回Ajax数据
        $this->ajaxReturn ( $data, '查询完毕', 1 );
    }
    
    public function add()
    {
        echo '<pre>';
        // $category = new CategoryModel();
        // $category = D('Category');
        
        // $category = new Model('Category');
        $cate = D('category');
        $data = $cate->where('cid=0')->select();
        // var_dump($category);
        $this->assign('data', $data);
        $this->display('add');
    }

    /* 添加分类信息 */
    public function addOK()
    {
        if (isset($_POST['submit'])) {
            // $cid=$_POST['cid'];
            // $name=$_POST['name'];
            // $content=$_POST['content'];
            
            $cate = D('category');
            // 自动创建
            $cate->create();
            // $data = array('name'=>$name,'content'=>$content,'cid'=>$cid);
            if ($cate->add()) {
                $this->success('录入成功咯', 'add');
            } else {
                $this->error('录入失败', 'add');
            }
        }
    }

    /* 实现增 */
    public function zeng()
    {
        $category = D('category');
        $category->add(array(
            'id' => 41,
            'name' => 'wangcai',
            'age' => 29
        )
        );
    }

    /* 实现删除 */
    public function shan()
    {
        $category = D('category');
        $category->delete(38);
    }

    /* 修改 */
    public function gai()
    {
        $category = new Model('category');
        $category->save(array(
            'id' => 39,
            'name' => 'saotang'
        ));
    }

    /* 查询 */
    public function zhao()
    {
        $category = M('category');
        $row = $category->find(39);
        var_dump($row);
    }

    public function test2()
    {
        // echo '<pre>';
        // $cate = D('category');
        // var_dump($cate);
        $cate = D('category');
        $cate->add(array(
            'name' => 'sao1',
            'content' => 'zhensao',
            'cid' => 1
        ));
        $cate->add(array(
            'id'=>40,
            'name' => 'sao2',
            'content' => 'zhensao',
            'cid' => 1
        ));
        $cate->add(array(
            'name' => 'sao3',
            'content' => 'zhensao',
            'cid' => 1
        ));
    }
/* 显示管理分类页面 */
    public function admin() {
       // 导入分页类
		import ( 'ORG.Util.Page' );
		// 实例化对象
		$cate = D ( 'Category' );
		// 查询数据总数
		$count = $cate->count ();	
		// 实列化分页对象
		$page = new Page ( $count, 30 );
		// 定制相关样式
		$page->setConfig ( 'header', '个分类' );
		// 返回页脚信息
		$show = $page->show ();
		// 分配页脚信息
		$this->assign ( 'show', $show );
		// 查询所有数据
		$data = $cate->select ();
		// 加载函数文件
		load ( '@.tree' );
		// 生成树状结构
		$data = getTree ( $data );
		// 截取之后的数组
		$list = array_slice ( $data, $page->firstRow, $page->listRows );
		// 分配数组数据
		$this->assign ( 'data', $list );
		//   显示模板
		$this->display ( 'admin' );
        
        
    }
    /* 修改按页面*/
    public function edit() {
        $id = $_GET['id'];
       $row = D('category')->find($id);
       $data = D('category')->where('cid=0')->select();
       $this->assign('row',$row);
       $this->assign('data',$data);
       $this->display('edit');
    }
    /*用于实现批量删除  */
    public function deleteAll() {
        if(isset ($_POST['deleteSubmit'])){
            $id = $_POST['id'];
            $where = implode(',',$id);
            if(D('category')->delete($where)) {
                $this->success('删除成功','admin');
            }else {
                $this->error('删除失败'.'admin');
            }
        }
    }
    public function test()
    {
        $this->assign('name', 'shinkan');
        $this->assign('person', array(
            'name' => 'shinkan',
            'age' => 29
        ));
        $obj = new stdClass();
        $obj->email = '197@qq.com';
        
        $this->assign('shin', $obj);
        $this->display();
    }
}