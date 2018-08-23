<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="/static/js/jquery-1.8.3.min.js"></script>
	<title>ajax</title>
</head>
<body>
	<button>获取Ajax响应数据</button>
</body>
<script type="text/javascript">
	// alert($);
	$("button").click(function(){
		$.get('/doajax',{},function(data){
			alert(data);
		});
	});
	
</script>
</html>