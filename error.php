<?php
require_once ("BL/UsuarisBL.php");
// Inicia la sessió si no està iniciada
session_start();

// Verifica si hi ha un missatge d'error emmagatzemat en la variable de sessió
if (isset($_SESSION['missatge_error']) && !empty($_SESSION['missatge_error'])) {
    // Mostra el missatge d'error
    $missatge_error = $_SESSION['missatge_error'];
    
    // Esborra el missatge d'error de la variable de sessió (flash data)
    unset($_SESSION['missatge_error']);
} else {
    // En cas que no hi hagi cap missatge d'error, redirigeix a alguna altra pàgina o mostra un missatge per defecte
    header("Location: registre.php");
    exit;
}
?>