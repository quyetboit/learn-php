<?php
    include './env/connect.php';
    
    $ma = $_GET['ma'];

    $sql = "SELECT * FROM article WHERE ma = $ma";

    $result = $conn->query($sql);

    if ($result->num_rows <= 0) {
        die('Không có dữ liệu');
    }