<?php
/*

Definició de la classe Usuaris. Com a classe de la Capa de Negoci, haurà de controlar que tot el que
arriba de la capa de presentació és "processable" i, si és així, cridar a la capa de dades.

*/

// Creem/Obrim sessió
session_start();

// Requerim la classe de la capa de Dades
require_once('DL/DatabaseDL.php');

// Requerim les funcions de helpers (sanejament i validació)
require_once('helpers/validation.php');



class UsuarisBL{

    // Per ara, no cal que tingui cap propietat


    public function altaUsuari ($name, $surname, $email, $username, $password)
    {
    // Mètode d'alta d'usuari.
    // Fem control d'errors com a flash data a variables de Sessió
        $error = 0;

        
        // Sanegem
        $name = sanitizeDNI($name);
        $surname = sanitizeDNI($surname);
        $email = sanitizeDNI($email);
        $username = sanitizeDNI($username);
        $password = sanitizeDNI($password);

        // Validem
        if (validaNOM($name)){

            // Si tot és correcte, instanciem objecte de Capa de Dades
            $db = new Database ();
          
            // Cridem al mètode insertUser de la capa de dades. Si retorna 0 hi ha error
            if ( ! $db->insertUser($name, $surname, $email, $username, $password)) 
            {
                //Problema de validació d'alta a la BBDD
                $error = $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error a en alta a BBDD";
            }
        }
        else{
            //Problema de validació de DNI 
            $error = $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en validació DNI";
        }
        
        // Retornem com ha anat a la capa de presentació 
        return $error;
        if (validasurname($surname)){

            // Si tot és correcte, instanciem objecte de Capa de Dades
            $db = new Database ();
          
            // Cridem al mètode insertUser de la capa de dades. Si retorna 0 hi ha error
            if ( ! $db->insertUser($surname)) 
            {
                //Problema de validació d'alta a la BBDD
                $error = $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error a en alta a BBDD";
            }
        }
        else{
            //Problema de validació de DNI 
            $error = $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en validació DNI";
        }
        
        // Retornem com ha anat a la capa de presentació 
        return $error;
        if (validaemail($email)){

            // Si tot és correcte, instanciem objecte de Capa de Dades
            $db = new Database ();
          
            // Cridem al mètode insertUser de la capa de dades. Si retorna 0 hi ha error
            if ( ! $db->insertUser($email)) 
            {
                //Problema de validació d'alta a la BBDD
                $error = $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error a en alta a BBDD";
            }
        }
        else{
            //Problema de validació de DNI 
            $error = $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en validació DNI";
        }
        
        // Retornem com ha anat a la capa de presentació 
        return $error;
        if (validausername($username)){

            // Si tot és correcte, instanciem objecte de Capa de Dades
            $db = new Database ();
          
            // Cridem al mètode insertUser de la capa de dades. Si retorna 0 hi ha error
            if ( ! $db->insertUser($username)) 
            {
                //Problema de validació d'alta a la BBDD
                $error = $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error a en alta a BBDD";
            }
        }
        else{
            //Problema de validació de DNI 
            $error = $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en validació DNI";
        }
        
        // Retornem com ha anat a la capa de presentació 
        return $error;
        if (validapassword($password)){

            // Si tot és correcte, instanciem objecte de Capa de Dades
            $db = new Database ();
          
            // Cridem al mètode insertUser de la capa de dades. Si retorna 0 hi ha error
            if ( ! $db->insertUser($password)) 
            {
                //Problema de validació d'alta a la BBDD
                $error = $_SESSION["errorNumber"] = 2;
                $_SESSION["errorMsg"] = "Error a en alta a BBDD";
            }
        }
        else{
            //Problema de validació de DNI 
            $error = $_SESSION["errorNumber"] = 1;
            $_SESSION["errorMsg"] = "Error en validació DNI";
        }
        
        // Retornem com ha anat a la capa de presentació 
        return $error;


    }

    
    
    public function llistaUsuaris ()
    {
    // Mètode de llistat d'usuari.
    // No es fa cap mena de control d'errors...


        // Instanciem objecte de Capa de Dades
        $db = new Database ();

        // Fem crida al mètode getAll i retornem tot el resultat a la capa de presentació
        return ($db->getAll());
    }

}

?>