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
<div id="storybox">

<div class="storytop"><img src="/inc/pics/story03.jpg"></div>
<div class="storybottom">

<div class="storybottomleft">
<div class="storybottomtitle"><span style="font-size:36px">■</span> 吉丽嘉多的品牌故事</div>
<div class="storybottomcontent">
    <p>“Delikado”是法语“deli”(delicieux)意为“精致可口的”与“kado”(cadeau)意指为“礼物”的复合字，代表赠礼者对受礼者传达一份法式浪漫和匠心巧思的心意。</p>
    <p>“吉丽嘉多”乃“Delikado”的音译，代表“吉祥”、“美丽”与“嘉惠多多”的中国传统吉祥话，能带来好运与福慧，也是“Delikado”之最佳注解。</p>
    
    <p>“<img src="/inc/pics/logoicon.jpg" border='0'>”图腾意境：</p>
      <p>a.看似个鸟巢，代表家庭圆满幸福</p>
      <p>b.看似条小船，代表着事事顺心如意</p>
      <p>c.看似个元宝，招来好运与财气</p>
      <p>d.看似一双手，象征送礼者诚心捧着精美礼物</p>
      <p>&nbsp;&nbsp;"Delikado"送给你</p>
</div>
</div>

<div class="storybottomright">
<div class="storybottomtitle"><span style="font-size:36px">■</span> 吉丽嘉多的使命与优势</div>
<div class="storybottomcontent">
 1、精选进口优质高档巧克力与甜点
    <p>Import Selected Finest Chocolates and Desserts</p>
 2、建造世界名牌巧克力工厂与中国消费者的良好交易平台
    <p>Build up Chocolates Gallery in China</p>
 3、配以引导风潮的精美礼盒包装
    <p>Create Fashion Style packages</p> 
 4、提供高性价比的精致礼物给客户
    <p>Provide High Performance/cost Ratio Luxirious</p>  
    <p>Gifts to customers</p>
     
    <p>吉麗嘉多在此与大家分享那份温馨甜蜜的感觉，更希望所有收到礼物的朋友们能够得到一份最好的祝福：</p>
    <p>健康 美丽 与拥有多姿多彩的品味生活！</p>
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