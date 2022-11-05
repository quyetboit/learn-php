<?php
    $action = '';

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    switch ($action) {
        case '': 
            include ('./model/sinh-vien.model.php');
            include ('./view/view-all.php');
            break;
        
        case 'create':
            include ('./view/create.view.php');
            break;

        case 'store':
            $name = $_POST['name'];
            $age = $_POST['age'];
            include ('./model/sinh-vien.model.php');
            header('Location: index.php');
            break;

        case 'delete':
            $id = $_GET['id'];
            include ('./model/sinh-vien.model.php');
            header('Location: index.php');
            break;

        case 'edit':
            $id = $_GET['id'];
            include ('./model/sinh-vien.model.php');
            include ('./view/edit.view.php');
            break;

        case 'update':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            include ('./model/sinh-vien.model.php');
            header('Location: index.php');
            break;

        default: 
            echo "Action is invalid!";
    }