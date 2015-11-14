<?php
session_start();
/**
 * Text Watermark Point:
 *   #1      #2    #3
 *   #4   #5    #6
 *   #7      #8    #9
 */

/**
 * 给图片添加文字水印 可控制位置，旋转，多行文字    **有效字体未验证**
 * @param string $imgurl  图片地址
 * @param array $text   水印文字（多行以'|'分割）
 * @param int $fontSize 字体大小
 * @param type $color 字体颜色  如： 255,255,255
 * @param int $point 水印位置
 * @param type $font 字体
 * @param int $angle 旋转角度  允许值：  0-90   270-360 不含
 * @param string $newimgurl  新图片地址 默认使用后缀命名图片
 * @return boolean 
 */
function createWordsWatermark($imgurl, $text, $fontSize = '20', $color = '0,0,0', $point = '5', $font = 'simsun.ttc', $angle = 0, $newimgurl = '') {

    $imageCreateFunArr = array('image/jpeg' => 'imagecreatefromjpeg', 'image/png' => 'imagecreatefrompng', 'image/gif' => 'imagecreatefromgif');
    $imageOutputFunArr = array('image/jpeg' => 'imagejpeg', 'image/png' => 'imagepng', 'image/gif' => 'imagegif');

//获取图片的mime类型
    $imgsize = getimagesize($imgurl);

    if (empty($imgsize)) {
        return false; //not image
    }

    $imgWidth = $imgsize[0];
    $imgHeight = $imgsize[1];
    $imgMime = $imgsize['mime'];

    if (!isset($imageCreateFunArr[$imgMime])) {
        return false; //do not have create img function
    }
    if (!isset($imageOutputFunArr[$imgMime])) {
        return false; //do not have output img function
    }

    $imageCreateFun = $imageCreateFunArr[$imgMime];
    $imageOutputFun = $imageOutputFunArr[$imgMime];

    $im = $imageCreateFun($imgurl);

    /*
     * 参数判断
     */
    $color = explode(',', $color);
    $text_color = imagecolorallocate($im, intval($color[0]), intval($color[1]), intval($color[2])); //文字水印颜色
    $point = intval($point) > 0 && intval($point) < 10 ? intval($point) : 1; //文字水印所在的位置
    $fontSize = intval($fontSize) > 0 ? intval($fontSize) : 14;
    $angle = ($angle >= 0 && $angle < 90 || $angle > 270 && $angle < 360) ? $angle : 0; //判断输入的angle值有效性 
    $fontUrl = '' . ($font ? $font : 'simsun.ttc'); //有效字体未验证
    $text = explode('|', $text);
    $newimgurl = $newimgurl ? $newimgurl : $imgurl . '_WordsWatermark.jpg'; //新图片地址 统一图片后缀

    /**
     *  根据文字所在图片的位置方向，计算文字的坐标
     * 首先获取文字的宽，高， 写一行文字，超出图片后是不显示的
     */
    $textLength = count($text) - 1;
    $maxtext = 0;
    foreach ($text as $val) {
        $maxtext = strlen($val) > strlen($maxtext) ? $val : $maxtext;
    }
    $textSize = imagettfbbox($fontSize, 0, $fontUrl, $maxtext);
    $textWidth = $textSize[2] - $textSize[1]; //文字的最大宽度
    $textHeight = $textSize[1] - $textSize[7]; //文字的高度
    $lineHeight = $textHeight + 30; //文字的行高
//是否可以添加文字水印 只有图片的可以容纳文字水印时才添加
    if ($textWidth + 40 > $imgWidth || $lineHeight * $textLength + 40 > $imgHeight) {
        return false; //图片太小了，无法添加文字水印
    }

    if ($point == 1) { //左上角
        $porintLeft = 20;
        $pointTop = 20;
    } elseif ($point == 2) { //上中部
        $porintLeft = floor(($imgWidth - $textWidth) / 2+40);
        $pointTop = 120;
    } elseif ($point == 3) { //右上部
        $porintLeft = $imgWidth - $textWidth - 20;
        $pointTop = 20;
    } elseif ($point == 4) { //左中部
        $porintLeft = 20;
        $pointTop = floor(($imgHeight - $textLength * $lineHeight) / 2);
    } elseif ($point == 5) { //正中部
        $porintLeft = floor(($imgWidth - $textWidth) / 2);
        $pointTop = floor(($imgHeight - $textLength * $lineHeight) / 2);
    } elseif ($point == 6) { //右中部
        $porintLeft = $imgWidth - $textWidth - 20;
        $pointTop = floor(($imgHeight - $textLength * $lineHeight) / 2);
    } elseif ($point == 7) { //左下部
        $porintLeft = 20;
        $pointTop = $imgHeight - $textLength * $lineHeight - 20;
    } elseif ($point == 8) { //中下部
        $porintLeft = floor(($imgWidth - $textWidth) / 2);
        $pointTop = $imgHeight - $textLength * $lineHeight - 20;
    } elseif ($point == 9) { //右下部
        $porintLeft = $imgWidth - $textWidth - 20;
        $pointTop = $imgHeight - $textLength * $lineHeight - 20;
    }

//如果有angle旋转角度，则重新设置 top ,left 坐标值
    if ($angle != 0) {
        if ($angle < 90) {
            $diffTop = ceil(sin($angle * M_PI / 180) * $textWidth);

            if (in_array($point, array(1, 2, 3))) {// 上部 top 值增加
                $pointTop += $diffTop;
            } elseif (in_array($point, array(4, 5, 6))) {// 中部 top 值根据图片总高判断
                if ($textWidth > ceil($imgHeight / 2)) {
                    $pointTop += ceil(($textWidth - $imgHeight / 2) / 2);
                }
            }
        } elseif ($angle > 270) {
            $diffTop = ceil(sin((360 - $angle) * M_PI / 180) * $textWidth);

            if (in_array($point, array(7, 8, 9))) {// 上部 top 值增加
                $pointTop -= $diffTop;
            } elseif (in_array($point, array(4, 5, 6))) {// 中部 top 值根据图片总高判断
                if ($textWidth > ceil($imgHeight / 2)) {
                    $pointTop = ceil(($imgHeight - $diffTop) / 2);
                }
            }
        }
    }

    foreach ($text as $key => $val) {
        imagettftext($im, $fontSize, $angle, $porintLeft, $pointTop + $key * $lineHeight, $text_color, $fontUrl, $val);
    }

// 输出图像
    $imageOutputFun($im, $newimgurl, 80);

// 释放内存
    imagedestroy($im);
    return $newimgurl;
}

