<?php
$year = date("Y");
$month= date("m");
$day= date("d");
?>
<html>
<head>
	<title>查看日志</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<script src="js/browser.js"></script>
</head>
<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">实验室日志管理系统</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
          <ul class="nav navbar-nav">
            <li><a href="input.php">提交日志</a></li>
            <li class="active"><a href="browse.php">查看日志</a></li>
			<li><a href="search.php">搜索日志</a></li>
			<li><a href="manager.php">日志管理</a></li>
			<li><a href="index.php">返回首页</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>


<body>
<div class="container">

<form class="form-inline" role="name" name="msgform" method="post" action="browse_date.php"  onsubmit="return checkmessage_date()">

	<legend style="font-family:Microsoft Yahei; font-size: 20px; font-weight:bold; ">查看日志</legend>    
    <!--<div class="form-group">-->
    <label for="selectDate" style="font-family:Microsoft Yahei; font-size: 17px; font-weight:noraml; width:100%; padding-bottom:20px;">请选择日期查看</label>
    
    	<select class="form-control" name="year"  class="form-control" id="selectDate" style="width:15%;">
	  <option><?php echo $year?></option>	   
	  <option>2014</option>
	  <option>2015</option>
	  <option>2016</option>
	  </select>
	  <select class="form-control" name="month" size="1" id="selectDate" style="width:15%;" >
	  <option><?php echo $month?></option>
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	  <option>6</option>
	  <option>7</option>
	  <option>8</option>
	  <option>9</option>
	  <option>10</option>
	  <option>11</option>
	  <option>12</option>
	  </select>
	  <select class="form-control" name="day" size="1" id="selectDate" style="width:15%;">
	  <option><?php echo $day?></option>
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	  <option>6</option>
	  <option>7</option>
	  <option>8</option>
	  <option>9</option>
	  <option>10</option>
	  <option>11</option>
	  <option>12</option>
	  <option>13</option>
	  <option>14</option>
	  <option>15</option>
	  <option>16</option>
	  <option>17</option>
	  <option>18</option>
	  <option>19</option>
	  <option>20</option>
	  <option>21</option>
	  <option>22</option>
	  <option>23</option>
	  <option>24</option>
	  <option>25</option>
	  <option>26</option>
	  <option>27</option>
	  <option>28</option>
	  <option>29</option>
	  <option>30</option>
	  <option>31</option>
	  </select>	
	 <!-- </div> -->
	  <br>
		<button type="submit" class="btn btn-default" name="Submit" style="margin-top:20px;">查看</button><br>
</form>

<form name="msgform" method="post" action="browse_name.php"  enctype="multipart/form-data" style="padding-top:100px;">

	  <div class="form-group">
	  <label for="selectName" style="font-family:Microsoft Yahei; font-size: 17px; font-weight:noraml; width:100%; padding-bottom:20px;">请选择姓名查看</label>

	  <select name="username" class="form-control" size="1" id="selectName" style="width:15%;">

	  <option>All</option>
	  <option>Jack</option>
	  <option>Marry</option>
	  <option>Franklin</option>
	  <option>Jerry</option>  
	  <option>Peter</option>
	  <option>Evik</option>
	  <option>Tom</option>
	  <option>Justin</option>
	  
	  </select>
	 </div>
	 <br>
	 <button type="submit" class="btn btn-default" name="Submit" style="margin-top:-15px;">查看</button><br>
  </table>
</form>
</div>
</body>
</html>