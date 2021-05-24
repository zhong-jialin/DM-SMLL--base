$(function(){
	// 鼠标焦点在离开id名username时触发函数
	$('#username').blur(function(){
		// 创建username的变量
		var username = $('#username').val();
		// 输入框为空时改变user_tip的内容
		if(username==""){
			$('.user_tip').text('请输入账号！');
			// 有数值时调用Ajax
		}else{
			$.ajax({
				// post提交地址
				url:"adduser_check.php",
				// 提交方式
				type:"post",
				// 传递数据 数据表数据的名字：要传递的变量
				data:{username:username},
				// 服务器返回的数据类型
				dataType:"text",
				// 请求成功返回data数据
				success:function(data){
					// $.trim(data)去掉字符串首尾的空白字符
					if($.trim(data)=='yes'){
						$('.user_tip').text('该用户名已存在！');
						return false;
					}else{
						$('.user_tip').empty().text('输入正确');
					}
				}
			});
			
			// $.post("admin_name_check.php",{username:username},function(data){
			// 	if($.trim(data)=='yes'){
			// 			$('.user_tip').addClass("no").text('温馨提示：该用户名已存在！');
			// 			return false;
			// 		}else{
			// 			$('.user_tip').empty('输入正确');
			// 		}
			// },"text");
		}
	})
	$('#pass').blur(function(){
		var pass=$('#pass').val();
		if(pass==''){
			$('.pass_tip').text('请输入密码！');
		}else{
			$('.pass_tip').empty().text('输入正确');
		}
	});

		//email判断
	$('#email').blur(function(){
		var email=$('#email').val();
		// 邮箱正则表达式
        var stction = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(email==""){
			$('.email_tip').addClass("no").text('请输入邮箱！');
		}else if(stction.test(email)==false){
            $('.email_tip').addClass("no").text('请正确格式的邮箱！');
                }else{
			$('.email_tip').empty().text('输入正确');
		}
	});
})