<?php
// controllers/UserController.php
require_once 'models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getUsers();
        include 'views/user-list.php';
    }

    public function addUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->userModel->addUser($name, $email);
            header("Location: index.php");
        } else {
            include 'views/add-user.php';
        }
    }

    public function deleteUser($id) {
        $this->userModel->deleteUser($id);
        header("Location: index.php");
    }
}
?>
