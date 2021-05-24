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
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">产品添加</strong><small></small></div>
			</div>
                    
			<hr>
         <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="left_txt">当前位置：添加新商品</td>
          </tr>
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
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;商品基本信息</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>
                <form method="post" action="product_addsave.php" enctype="multipart/form-data">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品编号：</td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="numbers" type="text" id="numbers" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">商品的编号,用于商品的管理</td>
              </tr>
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品名称：</td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="title" type="text" id="title" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">商品的名称,用于前台展示使用</td>
              </tr>   <??>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品分类：</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                  <select name="typeid" id="typeid">
                  <?php
                   require_once 'dbsql.php';
                   $db=new DbMysql();
                   $result=$db->select("select * from productype");
                   foreach ($result as $row)
                      {
                   ?>
                      <option value="<?php echo $row['id']?>"><?php echo $row['typename']?></option> 
                    <?php
                        }
                   ?>
                  </select></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">所属分类,用于商品归类</td>
              </tr>
                
               <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品价钱：</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="price" type="text" id="price" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">商品价钱，用于计算总价</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品库存：</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="kucun" type="text" id="kucun" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">如果库存等于0时，则不能进行下单</td>
              </tr>
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品图片：</td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2" class="left_txt">
                   <input type="file" name="upfile"   id="upfile"  size="30">
                </td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品介绍：</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td height="30" colspan="2" bgcolor="#f2f2f2"> 
                  <textarea name="content" id="content" cols="45" rows="5" class="ckeditor"></textarea></td>
                </tr>
              <tr>
                <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="创建" />
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


