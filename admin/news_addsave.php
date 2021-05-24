<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'dbsql.php';
            $typename=$_POST['typename'];
            $db=new DbMysql();
            $db->sql("insert into newstype(typename)values('$typename')");
            $result=$db->affected();
	if($result==1){
        echo "<script>alert('添加成功!');location.href='news.php'</script>";	
        }else{
  	 echo "<script>alert('添加不成功!');location.href='news.php'</script>";	
        } 
        ?>
    </body>
</html>


