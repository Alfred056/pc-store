<?php

class ProductModel {
    private $db;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($db) {
        $this->db = $db;
    }

    // Método para obtener todos los productos
    public function getAllProducts() {
        try {
            // Utilizar la conexión para realizar una consulta
            $stmt = $this->db->query('SELECT * FROM product');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            // Manejar cualquier excepción que ocurra durante la consulta
            echo "Error: " . $e->getMessage();
            return array(); // Devolver un array vacío en caso de error
        }
    }
}
?>


