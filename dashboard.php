<?php
require_once ("BL/UsuarisBL.php");
// Simulació d'autenticació
$usuaris_validats = array(
    "usuari1" => "NomUsuari1",
    "usuari2" => "NomUsuari2"
);

// Comprovació d'autenticació
$usuari_actual = $_COOKIE['usuari'] ?? '';

// Redirecció a la pàgina d'error si l'usuari no està validat
if (!array_key_exists($usuari_actual, $usuaris_validats)) {
    header("error.php");
    exit;
}
?>
