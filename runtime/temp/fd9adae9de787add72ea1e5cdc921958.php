<?php if (!defined('THINK_PATH')) exit(); /*a:19:{s:39:"template/shop\blue\Goods\goodsInfo.html";i:1502536664;s:28:"template/shop\blue\base.html";i:1502434477;s:32:"template/shop\blue\urlModel.html";i:1501656017;s:34:"template/shop\blue\controlTop.html";i:1501656021;s:41:"template/shop\blue\controlHeadSerach.html";i:1502329691;s:44:"template/shop\blue\controlHeadSearchAdv.html";i:1500458998;s:43:"template/shop\blue\controlHeadGoodType.html";i:1502523659;s:40:"template/shop\blue\controlCommonNav.html";i:1501551343;s:43:"template/shop\blue\controlRightSidebar.html";i:1501656027;s:44:"template/shop\blue\Goods\controlGallery.html";i:1501745750;s:46:"template/shop\blue\Goods\controlStoreRank.html";i:1501656026;s:49:"template/shop\blue\Goods\controlGoodEvaluate.html";i:1501656026;s:45:"template/shop\blue\controlCommonPageAjax.html";i:1499844461;s:55:"template/shop\blue\Goods\controlPurchaseConsulting.html";i:1501656026;s:50:"template/shop\blue\Goods\controlGoodsInfoData.html";i:1502539774;s:45:"template/shop\blue\controlBottomLinkHelp.html";i:1501551343;s:37:"template/shop\blue\controlBottom.html";i:1501752182;s:36:"template/shop\blue\controlLogin.html";i:1501836248;s:37:"template/shop\blue\baidu_js_push.html";i:1499844478;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta name="renderer" content="webkit"> 
<title><?php echo $title_before; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>&nbsp;-&nbsp;<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<!--可共用-->
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_color_style.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/iconfont.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_bottom.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript">
	var shop_main='SHOP_MAIN';//外置JS调用
	var app_main='APP_MAIN';//外置JS调用
	var upload = "__UPLOAD__";//外置JS调用
	var ADMINMAIN='ADMIN_MAIN';
	var TEMP_IMG = "__TEMP__/<?php echo $style; ?>/public/images";
	var temp = "__TEMP__/";//外置JS调用
	$(function(){
		//一级菜单选中	
		$('#nav li>a').removeClass('current');
		var path_info='<?php echo $path_info; ?>';
		if(path_info==''){
			$("#nav li>a[href^='<?php echo __URL('SHOP_MAIN/index/index'); ?>']").addClass('current');
		}else{
			$("#nav li>a[href^='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>']").addClass('current');
		}
	})
	
	window.onload=function(){
		$.footer();
	}
</script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_cart.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.method.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/nav.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
</script>
<!--继承base可重写-->




<!-- 右侧购物车 -->

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/goods.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>

</head>
<body>
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

	<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info"></font>
		<ul>
			<li><a class="menu-hd home" href="<?php echo __URL('SHOP_MAIN'); ?>" target="_top"><i></i>商城首页</a></li>
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd myinfo" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank"><i></i> 个人中心 <b></b></a>
					<div id="menu-2" class="menu-bd">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" target="_blank">已买到的宝贝</a>
							<a href="<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>" target="_blank">我的地址管理</a>
							<a href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>" target="_blank">我收藏的宝贝</a>
						</div>
					</div>
				</div>
			</li>
			<!-- <li class="menu-item cartbox"><a class="menu-hd cart" href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" target="_top"><i></i>&nbsp;购物车</a></li> -->
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat"
						href="javascript:;" target="_top"> <i></i>
						关注商城 <b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>" alt="官方微信"></a>
						<p class="font-14">关注官方微信</p>
					</div>
				</div>
			</li>
<!-- 			<li class="menu-item"> -->
<!-- 				<div class="menu"> -->
<!-- 					<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a> -->
<!-- 					<div id="menu-7" class="menu-bd site-nav-main"> -->
<!-- 						<span class="menu-bd-mask"></span> -->
<!-- 						<div class="menu-bd-panel"> -->
<!-- 							<div class="site-nav-con"> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=2'); ?>" target="_blank" title="常见问题">常见问题</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=7'); ?>" target="_blank" title="网上支付">网上支付</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=5'); ?>" target="_blank" title="验货与签收">验货与签收</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=9'); ?>" target="_blank" title="退款说明">退款说明</a> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</li> -->
			<li class="menu-item"><a  href="<?php echo __URL('APP_MAIN'); ?>" class="menu-hd wap-nav" > <i></i>手机端</a></li>
			<li class="menu-item"><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank">帮助中心</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$.ajax({
	type:"post",
	url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
	success:function(data){
		var login_info_html='';
		if(data!=null && data!=""){
// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
				login_info_html='<a class="sn-login color" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_top">'+data["user_info"]["nick_name"]+'</a><em>欢迎您回来！</em><a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
				$('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em><a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank" class="color NS-USER-NAME">'+data["user_info"]["nick_name"]+'</a></em><a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>');
// 			}
		}else{
			login_info_html='<em>欢迎来到<?php echo $title; ?></em><a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top">请登录</a><a class="register" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top">免费注册</a>';
			$('div.login-info').html('<font id="login-info" class="login-info"><a class="login color" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top">登录</a><a class="register bg-color" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top">免费注册</a></font>');
		}
		$('#login-info').html(login_info_html);
	}
});

//退出登录
function logout(){
	$.ajax({
		url: "<?php echo __URL('SHOP_MAIN/member/logout'); ?>",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
// 				location.href='SHOP_MAIN';
				$.msg("退出成功！");
				window.location.reload();
			} else {
				if(res["message"]!=null){
					$.msg(res["message"]);
				}
			}
		}
	})
}
</script>


<!-- 头部，菜单栏、搜索、导航栏 -->

	<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:09:42
	功能描述：顶部logo、搜索 
-->
<script type="text/javascript">
	//显示搜索历史
	function SearRecord(){
		var arrSear=new Array();
		var strSear = $.cookie("searchRecord");
		var sear_html='<span>最近搜索</span>';
		if(typeof(strSear)!='undefined' && strSear!='null'){
			var arrSear=JSON.parse(strSear);
			sear_html+='<a href="javascript:clearSearRecord();" class="clear-history"> <i></i>清空</a><br/>';
			for(var i=0;i<arrSear.length;i++){
				sear_html+='<a href="'+__URL('SHOP_MAIN/goods/goodslist?keyword='+arrSear[i])+'" style="display:inline-block;">'+arrSear[i]+'</a>';
			}
		}
		$('#search_titles').html(sear_html);
	}
	//清除搜索历史
	function clearSearRecord(){
		clear = JSON.stringify(new Array());
		$.cookie("searchRecord", clear);
		SearRecord();
	}
	
	$(function(){
		SearRecord();
	});
</script>
<div class="as-shelter"></div>
<div class="follow-box">
	<div class="follow-box-con">
		<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"><img src="__UPLOAD__/<?php echo $web_info['logo']; ?>"/></a>
		<div class="search NS-SEARCH-BOX-TOP">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type" style="height: 36px; overflow: hidden;">
							<li class="search-li-top curr" num="0">宝贝</li>
<!-- 							<li class="search-li-top" num="1" >店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text"
								class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>"  value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>">
						</div>
					</div>
					<input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
					<input type="button" id="btn_search_box_submit_top" value="搜索" class="button NS-SEARCH-BOX-SUBMIT-TOP">
				</div>
			</form>
		</div>
		<div class="login-info"></div>
	</div>
</div>
<div class="header">
	<div class="w1210">
		<div class="logo-info">
			<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"> <img src="__UPLOAD__/<?php echo $web_info['logo']; ?>"/></a>
		</div>
		<div class="search NS-SEARCH-BOX">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type">
							<li class="search-li curr" num="0">宝贝</li>
<!-- 							<li class="search-li" num="1">店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>" value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>" />
						</div>
					</div>
					<!-- <input type="hidden" id="searchtype" name="type" value="0" class="searchtype"> --> 
					<input type="button" id="btn_search_box_submit" value="搜索" class="button btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
				</div>
				<!-- -热门搜索热搜词显示 -->
				<div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
					<ul class="history-results">
						<li class="title" id="search_titles" style="word-wrap:break-word "></li>
						
					</ul>
					<ul class="rec-results">
						<li class="title"><span>正在热搜中</span> <i class="close"></i></li>
						<?php if(is_array($hot_keys) || $hot_keys instanceof \think\Collection || $hot_keys instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_keys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_key): $mod = ($i % 2 );++$i;?>
						<li><a  href="<?php echo __URL('SHOP_MAIN/goods/goodslist','keyword='.$hot_key); ?>" title="<?php echo $hot_key; ?>"><?php echo $hot_key; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</form>
			<ul class="hot-query">
				<!-- 默认搜索词 -->
				<li class="first"><a href="javascript:void(0);"></a></li>
			</ul>
		</div>
		<!-- 搜索框右侧小广告 _start -->
		<div class="header-right">
		<a href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" class="my-cart"><span class="ico"></span>购物车结算<span class="right_border"></span></a>
			<a href="<?php echo __URL('SHOP_MAIN/member'); ?>" class="my-mall"><span class="ico"></span>我的商城<span class="right_border"></span></a>
		</div>
		<!-- 搜索框右侧小广告 _end -->
	</div>
</div>
<!-- logo栏小广告  -->
<!-- logo栏小广告 
	李志伟
	2017年2月10日10:28:30
 -->
<script type="text/javascript">
	//logo右侧小广告 
	var ap_id=1052;
	var data=platformAdvLoad(ap_id);
	if(data !=''){
		$('.logo-info').append('<a href="'+data[0]['adv_url']+'" class="logo-right"> <img src="__UPLOAD__/'+data[0]['adv_image']+'" style="max-width:'+data[0]['adv_width']+'px;max-height:'+data[0]['adv_height']+'px;"> </a>');
	}
	//搜索框右侧小广告
	//$('.header-right').html('<a href="'+data[1]['adv_url']+'" target="_blank" title="">  <img src="__UPLOAD__/'+data[1]['adv_image']+'"></a>');
</script>
<script type="text/javascript">
	$(document).ready(function() {
		// 搜索框提示显示
		$('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function() {
			$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
		});
		// 搜索框提示隐藏
		$(".NS-SEARCH-BOX-HELPER .close").on('click',function() {
			$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
		});
		// 清除记录
		$(".NS-SEARCH-BOX-HELPER .clear").click(function() {
			var url = '/search/clear-record.html';
			$.post(
				url,
				{},
				function(result) {
					if (result.code == 0) {
						$(".history-results .active").empty();
					} else {
					}
				},
				'json');
		});
	});
	function search_box_remove(key) {
		var url = '/search/delete-record.html';
		$.post(url, {
			data : key
		}, function(result) {
			if (result.code == 0) {
				$("#" + key).css("display", "none");
			} else {

			}
		}, 'json');
	}
	$(document).on("click", function(e) {
		var target = $(e.target);
		if (target.closest(".NS-SEARCH-BOX").length == 0) {
			$('.NS-SEARCH-BOX-HELPER').hide();
		}
	})
</script>
<script type="text/javascript">
	//固定搜索
	$(document).ready(function() {
		$(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function() {
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
			var keywords = keyword_obj.val();
			if ($.trim(keywords).length == 0
					|| $.trim(keywords) == "请输入关键词") {
				keywords = keyword_obj.attr("data-searchwords");
			}
			
			$(keyword_obj).val(keywords);
			if(keywords==null)
			{
				keywords = "";
			}

			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			$.cookie("searchRecord",JSON.stringify(arr));

			if ($(".search-li.curr").attr('num') == 0) {
				window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
			}else{
				window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
			}
		});
	});
	//浮动搜索
	$(document).ready(function() {
		$(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function() {
			var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
			var keywords = $(keyword_obj).val();
			if ($.trim(keywords).length == 0
					|| $.trim(keywords) == "请输入关键词") {
				keywords = $(keyword_obj).attr("data-searchwords");
			}

			if($.cookie("searchRecord") != undefined){
				var arr = eval($.cookie("searchRecord"));				
			}else{
				var arr = new Array();
			}
			if(arr.length >0 ){
				if($.inArray(keywords,arr)< 0){
					arr.push(keywords);
				}
			}else{
				arr.push(keywords);
			}
			$.cookie("searchRecord",JSON.stringify(arr));

			$(keyword_obj).val(keywords);
			if ($(".search-li-top.curr").attr('num') == 0) {
				window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
			}else{
				window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
			}
		});
	});
</script>


<!--头部商品分类 start-->

	<!--
	创建人：李志伟
	创建时间：2017年2月7日 12:22:28
	功能描述：导航栏、菜单栏 、商品分类（与首页的样式不同，没有轮播图）
-->
<?php if($is_head_goods_nav == 1): ?>
<div class="category-box">
<?php else: ?>
<div class="category-box category-box-border">
<?php endif; ?>
	<div class="w1210">
		<div class="home-category fl">
			<a href="<?php echo __URL('SHOP_MAIN/goods/category'); ?>" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
			<?php if($is_head_goods_nav == 1): ?>
			<div class="category-layer" style="display: block;">
			<?php else: ?>
			<div class="expand-menu category-layer" style="display: none;">
			<?php endif; ?>
				<!-- 公共的菜单栏-->
				<div class="category-layer">
					<span class="category-layer-bg"></span>
					<?php foreach($goods_category_one as $k=>$vo): if($k < 13): ?>
					<div class="list">
						<dl class="cat">
							<dt class="cat-name">
								<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?category_id='.$vo['category_id']); ?>" target="_blank" title="<?php echo $vo['category_name']; ?>"><?php echo $vo['category_name']; ?></a>
							</dt>
							<?php if($vo['count'] >0): ?>
							<i class="right-arrow"></i>
							<?php endif; ?>
						</dl>
						<div class="categorys" style="display: none;">
							<div class="item-left fl">
								<div class="subitems">
								<?php foreach($goods_category_two as $vo2): if($vo2['pid'] == $vo['category_id']): ?>
										<dl class="fore1">
											<dt style="width: 5em;">
												<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist', 'category_id='.$vo2['category_id']); ?>" target="_blank" title="<?php echo $vo2['category_name']; ?>">
													<em><?php echo $vo2['category_name']; ?></em>
													<?php if($vo2['count'] >0): ?>
													<i></i>
													<?php endif; ?>
												</a>
											</dt>
											<dd>
												<?php foreach($goods_category_three as $vo3): if($vo3['pid'] == $vo2['category_id']): ?>
													<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist', 'category_id='.$vo3['category_id']); ?>" target="_blank" title="<?php echo $vo3['category_name']; ?>"><?php echo $vo3['category_name']; ?></a>
													<?php endif; endforeach; ?>
											</dd>
										</dl>
									<?php endif; endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; endforeach; ?>
				</div>
			</div>
		</div>
		<!-- 公共的菜单栏-->
	<div class="all-category fl" id="nav">
	<ul>
	<?php if(is_array($navigation_list) || $navigation_list instanceof \think\Collection || $navigation_list instanceof \think\Paginator): if( count($navigation_list)==0 ) : echo "" ;else: foreach($navigation_list as $k=>$nav): ?>
		<li class="fl" >
			<?php if($nav['nav_type'] == 0): if($nav['is_blank'] == 1): ?>
					<a class="nav" target="_blank" href="<?php echo __URL('SHOP_MAIN'.$nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav" href="<?php echo __URL('SHOP_MAIN'.$nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; else: if($nav['is_blank'] == 1): ?>
					<a class="nav" target="_blank" href="<?php echo __URL($nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav" href="<?php echo __URL($nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; endif; ?>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="wrap-line">
		<span style="left: 15px;"></span>
	</div>
</div>
	</div>
</div>

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

	<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/ns_collections.js" type="text/javascript"></script>
<!-- common.js 刷新了购物车数据 -->
<script>
//当浏览器窗口大小改变时，设置显示内容的高度  
window.onresize = function(){
	$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height() - 90);
	$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height() - 40);
}
$(function() {
	$(".quick-links").css("top",($(window).height())/2);
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
		success:function(data){
			if(data != null && data != ""){
				var img = data["user_info"]["user_headimg"];
				var name = data["user_info"]["nick_name"];
				$("#not_logged").css("display","none");
				$("#right_login_info").css("display","block");
				$("#right_login_info_name").text(name);
				if(img == '' ||img == null){
					$("#login_member_logo").attr('src',"__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png"); 
				}else{
					img = '__UPLOAD__/'+img;
					$("#login_member_logo").attr('src',img);
				}
			}else{
				$("#not_logged").css("display","block");
				$("#right_login_info").css("display","none");
			}
		}
	})
	$('.ajax-login').click(function(){
		$('#mask-layer-login').show();
		$('#layui-layer').show();
	})
	$('.layui-layer-close.layui-layer-close1').click(function(){
		$('#mask-layer-login').hide();
		$('#layui-layer').hide();
	})
	refreshShopCart();
});
</script>
<input type="hidden" id="hidden_uid" value="<?php echo $uid; ?>" />
<div class="right-sidebar-con">
	<div class="right-sidebar-main">
		<div class="right-sidebar-panel">
			<div id="quick-links" class="quick-links">
				<ul>
					<li class="quick-area quick-login sidebar-user-trigger">
						<a href="javascript:void(0);" class="quick-links-a" title="个人中心"><i class="user"></i></a>
						<div class="sidebar-user quick-sidebar">
							<i class="arrow-right"></i>
							<div class="sidebar-user-info">
								<!-- 没有登录的情况 _start -->
								<div class="NS-USER-NOT-LOGIN">
										<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>">
									<div class="user-pic">
										<div class="user-pic-mask"></div>
										<img id="login_member_logo" src="__TEMP__/<?php echo $style; ?>/public/images/temp_default_user_portrait_0.png" />
									</div>
									</a>
									<br>
									<p id="not_logged">你好！请<a href="javascript:void(0);" class="quick-login-a color ajax-login">登录</a> | <a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" class="color">注册</a></p>
									<p id="right_login_info">你好！<span id="right_login_info_name"></span></p>
								</div>
								<!-- 没有登录的情况 _end -->
								<!-- 有登录的情况 _start -->
								<div class="js-user-already-login" style="display: none;">
									<div class="user-have-login">
										<div class="user-pic">
											<div class="user-pic-mask"></div>
											<img src="" class="NS-USER-PIC">
										</div>
										<div class="user-info">
											<p>
												用&nbsp;&nbsp;&nbsp;户： <span class="NS-USER-NAME"></span>
											</p>
										</div>
									</div>
									<p class="m-t-10">
										<span class="prev-login"> 上次登录时间： 
											<span class="NS-USER-LAST-LOGIN"></span>
										</span>
										<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" class="btn account-btn" target="_blank">个人中心</a>
										<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" class="btn order-btn" target="_blank">订单中心</a>
									</p>
								</div>
								<!-- 有登录的情况 _end -->
							</div>
						</div>
					</li>
					<li class="sidebar-tabs" data-ns-flag="shopping_cart">
						<!-- 购物车 -->
						<div class="cart-list quick-links-a sidebar-cartbox-trigger" title="购物车">
							<i class="cart"></i>
							<span class="cart_num js-cart-count">0</span>
						</div>
					</li>
					<li id="collectGoods" class="sidebar-tabs" data-ns-flag="collections_goods" title="我的收藏">
						<a href="javascript:;" class="mpbtn_collect quick-links-a">
							<i class="collection"></i>
						</a>
					</li>
					<li class="quick-area">
						<a class="quick-links-a" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes" title="联系客服" target="_blank">
							<i class="customer-service"></i>
						</a>
					</li>
					
					<li class="quick-area">
						<a class="quick-links-a" href="javascript:void(0);" title="商城二维码"><i class="qr-code"></i></a>
						<div class="sidebar-code quick-sidebar" style="display: none;">
							<i class="arrow-right"></i> 
							<img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>">
						</div>
					</li>
					<li class="returnTop" style="display: none;background: #0689e1;">
						<a href="javascript:void(0);" class="return_top quick-links-a">
							<i class="top"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							返回顶部 <i class="arrow-right"></i>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- 内容 -->

<div class="w1210">
	<div class="breadcrumb clearfix">
		<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="index">首页</a>
		<span class="last" style="cursor: pointer;">
		<?php if(is_array($category_name)): foreach($category_name as $vo): ?>
				&nbsp;&gt;&nbsp;<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo['category_id']); ?>"><?php echo $vo['category_name']; ?></a>
			<?php endforeach; else: ?>
			&nbsp;&gt;&nbsp;<?php echo $category_name; endif; ?>
			<span class="crumbs-arrow">&gt;</span>
			<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods_info['goods_id']); ?>"><?php echo $goods_info['goods_name']; ?></a>
		</span>
	</div>
	<!-- 商品详细信息 -->
	<div class="goods-info">
	<!-- 商品图片以及相册 _star-->
		<div id="preview" class="preview">
			<div class="goodsgallery"><!-- 商品相册容器 --><link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/gallery/gallery.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/gallery/gallery.js"></script>
<div id="MagnifierWrap">
	<div class="MagnifierMain">
		<?php if(!(empty($goods_info['sku_picture_list']) || (($goods_info['sku_picture_list'] instanceof \think\Collection || $goods_info['sku_picture_list'] instanceof \think\Paginator ) && $goods_info['sku_picture_list']->isEmpty()))): ?>
		<img class="MagTargetImg" src="" data_big_img=""/>
		<?php else: ?>
		<img class="MagTargetImg" src="__UPLOAD__/<?php echo $default_gallery_img; ?>" data_big_img="__UPLOAD__/<?php echo $default_gallery_img; ?>"/>
		<?php endif; ?>
	</div>
	<span class="spe_leftBtn on">&lt;</span>
	<span class="spe_rightBtn on">&gt;</span>
	<div class="spec-items">
		<ul>
		<!-- 如果sku组图存在则显示sku组图 -->
		<?php if(!(empty($goods_info['sku_picture_list']) || (($goods_info['sku_picture_list'] instanceof \think\Collection || $goods_info['sku_picture_list'] instanceof \think\Paginator ) && $goods_info['sku_picture_list']->isEmpty()))): ?>
			<input type="hidden" id="hide_spec_id" value="<?php echo $goods_info['sku_picture_list'][0]['spec_id']; ?>">
			<?php if(is_array($goods_info['sku_picture_list']) || $goods_info['sku_picture_list'] instanceof \think\Collection || $goods_info['sku_picture_list'] instanceof \think\Paginator): if( count($goods_info['sku_picture_list'])==0 ) : echo "" ;else: foreach($goods_info['sku_picture_list'] as $key=>$img): if(is_array($img['album_picture_list']) || $img['album_picture_list'] instanceof \think\Collection || $img['album_picture_list'] instanceof \think\Paginator): if( count($img['album_picture_list'])==0 ) : echo "" ;else: foreach($img['album_picture_list'] as $k=>$p): if($k==0): ?>    
						<li class="on" style="display: none;" id="sku_pic_<?php echo $img['spec_value_id']; ?>">
					<?php else: ?>
						<li style="display: none;" id="sku_pic_<?php echo $img['spec_value_id']; ?>">
					<?php endif; ?>
							<img src="__UPLOAD__/<?php echo $p['pic_cover_micro']; ?>" data_big_img="__UPLOAD__/<?php echo $p['pic_cover_big']; ?>"/>
						</li>
				<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; else: ?>
		<!-- 否则显示商品组图 -->
			<?php if(is_array($goods_info['img_list']) || $goods_info['img_list'] instanceof \think\Collection || $goods_info['img_list'] instanceof \think\Paginator): if( count($goods_info['img_list'])==0 ) : echo "" ;else: foreach($goods_info['img_list'] as $k=>$img): if($k==0): ?>
				<li class="on">
				<?php else: ?>
				<li>
				<?php endif; ?>
				<img src="__UPLOAD__/<?php echo $img['pic_cover_micro']; ?>" data_big_img="__UPLOAD__/<?php echo $img['pic_cover_big']; ?>"/>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</ul>
	</div>
</div></div>
			<div class="goods-gallery-bottom">
				<!-- <a href="javascript:;" class="goods-compare compare-btn fr add-compare"><i></i> 对比</a> -->
				<a href="javascript:;" class="goods-col fr collect-goods">
					<i <?php if($is_member_fav_goods>0): ?>style="background-position: -112px -91px;"<?php endif; ?>></i>
					<span data-collects="<?php echo $goods_info['collects']; ?>">收藏商品 (<?php echo $goods_info['collects']; ?>人气)</span>
				</a>
<!-- 				<div class="bdsharebuttonbox fr bdshare-button-style0-16"> -->
<!-- 					<a class="bds_more" href="#" data-cmd="more" style="background: none; color: #999; line-height: 25px; height: 25px; margin: 0px 10px; padding-left: 20px; display: block;"> -->
<!-- 						<i style="width: 13px; height: 13px; background: transparent url(__TEMP__/<?php echo $style; ?>/public/images/goods-icon.png) no-repeat -113px -65px; vertical-align: middle; display: inline-block;"></i> 分享 -->
<!-- 					</a> -->
<!-- 				</div> -->
			</div>
		</div>
		<!-- 商品图片以及相册 _end-->
		<!-- 商品详细信息 _star-->
		<div class="detail-info">
			<form action="" method="post" name="formBuyNow" id="formBuyNow">
				<!-- 商品名称 -->
				<h1 class="goods-name js-goods-name"><?php echo $goods_info['goods_name']; ?></h1>
				<!-- 商品简单描述、促销语 -->
				<p class="goods-brief color"><?php echo $goods_info['introduction']; ?></p>
				<!-- 商品团购倒计时 -->
				<div class="goods-price">
					<!-- 商品不同的价格 -->
					<div class="show-price" <?php if($goods_info['market_price']==0): ?>style="display:none;"<?php endif; ?>>
						<span class="price">原&nbsp;&nbsp;&nbsp;价</span>
						<font class="market-price">￥<?php echo $goods_info['market_price']; ?></font>
					</div>
					<div class="realy-price">
						<div class="now-prices">
							<span class="price">销售价</span>
							<strong class="p-price second-color" id="price">￥<?php echo $goods_info['promotion_price']; ?></strong>
							<?php if($goods_info['point_exchange_type']==1 && $goods_info['point_exchange']>0): ?>
								<strong class="p-price second-color" style="font-size:22px;" id="member_point">+<?php echo $goods_info['point_exchange']; ?>积分</strong>
							<?php endif; ?>
						</div>
						<!-- <div class="depreciate">
							<a href="" title="">（降价通知）</a>
						</div> -->
					</div>
					
					<?php if($goods_info['is_show_member_price'] == 1): ?>
					<div class="realy-price">
						<div class="now-prices">
							<span class="price">会员价</span>
							<strong class="p-price second-color" id="member_price">￥<?php echo $goods_info['member_price']; ?></strong>
							<?php if($goods_info['point_exchange_type']==1 && $goods_info['point_exchange']>0): ?>
								<strong class="p-price second-color" style="font-size:22px;" id="member_point">+<?php echo $goods_info['point_exchange']; ?>积分</strong>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; if($goods_info['max_buy']!=0): ?>
					<!-- 限购 -->
					<div class="prom-gift" >
						<div class="dt">限购数量</div>
						<div class="dd">
							<span class="prom-gift-label">
								<em><?php echo $goods_info['max_buy']; ?>个</em>
							</span>
							<div></div>
						</div>
					</div>
					<?php endif; if($goods_info['min_buy']!=0): ?>
							<!-- 最小购买数量 -->
							<div class="prom-gift" >
								<div class="dt">最小购买数量</div>
								<div class="dd">
									<span class="prom-gift-label">
								<em><?php echo $goods_info['min_buy']; ?>个</em>
								</span>
								<div></div>
								</div>
							</div>
					<?php endif; if($goods_info['mansong_name'] != ''): ?>
					<div class="shop-prom">
						<div class="shop-prom-title">
							<dt class="dt">本店活动</dt>
							<dd><?php echo $goods_info['mansong_name']; ?></dd>
<!-- 							<a class="more">更多活动<i></i></a> -->
						</div>
<!-- 						<div class="shop-prom-Box"> -->
<!-- 							<div class="floater"> -->
<!-- 								<div class="hd"> -->
<!-- 									<em class="title">本店活动</em> -->
<!-- 									<ul class="bd"> -->
<!-- 										<li><a href="" target="_blank" title=""><?php echo $goods_info['mansong_name']; ?></a></li> -->
<!-- 									</ul> -->
<!-- 									<a class="more unmore">收起<i></i></a> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
					</div>
					<?php endif; ?>
				</div>
				<!-- 优惠劵 -->
				<?php if(!(empty($goods_coupon_list) || (($goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator ) && $goods_coupon_list->isEmpty()))): ?>
				<div class="receive-coupons">
					<span class="title">优惠</span>	
					<?php if(is_array($goods_coupon_list) || $goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo) || (($vo instanceof \think\Collection || $vo instanceof \think\Paginator ) && $vo->isEmpty()))): ?>
					<div class="coupon">
						<i></i><p><?php echo $vo['money']; ?>元店铺优惠券，满<?php echo $vo['at_least']; ?>元可用<a href="javascript:;" onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)" data-money="<?php echo $vo['money']; ?>" data-at-least="<?php echo $vo['at_least']; ?>" data-start-time="<?php echo date('Y.m.d',$vo['start_time']); ?>"  data-end-time="<?php echo date('Y.m.d',$vo['end_time']); ?>" data-max-fetch="<?php echo $vo['max_fetch']; ?>" data-receive-quantity="<?php echo $vo['receive_quantity']; ?>" class="coupon<?php echo $vo['coupon_type_id']; ?>"> 领取 </a></p>
					</div>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<div style="clear: both;"></div>
				</div>
				<?php endif; ?>
				<!-- 运费 -->
				<div class="freight">
					<div class="dt">配送至</div>
					<div class="dd">
						<div class="post-age">
							<div class="region-chooser-container region-chooser" style="z-index: 3">
								<div class="region-chooser-selected">
									<div class="region js-region">
										<font><?php echo $user_location['province']; ?><?php echo $user_location['city']; ?><i></i></font>
									</div>
								</div>
								<div class="region-chooser-box" id="region-chooser-box" style="display: none;">
									<div class="region-chooser-close"></div>
									<div class="region-tabs">
										<div class="region-tab selected" data-region-level="1" style="display: block">
											<?php echo $user_location['province']; ?><i></i>
										</div>
										<div class="region-tab" data-region-level="2" style="display: block">
											<?php echo $user_location['city']; ?><i></i>
										</div>
										<div class="region-tab" data-region-level="3" style="display: block">
											请选择区/县<i></i>
										</div>
									</div>
									<div class="region-items" data-region-level="1"  style="display: block;"></div>
									<div class="region-items" data-region-level="2" style="display: none;"></div>
									<div class="region-items" data-region-level="3" style="display: none;"></div>
								</div>
								<div style="clear: both;"></div>
							</div>
							<div class="post-age-info">
							<?php if(!empty($shipping_name)): if(empty($shipping_name[0]['company_name'])): ?>
									<?php echo $shipping_name; else: ?>
									<select>
									<?php if(is_array($shipping_name) || $shipping_name instanceof \think\Collection || $shipping_name instanceof \think\Paginator): if( count($shipping_name)==0 ) : echo "" ;else: foreach($shipping_name as $key=>$vo): ?>
										<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?>&nbsp;&nbsp;&nbsp;¥<?php echo $vo['express_fee']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								<?php endif; else: endif; ?>
							</div>
<!-- 							<div class="post-age-info"> -->
<!-- 								<p><span class="freight-info">运费：<?php echo $goods_info['shipping_fee_name']; ?></span></p> -->
<!-- 							</div> -->
						</div>
					</div>
				</div>
				<!-- 评价、销量、积分 -->
				<div class="info-other">
					<ul class="other">
						<li><p>累积评价<span><a id="evaluate_num" href="#" class="color"><?php echo $evaluates_count['evaluate_count']; ?>人评价</a></span></p></li>
						<li><p>累计销量<span class="color"><?php echo $goods_info['sales']; ?></span></p></li>
						<li class="last"><p>赠送积分<span class="color"><?php echo $goods_info['give_point']; ?></span></p></li>
					</ul>
				</div>
				<div class="choose js-skulist">
					<p class="choose-title">请选择您要的商品信息<b onclick="closePrompt(this)">x</b></p><br/>
					<input type="hidden" id="goods_id" name="" value="<?php echo $goods_info['goods_id']; ?>" />
					<input type="hidden" id="goods_sku_count" value="<?php echo $goods_sku_count; ?>"/>
					<input type="hidden" id="attribute_list" value="<?php echo $spec_list; ?>"/>
					<?php if(is_array($goods_info['sku_list']) || $goods_info['sku_list'] instanceof \think\Collection || $goods_info['sku_list'] instanceof \think\Paginator): if( count($goods_info['sku_list'])==0 ) : echo "" ;else: foreach($goods_info['sku_list'] as $k=>$pro_skus): ?>
					<input type="hidden" id="goods_sku<?php echo $k; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>;" stock="<?php echo $pro_skus['stock']; ?>" <?php if($pro_skus['promote_price'] < $pro_skus['member_price']): ?>price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?>price="<?php echo $pro_skus['member_price']; ?>"<?php endif; ?> promotion_price="<?php echo $pro_skus['promote_price']; ?>" member_price="<?php echo $pro_skus['member_price']; ?>" skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>" original_price="<?php echo $pro_skus['market_price']; ?>" />
					<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_info['spec_list']) || $goods_info['spec_list'] instanceof \think\Collection || $goods_info['spec_list'] instanceof \think\Paginator): if( count($goods_info['spec_list'])==0 ) : echo "" ;else: foreach($goods_info['spec_list'] as $k=>$spec): ?>
						<dl class="attr">
							<dt class="dt"><?php echo $spec['spec_name']; ?></dt>
							<dd class="dd">
								<ul>
								<?php if(is_array($spec['value']) || $spec['value'] instanceof \think\Collection || $spec['value'] instanceof \think\Paginator): if( count($spec['value'])==0 ) : echo "" ;else: foreach($spec['value'] as $key=>$spec_value): if($spec_value['spec_id'] == $spec['spec_id']): ?>
									<li class="goods-spec-item <?php if($key==0 && count($goods_info['spec_list'])==1): ?> selected<?php endif; ?>">
										<?php switch($spec_value['spec_show_type']): case "1": ?>
												<a href="javascript:;" title="<?php echo $spec_value['spec_value_name']; ?>">
													<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
													<?php if($key==0): ?>
													<i></i><!-- 第一个选中 -->
													<?php endif; ?>
												</a>
												<?php break; case "2": ?>
												<!-- 颜色 -->
												<a href="javascript:;" title="<?php echo $spec_value['spec_value_name']; ?>">
													
													<?php if($spec_value['spec_value_data'] == ''): ?>
													<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
													<?php else: ?>
													<span id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>">
														<b style="width:30px;height:30px;display:inline-block;vertical-align:middle;background: <?php echo $spec_value['spec_value_data']; ?>;"></b>
														<?php echo $spec_value['spec_value_name']; ?>
													</span>
													<?php endif; if($key==0): ?>
													<i></i><!-- 第一个选中 -->
													<?php endif; ?>
												</a>
												<?php break; case "3": ?>
												<a href="javascript:;" title="<?php echo $spec_value['spec_value_name']; ?>">
													<?php if($spec_value['spec_value_data'] == ''): ?>
													<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
													<?php else: ?>
													<img src="__UPLOAD__/<?php echo $spec_value['spec_value_data']; ?>" style="width:30px;height:30px;">
													<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>" data-show-big-pic="<?php echo $spec_value['spec_value_data_big_src']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
													<?php endif; if($key==0): ?>
													<i></i><!-- 第一个选中 -->
													<?php endif; ?>
												</a>
												<?php break; endswitch; ?>
									</li>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</dd>
						</dl>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- 购买数量 -->
					<dl class="amount">
						<dt class="dt">数量</dt>
						<dd class="dd">
							<span class="amount-widget">
								<input type="text" class="amount-input"  data-max="<?php if($goods_info['max_buy']==0): ?><?php echo $goods_info['stock']; else: ?><?php echo $goods_info['max_buy']; endif; ?>" data-min="<?php echo $goods_info['min_buy']; ?>"title="请输入购买量" id="num"  value="<?php if($goods_info['min_buy'] > 0): ?><?php echo $goods_info['min_buy']; else: ?>1<?php endif; ?>" />
								<span class="amount-btn">
									<span class="amount-plus"><i>+</i></span>
									<span class="amount-minus"><i>-</i></span>
								</span>
								<span class="amount-unit">件</span>
							</span>
							<em class="stock js-goods-number">库存<?php echo $goods_info['stock']; ?>件</em>
						</dd>
					</dl>
					<!-- 限购提示语 -->
					<!-- 加入购物车按钮、手机购买 -->
					<div class="action">
						<?php if($goods_info['state']==1): ?>
							<div class="btn-buy">
								<a href="javascript:;" class="buy-goods color js-buy-now" data-tag="buy_now">
									<span class="buy-goods-bg bg-color"></span>
									<span class="buy-goods-border"></span>
									<?php if($integral_flag==1): ?>
									积分兑换
									<?php else: ?>
									立即购买
									<?php endif; ?>
								</a>
							</div>
							<div class="btn-buy"><a href="javascript:void(0);" class="add-cart bg-color" data-tag="to_cart"><i></i> 加入购物车</a></div>
						<?php else: ?>
							<div class="btn-buy"><a href="javascript:void(0);" class="no-auth ">该商品已下架 </a></div>
						<?php endif; if($goods_info['QRcode'] != ''): ?>
						<div class="btn-phone">
						<!-- APP_MAIN/Goods/goodsDetail?id=<?php echo $goods_info['goods_id']; ?> -->
							<a href="javascript:;" class="go-phone">
<!-- 								<span>手机购买</span> -->
								<i></i>
								<div id="phone-tan" style="left:53px;">
									<span class="arr"></span>
									<div class="m-qrcode-wrap">
										<img src="__UPLOAD__/<?php echo $goods_info['QRcode']; ?>" alt="二维码图片" width="100" height="100">
									</div>
								</div>
							</a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<input type="hidden" id="hidden_cart_id" name="cart_id" />
			</form>
		</div>
	<!-- 商品详细信息 _end-->
	</div>
	<!-- 搭配套餐 -->
	<!-- 内容 -->
	<div class="clearfix">
		<!-- 左半部分内容 提出来的  客服-->
		<div class="fl">
			<!-- 客服组 提出来的  客服，先隐藏掉
			2017年2月10日 08:40:53
			{1include file="shop/blue/Goods/controlCustomerCenter"}
			-->
			
			<!-- 排行榜 提出来的 【排行榜】-->
			<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:17:11
	功能描述： 店内商品排行榜
-->
<!-- 排行榜 提出来的 【排行榜】-->
<div class="store-rank-list">
	<h3 class="left-title">店内排行榜</h3>
	<div class="left-content rank-list">
		<ul class="tab-nav j-tab-nav">
			<li class="current">销售量</li>
			<li>收藏数</li>
		</ul>
		<div class="tab-con">
			<div class="j-tab-con">
				<ul class="goods-list" style="display: block">
				<?php if(is_array($goods_rank) || $goods_rank instanceof \think\Collection || $goods_rank instanceof \think\Paginator): if( count($goods_rank)==0 ) : echo "" ;else: foreach($goods_rank as $k=>$goods): if(($k+1) <= 5): ?>
					<li class="goods-item first">
						<div class="picture">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>">
								<img src="__UPLOAD__/<?php echo $goods['pic_cover_mid']; ?>" />
							</a>
						</div>
						<div class="price">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></a>
							<span class="money-color">￥<?php echo $goods['promotion_price']; ?></span>
						</div>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="goods-list">
				<?php if(is_array($goods_collection) || $goods_collection instanceof \think\Collection || $goods_collection instanceof \think\Paginator): if( count($goods_collection)==0 ) : echo "" ;else: foreach($goods_collection as $k=>$goods): ?>
					<li class="goods-item first">
						<div class="picture">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>">
								<img src="__UPLOAD__/<?php echo $goods['pic_cover_mid']; ?>" />
							</a>
						</div>
						<div class="price">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></a>
							<span class="money-color">￥<?php echo $goods['promotion_price']; ?></span>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
		</div>
		<!-- 右半部分内容 -->
		<div class="right right-con">
			<div class="wrapper">
				<div id="main-nav-holder" class="goods-detail">
					<ul id="nav" class="tab">
						<li class="title-list current"><a href="javascript:;" id="goods_detail">商品详情</a></li>
					 	<li class="title-list"><a href="javascript:;" id="goods_attribute">商品属性</a></li>
						<li class="title-list"><a id="evaluate_count" href="javascript:;">累计评价(<?php echo $evaluates_count['evaluate_count']; ?>)</a></li>
						<li class="title-list"><a href="javascript:;" id="goods_consultation">购买咨询</a></li>
					</ul>
					<div class="right-side">
						<a href="javascript:void(0);" class="right-addcart js-buy-now" data-tag="buy_now">
							<i></i>
							<?php if($integral_flag==1): ?>
							<span>积分兑换</span>
							<?php else: ?>
							<span>立即购买</span>
							<?php endif; ?>
						</a>
<!-- 						<div class="right-side-con" >style="height: 442px;" -->
<!-- 							<ul class="right-side-ul"> -->
<!-- 								<li class="abs-active" data-index="1"> -->
<!-- 									<i></i> -->
<!-- 									<span>商品属性</span> -->
<!-- 								</li> -->
<!-- 								<li  data-index="2"> -->
<!-- 									<i></i> -->
<!-- 									<span>商品详情</span> -->
<!-- 								</li> -->
<!-- 								<li data-index="3"> -->
<!-- 									<i></i> -->
<!-- 									<span>商品评价</span> -->
<!-- 								</li> -->
<!-- 								<li data-index="4"> -->
<!-- 									<i></i> -->
<!-- 									<span>购买咨询</span> -->
<!-- 								</li> -->
<!-- 							</ul> -->
<!-- 						</div> -->
					</div>
				</div>
				<div id="main_widget">
					<!-- 规格参数 _star -->
					<div id="goods_attr_list" class="goods-detail-con goods-detail-tabs" style="display:none;">
						<?php if(count($goods_info['goods_attribute_list']) > 0): ?>
							<ul class="goods-spec">
								<?php foreach($goods_info['goods_attribute_list'] as $vo): if($vo['attr_value_name'] != ''): ?>
										<li><?php echo $vo['attr_value']; ?>：<span id="goods_attr_" title="<?php echo $vo['attr_value_name']; ?>" class="goods-attr-value"><?php echo $vo['attr_value_name']; ?></span></li>
									<?php endif; endforeach; ?>
							</ul>	
						<?php endif; ?>
					</div>
					<!-- 商品详情 _star -->
					<div id="goods_introduce" class="goods-detail-con goods-detail-tabs">
						<!-- 推荐商品 -->
						<!-- 商品后台上传的商品描述 -->
						<div class="detail-content goods-detail-content">
						<?php echo $goods_info['description']; ?></div>
					</div>
					<!-- 商品详情 end -->
					<!-- 商品评价 start -->
					<div class="goods-detail-con goods-detail-tabs" id="goods_evaluate" style="display:none;">
					<!--
	功能：商品详情页评价
	创建人：李志伟
	创建时间：2017年2月23日9:49:12
-->
<style>
.goods-comment dl{
	margin-bottom: 20px;
	min-height: 10px;
}
</style>
<div id="goods_evaluate" class="goods-detail-con goods-detail-tabs" name="goods_evaluate">
	<div class="evaluate">
		<h3 class="color">商品评价</h3>
		<div class="comment-mod">
			<!-- 总评分 -->
			<div class="comment-grade">
				<div class="rate-score">
					<h4>宝贝与描述相符</h4>
					<strong><?php echo $goods_info['match_point']; ?></strong>
					<p>
						<span class="score-value-no"><em style="width:<?php echo $goods_info['match_ratio']; ?>%;"></em></span>
					</p>
				</div>
				<div class="rate-graph">
					<div class="graph-scroller">
						<span style="width: <?php echo $goods_info['match_ratio']; ?>%;"><em><?php echo $goods_info['match_point']; ?><i>▼</i></em></span>
					</div>
					<ul class="graph-desc">
						<li>非常不满</li>
						<li>不满意</li>
						<li>一般</li>
						<li>满意</li>
						<li>非常满意</li>
					</ul>
				</div>
			</div>
			
			<!-- 评论选择项 -->
			<div class="comment-type">
				<ul class="tab-nav">
					<li class="current" data-type="0"><i class="icon cur"></i> 全部<em>(<?php echo $evaluates_count['evaluate_count']; ?>)</em></li>
					<li data-type="4"><i class="icon"></i> 图片 <em>（<?php echo $evaluates_count['imgs_count']; ?>）</em></li>
					<li data-type="1"><i class="icon"></i> 好评 <em>（<?php echo $evaluates_count['praise_count']; ?>）</em></li>
					<li data-type="2"><i class="icon"></i> 中评 <em>（<?php echo $evaluates_count['center_count']; ?>）</em></li>
					<li data-type="3"><i class="icon"></i> 差评 <em>（<?php echo $evaluates_count['bad_count']; ?>）</em></li>
				</ul>
			</div>
			
			<!-- 有评论的的展示形式 _star -->
			<div id="comment_content">
				<div class="comment-con tablelist"></div>
			</div>
			<div id="pagination" class="page" style="display:none;">
	<div class="pagination-goto" style="display:none;">,到<input class="ipt form-control goto-input" type="text" id="pageindex">页
		<button class="btn btn-default goto-button" title="点击跳转到指定页面" onclick="GetDataList(0)">确定</button>
		<a class="goto-link" data-go-page=""></a>
	</div>
	<div class="page-wrap fr">
		<div class="total">共<span id="pagecount"></span>页<span id="totalcount" style="display: none;"></span>条记录
	<!-- 	每页显示：
		<select class="select m-r-5" id="pagesize" data-page-size="12" onchange="GetDataList(1)" >
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="50">50</option>
		</select>条 -->		
		<input type="hidden" id="pagesize" name="pagesize" value="100"/>
		</div>
	</div>
	<div class="page-num fr">
		<span id="home_page"><a class="num prev disabled" data-go-page="1" title="第一页" >首页</a></span>
		<span id="pre_page"><a class="num prev disabled " title="上一页" >上一页</a></span>
		<div id="page_list" style="float: left;"></div>
		<span id="next_page"><a class="num next disabled" title="下一页" >下一页</a></span>
		<span id="last_page"><a class="num next disabled" title="下一页" >尾页</a></span>
	</div>
<script type="text/javascript">
	$(function(){
		GetDataList(1);	
	})
function page_display(pagecount,pageindex){
	if(pagecount==""||pagecount==0){
			$("#pagination").hide();
	}else{	
		$("#pagination").show();
		var pagehtml='',pag_end_html='',page_start_html='';
		var page_display_num=5;  //总共显示的页的个数必须为奇数
		
		//结束页数计算
		var pageend=pagecount;
		
		//开始页面计算
		var pagestart=pageindex-(page_display_num-1)/2;
		pagestart=(pageindex==pageend)?pageend-page_display_num+1:pagestart;
		pagestart=(pageend-pageindex)<3?pageend-page_display_num+1:pagestart;
		pagestart=pagestart<1?1:pagestart;
		for(var i=pagestart;i<=pageend;i++){
			if(pageindex==i){
				pagehtml+='<span class="num curr" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';
				var pre_page=(i==1)?1:i-1;
				var next_page=(i==pagecount)?pagecount:i+1;
				if(i==1){
					$('#home_page>a').addClass('disabled');
					$('#pre_page>a').addClass('disabled');
					$('#home_page').attr('onclick','');
					$('#pre_page').attr('onclick','');	
				}else{
					$('#home_page').attr('onclick','GetDataList(1)');
					$('#pre_page').attr('onclick','GetDataList("'+pre_page+'")');
					$('#home_page>a').removeClass('disabled');
					$('#pre_page>a').removeClass('disabled');
				}
				if(i<pagecount){
					$('#next_page').attr('onclick','GetDataList("'+next_page+'")');
					$('#last_page').attr('onclick','GetDataList("'+pagecount+'")');
					$('#last_page>a').removeClass('disabled');
					$('#next_page>a').removeClass('disabled');
				}else{
					$('#next_page').attr('onclick','');
					$('#last_page').attr('onclick','');
					$('#last_page>a').addClass('disabled');
					$('#next_page>a').addClass('disabled');
				}
				/*省略点显示*/
				if((pageend-page_display_num)>0 && i>(page_display_num/2+1)){
					page_start_html='<span class="shenglue">...</span>';
				}
				if(pageend>page_display_num){
					pageend=page_display_num;
					if((pageindex+((page_display_num-1)/2))<=pagecount && i>(page_display_num/2+1)){
						pageend=pageindex+((page_display_num-1)/2);	
					}
					if(i<pagecount){
						pag_end_html='<span class="shenglue">...</span>';
					}
					if((pagecount-pageindex)<=((page_display_num-1)/2)){
						pageend=pagecount;
						pag_end_html='';
					}
				}
			}else{
				pagehtml+='<span class="num"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';	
			}
		}
		if(pagehtml==''){
			$('#page_list').html('<span class="num curr"><a data-cur-page="1">1</a></span>');
		}else{
			$('#page_list').html(pagehtml);
		}
	}
}
</script>
</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(".comment-type li").click(function() {
	var type = $(this).data("type");
	var target = $(this);
	$(".comment-type").find("li").removeClass("current");
	$(".comment-type").find("i").removeClass("cur");
	$(target).addClass("current");
	$(target).children().addClass("cur");
	GetDataList(1)
})

