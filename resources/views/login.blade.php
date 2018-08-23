<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录界面</title>
</head>
<body>
	<form action="/insert" method="post">
		{{csrf_field()}}
		用户名：<input type="text" name="uname"><br>
		密码: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass"><br>
		
	</form>
</body>
</html>
