<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>用户注册</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">

	</head>
	<body>
		<div class="regist">
			<div class="regist_center">
				<div class="regist_top">
					<div class="left fl">管理员注册</div>
					<div class="right fr"><a href="./index.html" target="_self">大米后台</a></div>
					<div class="clear"></div>
					<div class="xian center"></div>
				</div>
				<form  action="add_save.php" method="post">
					<div class="regist_main center">
						<div class="username">管&nbsp;&nbsp;理&nbsp;&nbsp;员:&nbsp;&nbsp;<input class="shurukuang" type="text" name="usernameadd" placeholder="请输入你的用户名"/><span>请不要输入汉字</span></div>
						<div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="shurukuang" type="password" name="passwordadd" placeholder="请输入你的密码"/><span>请输入6位以上字符</span></div>
						
						<div class="username">手&nbsp;&nbsp;机&nbsp;&nbsp;号:&nbsp;&nbsp;<input class="shurukuang" type="text" name="email" placeholder="请填写正确的手机号"/><span>填写下手机号吧，方便我们联系您！</span></div>
					</div>
					<div class="regist_submit">
						<input class="submit" type="submit" name="submit" value="立即注册" >
					</div>
				</form>
			</div>
		</div>
	</body>
</html>