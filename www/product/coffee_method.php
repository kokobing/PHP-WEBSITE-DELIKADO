<?php
require "../inc/cn_contact_core.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>

<link rel="stylesheet" type="text/css" href="../inc/css/resetui.css">

<script src="/inc/js/jquery.js"></script>
<script src="../inc/js/custom.js"></script>



<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
<?php if(trim($setinfo[statistics])!=''){echo $setinfo[statistics];}//统计代码?>

</head>
<body <?php if($setinfo[iscopy]=='1'){echo ' oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false"';}?> >

<div id="warpper">
<? require "../header.php"; ?>
</div><!--warpper end-->


<div id="warpper2box">
<div id="warpper2">
<div id="productbox">

<div class="productleft">
<div class="productleftmenutitle1">咖啡产品 Coffees</div>
<div class="productleftmenutitle2">CATAMONA挂耳式咖啡</div>
<div class="productleftmenutitle3">
    <ul>
        <li style="list-style:none"><a href="/product/coffee.php">产品展示</a></li>
        <li><a href="/product/coffee_method.php">冲泡方法</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/img_coffee1.jpg" border="0">

<div class="producttextbox">
<div class="producttextleft"><img src="../inc/pics/icon_01.jpg"></div>
<div class="producttextright_m">可以帶著走，新鮮研磨，香醇濃郁，無論何時何地，便利沖泡，即時享用的高檔咖啡。</div>
</div>

<div class="productcoffee_m">
    <ul>
        <li><img src="../inc/pics/icon_02.jpg"><span>1、将无纺布咖啡包，沿虚线撕掉上缘</span></li>
        <li><img src="../inc/pics/icon_03.jpg"><span>2、将耳挂悬于小咖啡杯或马赛克杯上，开口上缘呈方形开口状</span></li>
        <li><img src="../inc/pics/icon_04.jpg"><span>3、先用85℃±5℃热水，约180CC～200CC，将咖啡润湿之后，停顿30秒，让咖啡由睡梦中苏醒</span></li>
        <li><img src="../inc/pics/icon_05.jpg"><span>4、再注入剩余的热水，缓慢地以绕小圆圈方式将热水注入咖啡，至八分满止</span></li>
        <li><img src="../inc/pics/icon_06.jpg"><span>5、数分钟后将咖啡包取出沥干，就是一杯热热浓浓的咖啡</span></li>
    </ul>
</div>


</div>
<div class="bg_coffee_m"></div>
<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>