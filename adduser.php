<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>用户注册</title>
		<link rel="stylesheet" type="text/css" href="./css/login.css">
		<style>
			.red{
				color:red;
			}
		</style>

	</head>
	<body>
		<div class="regist">
			<div class="regist_center">
				<div class="regist_top">
					<div class="left fl">用户注册</div>
					<div class="right fr"><a href="./index.html" target="_self">大米商城</a></div>
					<div class="clear"></div>
					<div class="xian center"></div>
				</div>
				<form  action="add_save.php" method="post">
					<div class="regist_main center">
                                            <div class="username">用&nbsp;&nbsp;户&nbsp;&nbsp;名:&nbsp;&nbsp;<input class="shurukuang" id="username" type="text" name="usernameadd" placeholder="请输入你的用户名"/>
                                                    <span class="user_tip"></span></div>
                                                    <div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="shurukuang" id="pass" type="password" name="passwordadd" placeholder="请输入你的密码"/>
                                                    <span class="pass_tip"></span></div>
						
                                                    <div class="username">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:&nbsp;&nbsp;<input class="shurukuang" id="email"  type="text" name="email" placeholder="请填写正确的手机号"/>
                                                    <span class="email_tip"></span></div>
					</div>
					<div class="regist_submit">
						<input class="submit" type="submit" name="submit" value="立即注册" >
					</div>
				</form>
			</div>
		</div>
	</body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/useradd.js"></script>
</html>