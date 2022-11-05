<?php
    require_once ('./env/connect.php');

    function get_all_lop() {
        $conn = connet();
        $sql = "select * from lop";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    function create_lop ($ten) {
        $conn = connet();
        $sql = "insert into lop(ten) values ('$ten')";
        $result = $conn->query($sql);
        $conn->close();
        if ($result !== true) {
            die ('Xảy ra lỗi khi thêm lớp ' . $conn->error);
        }
    }

    function delete_by_id ($ma) {
        $conn = connet();
        $sql = "delete from lop where id = $ma";
        $result = $conn->query($sql);
        $conn->close();
        if ($result !== true) {
            die ('Xảy ra lỗi khi xoá lớp: ' . $conn->error);
        }
    }

    function update_by_id ($ma, $ten) {
        $conn = connet();
        $sql = "
            update lop
            set ten = '$ten'
            where id = $ma
        ";
        $result = $conn->query($sql);
        $conn->close();
        if ($result !== true) {
            die ('Xảy ra lỗi khi cập nhật lớp: ' . $conn->error);
        }
        
    }

    function get_lop_by_id($id) {
        $conn = connet();
        $sql = "select * from lop where id = $id";
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows === 0) {
            die ('Không có dữ liệu');
        }
        return $result->fetch_assoc();
    }