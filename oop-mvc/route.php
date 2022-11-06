<?php
    require './controller/LopController.php';

    $action = $_GET['action'] ?? 'index';
    switch ($action) {
        case 'index':
            (new LopController())->$action();        
            break;
        default:
            echo "Page not found";
    }
    