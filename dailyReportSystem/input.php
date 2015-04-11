<html>
<head>
<title>提交日志</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/input.js"></script>
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
            <li class="active"><a href="input.php">提交日志</a></li>
            <li><a href="browse.php">查看日志</a></li>
			<li><a href="search.php">搜索日志</a></li>
			<li><a href="manager.php">日志管理</a></li>
			<li><a href="index.php">返回首页</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
<div class="container">

<form role="form "name="msgform" method="post" action="write.php"  enctype="multipart/form-data" onsubmit="return checkmessage()">
	<legend style="font-family:Microsoft Yahei; font-size: 20px; font-weight:bold; ">提交日志</legend>
  <div class="form-group">
    <label for="inputName" style="font-family:Microsoft Yahei; font-size: 17px; font-weight:noraml">姓名</label>
    <input type="text" class="form-control" id="inputName" placeholder="输入姓名" name="username">
  </div>
  <div class="form-group">
    <label for="inputWorkTime" style="font-family:Microsoft Yahei; font-size: 17px; ">研究时间</label>
    <input type="text" class="form-control" id="inputWorkTime" placeholder="输入工作时间" name="researchtime">
  </div>
  <div class="form-group">
    <label for="researchContent" style="font-family:Microsoft Yahei; font-size: 17px; ">研究内容</label>
	<textarea name="content" class="form-control" id="researchContent" rows="8" placeholder="输入工作日志"></textarea>
  </div>
  <button type="button" class="btn btn-default" onclick="verify()">提交</button>
  <!--<button type="submit" class="btn btn-default" name="Submit">提交</button>-->
</form>

</div>
</body>
</html>