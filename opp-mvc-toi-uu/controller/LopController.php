<?php
    $action = $_GET['action'] ?? 'index';
    switch ($action) {
        case 'index':
            require './model/Lop.php';
            $lops = (new Lop())->index();
            require './view/lop/index.php';
            break;
        case 'create': 
            require './view/lop/create.php';
            break;
        case 'store':
            require './model/Lop.php';
            $params = $_POST;
            $lop = new Lop();
            $lop->store($params);
            header('Location: ./index.php');
        case 'edit':
            require './model/Lop.php';
            $ma = $_GET['ma'];
            $lop = (new Lop())->get_by_id($ma);
            require './view/lop/edit.php';
            break;
        case 'update':
            require './model/Lop.php';
            $lopObject = new Lop();
            $lopObject->update($_POST);
            header('Location: ./index.php');
            break;
        case 'delete':
            require './model/Lop.php';
            $lopObject = new Lop();
            $ma = $_GET['ma'];
            $lopObject->delete($ma);
            header('Location: ./index.php');
            break;
        default:
            echo "Page not found";
    }