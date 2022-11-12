<?php

    $controller = $_GET['controller'] ?? 'base';
    switch ($controller) {
        case 'base':
            require './controller/Controller.php';
            $controller = new Controller();
            $controller->menu();
            break;
        case 'lop':
            
            $action = $_GET['action'] ?? 'get_all';

            switch ($action) {
                case 'get_all':
                    require './controller/LopController.php';
                    $lopController = new LopController();
                    $lops = $lopController->get_all();
                    require './view/lop/index.php';
                    break;
            }

            break;

        case 'sinh_vien':

            break;
        
        default: 
            echo "Không tìm thấy controller";
    }