function loadFunction(){
	$('.goods-comment-imgs>img').click(function(){
		var even=$(this);
		var viewer=even.parent().next('.photo-viewer');
		if(!even.is('.cur')){
			even.parent().children('img').removeClass('cur');
			even.addClass('cur');
			even.parent().next('.photo-viewer').html('<img src="'+$(this).attr('src')+'"/>').show('fast');	
		}else{
			even.removeClass('cur');
			even.parent().next('.photo-viewer').hide("slow").html('');
		}
	})
}

/**
* 分页显示
* @param {Object} pageindex
*/
function GetDataList(pageindex){
	var page_size=$('#pagesize').val();
	var shop_name=$('#shop_name').val();
	var pageindex=pageindex==0?$('#pageindex').val():pageindex;
	var commentsType=$(".comment-type li.current").attr('data-type');
	var goods_id=$('#hidden_goodsid').val();  //标签在info页面
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/goods/getgoodscomments'); ?>",
		data:{ 'page_index' : pageindex, 'page_size' : page_size, 'goods_id' : goods_id, 'comments_type' : commentsType },
		dataType:'json',
		beforeSend:function(){
			$.loading.start();
		},
		success:function(data){
			var listhtml='';
			if(data['data'].length==0){
				$('#comment_content .tablelist').html('<div class="tip-box"><i class="tip-icon"></i><div class="tip-text">还没有任何评价哦</div></div>');
				$('#pagination').hide();
				return false;
			}
			for(var i=0;i<data['data'].length;i++){
				var dataitem=data['data'][i];
				var member_name=dataitem['member_name'];
				member_name=dataitem['is_anonymous']==1?member_name.replace(member_name.substring(1,member_name.length),'***')+'(匿名)':member_name;
				listhtml+='<div class="goods-comment">'
					+'<div class="user-info">'
					+'<div class="face">'
					+'<img src="__TEMP__/<?php echo $style; ?>/public/images/default_user_portrait_0.png">'
					+'</div>'
					+'<div class="name-box">'
					+'<em>'+member_name+'</em>'
					+'</div>'
					+'</div>'
					+'<dl>'
					+'<dd class="goods-comment-con">'
					+'<span class="text">'+dataitem['content']+'</span>'
					+'</dd>';
				if(dataitem['image']!=''){
					var imgs_arr=dataitem['image'].split(',');
					listhtml+='<dd class="goods-comment-imgs">'
					for(var key in imgs_arr){
						listhtml+='<img src="__UPLOAD__/'+imgs_arr[key]+'" alt="" />';
					}
					listhtml+='</dd>';
					listhtml+='<dd class="photo-viewer"></dd>'
				}	
				listhtml+='<dd><div class="date"><span>'+timeStampTurnTime(dataitem['addtime'])+'</span> <span></span></div></dd></dl>';
				if(dataitem['explain_first']!=''){
					listhtml+='<div class="comment_zhuijia">店家回复：</div>'
					+'<dl>'
					+'<dd class="goods-comment-con">'
					+'<span class="text">'+dataitem['explain_first']+'</span>'
					+'</dd></dl>';
				}
				if(dataitem['again_content']!=''){
					listhtml+='<div class="comment_zhuijia">追加评价：</div>'
					+'<dl>'
					+'<dd class="goods-comment-con">'
					+'<span class="text">'+dataitem['again_content']+'</span>'
					+'</dd>';
					if(dataitem['again_image']!=''){
						var imgs_arr=dataitem['again_image'].split(',');
						listhtml+='<dd class="goods-comment-imgs">'
						for(var key in imgs_arr){
							listhtml+='<img src="__UPLOAD__/'+imgs_arr[key]+'" alt="" />';
						}
						listhtml+='</dd>';
					}
					listhtml+='<dd class="photo-viewer"></dd>'
					listhtml+='<dd><div class="date"><span>'+timeStampTurnTime(dataitem['again_addtime'])+'</span> <span></span></div></dd></dl>';
					if(dataitem['again_explain']!=''){
						listhtml+='<div class="comment_zhuijia">店家回复：</div>'
						+'<dl>'
						+'<dd class="goods-comment-con">'
						+'<span class="text">'+dataitem['again_explain']+'</span>'
						+'</dd></dl>';
					}
				}
				listhtml+='</div>';
			}
			$('#comment_content .tablelist').html(listhtml);
			$('#totalcount').text(data['total_count']);//总条数
			$('#pagecount').text(data['page_count']);//总页数
			$('#pageindex').val(pageindex);	//当前页数
			page_display(data['page_count'],pageindex);
			$('#pagination').show();
			loadFunction();
		}
	});
}
</script>
					</div>
					<!-- 商品评价 end -->
					<!-- 服务 start -->
					<!-- 常见问题 _star -->
					<div class="goods-detail-con goods-detail-tabs" id="goods_consult" style="display:none;">
						<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/purchase_consulting.css">
