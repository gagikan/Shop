<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/pc/rainbow/cart\integral.html";i:1509957168;s:45:"./template/pc/rainbow/public\sign-header.html";i:1509957168;s:40:"./template/pc/rainbow/public\footer.html";i:1509957168;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>积分商品结算-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
	<meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>"/>
	<meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>"/>
	<script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/css/base.css"/>
	<script src="__PUBLIC__/js/global.js"></script>
	<script src="__PUBLIC__/js/pc_common.js"></script>
	<script src="__PUBLIC__/js/layer/layer.js"></script>
	<link href="__STATIC__/css/common.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="__STATIC__/css/jh.css">
</head>
<body>
<div class="m-top-bar editable" moduleid="1539923" style="position:relative;min-height:25px;">
  <div class="container">
    <ul class="fl">
        <!--<?php if($user[user_id] > 0): ?>-->
            <!--<li class="fl J_login_status"><a href="<?php echo U('Home/user/index'); ?>" alt="" title="" target="_self"><?php echo $user['nickname']; ?></a>-->
                <!--<a  href="<?php echo U('Home/user/logout'); ?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>-->
            <!--</li>-->
            <!--<?php else: ?>-->
            <!--<li class="fl J_login_status"><a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login'); ?>">-->
                <!--<span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>-->
        <!--<?php endif; ?>-->
        <div class="ls-dlzc fl nologin">
            <a href="<?php echo U('Home/user/login'); ?>">Hi,请登录</a>
            <a class="red" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>
        </div>
        <div class="ls-dlzc fl islogin">
            <a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
            <a href="<?php echo U('Home/user/logout'); ?>">退出</a>
        </div>
        <script>
            $(function (){
                    var uname = getCookie('uname');
                    if (uname == '') {
                        $('.islogin').remove();
                        $('.nologin').show();
                    } else {
                        $('.nologin').remove();
                        $('.islogin').show();
                        $('.userinfo').html(decodeURIComponent(uname).substring(0,5));
                    }
            })

        </script>
      <li class="fl sep"></li>
      <!--<li class="fl select-city dropdown">
        <span class="menu-item">
        <span>送货至：</span>
        <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
      </li>-->
    </ul>
    <ul class="fr bar-right">
      <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="<?php echo U('/Home/User/index'); ?>">
        <span>我的商城</span><i class="dd"></i></a>
        <ul class="sub-panel">
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/User/account'); ?>">我的积分</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/User/coupon'); ?>">我的优惠券</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏夹</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/User/comment'); ?>">我的评论</a></li>
        </ul>
      </li> 
      <li class="fl sep"></li>
      <li class="fl dropdown mobile-feiniu"><a class="menu-item" href=""><i class="fl ico"></i>
        <span class="fl">手机TPshop网</span>
        <i class="dd"></i></a>
        <div class="sub-panel m-lst">
          <p>扫一扫，下载TPshop客户端</p>
          <dl>
            <dt class="fl mr10"><a target="_blank" href=""><img height="80" width="80" src="__STATIC__/images/qrcode_vmall_app01.png"></a></dt>
            <dd class="fl mb10"><a target="_blank" href=""><i class="andr"></i> Andiord</a></dd>
            <dd class="fl"><a target="_blank" href=""><i class="iph"></i> iPhone</a></dd>
          </dl>
        </div>
      </li>
      <li class="fl sep"></li>
      <li class="fl">
          <a class="menu-item" href="<?php echo U('Home/Article/detail'); ?>" target="_blank"><span>帮助中心</span></a>
      </li>
      <li class="fl sep"></li>
      <li class="fl about-us"><a class="txt fl" style="line-height:unset;" href="">关注我们：</a></li>
      <li class="fl dropdown weixin"><a href="" class="fl ico"></a>
        <div class="sub-panel wx-box">
          <span class="arrow-b">◆</span>
          <span class="arrow-a">◆</span>
          <p class="n"> 扫描二维码 <br>	关注TPshop网官方微信 </p>
          <img src="__STATIC__/images/qrcode_vmall_app01.png"></div>
      </li>
    </ul>
  </div>
