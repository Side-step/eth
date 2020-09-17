
<html lang="ko"><head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="target-densitydpi=medium-dpi, width=720">
<title>ETHERPLUS - OPEN TO ALL, PLUS TO ALL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--공통 css-->
<link rel="stylesheet" href="./css/default.css">	
<!--공통 css-->
</head>
<body>

<style>
.bgbgwrap_sub{height:180px;}
.head_tong{width:100%;height:180px;background: url(./images/toptopbgpng180.png);position:absolute;
left:0;top:0;}


a.logomobile{display:block;width:247px;height:100px;background: url(./images/mlogos24767png.png) no-repeat center;margin:0 auto;}
.head_in{width:450px;margin:0 auto;height:80px;}
.head_in ul{font-size:0;height:80px;text-align:center;}
.head_in ul li{display:inline-block;padding:0 13px;line-height:80px;height:80px;}
.head_in ul a{font-size:24px;color:#fff;}
.tcenter{text-align:center;}

</style>
<!--서브 해더-->

<div class="head_tong">
	<a href="/" class="logomobile"></a>
	<div class="head_in">
		<ul>
			<li><a href="./index.php">HOME</a></li>
			<li><a href="./login.php">LOGIN</a></li>
			<li><a href="./guide.php">GUIDE</a></li>

		</ul>
	</div>
</div>
<div style="height:180px;"></div>

<style>
	.login_wrap{width:640px;margin:0 auto;}
	.login_wrap h2{font-size:40px;color:#fff;text-align:center;}
	.login_form{width:640px;margin:0 auto;}
	.id_input{display:block;border:1px solid #fff;width:100%;height:80px;padding:0 30px;font-size:23px;
color:#fff;background:url(../images/too_bt.png)}

	input::placeholder {
	  color: #555;

	}
</style>
<!--서브 해더-->
<div style="height:150px;"></div>
<div class="login_wrap">
	<h2>LOGIN</h2>
	<div style="height:50px;"></div>
	<form action="index.php" method="get" class="login_form">
		<input type="text" value="" class="id_input" name="own" placeholder="Input Your ETH Address">
		<div style="height:50px;"></div>
		<a href="javascript:;" class="loginbt">
			<img src="./images/loginbt_img50060mm.png" alt="">
		</a>
	</form>	
</div>
<div style="height:150px;"></div>

<script>
	$(".loginbt").click(function(){
		
		if(!$(".id_input").val()){
			alert('input Your ETH Address!!');
			$(".id_input").focus();
			return false;
		}else{
			$(".login_form").submit();
		}
	})
</script>

<!--footer-->
<div class="footer">
	<div class="footer_in">
		<div style="height:33px;"></div>
		<a href="/"><img src="./images/footer_icon_1_8383_on.png" alt=""></a>
		<span style="padding:0 15px;"></span>
		<a href="/"><img src="./images/footer_icon_1_8383_off.png" alt=""></a>
	</div>
</div>
<!--footer-->

<!--공통 js-->
<script src="./js/main.js"></script>
<!--공통 js-->

</body>
</html>