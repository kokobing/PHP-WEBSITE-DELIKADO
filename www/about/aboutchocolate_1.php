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
        <li><a href="#">如何品尝巧克力</a></li>
        <li style="list-style:none"><a href="aboutchocolate_2.php">巧克力的重要做法及名称</a></li>
        <li style="list-style:none"><a href="aboutchocolate_3.php">无糖(Sugar Free)巧克力</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate23_01.jpg" border="0" width="708">

<div class="producttextbox" style="padding-top:10px;">
<img src="/inc/pics/img11.jpg">
<div id="boxline">

<div style="padding:20px; margin-top:20px;">

<div class="productrightcontent">
    <ul>
        <li>看其表面色泽，是否光滑细亮，色泽饱满，顏色不应偏黑黯淡而是近于砖红色或桃花心木色。</li>
        <li>闻闻巧克力是否有芳香新鮮的味道而非油耗和l蜡味。</li>
        <li>轻轻一掰，声音脆亮，边缘干净不留余屑。</li>
        <li>掰一小块，放在舌上，不要咬嚼，慢慢感受巧克力融化，丝滑细腻的变化，如：有焦燻味否？糖的甜味均衡否？是否过于苦涩？巧克力应是口感丰富醇厚細緻，有特性且余韵绵长。</li>
        <li>当你的手指捏著巧克力时，好的巧克力在手指间数秒钟软化，那是因为巧克力的熔點比人的體溫低，所以好巧克力应该是〝融你口也融你手〞，有些广告词说〝只融你口不融你手〞其应该該叫〝巧克力糖〞而不叫〝巧克力〞。</li>

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