<?php if (!defined('THINK_PATH')) exit(); /*a:10:{s:34:"template/a_0012/html/vod/show.html";i:1696235806;s:58:"/var/www/html/maccms102/template/a_0012/html/vod/type.html";i:1715409734;s:59:"/var/www/html/maccms102/template/a_0012/html/block/seo.html";i:1696235486;s:63:"/var/www/html/maccms102/template/a_0012/html/block/include.html";i:1696235478;s:60:"/var/www/html/maccms102/template/a_0012/html/block/head.html";i:1714987376;s:62:"/var/www/html/maccms102/template/a_0012/html/block/status.html";i:1696235496;s:64:"/var/www/html/maccms102/template/a_0012/html/block/vod_item.html";i:1696235512;s:72:"/var/www/html/maccms102/template/a_0012/html/block/vod_item_ranking.html";i:1696235516;s:62:"/var/www/html/maccms102/template/a_0012/html/block/paging.html";i:1696235482;s:60:"/var/www/html/maccms102/template/a_0012/html/block/foot.html";i:1712903283;}*/ ?>
<!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php 
  if(!empty($obj['type_extend']['class'])) {
    $classArray=explode(',',$obj['type_extend']['class']);
  }elseif(!empty($obj['parent']['type_extend']['class'])){
    $classArray=explode(',',$obj['parent']['type_extend']['class']);
  }else{
    $classArray=explode(',',$GLOBALS['config']['app']['vod_extend_class']);
  }
  if(!empty($obj['type_extend']['area'])) {
    $areaArray=explode(',',$obj['type_extend']['area']);
  }elseif(!empty($obj['parent']['type_extend']['area'])){
    $areaArray=explode(',',$obj['parent']['type_extend']['area']);
  }else{
    $areaArray=explode(',',$GLOBALS['config']['app']['vod_extend_area']);
  }
  if(!empty($obj['type_extend']['year'])) {
    $yearArray=explode(',',$obj['type_extend']['year']);
  }elseif(!empty($obj['parent']['type_extend']['year'])){
    $yearArray=explode(',',$obj['parent']['type_extend']['year']);
  }else{
    $yearArray=explode(',',$GLOBALS['config']['app']['vod_extend_year']);
  }
  if(!empty($obj['type_extend']['lang'])) {
    $langArray=explode(',',$obj['type_extend']['lang']);
  }elseif(!empty($obj['parent']['type_extend']['lang'])){
    $langArray=explode(',',$obj['parent']['type_extend']['lang']);
  }else{
    $langArray=explode(',',$GLOBALS['config']['app']['vod_extend_lang']);
  }
  if(!empty($obj['type_extend']['version'])) {
    $versionArray=explode(',',$obj['type_extend']['version']);
  }elseif(!empty($obj['parent']['type_extend']['version'])){
    $versionArray=explode(',',$obj['parent']['type_extend']['version']);
  }else{
    $versionArray=explode(',',$GLOBALS['config']['app']['vod_extend_version']);
  }
  if(!empty($obj['type_extend']['state'])) {
    $stateArray=explode(',',$obj['type_extend']['state']);
  }elseif(!empty($obj['parent']['type_extend']['state'])){
    $stateArray=explode(',',$obj['parent']['type_extend']['state']);
  }else{
    $stateArray=explode(',',$GLOBALS['config']['app']['vod_extend_state']);
  }
  $letterArray=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z');
  if(!empty($obj['childids'])){
    $parent_obj=$obj;
  }elseif(!empty($obj['parent'])){
    $parent_obj=$obj['parent'];
  }
 ?>
