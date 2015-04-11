<?php
require ('dbconnect.php');
//echo "connect succeed!";

$username=$_POST['username'];
$researchtime=$_POST['researchtime'];
$content=$_POST['content'];
$content=str_replace("'","\'",$content);
$content=str_replace('<','&lt;',$content);
$content=str_replace('>','&gt;',$content);

$now = date("Y-m-d");



switch($username)
{
	case "Jack": 
		$grade='2013';
    	break;
	case "Marry": 
		$grade='2013';
    	break;
	case "Franklin": 
		$grade='2014';
    	break;
	case "Jerry": 
		$grade='2014';
    	break;
	case "Peter": 
		$grade='2015';
    	break;
    case "Evik": 
		$grade='2015';
    	break;
	case "Tom": 
		$grade='2016';
    	break;
	case "Justin": 
		$grade='2016';
    	break;
	default:
		$grade=0;
	  
}
if($grade==0)
{
	echo "no";
}
$sqlcheck="select * from guestbook where posttime='".$now."'"."and username='".$username."'";
$re_check=mysql_query($sqlcheck,$conn) or die ("查询数据失败: ".mysql_error());
$test=mysql_fetch_array($re_check);
if(!$test){
		$strsql="insert into guestbook (username,researchtime,content, posttime, grade) values('".$username."',".$researchtime.",'".$content."','".$now."',".$grade.")";
	mysql_query($strsql,$conn) or die ("插入数据失败: ".mysql_error());
	}
	else{
	
	$overwrite_con="update guestbook set content='".$content."' where posttime='".$now."' and username='".$username."'";
	mysql_query($overwrite_con,$conn) or die ("重写数据失败: ".mysql_error());
	$overwrite_res="update guestbook set researchtime='".$researchtime."' where posttime='".$now."' and username='".$username."'";
	mysql_query($overwrite_res,$conn) or die ("重写数据失败: ".mysql_error());
	$overwrite_gra="update guestbook set grade='".$grade."' where posttime='".$now."' and username='".$username."'";
	mysql_query($overwrite_gra,$conn) or die ("重写数据失败: ".mysql_error());
	}
	
	$strupdate="update guestbook set content=replace(content,char(10),'<br/>')";
	mysql_query($strupdate,$conn) or die ("更新数据失败: ".mysql_error());
	mysql_close($conn);
	echo "ok";
	
?>