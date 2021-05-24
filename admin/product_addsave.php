<?php
    header("Content-type:text/html;charset=utf-8");
    require_once 'dbsql.php';
    
    $fifel=$_FILES['upfile'];
    move_uploaded_file($fifel['tmp_name'],"../upload".$fifel["name"]);
    $picurl="upload/".$fifel['name'];
    $numbers=$_POST['numbers'];
    $title=$_POST['title'];
    $typeid=$_POST['typeid'];
    $kucun=$_POST['kucun'];
    $price=$_POST['price'];
    $content=$_POST['content'];

    $addtime=time();
    
    $db=new DbMysql();
    $db->sql("insert into product(numbers,title,typeid,kucun,price,picurl,content)values('$numbers','$title','$typeid','$kucun','$price','$picurl','$content')");
    $result=$db->affected();
    if($result==1){
        echo "<script>alert('产品添加成功');location.href='product.php';</script>";
    }else{
        echo "<script>alert('产品添加失败');location.href='product.php';</script>";
    }
?>

