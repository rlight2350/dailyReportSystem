    function validate()
    { 			
		if (msgform.username.value=="")
		{
			// 如果用户名为空，则显示警告信息
	        alert("用户名不能为空！");
			msgform.username.focus();
			return false;
	    }
		if (msgform.researchtime.value=="")
		{
			// 如果研究时间为空，则显示警告信息
	        alert("研究时间不能为空！");
			msgform.researchtime.focus();
			return false;
	    }
		
			
		if (msgform.content.value=="")
		{
			// 如果日志内容为空，则显示警告信息
	        alert("日志内容不能为空！");
			msgform.content.focus();
			return false;
	    }		
		return true;
    }	

function verify(){
	
	if(!validate())
		return;
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if(xmlhttp.responseText == 'ok')
				alert("日志提交成功");
			else
				alert("请检查用户名或时间格式");
		}
	}
	xmlhttp.open("POST","write.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("username=" + msgform.username.value +"&researchtime="+ msgform.researchtime.value + "&content="+msgform.content.value);
}
