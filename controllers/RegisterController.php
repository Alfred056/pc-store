<?php
include_once '../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User($conn); // Pasar la conexión al constructor de User
    $user->name = $_POST['name'];
    $user->ape = $_POST['ape'];
    $user->email = $_POST['email'];
    $user->pass = password_hash($_POST["pass"], PASSWORD_BCRYPT); // ¡Nota importante! No almacenes contraseñas sin cifrar en producción.
    $user->save();
}
?>
