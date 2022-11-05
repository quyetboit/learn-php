<?php
    include ('./model/lop.model.php');
    include ('./model/sinh_vien.model.php');
    $action = "";
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    switch ($action) {
        case "":
            $sinh_vien = get_all_sinh_vien();
            include ('./view/sinh_vien/index.php');
            break;
        case "create":
            $lops = get_all_lop();
            include ('./view/sinh_vien/create.php');
            break;
        case "store":
            $ten = $_POST['name'];
            $tuoi = $_POST['age'];
            $ma_lop = $_POST['ma_lop'];
            create_sinh_vien($ten, $tuoi, $ma_lop);
            header('Location: index.php?controller=sinh_vien');
            break;
        case "delete":
            $id = $_GET['ma'];
            delete_sinh_vien_by_id($id);
            header('Location: index.php?controller=sinh_vien');
            break;
        case "edit":
            $lops = get_all_lop();
            $id = $_GET['ma'];
            $sinh_vien = get_sinh_vien_by_id($id);
            include ('./view/sinh_vien/edit.php');
            break;
        case "update":
            $id = $_POST['id'];
            $name = $_POST['name'];
            $tuoi = $_POST['age'];
            $ma_lop = $_POST['ma_lop'];
            update_sinh_vien_by_id($id, $name, $tuoi, $ma_lop);
            header('Location: index.php?controller=sinh_vien');
            break;
        default: 
            echo "Action không hợp lệ";
    }