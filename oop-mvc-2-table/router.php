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
                case 'create':
                    require './controller/LopController.php';
                    $lopController = new LopController();
                    $lopController->create();
                    break;
                case 'store':
                    require './controller/LopController.php';
                    $lopController = new LopController();
                    $lopController->store();
                    break;
                case 'edit':
                    require './controller/LopController.php';
                    $lopController = new LopController();
                    $lopController->edit();
                    break;
                case 'update':
                    require './controller/LopController.php';
                    $lopController = new LopController();
                    $lopController->update();
                    break;
                case 'delete':
                    require './controller/LopController.php';
                    $lopController = new LopController();
                    $lopController->delete();
                    break;
                default:
                    echo "Action không hợp lệ";
            }

            break;

        case 'sinh_vien':

            break;
        
        default: 
            echo "Không tìm thấy controller";
    }