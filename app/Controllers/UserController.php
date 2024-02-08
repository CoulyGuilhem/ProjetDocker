<?php
require_once 'Model/UserModel.php';

class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getUsers() {
        $users = $this->model->getUsers();
        include 'Views/Users.php';
    }
}
?>