<!DOCTYPE html>
<html>
<head>
<!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php if($maccms['aid']==1 || $maccms['aid']==10): ?>
<!--首页 index/index 及 vod/index -->
<title><?php if(!empty($maccms['seo']['vod']['name'])): ?><?php echo $maccms['seo']['vod']['name']; ?> - <?php endif; ?><?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($maccms['seo']['vod']['key'])): ?><?php echo $maccms['seo']['vod']['key']; else: ?><?php echo $maccms['site_keywords']; endif; ?>" />
<meta name="description" content="<?php if(!empty($maccms['seo']['vod']['des'])): ?><?php echo $maccms['seo']['vod']['des']; else: ?><?php echo $maccms['site_description']; endif; ?>"/>
<?php elseif($maccms['aid']==11): ?>
<!--视频分类页 vod/type -->
<title><?php if(!empty($obj['type_title'])): ?><?php echo $obj['type_title']; else: ?><?php echo $obj['type_name']; endif; ?> - 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($obj['type_key'])): ?><?php echo $obj['type_key']; else: ?><?php echo $obj['type_name']; ?>,好看的<?php echo $obj['type_name']; ?>,<?php echo $obj['type_name']; ?>排行榜,最新<?php echo $obj['type_name']; endif; ?>" />
<meta name="description" content="<?php if(!empty($obj['type_des'])): ?><?php echo $obj['type_des']; else: ?><?php echo $obj['type_name']; ?>栏目收集整理最新好看的<?php echo $obj['type_name']; ?>大全，提供<?php echo $obj['type_name']; ?>排行榜推荐，为网友提供高画质的<?php echo $obj['type_name']; endif; ?>" />
<?php elseif($maccms['aid']==12): ?>
<!--视频筛选页 vod/show -->
<title><?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo $param['lang']; if(!empty($param['letter'])): ?>首字母<?php echo $param['letter']; endif; ?><?php echo $param['version']; ?><?php echo $param['class']; ?><?php echo $obj['type_name']; ?><?php echo $param['state']; if($param['by']=='hits'): ?>排行榜<?php endif; ?> - 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($obj['type_key'])): ?><?php echo $obj['type_key']; else: ?><?php echo $obj['type_name']; ?>,好看的<?php echo $obj['type_name']; ?>,<?php echo $obj['type_name']; ?>排行榜,最新<?php echo $obj['type_name']; endif; ?>" />
<meta name="description" content="<?php if(!empty($obj['type_des'])): ?><?php echo $obj['type_des']; else: ?><?php echo $obj['type_name']; ?>栏目收集整理最新好看的<?php echo $obj['type_name']; ?>大全，提供<?php echo $obj['type_name']; ?>排行榜推荐，为网友提供高画质的<?php echo $obj['type_name']; endif; ?>" />
<?php elseif($maccms['aid']==13): ?>
<!--视频搜索页 vod/search -->
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?> - 影视搜索 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?>">
<meta name="description" content="<?php echo $maccms['site_description']; ?>">
<?php elseif($maccms['aid']==14): ?>
<!--视频详情页 vod/detail -->
<title>《<?php echo $obj['vod_name']; ?>》高清在线观看<?php if(!empty($obj['vod_down_list'])): ?> - 《<?php echo $obj['vod_name']; ?>》高清下载<?php endif; ?> - <?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>,<?php echo $obj['vod_name']; ?>在线观看,<?php echo $obj['vod_name']; ?>高清在线观看,<?php echo $obj['vod_name']; ?>手机观看<?php if(!empty($obj['vod_down_list'])): ?>,<?php echo $obj['vod_name']; ?>高清下载<?php endif; ?>,<?php echo $obj['type']['type_name']; ?>"/>
<meta name="description" content="《<?php echo $obj['vod_name']; ?>》讲述的是：<?php echo mac_substring(mac_filter_html($obj['vod_content']),140); ?>"/>
<?php elseif($maccms['aid']==15): ?>
<!--视频播放页 vod/play -->
<title>《<?php echo $obj['vod_name']; ?>》 <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 正在播放 - <?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>,<?php echo $obj['vod_name']; ?>在线观看,<?php echo $obj['type']['type_name']; ?>"/>
<meta name="description" content="《<?php echo $obj['vod_name']; ?>》讲述的是：<?php echo mac_substring(mac_filter_html($obj['vod_content']),140); ?>"/>
<?php elseif($maccms['aid']==16): ?>
<!--视频下载页 vod/down -->
<title>《<?php echo $obj['vod_name']; ?>》 <?php echo $obj['vod_down_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>高清下载 - <?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>,<?php echo $obj['vod_name']; ?>高清,<?php echo $obj['type']['type_name']; ?>"/>
<meta name="description" content="《<?php echo $obj['vod_name']; ?>》讲述的是：<?php echo mac_substring(mac_filter_html($obj['vod_content']),140); ?>"/>
<?php elseif($maccms['aid']==17): ?>
<!--视频角色页 vod/role -->
<title>《<?php echo $obj['vod_name']; ?>》角色 - 《<?php echo $obj['vod_name']; ?>》演员表 - <?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>角色,<?php echo $obj['vod_name']; ?>演员表"/>
<meta name="description" content="《<?php echo $obj['vod_name']; ?>》讲述的是：<?php echo mac_substring(mac_filter_html($obj['vod_content']),140); ?>"/>
<?php elseif($maccms['aid']==20): ?>
<!--文章首页 art/index -->
<title><?php if(!empty($maccms['seo']['art']['name'])): ?><?php echo $maccms['seo']['art']['name']; else: ?>文章首页<?php endif; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($maccms['seo']['art']['key'])): ?><?php echo $maccms['seo']['art']['key']; else: ?><?php echo $maccms['site_keywords']; endif; ?>" />
<meta name="description" content="<?php if(!empty($maccms['seo']['art']['des'])): ?><?php echo $maccms['seo']['art']['des']; else: ?><?php echo $maccms['site_description']; endif; ?>" />
<?php elseif($maccms['aid']==21): ?>
<!--文章分类页 art/type -->
<title><?php if(!empty($obj['type_title'])): ?><?php echo $obj['type_title']; else: ?><?php echo $obj['type_name']; endif; ?> - 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($obj['type_key'])): ?><?php echo $obj['type_key']; else: ?><?php echo $obj['type_name']; ?>,好看的<?php echo $obj['type_name']; ?>,<?php echo $obj['type_name']; ?>排行榜,最新<?php echo $obj['type_name']; endif; ?>" />
<meta name="description" content="<?php if(!empty($obj['type_des'])): ?><?php echo $obj['type_des']; else: ?><?php echo $obj['type_name']; ?>栏目收集整理最新好看的<?php echo $obj['type_name']; ?>大全，提供<?php echo $obj['type_name']; ?>排行榜推荐<?php endif; ?>" />
<?php elseif($maccms['aid']==22): ?>
<!--文章筛选页 art/show -->
<title><?php if(!empty($obj['type_title'])): ?><?php echo $obj['type_title']; else: ?><?php echo $obj['type_name']; endif; ?> - 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($obj['type_key'])): ?><?php echo $obj['type_key']; else: ?><?php echo $obj['type_name']; ?>,好看的<?php echo $obj['type_name']; ?>,<?php echo $obj['type_name']; ?>排行榜,最新<?php echo $obj['type_name']; endif; ?>" />
<meta name="description" content="<?php if(!empty($obj['type_des'])): ?><?php echo $obj['type_des']; else: ?><?php echo $obj['type_name']; ?>栏目收集整理最新好看的<?php echo $obj['type_name']; ?>大全，提供<?php echo $obj['type_name']; ?>排行榜推荐<?php endif; ?>" />
<?php elseif($maccms['aid']==23): ?>
<!--文章搜索页 art/search -->
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?> - 文章搜索 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?>">
<meta name="description" content="<?php echo $maccms['site_description']; ?>">
<?php elseif($maccms['aid']==24): ?>
<!--文章详情页 art/detail -->
<title><?php if(!empty($obj['art_page_list'][$param['page']]['title'])): ?><?php echo $obj['art_page_list'][$param['page']]['title']; ?> - <?php endif; ?><?php echo $obj['art_name']; if($__PAGING__['page_total'] > 1): ?> - 第<?php echo $param['page']; ?>页<?php endif; ?> - <?php echo $obj['type']['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['art_tag']; ?>,<?php echo $obj['art_name']; ?>">
<meta name="description" content="<?php if(!empty($obj['art_page_list'][$param['page']]['note'])): ?><?php echo $obj['art_page_list'][$param['page']]['note']; ?>,<?php endif; ?><?php echo $obj['art_blurb']; ?>">
<?php elseif($maccms['aid']==30): ?>
<!--专题列表页 topic/index -->
<title><?php if(!empty($maccms['seo']['topic']['name'])): ?><?php echo $maccms['seo']['topic']['name']; else: ?>专题频道 - 第<?php echo $param['page']; ?>页<?php endif; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($maccms['seo']['topic']['key'])): ?><?php echo $maccms['seo']['topic']['key']; else: ?><?php echo $maccms['site_keywords']; endif; ?>" />
<meta name="description" content="<?php if(!empty($maccms['seo']['topic']['des'])): ?><?php echo $maccms['seo']['topic']['des']; else: ?><?php echo $maccms['site_description']; endif; ?>" />
<?php elseif($maccms['aid']==34): ?>
<!--专题详情页 topic/detail -->
<title><?php echo $obj['topic_name']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['topic_name']; ?>"/>
<meta name="description" content="<?php echo mac_substring(mac_filter_html($obj['topic_content']),140); ?>"/>
<?php elseif($maccms['aid']==80): ?>
<!--演员首页 actor/index -->
<title><?php if(!empty($maccms['seo']['actor']['name'])): ?><?php echo $maccms['seo']['actor']['name']; else: ?>明星库<?php endif; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($maccms['seo']['actor']['key'])): ?><?php echo $maccms['seo']['actor']['key']; else: ?><?php echo $maccms['site_keywords']; endif; ?>" />
<meta name="description" content="<?php if(!empty($maccms['seo']['actor']['des'])): ?><?php echo $maccms['seo']['actor']['des']; else: ?><?php echo $maccms['site_description']; endif; ?>" />
<?php elseif($maccms['aid']==81): ?>
<!--演员分类页 actor/type -->
<title><?php if(!empty($obj['type_title'])): ?><?php echo $obj['type_title']; else: ?><?php echo $obj['type_name']; endif; ?> - 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($obj['type_key'])): ?><?php echo $obj['type_key']; else: ?><?php echo $obj['type_name']; ?>,<?php echo $obj['type_name']; ?>排行榜,最新<?php echo $obj['type_name']; endif; ?>" />
<meta name="description" content="<?php if(!empty($obj['type_des'])): ?><?php echo $obj['type_des']; else: ?><?php echo $obj['type_name']; ?>栏目收集整理最新<?php echo $obj['type_name']; ?>大全，提供<?php echo $obj['type_name']; ?>排行榜推荐<?php endif; ?>" />
<?php elseif($maccms['aid']==82): ?>
<!--演员筛选页 actor/show -->
<title><?php echo $param['sex']; ?><?php echo $param['area']; ?><?php echo $param['blood']; if(!empty($param['letter'])): ?>首字母<?php echo $param['letter']; endif; ?><?php echo $param['class']; ?><?php echo $obj['type_name']; if($param['by']=='hits'): ?>排行榜<?php endif; ?> - 第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($obj['type_key'])): ?><?php echo $obj['type_key']; else: ?><?php echo $obj['type_name']; ?>,<?php echo $obj['type_name']; ?>排行榜,最新<?php echo $obj['type_name']; endif; ?>" />
<meta name="description" content="<?php if(!empty($obj['type_des'])): ?><?php echo $obj['type_des']; else: ?><?php echo $obj['type_name']; ?>栏目收集整理<?php echo $obj['type_name']; ?>大全，提供<?php echo $obj['type_name']; ?>排行榜推荐<?php endif; ?>" />
<?php elseif($maccms['aid']==83): ?>
<!--演员搜索页 actor/search -->
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?> - 演员搜索 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?>">
<meta name="description" content="<?php echo $maccms['site_description']; ?>">
<?php elseif($maccms['aid']==84): ?>
<!--演员详情页 actor/detail -->
<title><?php echo $obj['actor_name']; ?>个人资料 - <?php echo $obj['actor_name']; ?>演过的电视剧 - <?php echo $obj['actor_name']; ?>电影全集 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['actor_name']; ?>个人资料,<?php echo $obj['actor_name']; ?>演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,<?php echo $obj['actor_name']; ?>最新电影,<?php echo $obj['actor_name']; ?>最新电视剧">
<meta name="description" content="<?php echo $maccms['site_name']; ?>为你收集了<?php echo $obj['actor_name']; ?>个人资料包括了<?php echo $obj['actor_name']; ?>最新演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,以及<?php echo $obj['actor_name']; ?>图片剧照最近动态等信息希望你能喜欢。">
<?php elseif($maccms['aid']==90): ?>
<!--角色首页 role/index -->
<title><?php if(!empty($maccms['seo']['role']['name'])): ?><?php echo $maccms['seo']['role']['name']; else: ?>角色库<?php endif; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if(!empty($maccms['seo']['role']['key'])): ?><?php echo $maccms['seo']['role']['key']; else: ?><?php echo $maccms['site_keywords']; endif; ?>" />
<meta name="description" content="<?php if(!empty($maccms['seo']['role']['des'])): ?><?php echo $maccms['seo']['role']['des']; else: ?><?php echo $maccms['site_description']; endif; ?>" />
<?php elseif($maccms['aid']==93): ?>
<!--角色搜索页 role/search -->
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?> - 角色搜索 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?>">
<meta name="description" content="<?php echo $maccms['site_description']; ?>">
<?php elseif($maccms['aid']==94): ?>
<!--角色详情页 role/detail -->
<title>《<?php echo $obj['data']['vod_name']; ?>》角色 <?php echo $obj['role_name']; ?>资料 - <?php echo $obj['role_name']; ?>饰演者<?php echo $obj['role_actor']; ?>参演影视剧 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="《<?php echo $obj['data']['vod_name']; ?>》角色 <?php echo $obj['role_name']; ?>资料,<?php echo $obj['role_name']; ?>饰演者<?php echo $obj['role_actor']; ?>参演影视剧">
<meta name="description" content="<?php echo $maccms['site_name']; ?>为你收集了《<?php echo $obj['data']['vod_name']; ?>》角色 <?php echo $obj['role_name']; ?>资料,以及<?php echo $obj['role_name']; ?>饰演者<?php echo $obj['role_actor']; ?>的资料及参演影视剧">
<?php elseif($maccms['aid']==100): ?>
<!--剧情首页 plot/index -->
<title>影视剧情介绍-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="影视剧情,影视剧情介绍">
<meta name="description" content="<?php echo $maccms['site_name']; ?>为您提供最新影视剧情,影视分集剧情介绍,让您可以随时了解最新影视剧透。">
<?php elseif($maccms['aid']==103): ?>
<!--剧情搜索页 plot/search -->
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?> - 剧情搜索 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?>">
<meta name="description" content="<?php echo $maccms['site_description']; ?>">
<?php elseif($maccms['aid']==104): ?>
<!--剧情详情页 plot/detail -->
<title><?php echo $obj['vod_name']; ?>分集剧情介绍-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>剧情介绍,<?php echo $obj['vod_name']; ?>分集剧情介绍" />
<meta name="description" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_plot_list'][$param['page']]['name']; ?>分集剧情介绍：<?php echo mac_substring(mac_filter_html($obj['vod_plot_list'][$param['page']]['detail']),100); ?>" />
<?php elseif($maccms['aid']==2): ?>
<!--网站地图 map/index -->
<title>网站地图 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="网站地图,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==4): ?>
<!--留言本 gbook/index -->
<title>问题反馈 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="留言本,问题反馈,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==7 && $label_name=='new'): ?>
<!--最新更新页 label/new -->
<title>最新更新的100个电视剧、电影、动漫、综艺节目 视频 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="最新更新,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==7 && $label_name=='ranking'): ?>
<!--排行榜页 label/ranking-->
<title>全站排行榜 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="全站排行榜,热播榜,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==7 && $label_name=='flink'): ?>
<!--友情链接页 label/flink -->
<title>友情链接 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="友情链接,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==7 && $label_name=='help_xunlei'): ?>
<!--迅雷帮助页 label/help_xunlei -->
<title>迅雷下载帮助 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==7 && $label_name=='help_baidu'): ?>
<!--百度网盘帮助页 label/help_baidu -->
<title>百度网盘下载帮助 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php endif; ?>
<!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php $tpl_version=20230223; ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="applicable-device" content="pc,mobile">
<link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>images/favicon.ico"/>
<script type="text/javascript">
var maccms={"path":"/maccms102","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};
var ewave_config={"path_tpl":"<?php echo $maccms['path_tpl']; ?>","debug":0,"sticky":0,"autocomplete":0,"theme":1,"banner_text":0};
</script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery.min.js?v=<?php echo $tpl_version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/ewave-plugins.js?v=<?php echo $tpl_version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/ewave-global.js?v=<?php echo $tpl_version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/home.js?v=<?php echo $tpl_version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/ewave-common.js?v=<?php echo $tpl_version; ?>"></script>
<script>if (localStorage.theme){ document.documentElement.setAttribute("data-theme", localStorage.theme);}else{document.documentElement.setAttribute("data-theme", ewave_config.theme);}</script>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/ewave-plugins.css?v=<?php echo $tpl_version; ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/ewave-ui.css?v=<?php echo $tpl_version; ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/ewave-style.css?v=<?php echo $tpl_version; ?>">
</head>
<body>
<div class="header head-wrapper">
  <div class="ewave-banner-box float-top clearfix hidden-lg hidden-xl hidden-xxl ewave-remove-box">
    <div class="ewave-banner-wrapper ewave-remove-list" id="float-top"></div>
    <a class="ewave-banner-close"><i class="fa fa-close"></i></a>
<!--    <script src="<?php echo $maccms['path_ads']; ?>float_top.js"></script>-->
  </div>
  <div class="container">
    <div class="a1 clearfix">
      <a class="logo" href="<?php echo $maccms['path']; ?>"<?php if(!empty($maccms['site_logo'])): ?> style="background-image:url(<?php echo mac_url_img($maccms['site_logo']); ?>);"<?php endif; ?>></a>
      <div class="nav">
        <div class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper">
        <a class="swiper-slide<?php if($maccms['aid']==1): ?> active<?php endif; ?>" href="<?php echo $maccms['path']; ?>">首页</a>
        <?php $__TAG__ = '{"ids":"parent","num":"10","flag":"vod","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a class="swiper-slide<?php if($GLOBALS['type_id']==$vo['type_id']||$GLOBALS['type_pid']==$vo['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"parent","num":"10","flag":"art","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a class="swiper-slide<?php if($GLOBALS['type_id']==$vo['type_id']||$GLOBALS['type_pid']==$vo['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"parent","num":"10","mid":"8","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a class="swiper-slide<?php if($GLOBALS['type_id']==$vo['type_id']||$GLOBALS['type_pid']==$vo['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; if(mac_data_count(0,'all','topic') > 0): ?>
        <a class="swiper-slide<?php if($maccms['mid']==3): ?> active<?php endif; ?>" href="<?php echo mac_url_topic_index(); ?>">影视专题</a>
        <?php endif; ?>
<!--        <a class="swiper-slide<?php if($label_name=='new'): ?> active<?php endif; ?>" href="<?php echo mac_url('label/new'); ?>" title="最近更新">最近更新</a>-->
        <a class="swiper-slide<?php if($label_name=='ranking'): ?> active<?php endif; ?>" href="<?php echo mac_url('label/ranking'); ?>" title="排行榜">排行榜</a>
        <?php if($GLOBALS['config']['gbook']['status']==1): ?>
        <a class="swiper-slide<?php if($maccms['mid']==5): ?> active<?php endif; ?>" href="<?php echo mac_url('gbook/index'); ?>">留言报错</a>
        <?php endif; ?>
        </div>
        </div>
      </div>
    </div>
    <div class="a3">
      <div class="item nav-m">
        <a class="ewave-offcanvas" href="javascript:;" data-target="#nav-m-box"><i class="fa fa-sliders"></i><span>导航</span></a>
        <div class="nav-m-box ewave-offcanvas-content" id="nav-m-box">
          <ul class="nav-m-wrapper">
            <li><a <?php if($maccms['aid']==1): ?> class="active"<?php endif; ?> href="<?php echo $maccms['path']; ?>">首页</a></li>
            <?php $__TAG__ = '{"ids":"parent","flag":"vod","by":"sort","order":"asc","id":"type","key":"key_type"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key_type = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($key_type % 2 );++$key_type;if(!empty($type['childids'])): ?>
            <li class="ewave-collapse<?php if($GLOBALS['type_id']==$type['type_id']||$GLOBALS['type_pid']==$type['type_id']): ?> active<?php endif; ?>">
              <a class="ewave-collapse-toggle<?php if($GLOBALS['type_id']==$type['type_id']): ?> active<?php endif; ?>" href="javascript:;"><?php echo $type['type_name']; ?></a>
              <div class="ewave-collapse-content<?php if($GLOBALS['type_id']==$type['type_id']||$GLOBALS['type_pid']==$type['type_id']): ?> active<?php endif; ?>">
                <?php $__TAG__ = '{"ids":"child","flag":"vod","parent":"'.$type['type_id'].'","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <a <?php if($GLOBALS['type_id']==$vo['type_id']): ?> class="active"<?php endif; ?> href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </li>
            <?php else: ?>
            <li><a <?php if($GLOBALS['type_id']==$type['type_id']): ?> class="active"<?php endif; ?> href="<?php echo mac_url_type($type); ?>"><?php echo $type['type_name']; ?></a></li>
            <?php endif; endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"parent","flag":"art","by":"sort","order":"asc","id":"type","key":"key_type"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key_type = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($key_type % 2 );++$key_type;if(!empty($type['childids'])): ?>
            <li class="ewave-collapse<?php if($GLOBALS['type_id']==$type['type_id']||$GLOBALS['type_pid']==$type['type_id']): ?> active<?php endif; ?>">
              <a class="ewave-collapse-toggle<?php if($GLOBALS['type_id']==$type['type_id']): ?> active<?php endif; ?>" href="javascript:;"><?php echo $type['type_name']; ?></a>
              <div class="ewave-collapse-content<?php if($GLOBALS['type_id']==$type['type_id']||$GLOBALS['type_pid']==$type['type_id']): ?> active<?php endif; ?>">
                <?php $__TAG__ = '{"ids":"child","flag":"art","parent":"'.$type['type_id'].'","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <a <?php if($GLOBALS['type_id']==$vo['type_id']): ?> class="active"<?php endif; ?> href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </li>
            <?php else: ?>
            <li><a <?php if($GLOBALS['type_id']==$type['type_id']): ?> class="active"<?php endif; ?> href="<?php echo mac_url_type($type); ?>"><?php echo $type['type_name']; ?></a></li>
            <?php endif; endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"parent","mid":"8","by":"sort","order":"asc","id":"type","key":"key_type"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key_type = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($key_type % 2 );++$key_type;if(!empty($type['childids'])): ?>
            <li class="ewave-collapse<?php if($GLOBALS['type_id']==$type['type_id']||$GLOBALS['type_pid']==$type['type_id']): ?> active<?php endif; ?>">
              <a class="ewave-collapse-toggle<?php if($GLOBALS['type_id']==$type['type_id']): ?> active<?php endif; ?>" href="javascript:;"><?php echo $type['type_name']; ?></a>
              <div class="ewave-collapse-content<?php if($GLOBALS['type_id']==$type['type_id']||$GLOBALS['type_pid']==$type['type_id']): ?> active<?php endif; ?>">
                <?php $__TAG__ = '{"ids":"child","mid":"8","parent":"'.$type['type_id'].'","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <a <?php if($GLOBALS['type_id']==$vo['type_id']): ?> class="active"<?php endif; ?> href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </li>
            <?php else: ?>
            <li><a <?php if($GLOBALS['type_id']==$type['type_id']): ?> class="active"<?php endif; ?> href="<?php echo mac_url_type($type); ?>"><?php echo $type['type_name']; ?></a></li>
            <?php endif; endforeach; endif; else: echo "" ;endif; if(mac_data_count(0,'all','topic') > 0): ?>
            <li><a <?php if($maccms['mid']==3): ?> class="active"<?php endif; ?> href="<?php echo mac_url_topic_index(); ?>">影视专题</a></li>
            <?php endif; ?>
            <li><a <?php if($label_name=='new'): ?> class="active"<?php endif; ?> href="<?php echo mac_url('label/new'); ?>" title="最近更新">最近更新</a></li>
            <li><a <?php if($label_name=='ranking'): ?> class="active"<?php endif; ?> href="<?php echo mac_url('label/ranking'); ?>" title="排行榜">排行榜</a></li>
            <?php if($GLOBALS['config']['gbook']['status']==1): ?>
            <li><a <?php if($maccms['mid']==5): ?> class="active"<?php endif; ?> href="<?php echo mac_url('gbook/index'); ?>">留言报错</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="ewave-offcanvas-modal"></div>
      </div>
      <div class="item js-search">
        <a href="javascript:;"><i class="fa fa-search"></i><span>搜索</span></a>
      </div>
      <div class="item js-history ewave-history"></div>
      <?php if($GLOBALS['config']['user']['status']==1): ?>
      <div class="item js-user ewave-user"></div>
      <?php endif; ?>
      <div class="item skin-switch">
        <a class="light" href="javascript:;" title="切换至亮色模式"><i class="fa fa-sun-o"></i><span>换肤</span></a>
        <a class="dark" href="javascript:;" title="切换至暗色模式"><i class="fa fa-moon-o"></i><span>换肤</span></a>
      </div>
    </div>
    <form class="a2 search" action="<?php if($maccms['mid']==2): ?><?php echo mac_url('art/search'); elseif($maccms['mid']==8): ?><?php echo mac_url('actor/search'); else: ?><?php echo mac_url('vod/search'); endif; ?>">
      <div class="input clearfix">
        <div class="ewave-dropdown ewave-click-dropdown ewave-search-dropdown"> <span class="ewave-search-dropdown-text"><?php if($maccms['mid']==2): ?>文章<?php elseif($maccms['mid']==8): ?>明星<?php else: ?>视频<?php endif; ?></span>&nbsp;<i class="fa fa-caret-down"></i>
          <div class="ewave-dropdown-box">
            <ul>
              <li data-action="<?php echo mac_url('vod/search'); ?>"><a href="javascript:;">视频</a></li>
              <li data-action="<?php echo mac_url('art/search'); ?>"><a href="javascript:;">文章</a></li>
              <li data-action="<?php echo mac_url('actor/search'); ?>"><a href="javascript:;">明星</a></li>
            </ul>
          </div>
        </div>
        <input type="text" class="jheader-search-input search-key" placeholder="请输入影片名称" name="wd" autocomplete="off" required<?php if($maccms['aid']==13||$maccms['aid']==23||$maccms['aid']==83): ?> value="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?><?php echo $param['tag']; ?>"<?php endif; ?>>
        <a href="<?php echo mac_url('label/ranking'); ?>" class="hot"><i class="fa fa-fire"></i>排行榜</a> <button type="submit" class="btn search-btn"><i class="fa fa-search"></i></button>
        <?php if($maccms['mid']!=2 && $maccms['mid']!=8): ?>
        <div class="hot-list">
          <div class="hot-search-list">
            <h5 class="title">热门搜索</h5>
            <?php $__TAG__ = '{"num":"10","by":"hits_week","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> <a href="<?php echo mac_url_vod_detail($vo); ?>" class="hot-item"><span class="order n<?php echo $key-1; ?>"><?php echo $key; ?></span><span class="hot-word"><?php echo $vo['vod_name']; ?></span></a> <?php endforeach; endif; else: echo "" ;endif; ?> </div>
        </div>
        <?php endif; ?>
      </div>
    </form>
  </div>
  <div class="search-placeholder"></div>
</div>
<div class="head-placeholder gap"></div>
<?php if($maccms['aid']!=1 && !($maccms['aid']==11 && !empty($obj['childids']))): ?>
<div class="container gap">
  <div class="banner-layout-box ewave-banner-box ewave-remove-box">
    <div class="ewave-banner-wrapper ewave-remove-list" id="banner-top"></div>
    <script src="<?php echo $maccms['path_ads']; ?>banner_top.js"></script>
  </div>
</div>
<?php endif; if($maccms['aid']==11 && !empty($obj['childids'])): ?>
<div class="banner gap">
  <div class="banner-box">
    <div class="banner-pic ewave-swiper ewave-swiper-image" data-effect="fade" data-pagination=".nav-name" data-pagination-class="name" data-pagination-active-class="active" data-loop="false">
      <div class="swiper-wrapper">
      <?php $__TAG__ = '{"level":"9","type":"current","num":"6","by":"time","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a class="swiper-slide swiper-lazy" href="<?php echo mac_url_vod_detail($vo); ?>" data-background="<?php if(!empty($vo['vod_pic_slide'])): ?><?php echo mac_url_img($vo['vod_pic_slide']); else: ?><?php echo mac_url_img($vo['vod_pic']); endif; ?>" title="<?php echo $vo['vod_name']; ?><?php echo $key; ?>">
        <div class="swiper-lazy-preloader"></div>
        <div class="common_shade top_shade"></div>
        <div class="common_shade bottom_shade"></div>
        <div class="common_shade left_shade"></div>
        <div class="common_shade right_shade"></div>
        <div class="swiper-pagination-html hide"><h3><?php echo $vo['vod_name']; ?></h3><p><!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php if(($vo['type']['type_id'] == 1) || ($vo['type_id_1'] == 1)): ?><?php echo (isset($vo['vod_remarks']) && ($vo['vod_remarks'] !== '')?$vo['vod_remarks']:'高清'); elseif(!empty($vo['vod_remarks'])): ?><?php echo $vo['vod_remarks']; elseif(!empty($vo['vod_serial'])): ?>更新至第<?php echo $vo['vod_serial']; ?>集<?php else: ?>全集<?php endif; ?></p></div>
      </a>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="nav-name"></div>
    </div>
  </div>
  <div class="type-box hidden-xs hidden-sm hidden-md">
    <div class="container">
      <div class="row">
    <div class="type t1 col-xs-2 hidden-lg">
      <h3>片库<a href="<?php echo mac_url_type($obj,[],show); ?>">全部<i class="fa fa-angle-right"></i></a></h3>
      <ul>
        <li><a href="<?php echo mac_url_type($obj,['by'=>'hits'],show); ?>">最多播放</a></li>
        <li><a href="<?php echo mac_url_type($obj,['by'=>'score'],show); ?>">最好评</a></li>
        <li><a href="<?php echo mac_url_type($obj,[],show); ?>">最近更新</a></li>
        <li><a href="<?php echo mac_url_type($obj,[],show); ?>">最近上映</a></li>
      </ul>
    </div>
    <div class="type col-lg-4 col-xl-3">
      <h3>语言<a href="<?php echo mac_url_type($obj,[],show); ?>">全部<i class="fa fa-angle-right"></i></a></h3>
      <ul>
        <?php if(is_array($langArray) || $langArray instanceof \think\Collection || $langArray instanceof \think\Paginator): if( count($langArray)==0 ) : echo "" ;else: foreach($langArray as $key=>$vo): if($key < 12): ?>
        <li <?php if($key > 9): ?> class="hidden-lg hidden-xl"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['lang'=>$vo],show); ?>"><?php echo $vo; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="type col-lg-4 col-xl-3">
      <h3>地区<a href="<?php echo mac_url_type($obj,[],show); ?>">全部<i class="fa fa-angle-right"></i></a></h3>
      <ul>
        <?php if(is_array($areaArray) || $areaArray instanceof \think\Collection || $areaArray instanceof \think\Paginator): if( count($areaArray)==0 ) : echo "" ;else: foreach($areaArray as $key=>$vo): if($key < 12): ?>
        <li <?php if($key > 9): ?> class="hidden-lg hidden-xl"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$vo],show); ?>"><?php echo $vo; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="type col-lg-4">
      <h3>年份<a href="<?php echo mac_url_type($obj,[],show); ?>">全部<i class="fa fa-angle-right"></i></a></h3>
      <ul>
        <?php if(is_array($yearArray) || $yearArray instanceof \think\Collection || $yearArray instanceof \think\Paginator): if( count($yearArray)==0 ) : echo "" ;else: foreach($yearArray as $key=>$vo): if($key < 12): ?>
        <li <?php if($key > 9): ?> class="hidden-lg hidden-xl"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['year'=>$vo],show); ?>"><?php echo $vo; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
      </div>
    </div>
  </div>
