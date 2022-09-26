<?php
include("db.php"); //Incluye la conexion

if(isset($_GET['id'])){ //Obtiene el ID para proceder a eliminarloa atravez de la accion
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query Fail in DELETE");
    }

    $_SESSION['message'] = 'User removed succefully';
    header("Location: index.php"); //Redirecciona la ubicacion de la pagina
}

?>