<div class="ncs-goods_main goods-detail-con">
<div class="ncs-goods-info-content bd" id="ncGoodsConsult">
	<h3 class="color">购买咨询</h3>
	<div id="consulting_demo" class="ncs-loading">
		<div class="top" style="overflow: hidden;">
			<div class="ncs-cosult-tips">
				<i></i>
				<p></p>
				<p>因厂家更改商品包装、场地、附配件等不做提前通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！</p>
				<p></p>
			</div>
			<div class="ncs-cosult-askbtn">
				<a href="<?php echo __URL('SHOP_MAIN/goods/goodsconsult','goodsid='.$goods_id.'#askQuestion'); ?>"
					target="_blank" class="btn btn-white"> 我要咨询</a>
			</div>
		</div>
		<div class="ncs-goods-title-nav">
			<ul id="consulting_tab">
				<input type="hidden" id="currClassId" value="0">
				<li id="classTab0" class="current"><a
					href="javascript:;" onclick="consultType(0,this)">全部</a></li>
				<li id="classTab1"><a
					href="javascript:;" onclick="consultType(1,this)">商品咨询</a></li>
				<li id="classTab2"><a
					href="javascript:;" onclick="consultType(2,this)">支付问题</a></li>
				<li id="classTab3"><a
					href="javascript:;" onclick="consultType(3,this)">发票及保修</a></li>
			</ul>
		</div>
			<?php if(is_array($consult_list) || $consult_list instanceof \think\Collection || $consult_list instanceof \think\Paginator): $i = 0; $__LIST__ = $consult_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($key == 0): ?>
				<div id="ncs_main_<?php echo $key; ?>" name="nsc_main">
			<?php else: ?>
				<div style="display: none;" id="ncs_main_<?php echo $key; ?>" name="nsc_main">
			<?php endif; if($item['total_count'] == 0): ?>
				<div class="ncs-cosult-main" >
					<div class="ncs-norecord">还没有咨询内容</div>
				</div>
			<?php else: ?>
				<div class="ncs-commend-main" >
					<!-- 咨询列表s -->
					<?php if(is_array($item['data']) || $item['data'] instanceof \think\Collection || $item['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="ncs-cosult-list" >
								<dl class="asker">
									<dt>咨询用户：</dt>
									<dd>
										<?php if($vo['member_name'] == ''): ?>
										游客
										<?php else: ?>
										<?php echo $vo['member_name']; endif; ?>
										<span>咨询类型：
										<?php if($vo['ct_id'] == 1): ?>
											商品咨询
										<?php elseif($vo['ct_id'] == 2): ?>
											支付问题
										<?php else: ?>
											发票及保修
										<?php endif; ?>
										</span>
										<time datetime="" pubdate="pubdate" class="m-l-20">[<?php echo getTimeStampTurnTime($vo['consult_addtime'] ); ?>]</time>
									</dd>
								</dl>
								<dl class="ask-con">
									<dt>咨询内容：</dt>
									<dd>
										<p><?php echo $vo['consult_content']; ?></p>
									</dd>
								</dl>
								<?php if($vo['consult_reply'] != ''): ?>
									<!-- 回复内容s -->
								<dl class="reply">
									<dt>商家回复：</dt>
									<dd>
										<p><?php echo $vo['consult_reply']; ?></p>
										<time  pubdate="pubdate">[<?php echo getTimeStampTurnTime($vo['consult_reply_time'] ); ?>]</time>
									</dd>
								</dl>
								<!-- 回复内容e -->
								<?php endif; ?>
							</div>
							
						<?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="more">
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsconsult','goodsid='.$goods_id); ?>" target="_blank">查看全部咨询&gt;&gt;</a>
				</div>
			</div>
		<?php endif; ?>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	</div>
	<script type="text/javascript">
		function consultType(type,eve){
			$('.current').removeClass('current');
			$(eve).parent().addClass('current');
			$('[name="nsc_main"]').hide();
			$('#ncs_main_'+Number(type)).show();
		}
	</script>
</div>
</div>
					</div>
					<!-- 常见问题 _end -->
					<!-- 服务 end -->
				</div>
			</div>
		</div>
	</div>
</div>

<input id="hidden_goodsid" type="hidden" value="<?php echo $goods_info['goods_id']; ?>">
<input id="hidden_skuid"   type="hidden" value="">
<input id="hidden_skuname" type="hidden" value="">
<input id="hidden_sku_price" type="hidden" value="">
<input id="hidden_default_img_id" type="hidden" value="<?php echo $goods_info['img_list'][0]['pic_id']; ?>" />
<input id="hidden_max_buy" type="hidden" value="<?php echo $goods_info['max_buy']; ?>" />
<input id="hidden_stock" type="hidden" value="<?php echo $goods_info['stock']; ?>" />
<input id="hidden_point_exchange_type" type="hidden" value="<?php echo $goods_info['point_exchange_type']; ?>"/>
<input id="hidden_point_exchange" type="hidden" value="<?php echo $goods_info['point_exchange']; ?>"/>
<input type="hidden" id="hidden_province" value="<?php echo $user_location['province']; ?>" />
<input type="hidden" id="hidden_city" value="<?php echo $user_location['city']; ?>" />
<input type="hidden" id="hidden_shipping_fee_name" value="<?php echo $goods_info['shipping_fee_name']; ?>" />
<!-- 头部右侧鼠标经过图片放大效果 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/bubbleup.js"></script>
<!-- 头部右侧鼠标经过图片放大效果 _end -->
<!-- 右侧商品信息等定位切换效果 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_tabs_totop.js"></script>
<!-- 右侧商品信息等定位切换效果 _end -->
<!-- 放大镜 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/magiczoom.js"></script>
<!-- 地址选择 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_select_region.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/tabs.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/goods.js"></script>
<script type="text/javascript">
var shop_main = "SHOP_MAIN";
//获取商品最小购买数量
var min_buy = parseInt($(".amount-input").attr("data-min"));
$().ready(function() {
	initSku();//加载sku
	//判断是否有总库存
	if(parseInt($("#hidden_stock").val())==0){
		$(".js-buy-now").addClass("disabled");
		$(".add-cart").addClass("disabled");
	}
// 	if($("#hidden_shipping_fee_name").val() == "无货"){
// 		$(".js-buy-now").addClass("disabled");
// 		$(".add-cart").addClass("disabled");
// 	}
	$("#num").keyup(function(){
		var obj = $(this);
		var r = /^\d+$/;
		if(!r.test(obj.val())){
			if(min_buy > 0){
				obj.val(min_buy);	
			}else{
				obj.val(1);	
			}
			$.msg("请输入数字");
		}else{
			if(parseInt(obj.val()) > parseInt(obj.attr("data-max"))){
				obj.val(obj.attr("data-max"));
			}
			//购买数不能小于最小购买数
			if(parseInt(obj.val()) < min_buy){
				obj.val(min_buy);
			}
			if(parseInt(obj.val()) <= 0){
				if(min_buy > 0){
					obj.val(min_buy);	
				}else{
					obj.val(1);	
				}
			}
		}
	})

	$(".amount-plus").click(function(){
		var obj = $("#num");
		var num = parseInt(obj.val());
		var max = parseInt(obj.attr("data-max"));
		num++;
		if(num > max){
			obj.val(max);
		}else{
			obj.val(num);
		}
	})

	$(".amount-minus").click(function(){
		var obj = $("#num");
		var num = parseInt(obj.val());
		if(num > 1){
			num--;
			if(num < min_buy){
				$.msg("本商品最小购买数为"+min_buy);
				obj.val(min_buy);
			}else{
				obj.val(num);
			}
			
		}
	})
	
	//加载规格
	function initSku(){
		var curr_sku = '';
		var sku_arr = $(".goods-spec-item");
		sku_arr.each(function(i) {
			var $this = $(this);
			if ($this.hasClass("selected")) {
				curr_sku += $this.find("span").attr("id") + ";";
			}
		});
	 	for (i = 0; i < parseInt($("#goods_sku_count").val()); i++) {
			sku_id = "#goods_sku" + i;
			goods_sku_id = $(sku_id).val();
			console.log(curr_sku+" ! "+goods_sku_id);
			if (curr_sku == goods_sku_id) {
				select_skuid = $(sku_id).attr("skuid");
				select_skuName = $(sku_id).attr("skuname");
				select_stock = $(sku_id).attr("stock");//sku商品库存
				original_price = parseFloat($(sku_id).attr("original_price")); //sku商品原价
				if(select_stock==0){
					$(".js-buy-now").addClass("disabled");
					$(".add-cart").addClass("disabled");
				}else{
					//当最小购买数大于总库存时,不可购买
					if(min_buy > select_stock){
						$(".js-buy-now").addClass("disabled");
						$(".add-cart").addClass("disabled");
					}else{
						$(".js-buy-now").removeClass("disabled");
						$(".add-cart").removeClass("disabled");						
					}
				}
				$("#hidden_skuid").val(select_skuid);
				$("#hidden_skuname").val(select_skuName);
				var price = parseFloat($(sku_id).attr("price"));
				var promotion_price = parseFloat($(sku_id).attr("promotion_price"));
				var member_price = parseFloat($(sku_id).attr("member_price"));
				$("#price").text("￥" + promotion_price.toFixed(2));
				$("#member_price").text("￥"+member_price.toFixed(2));
				if(original_price==0){
					$(".show-price").hide();
				}else{
					$(".show-price").show();
				}
				$(".market-price").text("￥" + original_price.toFixed(2));//商品原价
				$("#hidden_sku_price").val(price);
				$(".js-goods-number").text("库存"+select_stock+"件");
				if($("#hidden_max_buy").val()==0)
				{
					$(".amount-input").attr("data-max", select_stock);
				}else{
					$(".amount-input").attr("data-max", $("#hidden_max_buy").val());
				}
				//最小购买数为0时,购买数默认为1
				if(min_buy > 0){
					$(".amount-input").val(min_buy);
				}else{
					$(".amount-input").val(1);	
				}
				
				// 当只有一个sku时，不用验证
				if(parseInt($("#attribute_list").val())==1){
		 			select_specifications=true;//是否选择过规格,来源与shopping_cart.js
				}
				break;
			}
		} 
	}

	//获取sku多图的主规格id
	var spec_id = $("#hide_spec_id").val();
	if(spec_id > 0){
		var firstSku = $("[id^="+spec_id+"]").eq(0);
		firstSku.parent().parent('.goods-spec-item').addClass("selected");
		if(firstSku.attr("id") != undefined){
			var sku_id = subSkuVue(firstSku.attr("id"));
			showSkuPicture(sku_id);
		}
	}

	//截取sku属性值
	function subSkuVue(goods_sku_id){
		num = goods_sku_id.indexOf(":")+1;
		sku_vue_id = goods_sku_id.substr(num);
		return sku_vue_id;
	}

	//根据sku_id显示相册中的图片
	function showSkuPicture(sku_id){
		if($(".spec-items ul li#sku_pic_"+sku_id).length > 0){
			$(".spec-items ul li").hide();
			$(".spec-items ul li#sku_pic_"+sku_id).show();
			var firstPicUrl = $(".spec-items ul li img").not(":hidden").eq(0).attr("data_big_img");
			$(".spec-items ul li").not(":hidden").removeClass("on");
			$(".spec-items ul li").not(":hidden").eq(0).addClass("on");
			$(".MagTargetImg").attr("src",firstPicUrl);
			$(".MagTargetImg").attr("data_big_img",firstPicUrl);
		}
	}

	//规格选择
	$(".goods-spec-item").click(function() {
		if($("#hidden_shipping_fee_name").val() != "无货"){
			$(this).siblings(".selected").removeClass("selected").find("i").remove();
			$(this).addClass("selected");
			if($(this).find("a i").length==0){
				$(this).find("a").append("<i></i>");
			}
			var this_sku_vue = $(this).find("span").attr("id");
			sku_vue = subSkuVue(this_sku_vue);
			showSkuPicture(sku_vue);			
			initSku();
			//规格图片
			var show_big_pic = $(this).find("span").attr("data-show-big-pic");
			if(show_big_pic != undefined && show_big_pic != ""){
				$(".MagTargetImg").attr("src", upload+"/"+show_big_pic);
			}
		}
	}).hover(function() {
// 		$(this).addClass("selected");
	}, function() {
		if($(this).find("i").size() == 0) {
			$(this).removeClass("selected");
		}
	});
	
	// 添加购物车
	$(".add-cart,.js-buy-now").click(function(event) {
		if($(this).hasClass("disabled")) {
			return;
		}
		if($(".amount-input").val() < min_buy){
			$.msg("本商品最小购买数为"+min_buy);
			return;
		}
		var tag = $(this).attr("data-tag");
		var image_url = $("#MagnifierWrap .MagnifierMain").find("img").attr("src");
		var goodsid = <?php echo $goods_info['goods_id']; ?>;
		 $.cart.add(goodsid, $(".amount-input").val(), {
			is_sku: true,
			image_url: image_url,
			event: event,
			tag : tag
		});
	});

	// 添加对比
	$(".add-compare").click(function(event) {
		var target = $(this);
		var goods_id = $(this).data("goods-id");
		var sku_id = $(this).add("sku-id");
		var image_url = $(this).data("image-url");
		$.compare.toggle(goods_id, image_url, event, function(result) {
			if(result.data == 1) {
				$(target).addClass("curr");
			} else {
				$(target).removeClass("curr");
			}
		});
	});

	var is_member_fav_goods = <?php echo $is_member_fav_goods; ?>;
	// 添加收藏
	$(".collect-goods").click(function(event) {
		var num = $(this).find("span").attr("data-collects");
		var obj = $(this).find("span");
		if(is_member_fav_goods==0){
			//点击收藏
			$.ajax({
				url: "<?php echo __URL('SHOP_MAIN/components/collectiongoodsorshop'); ?>",
				type: "post",
				data: { "fav_id":<?php echo $goods_info['goods_id']; ?>,"fav_type":"goods","log_msg":"<?php echo $goods_info['goods_name']; ?>"},
				success: function (data) {
					if(data.code>0){
						is_member_fav_goods = 1;
						num++;
						obj.attr("data-collects",num);
						obj.text("收藏商品 ("+num+"人气)");
					}else{
						$.msg("您已经收藏该商品");
					}
					$(".collect-goods").find("i").css("background-position","-112px -91px");
				}
			});
		}else if (is_member_fav_goods== 1){
			//取消收藏
			$.ajax({
				url: "<?php echo __URL('SHOP_MAIN/components/cancelcollgoodsorShop'); ?>",
				type: "post",
				data: { "fav_id":<?php echo $goods_info['goods_id']; ?>,"fav_type":"goods","log_msg":"<?php echo $goods_info['goods_name']; ?>"},
				success: function (data) {
					if(data.code>0){
						num--;
						obj.attr("data-collects",num);
						obj.text("收藏商品 ("+num+"人气)");
						$(".collect-goods").find("i").css("background-position","-112px -115px");
						is_member_fav_goods = 0;
					}else{
						$.msg("您已经取消收藏该商品");
					}
				}
			});
		}else{
			location.href=__URL("SHOP_MAIN/login/index");
		}
	});
	
	//根据地址计算邮费，商品详情中使用
// 	$(".region-items[data-region-level='2']").click(function(){
// 		getExpressFee($('.js-region').attr("data-province"),$('.js-region').attr("data-city"),$('.js-region').attr("data-district"));
// 	})
	
// 	//根据地址查询运费
// 	function getExpressFee(province_id,city_id,district_id){
// 		if(city_id == null || city_id == '' || province_id == null || province_id == ''){
// 			return;
// 		}
// 		$.ajax({
// 			url : "<?php echo __URL('SHOP_MAIN/goods/getexpressfee'); ?>",
// 			type : "post",
// 			data : { "goods_id" : $("#hidden_goodsid").val(), "province_id" : province_id, "city_id" : city_id, "district_id" : district_id },
// 			success : function(res){
// 				if(res == "无货"){
// 					$(".js-buy-now").addClass("disabled");
// 					$(".add-cart").addClass("disabled");
// 				}else{
// 					$(".js-buy-now").removeClass("disabled");
// 					$(".add-cart").removeClass("disabled");
// 				}
// 				$(".freight-info").text("运费："+res);
// 			}
// 		})
// 	}

});
</script>
<script>
$(function(){
	// 	alert($(".js-region").attr('data-province'));
	$("#goods_detail").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").show();
		$("#goods_attr_list").hide();
		$("#goods_evaluate").hide();
		$("#goods_consult").hide();
	})
	$("#goods_attribute").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").hide();
		$("#goods_attr_list").show();
		$("#goods_evaluate").hide();
		$("#goods_consult").hide();
	})
	$("#evaluate_count").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").hide();
		$("#goods_attr_list").hide();
		$("#goods_evaluate").show();
		$("#goods_consult").hide();
	})
	$("#goods_consultation").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").hide();
		$("#goods_attr_list").hide();
		$("#goods_evaluate").hide();
		$("#goods_consult").show();
	})
})
//领取优惠劵
function coupon_receive(event,coupon_type_id){
	if($("#hidden_uid").val()==''){
		showPopLogin();
	}else{
		var data_at_least = $(event).attr("data-at-least");
		var data_money = $(event).attr("data-money");
		var data_start_time = $(event).attr("data-start-time");
		var data_end_time = $(event).attr("data-end-time");
		var data_max_fetch = parseInt($(event).attr("data-max-fetch"));
		var data_receive_quantity = parseInt($(event).attr("data-receive-quantity"));
		if(data_max_fetch != 0 && data_receive_quantity>= data_max_fetch){
			layer.open({
			  	type: 1,
			  	skin: 'layui-layer-rim', //加上边框
			  	area: ['420px', '200px'], //宽高
			  	title : '领取优惠劵',
			  	content: '<div class="tip-info"><div class="left"><i class="receiveTip"></i></div><div class="right"><p class="coupon_desc">您的领取已达到上限，去看看其他的劵吧！</p><p class="my_coupon">查看已领优惠劵：<a href="' + __URL('SHOP_MAIN/member/vouchers')+ '" target="_blank">我的优惠信息</a></p></div></div>'
			});
			return false;
		}
		$.ajax({
			url : __URL("SHOP_MAIN/goods/receiveGoodsCoupon"),
			type : "post",
			data : { "coupon_type_id" : coupon_type_id},
			success : function(res){
				if(res['code']>0){
					$(".coupon"+coupon_type_id).attr("data-receive-quantity",data_receive_quantity+1);
					layer.open({
					  	type: 1,
					  	skin: 'layui-layer-rim', //加上边框
					  	area: ['420px', '200px'], //宽高
					  	title : '领取优惠劵',
					  	content: '<div class="tip-info"><div class="left"><i></i></div><div class="right"><p class="coupon_desc">恭喜，您以成功领取<span style="color:#FF0000;">满'+data_at_least+'元减'+data_money+'元</span>优惠劵</p><p class="use_time">使用时间：'+data_start_time+'-'+data_end_time+'</p><p class="my_coupon">查看已领优惠劵：<a href="'+__URL('SHOP_MAIN/member/vouchers')+'"  target="_blank">我的优惠信息</a></p></div></div>'
					});
				}else if(res['code'] == -2011){
					layer.open({
					  	type: 1,
					  	skin: 'layui-layer-rim', //加上边框
					  	area: ['420px', '200px'], //宽高
					  	title : '领取优惠劵',
					  	content: '<div class="tip-info"><div class="left"><i class="receiveTip"></i></div><div class="right"><p class="coupon_desc">来迟了,已经领完了，去看看其他的劵吧！</p><p class="my_coupon">查看已领优惠劵：<a href="'+__URL('SHOP_MAIN/member/vouchers')+'" target="_blank">我的优惠信息</a></p></div></div>'
					});
				}else{
					layer.msg(res['message']);
				}
			}
		})
	}
}
</script>



