<!-- Pagina principal, acá esta todo mas organizado y limpio -->
<?php include("db.php")?>
 
<?php include("Includes/Footer.php")?>

<?php include("Includes/Header.php")?>


<div class="container p-4">
  <div class="row">
    <div class="col-md-4">

    <?php  if(isset($_SESSION['message'])){ ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?= $_SESSION['message']  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

    <?php session_unset(); }?>
    
 
    <div class="card card-body">

      <form action="save.php" method="POST">
        <div class="form-group">
          <input type="text" name="Name_Users" class="form-control" placeholder="Nuevo nombre de usuario:" autofocus>
          </div>

          <div class="form-group">
          <input type="text" name="Pass_Users" class="form-control" placeholder="Nueva contraseña:" autofocus>
          </div>

          <div class="form-group">
          <input type="text" name="Rol_Users" class="form-control" placeholder="Nuevo rol:" autofocus>
          </div>

         <div class="form-group">  
          <input type="submit" class="btn btn-success btn-block" name="save_users"  value="Enviar">
          </div>

      </form>

    </div>
    </div>
      <div class="col-md-8">
<table class="table table-bordered">
  <thead>
    <tr>
<!-- Headers  -->
      <th>Nombre de usuario</th>
      <th>Contraseña</th>
      <th>Rol</th>
      <th>Created At</th>
      <th>Actions</th>


    </tr>
  </thead>
  <tbody>
    <!-- Datos  -->
    <?php
     $query = "SELECT * FROM usuarios";
     $result_user = mysqli_query($conn,$query);

     while($row = mysqli_fetch_array($result_user)){?>
<tr>
  <td> <?php echo $row['Name_Users']  ?> </td>
  <td> <?php echo $row['Pass_Users']  ?> </td>
  <td> <?php echo $row['Rol_Users']  ?> </td>
  <td> <?php echo $row['created_at']  ?> </td>
 <td>
  <a href="edit.php?id=<?php echo $row['id']?>"class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
  <a href="delete.php?id=<?php echo $row['id']?>" class = "btn btn-danger"><i class="fa-solid fa-trash"></i></a>

 </td>


</tr>

  <?php } ?>
  
  </tbody>
</table>
    </div>
  </div>

</div>

<!-- Estilos XDDD -->
<style>
  a{
    color:white;
    text-decoration:none;
  }

  a:hover{
    color:green;
    text-decoration:none;

  
  }

  .form-group{
    margin-top:10px;
    margin-bottom:10px;

  }
</style>