<?php
    require_once ("BL/UsuarisBL.php");
class Usuari {
    private $usuaris = []; // emmagatzemar usuaris

    // Método para agregar un usuario
    public function addUser($username, $password) {
        // Verificar si el usuario ya existe
        if ($this->isValidUser($username)) {
            return "El usuario '$username' ya existe.";
        }
        
        // Agregar usuario
        $this->usuaris[$username] = $password;
        return "Usuario '$username' agregado correctamente.";
    }

    // Método para verificar si la contraseña es válida para un usuario dado
    public function isValidPasswd($username, $password) {
        if ($this->isValidUser($username)) {
            return $this->usuaris[$username] === $password;
        }
        return false;
    }

    // Método para verificar si un usuario existe
    public function isValidUser($username) {
        return array_key_exists($username, $this->usuaris);
    }
}

// Ejemplo de uso:
$usuari = new Usuari();
echo $usuari->addUser("usuario1", "contraseña1") . "<br>"; // Agregar un usuario
echo $usuari->addUser("usuario2", "contraseña2") . "<br>"; // Agregar otro usuario
echo $usuari->isValidPasswd("usuario1", "contraseña1") ? "Contraseña válida.<br>" : "Contraseña inválida.<br>"; // Verificar contraseña válida
echo $usuari->isValidPasswd("usuario1", "contraseña2") ? "Contraseña válida.<br>" : "Contraseña inválida.<br>"; // Verificar contraseña inválida
echo $usuari->isValidUser("usuario1") ? "Usuario válido.<br>" : "Usuario inválido.<br>"; // Verificar usuario válido
echo $usuari->isValidUser("usuario3") ? "Usuario válido.<br>" : "Usuario inválido.<br>"; // Verificar usuario inválido
?>