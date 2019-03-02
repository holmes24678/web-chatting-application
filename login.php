<?php
if (isset($_POST['logout'])) {
	session_start();
	session_unset();
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<center><h3 style="margin-top:5%;">Chatting Application</h3></center>
	<fieldset class="form-control" style="margin-top: 7%; margin-left:32%;padding-left:2%;padding-top:5%;border-style: solid;border-width:0.5px;width: 35%;height:300px;">
			<legend>Log In</legend>
		<form action="chat.php" method="POST">
			Name:<br>
	<input style="width:80%;" type="text" name="name" class="" required><br>
	Password:<br><input style="width:80%;" type="password" required><br><br>
	<input type="submit" name="submit" value="submit">
</form></fieldset>
</body>
</html>