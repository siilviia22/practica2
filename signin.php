<?php
require_once ("BL/UsuarisBL.php");
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//connexió a la BBDD
$conn = new mysqli($servername, $username, $password, $dbname); 

//consulta
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);