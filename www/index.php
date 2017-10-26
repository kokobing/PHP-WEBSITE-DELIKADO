<?php
require "./inc/cn_index_core.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>

<link rel="stylesheet" type="text/css" href="./inc/css/resetui.css">

<script src="./inc/js/jquery.js"></script>
<script src="./inc/js/slider.min.js"></script>
<script src="./inc/js/jquery.easing.js"></script>
<script src="./inc/js/custom.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>



<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
<?php if(trim($setinfo[statistics])!=''){echo $setinfo[statistics];}//统计代码?>

</head>
<body <?php if($setinfo[iscopy]=='1'){echo ' oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false"';}?> >

<div id="warpper">
<? require "header.php"; ?>
</div><!--warpper end-->


<div id="warpper2box">
<div id="warpper2">
<div id="contentbox">
<div id="mainleft">

        <div class="innerslider" id="sliderbox">
          <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="758" height="420">
            <param name="movie" value="inc/pics/影片.swf">
            <param name="quality" value="high">
            <param name="wmode" value="opaque">
            <param name="swfversion" value="6.0.65.0">
            <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
            <param name="expressinstall" value="Scripts/expressInstall.swf">
            <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="inc/pics/影片.swf" width="758" height="420">
              <!--<![endif]-->
              <param name="quality" value="high">
              <param name="wmode" value="opaque">
              <param name="swfversion" value="6.0.65.0">
              <param name="expressinstall" value="Scripts/expressInstall.swf">
              <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
              <div>
                <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object>
        </div>
        
</div>

<div id="mainright">
<div style="margin-top:20px; text-align:right"><img src="/inc/pics/rightnews.jpg"></div>
<div style="margin-top:10px; text-align:right"><img src="/inc/pics/rightqr.jpg"></div>
</div>

<div class="clearfix"></div>
</div>
</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "footer.php"; ?>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>