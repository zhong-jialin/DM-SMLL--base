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

        header("Content-type:text/html;charset=utf-8");
        include_once 'dbsql.php';
        $username=$_POST["username"];
        $password=$_POST["password"];
        // $co=$_POST["code"];
        
        session_start();
        $db=new DbMysql();
        $result=$db->select("select count(*) as user from admin where username='$username' and password='$password'");

        foreach ($result as $row){
            if($row['user']){
                echo "<script>alert('登陆成功');location.href='index.php'</script>";
                $_SESSION["username"]=$username;
            }else{
                echo "<script>alert('账号或密码不正确');location.href='login.php'</script>";
            }
        }
        ?>
    </body>
</html>