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
							<img data-lazy-src="img/gz.jpg" alt="" class="loginsss" style="width: 100px;">
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
				<img data-lazy-src="img/logo2.PNG" class="imglogo" alt="">
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
						<a class="nav-link" href="guanyu.html">服务</a>
					</li>
					<li class="nav-item text-dark">
						<a class="nav-link" href="#">资讯</a>
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
					<img data-lazy-src="img/sp1.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米11</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp2.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米10至尊纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp3.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>小米10</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp4.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>小米10青春纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp5.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-cente mt-2" style="font-size: 14px;">
						<span>小米max Alphola</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp2.webp" alt="" class="mt-2" style="width: 100%;">
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
					<img data-lazy-src="img/sp6.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi note 9</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp7.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 豪华版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp8.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp9.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp10.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8青春版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp11.webp" alt="" class="mt-2" style="width: 100%;">
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
					<img data-lazy-src="img/sp12.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 82英寸纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">39999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp13.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 82英寸</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">10999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp14.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米透明电视</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">20999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp15.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米电视 65寸OLED</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">19999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp16.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 13px;">
						<span>大米智能电视 64寸</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">10999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp17.webp" alt="" class="mt-2" style="width: 100%;">
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
					<img data-lazy-src="img/sp18.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家互联网空调C1</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">1999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp20.png" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家互联网空调C2</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">2999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp19.jpg" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi波轮洗衣机</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">799元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp21.png" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家互联网洗烘机</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">1899元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp22.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>米家风冷对开门冰箱</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">2199元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp23.webp" alt="" class="mt-2" style="width: 100%;">
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
					<img data-lazy-src="img/sp24.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米路由器AX6000</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">599元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp25.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi路由器</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">329元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp26.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>RedmiAX路由器</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">199元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp27.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi路由器 1800</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp28.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>大米路由器A3000</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">699元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp29.webp" alt="" class="mt-2" style="width: 100%;">
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
					<img data-lazy-src="img/sp6.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi note 9</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp7.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 豪华版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp8.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 9 纪念版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp9.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp10.webp" alt="" class="mt-2" style="width: 100%;">
					<div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 14px;">
						<span>Redmi NB 8青春版</span>
					</div>
					<div class="d-flex justify-content-center align-items-center">
						<a href="#" class="text-danger">3999元起</a>
					</div>
				</div>
				<div class="col-2 " style="width: 100px;height: 230px;">
					<img data-lazy-src="img/sp11.webp" alt="" class="mt-2" style="width: 100%;">
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
	<section id="lk_carousel" class="carousel slide" data-ride="carousel" style="position: relative;">
		<!-- -------------------------tab商品栏begin----------------------------- -->
        <!-- -------------------------tab商品栏end----------------------------- -->
        <div class="container mt-3">
		<ol class="carousel-indicators">
			<li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#lk_carousel" data-slide-to="1"></li>
			<li data-target="#lk_carousel" data-slide-to="2"></li>
			<!-- <li data-target="#lk_carousel" data-slide-to="3"></li> -->
			<li data-target="#lk_carousel" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active " data-sm-img="img/ser.webp" data-lg-img="img/ser.webp"></div>
			<div class="carousel-item" data-sm-img="img/ser2.webp" data-lg-img="img/ser2.webp"></div>
			<div class="carousel-item" data-sm-img="img/ser3.webp" data-lg-img="img/ser3.webp"></div>
			<!-- <div class="carousel-item" data-sm-img="img/lun4(1).jpg" data-lg-img="img/lun4.jpg"></div> -->
			<div class="carousel-item" data-sm-img="img/ser4.webp" data-lg-img="img/ser4.webp"></div>
		</div>
		<a class="carousel-control-prev" href="#lk_carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#lk_carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
        </a>
    </div>
	</section>
	<!-----------------轮播图end ----------------------->
		<!-- 电梯导航 -->

	<!-----------------广告begin ----------------------->
    <!-- ----------------------------自主服务begin------------------------- -->
    <section id="lk_about" style="background-color: #f5f5f5;">
		<div class="container  mt-5 justify-content-center  w">
			<div class="d-flex justify-content-center align-items-center"><span style="color: #333333; font-size: 25px;">自组服务</span></div>
		</div>
		<div class="container mt-2 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
			  <div class="col-xl-12 col-gl-12 col-md-12 col-sm-12">
				<div class="row  ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp1.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>申请售后服务</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">一键预约，快速维修</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp2.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>订单查询</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">购物信息，快速搜索</span>
						</div>					
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp3.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>大米账户</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">重铸密码，安全保护</span>
						</div>					
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp4.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>保障服务</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">碎屏延保，双重保障</span>
						</div>					
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6  col-6 lk_about_title_cont mt-sm-1"style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp5.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>以旧换新</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">边界交易，价格暴涨</span>
						</div>					
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6  col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp6.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>付费服务</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">安全服务，手机维修</span>
						</div>					
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6  col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp7.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>售后政策</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">条款说明，安心保障</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sersp8.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<h5><strong>查询真伪</strong></h5>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<span class="text-muted" style="font-size: 12px;">辨别真伪，放心使用</span>
						</div>					
					</div>
				</div>
			  </div>
			</div>
		</div>
		<!-- 家电 -->
        <div class="container  mt-5 justify-content-center  w">
			<div class="d-flex justify-content-center align-items-center"><span style="color: #333333; font-size: 25px;">产品支持</span></div>
		</div>
		<div class="container mt-3 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
			  <div class="col-xl-12 col-gl-12 col-md-12 col-sm-12">
				<div class="row  ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp1.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp2.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp3.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp4.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp5.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp6.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp7.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-2 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/serversp8.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-1">
							<p class="text-muted" style="font-size: 16px;">大米手机</p>
						</div>			
					</div>
				</div>
			  </div>
			</div>
        </div>
        <!-- ----------------------- -->
        <div class="container  mt-5 justify-content-center  w">
			<div class="d-flex justify-content-center align-items-center"><span style="color: #333333; font-size: 25px;">自组服务</span></div>
		</div>
		<div class="container mt-3 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
			    <div class="col-6 mt-3">
                    <img src="img/serviceCenter_img2.jpg" alt="" style="width: 100%;">
                </div>
                <div class="col-6 mt-3 align-items-center">
                        <div class="d-flex justify-content-center mt-3">
                            <h5>售后网点</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span class="text-muted" style="font-size: 15px;">小米售后，一站式为您提供售后服务。有售后，放心购是我们的服务宗旨。</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <i class="fa fa-asl-interpreting fa-2x mt-5"></i>
                            <i class="fa fa-asl-interpreting fa-2x mt-5 ml-5"></i>
                            <i class="fa fa-asl-interpreting fa-2x mt-5 ml-5"></i>
                            <i class="fa fa-asl-interpreting fa-2x mt-5 ml-5"></i>
                            <i class="fa fa-asl-interpreting fa-2x mt-5 ml-5"></i>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <p class="text-muted">网点查询 ></p>
                        </div>			
			    </div>
			</div>
		</div>
	</section>
	<!-- ----------------------------自主服务end------------------------- -->
	<!-----------------广告end ----------------------->
	
    <!-----------------常见问题begin ----------------------->
    <section>
		
    </section>
	<!-----------------常见问题end ----------------------->
	
	<!-----------------联系begin ----------------------->
	<section id="lk_about" style="background-color: #f5f5f5;">
		<!-- 联系 -->
        <div class="container  mt-5 justify-content-center  w">
			<div class="d-flex justify-content-center align-items-center"><h2 class="text-muted" style="color: #333333;">联系客服</h2></div>
		</div>
		<div class="container mt-3 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
			  <div class="col-xl-12 col-gl-12 col-md-12 col-sm-12">
				<div class="row  ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont d-flex justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center align-items-center">
							<a href="#"><img src="img/sersp9.png" class=""></a>

							<h5 class="text-muted ml-1 mt-2">7*24人工客服</h5>
						</div>		
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont  d-flex justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center">
							<a href="#"><img src="img/sersp10.png" class=""></a>
							<h5 class="text-muted ml-1 mt-2">大米客服微博</h5>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont  d-flex justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center">
							<a href="#"><img src="img/sersp11.png" class=""></a>
							<h5 class="text-muted ml-1 mt-2">大米服务微信</h5>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont  d-flex justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center">
							<a href="#"><img src="img/sersp11.png" class=""></a>
							<h5 class="text-muted ml-1 mt-2">商城微信客服</h5>
						</div>			
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img src="img/sersp13.png" class=""></a>
							<h5 class="text-muted ml-1">小米商城热线<br>8888-8848</h5>
						</div>
						<div class="d-flex justify-content-center align-items-center mt-5">
							<span class="text-muted ml-1">手机，电视盒子</span>
						</div>
						<div class="d-flex justify-content-center align-items-center">
							<span class="text-muted ml-1">服务时间：24:00-23:00</span>
						</div>
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img src="img/sersp14.png" class=""></a>
							<h5 class="text-muted ml-1">天星金融热线<br>8888-8848</h5>
						</div>
						<div class="d-flex justify-content-center align-items-center mt-5">
							<span class="text-muted ml-1">贷款，保险，理财</span>
						</div>
						<div class="d-flex justify-content-center align-items-center">
							<span class="text-muted ml-1">服务时间：24:00-23:00</span>
						</div>	
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont  justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img src="img/sersp15.png" class=""></a>
							<h5 class="text-muted ml-1">大米移动热线<br>8888-8838</h5>
						</div>
						<div class="d-flex justify-content-center align-items-center mt-5">
							<span class="text-muted ml-1">任我行，吃到饱</span>
						</div>
						<div class="d-flex justify-content-center align-items-center">
							<span class="text-muted ml-1">服务时间：24:00-23:00</span>
						</div>			
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont  justify-content-center align-items-center" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img src="img/sersp16.png" class=""></a>
							<h5 class="text-muted ml-1">大米游戏热线<br>8888-8888</h5>
						</div>
						<div class="d-flex justify-content-center align-items-center mt-5">
							<span class="text-muted ml-1">大米游戏相关</span>
						</div>
						<div class="d-flex justify-content-center align-items-center">
							<span class="text-muted ml-1">服务时间：24:00-23:00</span>
						</div>		
					</div>
				</div>
			  </div>
			</div>
        </div>
        <!-- ----------------------- -->
	</section>

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

</html>