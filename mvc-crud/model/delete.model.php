<?php
    include ('./config/connect-db.php');

    $sql = "delete from sinh_vien where id = $id";

    if ($conn->query($sql) === true) {
        header('location: /LEARN_PHP_ADVANCE/mvc-crud');
    } else {
        echo "Has error: " . $conn->error;
    }