<!DOCTYPE html>
<!-- saved from url=(0059)http://localhost/opensns1/index.php?s=/event/index/add.html -->
<html class="screen-desktop-wide device-desktop"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


<title>添加活动——活动</title>
    <meta name="keywords" content="添加,活动">
<!-- zui -->
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

<!--换肤插件钩子-->
<!--换肤插件钩子 end-->
<a id="goTopBtn" style="display: none; right: 50px;"></a>
<!--顶部导航之后的钩子，调用公告等-->
<!--顶部导航之后的钩子，调用公告等 end-->


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
        <h2>海报制作</h2>

        <div class="aline" style="margin-bottom: 35px"></div>
        <div>
            <div class="row">
                <div style="padding: 0 10px;width: 270px;float: left;">
                   

                </div>
                <div style="padding: 0px 10px; width: 840px; float: left;">
                    <form class="form-horizontal ajax-form" role="form" action="4.php" method="post">
                        <div class="form-group has-feedback">
                            <label for="title" class="control-label">标题</label>

                            <div class="col-xs-10">
                                <input id="title" name="title" class="form-control form_check" check-type="Text" value="" placeholder="标题" required=""><div class=" show_info"></div>
                            </div>
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="cover_id" id="cover_id_cover" value="">
                        </div>


                        <div class="form-group ">
                            <label for="type_id" class="control-label">分类</label>

                            <div class="col-xs-5">
                                <select id="type_id" name="type_id" class="form-control ">
                                    <option value="1">
                                        慈善活动                                        </option>                                </select>
                            </div>


                        </div>


                        <div class="form-group  has-feedback">
                            <label for="" class="control-label">时间</label>

                            <div class="col-xs-5">
                                <input type="text" id="sTime" name="sTime" class="time_d form-control form_check"   value="" placeholder="开始时间" required=""><div class=" show_info"><div class="send red"><div class="arrow"></div>不能为空！</div></div>
                            </div>

                            <div class="col-xs-5">
                                  <input type="text" id="eTime" name="eTime" class="time_d form-control form_check"  value="" placeholder="结束时间" required=""><div class=" show_info"></div>
                            </div>
                        </div>
                        <div class="form-group  has-feedback">
                            <label for="address" class="control-label">地址</label>

                            <div class="col-xs-10">
                                <input id="address" name="address" class="form-control form_check" check-type="Text" value="" placeholder="地址" required=""><div class=" show_info"></div>

                            </div>

                        </div>
                        <div class="form-group  has-feedback">
                            <label for="limitCount" class="control-label">人数</label>

                            <div class="col-xs-10">
                                <input id="limitCount" name="limitCount" class="form-control form_check" check-type="Num" value="" placeholder="人数" required=""><div class=" show_info"></div>
                            </div>

                        </div>
                        <div class="form-group  has-feedback">
                            <label for="deadline" class="control-label">截止</label>

                            <div class="col-xs-10">
                                <input type="text" id="deadline" name="deadline"  class="time form-control form_check " check-type="Text" value="" placeholder="报名截止" required=""><div class=" show_info"></div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="explain" class="control-label">介绍</label>
                            <div class="col-xs-10">
                                <input type="textarea" rows="10" cols="60" id="discrible" name="discrible"  class="form-control form_check " check-type="Text" value="" placeholder="介绍活动" required=""><div class=" show_info"></div>
                            </div>


                            <div class="col-xs-10">
                                
                                
<script>
    var  ue_myeditor_edit;
    $(function () {
    var config = {toolbars:[['source','|','bold','italic','underline','fontsize','forecolor','justifyleft','fontfamily','attachment','|','map','emotion','insertimage','insertcode']],zIndex:977,initialFrameWidth:800,initialFrameHeight:250,autoHeightEnabled: false,'topOffset':$('#nav_bar').height()+$('#sub_nav').height()+5};
    ue_myeditor_edit = UE.getEditor('myeditor_edit', config);
    })


</script>

<script type="text/javascript" charset="utf-8" src="./添加活动——活动_files/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./添加活动——活动_files/ueditor.all.min.js"></script>
                            </div>
                        </div>
                        <div class="form-group  has-feedback">
                            <label for="deadline" class="control-label">位置</label>

                            <div class="col-xs-10">
                                <input type="radio" name="loca" value="leftup" /> 左上
<input type="radio" name="local" value="rightup" /> 右上
 <input type="radio" name="loca" value="leftdown" /> 左下
