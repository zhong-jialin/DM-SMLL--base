<?php
header("Content-Type:text/html;charset=utf-8");
$servername="localhost";
$username="root";
$userpass="root";
//创建数据库连接
$conn=new mysqli($servername,$username,$userpass);
if($conn->connect_error){
	die('数据库连接失败：'.$conn->connect_error);
}
//选择要操作数据库
$selectdb=mysqli_select_db($conn,"cms");
if(!$selectdb){
	die('数据库不存在！');
}
//接收用户名admin_name
$admin_name=$_POST['username'];
$sql="select * from user where username='".$admin_name."'";
//执行SQL语句，返回结果集
$result=mysqli_query($conn,$sql);
//计算结果集记录的条数
$num=mysqli_num_rows($result);
if($num>0){
	echo "yes";
}else{
	echo "no";
}
mysqli_close($conn);
?>