<!-- 底部 -->

<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话 
-->
<div class="footer">
	<div class="dsc-service">
		<div class="w w1200 relative">
			<ul class="service-list">
				<li>
					<div class="service-tit service-zheng">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-zheng.png">
					</div>
					<div class="service-txt">正品保障</div>
				</li>
				<li>
					<div class="service-tit service-qi">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-qi.png"></i>
					</div>
					<div class="service-txt">七天包退</div>
				</li>
				<li>
					<div class="service-tit service-hao">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-grin.png">
					</div>
					<div class="service-txt">好评如潮</div>
				</li>
				<li>
					<div class="service-tit service-shan">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-light.png"></i>
					</div>
					<div class="service-txt">闪电发货</div>
				</li>
				<li class="last">
					<div class="service-tit service-quan">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/icon-tronphy.png">
					</div>
					<div class="service-txt">权威荣誉</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="dsc-help">
		<div class="w w1200">
			<div class="help-list">
				<?php if(is_array($platform_help_class) || $platform_help_class instanceof \think\Collection || $platform_help_class instanceof \think\Paginator): if( count($platform_help_class)==0 ) : echo "" ;else: foreach($platform_help_class as $key=>$class_vo): ?>
				<div class="help-item">
					<h3><?php echo $class_vo['class_name']; ?></h3>
					<ul>
						<?php if(is_array($platform_help_document) || $platform_help_document instanceof \think\Collection || $platform_help_document instanceof \think\Paginator): if( count($platform_help_document)==0 ) : echo "" ;else: foreach($platform_help_document as $key=>$document_vo): if($class_vo['class_id'] == $document_vo['class_id']): ?>
						<li><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id='.$document_vo['id']); ?>"
							title="售后流程" target="_blank"><?php echo $document_vo['title']; ?></a></li> <?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="help-cover">
				<div class="help-ctn">
					<div class="help-ctn-mt">
						<span>服务热线</span> <strong><?php echo $web_info['web_phone']; ?></strong>
					</div>
					<div class="help-ctn-mb">

						<a id="IM" im_type="dsc" onclick="openWin(this)"
							href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes"
							target="_blank" class="btn-ctn"><img
							src="__TEMP__/<?php echo $style; ?>/public/images/icon-csu.png"
							style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
					</div>
				</div>
				<div class="help-scan">
					<div class="code">
						<img src="__UPLOAD__/<?php echo $web_info['web_qrcode']; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息 
