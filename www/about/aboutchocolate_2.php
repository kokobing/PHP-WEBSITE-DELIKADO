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
<div class="productleftmenutitle1">巧克力二三事</div>
<div class="productleftmenutitle3">
    <ul>
        <li style="list-style:none"><a href="aboutchocolate_1.php">如何品尝巧克力</a></li>
        <li><a href="#">巧克力的重要做法及名称</a></li>
        <li style="list-style:none"><a href="aboutchocolate_3.php">无糖(Sugar Free)巧克力</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate23_01.jpg" border="0" width="708">

<div class="producttextbox" style="padding-top:10px;">
<img src="/inc/pics/img12.jpg">
<div class="producttextboxin"  style="margin-top:30px;">

<div style="padding:20px; margin-top:20px;">

<div class="chocolate23box">

<div style=" height:260px;  border-bottom:#707070 1px solid;">
<div class="chocolate23title">A 、片式巧克力</div>
<div class="chocolate23txt">通常一片是 5g 。我们选的是一片8.5g的比利时巧克力</div>
<div class="chocolate23_a" style="margin-top:164px;">普通片式：5g</div>
<div class="chocolate23_a" style="margin-top:50px;"><img src="/inc/pics/img05.jpg"></div>
<div class="chocolate23_a" style="margin-top:164px;">吉麗嘉多片式：8.5g</div>
<div class="chocolate23_a"><img src="/inc/pics/img06.jpg"></div>
</div>

<div style="float:left;margin-top:50px;">
<div class="divconleft">
<div class="chocolate23title">B 、单颗巧克力</div>
<div class="chocolate23txt" style="width:284px; padding-top:30px;"><h3>1.松露巧克力(Truffle)</h3>它与法国奢侈美食〝松露〞毫无关联，纯粹是因此形状的巧克力成品，表面裹上一层巧克力粉，彷彿像松露刚从橡树根內掘出土时，沾裹泥土的模样相似而得名。</div>
</div>
<div class="divconright"><img src="/inc/pics/img07.jpg"></div>
</div>

<div style="float:left;margin-top:30px;">
<div class="divconleft">
<div class="chocolate23txt"><h3>2 、甘纳许(Ganache) </h3>       制作时是将煮滚的鲜奶油倒进切碎的巧克力中，搅拌混合，此种作法最大特色在于巧克力师父，在添加不同的香料、水果、堅果、咖啡、抹茶等，创造出各种味道与变化，也是大师们不断研发的一大考验。</div>
</div>
</div>

<div style=" float:left;margin-top:50px;">
<div class="divconleft"><img src="/inc/pics/img08.jpg"></div>
<div class="divconright">
<div class="chocolate23txt" style="width:370px; padding-top:74px;"><h3>3、普拉林內（Praline）</h3>这是一种法式做法，将杏仁和核桃包裹在焦糖里，再磨碎后混入鲜奶油，做成巧克力馅，外面再披覆一层薄薄的巧克力。</div>
</div>
</div>

<div style="float:left;margin-top:50px;">
<div class="divconleft">
<div class="chocolate23txt" style="width:284px; padding-top:50px;"><h3>4、普拉林（Ｐraline）</h3>与上面名词仅一字之差，这是比利时巧克力的特色，它扬名世界的做法是，用巧克力做一个內凹小杯，在里面填入软馅，再用一片薄巧克力封起來。</div>
</div>
<div class="divconright"><img src="/inc/pics/img09.jpg"></div>
</div>

<div style="float:left;margin-top:50px;">
<div class="divconleft">
<div class="chocolate23txt" style="width:284px; padding-top:70px;"><h3>5、乳加丁（Ｎougatine）</h3>用蛋白+糖浆+碎杏仁（或干果），煮后冷卻变硬，在外包裹一层巧克力即是。</div>
</div>
<div class="divconright"><img src="/inc/pics/img10.jpg"></div>
</div>



</div>

</div>
</div>


</div>


</div>
<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>