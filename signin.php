<?php

include("db.php");

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_POST['signin'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = test_input($_POST['name']);
	    $email = test_input($_POST['email']);
	    $query = "INSERT INTO `users`(`name`, `email`)  VALUES ('$name','$email')";
	    $result = mysqli_query($con,$query);
	    if ($result) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>