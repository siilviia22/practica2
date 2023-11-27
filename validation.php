
<?php

// Funcions de sanejament

function sanitizeDNI($dni)
{
//Eliminem espais en blanc a inici i al final
$dni = trim ($dni);
//Convertim caràcters especials
$dni = htmlspecialchars($dni);
//Passem a majúscules tot el contingut
$dni = strtoupper ($dni);

return $dni;
}


// Funcions de validació 

function validaNOM ($name){
  //Agafem l'últim caràcter de la cadena, incialment hauria de ser la lletra
  $letter = substr($name, -1);

  //Agafem tots els caràcters excepte l'últim, incialment haurien de ser els números
  $numbers = substr($name, 0, -1);
  
  // Comprovem que tenim una lletra, que tenim 8 caràcters i que són numèrics 
  if ( strlen($letter) <= 30 )
  {
    return true;
    } else{ 
  
 return false;
}
}

function validasurname ($surname){
  //Agafem l'últim caràcter de la cadena, incialment hauria de ser la lletra
  $letter = substr($surname, -1);

  //Agafem tots els caràcters excepte l'últim, incialment haurien de ser els números
  $numbers = substr($surname, 0, -1);
  
  // Comprovem que tenim una lletra, que tenim 8 caràcters i que són numèrics 
  if ( strlen($letter) <= 30 )
  {
    return true;
    } else{ 
  
 return false;
}
}
function validaemail ($email){
  //Agafem l'últim caràcter de la cadena, incialment hauria de ser la lletra
  $letter = substr($email, -1);

  //Agafem tots els caràcters excepte l'últim, incialment haurien de ser els números
  $numbers = substr($email, 0, -1);
  
  // Comprovem que tenim una lletra, que tenim 8 caràcters i que són numèrics 
  if ( strlen($letter) <= 30 )
  {
    return true;
    } else{ 
  
 return false;
}
}
function validausername ($username){
  //Agafem l'últim caràcter de la cadena, incialment hauria de ser la lletra
  $letter = substr($username, -1);

  //Agafem tots els caràcters excepte l'últim, incialment haurien de ser els números
  $numbers = substr($username, 0, -1);
  
  // Comprovem que tenim una lletra, que tenim 8 caràcters i que són numèrics 
  if ( strlen($letter) <= 50 )
  {
    return true;
    } else{ 
  
 return false;
}
}
function validapassword ($password){
  //Agafem l'últim caràcter de la cadena, incialment hauria de ser la lletra
  $letter = substr($password, -1);

  //Agafem tots els caràcters excepte l'últim, incialment haurien de ser els números
  $numbers = substr($password, 0, -1);
  
  // Comprovem que tenim una lletra, que tenim 8 caràcters i que són numèrics 
  if ( strlen($letter) <= 255 )
  {
    return true;
    } else{ 
  
 return false;
}
}

?>