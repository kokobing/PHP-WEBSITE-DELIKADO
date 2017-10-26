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
<div class="productleftmenutitle2">&nbsp;&nbsp;&nbsp;<a href="/product/chocolate.php">比利时查理曼巧克力</a></div>
<div class="productleftmenutitle3">
    <ul>
        <li ><a href="/product/chocolate-1.php">片式巧克力系列</a></li>
        <li style="list-style:none"><a href="/product/chocolate-2.php">颗粒巧克力系列</a></li>

    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate1-1.jpg" border="0">

<div class="producttextbox">
<br>
<img src="../inc/pics/imgtitle2.jpg">
<br>
<p style="width:442px; padding-bottom:10px;">
Charlemagne巧克力种类有两大类：一是薄片式巧克力，每片8.5g（不同于一般的5g），8.5g的比5g的吃起来更过瘾，更能品味巧克力融化在口中缠绵的韵味；更把无糖和有机的健康概念注入其中。  
</p>

<div class="producttextlinebox">
■无糖巧克力会甜，其玄机在——麦芽糖醇，是用麦芽糖提炼的一种糖醇，具有蔗糖的甜度，它的好处是：<br><br>
<ul>
<li>不會提高血糖浓度，因此不会刺激胰島素分泌，可说是糖尿病患者的福音。</li>
<li>其本身热量低，且在人体中不易被消化而无法將糖类转化为脂肪，故无肥胖之虞。</li>
<li>可促进肠道內钙质吸收，增加骨密度与骨硬度。</li>
<li>在口腔內不具产酸质，所以可以抑制蛀牙的发生。</li>
</ul>
</div>

<img src="/inc/pics/custom01.gif">
<img src="/inc/pics/chocolate1-2.jpg">

<div style="margin:30px 0px;"><img src="/inc/pics/custom02.gif"></div>
<div style="margin:30px 0px; text-align:center"><img src="/inc/pics/img15.jpg"></div>

</div>



</div>
<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>