$title = $_POST["title"];
$stime = $_POST["sTime"];
$etime = $_POST["eTime"];
$address = $_POST["address"];
$count = $_POST["limitCount"];
$end = $_POST["deadline"];
$discrible = $_POST["discrible"];//长度过长需要切割，暂时没做以后再搞
$str = "活动标题：{$title}|活动介绍：{$discrible}|开始时间：{$stime} 结束时间：{$etime}|活动地址：{$address}|截止日期{$end}|人数:{$count}";
$fname = $_SESSION['filename'];
$img = createWordsWatermark($fname, $str, 
    '12', '255,1,1', '5', '', '0', 'image/4.jpg');
//$imgurl, $text, $fontSize='14', $color='0,0,0', $point='1', $font = 'simhei.ttf', $angle=0, $newimgurl=''
/*
$img = createWordsWatermark('image/3.jpg', '讲座题目:Nonlinear microresonators: towards integrated ultrafast optical clocks|讲座人简介:Dr. Chu has been involved in the research and development of optical waveguide devices|and he spent a decade in the US in the commercialization of high-index-contrast planar lightwave circuits|He has over 100 publications and had seminal contributions on both the numerical simulation methods |and the realization of optical waveguide devices. Dr. Chu returned to his birthplace in the fall of 2010 |and joined the City University of Hong Kong as an Associate Professor.   |讲座人:Sai Tak Chu 副教授  City University of Hong Kong|讲座时间：11月6日（星期五）|讲座地点：北大C栋125教室|邀请人: 李倩老师', 
    '12', '255,1,1', '2', '', '0', 'image/4.jpg');*/
?>
<!DOCTYPE html>
<!-- saved from url=(0059)http://localhost/opensns1/index.php?s=/event/index/add.html -->
<html class="screen-desktop-wide device-desktop"><head>
<link href="./添加活动——活动_files/zui.css" rel="stylesheet">

<link href="./添加活动——活动_files/zui-theme.css" rel="stylesheet">
<link href="./添加活动——活动_files/core.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="./添加活动——活动_files/magnific-popup.css">
<!--<script src="/opensns1/Public/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/opensns1/Public/js/com/com.functions.js"></script>

<script type="text/javascript" src="/opensns1/Public/js/core.js"></script>-->
<script src="./添加活动——活动_files/js.php"></script>

    <link href="./添加活动——活动_files/event.css" rel="stylesheet" type="text/css">
    <link href="./添加活动——活动_files/datetimepicker.min.css" rel="stylesheet" type="text/css">