-->
<div class="dsc-copyright">
	<div class="w w1200" id="bottom_copyright">
		<p class="copyright_info">
			<a href="#" id="copyright_meta"></a>
		</p>
		<b> <a href="javascript:;" target="_blank" class="copyright-logo"><?php echo $web_info['third_count']; ?></a>&nbsp;&nbsp;
			<a href="http://www.niushop.com.cn" target="_blank" class="copyright-logo" id="copyright_companyname"></a> 
			<span id="copyright_desc"></span>
		</b>
	</div>
</div>



<!-- 添加js文件 -->


<?php if($uid == ''): ?>
	<style>
.verification-code{
	position:relative;
}
.verification-code img{
	position: absolute;
	top: 5px;
	right: 5px;
	z-index:101;
	width:100px;
	height:30px;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
	$(window).on("resize",function(){
		//获取当前屏幕的宽度和高度
		var window_width = parseFloat($(window).width());
		var window_height = parseFloat($(window).height());
		//获取登录框的宽度和高度
		var div_width = parseFloat($("#layui-layer").css("width"));
		var div_height = parseFloat($("#layui-layer").css("height"));
		//确定登录框的显示位置
		var top = (window_height-div_height)/2;
		var left = (window_width-div_width)/2;
		$("#layui-layer").css({"top":top,"left":left});
	})
	//自执行一次resize函数
	$(window).trigger("resize");
});
function titleMove() {
	var moveable = true;
	var loginDiv = document.getElementById("layui-layer");
	//以下变量提前设置好
	var clientX = window.event.clientX;//鼠标水平位置
	var clientY = window.event.clientY;//鼠标垂直位置
	var moveTop = parseFloat(loginDiv.style.top);//登录框的top属性
	var moveLeft = parseFloat(loginDiv.style.left);//登录框的left属性
	var docX = parseFloat(window.innerWidth);//可视区域的宽度
	var docY = parseFloat(window.innerHeight);//可视区域的高度
	var divWidth = parseFloat(loginDiv.style.width);//登录框的宽度
	var divHeight = parseFloat(loginDiv.style.height);//登录框的高度 
	var max_width = docX-divWidth;
	var max_height = docY-divHeight;
	document.onmousemove = function MouseMove() {
		if (moveable) {
			var y = moveTop + window.event.clientY - clientY;  //当前鼠标位置减去上次鼠标位置
			var x = moveLeft + window.event.clientX - clientX;
			if (x >= 0 && y >= 0 && moveTop+divHeight<=docY &&	moveLeft+divWidth<=docX) {
				loginDiv.style.top = y + "px";
				loginDiv.style.left = x + "px";
			}else{
				if(x<0){
					loginDiv.style.left = "5px";
			}else if(y<0){
				loginDiv.style.top = "5px";
			}else if(moveTop+divHeight>docY){
				loginDiv.style.top = max_height + "px";
			}else if(moveLeft+divWidth>docX){
				loginDiv.style.left = max_width + "px";
			}
		} 
	}
}

document.onmouseup = function Mouseup() {
		moveable = false;
	}
}
</script>
<input id="goods_id" value="<?php echo $goods_info['goods_id']; ?>" type="hidden">
<div id="mask-layer-login" style="display:none;position:fixed;top:0;width:100%;height:100%;z-index:999999;background:rgba(0,0,0,0.75);"></div>
<div class="layui-layer layui-layer-page layer-anim" id="layui-layer" type="page" times="100002" showtime="0" contype="string" style="display:none;z-index: 19891015;position:fixed;width:346px;height:436px;">
	<div class="layui-layer-title" style="cursor: move;" id="control-trawaaa"  onmousedown="titleMove();">您尚未登录<span style="width:40px;display:inline-block "></span></div>
	<div id="NS_LOGIN_LAYER_DIALOG" class="layui-layer-content">
		<div id="1487644497l6UAoM" class="login-form">
			<div class="login-con pos-r">
				<div class="login-wrap">
					<div class="login-tit">
						还没有账号？<a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" class="regist-link color">立即注册<i>&gt;</i></a>
					</div>
					<div class="login-radio">
						<ul>
							<li class="active" id="login2" onclick="setTab('login',2,2)">会员登录</li>
						</ul>
					</div>
					<!-- 普通登录 star -->
					<div id="con_login_2" class="form">
						<div class="form-group item-name">
							<!-- 错误项标注 给div另添加一个class值'error' star -->
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="text" name="txtName" id="txtName" placeholder="手机号/会员名/邮箱" class="text" tabindex="1" autocomplete="off" aria-required="true" />
							</div>
							<!-- 错误项标注 给div另添加一个class值'error' end -->
						</div>
						<div class="form-group item-password">
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="password" name="txtPWD" id="txtPWD" placeholder="请输入密码" class="text" tabindex="2"  autocomplete="off" aria-required="true" />
							</div>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="form-group verification-code">
							<div class="form-control-box">
								<input type="text" id="vertification" class="text vertification" name="vertification" placeholder="请输入验证码 " />
								<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha'); ?>'" />
							</div>
						</div>
						<input type="hidden" id="hidden_captcha_src" value="<?php echo __URL('SHOP_MAIN/captcha'); ?>" />
						<?php endif; ?>
