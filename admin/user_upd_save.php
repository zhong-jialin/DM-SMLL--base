<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("content-type:text/html;charset=utf-8");
require_once ('conn.php');
$id=$_GET['id'];
$u=$_POST['usernameadd'];
$p=$_POST['passwordadd'];
$tel=$_POST['email'];
$sql="update user set username='$u',password='$p',tel='$tel' where id='$id'";
$result= mysqli_query($conn, $sql);
if ($result==1){
    echo "<script>alert('更新成功');location.href='user.php'</script>";
} else {
    echo "<script>alert('更新不成功');location.href='user.php'</script>";
}