</div>
<div class="gap clearfix"></div>
<div class="container">
  <?php $__TAG__ = '{"ids":"child","flag":"vod","parent":"'.$obj['type_id'].'","by":"sort","order":"asc","id":"type","key":"key_type"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key_type = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($key_type % 2 );++$key_type;?>
  <div class="layout-box clearfix gap">
    <div class="vod-list-tv row">
      <div class="col-xs-12 col-xl-9">
        <h2><a class="pull-left" href="<?php echo mac_url_type($type,[],show); ?>"><?php echo $type['type_name']; ?></a>
          <div class="type"><a href="<?php echo mac_url_type($type,[],show); ?>">更多></a></div>
        </h2>
        <div class="vlist">
          <ul class="row">
            <?php $__TAG__ = '{"num":"10","type":"'.$type['type_id'].'","by":"time","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="col-xs-4 col-md-3<?php if($key==1||$key==6): ?> col-lg-4 one<?php else: ?> col-lg-2<?php endif; if($key > 6): ?> hidden-xs hidden-sm<?php endif; if($key > 8): ?> hidden-md<?php endif; ?>"> 
              <?php if($key==1||$key==6): $big_item=1; endif; ?>
              <!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<div class="pic"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
          <div class="img-wrapper lazyload img-wrapper-pic" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" data-background="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
          <?php if($big_item==1): ?>
          <div class="img-wrapper lazyload img-wrapper-slide hidden-xs hidden-sm hidden-md" data-original="<?php if(!empty($vo['vod_pic_slide'])): ?><?php echo mac_url_img($vo['vod_pic_slide']); else: ?><?php echo mac_url_img($vo['vod_pic']); endif; ?>"></div>
          <?php endif; ?>
          </a></div>
          <div class="name">
            <h3><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" <?php if(!empty($vo['vod_color'])): ?> style="color:#<?php echo $vo['vod_color']; ?>;"<?php endif; ?>><?php echo $vo['vod_name']; ?></a></h3>
            <p class="item-status text-overflow"><!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php if(($vo['type']['type_id'] == 1) || ($vo['type_id_1'] == 1)): ?><?php echo (isset($vo['vod_remarks']) && ($vo['vod_remarks'] !== '')?$vo['vod_remarks']:'高清'); elseif(!empty($vo['vod_remarks'])): ?><?php echo $vo['vod_remarks']; elseif(!empty($vo['vod_serial'])): ?>更新至第<?php echo $vo['vod_serial']; ?>集<?php else: ?>全集<?php endif; ?></p>
            <?php if($big_item==1): ?>
            <p class="item-blurb text-row-2 hide hidden-xs hidden-sm"><?php echo $vo['vod_blurb']; ?></p>
            <?php endif; ?>
          </div> 
            </li>
            <?php $big_item=0; endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
      <div class="hidden-xs hidden-sm hidden-md hidden-lg col-xl-3">
        <div class="index-ranking">
          <h2><a class="pull-left" href="<?php echo mac_url('label/ranking'); ?>"><?php echo $type['type_name']; ?>热播榜</a> </h2>
        </div>
        <ul class="ranking-list">
          <?php $__TAG__ = '{"num":"7","type":"'.$type['type_id'].'","by":"hits","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li class="ranking-item<?php if($key > 6): ?> hidden-xl<?php endif; ?>"><!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<a class="text-overflow" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
          <div class="ranking-item-left"><span class="ranking-item-icon">NO</span> <span class="ranking-item-num"><?php echo $key; ?></span>
            <div class="ranking-item-cover">
              <div class="img-wrapper lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
            </div>
          </div>
          <div class="ranking-item-hits hidden-lg hidden-xl"><i class="fa fa-fire"></i>&nbsp;<?php echo $vo['vod_hits']; ?></div>
          <div class="ranking-item-info">
            <h4 class="text-overflow"<?php if(!empty($vo['vod_color'])): ?> style="color:#<?php echo $vo['vod_color']; ?>;"<?php endif; ?>><?php echo $vo['vod_name']; ?></h4>
            <p class="text-overflow"><!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php if(($vo['type']['type_id'] == 1) || ($vo['type_id_1'] == 1)): ?><?php echo (isset($vo['vod_remarks']) && ($vo['vod_remarks'] !== '')?$vo['vod_remarks']:'高清'); elseif(!empty($vo['vod_remarks'])): ?><?php echo $vo['vod_remarks']; elseif(!empty($vo['vod_serial'])): ?>更新至第<?php echo $vo['vod_serial']; ?>集<?php else: ?>全集<?php endif; ?></p>
          </div>
          </a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php else: ?>
