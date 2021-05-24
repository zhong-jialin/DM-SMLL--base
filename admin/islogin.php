<?php
header("content-type:text/html;charset=utf-8");
session_start();
if(empty($_SESSION['username'])){
  echo "<script>alert('请登录后，在访问');location.href='login.php'</script>";	  
}
?>

