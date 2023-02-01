<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo"
		 required minlength="3" maxlength="50" pattern="[a-zA-Z0-9 ]+">
    	<input type="email" name="email" placeholder="Email"
		 required pattern=".+@\w+\.\w+">
    	<input type="submit" name="signin">
    </form>
        <?php
        include("signin.php");
        ?>
</body>
</html>