<div class="container" style="margin-top:15px;">
  <div class="layout-box category-box clearfix gap">
    <dl class="clearfix">
      <dt><span>频道</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper">
          <?php $__TAG__ = '{"ids":"parent","flag":"vod","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <a class="swiper-slide<?php if($vo['type_id']==$obj['type_id']||$vo['type_id']==$obj['type_pid']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo,[],show); ?>"><?php echo $vo['type_name']; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </dd>
    </dl>
    <?php if(!empty($parent_obj['type_id'])): ?>
    <dl>
      <dt><span>分类</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper-block">
          <a class="swiper-slide<?php if($parent_obj['type_id']==$obj['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($parent_obj,[],show); ?>">全部</a>
          <?php $__TAG__ = '{"ids":"child","flag":"vod","parent":"'.$parent_obj['type_id'].'","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <a class="swiper-slide<?php if($vo['type_id']==$obj['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo,[],show); ?>"><?php echo $vo['type_name']; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </dd>
    </dl>
    <?php endif; if(!empty($areaArray)): ?>
<!--    <dl class="clearfix">
      <dt><span>地区</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper-block">
          <a class="swiper-slide<?php if(empty($param['area'])): ?> active<?php endif; ?>"  href="<?php echo mac_url_type($obj,['class'=>$param['class'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>">全部</a>
          <?php if(is_array($areaArray) || $areaArray instanceof \think\Collection || $areaArray instanceof \think\Paginator): if( count($areaArray)==0 ) : echo "" ;else: foreach($areaArray as $key=>$vo): ?>
          <a class="swiper-slide<?php if($param['area']==$vo): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$vo,'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>"><?php echo $vo; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </dd>
    </dl>-->
    <?php endif; if(!empty($classArray)): ?>
    <dl class="clearfix">
      <dt><span>剧情</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper-block">
          <a class="swiper-slide<?php if(empty($param['class'])): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>">全部</a>
          <?php if(is_array($classArray) || $classArray instanceof \think\Collection || $classArray instanceof \think\Paginator): if( count($classArray)==0 ) : echo "" ;else: foreach($classArray as $key=>$vo): ?>
          <a class="swiper-slide<?php if($param['class']==$vo): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$vo,'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>"><?php echo $vo; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
      </dd>
    </dl>
    <?php endif; if(!empty($langArray)): ?>