<!--合并前的js-->
<script type="text/javascript">
    var ThinkPHP = window.Think = {
        "ROOT": "/opensns1", //当前网站地址
        "APP": "/opensns1/index.php?s=", //当前项目地址
        "PUBLIC": "/opensns1/Public", //项目公共目录地址
        "DEEP": "/", //PATHINFO分割符
        "MODEL": ["3", "1", "html"],
        "VAR": ["m", "c", "a"],
        'URL_MODEL': "3",
        'WEIBO_ID': ""
    }
    var cookie_config={
        "prefix":"opensns_"
    }
    var Config={
        'GET_INFORMATION':1,
        'GET_INFORMATION_INTERNAL':10*1000
    }

    var weibo_comment_order = "0";
</script>

<!-- Bootstrap库 -->
<!--

&lt;!&ndash; 其他库 &ndash;&gt;
<script src="/opensns1/Public/static/qtip/jquery.qtip.js"></script>
<script type="text/javascript" src="/opensns1/Public/Core/js/ext/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/opensns1/Public/static/jquery.iframe-transport.js"></script>
-->
<!--CNZZ广告管家，可自行更改-->
<!--<script type='text/javascript' src='http://js.adm.cnzz.net/js/abase.js'></script>-->
<!--CNZZ广告管家，可自行更改end-->
<!-- 自定义js -->
<!--<script src="/opensns1/Public/js.php?get=%2Fstatic%2Fbootstrap%2Fjs%2Fbootstrap.min.js"></script>-->


<script>
    //全局内容的定义
    var _ROOT_ = "/opensns1";
    var MID = "1";
    var MODULE_NAME="Event";
    var ACTION_NAME="add";
    var CONTROLLER_NAME ="Index";
    var initNum = "140";
    function adjust_navbar(){
        $('#sub_nav').css('top',$('#nav_bar').height());
        $('#main-container').css('padding-top',$('#nav_bar').height()+$('#sub_nav').height()+20)
    }
</script>

<script src="./添加活动——活动_files/zh-cn.js" type="text/javascript" defer="defer"></script><link href="./添加活动——活动_files/ueditor.css" type="text/css" rel="stylesheet"><script src="./添加活动——活动_files/codemirror.js" type="text/javascript" defer="defer"></script><link rel="stylesheet" type="text/css" href="./添加活动——活动_files/codemirror.css"><script src="./添加活动——活动_files/ZeroClipboard.js" type="text/javascript" defer="defer"></script></head><body><audio id="music" src="" autoplay="autoplay"></audio>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->


    <!-- 头部 -->
    <script src="./添加活动——活动_files/com.talker.class.js"></script>
<div id="talker">

    </div>
<!--[if lt IE 8]>
<div class="alert alert-danger" style="margin-bottom: 0">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a target="_blank"
                                                                                                href="http://browsehappy.com/">更换一个更好的浏览器</a>
    来提升用户体验.</div>
<![endif]-->


