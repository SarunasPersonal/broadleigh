<?php
// index.php
require_once 'controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'addUser') {
        $controller->addUser();
    } elseif ($action == 'deleteUser' && isset($_GET['id'])) {
        $controller->deleteUser($_GET['id']);
    } else {
        $controller->index();
    }
} else {
    $controller->index();
}
