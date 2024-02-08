<?php
require_once 'db.php';
require_once 'Model/UserModel.php';
require_once 'Controllers/UserController.php';
$mysqli = new mysqli("mysql", "my_user", "my_password", "my_database");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$query = file_get_contents("init.sql");

if ($mysqli->multi_query($query)) {
    echo "Requête init.sql exécutée avec succès.";
} else {
    echo "Erreur lors de l'exécution de la requête init.sql : " . $mysqli->error;
}
$userModel = new UserModel($conn);
$userController = new UserController($userModel);
$userController->getUsers();

$conn->close();
?>