<div id="nav_bar" class="nav_bar" style="left: 0px;">

    <div class="container">

        <nav class="" id="nav_bar_container">
            
            <a class="navbar-brand logo" href="http://localhost/opensns1/index.php?s=/home/index/index.html"><img src="./添加活动——活动_files/logo.png"></a>
            <div class="" id="nav_bar_main">

                <ul class="nav navbar-nav navbar-left">
                                                <li class="">
                                <a title="首页" href="http://localhost/opensns1/index.php?s=/home/index/index.html" target="_self"><i class="icon-home app-icon "></i>
                                    <span style="color:#000000">首页</span>
                                    <span class="label label-badge rank-label" title="" style="background: #000000 !important;color:white !important;"></span>
                                </a>
                            </li>                            <li class="">
                                <a title="微博" href="http://localhost/opensns1/index.php?s=/weibo/index/index.html" target="_self"><i class="icon-quote-left app-icon "></i>
                                    <span style="color:#000000">微博</span>
                                    <span class="label label-badge rank-label" title="" style="background: #000000 !important;color:white !important;"></span>
                                </a>
                            </li>                            <li class="">
                                <a title="会员展示" href="http://localhost/opensns1/index.php?s=/people/index/index.html" target="_self"><i class="icon-group app-icon "></i>
                                    <span style="color:#000000">会员展示</span>
                                    <span class="label label-badge rank-label" title="" style="background: #000000 !important;color:white !important;"></span>
                                </a>
                            </li>                            <li class="active">
                                <a title="活动" href="http://localhost/opensns1/index.php?s=/event/index/index.html" target="_self"><i class="icon-map-marker app-icon "></i>
                                    <span style="color:">活动</span>
                                    <span class="label label-badge rank-label" title="" style="background:  !important;color:white !important;"></span>
                                </a>
                            </li>                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a class="" onclick="talker.show()"><i class="icon-chat-dot"> </i>
                                <i id="friend_has_new"></i>
                            </a>
                                        </li>

                    <!--登陆面板-->
                    <li class="dropdown">
                            <div></div>
                            <a id="nav_info" class="dropdown-toggle text-left" data-toggle="dropdown">
                                <span class="icon-bell"></span><span id="nav_bandage_count" style="display: none" class="label label-badge label-success">0</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <div class="clearfix header">
                                        <div class="col-xs-6 nav_align_left"><span id="nav_hint_count">0</span> 条未读                                        </div>
                                    </div>
                                </li>
                                <li class="info-list">
                                    <div class="list-wrap">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 350px;"><ul id="nav_message" class="dropdown-menu-list scroller  list-data" style="width: auto; overflow: hidden; height: 350px;">
                                            <div style="font-size: 18px;color: #ccc;font-weight: normal;text-align: center;line-height: 150px">
                                                    暂无任何消息!                                                </div>
                                                
                                        </ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                                    </div>
                                </li>
                                <li class="footer text-right">
                                    <div class="btn-group">
                                        <button onclick="Notify.setAllReaded()" class="btn btn-sm  "><i class="icon-check"></i> 全部已读                                        </button>
                                        <a class="btn  btn-sm  " href="http://localhost/opensns1/index.php?s=/ucenter/message/message.html">
                                            查看消息                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a title="修改资料" href="http://localhost/opensns1/index.php?s=/ucenter/config/index.html"><i class="icon-cog"></i></a>
                        </li>
                        <li class="top_spliter"></li>
                        <li class="dropdown">
                                                        <a role="button" class="dropdown-toggle dropdown-toggle-avatar" data-toggle="dropdown">
                                root&nbsp;<i style="font-size: 12px" class="icon-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li><a href="http://localhost/opensns1/index.php?s=/ucenter/index/index.html"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;个人主页</a>
                                </li>
                                <li><a href="http://localhost/opensns1/index.php?s=/ucenter/message/message.html"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;消息中心</a>
                                </li>
                                <li><a href="http://localhost/opensns1/index.php?s=/ucenter/collection/index.html"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;我的收藏</a>
                                </li>

                                <li><a href="http://localhost/opensns1/index.php?s=/ucenter/index/rank.html"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;我的头衔</a>
                                </li>
                                
                                                                <li><a href="http://localhost/opensns1/index.php?s=/admin/index/index.html" target="_blank"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;&nbsp;管理后台</a></li>                                <li><a event-node="logout"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;注销</a>
                                </li>
                            </ul>
                        </li>
                        <li class="top_spliter "></li>
                                        </ul>

            </div>
            <!--导航栏菜单项-->

        </nav>
    </div>
</div>



    <!-- /头部 -->
    
    <!-- 主体 -->
    
    <div id="sub_nav" style="top: 50px; left: 0px;">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container" style="width:1180px;">
            <a href="http://localhost/opensns1/index.php?s=/event/index/index.html" class="navbar-brand logo"><i class="icon-map-marker"></i>

                                    
            </a>

            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
                    <ul class="nav navbar-nav">
                                                        <!--一级菜单-->
                                <li id="tab_home" class="active"><a href="http://localhost/opensns1/index.php?s=/event/index/index.html" class="">
                                                                        海报制作</a></li>                                <!--一级菜单-->
                                <li id="tab_myevent" class=""><a href="http://localhost/opensns1/index.php?s=/event/index/myevent.html" class="">
                                                                        我的活动</a></li>                    </ul>
                                    </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>
</div>

<script>
    $('#sub_nav #tab_home').addClass('active');
    adjust_navbar();
</script>

<div id="main-container" class="container" style="padding-top: 115px; min-height: 280px;">
    <script>
        adjust_navbar();
    </script>
    <div class="row">
        
    <div id="frm-post-popup " class="white-popup1 boxShadowBorder col-xs-12">
        <h2>海报展示</h2>

        <div class="aline" style="margin-bottom: 35px"></div>
        <div>
           
    </div>
   <?php echo '<img src="' . $img . '" />';?>
 
    <!-- 底部 -->
    <div class="footer-bar ">

  
        <div class="row text-center">
           

        </div>
    </div>

</div>


