<?php
require "../inc/cn_about_core.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>

<link rel="stylesheet" type="text/css" href="/inc/css/resetui.css">
<link rel="stylesheet" type="text/css" media="screen" href="/inc/css/wow-slider.css" />

<script src="/inc/js/jquery.js"></script>
<script src="/inc/js/custom.js"></script>



<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
<?php if(trim($setinfo[statistics])!=''){echo $setinfo[statistics];}//统计代码?>

</head>
<body <?php if($setinfo[iscopy]=='1'){echo ' oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false"';}?> >

<div id="warpper">

<? require "../header.php"; ?>



<div id="contentbox" style=" background:#fff;position:relative">

<div><img src="/inc/pics/story01.jpg" /></div>

<div class="storycontent fr">
<h2>吉麗嘉多的品牌故事</h2>
<p>Delikado”是法語“deli”(delicieux)意爲 “精致可口的” 與“kado”(cadeau)意指爲“禮物”的複合字，代表贈禮者對受禮者傳達壹份法式浪漫和匠心巧思的心意。</p>
<p>“吉麗嘉多”乃“Delikado”的音譯，代表“吉祥”、“美麗”與“嘉惠多多”的中國傳統吉祥話，能帶來好運與福慧，也是“Delikado”之最佳注解。</p>
<p><img src="/inc/pics/story01.gif" />
圖騰意境：<br>
      a.看似個鳥巢，代表家庭圓滿幸福<br>
      b.看似條小船，代表著事事順心如意<br>
      c.看似個元寶，招來好運與財氣<br>
      d.看似壹雙手，象征送禮者<br>
</p>
</div>


<div class="storycontent fl" style="padding-left:60px;width:400px;">
<h2>吉麗嘉多的使命與優勢</h2>
<p>
 1、精選進口優質高檔巧克力與甜點<br>
     Import Selected Finest Chocolates and Desserts<br>
 2、建造世界名牌巧克力工廠與中國消費者的良好交易平台<br>
     Build up Chocolates Gallery in China<br>
 3、配以引導風潮的精美禮盒包裝<br>
     Creste Faction Style packages<br> 
 4、提供高性價比的精致禮物給客戶<br>
     Provide High Performance/cost Rato Luxirious<br>  
     Gifts to customers<br>
</p>
</div>


<div style="position:absolute;right:0px;bottom:90px;"><img src="/inc/pics/story02.jpg"></div>



<div class="clearfix"></div>
</div>


<div id="footerbox" style="margin-top:10px"><img src="/inc/pics/footericon.png"></div>



</div><!--warpper end-->
</body>
</html>