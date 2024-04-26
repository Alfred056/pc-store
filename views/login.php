
<?php
  /*
  require "../conexion/conexion.php";
  $error = null;

  if ($_SERVER["REQUEST_METHOD"]=="POST"){
     if(empty($_POST["email"]) || empty($_POST["pass"])){
        $error = "credeciales invalidad";
     }else{ 
        $statement = $conn ->prepare("SELECT * from user WHERE email = :email LIMIT 1");
        $statement->bindParam(":email",$_POST["email"]);
        $statement->execute();

        if($statement->rowCount()==0){
          $error="Credenciales invalidas.";
        }else{
          $user=$statement->fetch(PDO::FETCH_ASSOC);
          if(!password_verify($_POST["pass"],$user["pass"])){
            $error = "aca? :0.";
          }else{
            session_start();
            unset($user["pass"]);
            $_SESSION["user"] = $user;
            header("Location: ../index.php");
          }
        }
     }
  }
  */
?>

<?php require "header.php"?>

<div class="cont d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="row">
    <div class="col">
    <?php /*if($error): ?>
                    <p class ="text-danger">
                      <?= $error ?>
                    </p>
                  <?php endif */?>
        <form method="POST" action="../controllers/LoginController.php">
            <h1 class="text-center" style="padding-bottom: 30px; ">Iniciar Sesion</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass" >
            </div>
            <div class="mb-3">
                <div id="emailHelp" class="form-text">No se encuentra registrado? 
                    <a href="register.php">Registrese aqui</a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
  </div>
</div>


<?php require "footer.php"?>""