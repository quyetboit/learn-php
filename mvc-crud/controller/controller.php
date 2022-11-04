<?php
    $action = '';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    switch ($action) {
        case 'create':
            include ('./view/create.view.php');
            break;
        
        case 'delete':
            $id = $_GET['id'];
            include ('./model/delete.model.php');
            break;

        case 'update':
            $id = $_GET['id'];
            include ('./view/update.view.php');
            break;

        default:
            include ('./model/read.model.php');
            include ('./view/read.view.php');
    }