<input type="radio" name="local" value="rightdown" /> 右下
<input type="radio" name="local" value="center" /> 正中
                            </div>

                        </div>
                        <div class="form-group  has-feedback">
                            <label for="deadline" class="control-label">大小</label>

                            <div class="col-xs-10">
                                <input type="text" name="size" id="size">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-xs-2" style="margin-left: 50px;">
                                <button type="submit" class="btn btn-primary " href="/opensns1/index.php?s=/event/index/dopost.html" style="padding: 5px 20px 5px 32px;letter-spacing: 12px;font-size: 14px;">提交
                                </button>

                            </div>
                            <div class="col-xs-8">
                                <button onclick="history.go(-1);" class="btn btn-default " href="/opensns1/index.php?s=/event/index/dopost.html" style="padding: 5px 20px 5px 32px;letter-spacing: 12px;font-size: 14px;">返回
                                </button>
                            </div>

                        </div>
                    <textarea name="explain" id="ueditor_textarea_explain" style="display: none;"></textarea></form>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="./添加活动——活动_files/jquery.uploadify.min.js"></script>
    <link href="./添加活动——活动_files/form_check.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./添加活动——活动_files/form_check.js"></script>
    <script type="text/javascript" src="./添加活动——活动_files/datetimepicker.min.js" charset="UTF-8"></script>

    <script>

        $("#upload_picture_cover").uploadify({
            "height": 30,
            "swf": "/opensns1/Public/static/uploadify/uploadify.swf",
            "fileObjName": "download",
            "buttonText": "上传封面",
            "buttonClass": "uploadcover",
            "uploader": "/opensns1/index.php?s=/core/file/uploadpicture/session_id/0g9ptkgqgnm1fj5615uc7iejv2.html",
            "width": 250,
            'removeTimeout': 1,
            'fileTypeExts': '*.jpg; *.png; *.gif;',
            "onUploadSuccess": uploadPicturecover,
            'overrideEvents': ['onUploadProgress', 'onUploadComplete', 'onUploadStart', 'onSelect'],
            'onFallback': function () {
                alert('未检测到兼容版本的Flash.');
            }, 'onUploadProgress': function (file, bytesUploaded, bytesTotal, totalBytesUploaded, totalBytesTotal) {
                $("#cover_id_cover").parent().find('.upload-img-box').html(totalBytesUploaded + ' bytes uploaded of ' + totalBytesTotal + ' bytes.');
            }, 'onUploadComplete': function (file) {
                //alert('The file ' + file.name + ' finished processing.');
            }, 'onUploadStart': function (file) {
                //alert('Starting to upload ' + file.name);
            }, 'onQueueComplete': function (queueData) {
                // alert(queueData.uploadsSuccessful + ' files were successfully uploaded.');
            }
        });
        function uploadPicturecover(file, data) {
            var data = $.parseJSON(data);
            var src = '';
            if (data.status) {
                $("#cover_id_cover").val(data.id);
                src = data.url || data.path
                $('.upload-img-box').html(
                        '<div class="upload-pre-item"><img src="' + src + '"/></div>'
                );
            } else {
                toast.error('封面上传失败。', '温馨提示');
            }
        }



        $('.time').datetimepicker({
            language:'zh-CN',
            weekStart:1,
            todayBtn:1,
            autoclose:1,
            todayHighlight:1,
            startView:2,
            minView:0,
            forceParse:0,
            format: 'yyyy-mm-dd hh:ii'
        });

        $('.time_d').datetimepicker({
            language:'zh-CN',
            weekStart:1,
            todayBtn:1,
            autoclose:1,
            todayHighlight:1,
            startView:2,
            minView:2,
            forceParse:0,
            format: 'yyyy-mm-dd'
        });
    </script>

    </div>
