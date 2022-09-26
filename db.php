  
  
  <?php

session_start(); //Initialize session for save information in the database page


  $conn = mysqli_connect( //Realiza la conexion 

'localhost', //Servidor
'root', //User
'', //Password
'crud_mysql' //Name DataBase

);


if(isset($conn)){ // Comprueba la conexion y dependiendo el resultado da determinado resultado
  #  echo "Funciona sí";
}

else{
    echo "Bueno miap, revisa bien klk";
}

?>