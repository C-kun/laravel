<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>req模板</title>
</head>
<body>
	<form action="/req" method="post">
		{{csrf_field()}}
		用户名: <input type="text" name="uname"><br>
		邮箱: <input type="text" name="email" value="{{old('email')}}"><br>
		电话: <input type="text" name="tel" value="{{old('tel')}}"><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>