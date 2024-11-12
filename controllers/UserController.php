<?php
require_once "models/User.php";

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAll();
        require_once "views/user/index.php";
    }

    public function create() {
        require_once "views/user/create.php";
    }

    public function store() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->create($name, $email);
        header("Location: /");
    }

    public function edit($id) {
        $user = $this->userModel->getById($id);
        require_once "views/user/edit.php";
    }

    public function update($id) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userModel->update($id, $name, $email);
        header("Location: /");
    }

    public function delete($id) {
        $this->userModel->delete($id);
        header("Location: /");
    }
}
