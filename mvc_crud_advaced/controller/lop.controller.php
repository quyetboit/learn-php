<?php
    include ('./model/lop.model.php');
    $action = "";
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    switch ($action) {
        case "":
            $lops = get_all_lop();
            include ('./view/lop/index.php');
            break;
        case "create":
            include ('./view/lop/create.php');
            break;
        case "store":
            $ten = $_POST['name'];
            create_lop($ten);
            header('Location: index.php?controller=lop');
            break;
        case "delete":
            $id = $_GET['ma'];
            delete_by_id($id);
            header('Location: index.php?controller=lop');
            break;
        case "edit":
            $id = $_GET['ma'];
            $lop = get_lop_by_id($id);
            include ('./view/lop/edit.php');
            break;
        case "update":
            $id = $_POST['id'];
            $name = $_POST['name'];
            update_by_id($id, $name);
            header('Location: index.php?controller=lop');
            break;
        default: 
            echo "Action không hợp lệ";
    }