<?php require "header.php"?>



<div class="cont d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="row">
    <div class="col">
        <form action="../controllers/RegisterController.php" method="post">
            <h1 class="text-center" style="padding-bottom: 30px; ">Registrese</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="ape" name="ape">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <div class="mb-3">
                <div id="emailHelp" class="form-text">No se encuentra registrado? 
                    <a href="#">Registrese aqui</a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
  </div>
</div>


<?php require "footer.php"?>