</div>
<div class="fn-cart-confirm">
	<!-- cart-title -->
	<div class="wrapper1190">
		<div class="order-header">
			<div class="layout after">
				<div class="fl">
					<div class="logo pa-to-36 wi345">
						<a href="/"><img src="__PUBLIC__/images/newLogo.png" alt=""></a>
					</div>
				</div>
				<div class="fr">
					<div class="pa-to-36 progress-area">
						<div class="progress-area-wd" style="display:none">我的购物车</div>
						<div class="progress-area-tx">填写核对订单信息</div>
						<div class="progress-area-cg" style="display:none">成功提交订单</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end cart-title -->
		<!-- end收货信息 -->
		<form name="cart2_form" id="cart2_form" method="post">
			<input type="hidden" name="goods_id" value="<?php echo \think\Request::instance()->param('goods_id'); ?>">
			<input type="hidden" name="item_id" value="<?php echo \think\Request::instance()->param('item_id'); ?>">
			<input type="hidden" name="goods_num" value="<?php echo \think\Request::instance()->param('goods_num'); ?>">
			<div class="layout be-table fo-fa ma-bo-45">
				<div class="con-info">
					<div class="con-y-info ma-bo-35">
						<h3>收货人信息<b>[<a href="javascript:void(0);" onClick="add_edit_address(0);">使用新地址</a>]</b></h3>

						<div id="ajax_address"><!--ajax 返回收货地址--></div>
						<h3 style="margin-top:30px">自提点</h3>
						<div id="ajax_pickup"><!--ajax 返回自提点--></div>
					</div>
					<div class="con-y-info ma-bo-35 con-h">
						<h3>发票信息<em>(请谨慎选择发票抬头，订单出库后不能修改)</em></h3>

						<div class="order-invoice-list">
							<ul>
								<li>
									<div class="invoice-main fl"><label for="dw">发票抬头:</label></div>
									<div class="invoice-sub fl">
										<label class="inv-label">
											<input class="officdw" type="text" value="个人" name="invoice_title" placeholder="XXX单位 或 XX个人"/>
										</label>
									</div>
								</li>
							</ul>
						</div>
						<p class="tips"><em>注意：</em>如果商品由第三方卖家销售，发票内容由其卖家决定，发票由卖家开具并寄出</p>
					</div>
				</div>
				<div class="sc-area">
					<div class="dt-order-area">
						<div class="order-pro-list">
							<!--商品列表-->
							<div class="order-pro-list">
								<div class="yxspy">
									<div class="hv"><?php echo $v[store_name]; ?></div>
									<div class="bv">
										<table border="0" cellpadding="0" cellspacing="0">
											<thead>
											<tr>
												<th class="tr-pro">商品</th>
												<th class="tr-price">单价（元）</th>
											<//if condition="($user[discount] neq 1)">
											<!--<th class="tr-price">会员折扣价</th>-->
											<th class="tr-price"></th>
											<///if>
											<th class="tr-quantity">数量</th>
											<th class="tr-subtotal">小计（元）</th>
											</tr>
											</thead>
										</table>
									</div>
								</div>
								<div class="leiliste">
									<table width="100%" border="0" cellpadding="0" cellspacing="0">
										<tbody>
										<tr>
											<td class="tr-pro">
												<ul class="pro-area-2">
													<li>
														<a title="<?php echo $goods['goods_name']; ?>" target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods[goods_id])); ?>"><?php echo $goods['goods_name']; ?></a><?php echo $specGoodsPrice['key_name']; ?>
													</li>
												</ul>
											</td>
											<td class="tr-price te-al">¥<?php echo $goods_price; ?></td>
											<td class="tr-price te-al"></td>
											<td class="tr-quantity te-al"><?php echo $goods_num; ?></td>
											<td rowspan="1" class="tr-subtotal te-al">
												<p><b>￥<?php echo $goods_price; ?></b></p>
											</td>
										</tr>
										<tr>
											<td colspan="4">
												<span class="span_ored">选择物流:</span>
												<select onchange="ajax_order_price();" class="vam ou-no" name="shipping_code">
													<?php if(is_array($shippingList) || $shippingList instanceof \think\Collection || $shippingList instanceof \think\Paginator): if( count($shippingList)==0 ) : echo "" ;else: foreach($shippingList as $k4=>$v4): ?>
														<option value="<?php echo $v4['code']; ?>"  ><?php echo $v4['name']; ?></option>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
											</td>
											<td rowspan="1" class="tr-subtotal te-al">
												<p>￥<b id="shipping_price">0</b></p>
											</td>
										</tr>
										<tr>
											<td colspan="5">
												<span class="span_ored">给卖家留言:</span>
												<input class="span_text texter tapassa" type="text" name="user_note" onkeyup="checkfilltextarea('.tapassa','50')" />
												<span class="xianzd"><em id="zero">50</em>/50</span>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<br/>
							<!--商品列表 end-->
						</div>
						<div class="order-pro-total">
							<div class="fl wctmes">
								<div class="syyouhui pa-to-15">
									<div class="byicd">
										<div class="zhiwfnka">
											<table border="0" cellpadding="0" cellspacing="0">
												<tbody>
												<tr>
													<td>
														<label class="fo-fa-ta">余额支付:</label>
														<input type="text" id="user_money" name="user_money" class="texter vam span-150 ma-ri-10 he18 li-he-18" placeholder="请输入使用余额" onkeyup="this.value=/^\d+\.?\d{0,2}$/.test(this.value) ? this.value : ''"/>
														<input type="button" class="button-style-disabled-4 button-action-use-disabled te-al ou-no vam" value="使用" onClick="wield(this);"/> 您的可用余额 ¥ <?php echo $user['user_money']; ?>
													</td>
												</tr>
												<tr>
													<td>
														<label class="fo-fa-ta">积分支付:</label>
														<input type="text" id="pay_points" name="pay_points" class="texter vam span-150 ma-ri-10 he18 li-he-18" disabled="disabled"/>

														<?php echo tpCache('shopping.point_rate');?>
														积分抵 1元 &nbsp;&nbsp; 您的可用积分 <?php echo $user['pay_points']; ?> 分
													</td>
												</tr>
												<input style="display:none" type="password" name="pwd"/>
												<!--解决google浏览器识别text+password,自动填充已保存的账户密码-->
												<tr>
													<td>
														<label class="fo-fa-ta" for="pwd">支付密码:</label>
														<input type="password" id="pwd" class="texter vam span-150 ma-ri-10 he18 li-he-18" placeholder="请输入支付密码"/>
														<?php if(empty($user['paypwd'])): ?>
															请先<a href="<?php echo U('User/paypwd'); ?>" class="red">设置支付密码</a>
														<?php endif; ?>
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="fr wcnhy">
								<div class="fzoubddv">
									<table width="100%" border="0" cellpadding="0" cellspacing="0">
										<tbody>
										<tr>
											<td class="tal">商品总金额：</td>
											<td class="tar">&nbsp;¥&nbsp;
												<em id="totalFee"><?php echo $goods_price * $goods_num; ?></em>
											</td>
										</tr>
										<tr>
											<td class="tal">运费：</td>
											<td class="tar">&nbsp;¥&nbsp;
												<em id="postFee">0.00</em>
											</td>
										</tr>
										<tr>
											<td class="tal">使用积分：</td>
											<td class="tar">-&nbsp;¥&nbsp;
												<em><span id="pointsFee">0.00</span> </em>
											</td>
										</tr>
										<tr>
											<td class="tal">使用余额:</td>
											<td class="tar">-&nbsp;¥&nbsp;
												<em><span id="balance">0.00</span> </em>
											</td>
										</tr>
										</tbody>
									</table>
									<p class="yifje-order">
		                            	<span class="p-subtotal-price"> 应付金额：
		                                    <b class="total">¥</b>
		                                    <b class="total" id="payables">0.00</b>
		                                </span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="order-action-area te-al-ri">
						<div class="woypdbe sc-acti-list">
							<!--<span class="p-subtotal-price">应付总额：<b>¥<span class="vab" id="payableTotal">2276.00</span></b></span>-->
							<a class="Sub-orders gwc-qjs" href="javascript:void(0);" onClick="submit_order();"><span>提交订单</span></a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- 提示切换省份 -->
