function checkmessage_date()
{ 			
		
		if (msgform.browsedate.value=="")
		{
			// 如果日期为空，则显示警告信息
	        alert("日期不能为空！");
			msgform.browsedate.focus();
			return false;
	    }
}					