<!--    <dl class="clearfix">
      <dt><span>语言</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper-block">
          <a class="swiper-slide<?php if(empty($param['lang'])): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>">全部</a>
          <?php if(is_array($langArray) || $langArray instanceof \think\Collection || $langArray instanceof \think\Paginator): if( count($langArray)==0 ) : echo "" ;else: foreach($langArray as $key=>$vo): ?>
          <a class="swiper-slide<?php if($param['lang']==$vo): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$vo,'year'=>$param['year'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>"><?php echo $vo; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </dd>
    </dl>-->
    <?php endif; if(!empty($yearArray)): ?>
<!--    <dl class="clearfix">
      <dt><span>年份</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper">
          <a class="swiper-slide<?php if(empty($param['year'])): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'letter'=>$param['letter'],'by'=>$param['by']],show); ?>">全部</a>
          <?php if(is_array($yearArray) || $yearArray instanceof \think\Collection || $yearArray instanceof \think\Paginator): if( count($yearArray)==0 ) : echo "" ;else: foreach($yearArray as $key=>$vo): ?>
          <a class="swiper-slide<?php if($param['year']==$vo): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo,'letter'=>$param['letter'],'by'=>$param['by']],show); ?>"><?php echo $vo; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </dd>
    </dl>-->
    <?php endif; if(!empty($letterArray)): ?>
