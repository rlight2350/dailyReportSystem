<?php
$conn=mysql_connect("127.0.0.1","root","") or die("�����������ݿ�������� ".mysql_error());
mysql_query("set names utf8");
mysql_select_db("messageboard",$conn) or die ("����ѡ�����ݿ�: ".mysql_error());

?>