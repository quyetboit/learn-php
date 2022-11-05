<?php
    require ('./env/connect-db.php');

    switch ($action) {
        case '': 
            $sql = "select * from sinh_vien";
            $result = $conn->query($sql);
            break;
        
        case 'store': 
            $sql = "insert into sinh_vien(fullname, age)
                    values ('$name', $age)";
            if ($conn->query($sql) !== true) {
                die ('Has error: ' . $conn->error);
            }
            break;

        case 'delete':
            $sql = "delete from sinh_vien where id = $id";
            if ($conn->query($sql) !== true) {
                die ('Has error: ' . $conn->error);
            };
            break;

        case 'edit':
            $sql = "select * from sinh_vien where id = $id";
            $result = $conn->query($sql);
            break;

        case 'update':
            $sql = "
                update sinh_vien
                set fullname = '$name',
                    age = $age
                where id = $id
            ";
            if ($conn->query($sql) !== true) {
                die ('Has error: ' . $conn->error);
            }
    }