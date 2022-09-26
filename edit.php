<?php
include("db.php");

if(isset($_GET['id'])){
  
    $id = $_GET['id'];
  
    $query = "SELECT * FROM usuarios WHERE id = $id";
    $result = mysqli_query($conn, $query);
  
    if(mysqli_num_rows($result) == 1 ){
       $row = mysqli_fetch_array($result);
       $Name_Users = $row['Name_Users'];
       $Pass_Users = $row['Pass_Users'];
       $Rol_Users = $row['Rol_Users'];

      # echo $Name_Users;
    }
  

   # header("Location: index.php");
  
  }

  if(isset($_POST['update'])){
    $id = $_GET['id'];

    $Name_Users = $_POST['Name_Users'];
    $Pass_Users = $_POST['Pass_Users'];
    $Rol_Users = $_POST['Rol_Users'];

    $query = "UPDATE usuarios set Name_Users = '$Name_Users', Pass_Users = '$Pass_Users', Rol_Users = '$Rol_Users' WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Process bad in update 38");
    }


    header("Location: index.php");
  }

?>


<?php include("includes/header.php") ?>
<!-- Formulario obtiene el id -->
<div class="container p-4">
    <div class="row">
        <div class="div-col-md4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST"> 

                    <div class="form-group">
                        <input type="text" name="Name_Users" value="<?php echo $Name_Users; ?>" class="form-control" placeholder="Update nick">
                    </div>

                    <div class="form-goup">
                    <input type="text" name="Pass_Users" value="<?php echo $Pass_Users; ?>" class="form-control" placeholder="Update pass">
                    </div>

                    <div class="form-goup">
                    <input type="text" name="Rol_Users" value="<?php echo $Rol_Users; ?>" class="form-control" placeholder="Update Rol">
                    </div>

                    <!-- Method POST name UPDATE -->
                    <button class="btn btn-success" name="update" type="submit">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>