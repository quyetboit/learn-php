<?php
    require_once ('./env/connect.php');

    function get_all_sinh_vien() {
        $conn = connet();
        $sql = "select sinh_vien.id as id, sinh_vien.ten as ten, tuoi, lop.ten as ten_lop 
                from sinh_vien left join lop on sinh_vien.id_lop = lop.id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    function create_sinh_vien ($ten, $tuoi, $ma_lop) {
        $conn = connet();
        $sql = "insert into sinh_vien(ten, tuoi, id_lop) values ('$ten', $tuoi, $ma_lop)";
        $result = $conn->query($sql);
        $conn->close();
        if ($result !== true) {
            die ('Xảy ra lỗi khi thêm sinh viên ' . $conn->error);
        }
    }

    function delete_sinh_vien_by_id ($ma) {
        $conn = connet();
        $sql = "delete from sinh_vien where id = $ma";
        $result = $conn->query($sql);
        $conn->close();
        if ($result !== true) {
            die ('Xảy ra lỗi khi xoá sinh viên: ' . $conn->error);
        }
    }

    function update_sinh_vien_by_id ($ma, $ten, $tuoi, $ma_lop) {
        $conn = connet();
        $sql = "
            update sinh_vien
            set ten = '$ten',
                tuoi = $tuoi,
                id_lop = $ma_lop
            where id = $ma
        ";
        $result = $conn->query($sql);
        $conn->close();
        if ($result !== true) {
            die ('Xảy ra lỗi khi cập nhật sinh viên: ' . $conn->error);
        }
        
    }

    function get_sinh_vien_by_id($id) {
        $conn = connet();
        $sql = "select * from sinh_vien where id = $id";
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows === 0) {
            die ('Không có dữ liệu');
        }
        return $result->fetch_assoc();
    }