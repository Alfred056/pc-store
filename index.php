   <!--Barra de navegacion y contenido adicional-->
   <?php 
    session_start();
   ?>
   
   <?php require("./views/header.php")?>

    <div class="container text-center">
        <div class="row">   
        <?php
            // Requerir el controlador principal
            require_once 'controllers/HomeController.php';

            // Crear una instancia del controlador
            $controller = new HomeController();

            // Llamar al método index del controlador para manejar la solicitud
            $controller->index();
            ?>
        </div>        
    </div>

    <?php require("./views/footer.php")?>