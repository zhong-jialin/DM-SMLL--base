<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>会员登录</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		
	</head>
	<body>
		<!-- login -->
		<div class="top center">
			<div class="logo center">
				<a href="#" target="_blank"><img src="image/mistore_logo.png" alt=""></a>
			</div>
		</div>
		<form  action="login_save.php" method="post" class="form center">
		<div class="login">
			<div class="login_center">
				<div class="login_top">
					<div class="left fl">用户登录</div>
					<div class="right fr">您还不是我们的用户？<a href="adduser.php" target="_self">立即注册</a></div>
					<div class="clear"></div>
					<div class="xian center"></div>
				</div>
				<div class="login_main center">
					<div class="username">用户名:&nbsp;<input class="shurukuang" type="text" name="username" placeholder="请输入你的用户名"/></div>
					<div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;<input class="shurukuang" type="password" name="password" placeholder="请输入你的密码"/></div>
				</div>
				<div class="login_submit">
					<input class="submit" type="submit" name="submit" value="立即登录" >
				</div>
				
			</div>
		</div>
		</form>
		<footer>
			<div class="copyright">简体 | 繁体 | English | 常见问题</div>
			<div class="copyright">大米公司版权所有-京ICP备10046444-<img src="./image/ghs.png" alt="">京公网安备1101101020202020号-京ICP证110507号</div>

		</footer>
	</body>
</html>