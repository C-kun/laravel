<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="/static/js/jquery-1.8.3.min.js"></script>
	<title>ajax post</title>
</head>
<body>
	<button>获取Ajax响应数据</button>
</body>
<script type="text/javascript">
	// alert($);
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$("button").click(function(){
		$.post('/doajaxs',{},function(data){
			alert(data);
		});
	});
	
</script>
</html>