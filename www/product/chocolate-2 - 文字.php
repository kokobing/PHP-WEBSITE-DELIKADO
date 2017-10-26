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

<div id="productboxbg">

<div class="productleft">
<div class="productleftmenutitle1">巧克力产品 Chotolate</div>
<div class="productleftmenutitle2">比利时查理曼巧克力</div>
<div class="productleftmenutitle3">
    <ul>
        <li style="list-style:none"><a href="/product/chocolate-1.php">片式巧克力系列</a></li>
        <li><a href="/product/chocolate-2.php">颗粒巧克力系列</a></li>

    </ul>
</div>
</div>

<div class="productright">
<img src="/inc/pics/chocolate2-1.jpg" border="0">

<div class="producttextbox">
<br>
<img src="../inc/pics/imgtitle2.jpg">
<br>
<p style="width:575px; padding-bottom:50px;">
     第二类颗粒状巧克力，更是表现丹尼斯鉴赏其美食和精湛厨艺的具体创作，她将黑巧克力和牛奶巧克力的完美比例，以及在牛奶巧克力内馅中添加各类酒香和果仁所呈现出的不同层次的风味和口感，更形成其洛特雷巧克力的独特品味和巧思，具有无与伦比的美食艺术感。
</p>

<img src="/inc/pics/custom01.gif">

<div style="width:100%;paddin:15px 0px;">

<?
$getproduct=getproductlist(46,'id_prodinfo,title,intro');
for($i=0;$i<sizeof($getproduct);$i++){
	$getpic=getproductonepic($getproduct[$i][id_prodinfo],0);
	$getpic2=getproductonepic($getproduct[$i][id_prodinfo],1);
?>
<div style="float:left;width:50%;text-align:center">
<a href="javascript:void(0)" onclick="openpopbox(<?=$i;?>);" ><img src="/upload/product/<?=$getpic;?>" ></a>
<div style=""><span style="color:#ef5f3c" id="p_title<?=$i;?>"><?=$getproduct[$i][title];?></span>  </div>
</div>
<div style="display:none" id="p_intro<?=$i;?>"><?=$getproduct[$i][intro];?></div>
<div style="display:none" id="p_img<?=$i;?>"><?=$getpic2;?></div>
<? }?>


<div class="clearfix"></div>
</div>


</div>



</div>

<div class="clearfix"></div>
</div>

</div>

</div><!--warpper2 end-->
</div><!--warpper2box end-->


<? require "../footer.php"; ?>

<div class="popbox" >

<div style="position:relative;width:600px;height:411px;margin:0 auto; background:url(/inc/pics/c2-bg.png)">

<div class="popboxintro">
<h2 id="popboxintro_h2">Lime莱姆：</h2>
<p  id="popboxintro_p">Denise女士善用冲突美表现在巧克力上，这款是经典的一种。分明是玫瑰的造型，用的是黑巧克力，及豪迈性格的莱姆酒，混合着柚子的水果香，强烈对比的搭配让人耳目一新，展现多层次口感。牛奶巧克力的甜味，莱姆酒混着柚子的酸香，最后巧克力淡淡的苦，形成又期待又怕受伤害的复杂感情，是爱的魅惑吧！</p>
</div>

<div class="popboximg"><img src="/inc/pics/c2-01.png"></div>

<div class="closepopbox"><img src="/inc/pics/close.png"></div>
</div>

</div>

<div class="popboxbg"></div>


<script>

	$('.closepopbox').click(function(){
		$('.popbox,.popboxbg').hide();
	});
	
	
	function openpopbox(currentid){
	
		$(".popboximg").html('<img src="/upload/product/'+$("#p_img"+currentid).text()+'">');
		$("#popboxintro_h2").text($("#p_title"+currentid).text());
		$("#popboxintro_p").text($("#p_intro"+currentid).text());
		$(".popboxbg,.popbox").show();
		
		
	}
	
	

</script>


</body>
</html>