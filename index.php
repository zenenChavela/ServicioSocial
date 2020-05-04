<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form action="scripts/login.php" method="POST">
			<div class="panel-login">
				<img class="login" src="img/user.png" alt="">
					<div class="form-group">
						<label for="">Usuario:</label>
						<input type="text" id="user" name="user" placeholder="Ingrese su usuario">
					</div>
					<div class="form-group">
						<label for="">Contraseña:</label>
						<input type="password" id="pass" name="pass" placeholder="Ingrese su contraseña">
					</div>
					<button class="btn" type="submit">Enviar</button>
			</div>
		</form>
	</div>
	<div class="footer">
		<p></p>
	</div>
</body>
</html>