<div id="changeProvince" style="display: none;">
	<div class="mask mask-cs-05 mask-4">
		<div class="mk-title">
			<h3>温馨提示</h3>
			<i data-x="1" class="mask-close-x changeAddrX"></i></div>
		<div class="mk-adc">
			<div class="cs-01"> 您目前所在的省份为<strong>上海</strong>，选择<strong>安徽省</strong>的收货地址后，您购买的商品及价格将发生变化。</div>
			<div class="cs-03">
				<button class="btn btn-red confirmChangeCity">切换省份</button>
				<button class="btn mask-close-x changeAddrX" data-x="1">取消</button>
			</div>
		</div>
	</div>
</div>
<!-- end 提示切换省份 -->
<!-- 提示配送商品 -->
<div id="sorryTipLayer" style="display:none;">
	<div class="tipLayerCont">
		<p class="tip">对不起，以下商品暂时无法送达至<b>江苏省</b><b>无锡市</b><b>锡山区</b></p>

		<div class="tipLayerList">
			<div class="listHead"><span class="name">商品名称</span> <span class="spec">规格</span> <span class="num">数量</span> <span class="price">金额</span></div>
			<div class="listCont"></div>
		</div>
	</div>
</div>
<!-- end 提示配送商品 -->
<!--footer-s-->
<div class="footer p">
	<div class="tpshop-service">
	<ul class="w1224 clearfix">
		<li>
			<i class="ico ico-day7"></i>
			<p class="service">7天无理由退货</p>
		</li>
		<li>
			<i class="ico ico-day15"></i>
			<p class="service">15天免费换货</p>
		</li>
		<li>
			<i class="ico ico-quality"></i>
			<p class="service">正品行货 品质保障</p>
		</li>
		<li>
			<i class="ico ico-service"></i>
			<p class="service">专业售后服务</p>
		</li>
	</ul>
