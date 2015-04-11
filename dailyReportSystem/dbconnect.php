<?php
$conn=mysql_connect("127.0.0.1","root","") or die("不能连接数据库服务器： ".mysql_error());
mysql_query("set names utf8");
mysql_select_db("messageboard",$conn) or die ("不能选择数据库: ".mysql_error());

?>