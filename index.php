<?php
    include 'admin/islogin.php';
?>
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
	<title>大米官方网站</title>
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
					<div class="top-bar-4 col-md-3">
                                            <?php
                                            session_start();
                                            ?>
						<a href="#" class="text-light">用户名:</a>
                                                <a href="usershow.php" class=" ml-2 btn btn-success btn-sm mb-1"><?php echo $_SESSION['username']?></a>
                                                <a href="usershow.php" class=" ml-2 btn btn-success btn-sm mb-1 d-none"><?php echo $_SESSION['password']?></a>
					</div>
					<div class="top-bar-3 col-md-2 col-margin active">
						<i class="fa fa-shopping-cart"></i>
						<a href="#" class="text-light bg-dark">购物车</a>
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
	<section id="lk_carousel" class="carousel slide" data-ride="carousel" style="position: relative;">
		<!-- -------------------------tab商品栏begin----------------------------- -->
		<!-- <div class="tab-headers " id="d-none d-lg-block d-xl-block">
			<div class="container">
				<div class="row">
					<div class="col-2 ">
						<ul>
							<li class="tab-title"><a href="#" class="text-body " style="border-top: 1px solid #fcf4f4;border-radius: 5px;" >手机</a></li>
							<li class="tab-title"><a href="#" class="text-body ">笔记本</a></li>
							<li class="tab-title"><a href="#" class="text-body ">平板</a></li>
							<li class="tab-title"><a href="#" class="text-body ">智能穿戴</a></li>
							<li class="tab-title"><a href="#" class="text-body ">智能家居</a></li>
							<li class="tab-title"><a href="#" class="text-body ">智能屏幕</a></li>
							<li class="tab-title"><a href="#" class="text-body ">家庭音箱</a></li>
							<li class="tab-title"><a href="#" class="text-body ">配件</a></li>
							<li class="tab-title"><a href="#" class="text-body " style="border-bottom: 1px solid #fcf4f4;border-radius: 5px;">生态产品</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<!-- -------------------------tab商品栏end----------------------------- -->
		<ol class="carousel-indicators">
			<li data-target="#lk_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#lk_carousel" data-slide-to="1"></li>
			<li data-target="#lk_carousel" data-slide-to="2"></li>
			<!-- <li data-target="#lk_carousel" data-slide-to="3"></li> -->
			<li data-target="#lk_carousel" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active " data-sm-img="img/lun1(1).jpg" data-lg-img="img/lun1.jpg"></div>
			<div class="carousel-item" data-sm-img="img/lun2(1).jpg" data-lg-img="img/lun2.jpg"></div>
			<div class="carousel-item" data-sm-img="img/lun3(1).jpg" data-lg-img="img/lun3.jpg"></div>
			<!-- <div class="carousel-item" data-sm-img="img/lun4(1).jpg" data-lg-img="img/lun4.jpg"></div> -->
			<div class="carousel-item" data-sm-img="img/lun5(1).jpg" data-lg-img="img/lun5.jpg"></div>
		</div>
		<a class="carousel-control-prev" href="#lk_carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#lk_carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</section>
	<!-----------------轮播图end ----------------------->
		<!-- 电梯导航 -->
	<div class="fixtool">
		<ul>
			<li class="current">
				<i class="fa fa-mobile-phone fa-lg"></i>
				
					手机通讯
			</li>
			<li>
				<i class="fa fa-tv"></i>
					智能家电
			</li>
			<li>
				<i class="fa fa-bed"></i>
					智能家居
			</li>
			<li style="border-bottom: 1px solid #f5f5f5;">
				<i class="fa fa-podcast"></i>
					智能搭配
			</li>
			<li class="backtop" style="margin-top: 20px;">
				<i class="fa fa-arrow-up"></i>
					回到顶部
			</li>
		</ul>
	</div>
	<!-----------------广告begin ----------------------->
	<section id="lk_hot">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12 align-items-center d-flex justify-content-center">
					<div class="rounded overflow-hidden ">
						<div class="g-cont mt-2">
							<a href="#"><img src="img/gg1.jpg" alt="" width="316" height="155"></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12 align-items-center d-flex justify-content-center">
					<div class="rounded overflow-hidden ">
						<div class="g-cont mt-2">
							<a href="#"><img src="img/gg2.jpg" alt="" width="316" height="155"></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12 align-items-center d-flex justify-content-center">
					<div class="rounded overflow-hidden ">
						<div class="g-cont mt-2">
							<a href="#"><img src="img/gg3.jpg" alt="" width="316" height="155"></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3  col-sm-6 col-12 align-items-center d-flex justify-content-center">
					<div class="rounded overflow-hidden">
						<div class="g-cont mt-2">
							<a href="#"><img src="img/gg1.jpg" alt="" width="316" height="155"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ---------------------小米闪购------------------ -->
        
	<!-- ---------------------小米闪购------------------ -->
	<!-- ----------------------------热门商品begin------------------------- -->
	<div class="dm_hot" style="background-color: #f5f5f5f5">
			<div class="text-center mt-5 mb-2">
				<h2><strong>热门商品</strong></h2>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-4">
						<div class="media d-flex align-items-center m-1 mb-3 bg-light p-2">
							<div class="media-left mr-2">
								<img src="img/sp5.webp" alt="" class="media-object img-fluid" width="120">
							</div>
							<div class="media-body">
								<h6 class="media-heading">
									<span class="text-success">【新】</span>
									大米10
								</h6>
								<p class="text-muted">
									麒龙865处理器
								</p>
								<p class="text-muted">
									秒快充 秒变焦 很至尊
								</p>
								<p class="text-danger">
									3799 元
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="media d-flex align-items-center m-1 mb-3 bg-light p-2">
							<div class="media-left mr-2">
								<img src="img/2.PNG" alt="" class="media-object rounded-circle img-fluid" width="120">
							</div>
							<div class="media-body">
								<h6 class="media-heading">
									<span class="text-success">【新】</span>
									大米11
								</h6>
								<p class="text-muted">
									麒龙876处理器	
								</p>
								<p class="text-muted">
									91Hz刷新率+181Hz采样率
								</p>
								<p class="text-danger">
									4799 元
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="media d-flex align-items-center m-1 mb-3 bg-light p-2">
							<div class="media-left mr-2">
								<img src="img/sp4.webp" alt="" class="media-object img-fluid " width="120">
							</div>
							<div class="media-body">
								<h6 class="media-heading">
									<span class="text-success">【新】</span>
									大米12
								</h6>
								<p class="text-muted">
									麒龙888处理器
								</p>
								<p class="text-muted">
									6000mah 长续航
								</p>
								<p class="text-danger">
									5799 元
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="media d-flex align-items-center m-1 mb-3 bg-light p-2">
							<div class="media-left mr-2">
								<img data-lazy-src="img/sp3.webp" alt="" class="media-object rounded-circle img-fluid " width="120">
							</div>
							<div class="media-body">
								<h6 class="media-heading">
									<span class="text-success">【新】</span>
									大米13
								</h6>
								<p class="text-muted">
									麒龙999处理器
								</p>
								<p class="text-muted">
									天玑处理 888u
								</p>
								<p class="text-danger">
									6799 元
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="media d-flex align-items-center m-1 mb-3 bg-light p-2">
							<div class="media-left mr-2">
								<img data-lazy-src="img/sp6.webp" alt="" class="media-object  img-fluid " width="120">
							</div>
							<div class="media-body">
								<h6 class="media-heading">
									<span class="text-success">【新】</span>
									大米14
								</h6>
								<p class="text-muted">
									麒龙001处理器
								</p>
								<p class="text-muted">
									麒龙888 | 2k 曲面屏
								</p>
								<p class="text-danger">
									7799 元
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-4">
						<div class="media d-flex align-items-center m-1 mb-3 bg-light p-2">
							<div class="media-left mr-2">
								<img data-lazy-src="img/sp7.webp" alt="" class="media-object rounded-circle img-fluid " width="120">
							</div>
							<div class="media-body">
								<h6 class="media-heading">
									<span class="text-success">【新】</span>
									大米15
								</h6>
								<p class="text-muted">
									麒龙666处理器
								</p>
								<p class="text-muted">
									夜景相机 六速变档
								</p>
								<p class="text-danger">
									9799 元
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- ----------------------------热门商品end------------------------- -->
	<!-----------------广告end ----------------------->
	
	<!-----------------会员专享begin ----------------------->
	<section id="lk_produce">
		<div class="container">
			<div class="row">
				<div style="overflow: auto;">
					<ul class="nav nav-tabs d-flex justify-content-center align-items-center" id="myTab" role="tablist">
						<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">会员专享</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile5" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile6" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile8" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile9" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile10" role="tab" aria-controls="contact" aria-selected="false">会员专享</a>
						</li>
					</ul>
				</div>
				  <!-- 内容 -->
				  <div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#">
											<img src="img/hy/1.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#" style="right: 0;">
											<img src="img/hy/2.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#">
											<img src="img/hy/3.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#" style="right: 0;">
											<img src="img/hy/4.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 3</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#">
											<img src="img/hy/5.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#" style="right: 0;">
											<img src="img/hy/6.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile7" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#">
											<img src="img/hy/7.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile8" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#" style="right: 0;">
											<img src="img/hy/8.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile9" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#">
											<img src="img/hy/9.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile10" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
								</div>
								<div class="col-md-8">
									<!-- 标题 -->
									<div id="pd_one-1" class="mb-4">
										<a href="#" style="right: 0;">
											<img src="img/hy/10.jpg" alt="二维码" width="140">
										</a>
										<div class="text-muted ml-2 mt-2">
											<div><h3>小米 1 2</h3></div>
											<div><h4>骁龙888</h4></div>
										</div>
									</div>
									<div id="pd_one_2" class="breadcrumb lead" >
										<h5>「1月8日上午10点开售，标配不提供充电器和数据线，如需请选择套装版」</h5>
										<h5>「2K AMOLED 四曲面柔性屏｜1亿像素三摄｜时尚轻薄机身」</h5>
										<h5>「55W 有线闪充｜50W 无线闪充｜10W 无线反充」</h5>
									</div>
									<h1 id="pd_one_3" class="mb-4">
										<h4>
											哈曼卡顿音频认证
											<span class="text-danger">/</span>
											立体声双扬声器
										</h4>
									</h1>
									<div id="pd_one_4" class="mt-3">
										<button class="btn btn-primary btn-lg" type="submit" style="margin-right: 10px;">
											立即预购
										</button>
										<button class="btn btn-default btn-lg" type="submit">了解更多</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-----------------会员专享end ----------------------->
	
	<!-----------------商品begin ----------------------->
	<section id="lk_about" style="background-color: #f5f5f5;">
		<div class="container ww" >
			<a href="#">
				<img data-lazy-src="img/spp1.jpg" alt="" style="width: 100%;">
			</a>
		</div>
		<div class="container  mt-2 justify-content-center w">
			<div class="row">
				<div class="col-auto mr-auto">
					<span  style="color: #333333; font-size: 25px;">手机</span>
				</div>
				<div class="col-auto mt-2">
					<a  href="shangpinphnoe.php" class="text-muted ml-5" style="font-size: 15px;">查看更多 <i class="fa fa-chevron-circle-right"></i></a>
				</div>	
			</div>
		</div>
		<div class="container mt-2 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
			  <div class="col-2 d-none d-md-none d-gl-block d-xl-block" style="padding: 0px;">
				<div class="lk_about_title"><img data-lazy-src="img/spl1.webp" width="240px" height="580px"></div>
			  </div>
			  <div class="col-xl-10 col-gl-10 col-md-12 col-sm-12">
				<div class="row ml-xl-5 ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp1.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>小米11</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">麒龙888 | 2k 曲面屏</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp2.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>Note 9</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">夜景相机 六速变档</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp3.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>Note 9 pro</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">天玑处理 888u</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">1888元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp4.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>Note 9 5G</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">6000mah 长续航</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">999元起</span>
						</div>				
					</div>
				</div>
				<div class="row mt-2 ml-xl-5">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1"style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp5.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米10 至尊版</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">秒快充 秒变焦 很至尊</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">5999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp6.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米11 至尊纪念版</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">反正就是很至尊</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp7.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米K30 至尊版</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">弹出 天玑 旗舰</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp8.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>小麦11</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">麒龙1111 | 8k 全面屏</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">9999元起</span>
						</div>				
					</div>
				</div>
			  </div>
			</div>
		</div>
		<!-- 家电 -->
		<div class="container mt-5 ww" >
			<a href="#">
				<img data-lazy-src="img/sphl2.webp" alt="" style="width: 100%;">
			</a>
		</div>
		<div class="container  mt-2 justify-content-center  w">
				<div class="row">
					<div class="col-auto mr-auto">
						<span  style="color: #333333; font-size: 25px;">家电</span>
					</div>
					<div class="col-auto mt-2">
						<a  href="shangpinTV.php" class="text-muted ml-5" style="font-size: 15px;">查看更多 <i class="fa fa-chevron-circle-right"></i></a>
					</div>	
				</div>
		</div>
		<div class="container mt-2 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
				<div class="col-2 d-none d-md-none d-gl-block d-xl-block" style="padding: 0px;">
					<div class="row">
						<div class="col-12 lk_about_title">
							<img data-lazy-src="img/ds1.webp" style="width: 126%;height: 285px;">
						</div>
						<div class="col-12 lk_about_title mt-sm-2">
							<img data-lazy-src="img/ds2.webp" style="width: 126%;height: 285px;">
						</div>
					</div>
				</div>
			  <div class="col-xl-10 col-gl-10 col-md-12 col-sm-12">
				<div class="row ml-xl-5 ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp12.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>电视</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">4K画质 细腻如真</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp13.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米AE86</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">高清液晶屏</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp14.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米AE86x</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">潮流</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp20.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米电视6A</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">大屏幕更享受</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
				</div>
				<div class="row mt-2 ml-xl-5">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1"style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp36.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米潮流电视</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">土到极致便是潮</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp37.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米电视？s</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">4k 人工智能语音</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp38.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米时尚电视の6</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">震撼大屏 全面时尚</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">2999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp39.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米全屏电视の2</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">人工智能设计</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">399元起</span>
						</div>				
					</div>
				</div>
			  </div>
			</div>
		</div>
				<!-- 智能 -->
		<div class="container mt-4 ww" >
			<a href="#">
				<img data-lazy-src="img/sphl3.webp" alt="" style="width: 100%;">
			</a>
		</div>
		<div class="container  mt-2 justify-content-center  w">
			<div class="row">
				<div class="col-auto mr-auto">
					<span  style="color: #333333; font-size: 25px;">电器</span>
				</div>
				<div class="col-auto mt-2">
					<a  href="shangpindq.php" class="text-muted ml-5" style="font-size: 15px;">查看更多 <i class="fa fa-chevron-circle-right"></i></a>
				</div>	
			</div>
		</div>
		<div class="container mt-2 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
				<div class="col-2 d-none d-md-none d-gl-block d-xl-block" style="padding: 0px;">
					<div class="row">
						<div class="col-12 lk_about_title">
							<img data-lazy-src="img/ds3.webp" style="width: 126%;height: 285px;">
						</div>
						<div class="col-12 lk_about_title mt-sm-2">
							<img data-lazy-src="img/ds4.webp" style="width: 126%;height: 285px;">
						</div>
					</div>
				</div>
			  <div class="col-xl-10 col-gl-10 col-md-12 col-sm-12">
				<div class="row ml-xl-5 ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp12.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米荣耀电视</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">够大 才有料</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp13.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米电视</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">够大 才有料</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp14.webp" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米透明电视</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">够大 才有料</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">3999元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp20.png" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米空调</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">一晚低至一度电</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">399元起</span>
						</div>				
					</div>
				</div>
				<div class="row mt-2 ml-xl-5">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1"style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp40.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米1智能手机</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">晓龙111 | 260p</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">399元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp41.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米大爱音箱</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">遥控家电</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">99元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp42.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>米家智能窗帘</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">米家智能窗帘</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">799元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp43.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米体脂秤</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">轻松查看脂肪率</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">99元</span>
						</div>				
					</div>
				</div>
			  </div>
			</div>
		</div>
				<!-- 搭配 -->
		<div class="container mt-4 ww" >
			<a href="#">
				<img data-lazy-src="img/sphl4.webp" alt="" style="width: 100%;">
			</a>
		</div>
		<div class="container  mt-2 justify-content-center w">
			<div class="row">
				<div class="col-auto mr-auto">
					<span  style="color: #333333; font-size: 25px;">搭配</span>
				</div>
				<div class="col-auto mt-2">
					<a  href="shangpinZN.php" class="text-muted ml-5" style="font-size: 15px;">查看更多 <i class="fa fa-chevron-circle-right"></i></a>
				</div>
			</div>
		</div>
		<div class="container mt-2 lk_about_title" style="background-color: #f5f5f5;">
			<div class="row ">
				<div class="col-2 d-none d-md-none d-gl-block d-xl-block" style="padding: 0px;">
					<div class="row">
						<div class="col-12 lk_about_title">
							<img data-lazy-src="img/ds5.webp" style="width: 126%;height: 285px;">
						</div>
						<div class="col-12 lk_about_title mt-sm-2">
							<img data-lazy-src="img/ds6.webp" style="width: 126%;height: 285px;">
						</div>
					</div>
				</div>
			  <div class="col-xl-10 col-gl-10 col-md-12 col-sm-12">
				<div class="row ml-xl-5 ">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp99.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>真 @ 蓝牙耳机</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">买就完事了</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">666元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp100.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>高速无线充套装</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">快速无线充电</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">149元</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp101.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米无线蓝牙耳机</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">自动妙莲 拿起就用</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">99元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 col-6 mt-sm-1 lk_about_title_cont" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp102.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>大米无线蓝牙耳机</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span style="font-size: 12px;">全面升级 智慧无线</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">399元起</span>
						</div>				
					</div>
				</div>
				<div class="row mt-2 ml-xl-5">
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp103.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>redm充电宝 10000mAH</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">10000maH大容量</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">59元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp104.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>redm充电宝 2000M</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">大容量 可上天</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">99元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp105.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>小米插线板 5空位</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">多重安全保护</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">39元起</span>
						</div>				
					</div>
					<div class="col-xl-3 col-gl-3 col-md-6 col-sm-6 d-none d-xl-block d-gl-block d-md-block col-6 lk_about_title_cont mt-sm-1" style="background-color: white;border-left: 15px solid #f5f5f5f5;height: 279px;">
						<div class="d-flex justify-content-center mt-5">
							<a href="#"><img data-lazy-src="img/sp106.jpg" class=""></a>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<p>小米降噪耳机</p>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-muted" style="font-size: 12px;">无线降噪 静无止静</span>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<span class="text-danger" style="font-size: 12px;">399元起</span>
						</div>				
					</div>
				</div>
			  </div>
			</div>
		</div>
	</section>
	<!-----------------商品end ----------------------->
	
	<!-----------------友情链接begin ----------------------->
	<section id="lk_link">
		<div class="container mt-3 ">
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
<script src="js/index3.js"></script>
<script src="js/data.js"></script>
<script src="js/vue.js"></script>
<script src="js/index.js"></script>
<script src="js/EasyLazyload.min.js"></script>

	<script>
		// 图片懒加载
    lazyLoadInit({
        coverColor:"transparent",
        showTime:500,
        onLoadBackEnd:function(i,e){
        }
        ,onLoadBackStart:function(i,e){
        }
	});
	
</script>

</html>