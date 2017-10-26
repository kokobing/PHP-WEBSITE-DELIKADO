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


<div class="collectionlist" id="coll1"><a href="/product/collectionview.php?pid=9"><img src="/inc/pics/icon_t1.jpg"></a>
    <ul>
        <li style="width:50%"><img src="/inc/pics/collection03.jpg"></li>
        <li style="width:50%"><img src="/inc/pics/collection04.jpg"></li>
        <li style="width:50%">B06  嘉丽婚庆巧克力礼袋</li>
        <li style="width:50%">A09  嘉丽婚庆巧克力礼盒</li>

    </ul>
</div>

<div class="collectionlist" id="coll2"><a href="/product/collectionview.php?pid=10"><img src="/inc/pics/icon_t2.jpg"></a>
    <ul>
        <li style="width:25%"><img src="/inc/pics/collection05.jpg"></li>
        <li style="width:25%"><img src="/inc/pics/collection06.jpg"></li>
        <li style="width:25%"><img src="/inc/pics/collection07.jpg"></li>
        <li style="width:25%"><img src="/inc/pics/collection08.jpg"></li>
        <li style="width:25%">AB03 小两口巧克力礼盒</li>
        <li style="width:25%">A01 吉丽四喜巧克力礼盒</li>
        <li style="width:25%">AB02 吉利多巧克力礼盒</li>
        <li style="width:25%">AB04 吉利多巧克力礼盒</li>
    </ul>
</div>

<div class="collectionlist" id="coll3"><a href="/product/collectionview.php?pid=11"><img src="/inc/pics/icon_t3.jpg"></a>
    <ul>
        <li style="width:33%"><img src="/inc/pics/collection09.jpg"></li>
        <li style="width:33%"><img src="/inc/pics/collection10.jpg"></li>
        <li style="width:33%"><img src="/inc/pics/collection11.jpg"></li>
        <li style="width:33%">B02 健康嘉惠巧克力礼盒</li>
        <li style="width:33%">B05 健康嘉惠巧克力礼盒</li>
        <li style="width:33%">B03 健康嘉惠巧克力礼盒</li>
    </ul>
</div>

<div class="collectionlist" id="coll4"><a href="/product/collectionview.php?pid=12"><img src="/inc/pics/icon_t4.jpg"></a>
    <ul>
        <li style="width:25%"><img src="/inc/pics/collection12.jpg"></li>
        <li style="width:25%"><img src="/inc/pics/collection13.jpg"></li>
        <li style="width:25%"><img src="/inc/pics/collection14.jpg"></li>
        <li style="width:25%"><img src="/inc/pics/collection15.jpg"></li>
        <li style="width:25%">BC01<br>甜蜜飘香巧克力咖啡礼盒</li>
        <li style="width:25%">BC04<br>甜蜜飘香巧克力咖啡礼盒</li>
        <li style="width:25%">BC02<br>甜蜜飘香巧克力咖啡礼盒</li>
        <li style="width:25%">BC03<br>甜蜜飘香巧克力咖啡礼盒</li>
    </ul>
</div>

<div class="collectionlist" id="coll5"><a href="/product/collectionview.php?pid=13"><img src="/inc/pics/icon_t5.jpg"></a>
    <ul>
        <li style="width:33%"><img src="/inc/pics/collection16.jpg"></li>
        <li style="width:33%"><img src="/inc/pics/collection17.jpg"></li>
        <li style="width:33%"><img src="/inc/pics/collection18.jpg"></li>
        <li style="width:33%">A02 吉丽甜心巧克力礼盒</li>
        <li style="width:33%">A03 吉丽甜心巧克力礼盒</li>
        <li style="width:33%">A04 吉丽甜心巧克力礼盒</li>
    </ul>
</div>

<div class="collectionlist" id="coll6"><a href="/product/collectionview.php?pid=14"><img src="/inc/pics/icon_t6.jpg"></a>
    <ul>
        <li style="width:100%"><img src="/inc/pics/collection19.jpg"></li>
        <li style="width:100%">AB05 吉丽财星巧克力礼盒</li>
    </ul>
</div>

<div class="collectionlist" id="coll7"><a href="/product/collectionview.php?pid=15"><img src="/inc/pics/icon_t7.jpg"></a>
    <ul>
        <li style="width:50%"><img src="/inc/pics/collection20.jpg"></li>
        <li style="width:50%"><img src="/inc/pics/collection21.jpg"></li>
        <li style="width:50%">ABC01 吉丽多宝巧克力豪华礼盒</li>
        <li style="width:50%">AC01 吉丽多宝巧克力精选礼盒</li>

    </ul>
</div>

<div class="collectionlist" id="coll8"><a href="/product/collectionview.php?pid=16"><img src="/inc/pics/icon_t8.jpg"></a>
    <ul>
        <li style="width:100%"><img src="/inc/pics/collection22.jpg"></li>
        <li style="width:100%">C01 吉丽飘香咖啡礼盒</li>
    </ul>
</div>

<div class="collectionlist" id="coll9"><a href="/product/collectionview.php?pid=17"><img src="/inc/pics/icon_t9.jpg"></a>
    <ul>
        <li style="width:50%"><img src="/inc/pics/collection23.jpg"></li>
        <li style="width:50%"><img src="/inc/pics/collection24.jpg"></li>
        <li style="width:100%">A05 吉丽魔术巧克力礼盒 </li>

    </ul>
</div>

<div class="collectionlist" id="coll10"><a href="/product/collectionview.php?pid=18"><img src="/inc/pics/icon_t10.jpg"></a>
    <ul>
        <li style="width:50%"><img src="/inc/pics/collection25.jpg"></li>
        <li style="width:50%"><img src="/inc/pics/collection26.jpg"></li>
        <li style="width:100%">A06 吉丽神秘巧克力礼盒</li>

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