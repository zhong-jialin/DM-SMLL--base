<?php
    header("Content-type:text/html;charset=utf-8");
    require_once 'dbsql.php';
    $id=$_GET['id'];
    $db=new DbMysql();
        
    $fifel=$_FILES['upfile'];
    move_uploaded_file($fifel['tmp_name'],"../upload".$fifel["name"]);
    $picurl="upload/".$fifel['name'];
    $numbers=$_POST['numbers'];
    $title=$_POST['title'];
    $typeid=$_POST['typeid'];
    $kucun=$_POST['kucun'];
    $price=$_POST['price'];
    $content=$_POST['content'];

    
    $db->sql("update product set numbers='$numbers',title='$title',typeid='$typeid',kucun='$kucun',price='$price',picurl='$picurl',content='$content' where id='$id'");
    $result=$db->affected();
    if($result==1){
        echo "<script>alert('产品修改成功');location.href='product.php';</script>";
    }else{
        echo "<script>alert('产品修改失败');location.href='product.php';</script>";
    }
?>
