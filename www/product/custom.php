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
<div class="productleftmenutitle1">礼盒定制 Customization</div>
<div class="productleftmenutitle3">
    <ul>
        <li><a href="#">企业定制 Enterprise</a></li>
        <li style="list-style:none"><a href="#">婚庆定制 Wedding</a></li>
        <li style="list-style:none"><a href="#">节日定制 Festival</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/custom01.jpg" border="0">

<div class="producttextbox">
<img src="/inc/pics/img16.jpg" />
<p style="width:470px;">Delikado公司为企业、婚庆、节日等提供个性化的定制服务，可以根据需求印制公司LOGO，个性化文字，能自主选择巧克力口味与盒子图案。</p>

<p style="text-indent:0px"><img src="/inc/pics/custom01.gif" /></p>
<p style="text-indent:0px"><img src="/inc/pics/custom02.jpg" /></p>


</div>


</div>
<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>