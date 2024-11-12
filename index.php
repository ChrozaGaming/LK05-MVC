<?php
require_once "controllers/UserController.php";

$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : ['/'];

$controller = new UserController();

if ($url[0] === 'create') {
    $controller->create();
} elseif ($url[0] === 'store') {
    $controller->store();
} elseif ($url[0] === 'edit' && isset($url[1])) {
    $controller->edit($url[1]);
} elseif ($url[0] === 'update' && isset($url[1])) {
    $controller->update($url[1]);
} elseif ($url[0] === 'delete' && isset($url[1])) {
    $controller->delete($url[1]);
} else {
    $controller->index();
}
