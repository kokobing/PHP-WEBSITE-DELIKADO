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
<div id="contactbox">

<div id="contactleft">
<div id="contactlefttxtbox">
<div id="contactlefttxt1">吉麗嘉多物资有限公司</div>
<div id="contactlefttxt2">江苏省金坛市直溪镇工业区<br>亚细路18号</div>
<div id="contactlefttxt3">电话：86-519-82447866<br>电邮：luisagao@unimasa.cn</div>
</div>
</div>

<div id="contactright"><img src="/inc/pics/contact01.jpg" border='0'></div>

<div class="clearfix"></div>
</div>
</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>