<!--    <dl class="clearfix">
      <dt><span>字母</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper">
          <a class="swiper-slide<?php if(empty($param['letter'])): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'by'=>$param['by']],show); ?>">全部</a>
          <?php if(is_array($letterArray) || $letterArray instanceof \think\Collection || $letterArray instanceof \think\Paginator): if( count($letterArray)==0 ) : echo "" ;else: foreach($letterArray as $key=>$vo): ?>
          <a class="swiper-slide<?php if($param['letter']==$vo): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$vo,'by'=>$param['by']],show); ?>"><?php echo $vo; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </dd>
    </dl>-->
    <?php endif; ?>
    <dl class="clearfix">
      <dt><span>排序</span></dt>
      <dd class="ewave-swiper ewave-swiper-nav">
        <div class="swiper-wrapper">
          <a class="swiper-slide<?php if($param['by']=='time'||empty($param['by'])): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>'time'],show); ?>">最近更新</a>
          <a class="swiper-slide<?php if($param['by']=='hits'): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>'hits'],show); ?>">最多播放</a>
          <a class="swiper-slide<?php if($param['by']=='score'): ?> active<?php endif; ?>" href="<?php echo mac_url_type($obj,['class'=>$param['class'],'area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'letter'=>$param['letter'],'by'=>'score'],show); ?>">最好评</a>
        </div>
      </dd>
    </dl>
  </div>
  <div class="layout-box clearfix gap">
    <div class="vod-list">
      <h2> <span class="pull-left"><?php echo $obj['type_name']; ?></span>
        <div class="type"><span class="small">共<span class="ewave-total">0</span>个视频&nbsp;·&nbsp;第<?php echo $param['page']; ?>页</span></div>
      </h2>
      <ul class="row">
        <?php 
        if($maccms['aid']==11){
        $myPageUrl='vod/type';
        }elseif($maccms['aid']==12){
        $myPageUrl='vod/show';
        }
         $__TAG__ = '{"num":"36","paging":"yes","half":"3","order":"desc","by":"time","pageurl":"'.$myPageUrl.'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="col-xs-4 col-md-3 col-lg-2"> <!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<div class="pic"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
          <div class="img-wrapper lazyload img-wrapper-pic" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" data-background="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
          <?php if($big_item==1): ?>
          <div class="img-wrapper lazyload img-wrapper-slide hidden-xs hidden-sm hidden-md" data-original="<?php if(!empty($vo['vod_pic_slide'])): ?><?php echo mac_url_img($vo['vod_pic_slide']); else: ?><?php echo mac_url_img($vo['vod_pic']); endif; ?>"></div>
          <?php endif; ?>
          </a></div>
          <div class="name">
            <h3><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" <?php if(!empty($vo['vod_color'])): ?> style="color:#<?php echo $vo['vod_color']; ?>;"<?php endif; ?>><?php echo $vo['vod_name']; ?></a></h3>
            <p class="item-status text-overflow"><!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php if(($vo['type']['type_id'] == 1) || ($vo['type_id_1'] == 1)): ?><?php echo (isset($vo['vod_remarks']) && ($vo['vod_remarks'] !== '')?$vo['vod_remarks']:'高清'); elseif(!empty($vo['vod_remarks'])): ?><?php echo $vo['vod_remarks']; elseif(!empty($vo['vod_serial'])): ?>更新至第<?php echo $vo['vod_serial']; ?>集<?php else: ?>全集<?php endif; ?></p>
            <?php if($big_item==1): ?>
            <p class="item-blurb text-row-2 hide hidden-xs hidden-sm"><?php echo $vo['vod_blurb']; ?></p>
            <?php endif; ?>
          </div> </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <!-- /*                    模板馆专业苹果cms模板下载  www.iqmbg.com                          */ -->
