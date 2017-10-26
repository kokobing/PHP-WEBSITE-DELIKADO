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
        <li style="list-style:none"><a href="aboutchocolate_3.php">无糖(Shurg Free)巧克力</a></li>
    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate23_01.jpg" border="0" width="708">

<div class="producttextbox" style="padding-top:10px;">
<img src="/inc/pics/img11.jpg">
<div style=" margin-top:50px; border:#603913 1px solid; height:600px; height:auto !important; min-height:600px; ">

<div style="padding:20px; margin-top:20px;">

<div class="productrightcontent">
    <ul>
        <li style="width:430px;">1.苦巧克力(Bitter Chocolate)  可可质含量超过65% 含糖量低被称为黑巧克力。不过不是含糖量高，品质就好，如果摘用的可可豆的品质不良，或者因过度烘焙，可可豆就会苦涩，颜色深深如墨。</li>
        <li style="list-style:none"><img src="/inc/pics/img01.jpg"></li>
    </ul>
</div>

<div class="productrightcontent">
    <ul>
        <li style="width:430px;">2.苦甜巧克力(Dark Chocolate)  可可质含量47%以上，颜色为深咖啡色</li>
        <li style="list-style:none"><img src="/inc/pics/img02.jpg"></li>
    </ul>
</div>

<div class="productrightcontent">
    <ul>
        <li style="width:430px;">3.牛奶巧克力(Milk Chocolate)  可可质含量10%-14%,牛乳12%以上，虽然有丰富的奶香味，不过可可味略嫌淡薄。但现今品味巧克力的意识抬头，有巧克力厂，推出40%可可质的牛奶巧克力，兼具了大众化的奶香与可可风味，较受年轻人喜爱。</li>
        <li style="list-style:none"><img src="/inc/pics/img03.jpg"></li>
    </ul>
</div>

<div class="productrightcontent">
    <ul>
        <li style="width:430px;">4.白巧克力(white Chocolate)  几乎沒有可可质，主要成分是奶粉+糖+可可脂，因此颜色呈乳白色(可能较受小朋友欢迎)</li>
        <li style="list-style:none"><img src="/inc/pics/img04.jpg"></li>
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