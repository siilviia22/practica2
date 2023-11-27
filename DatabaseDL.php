<?php
/*

Definició de la classe Database. Com a classe de la Capa de Dasdes, haurà de donar servei
a les peticions que arribin a de la capa de negoci. 

Només aquí veurem comandes SQL.


*/

// Requerim config.php. Aquest arxiu contindrà les constants que necessitarem
// a la nostra aplicació, en aquest cas, nom del SGBD, usuari, pwd...
// Aquesta és la forma més eficient per fer futurs canvis 

require_once ("DL/config.php");

class Database{

  // Propietat privada. Només podrem modificar-la des d'aquesta classe.
  private $conn;

  // Constructor. Farem que obri directament una connexió
  public function __construct ()
  {
      $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  }

  // Mètode per fer consulta de tots els registres
  public function getAll ()
  {
      $sql = "SELECT id, dni FROM base";
      return ( $this->conn->query($sql) );
  }

  // Mètode per fer alta d'un registre
  public function insertUser ($name, $surname, $email, $username, $password)
  {
    $sql = "INSERT INTO base (dni) VALUES ('$name, $surname, $email, $username, $password')";
    return  ( $this->conn->query($sql) );
  }
}

?> 