<!-- /* 此模板仅限用于学习和研究目的；不得将上述内容用于商业或者非法用途，否则，一切后果请用户自负。 */ -->
<?php if($__PAGING__['record_total'] > 0): ?>
      <ul class="ewave-page text-center clearfix">
        <?php if($__PAGING__['page_current'] > 1): ?>
        <li><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>"><span><i class="fa fa-angle-left"></i></span><span>上一页</span></a></li>
        <?php else: ?>
        <li class="disabled ewave-msg" data-tip="没有上一页啦~"><a href="javascript:;"><span><i class="fa fa-angle-left"></i></span><span>上一页</span></a></li>
        <?php endif; if(($__PAGING__['page_total'] >= 5 && $__PAGING__['page_current'] >= 3)||($__PAGING__['page_total'] >= 4 && $__PAGING__['page_current'] >= 5)): ?>
        <li class="hidden-xs hidden-sm"><a href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>">1</a></li>
        <li class="hidden-xs hidden-sm"><a href="javascript:;">…</a></li>
        <?php endif; if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <li class="hidden-xs hidden-sm active"><a href="javascript:;"><?php echo $num; ?></a></li>
        <?php else: ?>
        <li class="hidden-xs hidden-sm"><a href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>"><?php echo $num; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <li class="hidden-md hidden-lg hidden-xl hidden-xxl active"><span class="num"><?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?></span></li>
        <?php if($__PAGING__['page_current'] <= ($__PAGING__['page_total']-3)): ?>
        <li class="hidden-xs hidden-sm"><a href="javascript:;">…</a></li>
        <li class="hidden-xs hidden-sm"><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>"><?php echo $__PAGING__['page_total']; ?></a></li>
        <?php endif; if($__PAGING__['page_current'] < $__PAGING__['page_total']): ?>
        <li><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>"><span>下一页</span><span><i class="fa fa-angle-right"></i></span></a></li>
        <?php else: ?>
        <li class="disabled ewave-msg" data-tip="没有下一页啦~"><a href="javascript:;"><span>下一页</span><span><i class="fa fa-angle-right"></i></span></a></li>
        <?php endif; ?>
      </ul>
      <script>$(".ewave-total").text(<?php echo $__PAGING__['record_total']; ?>);</script>
      <?php else: ?>
      <div class="ewave-empty"><i class="fa fa-minus-circle"></i>&nbsp;抱歉，未找到相关数据</div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="container">
  <div class="banner-layout-box gap ewave-banner-box ewave-remove-box">
    <div class="ewave-banner-wrapper ewave-remove-list" id="banner-bottom"></div>
    <script src="<?php echo $maccms['path_ads']; ?>banner_bottom.js"></script>
  </div>