</div><div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 444px; z-index: 1040;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">9 十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="minute">20:00</span><span class="minute">20:05</span><span class="minute">20:10</span><span class="minute">20:15</span><span class="minute">20:20</span><span class="minute">20:25</span><span class="minute">20:30</span><span class="minute">20:35</span><span class="minute">20:40</span><span class="minute">20:45</span><span class="minute">20:50</span><span class="minute active">20:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">9 十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span class="hour">19:00</span><span class="hour active">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr><tr><th class="dow">一</th><th class="dow">二</th><th class="dow">三</th><th class="dow">四</th><th class="dow">五</th><th class="dow">六</th><th class="dow">日</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td></tr><tr><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td></tr><tr><td class="day today active">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td></tr><tr><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td></tr><tr><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td></tr><tr><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="month">一月</span><span class="month">二月</span><span class="month">三月</span><span class="month">四月</span><span class="month">五月</span><span class="month">六月</span><span class="month">七月</span><span class="month">八月</span><span class="month">九月</span><span class="month">十月</span><span class="month active">十一月</span><span class="month">十二月</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2010-2019</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year active">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div></div><div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 438.5px; z-index: 1000000009; display: none; top: 336.188px;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">9 十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="minute">20:00</span><span class="minute">20:05</span><span class="minute">20:10</span><span class="minute">20:15</span><span class="minute">20:20</span><span class="minute">20:25</span><span class="minute">20:30</span><span class="minute">20:35</span><span class="minute">20:40</span><span class="minute">20:45</span><span class="minute">20:50</span><span class="minute active">20:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">9 十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span class="hour">19:00</span><span class="hour active">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr><tr><th class="dow">一</th><th class="dow">二</th><th class="dow">三</th><th class="dow">四</th><th class="dow">五</th><th class="dow">六</th><th class="dow">日</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td></tr><tr><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td></tr><tr><td class="day today active">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td></tr><tr><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td></tr><tr><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td></tr><tr><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="month">一月</span><span class="month">二月</span><span class="month">三月</span><span class="month">四月</span><span class="month">五月</span><span class="month">六月</span><span class="month">七月</span><span class="month">八月</span><span class="month">九月</span><span class="month">十月</span><span class="month active">十一月</span><span class="month">十二月</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2010-2019</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year active">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div></div><div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 794px; z-index: 1120;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">9 十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="minute">20:00</span><span class="minute">20:05</span><span class="minute">20:10</span><span class="minute">20:15</span><span class="minute">20:20</span><span class="minute">20:25</span><span class="minute">20:30</span><span class="minute">20:35</span><span class="minute">20:40</span><span class="minute">20:45</span><span class="minute">20:50</span><span class="minute active">20:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">9 十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span class="hour">19:00</span><span class="hour active">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">十一月 2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr><tr><th class="dow">一</th><th class="dow">二</th><th class="dow">三</th><th class="dow">四</th><th class="dow">五</th><th class="dow">六</th><th class="dow">日</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td></tr><tr><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td></tr><tr><td class="day today active">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td></tr><tr><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td></tr><tr><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td></tr><tr><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2015</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="month">一月</span><span class="month">二月</span><span class="month">三月</span><span class="month">四月</span><span class="month">五月</span><span class="month">六月</span><span class="month">七月</span><span class="month">八月</span><span class="month">九月</span><span class="month">十月</span><span class="month active">十一月</span><span class="month">十二月</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2010-2019</th><th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year active">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今日</th></tr></tfoot></table></div></div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	<div class="footer-bar ">

  
        <div class="row text-center">
            <hr>

                <h4> <p>Copyright ©2013-2014 <a href="http://www.ourstu.com/" target="_blank"xxxx信息科技有限公司</a></p></h4>
                <div class="col-xs-12">RECORD_N<a href="http://www.miitbeian.gov.cn/" target="_blank">
                    沪ICP备12007XXX号 </a>
                </div>

                        <div>
                Powered by <a href="http://www.opensns.cn/">OpenSNS</a>
            </div>

        </div>
    </div>

</div>
<div>
    </div>
<!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->

<script>
    $(window).resize(adjust_navbar).resize()

</script>
<!-- 为了让html5shiv生效，请将所有的CSS都添加到此处 -->
<link type="text/css" rel="stylesheet" href="./添加活动——活动_files/jquery.qtip.css">



<!--<script type="text/javascript" src="/opensns1/Public/js/com/com.notify.class.js"></script>-->

<!-- 其他库-->
<!--<script src="/opensns1/Public/static/qtip/jquery.qtip.js"></script>
<script type="text/javascript" src="/opensns1/Public/js/ext/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/opensns1/Public/static/jquery.iframe-transport.js"></script>

<script type="text/javascript" src="/opensns1/Public/js/ext/magnific/jquery.magnific-popup.min.js"></script>-->
<!--CNZZ广告管家，可自行更改-->
<!--<script type='text/javascript' src='http://js.adm.cnzz.net/js/abase.js'></script>-->
<!--CNZZ广告管家，可自行更改end
 自定义js-->

<!--<script type="text/javascript" src="/opensns1/Public/js/ext/placeholder/placeholder.js"></script>
<script type="text/javascript" src="/opensns1/Public/js/ext/atwho/atwho.js"></script>
<script type="text/javascript" src="/opensns1/Public/zui/js/zui.js"></script>-->
<link type="text/css" rel="stylesheet" href="./添加活动——活动_files/atwho.css">

<script src="./添加活动——活动_files/js(1).php"></script>
<script type="text/javascript" src="./添加活动——活动_files/jquery.iframe-transport.js"></script>

<script src="./添加活动——活动_files/lazyload.js"></script>



<!-- 用于加载js代码 -->

<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
    
</div>

	<!-- /底部 -->

<div id="edui_fixedlayer" class="edui-default" style="position: fixed; left: 0px; top: 0px; width: 0px; height: 0px;"><div id="edui82" class="edui-popup  edui-bubble edui-default" onmousedown="return false;" style="display: none;"> <div id="edui82_body" class="edui-popup-body edui-default"> <iframe style="position:absolute;z-index:-1;left:0;top:0;background-color: transparent;" frameborder="0" width="100%" height="100%" src="about:blank" class="edui-default"></iframe> <div class="edui-shadow edui-default"></div> <div id="edui82_content" class="edui-popup-content edui-default">  </div> </div></div></div><div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 1px; height: 1px; z-index: 999999999;"><object id="global-zeroclipboard-flash-bridge" name="global-zeroclipboard-flash-bridge" width="100%" height="100%" type="application/x-shockwave-flash" data="http://localhost/opensns1/Public/static/ueditor/third-party/zeroclipboard/ZeroClipboard.swf?noCache=1447073715574"><param name="allowScriptAccess" value="sameDomain"><param name="allowNetworking" value="all"><param name="menu" value="false"><param name="wmode" value="transparent"><param name="flashvars" value="trustedOrigins=localhost%2C%2F%2Flocalhost%2Chttp%3A%2F%2Flocalhost"></object></div></body></html>