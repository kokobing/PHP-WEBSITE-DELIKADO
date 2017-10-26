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
<div id="partnerbox">

<div class="partnerboxin"><img src="../inc/pics/partners.png" usemap="#Map2">
  <map name="Map2">
    <area shape="rect" coords="2,266,305,491" href="http://www.popupbox-unimasa.com/ch/index.asp" target="_blank">
    <area shape="rect" coords="311,267,608,493" href="http://www.charlemagne.be" target="_blank">
    <area shape="rect" coords="614,266,925,492" href="http://www.catamona.com/index.htm" target="_blank">
  </map>
</div>


<div class="clearfix"></div>
</div>
</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>