</div>
<div class="footer">
	<div class="w1224 clearfix" style="padding-bottom: 10px;">
		<div class="left-help-list clearfix">
			<div class="clearfix">
				<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where cat_id < 6");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where cat_id < 6"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
					<dl>
						<dt><?php echo $v[cat_name]; ?></dt>
						<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5"); 
                                    S("sql_".$md5_key,$sql_result_v2,86400);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
						<dd><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a></dd>
						<?php endforeach; ?>
					</dl>
				<?php endforeach; ?>
			</div>
			<div class="friendship-links">
	            <span>友情链接 : </span>
                <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__friend_link` where is_show=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__friend_link` where is_show=1"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                    <a href="<?php echo $v[link_url]; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> ><?php echo $v[link_name]; ?></a>
                <?php endforeach; ?>
	        </div>	
		</div>
		<div class="right-contact-us">
			<h3 class="title">联系我们</h3>
			<span class="phone"><?php echo $tpshop_config['shop_info_phone']; ?></span>
			<p class="tips">周一至周日8:00-18:00<br />(仅收市话费)</p>
			<div class="qr-code-list clearfix">
				<a class="qr-code" href="javascript:;"><img class="w-100" src="__STATIC__/images/qrcode.png" alt="" /></a>
				<a class="qr-code qr-code-tpshop" href="javascript:;"><img class="w-100" src="__STATIC__/images/qrcode.png" alt="" /></a>
			</div>
		</div>
	</div>
    <div class="mod_copyright p">
        <div class="grid-top">
            <a href="javascript:void (0);">关于我们</a><span>|</span>
            <a href="javascript:void (0);">联系我们</a><span>|</span>
            <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>
                <span>|</span>
            <?php endforeach; ?>
        </div>
        <p>Copyright © 2016-2025 TPshop商城 版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>
        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
        </p>
    </div>
