<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/var/www/html/maccms102/application/admin/view/index/index.html";i:1709014864;s:63:"/var/www/html/maccms102/application/admin/view/public/head.html";i:1709014864;s:63:"/var/www/html/maccms102/application/admin/view/public/foot.html";i:1709014864;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - <?php echo lang('admin/public/head/title'); ?></title>
    <link rel="stylesheet" href="/maccms102/static/layui/css/layui.css">
    <link rel="stylesheet" href="/maccms102/static/css/admin_style.css?<?php echo $MAC_VERSION; ?>">
    <script type="text/javascript" src="/maccms102/static/js/jquery.js"></script>
    <script type="text/javascript" src="/maccms102/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="/maccms102",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION="v10";
    </script>
</head>
<body>

<style type="text/css">
    .hs-iframe{width:100%;height:100%;}
    .layui-tab-content {top: 41px; position: absolute; bottom: 0; width: 100%; padding: 0; }
    .layui-tab-item{height:100%;}
    .layui-tab-title .layui-this {background-color: #009688; color: #fff; }
    .layui-tab-title .layui-this:after {border: none; }
    .layui-tab-title li { border-right: 1px solid #e6e6e6;}
    .footer{position:fixed;left:0;bottom:0;z-index:998;}
</style>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header-top">
	
	<div class="top-logo"><?php echo lang('admin/index/index/name'); ?></div>
	<ul class="layout-right" lay-filter="">	
		 <li class="nav-item">
			<a href="/maccms102/" target="_blank"><i class="layui-icon layui-icon-home size-14"></i></a>
	     </li> 
		 <li class="nav-item ">
			   <a href="<?php echo url('index/clear'); ?>" class="j-ajax " refresh="yes"><i class="layui-icon layui-icon-delete size-16"></i></a>
		 </li>
		 <li class="nav-item">
			   <a href="javascript:;" id="admin_name">
                   <i class="layui-icon layui-icon-app  size-14"></i>
			   </a>
			 
		 </li>
	</ul>	
		
	</div>

	<div class="layui-header">
	    <div class="fl header-logo"><?php echo lang('admin/index/index/name'); ?></div>
		<div class="fl header-fold topLevelMenus"><a href="javascript:;" title="<?php echo lang('admin/index/index/menu_switch'); ?>" class="aicon ai-caidan" id="foldSwitch"><i class="layui-icon">&#xe65f;</i></a></div>
		 <a href="javascript:;" class=" site-tree-mobile layui-mobile layui-show-xs-block layui-hide-lg"><i class="layui-icon layui-icon-spread-left size-20"></i></a>
	    <div class="bottom-nav">	
		  <ul class="layui-nav fl nobg main-nav " >
            <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($i == 1)): ?>
               <li class="layui-nav-item layui-this main-nav mob-nav" data-i="<?php echo $i; ?>">
                <?php else: ?>
               <li class="layui-nav-item main-nav mob-nav">
                <?php endif; ?>
                <a href="javascript:;" data-i="<?php echo $i; ?>"><?php echo $vo['name']; ?></a>
			  </li>
             <?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
			<ul class="layui-nav layui-layout-right" lay-filter="">
				 <li class="layui-nav-item layui-hide-xs">
					<a href="javascript:void(0);"><?php echo lang('opt'); ?>&nbsp;&nbsp;</a>
					<dl class="layui-nav-child">
                        <dd><a href="<?php echo url('index/clear'); ?>" class="j-ajax" refresh="yes"><?php echo lang('admin/index/index/menu_cache_clear'); ?></a></dd>
						<dd><a href="javascript:void(0);" id="lockScreen"><?php echo lang('admin/index/index/menu_lock'); ?></a></dd>
						<dd><a href="<?php echo url('index/logout'); ?>"><?php echo lang('admin/index/index/menu_logout'); ?></a></dd>
					</dl>
				</li>
				<li class="layui-nav-item layui-hide-xs">
                    <a href="/maccms102/" target="_blank"><?php echo lang('admin/index/index/menu_index'); ?></a>
                </li>
			</ul>
		</div>
	</div>
 
	<div class="nav-item-ul">
	  <div class="">
		  <ul class="layui-nav">
			  <li class="layui-nav-item"><a href="/maccms102/" target="_blank"><?php echo lang('admin/index/index/menu_index'); ?></a></li>
			  <li class="layui-nav-item"><a href="javascript:void(0);" id="lockScreen"><?php echo lang('admin/index/index/menu_lock'); ?></a></li>
			  <li class="layui-nav-item"><a href="<?php echo url('index/clear'); ?>" class="j-ajax" refresh="yes"><?php echo lang('admin/index/index/menu_cache_clear'); ?></a></li>
			  <li class="layui-nav-item"><a href="<?php echo url('index/logout'); ?>"><?php echo lang('admin/index/index/menu_logout'); ?></a></li>
		  </ul>
		
	  </div>
	</div>

    <div class="layui-side layui-bg-black" id="switchNav">
        <div class="layui-side-scroll navBar" id="navBar">
            <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(($i == 1)): ?>
            <ul class="layui-nav layui-nav-tree">
                <?php else: ?>
                <ul class="layui-nav layui-nav-tree" style="display:none;">
                    <?php endif; ?>
                    <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;"><i class="<?php echo $v['icon']; ?>"></i><?php echo $v['name']; ?><span class="layui-nav-more"></span></a>

                    <dl class="layui-nav-child">
                        <?php if(is_array($v['sub']) || $v['sub'] instanceof \think\Collection || $v['sub'] instanceof \think\Paginator): $kk = 0; $__LIST__ = $v['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?>
                        <dd>
                            <?php if(($vv['url'] !=='###')): ?>
                            <a class="admin-nav-item" data-id="<?php echo $key; ?><?php echo $kk; ?>" href="<?php echo $vv['url']; ?>"><i class="<?php echo $vv['icon']; ?>"></i> <?php echo $vv['name']; ?></a>
                            <?php else: ?>
                            <hr class="layui-bg-gray">
                            <?php endif; ?>
                        </dd>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </dl>
                    </li>
                </ul>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="site-tree-mobile layui-hide">
        <i class="layui-icon"></i>
    </div>
    <div class="site-mobile-shade"></div>

    <div class="layui-body" id="switchBody">
        <div class="layui-tab mag0" id="top_tabs_box" lay-filter="macTab" lay-allowClose="true">
            <div class="tab-go-refresh" id="J_refresh"><i class="layui-icon layui-icon-refresh"></i></div>
            <div class="tab-go-left" id="page-prev"><i class="layui-icon layui-icon-zuozuo"></i></div>
            <ul class="layui-tab-title top_tab" id="B_history">
                <li lay-id="111" class="layui-this"><?php echo lang('admin/index/index/menu_welcome'); ?></li>
            </ul>
            <div class="tab-right">
                <div class="tab-go-right" id="page-next"><i class="layui-icon layui-icon-youyou"></i></div>
                <ul class="layui-nav closeBox">
                    <li class="layui-nav-item" >
                        <a href="javascript:;"><?php echo lang('admin/index/index/menu_opt'); ?></a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" class="closePageAll">&nbsp;<?php echo lang('admin/index/index/menu_close_all'); ?></a></dd>
                            <dd><a href="javascript:;" class="closePageOther">&nbsp;<?php echo lang('admin/index/index/menu_close_other'); ?></a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <iframe lay-id="111" src="<?php echo url('index/welcome'); ?>" width="100%" height="100%" frameborder="0" scrolling="yes" class="hs-iframe"></iframe>
                </div>
            </div>

        </div>

    </div>

    <div class="layui-footer footer">
        <div class="fl"></div>
        <div class="fr"> <?php echo lang('maccms_copyright'); ?></div>
    </div>
</div>

<script type="text/javascript" src="/maccms102/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<!--请在下方写此页面业务相关的脚本-->
<script>
    window.localStorage.clear();
    var LAYUI_OFFSET = 60;
	
	$('#admin_name').click(function(){
		 $('body').toggleClass('drawer-body-right');
	})
</script>

<script type="text/javascript">
    layui.use(['element', 'layer'], function() {
        var $ = layui.jquery, element = layui.element, layer = layui.layer;
        $('.layui-tab-content').height($(window).height() - 145);
        var tab = {
            add: function(title, url, id) {
                element.tabAdd('macTab', {
                        title: title,
                        content: '<iframe width="100%" height="100%" lay-id="'+id+'" frameborder="0" src="'+url+'" scrolling="yes" class="x-iframe"></iframe>',
                        id: id
            });
            }, change: function(id) {
                element.tabChange('macTab', id);
            }
        };
        $('.admin-nav-item').click(function(event) {
            var that = $(this);
            var id = that.attr('data-id');
            if ($('iframe[lay-id="'+id+'"]')[0]) {
                tab.change(id);
                event.stopPropagation();
                $("iframe[lay-id='"+id+"']")[0].contentWindow.location.reload(true);//切换后刷新框架
                return false;
            }
            if ($('iframe').length == 10) {
                layer.msg("<?php echo lang('admin/index/index/menu_max'); ?>");
                return false;
            }
            that.css({color:'#fff'});
            tab.add(that.text(), that.attr('href'), that.attr('data-id'));
            tab.change(that.attr('data-id'));
            event.stopPropagation();
            return false;
        });
        $(document).on('click', '.layui-tab-close', function() {
            $('.layui-nav-child a[data-id="'+$(this).parent('li').attr('lay-id')+'"]').css({color:'rgba(255,255,255,.7)'});
        });


        //显示顶部导航时作位置判断，点击左边菜单、上一tab、下一tab时公用
        function showTab(li) {
            if (li.length) {
                var ul = $('#B_history'),
                    li_offset = li.offset(),
                    li_width = li.outerWidth(true),
                    next_left = $('#page-next').offset().left, //右边按钮的界限位置
                    prev_right = $('#page-prev').offset().left + $('#page-prev').outerWidth(true); //左边按钮的界限位置
                if (li_offset.left + li_width > next_left) { //如果将要移动的元素在不可见的右边，则需要移动
                    var distance = li_offset.left + li_width - next_left; //计算当前父元素的右边距离，算出右移多少像素
                    ul.animate({
                        left: '-=' + distance
                    }, 200, 'swing');
                } else if (li_offset.left < prev_right) { //如果将要移动的元素在不可见的左边，则需要移动
                    var distance = prev_right - li_offset.left; //计算当前父元素的左边距离，算出左移多少像素
                    ul.animate({
                        left: '+=' + distance
                    }, 200, 'swing');
                }
                li.trigger('click');
            }
        }

        //上一个选项卡
        $('#page-prev').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            var ul = $('#B_history'),
                current = ul.find('.layui-this'),
                li = current.prev('li');
            showTab(li);
        });


        //下一个选项卡
        $('#page-next').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            var ul = $('#B_history'),
                current = ul.find('.layui-this'),
                li = current.next('li');
            showTab(li);
        });

        //刷新
        $('#J_refresh').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            var index = layer.load();
            var id = $('#B_history .layui-this').attr('lay-id'),
                iframe = $("iframe[lay-id='"+id+"']")[0];
            if (iframe.contentWindow) {
                iframe.contentWindow.location.reload(true);
                layer.close(index);
            }
        });

        //关闭全部选项卡
        $(".closePageAll").on("click", function() {
            if ($("#B_history li").length > 1) {
                $("#B_history li").each(function() {
                    data_id = $(this).attr('lay-id');
                    if (data_id != '' && data_id != '111') {
                        element.tabDelete("macTab", data_id);
                        $("iframe[lay-id='"+data_id+"']").remove(); //移除iframe页面
                    }
                })

            } else {
                layer.msg("<?php echo lang('admin/index/index/menu_close_empty'); ?>");
            }
        });
        //关闭其他选项卡
        $(".closePageOther").on("click", function() {
            if ($("#B_history li").length > 1) {
                var cid = $('#B_history .layui-this').attr('lay-id');
                $("#B_history li").each(function() {
                    data_id = $(this).attr('lay-id');
                    if (data_id != '' && data_id != '111' && data_id != cid) {
                        element.tabDelete("macTab", data_id);
                        $("iframe[lay-id='"+data_id+"']").remove(); //移除iframe页面
                    }
                })

            } else {
                layer.msg("<?php echo lang('admin/index/index/menu_close_empty'); ?>");
            }
        });

        $('.mob-nav').on("click", function() {
            $('.site-tree-mobile').click();
        });
        //手机设备的简单适配
        var treeMobile = $('.site-tree-mobile'),
            shadeMobile = $('.site-mobile-shade')
        treeMobile.on('click', function() {
            $('body').addClass('site-mobile');
            $('.Menus-winner').removeClass('topLevelMenus');//解决top导航
            $('.Menus-winner').addClass('topLevelMenus-winner');//解决top导航

        });
        shadeMobile.on('click', function() {
            $('body').removeClass('site-mobile');
            $('.Menus-winner').addClass('topLevelMenus');//解决top导航
        });
    });
    $(function(){
        setInterval("checkCache()", 30*1000);
    });
    //检查缓存并保持登录状态
    function checkCache(){
        $.ajax({
            url: "<?php echo url('checkcache'); ?>",
            cache: false,
            success: function(r){
                if(r=='haved'){
                    layer.msg('<?php echo lang("admin/index/cache_data"); ?>', {time: 3000});
                }
            }
        });
    }
</script>

</body>
</html>