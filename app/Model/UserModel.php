<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUsers() {
        $result = $this->conn->query("SELECT * FROM users");

        if (!$result) {
            die('Erreur dans la requête SQL : ' . $this->conn->error);
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
