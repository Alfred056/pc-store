<?php

require("../conexion/conexion.php");

class User {

    private $conn; // Propiedad para almacenar la conexión a la base de datos

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public $name;
    public $ape;
    public $email;
    public $pass;

    public function save() {
        $sql = "INSERT INTO user (name, ape, email, pass) VALUES ('$this->name', '$this->ape','$this->email', '$this->pass')";
    
    try {
        $stmt = $this->conn->query($sql);
        header("Location: ../views/login.php");
    } catch (PDOException $e) {
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
    }

    public function log() {
        $statement = $this->conn->prepare("SELECT * FROM user WHERE email = :email LIMIT 1");
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

?>
