<?php
class GoodsAction extends Action {
	
	/**
	 * 显示商品录入页面
	 */
	public function add() {
	    $data = D ( 'Category' )->where ( 'cid>0' )->select ();
	    $this->assign ( 'data', $data );
		$this->display ( 'add' );
	}
	
	/**
	 * 完成商品信息录入
	 */
	public function addOk() {
	    if (isset ( $_POST ['submit'] )) {
	        // 导入上传类
	        import ( 'ORG.Net.UploadFile' );
	        // 实例化上传类对象
	        $upload = new UploadFile ();
	        $upload->savePath='./Public/Upload/';
	        $upload->saveRule = 'time';
	        $upload->subType = 'date';
	        $upload->dateFormat = 'Ym';
	        // 设置允许上传文件的后缀名
	        $upload->allowExts = array (
	            'png',
	            'jpg'
	        );
	        $upload->autoSub = true;
	        // 判断是否上传成功
	        if ($upload->upload ()) {
	            // 如果上传成功，获取上传的文件相关信息
	            $info = $upload->getUploadFileInfo ();
// 	            var_dump($info);
	        } else {
	            // 如果上传失败，提示相关失败原因
	            $this->error ( $upload->getErrorMsg (), 'add' );
	            exit ();
	        }
	        // 上传成功的文件名称
	        $_POST ['photo'] = $info [0] ['savename'];
	        $goods = D ( 'Goods' );
	        $goods->create ();
	        
	        if ($goods->add ()) {
	            $this->success ( '录入成功', 'add' );
	        } else {
	            $this->error ( '录入失败', 'add' );
	        }
	    }
	}
	
	/**
	 * 显示管理商品页面
	 */
	public function admin() {
	    import ( 'ORG.Util.Page' );
	    $goods = D ( 'Goods' );
	    $count = $goods->count ();
	    $page = new Page ( $count, 5 );
	    $show = $page->show ();
	    $data = $goods->field('t2.id id,t2.name goods_name,t2.price goods_price,t1.name cate_name')
	    ->table('category t1,goods t2')
	    ->where ('t1.id=t2.cid')
	    -> limit ( $page->firstRow . ',' . $page->listRows )
	    ->select ();
	    $this->assign ( 'show', $show );
	    $this->assign ( 'data', $data );
	    $this->display ( 'admin' );
	}
	/**
	 * 实现批量删除
	 */
	public function deleteAll() {
	    if (isset ( $_POST ['deleteSubmit'] )) {
	        $id = $_POST ['id'];
	        $where = implode ( ',', $id );
	        if (D ( 'Goods' )->delete ( $where )) {
	            $this->success ( '删除成功', 'admin' );
	        } else {
	            $this->error ( '删除失败', 'admin' );
	        }
	    }
	}
	
	/**
	 * 显示修改页面
	 */
	public function edit() {
	
	    // 查询要修改的商品信息
	    $id = $_GET ['id'];
	    $goods = D ( 'Goods' );
	    $row = $goods->find ( $id );
	    $this->assign ( 'row', $row );
	
	    // 查询所有二级分类信息
	    $data = D ( 'Category' )->where ( 'cid>0' )->select ();
	    $this->assign ( 'data', $data );
	
	    $this->display ( 'edit' );
	}
	/**
	 * 实现修改功能
	 */
	public function editOk() {
	    if (isset ( $_POST ['submit'] )) {
	        $goods = D ( 'Goods' );
	        $goods->create ();
	        if ($goods->save ()) {
	            $this->success ( '操作成功', 'admin' );
	        } else {
	            $this->error ( '操作失败', 'admin' );
	        }
	    }
	}
}