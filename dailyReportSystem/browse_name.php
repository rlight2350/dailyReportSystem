<?php
require ('dbconnect.php');
//echo "请选择按日期查看!";
//echo "<br/>";
$browse_name=$_POST['username'];

?>
<html>
<head>
<title>NISL DAILY REPORT OF  <?php echo $browse_name ?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container" style="width: 900px;">
<h3 align="center">DAILY REPORT OF SOFTWARE SECURITY RESEARCH TEAM</h3>

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
$sqlpage="select * from guestbook where username='".$browse_name."' order by posttime";
mysql_query("set names gbk");
$re_page=mysql_query($sqlpage,$conn) or die ("查询数据失败: ".mysql_error());

while($row=mysql_fetch_array($re_page)){
	echo "<tr><td align='center' style='vertical-align:middle;'>$row[username]</td>";
	echo "<td align='center' style='vertical-align:middle;'>$row[researchtime]</td>";		
	echo "<td>$row[content]</td></tr>";
}
echo "</tbody></table>";
?>