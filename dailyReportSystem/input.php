<html>
<head>
<title>�ύ��־</title>
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
          <a class="navbar-brand" href="index.php">ʵ������־����ϵͳ</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
          <ul class="nav navbar-nav">
            <li class="active"><a href="input.php">�ύ��־</a></li>
            <li><a href="browse.php">�鿴��־</a></li>
			<li><a href="search.php">������־</a></li>
			<li><a href="manager.php">��־����</a></li>
			<li><a href="index.php">������ҳ</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
<div class="container">

<form role="form "name="msgform" method="post" action="write.php"  enctype="multipart/form-data" onsubmit="return checkmessage()">
	<legend style="font-family:Microsoft Yahei; font-size: 20px; font-weight:bold; ">�ύ��־</legend>
  <div class="form-group">
    <label for="inputName" style="font-family:Microsoft Yahei; font-size: 17px; font-weight:noraml">����</label>
    <input type="text" class="form-control" id="inputName" placeholder="��������" name="username">
  </div>
  <div class="form-group">
    <label for="inputWorkTime" style="font-family:Microsoft Yahei; font-size: 17px; ">�о�ʱ��</label>
    <input type="text" class="form-control" id="inputWorkTime" placeholder="���빤��ʱ��" name="researchtime">
  </div>
  <div class="form-group">
    <label for="researchContent" style="font-family:Microsoft Yahei; font-size: 17px; ">�о�����</label>
	<textarea name="content" class="form-control" id="researchContent" rows="8" placeholder="���빤����־"></textarea>
  </div>
  <button type="button" class="btn btn-default" onclick="verify()">�ύ</button>
  <!--<button type="submit" class="btn btn-default" name="Submit">�ύ</button>-->
</form>

</div>
</body>
</html>