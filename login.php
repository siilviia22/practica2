<?php
require_once ("BL/UsuarisBL.php");
// Verificar si rebem dades del formulari
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenir dades del formulari (suposant que arriben per POST)
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Realizar saneamiento y validación (aquí deberías implementar tus propias reglas de validación)

    // Si los datos son válidos, realizar el proceso de inicio de sesión
    if (!empty($username) && !empty($password)) {
        // Crear un objeto Usuari y utilizar los métodos adecuados
        require_once 'usuari.php'; // Asegúrate de incluir el archivo que contiene la clase Usuari

        $usuari = new Usuari();
        if ($usuari->isValidPasswd($username, $password)) {
            // Redireccionar a dashboard.php si la validación es correcta
            header("Location: dashboard.php");
            exit();
        } else {
            // Redireccionar a error.php si la contraseña es incorrecta
            header("Location: error.php?msg=Contraseña incorrecta");
            exit();
        }
    } else {
        // Redireccionar a error.php si hay datos faltantes
        header("Location: error.php?msg=Por favor, ingresa usuario y contraseña");
        exit();
    }
} else {
    // Redireccionar a error.php si no se reciben datos POST
    header("Location: error.php?msg=Error en el envío de datos");
    exit();
}
?>