    function validate()
    { 			
		if (msgform.username.value=="")
		{
			// ����û���Ϊ�գ�����ʾ������Ϣ
	        alert("�û�������Ϊ�գ�");
			msgform.username.focus();
			return false;
	    }
		if (msgform.researchtime.value=="")
		{
			// ����о�ʱ��Ϊ�գ�����ʾ������Ϣ
	        alert("�о�ʱ�䲻��Ϊ�գ�");
			msgform.researchtime.focus();
			return false;
	    }
		
			
		if (msgform.content.value=="")
		{
			// �����־����Ϊ�գ�����ʾ������Ϣ
	        alert("��־���ݲ���Ϊ�գ�");
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
				alert("��־�ύ�ɹ�");
			else
				alert("�����û�����ʱ���ʽ");
		}
	}
	xmlhttp.open("POST","write.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("username=" + msgform.username.value +"&researchtime="+ msgform.researchtime.value + "&content="+msgform.content.value);
}
