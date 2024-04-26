<?php
require_once 'models/ProductModel.php';

class HomeController {
    public function index() {
        // Incluir el archivo de conexión
        require_once './conexion/conexion.php';
        
        // Crear una instancia del modelo de productos y pasar la conexión a la base de datos
        $productModel = new ProductModel($conn);
        
        // Llamar al método para obtener todos los productos
        $products = $productModel->getAllProducts();
        // Incluir la vista para mostrar los productos
        require_once 'views/products.php';
    }
}
?>
