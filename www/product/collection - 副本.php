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

<?php require "collectionleftmenu.php";?>

<div class="productright"  style="padding-bottom:40px;" >
<img src="/inc/pics/collection01.jpg" border="0">

<div class="producttextbox">
<div class="producttextleft"><img src="../inc/pics/collection02.jpg"></div>
</div>


<div class="collectionlist" id="coll1"><img src="/inc/pics/icon_t1.jpg">
    <ul>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection03.jpg"></a></li>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection04.jpg"></a></li>
        <li style="width:50%">1. Y073  二片无糖巧克力</li>
        <li style="width:50%">2. U052  榛子. 马克香槟松露巧克力</li>

    </ul>
</div>

<div class="collectionlist" id="coll2"><img src="/inc/pics/icon_t2.jpg">
    <ul>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection05.jpg"></a></li>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection06.jpg"></a></li>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection07.jpg"></a></li>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection08.jpg"></a></li>
        <li style="width:25%">1. AF06（红色）</li>
        <li style="width:25%">2. AF06(金色)</li>
        <li style="width:25%">3. AF486-T</li>
        <li style="width:25%">4. AF484-T</li>
    </ul>
</div>

<div class="collectionlist" id="coll3"><img src="/inc/pics/icon_t3.jpg">
    <ul>
        <li style="width:33%"><a href="#"><img src="/inc/pics/collection09.jpg"></a></li>
        <li style="width:33%"><a href="#"><img src="/inc/pics/collection10.jpg"></a></li>
        <li style="width:33%"><a href="#"><img src="/inc/pics/collection11.jpg"></a></li>
        <li style="width:33%">1. 6C</li>
        <li style="width:33%">2. 12C</li>
        <li style="width:33%">3. 16C</li>
    </ul>
</div>

<div class="collectionlist" id="coll4"><img src="/inc/pics/icon_t4.jpg">
    <ul>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection12.jpg"></a></li>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection13.jpg"></a></li>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection14.jpg"></a></li>
        <li style="width:25%"><a href="#"><img src="/inc/pics/collection15.jpg"></a></li>
        <li style="width:25%">1. 4C+2B</li>
        <li style="width:25%">2. 8C+3B</li>
        <li style="width:25%">3. 12C+5B</li>
        <li style="width:25%">4. 16C+6B</li>
    </ul>
</div>

<div class="collectionlist" id="coll5"><img src="/inc/pics/icon_t5.jpg">
    <ul>
        <li style="width:33%"><a href="#"><img src="/inc/pics/collection16.jpg"></a></li>
        <li style="width:33%"><a href="#"><img src="/inc/pics/collection17.jpg"></a></li>
        <li style="width:33%"><a href="#"><img src="/inc/pics/collection18.jpg"></a></li>
        <li style="width:33%">1. HF17（黑色）</li>
        <li style="width:33%">2. HF14（小盒）</li>
        <li style="width:33%">3. HF13（大盒)</li>
    </ul>
</div>

<div class="collectionlist" id="coll6"><img src="/inc/pics/icon_t6.jpg">
    <ul>
        <li style="width:100%"><a href="#"><img src="/inc/pics/collection19.jpg"></a></li>
        <li style="width:100%">RF27</li>
    </ul>
</div>

<div class="collectionlist" id="coll7"><img src="/inc/pics/icon_t7.jpg">
    <ul>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection20.jpg"></a></li>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection21.jpg"></a></li>
        <li style="width:50%">1. KF125</li>
        <li style="width:50%">2. KF124</li>

    </ul>
</div>

<div class="collectionlist" id="coll8"><img src="/inc/pics/icon_t8.jpg">
    <ul>
        <li style="width:100%"><a href="#"><img src="/inc/pics/collection22.jpg"></a></li>
        <li style="width:100%">AFT485</li>
    </ul>
</div>

<div class="collectionlist" id="coll9"><img src="/inc/pics/icon_t9.jpg">
    <ul>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection23.jpg"></a></li>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection24.jpg"></a></li>
        <li style="width:100%">KF154 </li>

    </ul>
</div>

<div class="collectionlist" id="coll10"><img src="/inc/pics/icon_t10.jpg">
    <ul>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection25.jpg"></a></li>
        <li style="width:50%"><a href="#"><img src="/inc/pics/collection26.jpg"></a></li>
        <li style="width:100%">KF135 </li>

    </ul>
</div>

</div>
<div class="clearfix"></div>
</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

</body>
</html>