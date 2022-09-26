<!-- Guarda la informacion de la bases de datos -->
<?php
include("db.php");

if(isset($_POST['save_users'])){
  $Name_Users = $_POST['Name_Users'];
  $Pass_Users = $_POST['Pass_Users'];
  $Rol_Users = $_POST['Rol_Users'];

  $query = "INSERT INTO usuarios(Name_Users, Pass_Users, Rol_Users) VALUES ('$Name_Users','$Pass_Users','$Rol_Users')";
  $result = mysqli_query($conn, $query);

  if(!$result){
    die("Query Failed");
  }

$_SESSION['message'] = 'User saved succesfully';
$_SESSION['message_type'] = 'success';

  header("Location: index.php");

}

?>