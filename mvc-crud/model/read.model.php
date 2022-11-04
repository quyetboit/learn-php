<?php
    include ('./config/connect-db.php');

    $sql = "select * from sinh_vien";

    $result = $conn->query($sql);

    if ($result->num_rows <= 0) {
        die ('No data');
    }