<?php
// 包含数据库连接文件
require ('dbconnect.php');
//include('title.php');  

//echo "按日期查看!";
$browse_year=$_POST['year'];
$browse_month=$_POST['month'];
$browse_day=$_POST['day'];
$browse_date=$browse_year."-".$browse_month."-".$browse_day;
//echo "Response.Write( ' <script   language=javascript> window.location.href=window.location.href; </script> ') ";
?>

<html>
<head>
<title>NISL DAILY REPORT-<?php echo $browse_date;?></title>
<meta http-equiv="content-type" content="text/html; charset=gbk" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

//$sqlpage="select * from guestbook where year='$browse_year' AND month='$browse_month' AND day='$browse_day'";
$sqlpage="select * from guestbook where posttime='".$browse_date."' AND grade != '3000' order by grade";
mysql_query("set names gbk");
$re_page=mysql_query($sqlpage,$conn) or die ("查询数据失败: ".mysql_error());
?>

<div class="container" style="width: 900px;">
<h3 align="center">DAILY REPORT OF SOFTWARE SECURITY RESEARCH TEAM</h3>
 <div style='text-align: right; padding-right:10px; font-size:18px;'> <?php echo $browse_date;?></div>
<table class="table table-bordered table-striped" style="vertical-align:middle;">
        <thead>
          <tr class="tableTitle">
            <th style="text-align:center"align="center">Reporter</th>
            <th style="text-align:center"align="center">Time</th>
            <th style="text-align:center">Content</th>
          </tr>
        </thead>
        <tbody>

<?php
while($row=mysql_fetch_array($re_page)){
	echo "<tr><td align='center'style='vertical-align:middle;'>$row[username]</td>";
	echo "<td align='center' style='vertical-align:middle;'>$row[researchtime]</td>";		
	echo "<td>$row[content]</td></tr>";
}
echo "</tbody></table>";
?>

<table class="table table-bordered table-striped" style="vertical-align:middle;">
        <thead>
          <tr class="tableTitle">
           
          </tr>
        </thead>
        <tbody>
<?php
    $sqlunrefer="select * from guestbook where posttime='".$browse_date."' AND grade = '3000'";
    mysql_query("set names gbk");
    $re_unrefer=mysql_query($sqlunrefer,$conn) or die ("查询数据失败: ".mysql_error());
    $nameUnrefer = "";
    $numberUnrefer = 0;
    while($row_unrefer=mysql_fetch_array($re_unrefer)){
        $nameUnrefer = $row_unrefer['username']." ".$nameUnrefer;
        $numberUnrefer++;
    }
  echo "<tr><td align='center'style='vertical-align:middle;'>未提交名单：(共计 $numberUnrefer 人)</td>";   
  echo "<td align='center'style='vertical-align:middle;'>$nameUnrefer</td></tr>";
  echo "</tbody></table>";
?>    

</body>
</html>