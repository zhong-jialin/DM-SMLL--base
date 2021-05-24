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
            require_once ('conn.php');
            $tid=$_POST['tid'];
            $typename=$_POST['typename'];
            $sd=$_POST['sd'];
            $sql="insert into productype(tid,typename,sd) value('$tid','$typename','$sd')";
            $result= mysqli_query($conn, $sql);
	if($result==1){
        echo "<script>alert('添加产品成功!');location.href='newsType.php'</script>";	
        }else{
  	 echo "<script>alert('添加产品不成功!');location.href='newsType.php'</script>";	
        } 
        ?>
    </body>
</html>