<!-- 						<div class="safety"> -->
<!-- 							<label for="remember"> -->
<!-- 								<input type="checkbox" name="expire" checked="checked" type="checkbox" value="1"> -->
<!-- 								<span style="display:inline-block;padding-bottom:7px;">7天内自动登录</span> -->
<!-- 							</label> -->
<!-- 							<a class="forget-password fr" href="<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>" style="margin-top:2px;">忘记密码？</a> -->
<!-- 						</div> -->
						<div class="login-btn">
							<input type="hidden" name="act" value="act_login" />
							<input type="hidden" name="back_act" />
							<input type="button" name="buttom" class="btn-img btn-entry bg-color" id="loginsubmit" onclick="btnlogin(this)" value="立即登录" />
						</div>
						<div class="item-coagent">
							<?php if($Wchat_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=WCHAT'); ?>" data-id="qq" class="website-login"><i class="weixin"></i></a>
							<?php endif; if($qq_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=QQLOGIN'); ?>" data-id="wchat" class="website-login"><i class="qq"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span><span class="layui-layer-resize"></span>
</div>
<!-- 验证码脚本 -->
<script type="text/javascript">
// 登陆 登录时 登录按钮"变暗"
function btnlogin(event) {
	var goodsid = $("#goods_id").val();
	var userName = $('#txtName').val();
	var password = $('#txtPWD').val();
	var vertification = "";
	if(userName==''){
		$.msg('用户名不可为空');
		$('#txtName').select();
		return;
	}
	if(password==''){
		$.msg('密码不可为空');
		$('#txtPWD').select();
		return;
	}
	if("<?php echo $login_verify_code['pc']; ?>" == 1){
		vertification = $('#vertification').val();
		if(vertification == undefined || vertification==''){
			$.msg('验证码不可为空');
			$("#vertification").select();
			return;
		}
	}
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/login/login'); ?>",
		data:{"userName" : userName,"password" : password,"vertification" : vertification},
		success : function(data){
			if(data['code']>0){
				$("#hidden_uid").val(data['code']);
				var tag = $('#mask-layer-login').attr("data-tag");
				if(goodsid == '' || tag==undefined){
					$.msg('登陆成功！');
					window.location.reload();
				}else{
					login_buy_goods(event);
				}
			}else{
				$.msg(data['message']);
				$("#verify_img").attr("src",'<?php echo __URL('SHOP_MAIN/captcha'); ?>');
			}
		}
	});
}
function login_buy_goods(event){
	var image_url = "";
	var goodsid =  $("#goods_id").val();
	var tag = $('#mask-layer-login').attr("data-tag");
	 $.cart.add(goodsid, $(".amount-input").val(), {
		is_sku: true,
		image_url: image_url,
		event: event,
		tag : tag
	})
}
</script>
<?php endif; ?>

<script>
(function(){
	var bp = document.createElement('script');
	var curProtocol = window.location.protocol.split(':')[0];
	if (curProtocol === 'https') {
		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	}
	else {
		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	}
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(bp, s);
})();
</script>
<?php if($default_client): ?>
<div style="position:fixed;right:0;bottom:10%;z-index:999999;" onclick="location.href='APP_MAIN';" id="go_mobile">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/go_mobile.png"/>
</div>
<script>
$(function(){
	checkTerminal()
});
window.onresize = function(){
	checkTerminal();
}
function checkTerminal(){
	if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && window.screen.availWidth<768){
		//跳到手机端
		$("#go_mobile").show();
	}else{
		$("#go_mobile").hide();
	}
}
</script>
<?php endif; ?>
</body>
</html>