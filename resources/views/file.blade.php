<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file模板</title>
</head>
<body>
	<form action="/file" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		文件:<input type="file" name="sc"><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>