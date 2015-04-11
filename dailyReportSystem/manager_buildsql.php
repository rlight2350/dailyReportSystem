<?php
// 包含数据库连接文件
require ('dbconnect.php');
//echo "connect succeed!";



// 取得当前时间和日前
$now = date("Y-m-d");
if($grade==0)
{
	echo "no";
}

$username= array("Jack","Marry","Franklin","Jerry","Peter","Evik","Tom","Justin");
$researchtime='0';
$content="NOP";
$grade='3000';


for ($i = 0; $i<count($username);$i++){
	$strsql="insert into guestbook (username,researchtime,content, posttime, grade) values('".$username[$i]."',".$researchtime.",'".$content."','".$now."',".$grade.")";
	mysql_query($strsql,$conn) or die ("插入数据失败: ".mysql_error());
}
	mysql_close($conn);
	echo "ok";

	
?>