<?php

include("conexion.php");

if (isset($_POST["registrar"])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['surname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1 
        ) {
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = trim($_POST['email']);
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO datos(nom, cognoms, email, username, contrassenya)
            VALUES('$name', '$surname', '$email', '$username', '$password')";
            $Resultado = mysqli_query($conex, $consulta);
            if ($Resultado){
            ?>
                <h3 class="success"> Tu registro se ha completado</h3>
            <?php
            } else {
            ?>
                <h3 class="error">Ha ocurrido un error</h3>
            <?php
            }
        } else {
            ?>
                <h3 class="error">Complete todos los campos</h3>
            <?php


    }

}
?>


