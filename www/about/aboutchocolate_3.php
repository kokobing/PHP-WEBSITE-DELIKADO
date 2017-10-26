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
        <li style="list-style:none"><a href="aboutchocolate_2.php">巧克力的重要做法及名称</a></li>
        <li><a href="#">无糖(Sugar Free)巧克力</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate23_01.jpg" border="0" width="708">

<div class="producttextbox" style="padding-top:10px;">
<img src="/inc/pics/img13.jpg">
<div id="boxline3">

<div style="padding:20px; margin-top:20px;">

<div class="productrightcontent" style="height:440px; padding-top:30px;">

<div style="width:380px; color:#f06a49; font-size:14px;">无糖巧克力会甜，其玄机在——麦芽糖醇，是用麦芽糖提炼的一种糖醇，具有蔗糖的甜度，它的好处是：</div>
    <ul>
        <li>不会提高血糖浓度，因此部不会刺激胰島素分泌，可说是糖尿病患者的福音。</li>
        <li>其本身热量低，且在人体中不易被消化而无法將糖类转化为脂肪，故無肥胖之虞。</li>
        <li>可促进肠道內钙质吸收，增加骨密度与骨硬度。</li>
        <li>在口腔內不具产酸质，所以可以抑制蛀牙的发生。</li>

    </ul>
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