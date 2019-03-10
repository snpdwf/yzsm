<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','shsdgc','vag2z825','shsdgc');
if (!$link) {
 die("连接失败:".mysqli_connect_error());
}
$name = $_POST['name'];
$tel = $_POST['tel'];
$addr = $_POST['addr'];

if($name == "" || $tel == "" || $addr == "" )
{
 echo "<script>alert('信息不能为空！重新填写');window.location.href='index.html'</script>";
}  else{
 $sql= "insert into mark(name, tel, addr)values('$name','$tel','$addr')";
 //插入数据库的mark表中
	
 if(!(mysqli_query($link,$sql))){
   echo "<script>alert('数据插入失败');window.location.href='zhuce.html'</script>";
 }else{
   echo "<script>alert('注册成功！)</script>";
 }
}
?>
<script>alert('信息提交完成');window.location.href='index.html'</script>
</body>
</html>