<?php
header("content-type:text/html;charset=utf-8");
require_once 'conn.php';
$id=$_GET["id"];
//
//$db->sql("delete from newstype where id =$id");
//$result=$db->affected();
$result= mysqli_query($conn, "delete from productype where id='$id'");
if($result==1){
    echo "<script>alert('删除成功');location.href='newsType.php'</script>";
}else{
    echo "<script>alert('删除失败');location.href='newsType.php'</script>";
}
?>