</div>
<div class="bottom">
  <div class="container">
    <p class="hidden-xs"> <a href="<?php echo mac_url('label/new'); ?>">最新更新</a> <i>
      |</i> <a href="<?php echo mac_url('map/index'); ?>">网站地图</a> <i>
     <!-- |</i> <a href="<?php echo mac_url('rss/index'); ?>">RSS订阅</a> <i>
      |</i> <a href="<?php echo mac_url('rss/baidu'); ?>">百度蜘蛛</a> <i>
      |</i> <a href="<?php echo mac_url('rss/google'); ?>">谷歌地图</a> <i>|</i> <a href="<?php echo mac_url('rss/bing'); ?>">必应地图</a> <i>
      |</i> <a href="<?php echo mac_url('rss/so'); ?>">360地图</a> <i>|</i> <a href="<?php echo mac_url('rss/sogou'); ?>">搜狗地图</a> <i>
      |</i> <a href="<?php echo mac_url('rss/sm'); ?>">神马爬虫</a> -->
    </p>
    <p>本站所有视频和图片均来自互联网收集而来，版权归原创者所有，本网站只提供web页面服务，并不提供资源存储，也不参与录制</p>
    <p>Copyright © <?php echo date(Y); ?> <?php echo $maccms['site_name']; ?>(<?php echo $maccms['site_url']; ?>) All Rights Reserved</p>
  </div>
  <div class="ewave-banner-box float-bottom clearfix hidden-lg hidden-xl hidden-xxl ewave-remove-box">
    <div class="ewave-banner-wrapper ewave-remove-list" id="float-bottom"></div>
    <a class="ewave-banner-close"><i class="fa fa-close"></i></a>
    <script src="<?php echo $maccms['path_ads']; ?>float_bottom.js"></script>
  </div>
  <div class="bottom-placeholder"></div>
</div>
<div class="fixedbar-fixed-bar">
  <div class="ant-back-top"> <i class="fa fa-angle-up"></i> <span class="fixedbar-top">顶部</span> <a href="javascript:void(0);" class="fixedbar-top-link"></a> </div>
  <div class="type hidden-xs hidden-sm hidden-md">
    <?php $__TAG__ = '{"ids":"parent","flag":"vod","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a href="javascript:void(0);" class="fixedbar-anchor-text" data-id="#index-vod-<?php echo $vo['type_id']; ?>"><?php echo $vo['type_name']; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; if(mac_data_count(0,'all','actor') > 0): ?>
    <a href="javascript:void(0);" class="fixedbar-anchor-text" data-id="#index-actor">明星库</a>
    <?php endif; $__TAG__ = '{"ids":"parent","flag":"art","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a href="javascript:void(0);" class="fixedbar-anchor-text" data-id="#index-art-<?php echo $vo['type_id']; ?>"><?php echo $vo['type_name']; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; if(mac_data_count(0,'all','topic') > 0): ?>
    <a href="javascript:void(0);" class="fixedbar-anchor-text" data-id="#index-topic">精彩专题</a>
    <?php endif; ?>
  </div>
  <div class="skin-switch">
    <a class="light" href="javascript:;" title="切换至亮色模式"><span class="fa fa-sun-o"></span></a>
    <a class="dark" href="javascript:;" title="切换至暗色模式"><span class="fa fa-moon-o"></span></a>
  </div>
</div>
<div style="display:none;"><?php echo $maccms['site_tj']; ?></div>
</body>
</html>