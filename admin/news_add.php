<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/amazeui.min.css" />
		<link rel="stylesheet" href="css/admin.css" />
                <link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
	</head>

	<body>
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新闻分类添加</strong><small></small></div>
			</div>
                    
			<hr>
                                 <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;添加新闻</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>
            <form method="post" action="news_addsave.php">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">			
              <tr>
                <td height="30" align="right" class="left_txt2">新闻类名：</td>
                <td>&nbsp;</td>
                <td height="30"><input type="text" name="typename" size="30" id="password" /></td>
              </tr>
              <tr>
                <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="添加" />
                   &nbsp;
                   <input type="reset" name="button2" id="button2" value="重置" /></td>
                </tr>
            </table>
           </form>
            </td>
          </tr>
        </table>
		</div>
            
	</body>
</html>

