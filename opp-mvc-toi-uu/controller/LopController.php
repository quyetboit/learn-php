<?php
    $action = $_GET['action'] ?? 'index';
    switch ($action) {
        case 'index':
            require './model/Lop.php';
            $lops = (new Lop())->index();
            require './view/lop/index.php';
            break;
        default:
            echo "Page not found";
    }