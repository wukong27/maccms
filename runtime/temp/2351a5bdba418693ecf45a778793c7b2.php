<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"/var/www/html/maccms102/application/admin/view/type/info.html";i:1709014864;s:63:"/var/www/html/maccms102/application/admin/view/public/head.html";i:1709014864;s:63:"/var/www/html/maccms102/application/admin/view/public/foot.html";i:1709014864;}*/ ?>
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
<div class="page-container p10">

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160" referrerPolicy="no-referrer"></div>
    
    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="type_id" value="<?php echo $info['type_id']; ?>">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <blockquote class="layui-elem-quote layui-quote-nm">
            <?php echo lang('admin/type/tip'); ?>
        </blockquote>

        <div class="layui-form-item">
            <label class="layui-form-label"> <?php echo lang('genre'); ?>：</label>
            <div class="layui-input-inline ">
                    <select id="type_mid" name="type_mid" lay-filter="type_mid">
                        <option value="1" <?php if($info['type_mid'] == '1' || ($info['type_id'] == 0 && $infop['type_mid'] == '1')): ?>selected <?php endif; ?>><?php echo lang('vod'); ?></option>
                        <option value="2" <?php if($info['type_mid'] == '2' || ($info['type_id'] == 0 && $infop['type_mid'] == '2')): ?>selected <?php endif; ?>><?php echo lang('art'); ?></option>
                        <option value="8" <?php if($info['type_mid'] == '8' || ($info['type_id'] == 0 && $infop['type_mid'] == '8')): ?>selected <?php endif; ?>><?php echo lang('actor'); ?></option>
                        <option value="11" <?php if($info['type_mid'] == '11' || ($info['type_id'] == 0 && $infop['type_mid'] == '11')): ?>selected <?php endif; ?>><?php echo lang('website'); ?></option>
                    </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/type/parent_type'); ?>：</label>
            <div class="layui-input-inline ">
                    <select name="type_pid">
                        <option value="0"><?php echo lang('admin/type/top_type'); ?></option>
                        <?php if(is_array($parent) || $parent instanceof \think\Collection || $parent instanceof \think\Paginator): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['type_id']; ?>" <?php if($info['type_pid'] == $vo['type_id'] || $pid == $vo['type_id']): ?>selected <?php endif; ?>><?php echo $vo['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('status'); ?>：</label>
            <div class="layui-input-block">
                <input name="type_status" type="radio" id="rad-1" value="0" title="<?php echo lang('disable'); ?>" <?php if($info['type_status'] != 1): ?>checked <?php endif; ?>>
                <input name="type_status" type="radio" id="rad-2" value="1" title="<?php echo lang('enable'); ?>" <?php if($info['type_status'] == 1): ?>checked <?php endif; ?>>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <input type="text" class="layui-input" value="<?php echo $info['type_sort']; ?>" placeholder="" id="type_sort" name="type_sort">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('name'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" lay-verify="type_name" value="<?php echo $info['type_name']; ?>" placeholder="" id="type_name" name="type_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('en'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_en']; ?>" placeholder="" id="type_en" name="type_en">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/type/type_tpl'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" lay-verify="type_tpl" value="<?php echo $info['type_tpl']; ?>" placeholder="" id="type_tpl" name="type_tpl">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/type/show_tpl'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" lay-verify="type_tpl_list" value="<?php echo $info['type_tpl_list']; ?>" placeholder="" id="type_tpl_list" name="type_tpl_list">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/type/detail_tpl'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_tpl_detail']; ?>" placeholder="" id="type_tpl_detail" name="type_tpl_detail">
            </div>
        </div>

        <div class="layui-form-item vod-list">
            <label class="layui-form-label"><?php echo lang('admin/type/play_tpl'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_tpl_play']; ?>" placeholder="" id="type_tpl_play" name="type_tpl_play">
            </div>
        </div>
        <div class="layui-form-item vod-list">
            <label class="layui-form-label"><?php echo lang('admin/type/down_tpl'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_tpl_down']; ?>" placeholder="" id="type_tpl_down" name="type_tpl_down">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('seo_title'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_title']; ?>" placeholder="" id="type_title" name="type_title">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('seo_key'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_key']; ?>" placeholder="" id="type_key" name="type_key">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('seo_des'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_des']; ?>" placeholder="" id="type_des" name="type_des">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/type/logo'); ?>：</label>
            <div class="layui-input-inline w600">
                <input type="text" name="type_logo" placeholder="" value="<?php echo $info['type_logo']; ?>" class="layui-input upload-input">
            </div>
            <div class="layui-input-inline ">
                <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:'type_logo'}}" id="upload1"><?php echo lang('upload_pic'); ?></button>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/type/pic'); ?></label>
            <div class="layui-input-inline w600">
                <input type="text" name="type_pic" placeholder="" value="<?php echo $info['type_pic']; ?>" class="layui-input upload-input">
            </div>
            <div class="layui-input-inline ">
                <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:'type_pic'}}" id="upload1"><?php echo lang('upload_pic'); ?></button>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('jumpurl'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_jumpurl']; ?>" placeholder="" id="type_jumpurl" name="type_jumpurl">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('class'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['class']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[class]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?> >
            <label class="layui-form-label"><?php echo lang('extend_area'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['area']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[area]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('extend_lang'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['lang']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[lang]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('extend_year'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['year']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[year]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('admin/type/extend_star'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['star']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[star]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('admin/type/extend_director'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['director']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[director]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('admin/type/extend_state'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['state']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[state]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('admin/type/extend_version'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['version']; ?>" placeholder="<?php echo lang('multi_separate_tip'); ?>" name="type_extend[version]">
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true"><?php echo lang('btn_save'); ?></button>
                <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/maccms102/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript">
    function selectOnChange(id)
    {
        var flag = id;
        var type_tpl = 'type.html';
        var type_tpl_list = 'show.html';
        var type_tpl_detail = 'detail.html';
        var type_tpl_play = 'play.html';
        var type_tpl_down = 'down.html';

        if(flag != 1){
            $(".vod-list").hide();
            type_tpl_play = '';
            type_tpl_down = '';
        }
        else{
            $(".vod-list").show();
        }
        if($('input[name="type_id"]').val() ==''){
            $('input[name="type_tpl"]').val(type_tpl);
            $('input[name="type_tpl_list"]').val(type_tpl_list);
            $('input[name="type_tpl_detail"]').val(type_tpl_detail);
            $('input[name="type_tpl_play"]').val(type_tpl_play);
            $('input[name="type_tpl_down"]').val(type_tpl_down);
        }
    }
    layui.use(['form','upload', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , upload = layui.upload
                , $ = layui.jquery;

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('upload/upload'); ?>?flag=type"
            ,method: 'post'
            ,before: function(input) {
                layer.msg("<?php echo lang('upload_ing'); ?>", {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

                if(res.data.thumb_class !=''){
                    $('.'+ res.data.thumb_class).val(res.data.thumb[0].file);
                }
            }
        });

        $('.upload-input').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc;	} else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });

        // 验证
        form.verify({
            type_name: function (value) {
                if (value == "") {
                    return "<?php echo lang('name_empty'); ?>";
                }
            },
            type_tpl: function (value) {
                if (value == "") {
                    return "<?php echo lang('admin/type/tpl_empty'); ?>";
                }
            }
        });


        form.on('select(type_mid)', function(data){
            selectOnChange(data.value);
        });


        selectOnChange(<?php echo $info['type_mid']; ?>);
    });
</script>

</body>
</html>