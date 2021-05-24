<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- 文字图标库 -->
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="fonts/font.ico">
    <title>大米帮助中心-大米商城</title>
    <style>
        body{
            background-color: #f5f5f5f5;
        }
        #lk_carousel .carousel-item{
	background: no-repeat center center;
	/* 保持图像的纵横比并将图像缩放成将完全覆盖背景定位区域的最小大小。 */
	-webkit-background-size:cover;
	background-size: cover;
}
#lk_carousel .carousel-item img{
	width: 100%;
}
/* -------------媒体查询-------------- */
@media screen and (min-width:900px){
	#lk_carousel .carousel-item{
		height: 260px;
	}
}
#lk_about .col-xl-12 .lk_about_title_cont{
	transition: all .2s linear;
}
#lk_about .col-xl-12 .lk_about_title_cont:hover{
	box-shadow: 0 15px 30px rgba(0, 0, 0,.1);
	transform: translate3d(0,-5px,0);
	color: #ff6700;
	
}
    </style>
</head>
<body>
	<!-----------------头部begin ----------------------->
	<header id="lk_header">
	<!-- 头部上部分开始 -->
		<!-- 本体隐藏 小屏幕隐藏 中大屏幕显示 -->
		<div class="top-bar d-none d-sm-none d-md-block d-lg-block d-xl-lg-block text-center text-light bg-dark">
			<div class="container">
				<div class="row ">
					<div class="top-bar-1 col-md-1">
						<a href="#" class="text-light">
							<span>大米商城</span>
							<img src="img/gz.jpg" alt="" class="loginsss" style="width: 100px;">
						</a>
					</div>
					<div class="top-bar-2 col-md-1">
						<span class="text-light">DAUI</span>
					</div>
					<div class="top-bar-3 col-md-1 col-margin">
						<a href="#" class="text-light">校企合作</a>
					</div>
					<div class="top-bar-3 col-md-1 col-margin">
						<a href="#" class="text-light">企业团购</a>
					</div>
					<div class="top-bar-3 col-md-1 col-margin">
						<a href="#" class="text-light">资质证照</a>
					</div>
					<div class="top-bar-3 col-md-1 col-margin">
						<a href="#" class="text-light">协议规则</a>
					</div>
					<div class="top-bar-3 col-md-1 col-margin">
						<a href="#" class="text-light">智能生活</a>
					</div>
					<!-- <div class="top-bar-3 col-md-2 col-margin">
						<a href="#" class="text-light">Select Location</a>
					</div> -->
					<div class="top-bar-4 col-md-2">
                                            <?php
                                            session_start();
                                            ?>
						<a href="#" class="text-light">用户名:</a>
                                                <a href="usershow.php" class=" ml-2 btn btn-success btn-sm mb-1"><?php echo $_SESSION['username']?></a>
                                                <a href="usershow.php" class=" ml-2 btn btn-success btn-sm mb-1 d-none"><?php echo $_SESSION['password']?></a>
					</div>
					<div class="top-bar-3 col-md-2 col-margin active">
						<i class="fa fa-shopping-cart"></i>
						<a href="#" class="text-light bg-dark"> 购物车</a>
					</div>
				</div>
			</div>
		</div>
	<!-- 头部上部分结束 -->

	<!-- 头部下部分开始 -->
	  <nav class="navbar navbar-expand-lg navbar-light navbar-lk">
		  <div class="container">
			<a class="navbar-brand d-flex justify-content-center align-items" href="#">
				<img src="img/logo2.PNG" class="imglogo" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		  
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mt-2 navbar-tittle" >
				<li class="nav-item active">
					<a class="nav-link" href="index.php">大米商城 <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="shangpinphnoe.php">Red 米</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="shangpinTV.php">电视</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="shangpindq.php">家电</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="shangpinZN.php">路由器</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="shangpinZN.php">智能</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="guanyu.php">服务</a>
					</li>
					<li class="nav-item text-dark">
						<a class="nav-link" href="#">社区</a>
					</li>
				</ul>
                            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center align-items-center searchdiv" action="search.php" method="post">
                                <input class="form-control mr-sm-2" type="search" name="search" placeholder="搜索商品">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">搜索</button>
			</form>
			</div>
		  </div>
	  </nav>
	<!-- 头部下部分结束 -->
	</header>
	<!-----------------头部end ----------------------->
	<div class="container downtab-title">
		<!-- 手机1 -->
		<div class="downtab">
			<div class="row d-flex justify-content-center align-items-center mt-4">
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp1.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米11</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp2.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米10至尊纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp3.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>小米10</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp4.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>小米10青春纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp5.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-cente mt-2" style="font-size: 14px;">
						<span>小米max Alphola</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp2.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>小米11</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 手机2 -->
		<div class="downtab">
			<div class="row d-flex justify-content-center align-items-center mt-4">
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp6.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi note 9</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp7.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 豪华版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp8.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp9.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp10.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8青春版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp11.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8 豪华版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 电视 -->
		<div class="downtab">
			<div class="row d-flex justify-content-center align-items-center mt-4">
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp12.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 82英寸纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">39999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp13.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 82英寸</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">10999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp14.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米透明电视</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">20999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp15.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 65寸OLED</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">19999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp16.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米智能电视 64寸</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">10999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp17.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 65寸</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">29999元起</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 家电 -->
		<div class="downtab">
			<div class="row d-flex justify-content-center align-items-center mt-4">
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp18.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家互联网空调C1</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">1999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp20.png" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家互联网空调C2</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">2999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp19.jpg" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi波轮洗衣机</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">799元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp21.png" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家互联网洗烘机</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">1899元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp22.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家风冷对开门冰箱</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">2199元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp23.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米两门冰箱</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">1999元起</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 路由器 -->
		<div class="downtab">
			<div class="row d-flex justify-content-center align-items-center mt-4">
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp24.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米路由器AX6000</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">599元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp25.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi路由器</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">329元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp26.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>RedmiAX路由器</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">199元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp27.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi路由器 1800</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp28.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米路由器A3000</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">699元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp29.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米路由器B3000</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">996元起</a>
					</div>
				</div>
			</div>
		</div>
		<div class="downtab">
			<div class="row d-flex justify-content-center align-items-center mt-4">
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp6.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi note 9</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp7.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 豪华版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp8.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp9.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp10.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8青春版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img src="img/sp11.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8 豪华版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <!-----------------轮播图begin ----------------------->
	
	<!-- ----------------------------自主服务end------------------------- -->
	<!-----------------广告end ----------------------->
	
    <!-----------------常见问题begin ----------------------->
    <div class="container shanpinpic">
        <h2 class="mt-4">大米智能搭配</h2>
		<div class="container mt-3 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
			    <div class="col-xl-12 col-gl-12 col-md-12 col-sm-12">
					<div class="row  ">
													<?php
														include_once 'dbsql.php';
														include_once 'page.php';
														$db=new DbMysql();
														$result=$db->select("select * from product");
														$infocount=$db->affected();
														$psize=12;
														$page=new Page($infocount, $psize);
														// $sql="select product.*,productype.typename from product inner join productype on product.typeid=productype.id ";
														$sql="select product.* from product where typeid='4'";
														$sql.=$page->limit();
														$result=$db->select($sql);
														foreach($result as $row)
															{
														?>
						<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
							<div class="d-flex justify-content-center mt-5">
								<a href="shopping.php?id=<?php echo $row['id']?>"><img src="<?php echo $row['picurl']?>" class=""></a>
							</div>
							<div class="d-flex justify-content-center mt-4">
								<p><?php echo $row['title']?></p>
							</div>
							<div class="d-flex justify-content-center mt-0">
								<span class="text-muted" style="font-size: 12px;"><?php echo $row['content']?></span>
							</div>
							<div class="d-flex justify-content-center mt-0">
								<span class="text-danger" style="font-size: 12px;"><?php echo $row['price']?> 元起</span>
							</div>				
						</div>
															<?php
														}
														?>
					</div>
			   </div>
			</div>
                                                        <div id="page" class="justify-content-center mt-5">           
                                        分页：
                                    <?php
                                        $page-> pagesinfo();
                                        echo $page->show(1);
                                        ?>
                                    </div>
        </div>

    </div>
	<!-----------------常见问题end ----------------------->
	
	<!-----------------联系begin ----------------------->

	<!-----------------联系end ----------------------->
	
	<!-----------------友情链接begin ----------------------->
	<section id="lk_link" style="background-color: #f5f5f5f5;">
		<div class="container mt-5 ">
			<div class="row d-flex justify-content-center">
				<div class="col-6 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center "  style="border-right: .5px solid gray;">
					<a href="#" class="text-muted" style="font-size: 17px;"> <i class="fa fa-wheelchair-alt fa-2x mr-2"></i>预约服务维修</a>
				</div>
				<div class="col-6 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center" style="border-right: .5px solid gray;">
					<a href="#"  class="text-muted" style="font-size: 17px;"><i class="fa fa-ambulance fa-2x mr-2 "></i>7天退货 15天换货</a>
				</div>
				<div class="col-6 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center"  style="border-right: .5px solid gray;">
					<a href="#"  class="text-muted" style="font-size: 17px;"> <i class="fa fa-cny fa-2x mr-2"></i>45元起免运费</a>
				</div>
				<div class="col-6 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center">
					<a href="#"  class="text-muted" style="font-size: 17px;"> <i class="fa fa-audio-description fa-2x mr-2 "></i>全国联保</a>
				</div>
			</div>
			<div class="mt-4" style="border-bottom: 1px solid #f5f5f5f5;"></div>
		</div>

	</section>
	<!-----------------友情链接end ----------------------->
	
	<!-----------------尾部begin ----------------------->
	<footer id="lk_footer">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-center">
				<div class="col-lg-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
					<div class="row d-flex justify-content-center align-items-center">
						<ul class="offset-lg-2 col-lg-4">
							<li><a href="#">帮助中心</a></li>
							<li><a href="#">账户管理</a></li>
							<li><a href="#">购物指南</a></li>
							<li><a href="#">订单操作</a></li>
							<li><a href="#">售后服务</a></li>
						</ul>
						<ul class="col-lg-4">
							<li><a href="#">线下门店</a></li>
							<li><a href="#">大米之家</a></li>
							<li><a href="#">自组服务</a></li>
							<li><a href="#">订单操作</a></li>
							<li><a href="#">授权体验店</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-5 col-lg-5 text-center">
					<h6>公司地址：广东省上海市清远大学城</h6>
					<h6>联系电话：8848 8888</h6>
					<h6>地址邮箱：admin@DM8848.com</h6>
				</div>
				<div class="col-md-5 d-none d-sm-none d-md-block col-lg-3">
					<h6>联系我们</h6>
					<a href="#"><img src="img/weixin.png" width="45" alt=""></a>
					<a href="#"><img src="img/weibo.png" width="45" alt=""></a>
				</div>
			</div>
		</div>
	</footer>
	<!-----------------尾部end ----------------------->
	
</body>
<script src="js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
<script src="js/index.js"></script>
<script src="js/EasyLazyload.min.js"></script>
	<script>
		// 图片懒加载
	lazyLoadInit();
    lazyLoadInit({
        coverColor:"white",
        showTime:500,
        onLoadBackEnd:function(i,e){
        }
        ,onLoadBackStart:function(i,e){
        }
	});
	
</script>
<script>
		$(function(){
		$('.shanpinpic').mouseover(function(){
            $('.downtab-title .downtab').slideUp("slow");
            // console.log(indexx); 
    	})
	})
</script>
</html>