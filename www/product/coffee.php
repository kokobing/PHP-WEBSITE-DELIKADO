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
        <li><a href="/product/coffee.php">产品展示</a></li>
        <li style="list-style:none"><a href="/product/coffee_method.php">冲泡方法</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/img_coffee1.jpg" border="0">

<div class="producttextbox">
<div class="producttextleft"><img src="../inc/pics/icon_01.jpg"></div>
<div class="producttextright">Delicado推荐四种口味，严选中美洲，亚洲，非洲，南美咖啡豆新鲜研磨，提供健康、快速、香醇、浓郁的咖啡。因产地不同，各有不同的韵味，支撑挂耳式滤泡咖啡包，可以随着您的心情，选择喜欢的口味，随时随地都能享受一杯新鲜研磨的现泡咖啡。</div>
</div>

<div class="producttextbox">
<div class="producttextleft2"><img src="../inc/pics/img_coffee2.png"></div>
<div class="producttextright2">
    <ul>
        <li><span style="font-size:24px; color:#14bbf0">■</span> 南美洲·滑顺芳香 自然甘醇</li>
        <li><span style="font-size:24px; color:#fd3c39">■</span> 非   洲·狂野馨香 纯度饱满</li>
        <li><span style="font-size:24px; color:#94d136">■</span> 亚   洲·麦芽奶香 浓郁丰富</li>
        <li><span style="font-size:24px; color:#ff8216">■</span> 中美洲·明亮果香 焦糖甘甜</li>
    </ul>
</div>
</div>

</div>
<div class="bg_coffee"></div>
<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>