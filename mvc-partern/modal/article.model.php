<?php
    include './env/connect.php';

    $sql = "SELECT * FROM article WHERE ma = $ma";

    $result = $conn->query($sql);

    if ($result->num_rows <= 0) {
        die('Không có dữ liệu');
    }