</div>
<style>
    .mod_copyright {
        border-top: 1px solid #EEEEEE;
    }
    .grid-top {
        margin-top: 20px;
        text-align: center;
    }
    a {
        text-decoration: none;
        color: #666;
    }
    a {
        background: transparent;
    }
    .grid-top span {
        margin: 0 10px;
        color: #ccc;
    }
    .mod_copyright > p {
        margin-top: 10px;
        color: #666;
        text-align: center;
    }
    .mod_copyright_auth_ico {
        overflow: hidden;
        display: inline-block;
        margin: 0 3px;
        width: 103px;
        height: 32px;
        background-image: url(__STATIC__/images/ico_footer.png);
        line-height: 1000px;
    }
    .mod_copyright_auth_ico_1 {
        background-position: 0 -151px;
    }
    .mod_copyright_auth_ico_2 {
        background-position: -104px -151px;
    }
    .mod_copyright_auth_ico_3 {
        background-position: 0 -184px;
    }
    .mod_copyright_auth_ico_4 {
        background-position: -104px -184px;
    }
    .mod_copyright_auth_ico_5 {
        background-position: 0 -217px;
    }
</style>
</div>
<!--footer-e-->
<script>
	/**
	 * 留言字数限制
	 * tea ：要限制数字的class名
	 * nums ：允许输入的最大值
	 * zero ：输入时改变数值的ID
	 */
	function checkfilltextarea(tea,nums){
		var len = $(tea).val().length;
		if(len > nums){
			$(tea).val($(tea).val().substring(0,nums));
		}
		var num = nums - len;
		num <= 0 ? $("#zero").text(0): $("#zero").text(num);  //防止出现负数
	}
	$(document).ready(function () {
		ajax_address(); // 获取用户收货地址列表
	});

	function wield(obj){
		if($.trim($(obj).prev().val()) !=''){
			layer.msg('正在计算金额...',{icon:1});
			ajax_order_price(); // 计算订单价钱
		}
	}
	/**
	 * 新增修改收货地址
	 * id 为零 则为新增, 否则是修改
	 *  使用 公共的 layer 弹窗插件  参考官方手册 http://layer.layui.com/
	 */
	function add_edit_address(id) {
		if (id > 0)
			var url = "/index.php?m=Home&c=User&a=edit_address&scene=1&call_back=call_back_fun&id=" + id; // 修改地址  '<?php echo U('Home/User/add_address',array('scene'=>'1','call_back'=>'call_back_fun','id'=>id)); ?>' //iframe的url /index.php/Home/User/add_address
		else
			var url = "/index.php?m=Home&c=User&a=add_address&scene=1&call_back=call_back_fun";	// 新增地址
		layer.open({
			type: 2,
			title: '添加收货地址',
			shadeClose: true,
			shade: 0.8,
			area: ['880px', '580px'],
			content: url,
		});
	}
	// 添加修改收货地址回调函数
	function call_back_fun(v) {
		layer.closeAll(); // 关闭窗口
		ajax_address(); // 刷新收货地址
	}

	// 删除收货地址
	function del_address(id) {
		layer.confirm('确定要删除吗？', {
					btn: ['确定','取消'] //按钮
				}, function(index){
					layer.close(index);
					// 确定
					$.ajax({
						url: "/index.php?m=Home&c=User&a=del_address&id=" + id,
						success: function (data) {
							ajax_address(); // 刷新收货地址
							$('#ajax_pickup .order-address-list').removeClass('address_current');

						}
					});
					layer.closeAll(); // 关闭窗口
				}, function(index){
					layer.close(index);
				}
		);
	}

	/*
	 * ajax 获取当前用户的收货地址列表
	 */
	function ajax_address() {
		$.ajax({
			url: "<?php echo U('Home/Cart/ajaxAddress'); ?>",//+tab,
			success: function (data) {
				$("#ajax_address").html('').append(data);
				if (data != '') {
					// 有收货地址列表 再计算价钱
					ajax_order_price(); // 计算订单价钱
				}else{
					add_edit_address(0);
				}
			}
		});
	}

	// 切换收货地址
	function swidth_address(obj) {
		var province_id = $(obj).attr('data-province-id');
		var city_id = $(obj).attr('data-city-id');
		var district_id = $(obj).attr('data-district-id');
		if (typeof($(obj).attr('data-province-id')) != 'undefined') {
			ajax_pickup(province_id,city_id,district_id,0);
		}
		$(".order-address-list").removeClass('address_current');
		$(obj).parent().parent().parent().parent().parent().addClass('address_current');
		ajax_order_price(); // 计算订单价格
	}
	/**
	 * 获取用户自提点和推荐自提点
	 * @param type 1：用户自提点 ，0：用户自提点和推荐自提点
	 * @param province_id 省
	 * @param city_id 市
	 * @param district_id 区
	 */
	function ajax_pickup(province_id, city_id, district_id,show) {
		$.ajax({
			type: 'GET',
			url: "<?php echo U('Home/Cart/ajaxPickup'); ?>",//+tab,
			data: {province_id: province_id, city_id: city_id, district_id: district_id,show:show},
			success: function (data) {
				$("#ajax_pickup").html('').append(data);
				ajax_order_price();
			}
		});
	}
	//更换自提点
	function replace_pickup(province_id, city_id, district_id) {
		var url = "/index.php?m=Home&c=Cart&a=replace_pickup&call_back=call_back_pickup&province_id="+province_id+"&city_id="+city_id+"&district_id="+district_id;
		layer.open({
			type: 2,
			title: '添加收货地址',
			shadeClose: true,
			shade: 0.8,
			area: ['880px', '580px'],
			content: url,
		});
	}
	// 添加自提点地址回调函数
	function call_back_pickup(province_id,city_id,district_id){
		layer.closeAll(); // 关闭窗口
		ajax_pickup(province_id, city_id, district_id,1);
	}
	// 获取订单价格
	function ajax_order_price() {
		$.ajax({
			type : "POST",
			url:"<?php echo U('Home/Cart/integral2'); ?>",//+tab,g
			data : $('#cart2_form').serialize()+"&act=order_price",// 你的formid
			dataType: "json",
			success: function(data){
				if(data.status != 1)
				{
					//执行有误
					layer.alert(data.msg, {icon: 2});
					// 登录超时g
					if(data.status == -100)
						location.hrgef ="<?php echo U('Home/User/login'); ?>";
					return false;
				}

				$("#postFee").text(data.result.postFee); // 物流费
				$("#shipping_price").text(data.result.postFee); // 物流费
				$("#balance").text(data.result.balance);// 余额
				$("#pointsFee").text(data.result.pointsFee);// 积分支付
				$("#pay_points").val(data.result.points);// 积分支付
				$("#payables").text(data.result.payables);// 应付
			}
		});
	}
	$(document).on('keyup','#pwd',function(){
		$('input[name="pwd"]').val(this.value);
	})
	// 提交订单
	var ajax_return_status = 1;
	function submit_order()
	{
		if(ajax_return_status == 0)
			return false;
		ajax_return_status = 0;
		$.ajax({
			type : "POST",
			url:"<?php echo U('Home/Cart/integral2'); ?>",//+tab,
			data : $('#cart2_form').serialize()+"&act=submit_order",// 你的formid
			dataType: "json",
			success: function(data){

				if(data.status != '1')
				{
					// alert(data.msg); //执行有误
					layer.alert(data.msg, {icon: 2});
					// 登录超时
					if(data.status == -100)
						location.href ="<?php echo U('Home/User/login'); ?>";

					ajax_return_status = 1; // 上一次ajax 已经返回, 可以进行下一次 ajax请求

					return false;
				}
				layer.msg('订单提交成功，正在跳转!', {
					icon: 1,   // 成功图标
					time: 2000 //2秒关闭（如果不配置，默认是3秒）
				}, function(){ // 关闭后执行的函数
					location.href = "/index.php?m=Home&c=Cart&a=cart4&order_id="+data.result; // 跳转到结算页
				});
			}
		});
	}
</script>
</body>
</html>