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
<div class="productleftmenutitle1">巧克力产品 Chocolates</div>
<div class="productleftmenutitle2">● 比利时查理曼巧克力</div>
<div class="productleftmenutitle3">
    <ul>
        <li style="list-style:none"><a href="/product/chocolate-1.php">片式巧克力系列</a></li>
        <li style="list-style:none"><a href="/product/chocolate-2.php">颗粒巧克力系列</a></li>

    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate01.jpg" border="0">

<div class="producttextbox">
<br>
<img src="../inc/pics/imgtitle1.jpg">

<div class="chocolatecontentbox">
<div class="chocolateleft">
<div class="chocolatelefttop">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;比利时查理曼（Charlemagne）巧克力是比利时知名高档巧克力之一，于1987年，由德尼兹·考伦特—贝勤福劳德（Denise CoorantBel-lefroid）建立，具有烹饪艺术史学家的口味。Denise的理想是不断追求完美，不走捷径，形成了洛特雷巧克力（L’autre chocolate）的概念，意指只用最高级的天然配料来制作手工巧克力。他们的作坊所在正是第八世纪查理曼大帝的出生地。因而他们的标志，以及每一块薄巧克力片上都印上了皇家的标记。<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denise女士具有浓厚的艺术气息，除了美丽优雅外，更具有美食家敏锐的鉴赏力。她无穷的创意和精湛的专业技术经验，成就了今日Charlemagne高档巧克力的地位。
</div>

<div class="chocolateleftbottom">
注：洛特雷意指将天然的食材予以艺术的装饰，使得食物真正成为一道艺术品（如右图所示），查理曼巧克力在制作过程中无论从口感还是外观都是精雕细琢的艺术品。
</div>
</div>
<div class="chocolateright"><img src="../inc/pics/img14.jpg"></div>
</div>


<p style=" text-indent:0em;"><img src="/inc/pics/chocolate02.jpg"></p>


</div>



</div>

<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>